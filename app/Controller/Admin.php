<?php
namespace Controller;
use OFFCN\Controller;
use OFFCN\Page;
use Model\Admin as Ad;
use Model\User;
class Admin extends Controller
{
	public function __construct()
	{
		if(empty($_SESSION['id']))
		{
			header("Location:index.php?c=User&a=login");
			exit;
		}
		parent::__construct();
	}
	public function crupt()
	{
		$user = new User();
		$id = (int)$_GET['cid'];
		$result = $user->where('id='.$id)->select();
				// var_dump($result);
		//unset($result[0]['id']);
		$this->assign('user',$result);
		return $this->display();
	}
	public function say()
	{
		$this->display();
	}
	public function form()
	{
		return $this->display();
	}
	public function index()
	{
		$user = new User();
		$num = 5;
		$_GET['page'] = $_GET['page'] ? (int)$_GET['page'] : 1;
		$offset = ($_GET['page'] - 1) * $num;
		$result = $user->limit([$offset,$num])->order('id desc')->select();
		//dump($result);
		$count = $user->count('id');
		unset($result[0]['password']);
		//dump($count);die;
		$page = new Page($count,5);
		$this->assign('page',$page->render());
		$this->assign('data',$result);
		return $this->display();
	}
	//用户修改
	public function reva()
	{
		$data['username'] = $_POST['username'];
		$data['email'] = $_POST['email'];
		$data['phone'] = $_POST['phone'];
		$data['awardType'] = (int)$_POST['awardType'];
		$data['brief'] = $_POST['brief'];
		$id= $_POST['uid'];
		//dump($data);die;
		$user = new User();
		if($id){
			$result = $user->where('id='.'\''.$id.'\'')->update($data);
			if($result)
			{
				return $this->success('更新成功','?c=Admin&a=index');
			}else{
				return $this->error('更新失败');
			}			
		}else{
			$result = $user->add($data);
			if($result)
			{
			return $this->success('添加成功','?c=Admin&a=index');
			}else{
				return $this->error('添加失败');
			}	
		}

	}
	public function delUser()
	{	
		if(empty($_POST)){
			$this->error('你弄啥类~','?c=Admin&a=index');
			die();
		}
		//echo json_encode($_POST['uid']);die;
		$data['id'] = $_POST['uid'];
		$user = new User();
		if(is_array($data['id'])){
			foreach ($data['id'] as $key => $value) {
				$value = (int)$value;
				$result = $user->where('id='.'\''.$value.'\'')->delete();
			}
		}else{
			$result = $user->where('id='.'\''.$data['id'].'\'')->delete();
		}
		if($result){
			echo json_encode(['status'=>1,'msg'=>'删除成功']);
		}

	}
	public function logOut()
	{
		session_destroy();
		return $this->success('退出成功','?c=User&a=login');
	}

}
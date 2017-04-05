<?php
namespace Controller;
use OFFCN\Controller;
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
	public function index()
	{
		$user = new Ad();
		$id = $_SESSION['id'];
		$result = $user->where('id='.$id)->select();
				// var_dump($result);
		unset($result[0]['id']);
		unset($result[0]['password']);

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
	public function table()
	{
		$user = new User();
		$result = $user->select();
		$this->assign('data',$result);
		return $this->display();
	}
	//用户修改
	public function reva()
	{
		$data['username'] = $_POST['username'];
		$data['email'] = $_POST['email'];
		$data['phone'] = $_POST['phone'];
		$data['qq'] = $_POST['qq'];
		$data['brief'] = $_POST['brief'];
		$user = new Ad();
		$id = $_SESSION['id'];
		$result = $user->where('id='.'\''.$id.'\'')->update($data);
		if($result)
		{
			return $this->success('更新成功');
		}else{
			return $this->error('更新失败');
		}
	}
	public function delUser()
	{
		
		echo json_encode($_POST['uid']);
		$data['id'] = $_POST['uid'];
		if(is_array($data)){
			foreach ($data as $key => $value) {
				$value = (int)$value;
				$user = new User();
			}
		}

	}
	public function logOut()
	{
		session_destroy();
		return $this->success('退出成功','?c=User&a=login');
	}

}
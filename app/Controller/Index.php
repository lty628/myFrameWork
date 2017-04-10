<?php
namespace Controller;
header("Content-type:text/html;charset=utf-8");
use OFFCN\Controller;
use Model\Admin as Ad;
use Model\User;
class Index extends Controller
{
	// public function __construct()
	// {
	// 	if(empty($_SESSION['id']))
	// 	{
	// 		header("Location:index.php?c=User&a=login");
	// 		exit;
	// 	}
	// 	parent::__construct();
	// }
	public function index()
	{
		// $user = new Ad();
		$user = new User();
		//$result = $user->fields('username,phone,awardType')->select();
		// $id = $_SESSION['id'];
		// $result = $user->where('id='.$id)->select();
		// 		// var_dump($result);
		// unset($result[0]['id']);
		// unset($result[0]['password']);

		// $this->assign('user',$result);
		//$this->assign('data',$result);
		return $this->display();
	}
	//发送获奖名单。
	public function getInfo()
	{
		header("Access-Control-Allow-Origin: *");//允许跨域访问		
		$user = new User();
		$result = $user->fields('username,phone,awardType')->order('id desc')->select();
		echo json_encode($result);
		return true;
	}
	public function user()
	{
		header("Access-Control-Allow-Origin: *");//允许跨域访问
		//echo json_encode($_POST);
		$data['username'] = trim($_POST['username']);
		$data['phone'] = trim($_POST['phone']);
		//定义两个方法专门验证姓名和手机号！还没写
		if(!$data['username'] || !$data['phone']){//状态为0那么说明抽奖失败了，返回消息结束！
			echo json_encode(['status'=>0,'msg1'=>'请输入正确的内容','msg2'=>'点击分享给小伙伴']);
			return false;
		}
		if(strlen($data['phone']) != 11){
			echo json_encode(['status'=>0,'msg1'=>'请输入正确的手机号','msg2'=>'点击分享给小伙伴']);
			return false;
		}
		$data['updatetime'] = time();
		$yestTime = strtotime('-1 day');//昨天刺客时间
		$user = new User();
		$result = $user->fields('id,username,password,updatetime')->where('username='.'\''.$data['username'].'\''.' and phone='.'\''.$data['phone'].'\'')->select();//二维数组
		//echo json_encode($result);
		if($result && $yestTime <= $result['updatetime']){
			//说明可以抽奖
			$user->where('username='.'\''.$data['username'].'\'')->update($data);
			$this->bigPrise($data['phone'],$result['id']);//抽奖去

		}elseif(!$result){ //查不到数据，说明数据库没内容
			$returnVa = $user->add($data);//返回值
			if($returnVa){
				$this->bigPrise($data['phone'],$returnVa);//抽奖去
			}else{
				echo json_encode(['status'=>0,'msg1'=>'用户未成功插入数据库','msg2'=>'点击分享给小伙伴']);
				return false;
			}
		}elseif($result && $yestTime >= $result['updatetime']){//已经抽过奖，但不满足一天
			echo json_encode(['status'=>0,'msg1'=>'抱歉！','msg2'=>'您今天的抽奖机会已使用完明天再来试试吧']);
			return false;
		}
	}
	//不懂的访问这里查一查
	public function myDb()
	{
		// $user = new User();
		// $result = $user->select();//二维数组
		// dump($result);
		echo strtotime('-1 day');
		 echo  '<br>';
		echo time();
	}
	//私有的抽奖方法
	private function bigPrise($onlyId = '',$who = '')
	{
		$num =  Mt_rand(0,99);
		$user = new User();
		$data['award'] = substr(md5($onlyId), 0,16);
		if($num<10){
			$data['awardType'] = 1;//1为金榜题名
			$user->where('id='.'\''.$who.'\'')->update($data);
			echo json_encode(['status'=>1,'msg2'=>'价值为1000元的面授代金券','msg1'=>'恭喜您抽中金榜题名签','url'=>'?c=Index&a=checkUrl&award='.$data['award']]);//10%中奖率
		}elseif($num<50){
			$data['awardType'] = 2;//2为励精图治
			$user->where('id='.'\''.$who.'\'')->update($data);
			echo json_encode(['status'=>2,'msg2'=>'价值为500元的面授代金券','msg1'=>'恭喜您抽中励精图治签','url'=>'?c=Index&a=checkUrl&award='.$data['award']]);//40%中奖率			
		}elseif($num<80){
			$data['awardType'] = 3;//为学而不厌
			$user->where('id='.'\''.$who.'\'')->update($data);
			echo json_encode(['status'=>3,'msg2'=>'价值为300元的面授代金券','msg1'=>'恭喜您抽中学而不厌签','url'=>'?c=Index&a=checkUrl&award='.$data['award']]);//30%中奖率		
		}else{
			$data['awardType'] = 4;//开卷有益
			$user->where('id='.'\''.$who.'\'')->update($data);
			echo json_encode(['status'=>4,'msg2'=>'奖品为全真模拟试卷一套','msg1'=>'恭喜您抽中开卷有益签','url'=>'?c=Index&a=checkUrl&award='.$data['award']]);//20%中奖率					
		}
		return true;
	}
	public function checkUrl()
	{
		//检测Url的方法，可能用不到
		dump($_GET['award']);
	}
}
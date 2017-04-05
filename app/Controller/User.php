<?php
namespace Controller;
use OFFCN\Controller;
use Model\Admin;
class User extends Controller
{
	public function index()
	{
		$this->display('User/login.html');
	}
	public function login()
	{
		$this->display();
	}
	public function register()
	{
		$this->display();
	}
	public function checkLogin() 
	{
		if(isset($_SESSION['id']))
		{
			$this->success('您已登陆，请勿重复登陆','?c=Admin');
			exit;
		}
		$user = new Admin();
		$_POST['username'] = trim($_POST['username']);
		$_POST['password'] = trim($_POST['password']);
		$result = $user->fields('id,username,password')->where('username='.'\''.$_POST['username'].'\'')->select();
		if($result)
		{
			if($result[0]['password'] == md5($_POST['password']))
			{
				$_SESSION['id'] = $result[0]['id'];
				$this->success('登陆成功','?c=Admin&a=index');
			}else{
				$this->error('密码错误','?c=User&a=login');
			}
		}else{
			$this->error('用户不存在','?c=User&a=login');
		}
	}
	public function registerUser()
	{
		if($_POST['password'] != $_POST['repassword'])
		{
			return $this->success('两次密码不一致','?c=User&a=register',3);
		}
		if(strlen($_POST['password'])<6)
		{
			return $this->error('密码长度小于6位','?c=User&a=register');
		}	
		$user = new Admin();
		$allUser = $user->fields('username')->select();
		foreach ($allUser as $key => $value) {
			if($value['username'] == $_POST['username'])
			{
				return $this->error('用户已存在');
			}
		}
		$data['username'] = $_POST['username'];
		$data['password'] = md5($_POST['password']);
		$result = $user->add($data);
		if($result)
		{
			return $this->success('注册成功');
		}else{
			return $this->error('注册失败','?c=User&a=register');
		}
	}
}
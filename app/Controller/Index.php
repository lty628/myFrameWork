<?php
namespace Controller;
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
		// $id = $_SESSION['id'];
		// $result = $user->where('id='.$id)->select();
		// 		// var_dump($result);
		// unset($result[0]['id']);
		// unset($result[0]['password']);

		// $this->assign('user',$result);
		return $this->display();
	}
}
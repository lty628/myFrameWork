<?php

class Init
{
	protected static $loadClass;
	public static function start()
	{
		session_start();
		self::dC();//自定义常量
		$Psr4 = include 'Psr4.php';
		$Psr4 = include 'global.func.php';
		self::chackPathInfo();
		$config = include '../config/namespace.php';
		$GLOBALS['config'] = include '../config/config.php';
		self::$loadClass =  new Psr4();
		self::$loadClass->myAuto();
		self::$loadClass->addNameSpace($config);
		self::newClass();
	}
	protected static function chackPathInfo()
	{
		$pathinfo =  $_SERVER['PATH_INFO'];
		$pathArr = explode('/', $pathinfo);
		if($pathArr[1]) {
			// header('location:'.__ROOT__);
			exit('访问地址不合法');
		}
	}
	protected static function dC()
	{

		if($_SERVER['REQUEST_URI']){
			$uri = self::checkUri($_SERVER['REQUEST_URI']);
			$serRoot = 'http://'.$_SERVER['SERVER_NAME'].$uri;
			define(__ROOT__, $serRoot);
		}
	}
	protected static function checkUri($uri)
	{
		$pos = stripos($uri,'?');
		if($pos){
			return substr($uri,0,$pos);
		}else{
			return $uri;
		}
	}
	protected static function newClass()
	{
		$c = $_GET['c'] ? $_GET['c'] : 'Index';
		$controller = 'Controller\\'.$c;
		$way = $_GET['a'] ? $_GET['a'] : 'index';
		call_user_func(array(new $controller(),$way));
	} 
}
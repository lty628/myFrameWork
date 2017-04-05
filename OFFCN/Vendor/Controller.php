<?php
namespace OFFCN;
//控制器父类
class Controller extends Tpl
{
public function __construct()
	{
		parent::__construct($GLOBALS['config']['TPL_CACHE_DIR'], $GLOBALS['config']['TPL_DIR'], $GLOBALS['config']['TPL_LIFETIME']);
		$this->assign('sr',__ROOT__);
	}

	public function success($msg='', $url = null, $time = 3)
	{
		if($url == null)
		{
			if(isset($_SERVER['HTTP_REFERER'])){
				$url = $_SERVER['HTTP_REFERER'];
			}
		}
		$this->assign('msg', $msg);
		$this->assign('url', $url);
		$this->assign('time', $time);
		$this->display('success.html');
	}

	public function error($msg='', $url = null, $time = 3)
	{
		if($url == null)
		{
			$url = $_SERVER['HTTP_REFERER'];
		}
		$this->assign('msg', $msg);
		$this->assign('url', $url);
		$this->assign('time', $time);
		$this->display('error.html');
		exit();
	}

	public function display($filePath = null, $isExecute = true, $uri = null)
	{
		$_GET['c'] = $_GET['c'] ? $_GET['c'] : 'Index';
		$_GET['a'] = $_GET['a'] ? $_GET['a'] : 'index';
		if($filePath == null)
		{
			$filePath = strtolower($_GET['c']).'/'.$_GET['a'].'.html';
		}

		parent::display($filePath, $isExecute, $uri = null);
	}
	public function dump($prop)
	{
		echo '<pre>';
		var_dump($prop);
		echo '</pre>';
	}
}
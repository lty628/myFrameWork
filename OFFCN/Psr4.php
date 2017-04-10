<?php
/**
* 
*/
class Psr4 
{
	public $nameSpace = [];
	//自动加载
	public function className($name)
	{
		$name = str_replace('\\', '/', $name);
		 //echo $name;
		$position = strrpos($name, '/');
		$file = substr($name, $position+1);
		// echo $file;
		$path = substr($name, 0,$position+1);
		// echo $path;
		$this->chackPath($file,$path);
	}
	// 检查路径
	protected function chackPath($file,$path)
	{
		$path = rtrim($path,'/').'/';
		if($this->checkSpace($path))
		{
			$finalFile = $this->checkSpace($path).$file;
			$this->includeFile($finalFile);
		}else{
			echo  '不合法的路径，请检查配置文件';
			return false;
		}
	}
	//检查路径是否合法
	protected function checkSpace($path)
	{
		foreach ($this->nameSpace as $key => $value) {
			if($value[$path]){
				return $value[$path];
			}
		}
		return false;
	}
	//包含文件
	public function includeFile($finalFile)
	{
		if (!include '../'.$finalFile.'.php') {
			echo  '错误，文件包含失败';
			return false;
		}
	}
	//增加命名空间
	public function addNameSpace($space)
	{
		foreach ($space as $key => $value) {
			$key = str_replace('\\', '/', trim(trim($key),'/').'/');
			$value = str_replace('\\', '/', trim(trim($value),'/').'/');
			$this->nameSpace[][$key] = $value;
		}
	}
	public function myAuto()
	{
		spl_autoload_register(array('Psr4','className'));
	}
}

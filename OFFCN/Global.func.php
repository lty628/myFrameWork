<?php
//这里是定义全局函数的，函数库。
//友好的输出。
function dump($para)
{
	echo '<pre>';
	var_dump($para);
	echo '</pre>';
}
//学习tp3.2咱也来个单字母函数。就一个~~~~~
function M($name='', $tablePrefix='',$connection='') {
    static $_model  = array();
    if(strpos($name,':')) {
        list($class,$name)    =  explode(':',$name);
    }else{
        $class      =   'OFFCN\\Model';
    }
    $guid           =   (is_array($connection)?implode('',$connection):$connection).$tablePrefix . $name . '_' . $class;
    if (!isset($_model[$guid]))
        $_model[$guid] = new $class($name,$tablePrefix,$connection);
    return $_model[$guid];
}
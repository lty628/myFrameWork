<?php
/**
* 模板引擎类
*/
class Tpl
{   
    public $tpl = '';//模板目录
    public $file = '';//文件名
    public $cache = '';//缓存目录
    public $pump = [];//储存变量
    public $time = 3600;//设置过期时间
    
    public function __construct($tpl = '',$file = '',$cache = '',$time=3600)
    {
       $this->tpl = rtrim($this->checkPath($tpl),'/').'/';
       $this->file = $file;
       $this->cache = rtrim($this->checkPath($cache),'/').'/';
       $this->time = $time;
    }
    public function display($tpl=$this->tpl,$cache=$this->cache)
    {
         $filePath = $this->checkFile($this->tpl.$this->file);
         if($filePath){
            $this->getTpl($filePath);
         }
    }
    //取得模板缓存并进行处理
    protected function getTpl($file)
    {
        $str = file_get_contents($file);
        $arr = [
            '{if}'=>'<?php if(\1) ?>',
            '{else}'=>'',
            ''=>'',
            ''=>'',
            ''=>'',
            ''=>'',
            ''=>'',
        ];
        foreach ($arr as $key => $value) {
            str_replace($key, replace, subject)
        }

    }
    //assign分配变量
    public function assign($str,$val)
    {
        $this->pump[$str] = $val;
        extract( $this->pump);
    }
    protected function checkFile($path)
    {
        if(file_exists($path) && is_readable($path)){
            return $path;
        }else{
            return false;
        }
    }
    public function checkPath($path)
    {
        if(file_exists($path) && is_dir($path)){
            if(is_readable($path) && is_writable($path)){
                return $path;
            }else{
                chmod($path, 0777);
                return $path;
            }
        }else{
            mkdir($path,0777);
            return $path;
        }
    }
}
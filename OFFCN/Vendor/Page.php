<?php
namespace OFFCN;
class Page
{
	
	//总条数
	protected $total;
	//总页数
	protected $pageCount;
	//当前页码
	protected $page;
	//每页显示数
	protected $num;
	//URL
	protected $url;
	//偏移$offset
	protected $offset;
	
	
	//初始化一批成员属性
	//总页数
	//每页显示数
	//总条数
	//当前页码
	//url
	public function __construct($total, $num = 5)
	{
		$this->total = ($total > 0) ?(int) $total : 1;
		$this->num = $num;
		$this->pageCount = $this->getCount();
		$this->page = $this-> getPage();
		$this->url = $this->getUrl();
	}
	
	public function limit()
	{
		$offset = ($this->page - 1) * $this->num;
		$str = $offset .',' .$this->num; 
		return $str;
	}
	
	public function first()
	{
		return $this->setUrlString('page=1');
	}
	
	public function next()
	{
		$page = ($this->page > $this->pageCount) ? $this->pageCount : ($this->page + 1);
		if($page>= $this->pageCount){
			$page = $this->pageCount;
		}
		return $this->setUrlString('page='.$page);
	}
	
	public function prev()
	{
		$page = ($this->page < 2) ? 1 : ($this->page - 1);
		
		return $this->setUrlString('page='.$page);
		
	}
	
	public function end()
	{
		return $this->setUrlString('page='.$this->pageCount);
	}
	
	public function render()
	{
		return [
			'first' => $this->first(),
			'next' => $this->next(),
			'prev' => $this->prev(),
			'end' => $this->end(),
 		];
	}
	
	protected function setUrlString($page)
	{
		if (strpos($this->url,'?')) {
		  $url = $this->url .'&'.$page;	
		} else {
		  $url = $this->url .'?'.$page;
		}
		return $url;
	}
	
	//设置 url的成员方法
	//协议 http://
	//主机www.baidu.com
	//$_SERVER['SERVER_PORT']端口

	//文件路径  parse_url   path  query
	// $_SERVER['REQUEST_URI']   /a/b/index.php?username=123
	//参数
	protected function getUrl()
	{
		$path = $_SERVER['REQUEST_URI'];
		
		$parse = parse_url($path);
	
		if (isset($parse['query'])) {
			
			parse_str($parse['query'],$query);
			unset($query['page']);
			$path = $parse['path'] .'?'.http_build_query($query);
		}
		
		$path = rtrim($path,'?');
		
		$protocal = (
						isset($_SERVER['SERVER_PORT']) 
						&&
						$_SERVER['SERVER_PORT'] == 443
					) ? 'https://' : 'http://';
		
		
		if ( 80 == $_SERVER['SERVER_PORT']) {
			$url = $protocal . $_SERVER['SERVER_NAME'].$path;
		} elseif ( 443 == $_SERVER['SERVER_PORT']  ) {
			$url = $protocal . $_SERVER['SERVER_NAME'].$path;
		} else {
			$url = $protocal . $_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$path;
		}
		
		return $url;
		
	}
	
	
	
	protected function getPage()
	{
		if (isset($_GET['page'])) {
			return (int) $_GET['page'];
		} else {
			return 1;
		}
	}
	
	protected function getCount()
	{
		return ceil($this->total / $this->num);
	}
	
	//render,一次性输出：上一页，下一页，首页，尾页
	
	//未来数据库做准备的一次性输出limit的值
	
	//上一页
	
	//下一页
	
	//总页数
	
	//最后一页
	
	//首页
	
	//得到url的成员属性
	
	
	
	
	
}
// JavaScript Document

	//复制链接
function jsCopy(){  
	 if((!!window.ActiveXObject || "ActiveXObject" in window)==false){
	 	alert("您的浏览器不支持复制粘贴，请手动复制粘贴")
	 }else{
	 	 var e=document.getElementById("net-address");//对象是contents   
        e.select(); //选择对象   
        tag=document.execCommand("Copy"); //执行浏览器复制命令  
        if(tag){
          $(".href").css("display","none");
          $(".copy").css("display","block");
        }  
	 }
}   

$(function(){
	
	jQuery(".winner").slide({mainCell:"ul",autoPlay:true,effect:"topMarquee",vis:9,interTime:100});
	$(".winner ul li:even").css("background","#fef3f2");
	$(".winner ul li:odd").css("background","#fce2e2");
	//底部年份获取			
	var day=new Date();
		 var    d = day.getFullYear();
		$(".zg_footer i").html(d)
			 
	//底部年份获取			
	var day=new Date();
		 var    d = day.getFullYear();
		$(".zg_footer i").html(d)
			 
	//抽奖
		$(".zg_draw p").click(function(){
				$(this).addClass("quickly-shake")
				setTimeout(function(){
				$(".ui-lot").addClass("rotate-in")
			},2000)
			
				setTimeout(function () {
					 $(".person").show();
					 $(".mask").show();
					 $(".zg_draw p").removeClass("quickly-shake")
					 $(".ui-lot").removeClass("rotate-in")
				}, 3000);
			
			})
		$(".person .close").click(function(){
		 	$(".person").hide();
			$(".mask").hide();
		 })	
	//联系我们
	$(".zg_contact_tit li").each(function(index) {
        $(this).click(function(){
				$(this).addClass("hover").siblings().removeClass("hover");
				$(".zg_contact_cent").hide();
				$(".zg_contact_cent").eq(index).show();
			})
    });
		
	 //返回顶部
	 $(".zg_fwin p").click(function(){
		 	$("html,body").stop().animate({scrollTop:0})
		 })

	
	
	$(".close").click(function(){
			$(".reward300").hide();
			$(".reward500").hide();
			$(".reward1000").hide();
			$(".succeed").hide();
			$(".mask").hide();
		})
		
	$(".get").click(function(){
		$(".succeed").show();
		$(".mask").show();
		$(this).parent().css("display","none");
	})

})
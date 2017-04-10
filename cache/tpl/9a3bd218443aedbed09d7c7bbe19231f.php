<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
	<link rel="stylesheet" type="text/css" href="static/home/css/lottery.css"/>
    <script language="javascript" src="static/home/js/jquery1.42.min.js"></script>
    <script language="javascript" src="static/home/js/myAjax.js"></script>
	<script language="javascript" src="static/home/js/js.js"></script>
    </head>
	<body>
		<div class="top">
			<div class="top-con">
				<div class="icon">
					<a href="#" target="_blank"><img src="static/home/img/icon.jpg"/></a>
				</div>
				<div class="top-text">
					<ul>
						<li><a href="javascript:;">政法干警考试网</a></li>
						<li>|</li>
						<li><a href="javascript:;">中公教育</a></li>
						<li>|</li>
						<li><a href="javascript:;">面授课程</a></li>
						<li>|</li>
						<li><a href="javascript:;">网校课程</a></li>
						<li>|</li>
						<li><a href="javascript:;">图书商场</a></li>
				    </ul>
				</div>
				<div class="tel">
					咨询电话：400-6300-966
				</div>
			</div>
		</div>
		<div class="banner">
			<div class="con">
				
			</div>
		</div>
		<div class="gong">
			 <div class="con">
			 	<div class="gong-top">
			 		<img src="static/home/img/gong-top.jpg"  /> 
			 	</div>
			 	<div class="gong-bot">
			 		<p class="p1">温馨提示</p>
			 		<div class="hint">
				 		<div class="p2">
				 			<p class="flow">1</p>
				 			<p>活动期间，每个用户每天仅可参与一次抽签，机会宝贵，请谨慎使用</p>
				 		</div>
				 		<div class="p3">
				 			<p class="flow">2</p>
				 			<p>您在抽签活动中获得的所有奖品，请于4月15日前兑换使用，逾期作废，谢谢配合</p>
				 		</div>	
			 		</div>
                    <!--抽奖-->
                    <div class="zg_draw">
               	    <p ><img src="static/home/img/zg_draw02.png" width="215" height="377"></p>
               	    <img src="static/home/img/zg_draw03.png" width="45" height="167" class="ui-lot"> </div>
                     <!--抽奖 end-->
	                <div class="winner">
	                	<div class="head">
	                		中签名单
	                	</div>
                        <div class="zg_win_bot">
	                	<ul id="getInfo">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>

	  <!--               	<?php foreach($data as $key=>$val) :?>
	                		<li><span><?=$val['username'];?>&nbsp;<?=$var['phone'];?>&nbsp;<?=$val['awardType'];?></span></li>
	                	<?php endforeach;?> -->
	                	</ul>
                        </div>
	                	<div class="foot">  		
	                	</div>
	                </div>		 	
			 	</div>
			 </div>
		</div>
		<div class="mask" id="mask"></div>
		<div class="person">
			<p class="info1">请填写个人信息</p>
			<p class="info2">千元好礼等你来抽！</p>
			<p class="info3">动动小手，拼手气！</p>
			<div class="named">
				<span>姓名</span>
				<input type="text" id="username" />
			</div>
			<div class="tel">
				<span>电话</span>
				<input type="text" id="phone" />
			</div>
			<div class="lottery">
				<a href="javascript:;" id="loginbtn">
				  
				</a>
			</div>
			<a class="close" href="javascript:;">
			</a>
			<div class="waring">
				<p class="info4">1、为方便您领取奖品，请填写您真实的姓名、电话</p>
			    <p class="info5">2、信息填写完整即可参加抽签活动</p>
			</div>
		</div>
        <!--恭喜您抽中金榜提名签-->
		<div class="reward1000" id="showDiv">
			<a class="close" href="javascript:;"></a>
			<div class="reward-name">
				<p class="p1" id="p1"></p>
				<p class="p2" id="p2"></p>
			</div>
			<a class="get" href="javascript:;" id="get" sr="<?=$sr;?>"></a>
			
		</div>
        <!--恭喜您抽中励精图治签-->
<!-- 		<div class="reward500">
			<a class="close" href="javascript:;"></a>
			<div class="reward-name">
				<p class="p1">恭喜您抽中励精图治签</p>
				<p class="p2">奖品为500元的面授代金券</p>
			</div>
			<a class="get" href="javascript:;"></a>
		</div>
        恭喜您抽中学而不厌签
		<div class="reward300" >
			<a class="close" href="javascript:;"></a>
			<div class="reward-name">
				<p class="p1">恭喜您抽中学而不厌签</p>
				<p class="p2">奖品为300元的面授代金券</p>
			</div>
			<a class="get" href="javascript:;"></a>
		</div> -->
        <!--恭喜您领取成功-->
		<div class="succeed">
			<a class="close" href="javascript:;"></a>
			<p class="succeed-text">
				恭喜您领取成功
			</p>
			<div class="instr">
			   <p>
			   	使用规则：
			   </p>
			   <p>
			   	  1、为保证你顺利领取奖品，我们会向您发送验证短信，此短信将成为您领取奖品时的重要凭证，请您注意查收。
			   </p>
			   <p>
			   	  2、至分校前台出示您的手机号、获奖短信及获奖页面图片（此页面）即可兑换代金券（不返现）。使用代金券报班时，可减免对应的金额。（具体减免课程，请查看抽奖活动详情）。
			   </p>
			   <p>
			   	  3、奖品不累计，按照您抽取奖品的最高奖项发放奖品。
			   </p>
			   <p>
			   	  4、请您于4月15日前使用面授代金券，逾期不候，谢谢配合。
			   </p>
			</div>
		</div>
        <!--恭喜您抽中开卷有益签-->
		<div class="test0" id="kj">
			<a class="close" href="javascript:;"></a>
			<div class="reward-name">
				<p class="p1" id="kj1"></p>
				<p class="p2" id="kj2"></p>
			</div>
			<a class="get" href="javascript:;"></a>
		</div>
        <!--复制粘贴-->
		<div class="href" id="href">
			<a class="close" href="javascript:;"></a>
			<p class="p1" id="tommo1"></p>
			<p class="p2" id="tommo2"></p>
			<p class="p3">
				<input type="text" value="www.offcn.xiangzhengongwuyue." id="net-address"/>
				<a href="javascript:;" id="btn-copy" onClick="jsCopy();">
				</a>
				<span>网站网址：</span>
			</p>
		</div>
        <!--复制粘贴 成功-->
		<div class="copy" id="copy">
			<a class="close" href="javascript:;"></a>
			<div class="smile">
				
			</div>
			<div>
				<p>亲，网站链接已复制成功！</p>
				<p>快快分享给你的小伙伴吧！</p>
			</div>
		</div>
        <!--活动-->
<div class="zg_hd_bg">
  <div class="zg_hd  layout">
    <div class="zg_mtit"><img src="static/home/img/zg_hd04.jpg"  alt="更多精彩活动"></div>
    <div class="zg_hd_bot"> <a href="#" target="_blank"><img src="static/home/img/zg_hd06.jpg" width="273" height="189"></a> <a href="#" target="_blank"><img src="static/home/img/zg_hd06.jpg" width="273" height="189"></a> <a href="#" target="_blank"><img src="static/home/img/zg_hd06.jpg" width="273" height="189"></a> </div>
  </div>
</div>
<!--联系我们-->
<div class="zg_contact_bg">
  <div class="zg_contact layout">
    <div class="zg_mtit"><img src="static/home/img/zg_hd05.jpg"  alt="联系我们"></div>
    <div class="zg_contact_bot">
      <ul class="zg_contact_tit">
        <li class="hover">成都</li>
        <li>阿坝</li>
        <li>泸州</li>
        <li>南充</li>
        <li>自贡</li>
        <li>德阳</li>
        <li>内江</li>
        <li>乐山</li>
        <li>达州</li>
        <li>宜宾</li>
        <li>甘孜</li>
        <li>雅安</li>
        <li>广元</li>
        <li>巴中</li>
        <li>眉山</li>
        <li>遂宁</li>
        <li>广安</li>
        <li>资阳</li>
        <li>凉山</li>
        <li>攀枝花</li>
      </ul>
      <!--成都-->
      <ul class="zg_contact_cent clearfix" style="display:block">
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
      </ul>
      <!--阿坝-->
      <ul class="zg_contact_cent clearfix">
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
      </ul>
      <!--泸州-->
      <ul class="zg_contact_cent clearfix">
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
      </ul>
      <!--南充-->
      <ul class="zg_contact_cent clearfix">
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
      </ul>
      <!--自贡-->
      <ul class="zg_contact_cent clearfix">
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
      </ul>
      <!--德阳-->
      <ul class="zg_contact_cent clearfix">
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
      </ul>
      <!--内江-->
      <ul class="zg_contact_cent clearfix">
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
      </ul>
      <!--乐山-->
      <ul class="zg_contact_cent clearfix">
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
      </ul>
      <!--达州-->
      <ul class="zg_contact_cent clearfix">
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
      </ul>
      <!--宜宾-->
      <ul class="zg_contact_cent clearfix">
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
      </ul>
      <!--甘孜-->
      <ul class="zg_contact_cent clearfix">
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
      </ul>
      <!--雅安-->
      <ul class="zg_contact_cent clearfix">
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
      </ul>
      <!--广元-->
      <ul class="zg_contact_cent clearfix">
        <li><strong>四川中公教育（总部）</strong> 地址：西2市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
      </ul>
      <!--巴中-->
      <ul class="zg_contact_cent clearfix">
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
      </ul>
      <!--眉山-->
      <ul class="zg_contact_cent clearfix">
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
      </ul>
      <!--遂宁-->
      <ul class="zg_contact_cent clearfix">
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
      </ul>
      <!--广安-->
      <ul class="zg_contact_cent clearfix">
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
      </ul>
      <!--资阳-->
      <ul class="zg_contact_cent clearfix">
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
      </ul>
      <!--凉山-->
      <ul class="zg_contact_cent clearfix">
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
      </ul>
      <!--攀枝花-->
      <ul class="zg_contact_cent clearfix">
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：5区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
        <li><strong>四川中公教育（总部）</strong> 地址：西安市新城区东五路48号江西大厦六楼(五路口十字向东100米路南)<br>
          电话：029-87448899/87448811</li>
      </ul>
      <div class="zg_contact_pic"><img src="static/home/img/zg_hd09.jpg" width="191" height="174"></div>
    </div>
  </div>
</div>
<!--footer-->
<div class="zg_footer"> Copyright©1999-<i></i> 北京中公教育科技股份有限公司 .All Rights Reserved<br>
  全国统一报名专线：400-6300-999 网校报名：4006-999-366 图书订购：400-6509-705 传真：010-82838452<Br>
  京ICP备10218183号 京ICP证161188号  京公网安备 11010802020593号 出版物经营许可证新出发京批字第直130052号<script src='http://s115.cnzz.com/stat.php?id=448159&web_id=448159&show=pic' language='JavaScript' charset='gb2312'></script> </div>
  
<!--浮窗-->  
<div class="zg_fwin">
  <h4>咨询中心</h4>
    <ul>
    	<li><img src="static/home/img/zg_hd11.jpg" width="30" height="33"><br><a href="#" target="_blank">一键加群</a></li>
        <li><img src="static/home/img/zg_hd12.jpg" ><br>扫描二维码</li>
        <li><img src="static/home/img/zg_hd13.jpg" ><br><a href="#" target="_blank">客服咨询</a></li>
    </ul>
    <p>返回顶部</p>
</div>

<script src="static/home/js/jquery1.42.min.js" ></script> 
<script src="static/home/js/jquery.SuperSlide.2.1.1.js" ></script> 
<script language="javascript" src="static/home/js/js.js"></script> 

  <!--幕后人员：【策划：万雨薇】【设计：】【制作：王晨光】【2017-4-1】
	<script language="javascript" src="http://www.offcn.com/statics/js/tongji.js"></script>
    -->
	</body>
</html>
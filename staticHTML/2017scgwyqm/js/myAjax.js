<!-- 通过ajax获得获奖名单 -->
                        	$(function (){
                        		//ajax开始
                        		$.post("http://www.lottery.com/index.php?c=Index&a=getInfo", function(data){
						          		data = JSON.parse(data);
						          		//alert(data.length);
						          		var str = '';
						          		for(i=0;i<data.length;i++){
						          			//alert(data[i].awardType);
						          			if(data[i].awardType == 1){
						          				data[i].awardType = '获得一等奖';
						          			}else if(data[i].awardType == 2){
						          				data[i].awardType = '获得二等奖';
						          			}else if(data[i].awardType == 3){
						          				data[i].awardType = '获得三等奖';
						          			}else{
						          				data[i].awardType = '获得四等奖';
						          			}
						          			str += '<li><span>'+data[i].username+'&nbsp;'+data[i].phone+'&nbsp;'+data[i].awardType+'</span></li>';
						          		}

						          		$("#getInfo").html(str);
						          			$(".winner ul li:even").css("background","#fef3f2");
											$(".winner ul li:odd").css("background","#fce2e2");
						          });//ajax结束
                        		
           
 <!-- 结束 -->
<!-- 通过ajax发送请求，有后台返回，获奖信息 -->
					var loginbtn = $("#loginbtn");
					loginbtn.click(function (){
						var username = $("#username").val();
						var phone = $("#phone").val();
						//alert(username)
						$.ajax({
						   type: "POST",
						   url: "http://www.lottery.com/index.php?c=Index&a=user",
						   data: {username:username,phone:phone},
						   success: function(msg){
						   	msg = eval('(' + msg + ')'); 
						     //alert( "Data Saved: " + msg.msg );
						     if(msg.status == 0){//状态为2说明今天已经领完奖
							     	$(".person").css('display','none');
							     	$("#mask").css('display','none');
							     	$("#href").css('display','block');
							     	$("#tommo1").html(msg.msg1);
							     	$("#tommo2").html(msg.msg2);
							     }else if(msg.status == 4){//状态为4说明他是开卷有益
							     	$(".person").css('display','none');
							     	$("#mask").css('display','none');
							     	$("#kj").css('display','block');
							     	//$("#kj1").html(msg.msg1);
							     	//$("#kj2").html(msg.msg2);
							     	var sr = $("#get").attr('sr');
								     $("#get").attr('href',sr+msg.url);
							     }else{
								     var showDiv = $("#showDiv");
								     $(".person").css('display','none');
								     showDiv.css('display','block');
								     $("#p1").html(msg.msg1);
								     $("#p2").html(msg.msg2);
								     // var sr = $("#get").attr('sr');
								     // $("#get").attr('href',sr+msg.url);
							   }						     	
						    }

						});//ajax结束点
					});
				})
<!-- 通过ajax发送请求，请求结束 -->
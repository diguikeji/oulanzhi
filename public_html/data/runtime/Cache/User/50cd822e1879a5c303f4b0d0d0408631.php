<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>登录</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/login.css">
	<link rel="stylesheet" media="screen and (max-width: 600px)" href="/themes/simplebootx/Public/new/css/small.css" />
</head>
<body>

<div class="border">
	<div class="shuzhe">
		<img src="/themes/simplebootx/Public/new/image/shuzhe.jpg">
	</div>
	<div class="shuzhe1">
		<div class="shuzhe2">
			<li class="text">WELCOM TO JOIN US</li>
			<li class="text-1">we will give you the best service</li>
		</div>
		<div class="shuzhe3"></div>
		<div class="shuzhe4"style="width: 180px;text-align: center;height: 20px;margin-top: 20px">
		<!--	<div class="border1">
				<div class="border1-1"></div>
		</div>-->
			<div class="border2"><div class="border2-1" style="font-size: 1.1rem;width: 180px;text-align: center">---使用第三方账号注册---</div></div>
			<!--<div class="border3"><div class="border3-1"></div></div>-->
		</div>
		<div class="login" style="margin-top: 40px;width:180px;height: 50px;">
			<div class="login-1" style="width: 45px;height: 45px;margin-right: 20px;"><a href="<?php echo U('api/oauth/login',array('type'=>'qq'));?>"><img src="/themes/simplebootx/Public/new/image/qq.png" style="width: 100%;height: 100%"></a></div>
			<div class="login-1" style="width: 45px;height: 45px;margin-right: 20px;"><a href="<?php echo U('api/oauth/login',array('type'=>'sina'));?>"><img src="/themes/simplebootx/Public/new/image/weibo.png" style="width: 100%;height: 100%"></a></div>
			<div class="login-1" style="width: 45px;height: 45px;"><a href="<?php echo U('api/oauth/login',array('type'=>'weixin'));?>"><img src="/themes/simplebootx/Public/new/image/weixin.png" style="width: 100%;height: 100%"></a></div>
		</div>



		<div class="bottom" style="margin-top: 100px">
			<a href="<?php echo U('user/login/forgot_password');?>"> <li class="text-2">忘记密码 ＞</li></a>
			<div class="bottom-1"> <li class="text-3">已经注册为会员！</li></div>
			<div class="bottom-2"><a href="<?php echo leuu('user/login/index');?>"><li class="text-4">点击登录 ＞</li></a></div>
		</div>

	</div>

</div>

<div class="last">
	<div class="last-1"><li class="text-5">Copyright&nbsp;&nbsp;&nbsp; 2006-2016 Built by Asis. All rights reserved.</li></div>
	<div class="last-1"><li class="text-5">Read the boring legal stuff</li></div>
</div>
</body>
</html>

<script type="text/javascript">
//全局变量
var GV = {
    ROOT: "/",
    WEB_ROOT: "/",
    JS_ROOT: "public/js/"
};
</script>
   <!-- Placed at the end of the document so the pages load faster -->
   <script src="/public/js/jquery.js"></script>
   <script src="/public/js/wind.js"></script>
   <script src="/themes/simplebootx/Public/assets/simpleboot/bootstrap/js/bootstrap.min.js"></script>
   <script src="/public/js/frontend.js"></script>
<script>
$(function(){
	$('body').on('touchstart.dropdown', '.dropdown-menu', function (e) { e.stopPropagation(); });
	
	$("#main-menu li.dropdown").hover(function(){
		$(this).addClass("open");
	},function(){
		$(this).removeClass("open");
	});
	
	$.post("<?php echo U('user/index/is_login');?>",{},function(data){
		if(data.status==1){
			if(data.user.avatar){
				$("#main-menu-user .headicon").attr("src",data.user.avatar.indexOf("http")==0?data.user.avatar:"<?php echo sp_get_image_url('[AVATAR]','!avatar');?>".replace('[AVATAR]',data.user.avatar));
			}
			
			$("#main-menu-user .user-nicename").text(data.user.user_nicename!=""?data.user.user_nicename:data.user.user_login);
			$("#main-menu-user li.login").show();
			
		}
		if(data.status==0){
			$("#main-menu-user li.offline").show();
		}
		
		/* $.post("<?php echo U('user/notification/getLastNotifications');?>",{},function(data){
			$(".nav .notifactions .count").text(data.list.length);
		}); */
		
	});	
	;(function($){
		$.fn.totop=function(opt){
			var scrolling=false;
			return this.each(function(){
				var $this=$(this);
				$(window).scroll(function(){
					if(!scrolling){
						var sd=$(window).scrollTop();
						if(sd>100){
							$this.fadeIn();
						}else{
							$this.fadeOut();
						}
					}
				});
				
				$this.click(function(){
					scrolling=true;
					$('html, body').animate({
						scrollTop : 0
					}, 500,function(){
						scrolling=false;
						$this.fadeOut();
					});
				});
			});
		};
	})(jQuery); 
	
	$("#backtotop").totop();
	
	
});
</script>
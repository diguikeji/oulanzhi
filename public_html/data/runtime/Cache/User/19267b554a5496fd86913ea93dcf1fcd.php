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
		<div class="shuzhe4">
			<div class="border1">
				<div class="border1-1"></div>
			</div>
			<div class="border2"><div class="border2-1">使用第三方账号登录</div></div>
			<div class="border3"><div class="border3-1"></div></div>
		</div>
		<div class="login">
			<div class="login-1"><a href="<?php echo U('api/oauth/login',array('type'=>'qq'));?>"><img src="/themes/simplebootx/Public/new/image/qq.png"></a></div>
			<div class="login-1"><a href="<?php echo U('api/oauth/login',array('type'=>'sina'));?>"><img src="/themes/simplebootx/Public/new/image/weibo.png"></a></div>
			<div class="login-1"><a href="<?php echo U('api/oauth/login',array('type'=>'weixin'));?>"><img src="/themes/simplebootx/Public/new/image/weixin.png"></a></div>
		</div>
		<form method="post" class="js-ajax-form" action="<?php echo U('user/login/dologin');?>">
		<div class="zhanghao">

				<div class="zhanghao-1"> <img src="/themes/simplebootx/Public/new/image/zhanghao.png"></div>&nbsp;&nbsp;&nbsp;
				<div class="zhanghao-2"><input type="name" id="input_username" name="username" placeholder="请输入手机号/邮箱/用户名" style="background-color: #E7EBEE ;border:0px;height: 3rem;padding-left: 0.5rem" required></div>
			<div class="mima">
					<div class="zhanghao-1"> <img src="/themes/simplebootx/Public/new/image/password.png"></div>&nbsp;&nbsp;&nbsp;
					<div class="zhanghao-2"><input type="password"  id="input_password"  name="password" placeholder="请输入密码"style="background-color: #E7EBEE;border:0px;height: 3rem;padding-left: 0.5rem" required></div>
			</div>
		</div>
		
		<input type="hidden" name="redirecturl" value="<?php echo ($redirecturl); ?>" />
		
		<div class="denglu"><button  type="submit" class="js-ajax-submit" style="width: 25rem; height: 4rem;border:0px;background-color: #FE4C7E; color: white;" >登录</button></div>
		</form>
		<div class="bottom">
			<a href="<?php echo U('user/login/forgot_password');?>"> <li class="text-2">忘记密码 ＞</li></a>
			<div class="bottom-1"> <li class="text-3">还没有账号密码？</li></div>
			<div class="bottom-2"><a href="<?php echo leuu('user/register/index');?>"><li class="text-4">点击注册 ＞</li></a></div>
		</div>

	</div>

</div>

<div class="last">
	<div class="last-1"><li class="text-5">Copyright&nbsp;&nbsp;&nbsp; 2006-2016 Built by Asis. All rights reserved.</li></div>
	<div class="last-1"><li class="text-5">Read the boring legal stuff</li></div>
</div>

<form id="myForm" style="display:none;" action="<?php echo ($redirecturl); ?>" method="post">
    <input id="loginParams" name="params" value="<?php echo ($params); ?>">
</form>

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
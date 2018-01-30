<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>忘记密码</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/login.css">
	<link rel="stylesheet" media="screen and (max-width: 600px)" href="/themes/simplebootx/Public/new/css/small.css" />
</head>
<style>
.yanzhengma{
	width: 80px;
	height: 30px;
	margin-top: -115px;
	float: right;
	z-index: 999;
	position: relative;
	margin-right:3rem;
}
</style>
<body>

<div class="border">
	<div class="shuzhe">
		<img src="/themes/simplebootx/Public/new/image/shuzhe.jpg">
	</div>
	<div class="shuzhe1">
		<div class="shuzhe2">
			<li class="text">FORGOT PASSWORD</li>
			<li class="text-1">we will give you the best service</li>
		</div>
		<div class="shuzhe3"></div>


		<form method="post" action="<?php echo U('user/login/doforgot_password');?>">
			<div class="zhanghao" style="margin-top: 50px">

				<div class="zhanghao-1"> <img src="/themes/simplebootx/Public/new/image/zhanghao.png"></div>&nbsp;&nbsp;&nbsp;
				<div class="zhanghao-2"><input type="name" name="email" placeholder="请输入邮箱" style="background-color: #E7EBEE ;border:0px;height: 3rem;padding-left: 0.5rem"></div>
				<div class="mima">
					<div class="zhanghao-1"> <img src="/themes/simplebootx/Public/new/image/password.png"></div>&nbsp;&nbsp;&nbsp;
					<div class="zhanghao-2"><input type="text" name="verify" placeholder="请输入验证码"style="background-color: #E7EBEE;border:0px;height: 3rem;padding-left: 0.5rem"></div>
				</div>

			</div>
			<div class="denglu"><input  type="submit" value="找回密码"style="width: 25rem; height: 4rem;border:0px;background-color: #FE4C7E; color: white;" ></div>
			<div class="yanzhengma"><?php echo sp_verifycode_img('length=3&font_size=14&width=80&height=30&charset=1234567890&use_noise=1&use_curve=0');?></div>
		</form>
		<div class="bottom" style="margin-top: 50px">
			<a href="<?php echo U('user/login/index');?>"> <li class="text-2">点击登录＞</li></a>
			<div class="bottom-1"> <li class="text-3">还没有账号密码？</li></div>
			<div class="bottom-2"><a href="<?php echo leuu('user/register/index');?>"><li class="text-4">点击注册 ＞</li></a></div>
		</div>
	</div>

</div>

<div class="last">
	<div class="last-1"><li class="text-5">Copyright&nbsp;&nbsp;&nbsp; 2006-2016 Built by Asis. All rights reserved.</li></div>
	<div class="last-1"><li class="text-5">Read the boring legal stuff</li></div>
</div>

</body>
</html>
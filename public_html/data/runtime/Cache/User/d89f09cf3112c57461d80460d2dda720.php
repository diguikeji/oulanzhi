<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>帐号设置</title>
	<meta name="renderer" content="webkit">
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="generator" content=""  data-variable="" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/iconfont.css">
	<link href="/themes/simplebootx/Public/favicon.ico"  rel="shortcut icon" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/iconfont.css">
	<link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/setting.css">
	<link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/index.css">
	<link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/bootstrap.min.css">
	<link rel="stylesheet" href="/themes/simplebootx/Public/new/css/component.css">
</head>
<body style="background-color: #E9E9E7">


<!--头部-->
<nav class="nav-box">
    <div class="nav-box-logo">
        <img src="/themes/simplebootx/Public/new/image/logo.png">
    </div>
    <div class="nav-box-ul">
        <ul id="nav">
            <li><a href="<?php echo U('Portal/index/index');?>">首页</a></li>
            <li><a href="<?php echo U('Portal/find/index');?>">发现</a></li>
            <li class="dropdown">
                <a href="<?php echo U('Portal/newest/index');?>" class="dropdown-toggle">
                    最新
                </a>
                <ul class="dropdown-menu" style="margin-top: 2.1rem;margin-left: -1rem;background-color: rgba(0,0,0,0.6);font-size: 12px!important;min-width: 3rem;text-align: center ;">
                    <li style="min-width: 100%"><a href="<?php echo U('User/collect/index');?>" style="font-size: 1.5rem;line-height: 30px;;min-width: 100%">我的采集</a></li>
                    <li><a href="<?php echo U('User/center/index');?>"  style="font-size: 1.5rem;line-height: 30px;min-width: 100%">我的画板</a></li>
                    <li><a href="<?php echo U('User/love/index');?>"  style="font-size: 1.5rem;line-height: 30px;min-width: 100%">我的喜欢</a></li>
                    <li><a href="<?php echo U('User/follow/interestFollow');?>"  style="font-size: 1.5rem;line-height: 30px;min-width: 100%">兴趣</a></li>
                    <li><a href="<?php echo U('User/follow/userFollow');?>"  style="font-size: 1.5rem;line-height: 30px;min-width: 100%">用户</a></li>
                </ul>
            </li>
            <li><a href="<?php echo U('Portal/activity/index');?>">活动</a></li>
        </ul>
    </div>


    <div class="right-menu">
        <img class="open-menu" src="/themes/simplebootx/Public/new/image/menu.png" />
        <img class="close-menu" src="/themes/simplebootx/Public/new/image/closeMenu.png" />
    </div>

    <div class="login-ul" id="user">

    </div>
</nav>



<div id="si-box"></div>



<div class="account">
	<div class="acount_1">帐号设置</div>
	<div class="account_2">
	
			<div class="account_2_1">
				<p>个人资料</p>
				<div class="myself">
					<div style="font-size: 1.5rem;font-family: 宋体;;margin-top: 2rem;margin-left: 8rem">昵称：<input type="text" id="nicename" value="<?php echo ($user_nicename); ?>" style="width:20rem;margin-left: 2.5rem" ></div>
					<div style="font-size: 1.5rem;font-family: 宋体;margin-top:2rem;margin-left: 8rem;float: left">关于自己：</div><div style="float: left;margin-top:2rem;"><textarea name="sign" id="sign" rows="3" style="width:40rem; height: 8rem;outline: none"><?php echo ($signature); ?></textarea></div>
					<button onclick="info()" class="myself_bt">保存</button>
				</div>
			</div>
      
			<div class="account_2_2">
				<p>头像</p>
				<div class="shangchuan">
					<div class="touxiang"><?php if(empty($avatar)): ?><img src="/themes/simplebootx/Public/assets/images/headicon_128.png" class="headicon"/>
                        <?php else: ?>
                        <img src="<?php echo sp_get_user_avatar_url($avatar);?>?t=<?php echo time();?>" class="headicon"/><?php endif; ?></div>
                    <input  class="touxiang_bt"  type="file" onchange="avatar_upload(this)" id="avatar_uploder" value="上传头像" name="file"/>
				</div>
			</div>
			<div class="account_2_3">
				<p>登录邮箱</p>
				<div class="email">
					<p style="font-size: 1.5rem;font-family: 宋体;float: left;margin-top: 2rem;margin-left: 8rem">当前邮箱：</p><input type="email" value="1506080683@qq.com">
					<button class="email_bt1">验证邮箱</button><button class="email_bt2">更换邮箱</button>
				</div>
			</div>
			<div class="account_2_4">
				<p>密码</p>
				<div class="password">
                    <form>
					<div style="font-size: 1.5rem;font-family: 宋体;margin-top: 2rem;margin-left: 9.4rem">当前密码：<input type="password" id="input-old_password"  name="old_password"/></div>
					<div style="font-size: 1.5rem;font-family: 宋体;margin-top: 1rem;margin-left: 10.6rem">新密码：<input type="password"  id="input-password"  name="password"/></div>
					<div style="font-size: 1.5rem;font-family: 宋体;;margin-top: 1rem;margin-left: 8rem">确认新密码：<input type="password" id="input-repassword"  name="repassword"/></div>
                        <button type="submit" class="password_bt js-ajax-submit">保存</button>
                    </form>
				</div>
			</div>
			<div class="account_2_5"><p>个人网址</p><input type="text"  value="http://" ></div>
			<form>
			<div class="account_2_6"><p>第三方帐号</p>
				<div class="thirdaccount">
					<div style="width: 70%;border-bottom: 1px dashed #EDEDED;margin: auto;height: 6rem;padding-top: 1.5rem"><img src="/themes/simplebootx/Public/new/image/weibo11.png">
						<button class="thirdaccount_bt1">绑定</button><button class="thirdaccount_bt2">解除绑定</button>
					</div>
					<div style="width: 70%;border-bottom: 1px dashed #EDEDED;margin: auto;height: 6rem;padding-top: 1.5rem"><img src="/themes/simplebootx/Public/new/image/weixin11.png">
						<button class="thirdaccount_bt1">绑定</button><button class="thirdaccount_bt2">解除绑定</button>
					</div>
					<div style="width: 70%;margin: auto;height: 6rem;padding-top: 1.5rem"> <img src="/themes/simplebootx/Public/new/image/qq11.png">
						<button class="thirdaccount_bt1">绑定</button><button class="thirdaccount_bt2">解除绑定</button>
					</div>
				</div>
			</div>
	
		<div class="onsure_bt">
		    
			<input  type="submit" value="确认修改" style="width: 8rem; height: 2.5rem;border:0px;
    background-color: #FF4562;border-radius: 5px;font-size:1.5rem;color: white" >

         <form>
		</div>
	</div>
</div>

<script src="/themes/simplebootx/Public/new/js/jquery-1.8.1.min.js"></script>
<script src="/themes/simplebootx/Public/new/js/bootstrap.min.js"></script>
<script src="/themes/simplebootx/Public/login.js"></script>
<script src="/themes/simplebootx/Public/new/js/classie.js"></script>
<script src="/themes/simplebootx/Public/new/js/modalEffects.js"></script>
<script type="text/javascript">

 
  function info(){
       var name = $("#nicename").val();
       var sign = $("#sign").val();
       console.log(name);
       console.log(sign);
       $.ajax({
          
          
      })
      	
  } 


</script>
</body>
</html>
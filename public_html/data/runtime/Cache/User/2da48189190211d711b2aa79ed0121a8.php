<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>手机号注册</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/register.css">
    <link rel="stylesheet"  media="screen and (max-width: 600px)" href="/themes/simplebootx/Public/new/css/small.css" />
	<link rel="stylesheet" href="/themes/simplebootx/Public/new/js/layer/theme/default/layer.css">
</head>
<body>
<div class="reg-box">
<div class="logo">
    <img src="/themes/simplebootx/Public/new/image/logo.png">
</div>
<div class="wanshanxinxi">
   <div class="wanshanxinxi_p">
    <p>欢迎您注册欧澜芝！请使用手机号和密码来完成注册。</p>
   </div>
<div class="form1">
   <div class="div1_form">
       <div class="div2_form"><p>手机号:</p></div>
       <div class="div3_form">
       <input type="text" name="phone"  id="phone" >
           </div>
       </div>
</div>

    <div class="form1">
        <div class="div1_form">
            <div class="div2_form"><p>昵称:</p></div>
            <div class="div3_form">
                <input type="text" name="name" id="name">
            </div>
        </div>
    </div>
    <div class="form1">
        <div class="div1_form">
            <div class="div2_form"><p>密码:</p></div>
            <div class="div3_form">
                <input type="password" name="password" id="password">
            </div>
        </div>
    </div>
    <div class="form1">
        <div class="div1_form">
            <div class="div2_form"><p>确认密码:</p></div>
            <div class="div3_form">
                <input type="password" name="repassword" id="repassword" >
            </div>
        </div>
    </div>
   </div>
<div class="yanzhengma">
</div>

<div class="bt">
    <input  type="submit" onclick="check()" value="注册新用户" style="width: 8rem; height: 2.5rem;border:0px;
    background-color: #FF4562;border-radius: 5px;font-size:1.2rem;color: white" >
</div>
</div>
</body>
<script src="/themes/simplebootx/Public/new/js/jquery-1.8.1.min.js"></script>
<script src="/themes/simplebootx/Public/new/js/bootstrap.min.js"></script>
<script src="/themes/simplebootx/Public/login.js"></script>
<script src="/themes/simplebootx/Public/new/js/layer/layer.js"></script>
<script src="/themes/simplebootx/Public/new/js/classie.js"></script>
<script src="/themes/simplebootx/Public/new/js/modalEffects.js"></script>

<script>
  function check(){
      var phone = $("#phone").val();
      var name = $("#name").val();
      var password = $("#password").val();
      var repassword = $("#repassword").val();
      var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;  
       if(!phone){
           layer.msg('欧澜芝提醒：手机号不能为空', {icon: 2});
           return false;
      }
      if(!(/^1[34578]\d{9}$/.test(phone))){ 
           layer.msg('欧澜芝提醒：手机号不合法"', {icon: 2});
           return false;
      }
    
    
      if(!name){
           layer.msg('欧澜芝提醒：昵称不能为空', {icon: 2});
           return false;
      }
      if(!password&&!repassword){
           layer.msg('欧澜芝提醒：密码不能为空！', {icon: 2});
           return false;
      }
      if(password!=repassword){
           layer.msg('欧澜芝提醒：两次密码输入不一致！', {icon: 2});
           return false;
      }
     
      
      $.ajax({
          
        type: "GET",

		url: "/index.php?g=User&m=login&a=mobileRegister",

		dataType: "json",

		data:{
		    
		    phone:phone,
		    name:name,
		    password:password
		  
		},
		
		success:function(data){
		    
		    console.log(data);
		    if(data==5){
		        layer.msg('欧澜芝提醒：该手机号已被注册！', {icon: 2});
		        return false;
		    }
		    if(data.status==1){
		        layer.msg('欧澜芝提醒：恭喜您注册成功！', {icon: 1});
		        window.location.href=data.url
		        return true;
		    }
		}
      })
  }  
    
    
    
</script>
</html>
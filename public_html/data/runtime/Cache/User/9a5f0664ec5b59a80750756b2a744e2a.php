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
	<link rel="stylesheet" href="/themes/simplebootx/Public/new/js/layer/theme/default/layer.css">
	
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



<div class="account" style="height:145rem"> 
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
					<div class="touxiang" id="touxiang" style="position:relative;">
					    <?php if(empty($avatar)): ?><img src="/themes/simplebootx/Public/assets/images/headicon_128.png" class="headicon"/>
                        <?php else: ?>
                        <img src="<?php echo sp_get_user_avatar_url($avatar);?>?t=<?php echo time();?>" class="headicon"/><?php endif; ?>
                    </div>
                   
                   
                   <form id="uploadForm"  style="position:relative;margin:130px 0 0 50px;float:left;">
                       <button type="button" style="background-color: #FF4562;color:#fff;border:0;padding:4px 10px;">上传头像</button>
                       <input  class="touxiang_bt" style="position:absolute;left:0;top:0;width:100px;height:36px;margin:0;padding:0;height:100%;z-index:100;opacity:0;" accept="image/*" type="file"  name="file"/>
                    </form>
                   
                    
                    <!-- <input  class="touxiang_bt"  type="submit"  onclick="update_avatar()" value="上传" name="submit"/>-->
				</div>
			</div>
			<div class="account_2_3"  style="height:auto">
				<p>登录邮箱/手机号</p>
				<div class="email">
					<p style="font-size: 1.5rem;font-family: 宋体;float: left;margin-top: 2rem;margin-left: 8rem">当前邮箱：</p><input type="email" value="<?php echo ($user_email); ?>">
					
					<button class="email_bt1">验证邮箱</button><button class="email_bt2">更换邮箱</button>
					
				</div>
					<div class="email">
					<p style="font-size: 1.5rem;font-family: 宋体;float: left;margin-top: 2rem;margin-left: 8rem">当前手机号：</p><input type="text" id="phone" value="<?php echo ($mobile); ?>">
					
				<button class="email_bt2" onclick="phoneChange()" style="margin-top:2rem;margin-left:5rem">更换手机号</button>
					
				</div>
				
				
			</div>
			<div class="account_2_4">
				<p>密码</p>
				<div class="password">
					<div style="font-size: 1.5rem;font-family: 宋体;margin-top: 2rem;margin-left: 9.4rem">当前密码：<input type="password" id="old_password"  name="old_password"/></div>
					<div style="font-size: 1.5rem;font-family: 宋体;margin-top: 1rem;margin-left: 10.6rem">新密码：<input type="password"  id="password"  name="password"/></div>
					<div style="font-size: 1.5rem;font-family: 宋体;;margin-top: 1rem;margin-left: 8rem">确认新密码：<input type="password" id="repassword"  name="repassword"/></div>
                        <button onclick="repassword()" class="password_bt js-ajax-submit">保存</button>
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
	

		    

         <form>
	
	</div>
</div>

<script src="/themes/simplebootx/Public/new/js/jquery-1.8.1.min.js"></script>
<script src="/themes/simplebootx/Public/new/js/bootstrap.min.js"></script>
<script src="/themes/simplebootx/Public/login.js"></script>
<script src="/themes/simplebootx/Public/new/js/layer/layer.js"></script>


<script type="text/javascript">

/*function avatar_upload(obj){
		var $fileinput=$(obj);
		/* $(obj)
		.show()
		.ajaxComplete(function(){
			$(this).hide();
		}); 
		Wind.css("jcrop");
		Wind.use("ajaxfileupload","jcrop","noty",function(){
			$.ajaxFileUpload({
				url:"<?php echo U('profile/avatar_upload');?>",
				secureuri:false,
				fileElementId:"avatar_uploder",
				dataType: 'json',
				data:{},
				success: function (data, status){
					if(data.status==1){
						$("#avatar_uploder").hide();
						var $uploaded_area=$(".uploaded_avatar_area");
						$uploaded_area.find("img").remove();
						var src= "/data/upload/avatar/"+data.data.file;
						var $img=$("<img/>").attr("src",src);
						$img.prependTo($uploaded_area);
						$(".uploaded_avatar_btns").show();
						var img = new Image();
						img.src=src;
						
						var callback=function(){
							console.log(img.width);
							$img.Jcrop({
						    	aspectRatio:1,
						    	trueSize: [img.width,img.height],
						    	setSelect: [ 0, 0, 100, 100 ],
						    	onSelect: function(c){
						    		$img.data("area",c);
						    	}
						    });
						}
						
						if(img.complete){
							callback();
						}else{
							img.onload=callback;
						}
						
					}else{
						noty({text: data.info,
                    		type:'error',
                    		layout:'center'
                    	});
					}
					
				},
				error: function (data, status, e){}
			});
		});
		
		
		
		return false;
	}*/

$('.touxiang_bt').on('change',doUpload);
function doUpload(){
    var file = this.files[0];
    if(!/image\/\w+/.test(file.type)){
        layer.msg('文件必须为图片！', {icon: 2});
        return;
    }
    
    var formData = new FormData($("#uploadForm")[0]);
    
    
    $.ajax({
        url: 'index.php?g=user&m=profile&a=uploadImg',
        type:'POST',
        data:formData,
        dataType:'JSON',
        contentType:false,
        processData:false,
        success:function(data){
            console.log(data);
            if(data.code==1000)
            {
                $(".headicon").attr("src","/data/upload/"+data.url);
            }
            
        },
        error:function(data){
            //console.log(data);
        }
    })
    
    
}

 
 function phoneChange(){
     var phone = $("#phone").val();
    // console.log(phone)
     if(!phone){
         
        layer.msg('欧澜芝提醒：手机号不能为空', {icon: 2});
       
         return false;
     }
     if(!(/^1[34578]\d{9}$/.test(phone))){ 
          layer.msg('欧澜芝提醒：手机号不合法', {icon: 2});
          return false;
      }
      $.ajax({
        type: "GET",

		url: "/index.php?g=User&m=center&a=phoneChange",

		dataType: "json",
		
		data:{
		  
		  phone:phone
		    
		},
		
		success:function(data){
		    
		   // console.log(data);
		    
		    if(data==1){
		        
		        layer.msg('欧澜芝提醒：手机号更换成功！', {icon: 1});
		       
		        return true;
		        
		    }else if(data==3){
		        layer.msg('欧澜芝提醒：修改后手机号与原手机号相同!', {icon: 2});
		        return false;
		    }
		    
		    else{
		        layer.msg('欧澜芝提醒：手机号更换成功！', {icon: 1});
		        return true;
		    }
		}
      })
 }
 

  function repassword(){
      var old_password = $("#old_password").val();
      var password = $("#password").val();
      var repassword = $("#repassword").val();
     if(!old_password||!password==null||!repassword){
         
          layer.msg('欧澜芝提醒：密码不能为空！', {icon: 2});
         return false;
     }else{
         
    $.ajax({
          
        type: "GET",

		url: "/index.php?g=User&m=center&a=editPassword",

		dataType: "json",
		
		data:{
		  
		  oldpassword:old_password,
		  password:password,
		  repassword:repassword
		    
		},
		success:function(data){
		    if(data==0){
		        
		        layer.msg('欧澜芝提醒：原密码不正确！', {icon: 2});
		        return false;
		    }
		    if(data==1){
		        layer.msg('欧澜芝提醒：两次密码输入不一致！', {icon: 2});
		       
		        return false;
		    }
		    if(data==2){
		        layer.msg('欧澜芝提醒：新密码和原密码相同！', {icon: 2});
		        return false;
		    }
		    if(data==3){
		        
		       layer.msg('欧澜芝提醒：修改成功！', {icon: 1});
		   
		       return true;
		        
		    }
		    if(data==4){
		        layer.msg('欧澜芝提醒：修改失败！', {icon: 1});
		      
		        return false;
		    }
		}
		
    })
        
}
  }

 
  function info(){
       var name = $("#nicename").val();
       var sign = $("#sign").val();
       
       $.ajax({
          
        type: "GET",

		url: "/index.php?g=User&m=center&a=infoCheck",

		dataType: "json",
		
		data:{
		  
		  name:name,
		  sign:sign
		    
		},
		
		success:function(data){
		    
		   if(data ==1){
		       layer.msg('欧澜芝提醒：保存成功！', {icon: 1});
		   
		       return true;
		   }else{
		      layer.msg('欧澜芝提醒：保存成功！', {icon: 1});
		     
		      return false;
		   }
		}

      })
      	
  } 


</script>
</body>
</html>
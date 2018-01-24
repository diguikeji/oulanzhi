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
</head>
<body style="background-color: #E9E9E7">


<nav class="nav-box">
	<div class="nav-box-logo">
		<img src="/themes/simplebootx/Public/new/image/logo.png">
	</div>
	<div class="nav-box-ul">
		<ul id="nav">
			<li><a href="<?php echo U('Portal/index/index');?>">首页</a></li>
			<li><a href="<?php echo U('Portal/find/index');?>">发现</a></li>
			<li><a href="#">最新</a>
				<!--		<ul>
                            <li><a href="#">我的推荐</a></li>
                            <li><a href="#">我的关注</a></li>
                            <li><a href="#">我的画板</a></li>
                            <li><a href="#">用户</a></li>
                        </ul>-->
			</li>
			<li><a href="<?php echo U('Portal/activity/index');?>">活动</a></li>
		</ul>
	</div>


	<div class="right-menu">
		<img class="open-menu" src="/themes/simplebootx/Public/new/image/menu.png" />
		<img class="close-menu" src="/themes/simplebootx/Public/new/image/closeMenu.png" />
	</div>

	<<div class="login-ul" id="user"></div>


</nav>



<div class="account">
	<div class="acount_1">帐号设置</div>
	<div class="account_2">
		<form>
			<div class="account_2_1">
				<p>个人资料</p>
				<div class="myself">
					<div style="font-size: 1.5rem;font-family: 宋体;;margin-top: 2rem;margin-left: 8rem">昵称：<input type="text" style="width:20rem;margin-left: 2.5rem" ></div>
					<div style="font-size: 1.5rem;font-family: 宋体;margin-top:2rem;margin-left: 8rem;float: left">关于自己：</div><div style="float: left;margin-top:2rem;"><textarea rows="3" style="width:40rem; height: 8rem;outline: none"></textarea></div>
					<button class="myself_bt">保存</button>
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
                    <form  class="js-ajax-form" action="<?php echo U('profile/password_post');?>" method="post">
					<div style="font-size: 1.5rem;font-family: 宋体;margin-top: 2rem;margin-left: 9.4rem">当前密码：<input type="password" id="input-old_password"  name="old_password"/></div>
					<div style="font-size: 1.5rem;font-family: 宋体;margin-top: 1rem;margin-left: 10.6rem">新密码：<input type="password"  id="input-password"  name="password"/></div>
					<div style="font-size: 1.5rem;font-family: 宋体;;margin-top: 1rem;margin-left: 8rem">确认新密码：<input type="password" id="input-repassword"  name="repassword"/></div>
                        <button type="submit" class="password_bt js-ajax-submit">保存</button>
                    </form>
				</div>
			</div>
			<div class="account_2_5"><p>个人网址</p><input type="text"  value="http://" ></div>
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
		</form>
		<div class="onsure_bt">
			<input  type="submit" value="确认修改" style="width: 8rem; height: 2.5rem;border:0px;
    background-color: #FF4562;border-radius: 5px;font-size:1.5rem;color: white" >
		</div>
	</div>
</div>

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


<script type="text/javascript" src="/themes/simplebootx/Public/new/js/jquery-1.8.1.min.js"></script>
<script type="text/javascript">

    $.ajax({
        type: "GET",

        url: "/index.php?g=&m=Index&a=getUser",

        dataType: "json",

        success: function (data) {
            var uid =data.id;
            //console.log(uid);
            if(data == 0){
                $("#user").append(
                    '<ul id="nav-login">'+
                    '<li id="login"><a href="index.php?g=user&m=login&a=index"><i class="iconfont icon-denglu"></i></a></li>'+
                    '</ul>'
                )
            }else{
                $("#user").append(
                    '<ul id="nav-login">'+
                    '<li id="jia"><a href="#" ><i class="iconfont icon-jia1"></i></a></li>'+
                    '<li id="info"><a href="#"><i class="iconfont icon-xinxi1"></i></a></li>'+
                    '<li><a href="index.php?g=user&m=center&a=index"><div style="width: 27px;height: 27px;border-radius: 50%;"><img src="index.php?g=user&m=public&a=avatar&id='+uid+'"></div></a></li>'+
                    '</ul>'
                )
            }
        }

    });


    function update_avatar(){
        var area=$(".uploaded_avatar_area img").data("area");
        $.post("<?php echo U('profile/avatar_update');?>",area,
            function(data){
                if(data.status==1){
                    reloadPage(window);
                }

            },"json");

    }
    function avatar_upload(obj){
        var $fileinput=$(obj);
        /* $(obj)
        .show()
        .ajaxComplete(function(){
            $(this).hide();
        }); */
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
    }
</script>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>编辑画板</title>
    <link href="/themes/simplebootx/Public/favicon.ico"  rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/iconfont.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/index.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/header.css">
    <meta name="renderer" content="webkit">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="generator" content=""  data-variable="" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/edit.css">
</head>



<body>



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



<!--内容-->

    <div class="palette-1">
        <form action="<?php echo U('User/draw/edit_post');?>" method="post">
        <div class="bianjihuaban">编辑画板/<?php echo ($hb_name); ?></div>
        <div class="biaoti">标题
            <input type="text" value="<?php echo ($hb_name); ?>" name="hb_name" style="font-size: 16px;outline: none;width: 40%;height: 3rem;margin-left: 6rem;padding-left: 0.5rem">
         <input type="hidden" value="<?php echo ($hb_id); ?>" name="hb_id">

        </div>
        <div class="describe"><div style="float: left">描述</div><textarea name="hb_descp"  style="outline: none;margin-left: 6.4rem;font-size: 16px;padding-left: 0.5rem"><?php echo ($hb_descp); ?></textarea></div>
        <div class="describe-1">分类
            <select style="border: 0px;outline: medium;width:40.3%;height: 3rem;background-color: white;margin-left: 6.4rem;border: 1.5px solid gainsboro" name="hb_term_id">
                <?php if(is_array($category)): foreach($category as $key=>$vo): $hid_selected=$hb_term_id==$vo['xqfl_id']?"selected":""; ?>
            <option value="<?php echo ($vo["xqfl_id"]); ?>"<?php echo ($hid_selected); ?> ><?php echo ($vo["xqfl_name"]); ?></option><?php endforeach; endif; ?>
        </select> </div>
            <div class="describe-2">删除<a href="<?php echo U('User/draw/delete',array('id'=>$hb_id));?>"><button >删除画板</button></a></div>
        <div class="describe-3"><button type="submit">保存设置</button></div>
        </form>
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



<!--script-->
<!-- Initialize Swiper -->
<script src="/themes/simplebootx/Public/new/js/jquery-1.8.1.min.js"></script>
<script src="/themes/simplebootx/Public/new/js/bootstrap.min.js"></script>
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

    </script>
</body>
</html>
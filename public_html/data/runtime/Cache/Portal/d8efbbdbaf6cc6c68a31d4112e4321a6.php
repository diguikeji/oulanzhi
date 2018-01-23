<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/palette.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/foundDetail.css">
    <link href="/themes/simplebootx/Public/favicon.ico"  rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/iconfont.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/index.css">
    <meta name="renderer" content="webkit">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="generator" content=""  data-variable="" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>发现</title>
</head>
<body>

<nav class="nav-box">
    <div class="nav-box-logo">
        <img src="/themes/simplebootx/Public/new/image/logo.png">
    </div>
    <div class="nav-box-ul">
        <ul id="nav">
            <li><a href="../index.html" >首页</a></li>
            <li><a href="../found/found.html" class="active">发现</a></li>
            <li><a href="../new/new.html">最新</a>
                <!--		<ul>
                            <li><a href="#">我的推荐</a></li>
                            <li><a href="#">我的关注</a></li>
                            <li><a href="#">我的画板</a></li>
                            <li><a href="#">用户</a></li>
                        </ul>-->
            </li>
            <li><a href="../activity/activity.html">活动</a></li>
        </ul>
    </div>



    <div class="right-menu">
        <img class="open-menu" src="/themes/simplebootx/Public/new/image/menu.png" />
        <img class="close-menu" src="/themes/simplebootx/Public/new/image/closeMenu.png" />
    </div>

    <div class="login-ul" id="user">

    </div>


</nav>



<div class="cephalosome">
    <div class="cephalosome-1"><?php echo ($xqfl_name); ?></div>
    <input type="hidden" name="flid" value="<?php echo ($xqfl_id); ?>" id="flid">
</div>

<div class="morefound"><img src="/themes/simplebootx/Public/new/image/huojian.png"> &nbsp;&nbsp;&nbsp;更多发现</div>
<div class="morefound-1">
    <?php if(is_array($huaban)): foreach($huaban as $key=>$vo): ?><a href="<?php echo U('portal/User/huaban',array('id'=>$vo['hb_id']));?>"><div class="morefound-1-2"><img src="<?php echo U('portal/find/imgHuaban',array('id'=>$vo['hb_id']));?>"><p><?php echo ($vo["hb_name"]); ?></p></div></a><?php endforeach; endif; ?>
</div>
<div class="morefound-2">
    <!--第一个-->
    <div class="morefound-2-1" id="cj-box">








    </div>
</div>
<!--没有更多-->
<div class="nomore">
    <div class="nomore_1" style="font-family: 微软雅黑;">╮(╯﹏╰）╭&nbsp;没有更多了.....</div>
    <a href="#"><i class="iconfont icon-daosanjiao" style="color: black"></i></a>
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



<script>

    var flid = $("#flid").val();
    //   console.log(flid);

    $.ajax({

        type: "GET",

        url: "/index.php?g=&m=InterestDetail&a=huabanCollect",

        dataType: "json",

        data:{
            id:flid
        },

        success:function(data){

            console.log(data);

            for(var i =0; i<data.length;i++){

                var pid = data[i].pid;
                var uid = data[i].uid;

                $("#cj-box").append(

                        '<div class="huaban">'+
                        '<div class="guajian"><img src="/themes/simplebootx/Public/new/image/guajian.png"></div>'+
                        '<div class="image-box">'+

                        '<a href="index.php?g=&m=Article&a=posts&pid='+pid+'"><img  src="index.php?g=&m=Index&a=imgCollect&id='+pid+'"></a>'+
                        '</div>'+
                        '<div class="bottom-box">'+
                        '<div class="touiang">'+
                        '<img src="index.php?g=user&m=public&a=avatar&id='+uid+'">&nbsp;&nbsp;'+data[i].user_nicename+'</div>'+
                        '<div class="guanzhu">'+
                        '<i class="iconfont icon-guanzhu" style="font-size: 2rem;color: red"></i>&nbsp;&nbsp;'+data[i].post_love+''+
                        '</div>'+
                        '</div>'+
                        '</div>'
                )
            }

            $("#cj-box").append(

                    '<div style="clear: both"></div>'
            )
        }
    })

</script>


</body>
</html>
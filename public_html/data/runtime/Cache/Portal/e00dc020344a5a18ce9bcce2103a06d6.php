<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>最新</title>
    <meta name="renderer" content="webkit">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="generator" content=""  data-variable="" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/new.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/index.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/iconfont.css">
    <link href="/themes/simplebootx/Public/favicon.ico"  rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/bootstrap.min.css">




</head>

<body>

<nav class="nav-box">
    <div class="nav-box-logo">
        <img src="/themes/simplebootx/Public/new/image/logo.png">
    </div>
    <div class="nav-box-ul">
        <ul id="nav">
            <li><a href="<?php echo U('Portal/index/index');?>" >首页</a></li>
            <li><a href="<?php echo U('Portal/find/index');?>" >发现</a></li>
            <li><a href="<?php echo U('Portal/newest/index');?>" class="active">最新</a>
                <!--        <ul>
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

    <div class="login-ul" id="user">

    </div>

</nav>
<div id="flip" style="margin-top: 7rem">全部分类</div>
<div id="panel">
   <?php if(is_array($category)): foreach($category as $key=>$vo): ?><div class="fenlei-name" ><?php echo ($vo["xqfl"]["name"]); ?></div><?php endforeach; endif; ?>
    <div style="clear: both"></div>
</div>
<div class="guide">
    <div class="unit">
        <?php if(is_array($one)): foreach($one as $key=>$vo): ?><a href="<?php echo U('portal/interestDetail/index',array('id'=>$vo['xqfl_id']));?>" class="unit_a"><?php echo ($vo["xqfl_name"]); ?></a><?php endforeach; endif; ?>
    </div>
    <div class="unit">
        <?php if(is_array($two)): foreach($two as $key=>$vo): ?><a href="<?php echo U('portal/interestDetail/index',array('id'=>$vo['xqfl_id']));?>" class="unit_a"><?php echo ($vo["xqfl_name"]); ?></a><?php endforeach; endif; ?>
    </div>
    <div class="unit" style="border-right:none ">
        <?php if(is_array($three)): foreach($three as $key=>$vo): ?><a href="<?php echo U('portal/interestDetail/index',array('id'=>$vo['xqfl_id']));?>" class="unit_a"><?php echo ($vo["xqfl_name"]); ?></a><?php endforeach; endif; ?>
    </div>
</div>
<div class="pictype">

    <?php if(is_array($xingqu)): foreach($xingqu as $key=>$vo): ?><a href="#"><div class="pictype_1" ><img src="<?php echo U('portal/newest/imgXingqu',array('id'=>$vo['xq_id']));?>" ><div class="pictype_2 " style=" margin: -1.5rem 0 0 -2rem;"><?php echo ($vo["xq_name"]); ?></div></div></a><?php endforeach; endif; ?>

    <div style="clear: both"></div>
</div>
<div class="middle">

    <div id="collect-box"></div>


    <div style="clear: both"></div>
</div>
<div class="nomore">
    <div class="nomore_1" style="font-family: 微软雅黑;font-size:1rem" id="load">╮(・o・)╭&nbsp;查看更多.....</div>
    <a href="#"><i class="iconfont icon-daosanjiao" style="color: black"></i></a>
</div>
<div class="footer" >
	<div class="footer_1">
		<div class="footer_1_1">
			<a href="#"> 首页</a><br><a href="#">采集工具</a><br><a href="#">官方微博</a><br><a href="#">信息举报</a>

		</div>
		<div class="footer_1_1">
			<a href="#"> 首页</a><br><a href="#">采集工具</a><br><a href="#">官方微博</a><br><a href="#">信息举报</a>
		</div>
		<div class="footer_1_1">
			<a href="#"> 首页</a><br><a href="#">采集工具</a><br><a href="#">官方微博</a><br><a href="#">信息举报</a>
		</div>
		<div class="footer_1_1">
			<br><a href="#">采集工具</a><br><a href="#">官方微博</a><br><a href="#">信息举报</a>
		</div>
		<div style="clear: both"></div>
	</div>
	<div class="footer_2">
		<div class="footer_2_1"><a href="#">关注我们</a></div>
		<div class="footer_2_2"><a href="#">信息博客</a><br><a href="#">新浪博客</a><br><a href="#">官方微信</a></div>
		<div class="footer_2_2"><a href="#">@新浪微博</a><br><a href="#">@新浪微博</a><br><a href="#">@新浪微博</a></div>
	</div>
	<div style="clear: both"></div>
	<div class="footer_3">Copyright2016-2017 Heifeiku Leijan Technology Co.Ltd All Rights Reserved<br>
		皖ICP备17010401号-2皖公网安备3301080233301号
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



<script src="/themes/simplebootx/Public/new/js/swiper.min.js"></script>
<script src="/themes/simplebootx/Public/new/js/bootstrap.min.js"></script>
<script src="/themes/simplebootx/Public/assets/js/slippry.min.js"></script>
<script src="/themes/simplebootx/Public/new/js/jquery-1.8.1.min.js"></script>

<script>
    $(document).ready(function(){
        $("#flip").click(function(){
            $("#panel").slideToggle("fast");
        });
    });
</script>
<!-- Initialize Swiper -->
<script>

    $(".nav-box .right-menu .close-menu").click(function(){

        $(".login-ul").slideUp();
        $(".nav-box-ul").slideUp();
        $(this).parent().removeClass("active");




    });


    $(".nav-box .right-menu .open-menu").click(function(){

        $(".login-ul").slideDown();
        $(".nav-box-ul").slideDown();
        $(this).parent().addClass("active");



    });



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


    var pageIndex=1;
    function getPostList(page) {
        $.ajax({
            type: "GET",

            url: "/index.php?g=&m=Newest&a=collect&p="+page,

            dataType: "json",

            success: function (data) {
                console.log(data);

                for (var i = 0; i < data.length; i++) {
                    var pid = data[i].pid;
                    var uid = data[i].uid;

                    $("#collect-box").append(
                            '<div class="middle_2">' +
                            '<div class="picture">' +
                            '<a href="index.php?g=&m=Article&a=posts&pid=' + pid + '"><img src="index.php?g=&m=Index&a=imgCollect&id=' + pid + '"></a>' +
                            '</div>' +
                            '<div class="touxiang">' +
                            '<div class="touxiang_1">' +
                            '<div class="touxiang_1_img"><img src="index.php?g=user&m=public&a=avatar&id=' + uid + '" ></div>' +
                            '<div class="touxiang_1_p"><p>' + data[i].user_nicename + '</p></div>' +
                            '</div>' +
                            '<div class="touxiang_2_p"><p>' + data[i].post_title + '</p></div>' +

                            '<div class="touxiang_3">' +
                            '<div class="touxiang_3_img"><a href="#"><i class="iconfont icon-guanzhu" style="color: #959595"></i></a></div>' +
                            '<div class="touxiang_3_p"><p>' + data[i].post_love + '</p></div>' +
                            '</div>' +
                            '<div class="touxiang_4">' +
                            '<div class="touxiang_4_img"><a href="#"><i class="iconfont icon-fenxiang" style="color: #959595"></i></a></div>' +
                            '</div>' +
                            '</div>' +
                            '</div>'
                    )
                }
                if(data.length<16)
                {
                    $("#load").text("╮(・o・)╭没有更多了.....");
                }

                pageIndex++;
            }
        });
    }

    getPostList(pageIndex);

    $("#load").click(function()
    {
        getPostList(pageIndex);
    });




</script>
</body>
</html>
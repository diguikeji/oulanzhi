<?php if (!defined('THINK_PATH')) exit();?><html><!DOCTYPE HTML>
<head>
    <title>活动</title>
    <meta name="renderer" content="webkit">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
    <meta name="generator" content=""  data-variable="" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="/themes/simplebootx/Public/favicon.ico"  rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/iconfont.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/index.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/activity.css">
    <link rel="stylesheet" href="/themes/simplebootx/Public/new/css/component.css">
    <link rel="stylesheet" href="/themes/simplebootx/Public/new/css/swiper.min.css">
    <!--    <style>
            .banner-box{
                width: 50%;
                height: 350px;
                position: absolute;
                left:27%;
                z-index: 9999;
                background-color:rgba(0,0,0,0.4);
                top: 22%;
                display: -webkit-box;
                display: -ms-flexbox;
                display: -webkit-flex;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-justify-content: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-align-items: center;
                align-items: center;
            }
        </style>-->
</head>
<body class="met-navfixed">
<!--[if lte IE 8]>
<div class="text-center padding-top-50 padding-bottom-50 bg-blue-grey-100">
    <p class="browserupgrade font-size-18">你正在使用一个<strong>过时</strong>的浏览器。请<a href="http://browsehappy.com/" target="_blank">升级您的浏览器</a>，以提高您的体验。</p>
</div>
<![endif]-->

<nav class="nav-box">
    <div class="nav-box-logo">
        <img src="/themes/simplebootx/Public/new/image/logo.png">
    </div>
    <div class="nav-box-ul">
        <ul id="nav">
            <li><a href="<?php echo U('Portal/index/index');?>" >首页</a></li>
            <li><a href="<?php echo U('Portal/find/index');?>" >发现</a></li>
            <li class="dropdown">
                <a href="<?php echo U('Portal/newest/index');?>" class="dropdown-toggle">
                    最新
                </a>
                <ul class="dropdown-menu" style="margin-top: 2.1rem;margin-left: -1rem;background-color: rgba(0,0,0,0.6);font-size: 12px!important;min-width: 3rem;text-align: center ;">
                    <li style="min-width: 100%"><a href="<?php echo U('User/center/caiji');?>" style="font-size: 1.5rem;line-height: 30px;;min-width: 100%">我的采集</a></li>
                    <li><a href="<?php echo U('User/center/index');?>"  style="font-size: 1.5rem;line-height: 30px;min-width: 100%">我的画板</a></li>
                    <li><a href="<?php echo U('User/center/love');?>"  style="font-size: 1.5rem;line-height: 30px;min-width: 100%">我的喜欢</a></li>
                    <li><a href="<?php echo U('User/follow/interestFollow');?>"  style="font-size: 1.5rem;line-height: 30px;min-width: 100%">兴趣</a></li>
                    <li><a href="<?php echo U('User/follow/userFollow');?>"  style="font-size: 1.5rem;line-height: 30px;min-width: 100%">用户</a></li>
                </ul>
            </li>
            <li><a href="<?php echo U('Portal/activity/index');?>" class="active">活动</a></li>
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


<!-- 幻灯片-->
<?php $home_slides=sp_getslide("portal_activity"); $home_slides=empty($home_slides)?$default_home_slides:$home_slides; ?>

<div class="slide-box">
 
        <div class="row" >
            <div class="col-md-12"  style="padding: 0px">
                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php if(is_array($home_slides)): foreach($home_slides as $key=>$vo): ?><div class="swiper-slide"><a href="<?php echo ($vo["slide_url"]); ?>"><img src="<?php echo sp_get_asset_upload_path($vo['slide_pic']);?>" alt=""></a></div><?php endforeach; endif; ?>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

        </div>

</div>

<!-- 内容 -->
<div class="hd-box-top" style="width: auto;height: auto;margin-top:2rem">
    <div class="hd-box">
        <div class="tip">
            <ul style="">
                <li>  <i class="iconfont icon-huo" style="font-size: 2.8rem;color: white"></i></li>
                <li style="margin-left: 2px">最火</li>
            </ul>
        </div>
        <div class="huodong-box">

            <?php if(is_array($activityRecommend)): foreach($activityRecommend as $key=>$vo): ?><div class="huodong">
                <div class="huodong-image-box">
                    <a href="<?php echo ($vo["hd_url"]); ?>" target="_blank"><img  src="<?php echo sp_get_asset_upload_path($vo['hd_img_url']);?>"></a>
                </div>
                <div class="huodong-bottom-box">
                    <div class="title">
                       <?php echo ($vo["hd_name"]); ?></div>
                    <div class="star">
                        <i class="iconfont icon-xingzhuang60kaobei2" style="font-size: 1rem;color: black"></i>
                        <i class="iconfont icon-xingzhuang60kaobei2" style="font-size: 1rem;color: black"></i>
                        <i class="iconfont icon-xingzhuang60kaobei2" style="font-size: 1rem;color: black"></i>
                        <i class="iconfont icon-xingzhuang60kaobei2" style="font-size: 1rem;color: grey"></i>
                        <i class="iconfont icon-xingzhuang60kaobei2" style="font-size: 1rem;color: grey"></i>
                    </div>
                </div>
            </div><?php endforeach; endif; ?>

                <div class="clear"></div>
            </div>



            <div class="clear"></div>
        </div>
    </div>
</div>
<!--<button class="more-box">点击查看更多>>>></button>-->





<div class="com-mide">
    <div class="hd-box">
        <div class="tip">
            <ul style="">
                <li>  <i class="iconfont icon-quanbu" style="font-size: 2.8rem;color: white"></i></li>
                <li style="margin-left: 2px">全部</li>
            </ul>
        </div>

        <div class="huodong-box">
            <?php if(is_array($activity)): foreach($activity as $key=>$vo): ?><div class="huodong">
                <div class="huodong-image-box">
                    <a href="<?php echo ($vo["hd_url"]); ?>" target="_blank"><img  src="<?php echo sp_get_asset_upload_path($vo['hd_img_url']);?>"></a>
                </div>
                <div class="huodong-bottom-box">
                    <div class="title">
                        <?php echo ($vo["hd_name"]); ?></div>
                    <div class="star">
                        <i class="iconfont icon-xingzhuang60kaobei2" style="font-size: 1rem;color: black"></i>
                        <i class="iconfont icon-xingzhuang60kaobei2" style="font-size: 1rem;color: black"></i>
                        <i class="iconfont icon-xingzhuang60kaobei2" style="font-size: 1rem;color: black"></i>
                        <i class="iconfont icon-xingzhuang60kaobei2" style="font-size: 1rem;color: grey"></i>
                        <i class="iconfont icon-xingzhuang60kaobei2" style="font-size: 1rem;color: grey"></i>
                    </div>
                </div>
            </div><?php endforeach; endif; ?>
            <div class="clear"></div>
        </div>

        <div class="clear"></div>
        </div>
    </div>
</div>
<!--<button class="more-box">点击查看更多>>>></button>-->

<!-- foot -->
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




<script src="/themes/simplebootx/Public/new/js/jquery-1.8.1.min.js"></script>
<script src="/themes/simplebootx/Public/new/js/swiper.min.js"></script>
<script src="/themes/simplebootx/Public/new/js/bootstrap.min.js"></script>
<script src="/themes/simplebootx/Public/new/js/classie.js"></script>
<script src="/themes/simplebootx/Public/new/js/modalEffects.js"></script>
<script src="/themes/simplebootx/Public/login.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 5000,
        autoplayDisableOnInteraction: false
    });

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


</script>
</body>
</html>
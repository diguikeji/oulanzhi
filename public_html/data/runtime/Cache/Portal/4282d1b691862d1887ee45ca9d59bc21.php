<?php if (!defined('THINK_PATH')) exit();?><html><!DOCTYPE HTML>
<head>
	<title>欧兰芝插件</title>
	<meta name="renderer" content="webkit">
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
	<meta name="generator" content=""  data-variable="" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link href="favicon.ico"  rel="shortcut icon" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/iconfont.css">
	<link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/index.css">
	<link rel="stylesheet" href="/themes/simplebootx/Public/new/css/swiper.min.css">
	<link rel="stylesheet" href="/themes/simplebootx/Public/new/css/other.css">

<style>
        .dropdown:hover .dropdown-menu {
			display: block;
		}
		.dropdown-menu li a:hover{
			background: #C1A062;
		}
		.dropdown-toggle-touxiang img:hover{
			opacity: 0.9;
		}
		@media screen and (max-width: 468px) {
			.dropdown:hover .dropdown-menu {
				display: none;
			}
		}
		  .title:hover{
        background: #FAFAFA
        }
        .button:hover{
        opacity: 0.9
        }
		@keyframes typing { from { width: 0; } }
		@keyframes blink-caret { 50% { border-color: transparent; } }
		.banner-box{
			width: 100%;
			height: 350px;
			overflow: hidden;
			margin-top: 6rem;
			margin-bottom: 4rem
		}
		.banner-box img{
			width: 100%;
			height: 100%;
			object-fit: cover; 
			-webkit-filter: blur(15px);
			-moz-filter: blur(15px);
			-o-filter: blur(15px);
			-ms-filter: blur(15px);
			filter: blur(5px);
		}
		.banner-title {
			font: bold 200% Consolas, Monaco, monospace;
			border-right: .05em solid;
			width: 16.5em; /* fallback */
			width: 30ch; /* # of chars */
			white-space: nowrap;
			overflow: hidden;
			animation: typing 3s steps(30, end), /* # of steps = # of chars */
			blink-caret .8s step-end infinite alternate;
			position: relative;
			color: white;
			font-size: 40px;
			top:-70%;
			font-weight: 700;
			right: -50%;
			width: 300px;
			height: auto;
			margin-left: -150px;
			text-shadow: 5px 5px 8px rgba(0,0,0,0.7);
		}
		.banner-sub-title{
			position: relative;
			color: white;
			font-size: 18px;
			top:-65%;
			right: -50%;
			width: 420px;
			height: auto;
			font-weight: 700;
			line-height: 30px;
			margin-left: -200px
		}
		.button{
		    width:280px;height:55px;background-color:#E54646;margin:0 auto;font-size:22px;margin-top:20px;color:white;border-radius:5px
		}
		.button a{
		    text-transform: none
		}
	
		.sub{
		    width:250px;height:50px;margin:0 auto;font-size:13px;
		}
		.left-part{
		    width:50%;float:left
		}
		.right-part{
		    width:50%;float:right
		}
	
	</style>
</head>
<body class="met-navfixed">

<nav class="nav-box">
	<div class="nav-box-logo">
		<img src="/themes/simplebootx/Public/new/image/logo.png">
	</div>
	<div class="nav-box-ul">
		<ul id="nav">
			<li><a href="index.html" class="active">首页</a></li>
			<li><a href="found/found.html">发现</a></li>
		<!--	<li id="new"><a href="new/new.html">最新</a>
			</li>-->
			<li class="dropdown">
				<a href="new/new.html" class="dropdown-toggle">
					最新
				</a>
				<ul class="dropdown-menu" style="margin-top: 2.1rem;margin-left: -1rem;background-color: rgba(0,0,0,0.6);font-size: 12px!important;min-width: 3rem;text-align: center ;">
					<li style="min-width: 100%"><a href="#" style="font-size: 1.5rem;line-height: 30px;;min-width: 100%">我的推荐</a></li>
					<li><a href="user/user.html"  style="font-size: 1.5rem;line-height: 30px;min-width: 100%">我的关注</a></li>
					<li><a href="palette/palette.html"  style="font-size: 1.5rem;line-height: 30px;min-width: 100%">我的画板</a></li>
					<li><a href="#"  style="font-size: 1.5rem;line-height: 30px;min-width: 100%">用户</a></li>
					<li><a href="#"  style="font-size: 1.5rem;line-height: 30px;min-width: 100%">主题</a></li>
				</ul>
			</li>
			<li><a href="activity/activity.html">活动</a></li>
		</ul>
	</div>

	<div class="right-menu">
		<img class="open-menu" src="image/menu.png" />
		<img class="close-menu" src="image/closeMenu.png" />
	</div>

	<div class="login-ul">
		<ul id="nav-login">
		<!--	<li id="jia"><a href="#" ><i class="iconfont icon-jia1"></i></a></li>-->
			<li id="info"><a href="#"><i class="iconfont icon-xinxi1"></i><div  class="dote" ></div></a></li>
			<li class="dropdown" >
				<a href="palette/palette.html" class="dropdown-toggle">
				<div class="dropdown-toggle-touxiang" style="width: 27px;height: 27px;border-radius: 50%;"><img src="/themes/simplebootx/Public/new/image/touxiang.png"></div></a>
				<ul class="dropdown-menu" style="min-width: 12rem;background: white;margin-left: -100px;margin-top: 20px">
					<div style="position: absolute;width: 13px;height: 13px;background-color: white;z-index: -1;right: 18px;top: -6px;transform:rotate(45deg);-ms-transform:rotate(45deg);-moz-transform:rotate(45deg);-webkit-transform:rotate(45deg);-o-transform:rotate(45deg);"></div>
					<li style="min-width: 100%"><a href="user/user.html" style="font-size: 1.5rem;line-height: 30px;;min-width: 100%;color: grey"><i class="iconfont icon-guanzhu" style="font-size: 1.8rem;float: left;margin-right: 0.8rem"></i>已关注<font style="float: right">271</font></a></li>
					<li><a href="palette/palette.html"  style="font-size: 1.5rem;line-height: 30px;min-width: 100%;color: grey"><i class="iconfont icon-huaban" style="font-size: 1.8rem;float: left;margin-right: 0.8rem" ></i>画板<font style="float: right">20</font></a></li>
					<li><a href="#"  style="font-size: 1.5rem;line-height: 30px;min-width: 100%;color: grey"><i class="iconfont icon-fensi" style="font-size: 1.8rem;float: left;margin-right: 0.8rem"></i>粉丝<font style="float: right">41</font></a></li>
					<li><a href="setting/setting.html"  style="font-size: 1.5rem;line-height: 30px;min-width: 100%;color: grey;text-align: center">设置</a></li>
					<li><a href="#"  style="font-size: 1.5rem;line-height: 30px;min-width: 100%;color: grey;text-align: center">退出</a></li>
				</ul>
			</li>
			<li id="login"><a href="#"><i class="iconfont icon-denglu"></i></a></li>
		</ul>
	</div>

</nav>


<div class="banner-box">
	<img src="/themes/simplebootx/Public/new/image/111.jpg">
	<div class="banner-title" >欧澜芝采集工具</div>
	<div class="banner-sub-title">使用欧澜芝采集工具，<br>你可以方便地保存任意网站上的图片、视频和截图</div>
</div>


<div class="body" style="margin-top:6rem">
	<div class="wrapper">
		<div class="units">
			<div class="unit chrome ">
			<div class="title " style="font-size:18px">
				<i class="iconfont icon-chrome" style="font-size:20px;margin-right:5px;margin-left:10px"></i>	Chrome 浏览器
					<i></i>
					<div class="arrow"></div>
				</div>
				<div class="inner">
					<div class="software clearfix">
						<div class="install-area">
							<div onclick="" class="button text-center">
								安装花瓣 Chrome 扩展
							</div>
							<div class="sub text-center" style="">
								你还可以选择安装
								<a class="go">书签栏采集工具</a>
							</div>
						</div>
						<h4 style="border-bottom: 2px solid gainsboro;padding-bottom:10px">如何使用花瓣 Chrome 扩展？</h4>
						<div class="left-part">
							<h4>方法一</h4>
							<p>浏览网页时，看到页面上感兴趣的图片、网页、视频，点击右上角的花瓣图标，选择相应功能进行采集。</p>
							<img src="/themes/simplebootx/Public/new/pluginImg/about_tools_chrome_01.jpg" width="478" height="320" data-baiduimageplus-ignore="1" />
						</div>
						<div class="right-part" >
							<h4>方法二</h4>
							<p>浏览网页时，把鼠标停留在你喜欢的图片上，点击右键，选择“采集到花瓣”（此方法不起作用时，推荐方法一）</p>
							<img src="/themes/simplebootx/Public/new/pluginImg/about_tools_chrome_02.jpg" width="478" height="320" data-baiduimageplus-ignore="1" />
						</div>
					</div>
					<div style="display: none" class="script clearfix">
						<div class="install-area">
							<div class="button white">

								<a href="javascript:(function(a,b,c,d){a[c]?a[c].ui.show():(d=b.createElement('script'),d.id='huaban_script',d.setAttribute('charset','utf-8'),d.src='https://hb.pro.youzewang.com/public/gather/plugin.js?'+Math.floor(+new Date/1e7),b.body.appendChild(d))})(window,document,'HUABAN_GLOBAL');" onclick="app.alert('请把按钮拖动到书签栏');return false;" class="mask-button">
									拖动此按钮到书签栏
								</a>
							</div>
							<div class="sub">
								返回安装
								<a class="go">花瓣 Chrome 扩展</a>
							</div>
						</div>
						<div class="left-part">
							<h4>使用方法</h4>
							<p>拖动上面的按钮到你的书签栏上。浏览网页时，点击书签栏上的“采集到花瓣”即可。</p>
							<img src="/themes/simplebootx/Public/new/pluginImg/about_tools_chrome_bookmark.jpg" width="478" height="320" data-baiduimageplus-ignore="1" />
						</div>

					</div>
				</div>
			</div>
			<div class="unit firefox">
				<div class="title" style="font-size:18px">
				<i class="iconfont icon-firefox" style="font-size:20px;margin-right:5px;margin-left:10px"></i>	Firefox（火狐）浏览器
					<i></i>
					<div class="arrow"></div>
				</div>
				<div class="inner">
					<div class="software clearfix">
						<div class="install-area">
						<div  class="button text-center" >	<a target="_blank" href="###"  style="color:white" >安装花瓣 Firefox 附加组件</a></div>
							<div class="sub">
								你还可以选择安装
								<a class="go">书签栏采集工具</a>
							</div>
						</div>
						<h3>如何使用花瓣 Firefox 附加组件</h3>
						<div class="left-part">
							<h4>方法一</h4>
							<p>浏览网页时，看到页面上感兴趣的图片、网页、视频，点击右上角的花瓣图标，选择相应功能进行采集。</p>
							<img src="/themes/simplebootx/Public/new/pluginImg/about_tools_firefox_01.jpg" width="478" height="320" data-baiduimageplus-ignore="1" />
						</div>
						<div class="right-part">
							<h4>方法二</h4>
							<p>浏览网页时，把鼠标停留在你喜欢的图片上，点击右键，选择“采集到花瓣”（此方法不起作用时，推荐方法一）</p>
							<img src="/themes/simplebootx/Public/new/pluginImg//about_tools_firefox_02.jpg" width="478" height="320" data-baiduimageplus-ignore="1" />
						</div>
					</div>
					<div style="display: none" class="script clearfix">
						<div class="install-area">
							<div class="button white">
								<font style="color:#767676">拖动此按钮到书签栏</font>
								<a href="javascript:(function(a,b,c,d){a[c]?a[c].ui.show():(d=b.createElement('script'),d.id='huaban_script',d.setAttribute('charset','utf-8'),d.src='https://hb.pro.youzewang.com/public/gather/plugin.js?'+Math.floor(+new Date/1e7),b.body.appendChild(d))})(window,document,'HUABAN_GLOBAL');" onclick="app.alert('请把按钮拖动到书签栏');return false;" class="mask-button">采集到花瓣</a>
							</div>
							<div class="sub">
								返回安装
								<a class="go">花瓣 Firefox 附加组件</a>
							</div>
						</div>
						<div class="left-part">
							<h4>使用方法</h4>
							<p>拖动上面的按钮到你的书签栏上。浏览网页时，点击书签栏上的“采集到花瓣”即可。</p>
							<img src="/themes/simplebootx/Public/new/pluginImg/about_tools_firefox_bookmark.jpg" width="478" height="320" data-baiduimageplus-ignore="1" />
						</div>

					</div>
				</div>
			</div>
			<div class="unit ie">
				<div class="title" style="font-size:18px">
				<i class="iconfont icon-msnui-logo-ie" style="font-size:22px;margin-right:5px;margin-left:10px"></i>	IE 浏览器
					<i></i>
					<div class="arrow"></div>
				</div>
				<div class="inner">
					<div style="display: none" class="software clearfix">
						<div class="install-area">
							<a target="_blank" href="//hbfile.b0.upaiyun.com/extensions/huaban-windows-ie-extension-setup.exe" class="button">安装 IE 插件</a>
							<div class="sub">
								你还可以选择安装
								<a class="go">书签栏采集工具</a>
							</div>
						</div>
						<h3>如何使用花瓣 IE 插件？</h3>
						<div class="left-part">
							<img src="/themes/simplebootx/Public/new/pluginImg/about_tools_ie.jpg" width="478" height="320" data-baiduimageplus-ignore="1" />
						</div>
						<div class="right-part">
							<p style="margin-top: 130px">浏览网页时，看到页面上感兴趣的图片、视频，点击右键，选择“采集图片（视频）到花瓣”</p>
						</div>
					</div>
					<div class="script clearfix">
						<div class="install-area">
							<div class="button white text-center">

								<a href="javascript:(function(a,b,c,d){a[c]?a[c].ui.show():(d=b.createElement('script'),d.id='huaban_script',d.setAttribute('charset','utf-8'),d.src='https://hb.pro.youzewang.com/public/gather/plugin.js?'+Math.floor(+new Date/1e7),b.body.appendChild(d))})(window,document,'HUABAN_GLOBAL');" onclick="app.alert('请把按钮拖动到书签栏');return false;" class="mask-button">拖动此按钮到书签栏</a>
							</div>
							<div class="sub">
								你还可以选择安装
								<a class="go">花瓣 IE 插件</a>
							</div>
						</div>
						<div class="left-part">
							<h4>使用方法</h4>
							<p>拖动上面的按钮到你的书签栏上。浏览网页时，点击书签栏上的“采集到花瓣”即可。</p>
							<img src="/themes/simplebootx/Public/new/pluginImg/about_tools_ie_bookmark.jpg" width="478" height="320" data-baiduimageplus-ignore="1" />
						</div>

					</div>
				</div>
			</div>
			<div class="unit others " style="height: 54px;margin-bottom:3rem">
				<div class="title" style="font-size:18px;">
				<i class="iconfont icon-iconfontquestion" style="font-size:22px;margin-right:5px;margin-left:10px"></i>	其它浏览器
					<i></i>
					<div class="arrow"></div>
				</div>
				<div class="inner" >
					<div class="script clearfix">
						<div class="install-area">
							<div class="button white">
									<font style="color:#767676">拖动此按钮到书签栏</font>
								<a href="javascript:(function(a,b,c,d){a[c]?a[c].ui.show():(d=b.createElement('script'),d.id='huaban_script',d.setAttribute('charset','utf-8'),d.src='https://hb.pro.youzewang.com/public/gather/plugin.js?'+Math.floor(+new Date/1e7),b.body.appendChild(d))})(window,document,'HUABAN_GLOBAL');" onclick="app.alert('请把按钮拖动到书签栏');return false;" class="mask-button">采集到花瓣</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div style="margin-top:100px;width100%;height:1px"></div>

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



<script src="/themes/simplebootx/Public/new/js/swiper.min.js"></script>
<script src="/themes/simplebootx/Public/new/js/bootstrap.min.js"></script>
<script src="/themes/simplebootx/Public/assets/js/slippry.min.js"></script>

<!-- Initialize Swiper -->
<script>




	$(".units .unit .title").click(function()
	{

		$(this).toggleClass("on");
		$(this).next().toggle("slow");

	});

	$(".go").click(function()
	{

		$(this).parent().parent().parent().hide();
		$(this).parent().parent().parent().next().show();

	});



</script>
</body>
</html>
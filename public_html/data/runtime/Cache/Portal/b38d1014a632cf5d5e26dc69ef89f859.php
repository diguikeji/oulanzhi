<?php if (!defined('THINK_PATH')) exit();?><html><!DOCTYPE HTML>
<head>
	<title>欧兰芝</title>
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
	<link rel="stylesheet" href="/themes/simplebootx/Public/new/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/js/layer/theme/default/layer.css">
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
			<li><a href="<?php echo U('Portal/index/index');?>" class="active">首页</a></li>
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


<!-- 幻灯片-->
<?php $home_slides=sp_getslide("portal_index"); $home_slides=empty($home_slides)?$default_home_slides:$home_slides; ?>

<div class="slide-box">
	<div class="container" style="width: 100%;">
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


	<div class="search-box">
		<input class="search-box-input" placeholder="点击搜索一下您就知道">
		<button class="sousuo"><i class="iconfont icon-sousuo"></i></button>
	</div>
</div>

<!-- 内容 -->
<div class="hb-box" id="hb-box">

</div>

<button class="more-box" id="load">点击查看更多>>>></button>



<div class="com-mide">
	<h3>为您推荐</h3>
	<p >———&nbsp;&nbsp; E-COMMERCE&nbsp;&nbsp; ———</p>
	<div class="hb-box" id="hb-box-recommended" style="margin-top: 3rem;padding-bottom: 3rem">

	</div>

	<div style="margin-bottom: 3rem"><button class="more-box" id="loadRecommend">点击查看更多>>>></button></div>
</div>


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


<script src="/themes/simplebootx/Public/new/js/jquery/1.9.1/jquery.min.js"></script>
<script src="/themes/simplebootx/Public/new/js/swiper.min.js"></script>
<script src="/themes/simplebootx/Public/new/js/bootstrap.min.js"></script>
<script src="/themes/simplebootx/Public/assets/js/slippry.min.js"></script>

<script src="/themes/simplebootx/Public/login.js"></script>
<script src="/themes/simplebootx/Public/new/js/layer/layer.js"></script>

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


	var pageIndex=1;
	function getPostList(page)
	{
		$.ajax({

			type: "GET",

			url: "/index.php?g=&m=Index&a=getPostList&p="+page,

			dataType: "json",

			success: function (data) {
				//console.log(data);
				//var html ='';
				for(var i =0; i<data.length;i++){
					var pid = data[i].pid;
					var uid = data[i].uid;

					$("#hb-box").append(
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
							'<div class="title-box">'+data[i].post_title+
							'</div>'+
							'</div>'
					)
				}


				$("#hb-box").append(
						'<div class="clear">'+
						'</div>'

				);

				if(data.length<16)
				{
					$("#load").text("没有更多数据了");
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

	var pageIndexRecommend=1;
	function getPostListRecommend(page)
	{
		$.ajax({

			type: "GET",

			url: "/index.php?g=&m=Index&a=getRecommended&p="+page,

			dataType: "json",

			success: function (data) {
				console.log(data);
				//var html ='';
				for(var i =0; i<data.length;i++){
					var pid = data[i].pid;
					var uid = data[i].uid;
					$("#hb-box-recommended").append(
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
							'<div class="title-box">'+data[i].post_title+'</div>'+
							'</div>'
					)
				}
				$("#hb-box-recommended").append(
						'<div class="clear">'+
						'</div>'

				)

				if(data.length<16)
				{
					$("#loadRecommend").text("没有更多数据了");
				}

				pageIndexRecommend++;
			}
		});
	}

	getPostListRecommend(pageIndexRecommend);

	$("#loadRecommend").click(function()
	{
		getPostListRecommend(pageIndexRecommend);
	});


</script>
</body>
</html>
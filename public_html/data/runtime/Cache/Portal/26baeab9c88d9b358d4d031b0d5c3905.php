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
	<link rel="stylesheet" href="/themes/simplebootx/Public/new/css/detail.css">
	<link rel="stylesheet" href="/themes/simplebootx/Public/new/css/share.css">
	<link rel="stylesheet" href="/themes/simplebootx/Public/new/css/component.css">
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


<div class="hb-detail">
	<div class="hb-detail-box">
		<div class="img-detail-box">
			<ul  class="share">
				<li><a href="#"><i class="iconfont icon-jia1" style="font-size: 2rem;color: white;"></i></a></li>
				<li><a href="#"><span id="love"></span></a></li>
				<li><a href="javascript:void(0)"><i class="iconfont icon-fenxiang" id="share" style="font-size: 2rem;color: white;"></i></a></li>
			</ul>
			<div>
				<img src="<?php echo U('Portal/index/imgCollect',array('id'=>$pid));?>" style="object-fit:cover">
			</div>
		</div>
		<div class="detail-bbs-box">
			<div class="info-box">
				<div class="touxiang-box"> <img src="<?php echo U('user/public/avatar',array('id'=>$uid));?>"></div>
				<div class="item-inner">
					<div class="item-inner-text">
						<div class="item-title"><?php echo ($user_nicename); ?></div>
						<input type="hidden" id="pid" value="<?php echo ($pid); ?>">
					</div>
					<div class="item-inner-text">
						<div class="item-title"><?php echo ($post_title); ?></div>
					</div>
				</div>
				<div class="zan-box">
					<div class="item-inner">
						<div class="item-inner-text">
							<div class="item-title" style="margin-top: 0.25rem"> <a href="<?php echo U('article/do_like',array('pid'=>$pid));?>"> <i class="iconfont icon-zan" style="color:#D1D1D1;font-size: 2rem;margin: 0 auto"></i></a></div>
						</div>
						<div class="item-inner-text">
							<div class="item-title" style="margin-top: -0.25rem"><span id="like"></span></div>
						</div>
					</div>
				</div>
			</div>
			<div class="info-content">
	          <?php echo ($post_content); ?>
			</div>

<!--加入评论钩子 -->
			<?php echo hook('comment',array( 'post_id'=>$pid, 'post_table'=>'posts', 'post_title'=>$post_title ));?>

	</div>
	</div>
	<div class="clear"></div>
</div>





<!-- 内容 -->
<div class="com-mide" >
	<h3>Ta的采集</h3>
	<p >———&nbsp;&nbsp; COLLECTIONS&nbsp;&nbsp; ———</p>
	<div class="hb-box" id="hb-box" style="margin-top: 3rem">

	</div>
	<button class="more-box" id="load">点击查看更多>>>></button>
</div>





<div class="com-mide" style="background:none">
	<h3>为您推荐</h3>
	<p >———&nbsp;&nbsp; E-COMMERCE&nbsp;&nbsp; ———</p>
	<div class="hb-box" id="hb-box-recommended" style="margin-top: 3rem;padding-bottom: 3rem">


	</div>
	<button class="more-box" id="loadRecommend">点击查看更多>>>></button>
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



<script src="/themes/simplebootx/Public/new/js/jquery-1.8.1.min.js"></script>
<script src="/themes/simplebootx/Public/new/js/swiper.min.js"></script>
<script src="/themes/simplebootx/Public/new/js/bootstrap.min.js"></script>
<script src="/themes/simplebootx/Public/assets/js/slippry.min.js"></script>
<script src="/themes/simplebootx/Public/login.js"></script>
<script src="/themes/simplebootx/Public/assets/js/classie.js"></script>
<script src="/themes/simplebootx/Public/assets/js/modalEffects.js"></script>
<script src="/themes/simplebootx/Public/new/js/share.js"></script>


<script>

	$('#share').shareConfig({
		Shade : true, //是否显示遮罩层
		Event:'click', //触发事件
		Content : 'Share', //内容DIV ID
		Title : '分享给朋友' //显示标题
	});

	//点赞数量显示
	var pid = $("#pid").val();

	$.ajax({
		type: "GET",

		url : "/index.php?g=&m=Article&a=likeView",

		data:{

			pid:pid
		},

		dataType: "json",

		success:function(data) {

			$("#like").append(
					data.post_like
			)

		}
	});





    //显示采集喜欢的头标

	$.ajax({
		type: "POST",

		url: "/index.php?g=&m=Article&a=loveView",

		data:{
			id:pid
		},

		dataType: "json",

		success:function(data){
			$("#xin").remove();
			if(data == 1){

				$("#love").append(
						'<i id="xin" class="iconfont icon-guanzhu" style="font-size: 2rem;color: red;">'+'</i>'
				)
			}else{

				$("#love").append(
						'<i id="xin" class="iconfont icon-guanzhu" style="font-size: 2rem;color: white;">'+'</i>'
				)
			}

		}
	});



	//点击采集喜欢
	$("#love").click(function(){
		//alert(111);
	   var pid = $("#pid").val();

		$.ajax({
			type: "POST",

			url: "/index.php?g=&m=Article&a=do_love",

			data:{
			   id:pid
			},

			dataType: "json",

			success:function(data){
				$("#xin").remove();
				if(data == 0){

					$("#love").append(
							'<i id="xin" class="iconfont icon-guanzhu" style="font-size: 2rem;color: white;">'+'</i>'
					)
				}else if(data == 1){

					$("#love").append(
							'<i id="xin" class="iconfont icon-guanzhu" style="font-size: 2rem;color: red;">'+'</i>'
					)
				}else{
					
				}
			}
		});
	});




	//用户自己的采集
	var pageIndex=1;
	function getPostList(page)
	{
		$.ajax({

			type: "GET",

			url: "/index.php?g=&m=Article&a=hisCollect&p="+page,

			dataType: "json",

			success: function (data) {
				for(var i =0; i<data.length;i++){
					var pid = data[i].pid;
					var uid = data[i].uid;
					$("#hb-box").append(
							'<div class="huaban">'+
							'<div class="guajian"><img src="/themes/simplebootx/Public/new/image/guajian.png"></div>'+
							'<div class="image-box">'+

							'<a href="index.php?g=&m=Article&a=posts&pid='+pid+'"><img  src="index.php?g=portal&m=index&a=imgCollect&id='+pid+'"></a>'+
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
				$("#hb-box").append(
						'<div class="clear">'+
						'</div>'

				)

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


	//系统推荐的采集
	var pageIndexRecommend=1;
	function getPostListRecommend(page)
	{
		$.ajax({

			type: "GET",

			url: "/index.php?g=&m=Index&a=getRecommended&p="+page,

			dataType: "json",

			success: function (data) {
				for(var i =0; i<data.length;i++){
					var pid = data[i].pid;
					var uid = data[i].uid;
					console.log(pid);
					$("#hb-box-recommended").append(
							'<div class="huaban">'+
							'<div class="guajian"><img src="/themes/simplebootx/Public/new/image/guajian.png"></div>'+
							'<div class="image-box">'+

							'<a href="index.php?g=&m=Article&a=posts&pid='+pid+'"><img  src="index.php?g=portal&m=index&a=imgCollect&id='+pid+'"></a>'+
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
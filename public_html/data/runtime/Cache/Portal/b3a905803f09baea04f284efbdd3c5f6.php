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
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/iconfont.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/index.css">
    <link rel="stylesheet" href="/themes/simplebootx/Public/new/css/swiper.min.css">
    <link rel="stylesheet" href="/themes/simplebootx/Public/new/css/component.css">
    
    <style>
        body{
            background-image: url("/themes/simplebootx/Public/new/image/hb-edit-bg.png");
            background-size: cover;
        }
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        .dropdown-menu li a:hover{
            background: #C1A062;
        }
        .dropdown-toggle-touxiang img:hover{
            opacity: 0.9;
        }
         .tip-login{
            width: 630px;
            height: 355px;
            position:absolute;
            top:50%;
            left:50%;
            margin:-230px 0 0 -315px;
        }
        .info-tip{
            width: 630px;
            height: 355px;
            position: relative;
            z-index: 9;
            text-align: center;
            font-size: 5rem;
            color: #B25900;
            font-family: 华文行楷;
            top:-380px;
            word-wrap:break-word;
            padding-left: 35px;
            padding-right: 35px;
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
        .tishi{
            width: auto;
            height: auto;
            position: absolute;
            z-index: 9;
            font-size: 2.5rem;
            text-align: center;
            text-shadow: -1px -1px 1px #fff, 1px 1px 1px #fff;

            top: 110%;
            left: 10%;
        }
        @media screen and (max-width: 468px) {
            .dropdown:hover .dropdown-menu {
                display: none;
            }
            .tip-login{
                width: 100%;
                height: auto;
                left: 0%;
                margin-left: 0;
                margin-top: -12rem;
            }
            .tip-login img{
                max-width: 100%;
            }
            .tishi{
                font-size: 2.5rem;
                left: 0%;
                top: 90%;

            }
            .info-tip{
                font-size: 3rem;
                top: -15rem;
                padding-left: 5%;
                padding-right: 5%;
                height: auto;
                width: 100%;
            }

        }
    </style>

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



<div class="tip-login">
    <img src="/themes/simplebootx/Public/new/image/tip-ban.fw.png" style="max-width: 100%">
    <?php if(isset($message)): ?><div class="info-tip"><?php echo($message); ?>(^_^)</div>
    <?php else: ?>
    <div class="info-tip"><?php echo($error); ?>(>﹏<)</div><?php endif; ?>
    
    
    <div class="tishi">欧兰芝温馨提示：页面自动<a  id="href" href="<?php echo($jumpUrl); ?>"> 跳转 </a>等待时间：<b id="wait"><?php echo($waitSecond); ?></b></div>
</div>



<script src="/themes/simplebootx/Public/new/js/jquery-1.8.1.min.js"></script>
<script src="/themes/simplebootx/Public/login.js"></script>
<script src="/themes/simplebootx/Public/assets/js/classie.js"></script>
<script src="/themes/simplebootx/Public/assets/js/modalEffects.js"></script>

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



	(function(){
	var wait = document.getElementById('wait'),href = document.getElementById('href').href;
	var interval = setInterval(function(){
		var time = --wait.innerHTML;
		if(time <= 0) {
			location.href = href;
			clearInterval(interval);
		};
	}, 1000);
	})();
</script>

</body>
</html>
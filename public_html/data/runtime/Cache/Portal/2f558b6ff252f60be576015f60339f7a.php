<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<div lang="en">
<head>
    <meta charset="utf-8">
    <title>搜索</title>
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
    	<link rel="stylesheet" href="/themes/simplebootx/Public/new/css/component.css">


    <style>
        .search{
            width: 90%;
            height: 3.5rem;
            border-radius: 5px;
            border: 1px solid gainsboro;
            margin: 0 auto;
            margin-top: -4rem;
        }
        .search input{
            width: 90%;
            height: 3.5rem;
            background-color:transparent;
            border-radius: 5px;
            border: 0px solid gainsboro;
            margin-left: 5%;
            outline: medium
        }

        .search-icon button{
            z-index: 99;
            float: right;
            margin-top: -10rem;
            margin-right: 0.5rem;
            width: 3rem;
            height: 3rem;
            background: rgba(255, 255, 255, 0);
            border: 0px;
            outline: medium;
        }
        .search-icon button i{
            font-size: 2.5rem;
            color: #959595;
        }
        .search-icon button i:hover{
            color: black;
        }

    </style>

</head>



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







<div id="flip" style="margin-top: 7rem">全部分类</div>
<div id="panel">

    <?php if(is_array($category)): foreach($category as $key=>$vo): ?><div class="fenlei-name" ><?php echo ($vo["xqfl"]["name"]); ?></div><?php endforeach; endif; ?>
</div>
<div class="guide" style="padding-top: 5rem;height: 12rem">
    <div class="unit">
        <?php if(is_array($one)): foreach($one as $key=>$vo): ?><a href="<?php echo U('portal/interestDetail/index',array('id'=>$vo['xqfl_id']));?>" class="unit_a"><?php echo ($vo["xqfl_name"]); ?></a><?php endforeach; endif; ?>
    </div>
    <div class="unit">
        <?php if(is_array($two)): foreach($two as $key=>$vo): ?><a href="<?php echo U('portal/interestDetail/index',array('id'=>$vo['xqfl_id']));?>" class="unit_a"><?php echo ($vo["xqfl_name"]); ?></a><?php endforeach; endif; ?>
    </div>
    <div class="unit" style="border-right:none ">
        <?php if(is_array($three)): foreach($three as $key=>$vo): ?><a href="<?php echo U('portal/interestDetail/huaban',array('id'=>$vo['xqfl_id']));?>" class="unit_a"><?php echo ($vo["xqfl_name"]); ?></a><?php endforeach; endif; ?>
    </div>
    <div class="search">
        <form method="post" action="<?php echo U('Portal/search/index');?>">
            <input name="postname" placeholder="点击搜索一下您就知道">
        <div class="search-icon" ><button type="submit"><i class="iconfont icon-sousuo" ></i></button></div>
        </form>
        </div>
    </div>


<div class="middle">

    <?php if(is_array($list)): foreach($list as $key=>$vo): ?><div class="middle_2">
        <div class="picture">
            <img src="<?php echo U('Portal/index/imgCollect',array('id'=>$vo['pid']));?>">
        </div>
        <div class="touxiang">
            <a href="<?php echo U('Portal/user/index',array('id'=>$vo['uid']));?>">
            <div class="touxiang_1">
                <div class="touxiang_1_img"><img src="<?php echo U('User/public/avatar',array('id'=>$vo['uid']));?>" ></div>
                <div class="touxiang_1_p"><p><?php echo ($vo["user_nicename"]); ?></p></div>
            </div>
            </a>
            <div class="touxiang_2_p"><p><?php echo ($vo["post_title"]); ?></p></div>

            <div class="touxiang_3">
                <div class="touxiang_3_img"><a href="#"><i class="iconfont icon-guanzhu" style="color: #959595"></i></a></div>
                <div class="touxiang_3_p"><p><?php echo ($vo["post_love"]); ?></p></div>
            </div>
            <div class="touxiang_4">
                <div class="touxiang_4_img"><a href="#"><i class="iconfont icon-fenxiang" style="color: #959595"></i></a></div>
            </div>
        </div>
    </div><?php endforeach; endif; ?>

    <div style="clear: both"></div>
</div>
<div class="nomore">
    <div class="nomore_1" style="font-family: 微软雅黑;font-size:1rem">╮(・o・)╭&nbsp;没有更多了.....</div>
    <a href="#"><i class="iconfont icon-daosanjiao" style="color: black"></i></a>
</div>
<div class="footer">
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
    <div class="footer_3">Copyright©2016-2017 Heifeiku Leijan Technology Co.Ltd All Rights Reserved<br>
        皖ICP备17010401号-2皖公网安备3301080233301号
    </div>

</div>
</div>
<script src="/themes/simplebootx/Public/new/js/jquery-1.8.1.min.js"></script>
<script src="/themes/simplebootx/Public/new/js/bootstrap.min.js"></script>
<script src="/themes/simplebootx/Public/login.js"></script>

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


</script>
</body>
</html>
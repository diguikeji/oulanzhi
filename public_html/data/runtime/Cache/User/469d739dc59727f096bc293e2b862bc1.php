<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo ($user_nicename); ?>欧澜芝的个人主页</title>
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/palette.css">
    <link href="/themes/simplebootx/Public/favicon.ico"  rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/iconfont.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/index.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/header.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/lable.css">
    <link rel="stylesheet" href="/themes/simplebootx/Public/new/css/component.css">
    <meta name="renderer" content="webkit">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="generator" content=""  data-variable="" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
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





<!--用户中心头部-->
<div class="yesterday">
	<div class="yesterday_1">
		<div class="yesterday_1_1">
			<a href="<?php echo U('User/center/index');?>"><img src="<?php echo sp_get_user_avatar_url($avatar);?>"></a>
		</div>
		<div class="yesterday_1_2">
			<div class="yesterday_1_2_1"><span id="fcount"></span></div>
			<div class="yesterday_1_2_2"><span id="gcount"></span></div>
		</div>
		<div class="yesterday_1_3">
			<a href="<?php echo U('User/center/fans');?>"> <div class="yesterday_1_3_1">粉丝</div></a>
			<div class="yesterday_1_3_2"></div>
			<a href="<?php echo U('User/follow/userFollow');?>">   <div class="yesterday_1_3_3">关注</div></a>
		</div>
	</div>
	<div class="yesterday_2">
		<div class="yesterday_2_1"><?php echo ($user_nicename); ?></div>
		<div class="yesterday_2_2"><?php echo ($signature); ?></div>
	</div>
	<div class="yesterday_3">
		<a href="<?php echo U('user/profile/edit');?>"><div class="yesterday_3_1">账号设置</div></a>
	</div>
</div>

<!--红色部分-->
<div  class="hongse">
    <input type="hidden" name="id" id="id" value="<?php echo ($id); ?>" />

    <a href="<?php echo U('User/center/index');?>">
        <div class="hongse_1">
            <div class="hongse_1_1"  ><span id="hcount"></span></div>
            <div class="hongse_1_2" >画板</div>
        </div>
    </a>
    <a href="<?php echo U('User/center/caiji');?>">
        <div class="hongse_2"></div>
        <div class="hongse_1">
            <div class="hongse_1_1" ><span id="ccount"></span></div>
            <div class="hongse_1_2" >采集</div>

        </div></a>
    <a href="<?php echo U('User/center/love');?>">
        <div class="hongse_2"></div>
        <div class="hongse_1">
            <div class="hongse_1_1"><span id="lcount"></span></div>
            <div class="hongse_1_2">喜欢</div>
        </div></a>
    <a href="<?php echo U('User/center/tag');?>">
        <div class="hongse_2"></div>
        <div class="hongse_1">
            <div class="hongse_1_1" style="color: white;"><span id="tcount"></span></div>
            <div class="hongse_1_2" style="color: white">标签</div>
            <div  class="heng" style="width: 50px;height: 3px;background: white;margin: 0 auto;margin-top: -0.5rem"></div>
        </div></a>
</div>

<!--标签类型-->
<div class="title-detail">
    <a href="<?php echo U('User/center/tag');?>">所有标签</a>
     <input type="button" name="button" id="button1" value="全选">
    <button class="done" id="done">完成</button>
    <button class="delete" id="delete">删除</button>
    <button class="label-button" style="">编辑标签</button>
</div>
<!--标签内容-->
<div class="lable-detail-box" id="tag-box">



</div>



<!--没有更多-->
<!--<div class="nomore">
    <div class="nomore_1" style="font-family: 微软雅黑;font-size:1.4rem">╮(╯﹏╰）╭&nbsp;没有更多了.....</div>
    <a href="#"><i class="iconfont icon-daosanjiao" style="color: black"></i></a>
</div>-->


<!--script-->
<!-- Initialize Swiper -->
<script src="/themes/simplebootx/Public/new/js/jquery-1.8.1.min.js"></script>
<script src="/themes/simplebootx/Public/new/js/bootstrap.min.js"></script>
<script src="/themes/simplebootx/Public/login.js"></script>
<script src="/themes/simplebootx/Public/new/js/classie.js"></script>
<script src="/themes/simplebootx/Public/new/js/modalEffects.js"></script>
<script type="text/javascript">


    var id = $("#id").val();
    console.log(id);

    $.ajax({
        type: "GET",

        url: "/index.php?g=portal&m=user&a=userCount",

        dataType: "json",

        data:{
            id:id
        },

        success:function(data){
            console.log(data);

            document.getElementById('hcount').innerHTML=data.hcount;
            document.getElementById('ccount').innerHTML=data.ccount;
            document.getElementById('lcount').innerHTML=data.lcount;
            document.getElementById('tcount').innerHTML=data.tcount;
            document.getElementById('fcount').innerHTML=data.fcount;
			document.getElementById('gcount').innerHTML=data.gcount;
        }
    });





    $(document).ready(function(){
        $(".icon").click(function(){
            $(this).parent().remove();
        });
    });

    var login = document.getElementById('login');
    var over = document.getElementById('over');
    function show()
    {
        login.style.display = "block";
        over.style.display = "block";
    }
    function hide()
    {
        login.style.display = "none";
        over.style.display = "none";
    }


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

        url: "/index.php?g=User&m=center&a=tagView",

        dataType: "json",

        success:function(data) {

            for (var i = 0; i < data.length; i++) {
                $("#tag-box").append(
                        '<a href="/index.php?g=User&m=center&a=tagDetail&id='+data[i].tag_id+'" class="lable">' + data[i].tag_name + '<span class="extra">' + data[i].pcount + '</span><i data-tag-id="'+data[i].tag_id+'" id="tagClick"  class="iconfont icon-cha1 icon"></i></a>'
                )
            }
        }
        });
        


 
  $("#tag-box").on('click',".icon",function(){
    
    var tag_id= $(this).attr("data-tag-id");  
    
     if(window.confirm('你确定要删除此标签吗？')){
    $.ajax({
        type: "GET",

        url: "/index.php?g=User&m=center&a=deleteTag",

        dataType: "json",
        
        data:{
            
            tid:tag_id
        },
        success:function(data){
             
          window.location.href="/index.php?g=User&m=center&a=tag"  
          
          
          }
        
    })
    
     }else{
         
          window.location.href="/index.php?g=User&m=center&a=tag"
          
     }
     
});


   $(".label-button").click(function(){

        $("#button1").show();
        $("#done").show();
        $("#delete").show();
        $(".label-button").hide();
    });
    
    $("#delete").click(function(){

        $("#button1").hide();
        $("#done").hide();
        $("#delete").hide();
        $(".label-button").show();
        
    });
    $("#done").click(function(){

        $("#button1").hide();
        $("#done").hide();
        $("#delete").hide();
        $(".label-button").show();
    });
</script>
</body>
</html>
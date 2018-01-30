<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo ($user[0]["user_nicename"]); ?>欧澜芝的个人主页</title>
    <meta name="renderer" content="webkit">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="generator" content=""  data-variable="" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="/themes/simplebootx/Public/favicon.ico"  rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/new.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/iconfont.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/collect.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/index.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/palette.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/header.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/lable.css">
    <link rel="stylesheet" href="/themes/simplebootx/Public/new/css/component.css">    

</head>
<body>
    
<!--头部-->
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




<!--他人用户中心头部-->

<div class="yesterday">
	<div class="yesterday_1">
		<div class="yesterday_1_1">
			<a href="#"><img src="<?php echo U('User/public/avatar',array('id'=>$user[0][id]));?>"></a>
		</div>
		<div class="yesterday_1_2">
			<div class="yesterday_1_2_1"><span id="fcount"></span></div>
			<div class="yesterday_1_2_2"><span id="gcount"></span></div>
		</div>
		<div class="yesterday_1_3">
			<a href="<?php echo U('Portal/user/fans',array('id'=>$user[0][id]));?>"> <div class="yesterday_1_3_1">粉丝</div></a>
			<div class="yesterday_1_3_2"></div>
			<a href="<?php echo U('Portal/user/hisUser',array('id'=>$user[0][id]));?>">   <div class="yesterday_1_3_3">关注</div></a>
		</div>
	</div>
	<div class="yesterday_2">
		<div class="yesterday_2_1"><?php echo ($user[0]["user_nicename"]); ?></div>
		<div class="yesterday_2_2"><?php echo ($user[0]["signature"]); ?></div>
	</div>
	<div class="yesterday_3" id="guanzhu">
	</div>
</div>


<!--红色部分-->
<div  class="hongse">

    <input type="hidden" name="id" id="id" value="<?php echo ($user[0]["id"]); ?>" />

    <a href="<?php echo U('portal/user/index',array('id'=>$user[0][id]));?>">
        <div class="hongse_1">
            <div class="hongse_1_1"  ><span id="hcount"></span></div>
            <div class="hongse_1_2" >画板</div>
        </div>
    </a>
    <a href="<?php echo U('Portal/user/caiji',array('id'=>$user[0][id]));?>">
        <div class="hongse_2"></div>
        <div class="hongse_1">
            <div class="hongse_1_1" style="color: white;"><span id="ccount"></span></div>
            <div class="hongse_1_2" style="color: white">采集</div>
            <div   class="heng" style="width: 50px;height: 3px;background: white;margin: 0 auto;margin-top: -0.5rem"></div>
        </div></a>
    <a href="<?php echo U('Portal/user/love',array('id'=>$user[0][id]));?>">
        <div class="hongse_2"></div>
        <div class="hongse_1">
            <div class="hongse_1_1"><span id="lcount"></span></div>
            <div class="hongse_1_2">喜欢</div>
        </div></a>
    <a href="<?php echo U('Portal/user/tag',array('id'=>$user[0][id]));?>">
        <div class="hongse_2"></div>
        <div class="hongse_1">
            <div class="hongse_1_1"><span id="tcount"></span></div>
            <div class="hongse_1_2">标签</div>
        </div></a>
</div>


<!--中间部分-->
  <div class="lable-detail-box">



    <div class="middle-box" id="collect">
</div>

</div>



    <div style="clear: both"></div>
</div>
<div class="nomore" id="load">
    <div class="nomore_1" style="font-family: 微软雅黑;font-size:1rem">查看更多</div>
   <i class="iconfont icon-daosanjiao" style="color: black"></i>
</div>





<script src="/themes/simplebootx/Public/new/js/jquery-1.8.1.min.js"></script>
<script src="/themes/simplebootx/Public/new/js/swiper.min.js"></script>
<script src="/themes/simplebootx/Public/login.js"></script>
<script src="/themes/simplebootx/Public/new/js/bootstrap.min.js"></script>
<script src="/themes/simplebootx/Public/assets/js/slippry.min.js"></script>
<script src="/themes/simplebootx/Public/assets/js/classie.js"></script>
<script src="/themes/simplebootx/Public/assets/js/modalEffects.js"></script>


<script>

    var id = $("#id").val();
  //关注按钮状态
    $.ajax({
        
        type: "GET",

        url: "/index.php?g=portal&m=user&a=userFollowStatus",

        dataType: "json",

        data:{
            
            id:id
            
        },
        
        success:function(data){
            
            console.log(data);
            
            if(data==0){
                
                $("#guanzhu").append(
                    
                     '<div class="yesterday_3_1 " ><button class="userclick">关注+</button></div>'
                    
                    )
                
            }else{
                
                $("#guanzhu").append(
                    
                     '<div class="yesterday_3_1 "><button class="userclick">已关注</button></div>'
                    
                    )
                
            }
        }
        
    });
    
    
     $("body").on("click",".userclick",function()
    {
        
       if($(this).text()=="关注+")
       {
           $.ajax({
               type: "GET",

               url: "/index.php?g=User&m=follow&a=clickUserFollow",
               
               dataType: "json",
               
               data:{
                   
                  id:id
                  
               },
               
               success:function(data){
                   if(data.status == 0){
                       alert(data.info);
                       $(location).attr('href', data.url);
                   }
                   if(data ==1){
                       alert("亲，自己不能关注自己哦！")
                   }
               }
           })
           
            $(this).text("已关注")
         
       }
       else{
           
         $.ajax({
               type: "GET",

               url: "/index.php?g=User&m=follow&a=clickCancelUser",
               
               dataType: "json",
               
               data:{
                   
                  id:id
                  
               },
               
               success:function(data){
                   
                  
               }
           })
           
            $(this).text("关注+")

       }
       
    });


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



    var pageIndex=1;
    function getPostList(page) {
        $.ajax({
            type: "GET",

            url: "/index.php?g=Portal&m=user&a=collectDetail&p="+page,

            dataType: "json",
            
            data:{
                
                id:id
            },

            success: function (data) {
                for (var i = 0; i < data.length; i++) {
                  

                    var pid = data[i].pid;
                    var uid = data[i].uid;

                    $("#collect").append(
                          '<div class="lable-box">' +
                        '<div class="img-detail-box">' +
                        '<a href="index.php?g=&m=Article&a=posts&pid='+pid+'"><img src="index.php?g=&m=Index&a=imgCollect&id=' + pid + '"></a>' +
                        '</div>' +
                        '<div class="user-box">' +
                        '<div class="user-touxiang">' +
                        '<img src="index.php?g=user&m=public&a=avatar&id=' + uid + '">' +
                        '</div>' +
                        '<div class="title-box-right">' +
                        '<div class="title-left">' +
                        data[i].post_title +
                        '</div>' +
                        '<div class="title-right">' +
                        '<a href="#">' +
                        '<i class="iconfont icon-guanzhu" style="color: red"></i>'  +
                        '<font id="num-like" style="color: #989998">'+data[i].post_love+'</font>' +
                        '</a>' +
                 /*       '<a href="#">' +
                        '<font style="float: right">' +
                        '<i class="iconfont icon-fenxiang"></i>' +
                        '</font>' +*/
                        '</a>' +
                        '</div>' +
                        '</div>' +
                        '<div class="user-name">'+data[i].user_nicename+'</div>' +
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
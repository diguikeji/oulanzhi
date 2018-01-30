<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo ($user[0]["user_nicename"]); ?>欧澜芝的个人主页</title>
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
    <link href="/themes/simplebootx/Public/new/css/share.css" rel="stylesheet" type="text/css"><!--分享-->
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

    <input type="hidden" name="tid" id="tid" value="<?php echo ($tid); ?>">
    <input type="hidden" name="id" id="id" value="<?php echo ($user[0]["id"]); ?>" />

    <a href="<?php echo U('portal/user/index',array('id'=>$user[0][id]));?>">
        <div class="hongse_1">
            <div class="hongse_1_1"  ><span id="hcount"></span></div>
            <div class="hongse_1_2" >画板</div>
        </div>
    </a>
    <a href="<?php echo U('portal/user/caiji',array('id'=>$user[0][id]));?>">
        <div class="hongse_2"></div>
        <div class="hongse_1">
            <div class="hongse_1_1"><span id="ccount"></span></div>
            <div class="hongse_1_2">采集</div>

        </div></a>
    <a href="<?php echo U('portal/user/love',array('id'=>$user[0][id]));?>">
        <div class="hongse_2"></div>
        <div class="hongse_1">
            <div class="hongse_1_1"><span id="lcount"></span></div>
            <div class="hongse_1_2">喜欢</div>
        </div></a>
    <a href="<?php echo U('portal/user/tag',array('id'=>$user[0][id]));?>">
        <div class="hongse_2"></div>
        <div class="hongse_1">
            <div class="hongse_1_1" style="color: white;"><span id="tcount"></span></div>
            <div class="hongse_1_2" style="color: white">标签</div>
            <div  class="heng" style="width: 50px;height: 3px;background: white;margin: 0 auto;margin-top: -0.5rem"></div>
        </div></a>
</div>

<!--标签类型-->
<div class="title-detail">
    <a href="<?php echo U('Portal/user/tag',array('id'=>$user[0][id]));?>">所有标签</a>&nbsp; <font  class="address-lable" style="color: #777777"> » <?php echo ($tagname); ?></font>
    <div style="float: right"><?php echo ($pcount); ?> 个包含:“<?php echo ($tagname); ?>”标签的采集</div>
</div>
<!--标签内容-->
<div class="lable-detail-box">
    <div class="middle-box" id="tag-box">
</div>

</div>


<!--没有更多-->
<div class="nomore" id="load">
    <div class="nomore_1" style="font-family: 微软雅黑;font-size:1.4rem">╮(╯﹏╰）╭&nbsp;查看更多</div>
    <i class="iconfont icon-daosanjiao" style="color: black"></i>                               
</div>
<!--底部-->
<!--
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
    <div class="footer_3">Copyright2016-2017 Heifeiku Leijan Technology Co.Ltd All Rights Reserved<br>
        皖ICP备17010401号-2皖公网安备3301080233301号
    </div>

</div>
-->











<!--script-->
<!-- Initialize Swiper -->
<script src="/themes/simplebootx/Public/new/js/jquery-1.8.1.min.js"></script>
<script src="/themes/simplebootx/Public/new/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/themes/simplebootx/Public/new/js/share.js"></script><!--分享-->
<script src="/themes/simplebootx/Public/login.js"></script>
<script src="/themes/simplebootx/Public/new/js/classie.js"></script>
<script src="/themes/simplebootx/Public/new/js/modalEffects.js"></script>

<script  type="text/javascript">


    var tid = $("#tid").val();


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
            
          //  console.log(data);
            
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
    
    
    var pageIndex=1;
    function getPostList(page) {
    
    $.ajax({
        type: "GET",

        url: "/index.php?g=Portal&m=user&a=tagDetailView&p="+page,

        dataType: "json",

        data: {

            id:tid

        },

        success: function (data) {

           // console.log(data);

            for(var i=0;i<data.length;i++) {

                var pid = data[i].pid;
                var uid = data[i].uid;
                $("#tag-box").append(
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
                        '<font id="num-like" style="color: #989998">12'+data[i].post_love+'</font>' +
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


    $.ajax({
        type: "GET",

        url: "/index.php?g=portal&m=user&a=userCount",

        dataType: "json",

        data:{
            id:id
        },

        success:function(data){

            document.getElementById('hcount').innerHTML=data.hcount;
            document.getElementById('ccount').innerHTML=data.ccount;
            document.getElementById('lcount').innerHTML=data.lcount;
            document.getElementById('tcount').innerHTML=data.tcount;
            document.getElementById('fcount').innerHTML=data.fcount;
			document.getElementById('gcount').innerHTML=data.gcount;
        }
    });



    $('#share').shareConfig({
        Shade : true, //是否显示遮罩层
        Event:'click', //触发事件
        Content : 'Share', //内容DIV ID
        Title : '分享给朋友' //显示标题
    });
</script>
<script type="text/javascript">
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
</script>
</body>
</html>
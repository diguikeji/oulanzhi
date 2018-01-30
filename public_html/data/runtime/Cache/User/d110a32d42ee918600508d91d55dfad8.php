<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>室内设计</title>
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/palette.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/design.css">
    <link href="/themes/simplebootx/Public/favicon.ico"  rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/iconfont.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/index.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/lable.css">
    <link rel="stylesheet" href="/themes/simplebootx/Public/new/css/component.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/collect.css">
        <link href="/themes/simplebootx/Public/new/css/share.css" rel="stylesheet" type="text/css"><!--分享-->
    <meta name="renderer" content="webkit">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="generator" content=""  data-variable="" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <style>
        @media (min-width:1020px)and (max-width:1620px){
            .middle{
                width: 87%;
                height: auto;
                margin: 0 auto;
            }
        }
.lable-box:hover .following{
    display: block;
}
.lable-box:hover a{
    text-decoration: none;
}
.following{
    position: relative;
    bottom: 410px;
    width: 30%;
    height: 2.5rem;
    border: 1px solid grey;
    z-index: 99;
    color: black;
    border-radius: 5px;
    left: 65%;
    background: rgba(233,233,233,0.8);
    outline: medium;
    display: none;
}
.following:hover{
    background: rgba(233,233,233,0.9);
    -webkit-box-shadow: 1px 1px 4px rgba(0,0,0,0.4);
    -moz-box-shadow: 1px 1px 4px rgba(0,0,0,0.4);
    box-shadow: 1px 1px 4px rgba(0,0,0,0.4);
}
       
    </style>
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


<div class="shineisheji" style="margin-top:68px">
    
    <input type="hidden" id="hid" value="<?php echo ($hb_id); ?>" name="hb_id">
    <div class="interior">
        <div class="interior-1"><?php echo ($hb_name); ?></div>
        <div class="interior-2">
            <a href="#" style="text-decoration: none"><div class="interior-2-1"><div class="interior-2-4"><img src="/themes/simplebootx/Public/new/image/huaban.png"></div><li><?php echo ($postCount); ?>采集</li></div></a>
            <div class="interior-2-2"></div>
            <a href="#" style="text-decoration: none"> <div class="interior-2-3"><div class="interior-2-5"><img src="/themes/simplebootx/Public/new/image/eye.png"></div><li><?php echo ($hbgzCount); ?>关注</li></div></a>
        </div>
    </div>
    <div class="compiles">
        <div class="dropdown-2">
            <div class="dropbtn"><div class="compile"><a href="javascript:void(0)" style="text-decoration: none;color: #A0A1A0;"><div class="compile-3"id="share" >分享<img src="/themes/simplebootx/Public/new/image/enjoy.png"></div></a></div></div>
            <!--<div class="dropdown-1">
                <div class="dropdown-content" style="margin-top: 20px;margin-left: -20px;z-index: 9999" >
                    <div class="jiantou" style="width: 15px;height: 15px;background: #F9F9F9;position: absolute;right: 20px;margin-top: -5px;z-index: 1;transform:rotate(60deg);
           -ms-transform:rotate(60deg); 	/* IE 9 */
           -moz-transform:rotate(60deg); 	/* Firefox */
           -webkit-transform:rotate(60deg); /* Safari 和 Chrome */
           -o-transform:rotate(60deg); 	/* Opera */"></div>
                    <a href="#"style="text-decoration: none;margin-top: 1rem"><img src="/themes/simplebootx/Public/new/image/bo.png">&nbsp;腾讯微博</a>
                    <a href="#"style="text-decoration: none;"><img src="/themes/simplebootx/Public/new/image/Q.png"> &nbsp;QQ好友</a>
                    <a href="#"style="text-decoration: none;"><img src="/themes/simplebootx/Public/new/image/douban.png">&nbsp; 豆瓣</a>
                    <a href="#"style="text-decoration: none;"><img src="/themes/simplebootx/Public/new/image/renren.png"> &nbsp;人人网</a>
                </div>
            </div>-->
        </div>
        <div class="compile-1"><a href="#"style="text-decoration: none; color: #A0A1A0;"><li>批量处理</li></a></div>
        <div class="compile-2"><a href="<?php echo U('User/draw/edit_draw',array('id'=>$hb_id));?>"style="text-decoration: none; color: #A0A1A0;"><li>编辑画板</li></a></div>
    </div>
</div>

<!--内容-->

<div class="lable-detail-box">
    
    
    <div class="middle_2" >
        <div class="jiazai" style="">
            <a href="javascript:show()"><i class="iconfont  icon-jia" ></i></a>

            <div id="login" style="z-index: 999">
                <a href="javascript:hide()"> <img src="/themes/simplebootx/Public/new/image/cha.png"  class="login_3"></a>
                <div class="quan"></div>
                <div class="login_1">上传采集</div>
                <div class="login_2">
                    <div class="login_2_p_1">拖拽图片<br>或</div>
                    <div class="login_2_p_3">点击&nbsp;<a href="#">此处上传</a></div>
                    <div class="login_2_p_2">可多张上传，每张图片建议10M以内</div>
                </div>
                <div class="button">
                    <button  style="width: 6rem; height: 3rem;border:0px;
    background-color: #FF4562;border-radius: 5px;font-size:1.6rem;color: white">上传</button>
                </div>
            </div>
            <div id="over"></div>
        </div>
    </div>
    
    <div class="middle-box" id="caiji-box">
        
        
</div>

</div>

    <div style="clear: both"></div>
</div>
<!--没有更多-->
<div class="nomore">
    <div class="nomore_1" style="font-family: 微软雅黑;font-size:1.4rem">╮(╯﹏╰）╭&nbsp;没有更多了.....</div>
    <a href="#"><i class="iconfont icon-daosanjiao" style="color: black"></i></a>
</div>
<!--底部-->
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



<!--script-->
<!-- Initialize Swiper -->
<script src="/themes/simplebootx/Public/new/js/jquery-1.8.1.min.js"></script>
<script src="/themes/simplebootx/Public/new/js/bootstrap.min.js"></script>
<script src="/themes/simplebootx/Public/new/js/classie.js"></script>
<script src="/themes/simplebootx/Public/new/js/modalEffects.js"></script>
<script src="/themes/simplebootx/Public/login.js"></script>
<script type="text/javascript" src="/themes/simplebootx/Public/new/js/share.js"></script><!--分享-->


<script>

     var hid = $("#hid").val();
     
     console.log(hid);
    
     $.ajax({
        type: "GET",

        url: "/index.php?g=User&m=draw&a=caiji",

        dataType: "json",

        data: {

            id: hid
        },

        success: function (data) {

            console.log(data);

            for(var i=0;i<data.length;i++) {

                var pid = data[i].pid;
                var uid = data[i].uid;
                $("#caiji-box").append(
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
                         	'<a href="index.php?g=User&m=collect&a=edit_collect&id='+pid+'"><button class="following">编辑采集</button></a>'+
                        '</div>'
                )
            }
            }
    });
    
       var login = document.getElementById('login');
    /*var uploadphoto = document.getElementById('uploadphoto');*/
    var over = document.getElementById('over');
    function show()
    {
        login.style.display = "block";
        /*uploadphoto.style.display="block";*/
        over.style.display = "block";
    }
    function hide()
    {
        login.style.display = "none";
        /* uploadphoto.style.display="none";*/
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

  $('#share').shareConfig({
        Shade : true, //是否显示遮罩层
        Event:'click', //触发事件
        Content : 'Share', //内容DIV ID
        Title : '分享给朋友' //显示标题
    });

</script>
</body>
</html>
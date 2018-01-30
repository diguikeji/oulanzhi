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
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/user.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/collect.css">
    <link rel="stylesheet" href="/themes/simplebootx/Public/new/css/component.css">
    <meta name="renderer" content="webkit">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="generator" content=""  data-variable="" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <style>
        .hongse_1{
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -webkit-box-align: center;
            align-items: center;
        }
        .hongse_1_2{
            width: auto;
            height: auto;
            margin: 0 auto;
        }
        .hongse_1_2:hover{
            color: white;
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
     
     
    <a href="<?php echo U('User/follow/interestFollow');?>">
        <div class="hongse_1">
            <div class="hongse_1_2" >兴趣点</div>

        </div>
    </a>
    <a href="<?php echo U('User/follow/userFollow');?>">
        <div class="hongse_2"></div>
        <div class="hongse_1">
            <div class="hongse_1_2" style="color: white">用户</div>
            <div  class="heng" style="width: 60px;height: 3px;background: white;margin: 0 auto;margin-top: 3rem;position: absolute;margin-left: 3.7rem"></div>
        </div></a>
    <a href="<?php echo U('User/follow/drawFollow');?>">
        <div class="hongse_2"></div>
        <div class="hongse_1">

            <div class="hongse_1_2">画板</div>
        </div></a>
    <a href="<?php echo U('User/center/index');?>">
        <div class="hongse_2"></div>
        <div class="hongse_1">

            <div class="hongse_1_2">个人中心</div>
        </div></a>
</div>


<!--中间部分-->
<div class="middle-box" id="user-box">


</div>


<div style="clear: both"></div>
<!--没有更多-->
<div class="nomore">
    <div class="nomore_1" style="font-family: 微软雅黑;font-size:1.4rem">╮(╯﹏╰）╭&nbsp;没有更多了.....</div>
    <a href="#"><i class="iconfont icon-daosanjiao" style="color: black"></i></a>
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


<script src="/themes/simplebootx/Public/login.js"></script>



<!--script-->
<!-- Initialize Swiper -->
<script src="/themes/simplebootx/Public/new/js/jquery-1.8.1.min.js"></script>
<script src="/themes/simplebootx/Public/new/js/bootstrap.min.js"></script>
<script src="/themes/simplebootx/Public/new/js/classie.js"></script>
<script src="/themes/simplebootx/Public/new/js/modalEffects.js"></script>
<script type="text/javascript">

 var id = $("#id").val();


    $.ajax({
        type: "GET",

        url: "/index.php?g=portal&m=user&a=userCount",

        dataType: "json",

        data:{
            id:id
        },

        success:function(data){
            console.log(data);

            document.getElementById('fcount').innerHTML=data.fcount;
			document.getElementById('gcount').innerHTML=data.gcount;
        }
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



    $.ajax({

        type: "GET",

        url: "/index.php?g=user&m=follow&a=userDetail",

        dataType: "json",

        success: function (data) {

            console.log(data);

            var html = "";

            for(var i=0; i< data.length; i++) {

                var uid = data[i].usergz_uid_childid;

                if(data[i].pidlist!==null) {

                    var postIdList = data[i].pidlist.split(",");

                    html = html + '<div class="follow-box-user">' +
                            '<img src="/themes/simplebootx/Public/new/image/user-bg.jpg">' +
                            '<div class="box-title-user">' +
                            data[i].huaban_count+'画板&nbsp;&nbsp;'+postIdList.length+' 采集' +
                            '</div>' +
                            '<a href="#">' +
                            '<div class="img-row-user">'

                    for (var j = 0; j <3;j++) {

                        var pid = postIdList[j];

                        html = html + '<div class="img-row-3-user"><img src="index.php?g=&m=Index&a=imgCollect&id='+pid+'"></div>'
                    }

                    html = html + '</div>' +
                            '</a>' +
                            '<button class="following-user" id="guanzhu" data-u-id="'+uid+'">取消关注</button>' +
                            '<a href="#"> <div class="user-touxiang"><img src="index.php?g=user&m=public&a=avatar&id='+uid+'"></div></a>' +
                            '<div class="user-name"><a href="#">'+data[i].user_nicename+'</a></div>' +
                            '</div>'

                }
            }

            $("#user-box").append(html);

        }

    });
    
    $("body").on("click","#guanzhu",function(){
      var u_id= $(this).attr("data-u-id");
      if($(this).text()=="取消关注")
       {
             $.ajax({
               type: "GET",

               url: "/index.php?g=User&m=follow&a=clickCancelUser",
               
               dataType: "json",
               
               data:{
                   
                  id:u_id
                  
               },
               
               success:function(data){
                   
                  location.reload();
               }
           })
           
       }
        
        
    })


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



</script>
</body>
</html>
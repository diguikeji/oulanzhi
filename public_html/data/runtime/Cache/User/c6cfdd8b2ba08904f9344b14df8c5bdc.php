<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>画板</title>
	<link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/palette.css">
	<link href="/themes/simplebootx/Public/new/favicon.ico"  rel="shortcut icon" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/iconfont.css">
	<link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/index.css">
	<link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/header.css">
	<link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/follow.css">
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





<!--明日收获-->
<div class="yesterday">
	<div class="yesterday_1">
		<div class="yesterday_1_1">
			<a href="#"><img src="<?php echo sp_get_user_avatar_url($avatar);?>"></a>
		</div>
		<div class="yesterday_1_2">
			<div class="yesterday_1_2_1">200</div>
			<div class="yesterday_1_2_2">100</div>
		</div>
		<div class="yesterday_1_3">
			<a href=""> <div class="yesterday_1_3_1">粉丝</div></a>
			<div class="yesterday_1_3_2"></div>
			<a href="<?php echo U('User/follow/interestFollow');?>">   <div class="yesterday_1_3_3">关注</div></a>
		</div>
	</div>
	<div class="yesterday_2">
		<div class="yesterday_2_1"><?php echo ($user_nicename); ?></div>
		<div class="yesterday_2_2">欢迎来到我的主页，收集好看的图片</div>
	</div>
	<div class="yesterday_3">
		<a href="#"><div class="yesterday_3_1">关注+</div></a>
		<a href="#"><div class="yesterday_3_2"><img src="/themes/simplebootx/Public/new/image/envelop(1).png"></div></a>
	</div>
</div>
<!--红色部分-->
<div  class="hongse">
	<a href="<?php echo U('User/center/index');?>">
		<div class="hongse_1">
			<div class="hongse_1_1" style="color: white;" ><?php echo ($huabanCount); ?></div>
			<div class="hongse_1_2" style="color: white">画板</div>
			<div  class="heng" style="width: 50px;height: 3px;background: white;margin: 0 auto;margin-top: 0.5rem"></div>
		</div>
	</a>
	<a href="<?php echo U('User/collect/index');?>">
		<div class="hongse_2"></div>
		<div class="hongse_1">
			<div class="hongse_1_1"><?php echo ($caijiCount); ?></div>
			<div class="hongse_1_2">采集</div>
		</div></a>
	<a href="<?php echo U('User/love/index');?>">
		<div class="hongse_2"></div>
		<div class="hongse_1">
			<div class="hongse_1_1"><?php echo ($loveCount); ?></div>
			<div class="hongse_1_2">喜欢</div>
		</div></a>
	<a href="">
		<div class="hongse_2"></div>
		<div class="hongse_1">
			<div class="hongse_1_1"><?php echo ($tagCount); ?></div>
			<div class="hongse_1_2">标签</div>
		</div></a>
</div>





<!--室内设计-->
<!--
<div class="shinei">
	<div class="design">
		<div class="design-1">
			<div class="design-1-1"> <a href="javascript:show()"><i class="iconfont  icon-jia"></i></a>

				<form action="<?php echo U('User/center/createDraw');?>" method="post" name="hia">
				<div id="login">
					<a href="javascript:hide()"> <img src="/themes/simplebootx/Public/new/image/quancha.png"  class="cha"></a>
					<div class="quan"></div>
					<div class="login-1">创建画板</div>
					<div class="title"><input class="title-2" type="text" name="hbname"  placeholder="标题" style=" border-bottom: 1px solid dimgrey"></div>
					&lt;!&ndash; <div class="title-1"><form><input type="name" name="username" placeholder="分类" style="background-color: white;outline: medium;border: 0px;width: 95%">&ndash;&gt;
					&lt;!&ndash; </form>
                    </div>&ndash;&gt;
					<div class="title-1"> <select name="fl" style="border: 0px;outline: medium;width: 100%;height: 3rem; border-bottom: 1px solid dimgrey;background-color: white">
						<?php if(is_array($categroy)): foreach($categroy as $key=>$vo): ?><option value="<?php echo ($vo["xqfl_id"]); ?>" ><?php echo ($vo["xqfl_name"]); ?></option><?php endforeach; endif; ?>
					</select></div>
					<input type="submit" value="确定"
							style="border: none;width: 6rem; height: 3rem; background-color:#FF455F;color: white;font-size: 1.6rem;
                           float: right;margin-right: 4%;
                           margin-top: 1%;
                           border-bottom-left-radius:5px;
                           border-bottom-right-radius: 5px;
                           border-top-left-radius: 5px;
                           border-top-right-radius: 5px;">
				</div>
				</form>


				<div id="over"></div>
			</div>
		</div>
-->

		<div class="middle-box" id="designn">

			<!--<a href="#">
				<div class="follow-box">

				</div>
			</a>
-->



		</div>





<div style="clear: both"></div>
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
<script src="/themes/simplebootx/Public/login.js"></script>
<script type="text/javascript">

//用户画板

 $.ajax({
     type: "GET",

     url: "/index.php?g=user&m=center&a=drawDetail",

     dataType: "json",



     success: function (data) {


         var html ='';
         for (var i = 0; i < data.length; i++) {
             var hid = data[i].hb_id;

             if(data[i].pidlist!==null){
             var postIdList = data[i].pidlist.split(",");

             console.log(data);

                html=html+
						'<a href="index.php?g=User&m=draw&a=drawDetail&id='+hid+'">'+
							'<div class="follow-box" >'+
								'<img src="index.php?g=&m=Index&a=imgCollect&id='+postIdList[0]+'">'+
									'<div class="box-title ">'+
										'<div class="with-line-left"></div>'+ data[i].hb_name+
										'<div class="with-line-right"></div>'+
									'</div>'+'<div class="img-row">'

			 for(var j=1 ;j<4;j++) {
                 var pid = postIdList[j];
                 html = html +
							 '<div class="img-row-3"><img src="index.php?g=&m=Index&a=imgCollect&id='+pid+'"></div>'


             }
                html=html+'</div>'+
						'<a href="index.php?g=User&m=draw&a=edit_draw&id='+hid+'"><button class="following">编辑画板</button></a>'+
						'</div>'+
						'</a>'

             }else{

              html=html+

				 '<a href="index.php?g=User&m=draw&a=drawDetail&id='+hid+'">'+
					 '<div class="follow-box" >'+
						 '<img src="index.php?g=&m=Index&a=imgCollect&id='+hid+'">'+
							 '<div class="box-title ">'+
								 '<div class="with-line-left"></div>'+ data[i].hb_name+
								 '<div class="with-line-right"></div>'+
							 '</div>'+
							 '<div class="img-row">'+

							 '</div>'+
							 '<a href="index.php?g=User&m=draw&a=edit_draw&id='+hid+'"><button class="following">编辑画板</button></a>'+
					 '</div>'+
				 '</a>'


			 }
         }

         $("#designn").append(html);
     }
	 }
 );



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
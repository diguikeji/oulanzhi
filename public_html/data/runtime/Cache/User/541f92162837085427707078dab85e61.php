<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo ($user_nicename); ?>欧澜芝的个人主页</title>
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
<style>
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
            <div class="hongse_1_1" style="color: white;"><span id="ccount"></span></div>
            <div class="hongse_1_2" style="color: white">采集</div>
            <div   class="heng" style="width: 50px;height: 3px;background: white;margin: 0 auto;margin-top: -0.5rem"></div>
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
            <div class="hongse_1_1"><span id="tcount"></span></div>
            <div class="hongse_1_2">标签</div>
        </div></a>
</div>


<!--中间部分-->
  <div class="lable-detail-box">

    <div class="middle_2" >
        <div class="jiazai" style="">
            <a href="javascript:show()"><i class="iconfont  icon-jia" ></i></a>

            <div id="login" style="z-index: 999">
                <a href="javascript:hide()"> <img src="/themes/simplebootx/Public/new/image/cha.png"  class="login_3"></a>
                <div class="quan"></div>
                <div class="login_1"><input type="file" name="img"/>上传采集
                </div>
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





    <div class="middle-box" id="collect">
        
        
        
</div>

</div>



    <div style="clear: both"></div>
</div>
<div class="nomore">
    <div class="nomore_1" style="font-family: 微软雅黑;font-size:1rem" id="load">查看更多</div>
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



<script src="/themes/simplebootx/Public/new/js/jquery-1.8.1.min.js"></script>
<script src="/themes/simplebootx/Public/new/js/swiper.min.js"></script>
<script src="/themes/simplebootx/Public/new/js/bootstrap.min.js"></script>
<script src="/themes/simplebootx/Public/assets/js/slippry.min.js"></script>
<script src="/themes/simplebootx/Public/login.js"></script>
<script src="/themes/simplebootx/Public/assets/js/classie.js"></script>
<script src="/themes/simplebootx/Public/assets/js/modalEffects.js"></script>


<script type="text/javascript">

    var id = $("#id").val();
    //console.log(id);
    


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

            url: "/index.php?g=user&m=collect&a=collectDetail&p="+page,

            dataType: "json",

            success: function (data) {
                for (var i = 0; i < data.length; i++) {
                    console.log(data);

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



    $(function() {
        $(".tags_enter").blur(function() { //焦点失去触发
            var txtvalue=$(this).val().trim();
            if(txtvalue!=''){
                addTag($(this));
                $(this).parents(".tags").css({"border-color": "#d5d5d5"})
            }
        }).keydown(function(event) {
            var key_code = event.keyCode;
            var txtvalue=$(this).val().trim();
            if (key_code == 13&& txtvalue != '') { //enter
                addTag($(this));
            }
            if (key_code == 32 && txtvalue!='') { //space
                addTag($(this));
            }
        });
        $(".close").live("click", function() {
            $(this).parent(".tag").remove();
        });
        $(".tags").click(function() {
            $(this).css({"border-color": "#d5d5d5"})
        }).blur(function() {
            $(this).css({"border-color": "#d5d5d5"})
        })
    })
    function addTag(obj) {
        var tag = obj.val();
        if (tag != '') {
            var i = 0;
            $(".tag").each(function() {
                if ($(this).text() == tag + "×") {
                    $(this).addClass("tag-warning");
                    setTimeout("removeWarning()", 400);
                    i++;
                }
            })
            obj.val('');
            if (i > 0) { //说明有重复
                return false;
            }
            $("#form-field-tags").before("<span class='tag'>" + tag + "<button class='close' type='button'>×</button></span>"); //添加标签
        }
    }
    function removeWarning() {
        $(".tag-warning").removeClass("tag-warning");
    }
</script>
<script type="text/javascript">
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

</script>


</body>
</html>
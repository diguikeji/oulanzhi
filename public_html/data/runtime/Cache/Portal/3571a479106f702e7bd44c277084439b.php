<?php if (!defined('THINK_PATH')) exit();?><html><!DOCTYPE HTML>
<head>
    <title>发现</title>
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
    <link rel="stylesheet" href="/themes/simplebootx/Public/new/css/swiper.min.css">
    <link rel="stylesheet" href="/themes/simplebootx/Public/new/css/found.css">
    <link rel="stylesheet" href="/themes/simplebootx/Public/new/css/component.css">
</head>
<body>
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
            <li><a href="<?php echo U('Portal/index/index');?>" >首页</a></li>
            <li><a href="<?php echo U('Portal/find/index');?>" class="active">发现</a></li>
             <li class="dropdown">
                <a href="<?php echo U('Portal/newest/index');?>" class="dropdown-toggle">
                    最新
                </a>
                <ul class="dropdown-menu" style="margin-top: 2.1rem;margin-left: -1rem;background-color: rgba(0,0,0,0.6);font-size: 12px!important;min-width: 3rem;text-align: center ;">
                    <li style="min-width: 100%"><a href="<?php echo U('User/center/caiji');?>" style="font-size: 1.5rem;line-height: 30px;;min-width: 100%">我的采集</a></li>
                    <li><a href="<?php echo U('User/center/index');?>"  style="font-size: 1.5rem;line-height: 30px;min-width: 100%">我的画板</a></li>
                    <li><a href="<?php echo U('User/center/love');?>"  style="font-size: 1.5rem;line-height: 30px;min-width: 100%">我的喜欢</a></li>
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

<!-- 幻灯片-->
<?php $home_slides=sp_getslide("portal_find"); $home_slides=empty($home_slides)?$default_home_slides:$home_slides; ?>

<div class="slide-box">
   
        <div class="row" >
            <div class="col-md-12"  style="padding: 0px">
                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php if(is_array($home_slides)): foreach($home_slides as $key=>$vo): ?><div class="swiper-slide"><a href="<?php echo ($vo["slide_url"]); ?>"><img src="<?php echo sp_get_asset_upload_path($vo['slide_pic']);?>" alt=""></a></div><?php endforeach; endif; ?>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

        </div>

    </div>

<div class="contain">

    <!--  大家关注的活动 -->
    <div class="middle">
        <div class="about">
            <li class="text">大家关注</li>
        </div>

        <div class="edge">
            <div class="edge-1"><div class="edge-1-1"style="margin-left:-1rem "></div></div>
            <div class="edge-2"><li class="text-1">MORE ATTENTION</li></div>
            <div class="edge-1"><div class="edge-1-1"style="margin-right:-1rem "></div></div>
        </div>
    </div>

    <div class="room">
        <div class="room-1-1" >
            <?php if(is_array($activity)): foreach($activity as $key=>$vo): ?><div class="room-1" ><a href="<?php echo ($vo["hd_url"]); ?>" target="_blank"><img src="<?php echo sp_get_asset_upload_path($vo['hd_img_url']);?>"></a>
                    <div style="position: relative; text-align: center;color: white;font-size: 25px; top: -55%;text-shadow: 5px 3px 5px rgba(0,0,0,0.6)"><?php echo ($vo["hd_name"]); ?></div>
                </div><?php endforeach; endif; ?>
        </div>
    </div>

    <div class="middle">
        <div class="about">
            <li class="text">画板采集</li>
        </div>
        <div class="edge">
            <div class="edge-1"><div class="edge-1-1"></div></div>
            <div class="edge-2"><li class="text-1"> RECOMMENDED </li></div>
            <div class="edge-1"><div class="edge-1-1"  style="margin-left:1rem"></div></div>
        </div>
    </div>

    <div id="hb-box">

    </div>

    <div class="colick">
        <button type="submit"  id="load" style="width: 100%; height: 40px; background-color: #FF455F;color: white;
                   border-bottom-left-radius: 20px;
                   border-bottom-right-radius: 20px;
                   border-top-left-radius: 20px;
                   border-top-right-radius: 20px;border: none;outline:medium">点击查看更多>>></button></div>

    <div class="middle">
        <div class="about">
            <li class="text">兴趣采集</li>
        </div>
        <div class="edge">
            <div class="edge-1"><div class="edge-1-1"></div></div>
            <div class="edge-2"><li class="text-1"> RECOMMENDED </li></div>
            <div class="edge-1"><div class="edge-1-1"></div></div>
        </div>
    </div>


    <div id="hb">

    </div>

    <div class="colick">
        <button type="submit"  id="load2" style="width: 100%; height: 40px; background-color: #FF455F;color: white;
                   border-bottom-left-radius: 20px;
                   border-bottom-right-radius: 20px;
                   border-top-left-radius: 20px;
                   border-top-right-radius: 20px;border: none;outline:medium">点击查看更多>>></button></div>
</div>
  

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

<script>



  var isLogin='<?php echo ($isLogin); ?>';
  
 // console.log(isLogin);
  
    var pageIndex = 1;

    function getHuabanList(page) {
        $.ajax({

            type: "GET",

            url: "/index.php?g=&m=Find&a=gethuabanList&p="+page,

            dataType: "json",

            success: function (data) {
                console.log(data);
                var html = '';
                for (var i = 0; i < data.length; i++) {

                    //  var xid  = data[i].xq_id;


                    if (data[i].pidlist != null) {

                        var pidlist = data[i].pidlist.split(",");

                         if(data[i].hbgz_hbid ==null  || isLogin == 0)
                         {
                        html = html + '<div class="sheji">' +
                                '<div class="ping"> ' +
                                '<div class="high">'+pidlist.length+'</div> ' +
                                '<div class="text-2">' + data[i].hb_name + '</div> ' +
                                '<div class="text-3">' + data[i].hb_descp + '</div> ' +
                                '<div class="annv"> ' +
                                '<button  data-hb_id="'+data[i].hb_id+'" class="guanzhu"  style="border: none;width: 150px; height: 40px; background-color:#EEEEEE;color:#757575;border-bottom-left-radius: 20px;border-bottom-right-radius: 20px;border-top-left-radius: 20px;border-top-right-radius: 20px;outline:medium">' + '点击关注</button>' +
                                '</div>' +
                                '</div>'
                         }else{
                        html = html +  '<div class="sheji">' +
                                '<div class="ping"> ' +
                                '<div class="high">'+pidlist.length+'</div> ' +
                                '<div class="text-2">' + data[i].hb_name + '</div> ' +
                                '<div class="text-3">' + data[i].hb_descp + '</div> ' +
                                '<div class="annv"> ' +
                                '<button  data-hb_id="'+data[i].hb_id+'" class="guanzhu"  style="border: none;width: 150px; height: 40px; background-color:#C0C0C0;color: white;border-bottom-left-radius: 20px;border-bottom-right-radius: 20px;border-top-left-radius: 20px;border-top-right-radius: 20px;outline:medium">' + '已关注</button>' +
                                '</div>' +
                                '</div>'
                         }

                        for (var j = 0; j < 4; j++) {
                            var pid = pidlist[j];
                            //console.log(pid);
                            html = html + '<div class="mian">' + '<a href="index.php?g=&m=Article&a=posts&pid=' + pid + '">' + '<img src="index.php?g=&m=Index&a=imgCollect&id=' + pid + '">' + '</a>' + '</div>';
                        }

                        html = html + '<div class="more">' +
                                '<a href="index.php?g=Portal&m=User&a=huaban&id=' + data[i].hb_id + '"><img src="/themes/simplebootx/Public/new/image/more.png"></a>' +
                                '<div class="text-4"><a href="index.php?g=Portal&m=User&a=huaban&id=' + data[i].hb_id + '">加载更多</a></div>' +
                                '</div>' +
                                '</div>'
                    }
                }

                $("#hb-box").append(html);


                if (data.length < 6) {
                    $("#load").text("没有更多数据了");
                }

                pageIndex++;
            }
        });
    }

        getHuabanList(pageIndex);

        $("#load").click(function()
        {
            getHuabanList(pageIndex);
        });


    

    $("body").on("click",".guanzhu",function()
    {
       var hb_id= $(this).attr("data-hb_id");
       if($(this).text()=="点击关注")
       {
           $.ajax({
               type: "GET",

               url: "/index.php?g=User&m=follow&a=clickDrawFollow",
               
               dataType: "json",
               
               data:{
                   
                  id:hb_id
                  
               },
               
               success:function(data){
                   
                   
               }
           })
           
           $(this).text("已关注")
           $(this).css({"background":'#C0C0C0',"color":'white'})
          
       }
       else{
         $.ajax({
               type: "GET",

               url: "/index.php?g=User&m=follow&a=clickCancelDraw",
               
               dataType: "json",
               
               data:{
                   
                  id:hb_id
                  
               },
               
               success:function(data){
                   
                  
               }
           })
           
            $(this).text("点击关注")
            $(this).css({"background":'#EEEEEE',"color":'#757575'})
        
       }
       
    });




   var pageIndex2 = 1;
    function getInterestList(page) {
        $.ajax({

            type: "GET",

            url: "/index.php?g=&m=Find&a=getInterestList&p="+page,

            dataType: "json",

            success: function (data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {

                    if (data[i].pidlist != null) {

                        var pidlist = data[i].pidlist.split(",");

                        var xid = data[i].xq_id;
                         
                         
                         if(data[i].xqdgz_xqid == null||isLogin==0)
                         {
                                html = html + '<div class="sheji-1">' +
                                '<div class="ping-1"> ' +
                                '<div class="high-1" style="color:white">'+pidlist.length+'</div> ' +
                                '<div class="text-2-1">' + data[i].xq_name + '</div> ' +
                                '<div class="text-3-1">' + data[i].xq_intro + '</div> ' +
                                '<div class="annv"> ' +
                                '<button  data-xq-id ="'+xid+'" class="xqgz"   style="border: none;width: 150px; height: 40px; background-color:#C1A062;color: white;border-bottom-left-radius: 20px;border-bottom-right-radius: 20px;border-top-left-radius: 20px;border-top-right-radius: 20px;outline:medium">' + '点击关注</button>' +
                                '</div>' +
                                '</div>'
                         }
                         else{
                              html = html + '<div class="sheji-1">' +
                                '<div class="ping-1"> ' +
                                '<div class="high-1" style="color:white">'+pidlist.length+'</div> ' +
                                '<div class="text-2-1">' + data[i].xq_name + '</div> ' +
                                '<div class="text-3-1">' + data[i].xq_intro + '</div> ' +
                                '<div class="annv"> ' +
                                '<button  data-xq-id ="'+xid+'" class="xqgz"  style="border: none;width: 150px; height: 40px; background-color:#C0C0C0;color: white;border-bottom-left-radius: 20px;border-bottom-right-radius: 20px;border-top-left-radius: 20px;border-top-right-radius: 20px;outline:medium">' + '已关注</button>' +
                                '</div>' +
                                '</div>'
                         }
 
                       

                        for (var j = 0; j < 4; j++) {
                            var pid = pidlist[j];
                            html = html + '<div class="mian">' + '<a href="index.php?g=&m=Article&a=posts&pid=' + pid + '">' + '<img src="index.php?g=&m=Index&a=imgCollect&id=' + pid + '">' + '</a>' + '</div>';
                        }

                        html = html + '<div class="more">' +
                                '<a href="index.php?g=portal&m=InterestDetail&a=interest&xid=' + xid + '"><img src="/themes/simplebootx/Public/new/image/more.png"></a>' +
                                '<div class="text-4"><a href="index.php?g=portal&m=InterestDetail&a=interest&xid=' + xid + '">加载更多</a></div>' +
                                '</div>' +
                                '</div>'
                    }
                }

                $("#hb").append(html);

                 if(data.length < 6)

             $("#load2").text("没有更多数据了");

             pageIndex2++;
        }
    });

        }

   getInterestList(pageIndex2);

    $("#load2").click(function()
    {
        getInterestList(pageIndex2);
    });
    
    
    
     $("body").on("click",".xqgz",function()
    {
       var xid= $(this).attr("data-xq-id");
       console.log(xid);
       if($(this).text()=="点击关注")
       {
           $.ajax({
               type: "GET",

               url: "/index.php?g=User&m=follow&a=clickInterestFollow",
               
               dataType: "json",
               
               data:{
                   
                  id:xid
                  
               },
               
               success:function(data){
                   
                   
               }
           })
           
           $(this).text("已关注")
           $(this).css({"background":'#C0C0C0',"color":'white'})
          
       }
       else{
         $.ajax({
               type: "GET",

               url: "/index.php?g=User&m=follow&a=clickCancelInterest",
               
               dataType: "json",
               
               data:{
                   
                  id:xid
                  
               },
               
               success:function(data){
                   
                  
               }
           })
           
            $(this).text("点击关注")
            $(this).css({"background":'#C1A062'})
        
       }
       
    });

    



    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 20000,
        autoplayDisableOnInteraction: false
    });

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
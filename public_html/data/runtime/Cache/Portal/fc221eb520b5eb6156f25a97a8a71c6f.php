<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/palette.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/foundDetail.css">
    <link href="/themes/simplebootx/Public/favicon.ico"  rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/iconfont.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/index.css">
    <link rel="stylesheet" href="/themes/simplebootx/Public/new/css/component.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/lable.css">
    <meta name="renderer" content="webkit">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="generator" content=""  data-variable="" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>兴趣点</title>
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



<div class="cephalosome">

    <input type="hidden" id="xid" value="<?php echo ($xq_id); ?>"  name="xq_id">

    <div class="cephalosome-1" ><?php echo ($xq_name); ?></div>

    <div class="cephalosome-3"><?php echo ($xq_intro); ?></div>

    <div class="cephalosome-2"><div class="cephalosome-2-1" id = "xqgz"></div></div>

</div>
<div class="morefound"><img src="/themes/simplebootx/Public/new/image/huojian.png"> &nbsp;&nbsp;&nbsp;更多发现</div>
<div class="morefound-1">
    <?php if(is_array($xingqus)): foreach($xingqus as $key=>$vo): ?><a href="<?php echo U('portal/InterestDetail/interest',array('xid'=>$vo['xq_id'],'fid'=>$xqfl_id));?>"><div class="morefound-1-2"><img src="<?php echo U('portal/newest/imgXingqu',array('id'=>$vo['xq_id']));?>"><p><?php echo ($vo["xq_name"]); ?></p></div></a><?php endforeach; endif; ?>
</div>

<div class="morefound-2">
    <div class="morefound-2-1"  id="cj-box">



    </div>
</div>
<!--没有更多-->
<div class="nomore">
    <div class="nomore_1" id="load" style="font-family: 微软雅黑;">╮(╯﹏╰）╭&nbsp;查看更多</div>
    <a href="#"><i class="iconfont icon-daosanjiao" style="color: black"></i></a>
</div>

<script src="/themes/simplebootx/Public/new/js/jquery-1.8.1.min.js"></script>
<script src="/themes/simplebootx/Public/new/js/swiper.min.js"></script>
<script src="/themes/simplebootx/Public/new/js/bootstrap.min.js"></script>
<script src="/themes/simplebootx/Public/assets/js/slippry.min.js"></script>
<script src="/themes/simplebootx/Public/login.js"></script>
<script src="/themes/simplebootx/Public/assets/js/classie.js"></script>
<script src="/themes/simplebootx/Public/assets/js/modalEffects.js"></script>

<script>

    var xid = $("#xid").val();
       //console.log(xid);
       
       
     var isLogin='<?php echo ($isLogin); ?>';
     
    $.ajax({
        
        
         type: "GET",

         url: "/index.php?g=&m=InterestDetail&a=interestgz",

         dataType: "json",
         
         data:{
           
           id: xid
             
         },
         
         success:function(data){
        
            if(data==0 || isLogin==0){
                $("#xqgz").append('<button class="guanzhu">关注</button>')
            }else{
                $("#xqgz").append('<button class="guanzhu" style="background:#C0C0C0" >已关注</button>')
            }
         }
    });
    
     $("body").on("click",".guanzhu",function()
    {
        
       if($(this).text()=="关注")
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
           $(this).css({"background":'#C0C0C0'})
          
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
           
            $(this).text("关注")
             $(this).css({"background":'#DA383C'})
       }
       
    });

    var pageIndex=1;
    
    function getPostList(page) {

    $.ajax({

        type: "GET",

        url: "/index.php?g=&m=InterestDetail&a=detailCollect&p="+page,

        dataType: "json",

        data:{
            xid:xid
        },

        success:function(data){

            console.log(data);

            for(var i =0; i<data.length;i++){

                var pid = data[i].pid;
                var uid = data[i].uid;

                $("#cj-box").append(

                          '<div class="lable-box">' +
                        '<div class="img-detail-box">' +
                        '<a href="index.php?g=&m=Article&a=posts&pid='+pid+'"><img src="index.php?g=&m=Index&a=imgCollect&id=' + pid + '"></a>' +
                        '</div>' +
                        '<div class="user-box">' +
                        '<a href="index.php?g=Portal&m=user&a=index&id='+uid+'">'+
                        '<div class="user-touxiang">' +
                        '<img src="index.php?g=user&m=public&a=avatar&id=' + uid + '">' +
                        '</div>' +
                        '</a>'+
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

            $("#cj-box").append(

                    '<div style="clear: both"></div>'
            )
            
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
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>编辑采集</title>
    <link href="/themes/simplebootx/Public/new/favicon.ico"  rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/iconfont.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/index.css">
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/header.css">
    <meta name="renderer" content="webkit">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="generator" content=""  data-variable="" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/new/css/edit.css">
    <link rel="stylesheet" href="/themes/simplebootx/Public/new/css/component.css">    
    <style>

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




<!--内容-->
<div class="palette" style="width:1200px;height: auto;margin: 0 auto;margin-top: 9rem;">
    <form action="<?php echo U('User/collect/edit_post_collect');?>" method="post">
    <div class="palette-1" style="width: 60%;margin: 0;float: left">
        <div class="bianjihuaban">编辑采集/<a href="#"><?php echo ($post_title); ?></a></div>

        <div class="biaoti" style="height: auto;padding-bottom: 1rem">标签
            <!--<input type="text" placeholder="画板标题，不能超过32字符" style="font-size: 16px;outline: none;width: 50%;height: 3rem;margin-left: 6rem;padding-left: 0.5rem">-->
            <div class="tags" id="tags" tabindex="1">
                <input id="form-field-tags" type="text" placeholder="请输入标签 ..." value="Tag Input Control" name="tags" style="display: none;">
                <input type="text" placeholder="请输入标签 ..." class="tags_enter" autocomplete="off">
            </div>
        </div>
        <div class="describe"><div style="float: left">描述</div><textarea style="outline: none;margin-left: 6.4rem;font-size: 16px;padding-left: 0.5rem;width: 50%"><?php echo ($post_title); ?></textarea></div>
        <div class="biaoti">来自
            <input type="text" placeholder="" value="<?php echo ($post_source); ?>" style="font-size: 16px;outline: none;width: 50%;height: 3rem;margin-left: 6rem;padding-left: 0.5rem">
        </div>
        <div class="describe-1" style="margin-top: 3rem">画板<select style="outline: medium;width:50%;height: 3rem;background-color: white;margin-left: 6.4rem;border: 1.5px solid gainsboro">
            <?php if(is_array($huaban)): foreach($huaban as $key=>$vo): $pid_selected=$post_hb_id==$vo['hb_id']?"selected":""; ?>
            <option value="<?php echo ($vo["hb_id"]); ?>"<?php echo ($pid_selected); ?>><?php echo ($vo["hb_name"]); ?></option><?php endforeach; endif; ?>
        </select> </div>
        <div class="describe-2">删除<a href="<?php echo U('User/collect/delete_collect',array('id'=>$id));?>"><button >删除采集</button></a></div>
        <div class="describe-3"><button >保存设置</button></div>
    </div>
    </form>
    <div class="image-box-cj">
        <a href="#">
            <img src="<?php echo U('Portal/index/imgCollect',array('id'=>$id));?>">
        </a>
       
    </div>

</div>
<script src="/themes/simplebootx/Public/new/js/jquery-1.8.1.min.js"></script>
<script src="/themes/simplebootx/Public/new/js/swiper.min.js"></script>
<script src="/themes/simplebootx/Public/new/js/bootstrap.min.js"></script>
<script src="/themes/simplebootx/Public/assets/js/slippry.min.js"></script>
<script src="/themes/simplebootx/Public/login.js"></script>
<script src="/themes/simplebootx/Public/assets/js/classie.js"></script>
<script src="/themes/simplebootx/Public/assets/js/modalEffects.js"></script>
<script type="text/javascript">
    $(function() {
        $(".tags_enter").blur(function() { //焦点失去触发
            var txtvalue=$(this).val().trim();
            if(txtvalue!=''){
                addTag($(this));
                $(this).parents(".tags").css({"border-color": "#ccc"})
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
            $(this).css({"border-color": "#66afe9"})
        }).blur(function() {
            $(this).css({"border-color": "#66afe9"})
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


</body>
</html>
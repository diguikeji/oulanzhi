<?php if (!defined('THINK_PATH')) exit();?><html><!DOCTYPE HTML>
<head>
	<title>采集</title>
	<meta name="renderer" content="webkit">
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
	<meta name="generator" content=""  data-variable="" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link href="/themes/simplebootx/Public/favicon.ico"  rel="shortcut icon" type="image/x-icon" />

    <style>
        
        body,textarea,input{font-family: microsoft yahei;}
        .clear-input{
            width:338px;
            display: inline-block;
            padding: 0 10px;
            height: 36px;
            font-size: 14px;
            line-height: 1;
            color: #777;
            background: #FCFCFC;
            border: 1px solid #CCC;
            border-radius: 3px;
            box-shadow: inset 0 1px 2px rgba(0,0,0,.05);
            -webkit-transition: color .2s linear,border-color .3s linear;
            margin-top:30px;
            margin-bottom:10px;
        }
        
        .scrollable{height:250px;overflow: auto;}
        
        .btn-link{
            background: linear-gradient( #F45D68, #E54646);
            color: #fff;
            box-shadow: inset 0 1px 0 rgba(255,255,255,.08),0 1px 0 rgba(255,255,255,.1);
            border: 1px solid #C90000;
            padding: 0 20px;
            border-radius: 3px;
            height: 36px;
            line-height: 36px;
            display: inline-block;
            cursor: pointer;
        }
        
        .btn-link:hover{opacity:0.8;}
        
        .huaban-list{margin:0;padding:0;}
        .huaban-list li{background:#f8f8f8;padding:10px 20px;list-style:none;margin:0;margin-bottom:10px;color:#4a4a4a;font-size:12px;position:relative;cursor:pointer;}
        .huaban-list li img{position: absolute;right:10px;top:9px;width:20px;display:none;}
        .huaban-list li.active img{display: block;}
        
        .create-huaban{cursor: pointer;display:none;}

        .tag-inputs {
	position: relative
}

        .tag-input {
        	display: inline-block;
        	border: 1px solid #ccc;
        	border-radius: 2px;
        	padding: 6px;
        	background-color: #fcfcfc;
        	box-shadow: 0 1px 2px 0 rgba(0,0,0,.1) inset;
        	cursor: text;
        	width: 316px;
            padding: 2px 6px;
        }
        
        .tag-inputs .placeholder {
        	position: absolute;
        	top: 8px;
        	left: 16px;
        	color: #bbb
        }
        
        .tag-input>input {
        	border: 0;
        	background-color: transparent;
        	box-shadow: none;
        	width: 98px;
        	height: 24px;
        	vertical-align: middle
        }
        
        .tag-input>input:hover,.tag-input>input:focus {
        	box-shadow: none
        }
        
        .tag-input>.tag-labels {
        	display: inline;
        	vertical-align: middle
        }
        
        .tag-input>.tag-labels>.tag-label {
        	display: inline-block;
        	border-radius: 1px;
        	margin: 2px 4px;
        	padding: 6px 12px;
        	font-size: 14px;
        	font-weight: 300;
        	line-height: 1.2;
        	text-shadow: 0 1px 0 rgba(255,255,255,.5);
        	color: #4a4a4a;
        	background-color: #ededed;
        	cursor: pointer
        }
        
        .tag-input>.tag-labels>.tag-label>.close {
        	display: inline-block;
        	width: 10px;
        	height: 10px;
        	margin-left: 8px;
        	background-image: url("/img/close_mini.svg");
        	background-position: 0 0;
        	background-repeat: no-repeat
        }
        
        .tag-input>.tag-labels>.tag-label:hover>.close {
        	background-position: 0 -30px
        }
        
        .add-tag{border:1px solid #CCC;color:#666;display:inline-block;cursor:pointer;padding:8px 10px;margin-left:6px;border-radius:4px;box-shadow: inset 0 1px 2px rgba(0,0,0,.05);font-size:14px;}
        
        .tag-labels{word-wrap: break-word;word-break: break-all;max-height:60px;overflow:auto;}
        .tag-labels .tag{margin:2px 2px;color:#fff;background:#888;padding:1px 6px;display:inline-block;}
        .tag-labels .tag span{cursor: pointer;}
        
        
    </style>

</head>
<body style="background:#efeeec;">


<div style="width:590px;height:540px;margin:20px auto 0 auto;">
    
    <div style="width:220px;float:left;height:100%;background:#f2f2f2;">
        
        <div style="display:table;height:100%;width:220px;padding:0 15px;box-sizing:border-box;">
            
            <div style="display:table-cell;width:190px;vertical-align:middle;">
                
                <img style="width:100%;" src="<?php echo ($media); ?>" id="post_yl_img_url" />
                
                <textarea id="post_miaoshu"  style="width:190px;resize:none;border:1px solid #eee;ouline:none;height:80px;padding:5px 5px;"><?php echo ($description); ?></textarea>
                
                <input type="hidden" id="post_source" value="<?php echo ($post_source); ?>" />
                
            </div>
            
        </div>
        
        
        
    </div>
    
    <div style="width:370px;float:left;height:540px;background:#fff;position:relative;">
        
        
        <div style="width:338px;margin:0 auto;">
            
            <input  placeholder="搜索或创建画板" class="clear-input search-input">
            
            <div class="scrollable">
                <ul class="huaban-list">
                    
                    <?php if(is_array($list)): foreach($list as $key=>$vo): ?><li data-id="<?php echo ($vo["hb_id"]); ?>">
                            
                        <?php echo ($vo["hb_name"]); ?>
                        <img src="/img/widgets/gou.png" />
                        
                        </li><?php endforeach; endif; ?>
                    
                    
                </ul>
                
            </div>
            
             <div style="padding:12px 0 12px 0;border-bottom:1px solid #eee;margin-bottom:10px;">
                    <span class="create-huaban">
                    + 创建画板<span></span>
                    </span>
             </div>
            
           
                
            <div class="tag-labels"></div>
            
            <div>
            <input class="clear-input taginput" style="margin:10px 0;width:250px;" placeholder="输入标签文字"><span class="add-tag">添加标签</span>
            </div>
            
            
            <div style="height:60px;background:#fafafa;position:absolute;bottom:0;left:0;width:100%;padding:13px 12px;box-sizing:border-box;text-align:right;">
                
           <!-- <span style="display:inline-block;float:left;margin-top:6px;">
                
            分享到：
            
            <span><input type="checkbox" />
            
            <img src="/img/widgets/weiboIcon.png" />
            </span>
            
            <span><input type="checkbox" />
            
            <img style="width:14px;" src="/img/widgets/kongjianIcon.png" />
            </span>-->
            
            </span>
            
            <span class="btn-link"> 采下来</span>
            
            </div>
            
            
        </div>
        
        
    </div>
    
    
</div>


<input type="hidden" id="tag_users_id" value="<?php echo ($tag_users_id); ?>" />


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



<script>

    Date.prototype.Format = function (fmt) { //author: meizz 
            var o = {
                "M+": this.getMonth() + 1, //月份 
                "d+": this.getDate(), //日 
                "h+": this.getHours(), //小时 
                "m+": this.getMinutes(), //分 
                "s+": this.getSeconds(), //秒 
                "q+": Math.floor((this.getMonth() + 3) / 3), //季度 
                "S": this.getMilliseconds() //毫秒 
            };
            if (/(y+)/.test(fmt)) fmt = fmt.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
            for (var k in o)
            if (new RegExp("(" + k + ")").test(fmt)) fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
            return fmt;
    }

    $(".huaban-list li").eq(0).addClass("active");

    $(".btn-link").click(function()
    {
        
        var tagList=[];
        $(".tag-labels .tag-text").each(function()
        {
            
            var tagObj={};
            tagObj.tag_users_id=$("#tag_users_id").val();
            tagObj.tag_name=$(this).text().trim();
            
            tagList.push(tagObj);
            
        });
        
        console.log(tagList);
        
          $.ajax({
                url:'/index.php/Portal/Gather/addCaiji',
                type:'POST', 
                data:{
                    post_yl_img_url:$("#post_yl_img_url").attr("src"),
                    post_miaoshu:$("#post_miaoshu").val(),
                    post_hb_id:$(".huaban-list .active").attr("data-id"),
                    post_source:$("#post_source").val(),
                    tag_list:JSON.stringify(tagList)
                },
                success:function(data){
                    
                    if(data==1)
                    {
                        alert("采集成功！");
                        window.close();
                    }
                    else if(data=="-1")
                    {
                        alert("已经采集过了，不能重复采集！")
                    }
                    else
                    {
                        alert("采集失败，请重新尝试！");
                    }
                    
                    
                }
                
          });
        
    });


    $(".huaban-list").on("click","li",function()
    {
        $(".huaban-list li").removeClass("active");
        $(this).addClass("active");
        
    });


    $(".add-tag").click(function()
    {
        var tagStr=$(".taginput").val().trim();
        
        var xiangtongFlag=1;
        $(".tag-labels .tag-text").each(function()
        {
            if(tagStr==$(this).text())
            {
                alert("不能添加相同的标签");
                $(".taginput").val("");
                xiangtongFlag=0;
            }
        });
        
        if(xiangtongFlag)
        {
            $(".tag-labels").append('<span class="tag"><span class="tag-text">'+tagStr+'</span><span class="remove">×</span></span>');
            $(".taginput").val("");
        }
        
        
    });
    
     $(".tag-labels").on("click",".tag .remove",function()
     {
         
        
        $(this).parent().remove();
         
     });
    


    $(".search-input").on("propertychange",function()
    {
       
       createHuaban($(this));
        
    });

    $(".search-input").on("input",function()
    {
       
       createHuaban($(this));
        
    });
    
    function createHuaban($obj)
    {
        if($obj.val()!="")
        {
            $(".create-huaban").show();
            $(".create-huaban span").text("'"+$obj.val()+"'");
        }
        else
        {
            $(".create-huaban").hide();
        }
        
    }

    $(".create-huaban").click(function()
    {
        
        var hbName=$(".search-input").val().trim();
        
        if(hbName!="")
        {
            
            $.ajax({
                url:'/index.php/Portal/Gather/addHuaban',
                type:'POST', 
                dataType:'json',
                data:{
                    hb_name:hbName
                },
                success:function(data){
                    console.log(data)
                    if(data["code"]==1000)
                    {
                        var html="";
                        for(var i=0;i<data.data.length;i++)
                        {
                            html=html+'<li data-id="'+data.data[i].hb_id+'">'+data.data[i].hb_name+'<img src="/img/widgets/gou.png"></li>';
                            
                        }
                        
                        $(".huaban-list").empty();
                        $(".huaban-list").append(html);
                        $(".huaban-list li").eq(0).addClass("active");
                        $(".search-input").val("");
                        $(".create-huaban span").text("");
                        $(".create-huaban").hide();
                        
                    }
                    else if(data["code"]==1001)
                    {
                        alert("已经存在同名的画布。");
                        $(".search-input").val("");
                    }
                    else
                    {
                        alert("创建失败，请重新尝试。")
                    }
                   
                   
                }
            });
                        
        }
       
        
    });


</script>
</body>
</html>
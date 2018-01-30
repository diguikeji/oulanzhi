<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<!-- Set render engine for 360 browser -->
	<meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->

	<link href="/public/simpleboot/themes/<?php echo C('SP_ADMIN_STYLE');?>/theme.min.css" rel="stylesheet">
    <link href="/public/simpleboot/css/simplebootadmin.css" rel="stylesheet">
    <link href="/public/js/artDialog/skins/default.css" rel="stylesheet" />
    <link href="/public/simpleboot/font-awesome/4.4.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
    <style>
		form .input-order{margin-bottom: 0px;padding:3px;width:40px;}
		.table-actions{margin-top: 5px; margin-bottom: 5px;padding:0px;}
		.table-list{margin-bottom: 0px;}
	</style>
	<!--[if IE 7]>
	<link rel="stylesheet" href="/public/simpleboot/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
	<![endif]-->
	<script type="text/javascript">
	//全局变量
	var GV = {
	    ROOT: "/",
	    WEB_ROOT: "/",
	    JS_ROOT: "public/js/",
	    APP:'<?php echo (MODULE_NAME); ?>'/*当前应用名*/
	};
	</script>
    <script src="/public/js/jquery.js"></script>
    <script src="/public/js/wind.js"></script>
    <script src="/public/simpleboot/bootstrap/js/bootstrap.min.js"></script>
    <script>
    	$(function(){
    		$("[data-toggle='tooltip']").tooltip();
    	});
    </script>
<?php if(APP_DEBUG): ?><style>
		#think_page_trace_open{
			z-index:9999;
		}
	</style><?php endif; ?>
</head>
<body>
<div class="wrap js-check-wrap">
    <ul class="nav nav-tabs">
        <li><a href="<?php echo U('activity/index');?>">活动中心</a></li>
        <li class="active"><a href="<?php echo U('activity/add');?>">添加活动</a></li>
    </ul>
    <form action="<?php echo U('activity/edit_post');?>" method="post" class="form-horizontal js-ajax-forms" enctype="multipart/form-data">
        <input type="hidden" name="post[post_type]" value="2">
        <div class="row-fluid">
            <div class="span9">
                <table class="table table-bordered">
                    <tr>
                        <th width="100">活动名称</th>
                        <td>
                            <input type="hidden" name="hd_id" value="<?php echo ($activity["hd_id"]); ?>">
                            <input type="text" style="width: 400px;" name="hd_name" id="name" value="<?php echo ($activity["hd_name"]); ?>" placeholder="请输入活动名称"/>
                            <span class="form-required">*</span>
                        </td>
                    </tr>
                    <tr>
                        <th width="100">活动外链地址</th>
                        <td>
                            <input type="text" style="width: 400px;" name="hd_url" id="url" value="<?php echo ($activity["hd_url"]); ?>" placeholder="请输入外链地址"/>
                            <span class="form-required">*</span>
                        </td>
                    </tr>

                </table>
            </div>
            <div class="span3">
                <table class="table table-bordered">
                    <tr>
                        <th>缩略图</th>
                    </tr>
                    <tr>
                        <td>
                            <div style="text-align: center;">
                                <input type="hidden" name="hd_img_url" id="thumb" value="<?php echo ($hd_img_url); ?>">
                                <a href="javascript:upload_one_image('图片上传','#thumb');">
                                    <?php if(empty($hd_img_url)): ?><img src="/admin/themes/simplebootx/Public/assets/images/default-thumbnail.png" id="thumb-preview" width="135" style="cursor: hand"/>
                                        <?php else: ?>
                                        <img src="<?php echo sp_get_image_preview_url($hd_img_url);?>" id="thumb-preview" width="135" style="cursor: hand; height: 113px;"/><?php endif; ?>
                                </a>
                                <input type="button" class="btn btn-small" onclick="$('#thumb-preview').attr('src','/admin/themes/simplebootx/Public/assets/images/default-thumbnail.png');$('#thumb').val('');return false;" value="取消图片">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>是否推荐</th>
                    </tr>
                    <tr>
                        <td>
                            <?php $recommended_yes=$activity['hd_recommend']==1?"checked":""; $recommended_no=$activity['hd_recommend']==0?"checked":""; ?>
                            <label class="radio"><input type="radio" name="hd_recommend" value="1" <?php echo ($recommended_yes); ?>>推荐</label>
                            <label class="radio"><input type="radio" name="hd_recommend" value="0" <?php echo ($recommended_no); ?>>不推荐</label>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="form-actions">
            <button class="btn btn-primary js-ajax-submit" type="submit">编辑.</button>
            <a class="btn" href="javascript:history.back(-1);"><?php echo L('BACK');?></a>
        </div>
    </form>
</div>
<script type="text/javascript" src="/public/js/common.js"></script>
<script type="text/javascript">
    ///编辑器路径定义
    var editorURL = GV.WEB_ROOT;
</script>
<script type="text/javascript" src="/public/js/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/public/js/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript">
    $(function() {
        $(".js-ajax-close-btn").on('click', function(e) {
            e.preventDefault();
            Wind.use("artDialog", function() {
                art.dialog({
                    id : "question",
                    icon : "question",
                    fixed : true,
                    lock : true,
                    background : "#CCCCCC",
                    opacity : 0,
                    content : "您确定需要关闭当前页面嘛？",
                    ok : function() {
                        setCookie("refersh_time", 1);
                        window.close();
                        return true;
                    }
                });
            });
        });
        /////---------------------
        Wind.use('validate','ajaxForm','artDialog',function() {
            //编辑器
            editorcontent = new baidu.editor.ui.Editor();
            editorcontent.render('content');
            try {
                editorcontent.sync();
            } catch (err) {}
            //增加编辑器验证规则
            jQuery.validator.addMethod('editorcontent',function() {
                try {
                    editorcontent.sync();
                } catch (err) {}
                return editorcontent.hasContents();
            });

            var form = $('form.js-ajax-forms');
            //ie处理placeholder提交问题
            if ($.browser && $.browser.msie) {
                form.find('[placeholder]').each(function() {
                    var input = $(this);
                    if (input.val() == input
                            .attr('placeholder')) {
                        input.val('');
                    }
                });
            }
            //表单验证开始
            form.validate({
                //是否在获取焦点时验证
                onfocusout : false,
                //是否在敲击键盘时验证
                onkeyup : false,
                //当鼠标掉级时验证
                onclick : false,
                //验证错误
                showErrors : function(errorMap,errorArr) {
                    //errorMap {'name':'错误信息'}
                    //errorArr [{'message':'错误信息',element:({})}]
                    try {
                        $(errorArr[0].element).focus();
                        art.dialog({
                            id : 'error',
                            icon : 'error',
                            lock : true,
                            fixed : true,
                            background : "#CCCCCC",
                            opacity : 0,
                            content : errorArr[0].message,
                            cancelVal : '确定',
                            cancel : function() {
                                $(errorArr[0].element).focus();
                            }
                        });
                    } catch (err) {}
                },
                //验证规则
                rules : {
                    'hd_name' : {required : 1},
                    'hd_url' : {required : 1},

                },
                //验证未通过提示消息
                messages : {
                    'hd_name' : {required : '活动名称不能为空'},
                    'hd_url' : {required : '外链地址不能为空'},

                },
                //给未通过验证的元素加效果,闪烁等
                highlight : false,
                //是否在获取焦点时验证
                onfocusout : false,
                //验证通过，提交表单
                submitHandler : function(forms) {
                    $(forms).ajaxSubmit({
                        url : form.attr('action'), //按钮上是否自定义提交地址(多按钮情况)
                        dataType : 'json',
                        beforeSubmit : function(arr,$form,options) {

                        },
                        success : function(data,statusText,xhr,$form) {
                            if (data.status) {
                                setCookie("refersh_time",1);
                                //添加成功
                                Wind.use("artDialog",function() {
                                    art.dialog({
                                        id : "succeed",
                                        icon : "succeed",
                                        fixed : true,
                                        lock : true,
                                        background : "#CCCCCC",
                                        opacity : 0,
                                        content : data.info,
                                        button : [
                                            {
                                                name : '继续添加？',
                                                callback : function() {
                                                    reloadPage(window);
                                                    return true;
                                                },
                                                focus : true
                                            },
                                            {
                                                name : '返回列表',
                                                callback : function() {
                                                    location.href = "<?php echo U('activity/index');?>";
                                                    return true;
                                                }
                                            }
                                        ]
                                    });
                                });
                            } else {
                                alert(data.info);
                            }
                        }
                    });
                }
            });
        });
        ////-------------------------
    });
</script>
</body>
</html>
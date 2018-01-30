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
        <li><a href="<?php echo U('posts/index');?>">采集列表</a></li>
        <li class="active"><a href="<?php echo U('posts/add');?>">添加采集</a></li>
    </ul>
    <form action="<?php echo U('posts/edit_post');?>" method="post" class="form-horizontal js-ajax-forms" enctype="multipart/form-data">
        <input type="hidden" name="post[post_type]" value="2">
        <div class="row-fluid">
            <div class="span9">
                <table class="table table-bordered">

                    <tr>
                        <th width="80">采集标题</th>
                        <td>
                            <input type="hidden" name="id" value="<?php echo ($post["id"]); ?>">
                            <input type="text" style="width: 400px;" name="post_title" id="title" value="<?php echo ($post["post_title"]); ?>" />
                            <span class="form-required">*</span>
                        </td>
                    </tr>
                    <tr>
                        <th width="80">兴趣分类</th>
                        <td>
                            <select name="post_xq_id">
                                <option >选择兴趣点</option>
                                <?php if(is_array($xingqu)): foreach($xingqu as $key=>$vo): $cid_selected=$post.post_xq_id==$vo['xq_id']?"selected":""; ?>
                                    <option value="<?php echo ($vo["xq_id"]); ?>"<?php echo ($cid_selected); ?>><?php echo ($vo["xq_name"]); ?></option><?php endforeach; endif; ?>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="span3">
                <table class="table table-bordered">
                    <tr>
                        <th>状态</th>
                    </tr>
                    <tr>
                        <td>
                            <?php $recommended_yes=$post['recommended']==1?"checked":""; $recommended_no=$post['recommended']==0?"checked":""; ?>
                            <label class="radio"><input type="radio" name="recommended" value="1" <?php echo ($recommended_yes); ?>>推荐</label>
                            <label class="radio"><input type="radio" name="recommended" value="0" <?php echo ($recommended_no); ?>>不推荐</label>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="form-actions">
            <button class="btn btn-primary js-ajax-submit" type="submit">编辑</button>
            <a class="btn" href="javascript:history.back(-1);"><?php echo L('BACK');?></a>
        </div>
    </form>
</div>
<script type="text/javascript" src="/public/js/common.js"></script>
<script type="text/javascript">
    //编辑器路径定义
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
            ////增加编辑器验证规则
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
                    'post[post_title]' : {required : 1},
                    'post[post_content]' : {editorcontent : true}
                },
                //验证未通过提示消息
                messages : {
                    'post[post_title]' : {required : '请输入标题'},
                    'post[post_content]' : {editorcontent : '内容不能为空'}
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
                                                    location.href = "<?php echo U('posts/index');?>";
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
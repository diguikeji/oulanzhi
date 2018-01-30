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
<div class="wrap">
    <ul class="nav nav-tabs">
        <li><a href="<?php echo U('xingqufenlei/index');?>">兴趣分类</a></li>
        <li class="active"><a href="<?php echo U('xingqufenlei/add');?>">添加兴趣分类</a></li>
    </ul>
    <form method="post" class="form-horizontal js-ajax-form" action="<?php echo U('xingqufenlei/edit_post');?>">
        <fieldset>
            <div class="control-group">
                <label class="control-label">兴趣分类名称</label>
                <div class="controls">
                    <input type="hidden" name="xqfl_id" value="<?php echo ($xqfl_id); ?>">
                    <input type="text" name="xqfl_name" value="<?php echo ($xqfl_name); ?>">
                    <span class="form-required">*</span>
                </div>
            </div>
        </fieldset>
        <div class="form-actions">
            <button type="submit" class="btn btn-primary js-ajax-submit">修改</button>
            <a class="btn" href="javascript:history.back(-1);"><?php echo L('BACK');?></a>
        </div>
    </form>
</div>
<script src="/public/js/common.js"></script>
<span></span>
</body>
</html>
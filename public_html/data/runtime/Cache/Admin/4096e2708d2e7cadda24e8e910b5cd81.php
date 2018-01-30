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
<body style="min-width: 800px;">
<?php echo '<?'; ?>
 php?>
<div class="wrap js-check-wrap">
    <ul class="nav nav-tabs">
        <li class="active"><a href="<?php echo U('xingqu/index');?>">兴趣点</a></li>
        <li ><a href="<?php echo U('xingqu/add');?>">添加兴趣</a></li>
    </ul>
    <form class="well form-search" method="post" id="cid-form">
        <select name="xqfl_id" style="width: 100px;" id="selected-cid">
            <option value=''>全部</option>
            <?php if(is_array($xqfls)): foreach($xqfls as $key=>$vo): $cid_selected=$xq_fl_id==$vo['xqfl_id']?"selected":""; ?>
                <option value="<?php echo ($vo["xqfl_id"]); ?>"<?php echo ($cid_selected); ?>><?php echo ($vo["xqfl_name"]); ?></option><?php endforeach; endif; ?>
        </select>
    </form>
    <form class="js-ajax-form" method="post" action="<?php echo U('xingqu/index');?>">
        <div class="table-actions">
            <button class="btn btn-danger btn-small js-ajax-submit" type="submit" data-action="<?php echo U('xingqu/delete');?>" data-subcheck="true" data-msg="<?php echo L('DELETE_CONFIRM_MESSAGE');?>">批量<?php echo L('DELETE');?></button>
        </div>
        <table class="table table-hover table-bordered table-list">
            <thead>
            <tr>
                <th width="15"><label><input type="checkbox" class="js-check-all" data-direction="x" data-checklist="js-check-x"></label></th>
                <th >ID</th>
                <th >兴趣名称</th>
                <th >兴趣介绍</th>
                <th >兴趣图片</th>
                <th>所属分类</th>
                <th >操作</th>
            </tr>
            </thead>
            <?php if(is_array($xingqu)): foreach($xingqu as $key=>$vo): ?><tr>
                    <td><input type="checkbox" class="js-check" data-yid="js-check-y" data-xid="js-check-x" name="ids[]" value="<?php echo ($vo["xq_id"]); ?>"></td>
                    <td><?php echo ($vo["xq_id"]); ?></td>
                    <td><?php echo ($vo["xq_name"]); ?></td>
                    <td><?php echo ($vo["xq_intro"]); ?></td>
                    <td><a href="<?php echo sp_get_image_preview_url($vo['xq_img']);?>" target="_blank">查看</a></td>
                    <td><?php echo ($vo["xqfl_name"]); ?></td>
                    <td>
                        <a href="<?php echo U('xingqu/content',array('id'=>$vo['xq_id']));?>">兴趣内容</a>
                        <a href="<?php echo U('xingqu/edit',array('id'=>$vo['xq_id']));?>"><?php echo L('EDIT');?></a>
                        <a href="<?php echo U('xingqu/delete',array('id'=>$vo['xq_id']));?>" class="js-ajax-delete"><?php echo L('DELETE');?></a>
                    </td>
                </tr><?php endforeach; endif; ?>

        </table>

        <div class="pagination"><?php echo ($page); ?></div>
    </form>
</div>
<script src="/public/js/common.js"></script>
<script>
    setCookie('refersh_time', 0);
    function refersh_window() {
        var refersh_time = getCookie('refersh_time');
        if (refersh_time == 1) {
            window.location.reload();
        }
    }
    setInterval(function() {
        refersh_window()
    }, 3000);
    $(function() {
        $("#selected-cid").change(function() {
            $("#cid-form").submit();
        });
    });
</script>
</body>
</html>
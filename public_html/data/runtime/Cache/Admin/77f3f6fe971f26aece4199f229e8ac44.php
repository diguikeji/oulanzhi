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
        <li class="active"><a href="<?php echo U('sixin/index');?>">私信列表</a></li>
        <li ><a href="<?php echo U('sixin/add');?>">添加私信</a></li>
    </ul>
    <form class="js-ajax-form" method="post" action="<?php echo U('sixin/index');?>">
        <div class="table-actions">
            <button class="btn btn-danger btn-small js-ajax-submit" type="submit" data-action="<?php echo U('sixin/delete');?>" data-subcheck="true" data-msg="<?php echo L('DELETE_CONFIRM_MESSAGE');?>">批量<?php echo L('DELETE');?></button>
        </div>
        <table class="table table-hover table-bordered table-list">
            <thead>
            <tr>
                <th width="15"><label><input type="checkbox" class="js-check-all" data-direction="x" data-checklist="js-check-x"></label></th>
                <th >ID</th>
                <th >私信标题</th>
                <th >私信内容</th>
                <th >创建时间</th>
                <th >操作</th>
            </tr>
            </thead>
            <?php if(is_array($sixin)): foreach($sixin as $key=>$vo): ?><tr>
                    <td><input type="checkbox" class="js-check" data-yid="js-check-y" data-xid="js-check-x" name="ids[]" value="<?php echo ($vo["sx_id"]); ?>"></td>
                    <td><?php echo ($vo["sx_id"]); ?></td>
                    <td><?php echo ($vo["sx_title"]); ?></td>
                    <td><?php echo ($vo["sx_content"]); ?></td>
                    <td><?php echo ($vo["sx_time"]); ?></td>
                    <td>
                        <a href="<?php echo U('sixin/edit',array('id'=>$vo['sx_id']));?>"><?php echo L('EDIT');?></a>
                        <a href="<?php echo U('sixin/delete',array('id'=>$vo['sx_id']));?>" class="js-ajax-delete"><?php echo L('DELETE');?></a>
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
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
		<li class="active"><a href="<?php echo U('huaban/index');?>">画板列表</a></li>
	</ul>

	<form class="js-ajax-form" method="post">
		<div class="table-actions">



		</div>

		<table class="table table-hover table-bordered table-list">
			<thead>
			<tr>

				<th width="50">ID</th>
				<th width="200">画板名称</th>
				<th width="200">画板图片</th>

				<th width="100">创建时间</th>
				<th width="50">喜欢量</th>
				<th width="50">转载量</th>
				<th width="120">操作</th>
			</tr>
			</thead>
			<?php if(is_array($huaban)): foreach($huaban as $key=>$vo): ?><tr>

					<td><?php echo ($vo["hb_id"]); ?></td>
					<td><?php echo ($vo["hb_name"]); ?></td>
					<td><a href="<?php echo ($vo["hb_link"]); ?>">查看</a></td>

					<td><?php echo ($vo["hb_create_time"]); ?></td>
					<td><?php echo ($vo["hb_love_count"]); ?></td>
					<td><?php echo ($vo["hb_share_count"]); ?></td>
					<td>
						<a href="<?php echo U('huaban/content',array('id'=>$vo['hb_id']));?>">画板内容</a>
						<a href="<?php echo U('huaban/edit',array('id'=>$vo['hb_id']));?>">编辑</a>
						<a href="<?php echo U('huaban/delete',array('id'=>$vo['hb_id']));?>" class="js-ajax-delete"><?php echo L('DELETE');?></a>
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
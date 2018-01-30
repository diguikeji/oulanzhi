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

<?php $status=array("1"=>"推荐","0"=>"不推荐"); ?>
<div class="wrap js-check-wrap">
    <ul class="nav nav-tabs">
        <li class="active"><a href="<?php echo U('posts/index');?>">采集列表</a></li>
        <li><a href="<?php echo U('posts/add');?>">采集添加</a></li>
    </ul>
    <form method="post" class="js-ajax-form" action="<?php echo U('posts/index');?>">
        <div class="table-actions">
            <button class="btn btn-danger btn-small js-ajax-submit" type="submit" data-action="<?php echo U('posts/delete');?>" data-subcheck="true" data-msg="<?php echo L('DELETE_CONFIRM_MESSAGE');?>">批量<?php echo L('DELETE');?></button>
        <?php $status=array("1"=>"推荐","0"=>"不推荐"); ?>
        <table class="table table-hover table-bordered table-list">
            <thead>
            <tr>
                <th width="15"><label><input type="checkbox" class="js-check-all" data-direction="x" data-checklist="js-check-x"></label></th>
                <th width="50">ID</th>
                <th>采集人</th>
                <th>采集来源</th>
                <th width="120">采集标题</th>
                <th width="60">采集图片</th>
                <th width="120">采集时间</th>
                <th width="50">采集数</th>
                <th width="50">点赞数</th>
                <th>喜欢数</th>
                <th>分享数</th>
                <th>是否推荐</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($posts)): foreach($posts as $key=>$vo): ?><tr>
                    <td><input type="checkbox" class="js-check" data-yid="js-check-y" data-xid="js-check-x" name="ids[]" value="<?php echo ($vo["id"]); ?>"></td>
                    <td><?php echo ($vo["id"]); ?></td>
                    <td><?php echo ($vo["user_nicename"]); ?></td>
                    <td><?php echo ($vo["post_source"]); ?></td>
                    <td><?php echo ($vo["post_title"]); ?></td>
                    <td><a href="<?php echo ($vo["post_img_url"]); ?>" target="_blank">查看</a></td>
                    <td><?php echo ($vo["post_date"]); ?></td>
                    <td><?php echo ($vo["post_cj_count"]); ?></td>
                    <td><?php echo ($vo["post_like"]); ?></td>
                    <td><?php echo ($vo["post_love"]); ?></td>
                    <td><?php echo ($vo["post_fx_count"]); ?></td>
                    <td><?php echo ($status[$vo[recommended]]); ?></td>
                    <td>
                        <a href="<?php echo U('posts/edit',array('id'=>$vo['id']));?>"><?php echo L('EDIT');?></a>
                        <a href="<?php echo U('posts/delete',array('id'=>$vo['id']));?>" class="js-ajax-delete"><?php echo L('DELETE');?></a>

                    </td>
                </tr><?php endforeach; endif; ?>
            </tbody>

        </table>
        <div class="pagination"><?php echo ($page); ?></div>
    </form>
</div>
<script src="/public/js/common.js"></script>
<span></span>
</body>
</html>
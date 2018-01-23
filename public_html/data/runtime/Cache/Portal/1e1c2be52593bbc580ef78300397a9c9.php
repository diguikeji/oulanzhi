<?php if (!defined('THINK_PATH')) exit();?><div class="pinglun">评论</div>

<!-- <div class="pinglun-box-scroll">-->
<?php if(is_array($comments)): foreach($comments as $key=>$vo): ?><div class="pinglun-info">
	<div class="info-box">
		<div class="touxiang-box small"> <img src="<?php echo U('user/public/avatar',array('id'=>$vo['uid']));?>"></div>
		<div class="item-inner">
			<div class="item-inner-text" style="margin-top: 1rem;">
				<div class="item-title"><?php echo ($vo["full_name"]); ?></div>
				<div class="item-title-right"><?php echo date('Y年m月d日  H:i',strtotime($vo['createtime']));?></div>
			</div>
		</div>
	</div>
	<div class="pinglun-content" >
		<?php echo ($vo["content"]); ?>
	</div>
</div><?php endforeach; endif; ?>
<!--/div>-->
<form action="<?php echo U('comment/comment/post');?>" method="post">
<div class="huifu">
	<div style="width: 95%;height: auto;margin: 0 auto">
		<input  type ="text" placeholder="点击填写评论"  name="content" ></div>

	<input type="hidden" name="post_table" value="<?php echo ($post_table); ?>"/>
	<input type="hidden" name="post_id" value="<?php echo ($post_id); ?>"/>
	<input type="hidden" name="to_uid" value="0"/>
	<input type="hidden" name="parentid" value="0"/>

	<button type="submit"  class="fabu" >发布</button>
</div>
</form>
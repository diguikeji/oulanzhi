<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2018/1/19
 * Time: 16:14
 */

namespace Portal\Controller;

use Common\Controller\HomebaseController;

class InterestDetailController extends HomebaseController
{
    //兴趣分类详情页
    public function index(){
        $flid = I('get.id',0,'intval');
        $fl_model = M("Xingqu_fenlei");
        $fl = $fl_model->where(array("xqfl_id"=>$flid))->find();
        $xingqu_model = M("Xingqu");
        $xingqu = $xingqu_model->where(array("xq_fl_id"=>$flid))->limit(5)->select();
        $this->assign($fl);
        $this->assign("xingqu",$xingqu);
        $this->display(":interest_detail");
    }



    //兴趣分类下的采集
    public function interestCollect(){

        $flid = I('get.id',0,'intval');

        $xingqu_model = M("Xingqu");

        $xingqu = $xingqu_model->where(array("xq_fl_id"=>$flid))->getfield("xq_id",true);

        $ids = implode(",",$xingqu);

        $users_model = M('Users');
        $post_model = M("Posts");
        $count = $post_model->count();
        $page = new \Think\Page($count,16);
        $list = $users_model
            ->alias("a")
            ->join("tb_posts b on a.id =b.post_author")
            ->field("b.id as pid,a.id as uid,a.user_nicename,a.avatar,b.post_love,b.post_img_url,b.recommended,b.post_date")
            ->where("post_xq_id in ($ids)")
            ->order('post_date desc')
            ->limit($page->firstRow . ',' . $page->listRows)
            ->select();
        echo json_encode($list);
    }
}
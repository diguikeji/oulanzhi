<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2018/1/21
 * Time: 17:58
 */

namespace Portal\Controller;

use Common\Controller\HomebaseController;

class UserController extends HomebaseController
{

    //画板
    public function huaban(){

        $hid = I('get.id',0,'intval');

        $huaban_model = M("Huaban");
        $huaban = $huaban_model->where(array("hb_id"=>$hid))->find();

        $post_model = M("Posts");
        $postCount = $post_model->where(array("post_hb_id"=>$hid))->count();

        $hbgz_model = M("Hbgz");
        $hbgzCount = $hbgz_model->where(array("hbgz_hbid"=>$hid))->count();

        $this->assign($huaban);
        $this->assign("postCount",$postCount);
        $this->assign("hbgzCount",$hbgzCount);

        $this->display(":huaban");
    }

    //本画板下的所有采集
    public function caiji(){
        $hid = I('get.id',0,'intval');
        $users_model = M('Users');
        $post_model = M("Posts");
        $count = $post_model->count();
        $page = new \Think\Page($count,16);
        $list = $users_model
            ->alias("a")
            ->join("tb_posts b on a.id =b.post_author")
            ->field("b.id as pid,a.id as uid,a.user_nicename,a.avatar,b.post_love,b.post_img_url,b.recommended,b.post_date")
            ->where(array("post_hb_id"=>$hid))
            ->order('post_date desc')
            ->limit($page->firstRow . ',' . $page->listRows)
            ->select();
        echo json_encode($list);
    }

    //获取用户总关注数
    public function userGz(){
       $uid = sp_get_current_userid();

    }

    //获取用户采集数
    public function userCollect(){

        $uid = sp_get_current_userid();
        $posts_model = M("posts");
        $postCount = $posts_model->where(array("post_author"=>$uid))->count();

        echo $postCount;

    }

    //获取用户喜欢数
    public function userLove(){
        $uid = sp_get_current_userid();

    }
}

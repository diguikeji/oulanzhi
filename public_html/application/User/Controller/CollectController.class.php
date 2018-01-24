<?php
/**
 * Created by PhpStorm.
 * User: 周前
 * Date: 2018/1/6
 * Time: 10:04
 */

namespace User\Controller;


use Common\Controller\MemberbaseController;

class CollectController extends MemberbaseController
{
    function _initialize()
    {
        parent::_initialize();
    }

    //用户中心采集列表显示
    public function index()
    {
        $uid = sp_get_current_userid();
        $huabanUser_model = M("Huaban");
        $caijiUser_model = M("Posts");
        $loveUser_model = M("Love");
        $tagUser_model = M("Tag");
        $huabanCount = $huabanUser_model->where(array("hb_u_id"=>$uid))->count();
        $caijiCount = $caijiUser_model->where(array("post_author"=>$uid))->count();
        $loveCount = $loveUser_model->where(array("love_users_id"=>$uid))->count();
        $tagCount = $tagUser_model->where(array("tag_users_id"=>$uid))->count();
        $this->assign("huabanCount",$huabanCount);
        $this->assign("caijiCount",$caijiCount);
        $this->assign("loveCount",$loveCount);
        $this->assign("tagCount",$tagCount);
        $this->assign($this->user);

        $this->display(':collect');

    }


    //获取用户采集的详情
    public function collectDetail()
    {

        $uid = sp_get_current_userid();
        $postsUser_model = M("Posts");
        $count = $postsUser_model->where(array("post_author"=>$uid))->count();
        $page = new \Think\Page($count,16);
        $postsUser = $postsUser_model->where(array("post_author" => $uid))
            ->alias("a")
            ->join("tb_users c on a.post_author = c.id")
            ->field("a.id as pid,c.id as uid,a.post_img_url,a.post_title,a.post_love,c.user_nicename")
            ->limit($page->firstRow . ',' . $page->listRows)
            ->select();
        echo json_encode($postsUser);

    }

    //用户采集
    public function do_collect()
    {

    }

    //用户采集编辑
    public function edit_collect()
    {

    }

    //用户采集编辑提交
    public function edit_post_collect()
    {

    }

    //用户采集删除
    public function delete_collect()
    {

    }

    //用户自己的标签
    public function label()
    {
        $uid = sp_get_current_userid();
        $tag_model = M("Tag");
        $tag = $tag_model
            ->where(array("tag_user_id" => $uid))
            ->select();
        echo json_encode($tag);
    }

    //用户自己的喜欢
    public function love()
    {
        $uid = sp_get_current_userid();
        $love_model = M("Love");
        $love = $love_model
            ->alias("a")
            ->join("tb_posts ON a.love_posts_id = tb_posts.id")
            ->where(array("love_users_id" => $uid))
            ->select();
        echo json_encode($love);
    }


}
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
    //用户中心采集列表显示
    public function index()
    {
        $uid = sp_get_current_userid();
        $caiji_model = M("Caiji");
        $where = array("cj_u_id" => $uid);
        $caiji = $caiji_model->where($where)
            ->order("cj_time")->alias("a")->join("tb_posts on a.cj_posts_id = tb_posts.id")->select();
        $this->assign("caiji", $caiji);
    }

    //用户采集
    public function do_collect()
    {
        $id = I("id");
        var_dump($id);
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
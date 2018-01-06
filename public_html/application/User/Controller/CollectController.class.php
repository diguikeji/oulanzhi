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
    public function index(){
       $uid = sp_get_current_userid();
       $caiji_model = M("Caiji");
       $where = array("cj_u_id"=>$uid);
       $caiji = $caiji_model->where($where)
           ->order("cj_time")->alias("a")->join("tb_posts on a.cj_posts_id = tb_posts.id")->select();
        $this->assign("caiji",$caiji);
    }

    //用户采集
    public function do_collect(){
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
    public function delete_collect(){

    }
}
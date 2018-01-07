<?php
/**
 * Created by PhpStorm.
 * User: 周前
 * Date: 2018/1/6
 * Time: 10:04
 */

namespace User\Controller;


use Common\Controller\MemberbaseController;

/*
 *   用户采集行为
 */

class CollectController extends MemberbaseController
{
   //用户中心采集列表显示
    public function index(){
       $uid = sp_get_current_userid();
       $caiji_model = M("Caiji");
       $where = array("cj_u_id"=>$uid);
       $caiji = $caiji_model->where($where)
                            ->order("cj_time")
                            ->alias("a")
                            ->join("tb_posts c on a.cj_post_id = c.id")
                            ->join("tb_users b on c.post_author = b.id")
                            ->field("a.cj_id,c.post_like,c.post_img_url,c.post_title,b.user_nicename,b.avatar")
                            ->select();
       echo json_encode($caiji);
    }

    //用户采集
    public function do_collect(){
       $uid = sp_get_current_userid();

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
        $uid = sp_get_current_userid();
        $cj_id=I("get.id",0,"intval");
        $caiji_model = M("Caiji");
        $result = $caiji_model->where(array("cj_id"=>$cj_id,"cj_u_id"=>$uid))->delete();
        if($result){
            echo "删除采集成功!";
        }else{
            echo "删除采集失败!";
        }

    }
}
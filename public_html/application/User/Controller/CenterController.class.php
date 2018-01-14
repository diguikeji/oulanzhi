<?php
namespace User\Controller;

use Common\Controller\MemberbaseController;

class CenterController extends MemberbaseController
{

    function _initialize()
    {
        parent::_initialize();
    }


    // 用户中心

    //获取用户画板、采集、喜欢、标签的总数以及用户信息
    public function index()
    {
        $uid = sp_get_current_userid();
        $huabanUser_model = M("Hb_users");
        $caijiUser_model = M("Caiji");
        $loveUser_model = M("Love");
        $tagUser_model = M("Tag");
        $huabanCount = $huabanUser_model->where(array("hbusers_users_id"=>$uid))->count();
        $caijiCount = $caijiUser_model->where(array("cj_u_id"=>$uid))->count();
        $loveCount = $loveUser_model->where(array("love_users_id"=>$uid))->count();
        $tagCount = $tagUser_model->where(array("tag_users_id"=>$uid))->count();
        $this->assign("huabanCount",$huabanCount);
        $this->assign("caijiCount",$caijiCount);
        $this->assign("loveCount",$loveCount);
        $this->assign("tagCount",$tagCount);
        $this->assign($this->user);

        //分类
        $fl_model = M("Xingqu_fenlei");
        $fl = $fl_model->select();
        $this ->assign("categroy",$fl);

        $this->display(':center');
    }


    //获取用户创建的画板详情
    public function drawDetail(){
        $uid = sp_get_current_userid();
        $huabanUser_model = M("Hb_users");
        $huabanUser = $huabanUser_model->where(array("hbusers_users_id"=>$uid))
                                     ->alias("a")
                                     ->join("tb_huaban b on a.hbusers_hb_id = b.hb_id")
                                     ->select();
        echo json_encode($huabanUser);
    }

    //获取用户采集的详情
    public function collectDetail(){
        $uid = sp_get_current_userid();
        $caijiUser_model = M("Caiji");
        $caijiUser = $caijiUser_model->where(array("cj_u_id"=>$uid))
                                    ->alias("a")
                                    ->join("tb_posts b on a.cj_post_id = b.id")
                                    ->select();
        echo json_encode($caijiUser);
    }
}

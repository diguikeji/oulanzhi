<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2018/1/7
 * Time: 16:44
 */
namespace User\Controller;


use Common\Controller\MemberbaseController;

/*
 *   用户关注行为
 */

class InterestController extends MemberbaseController
{
    //用户关注的兴趣点
    public function interest()
    {
        $uid = sp_get_current_userid();
        $xqUsers_model = M('Xqd_guanzhu');
        $xqgz = $xqUsers_model
            ->alias("a")
            ->join("tb_xingqu ON a.xqdgz_xqid = tb_xingqu.xq_id")
            ->where(array("xqdgz_uid" => $uid))
            ->select();
        echo json_encode($xqgz);
    }

    //用户关注的用户
    public function user()
    {
        $uid = sp_get_current_userid();
        $usergz_model = M('Yonghu_gz');
        $usergz = $usergz_model
            ->alias("a")
            ->join("tb_users ON a.usergz_uid_childid = tb_users.id")
            ->where(array("usergz_uid_pid" => $uid))
            ->select();
        echo json_encode($usergz);
    }


    //用户点击关注兴趣点
    public function do_interest()
    {
        $session_user = session('user');
        if (!empty($session_user)) {
            $uid = session("user.id");
            $xid = I('get.xid', 0, 'intval');;
            $xqgz_model = M("Xqd_guanzhu");
            $xqgz = $xqgz_model->where(array("xqdgz_uid"=>$uid,"xqdgz_xqid"=>$xid))->find();
            if($xqgz){
                $this->error("亲，您已经关注过啦！");
            }else{
                $xqdgz["xqdgz_uid"] = $uid;
                $xqdgz["xqdgz_xqid"] = $xid;
                $xqdgz["xqdgz_create_time"] = time();
                $result = $xqgz_model->add($xqdgz);
                if($result){
                    $this->success("关注兴趣点成功！");
                }else{
                    $this->error("关注兴趣点失败！");
                }
            }

        }
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: 周前
 * Date: 2018/1/17
 * Time: 14:09
 */
namespace User\Controller;


use Common\Controller\MemberbaseController;

/*
 *   用户画板行为
 */

class FollowController extends MemberbaseController
{

    //用户关注的兴趣点
    public function interestFollow(){
        $this->assign($this->user);
        $this->display(":follow/interest");
    }

    //用户关注的兴趣点详情
    public function interestDetail(){
        $uid = sp_get_current_userid();
        $Model = M(); // 实例化一个model对象 没有对应任何数据表
        $xingqu = $Model->query("select * from (select * from tb_xqd_guanzhu where xqdgz_uid='$uid') a join tb_xingqu b on a.xqdgz_xqid = b.xq_id ");

    }


    //用户关注的用户
    public function userFollow(){
        $this->assign($this->user);
        $this->display(":follow/user");
    }

    //用户关注的用户详情
    public function userDetail(){
        $uid = sp_get_current_userid();

    }

    //用户关注的画板
    public function drawFollow(){
        $this->assign($this->user);
        $this->display(":follow/draw");
    }
}
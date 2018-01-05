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
    public function index()
    {
        $this->assign($this->user);
        $this->display(':center');
    }


    //用户关注的画板
    public function draw()
    {
        $users = $this->user;
        $uid = $users['id'];
        //用户关注的画板
        $hbgz_model = M("hbgz");
        $hbgz = $hbgz_model
            ->alias("a")
            ->join("tb_huaban ON a.hbgz_hbid = tb_huaban.hb_id")
            ->where(array("hbgz_uid" =>$uid))
            ->select();
        $this->assign($users);
        $this->assign($hbgz);
        $this->display();
        //var_dump($love);
    }

    //用户关注的兴趣点
    public function interest()
    {
        $users = $this->user;
        $uid = $users['id'];
        $xqUsers_model = M('Xqd_guanzhu');
        $xqgz = $xqUsers_model
            ->alias("a")
            ->join("tb_xingqu ON a.xqdgz_xqid = tb_xingqu.xq_id")
            ->where(array("xqdgz_uid" => $uid))
            ->select();
        $this->assign($users);
        $this->assign($xqgz);
        $this->display();
        //var_dump($love);
    }

    //用户关注的用户
    public function user()
    {
        $users = $this->user;
        $uid = $users['id'];
        $usergz_model = M('Yonghu_gz');
        $usergz = $usergz_model
            ->alias("a")
            ->join("tb_users ON a.usergz_uid_childid = tb_users.id")
            ->where(array("usergz_uid_pid" => $uid))
            ->select();
        $this->assign($users);
        $this->assign($usergz);
        $this->display();
        //var_dump($love);
    }


    //用户自己的采集
    public function collect()
    {
        $users = $this->user;
        $uid = $users['id'];
        $caiji_model = M("Caiji");
        $caiji = $caiji_model
            ->alias("a")
            ->join("tb_posts ON a.cj_post_id = tb_posts.id")
            ->where(array("cj_u_id" => $uid))
            ->select();
        $this->assign($users);
        $this->assign($caiji);
        //var_dump($love);
    }

    //用户自己的画板
    public function drawSelf()
    {
        $users = $this->user;
        $uid = $users['id'];
        $hbuser_model = M("Hb_users");
        $hbuser = $hbuser_model
            ->alias("a")
            ->join("tb_huaban ON a.hbusers_hb_id = tb_huaban.hb_id")
            ->where(array("hbusers_users_id" => $uid))
            ->select();
        $this->assign($users);
        $this->assign($hbuser);
        //var_dump($love);
    }

    //用户自己的喜欢
    public function love()
    {
        $users = $this->user;
        $uid = $users['id'];
        $love_model = M("Love");
        $love = $love_model
            ->alias("a")
            ->join("tb_posts ON a.love_posts_id = tb_posts.id")
            ->where(array("love_users_id" => $uid))
            ->select();
        $this->assign($users);
        $this->assign($love);
        //var_dump($love);
    }

    //用户自己的标签
    public function label()
    {
        $users = $this->user;
        $uid = $users['id'];
        $tag_model = M("Tag");
        $tag = $tag_model
            ->where(array("tag_user_id" => $uid))
            ->select();
        $this->assign($users);
        $this->assign($tag);
        //var_dump($tag);

    }
}

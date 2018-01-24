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
    public function interestFollow()
    {
        $this->assign($this->user);
        $this->display(":follow/interest");
    }

    //用户关注的兴趣点详情
    public function interestDetail()
    {
        $uid = sp_get_current_userid();
        $Model = M(); // 实例化一个model对象 没有对应任何数据表
        $xingqu = $Model->query("select b.xq_id,b.xq_name,GROUP_CONCAT(c.id) as pidList from (select * from tb_xqd_guanzhu where xqdgz_uid='$uid') a  left join tb_xingqu b on a.xqdgz_xqid = b.xq_id  left join tb_posts c on b.xq_id = c.post_xq_id group by xq_id ");
        echo json_encode($xingqu);
    }


    //用户关注的用户
    public function userFollow()
    {
        $this->assign($this->user);
        $this->display(":follow/user");
    }

    //用户关注的用户详情
    public function userDetail()
    {
        $uid = sp_get_current_userid();
        $Model = M(); // 实例化一个model对象 没有对应任何数据表
        $yonghu = $Model->query("select usergz_uid_childid,user_nicename,caiji_count,count(usergz_uid_childid) as huaban_count,pidList FROM

(
  select usergz_uid_childid,user_nicename,count(usergz_uid_childid) as caiji_count,pidList from
	(

  select usergz_uid_childid,b.user_nicename ,GROUP_CONCAT(c.id) as pidList from (select usergz_uid_childid from tb_yonghu_gz where usergz_uid_pid='$uid') a

	left join tb_users b on a.usergz_uid_childid = b.id


	left join tb_posts c on a.usergz_uid_childid = c.post_author

	) a GROUP BY usergz_uid_childid
) a

 left join tb_huaban d on a.usergz_uid_childid = d.hb_u_id   ");
        echo json_encode($yonghu);

    }

    //用户关注的画板
    public function drawFollow()
    {
        $this->assign($this->user);
        $this->display(":follow/draw");
    }

    //用户关注的画板详情
    public function drawDetail()
    {
        $uid = sp_get_current_userid();
        $Model = M(); // 实例化一个model对象 没有对应任何数据表
        $huaban = $Model->query("select b.hb_id,b.hb_name,GROUP_CONCAT(c.id) as pidList from (select * from tb_hbgz where hbgz_uid='$uid') a  left join tb_huaban b on a.hbgz_hbid = b.hb_id  left join tb_posts c on b.hb_id = c.post_hb_id group by hb_id ");
        echo json_encode($huaban);
    }


    //用户关注画板状态
    public function drawFollowView()
    {
        $uid = sp_get_current_userid();
        $hid = I('get.id', 0, 'intval');
        $hbgz_model = M("Hbgz");
        $hbgz = $hbgz_model->where(array("hbgz_uid" => $uid, "hbgz_hbid" => $hid))->select();
        if ($hbgz) {
            echo 1;
        } else {
            echo 2;
        }
    }

    //点击关注画板
    public function clickDrawFollow()
    {
        $uid = sp_get_current_userid();
        $hid = I('get.id', 0, 'intval');
        $data["hbgz_uid"] = $uid;
        $data["hbgz_hid"] = $hid;
        $hbgz_model = M("Hbgz");
        $hbgz = $hbgz_model->where($data)->select();
        if (!$hbgz) {

            $hbgz_model->save($data);

        } else {

            $hbgz_model->where($data)->delete();
        }
    }

    //用户关注兴趣点状态
    public function interestFollowView()
    {
       $uid = sp_get_current_userid();
        $xid = I('get.id', 0, 'intval');
        $xqdgz_model = M("Xqd_guanzhu");
        $xqdgz = $xqdgz_model->where(array("xqdgz_uid"=>$uid,"xqdgz_xid"=>$xid))->select();
        if($xqdgz){

            echo 1;
        }else {
            echo 0;
        }
    }

    //点击关注兴趣点
    public function clickInterestFollow(){
        $uid = sp_get_current_userid();
        $xid = I('get.id', 0, 'intval');
        $data["xqdgz_uid"] = $uid;
        $data["xqdgz_xid"] = $xid;
        $xqdgz_model = M("Xqd_guanzhu");
        $xqdgz = $xqdgz_model->where($data)->select();
        if(!$xqdgz){
            $xqdgz_model->save($data);
        }else{
            $xqdgz_model->where($data)->delete();
        }
    }

    //用户关注用户状态
    public function userFollowView()
    {
        $uid = sp_get_current_userid();
        $upid = I('get.id', 0, 'intval');
        $yonghu_model = M("Yonghu_gz");
        $yonghu = $yonghu_model->where(array("usergz_uid_pid"=>$uid,"usergz_uid_childid"=>$upid))->select();
        if($yonghu){
            echo 1;
        }else{
            echo 0;
        }
    }

    //用户点击关注用户
    public function clickUserFollow(){
        $uid = sp_get_current_userid();
        $upid = I('get.id', 0, 'intval');
        $data["usergz_uid_pid"] = $uid;
        $data["usergz_uid_childid"] = $upid;
        $yonghu_model = M("Yonghu_gz");
        $yonghu = $yonghu_model->where($data)->select();
        if(!$yonghu){
            $yonghu_model->save($data);
        }
        else{
            $yonghu_model->where($data)->delete();
        }
    }



}
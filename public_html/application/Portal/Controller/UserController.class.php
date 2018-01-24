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
    public function userCount()
    {

        $uid = I('get.id',0,'intval');
        $huabanUser_model = M("Huaban");
        $caijiUser_model = M("Posts");
        $loveUser_model = M("Love");
        $tagUser_model = M("Tag");
        $huabanCount = $huabanUser_model->where(array("hb_u_id" => $uid))->count();
        $caijiCount = $caijiUser_model->where(array("post_author" => $uid))->count();
        $loveCount = $loveUser_model->where(array("love_users_id" => $uid))->count();
        $tagCount = $tagUser_model->where(array("tag_users_id" => $uid))->count();

        $data["hcount"] = $huabanCount;
        $data["ccount"] = $caijiCount;
        $data["lcount"] = $loveCount;
        $data["tcount"] = $tagCount;

        echo json_encode($data);
    }

    //获取用户创建的画板详情
    public function drawDetail(){
        $uid = I('get.id',0,'intval');
        $huaban_model = M("Huaban");
        $count = $huaban_model->where(array("hb_u_id" =>$uid))->count();
        $page = new \Think\Page($count,16);
        $Model = M(); // 实例化一个model对象 没有对应任何数据表
        $xingqu = $Model ->query("Select a.hb_id ,a.hb_name,GROUP_CONCAT(id) as pidList from (select * from tb_huaban where hb_u_id='$uid') a left join tb_posts b on a.hb_id = b.post_hb_id GROUP BY hb_id");

        echo json_encode($xingqu);
    }


    //获取用户采集的详情
    public function collectDetail()
    {

        $uid = I('get.id',0,'intval');
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

    //获取用户自己的喜欢详情
    public function loveView(){
        $uid = sp_get_current_userid();
        $love_model = M("Love");
        $count = $love_model->count();
        $page = new \Think\Page($count,16);
        $love = $love_model->where(array("love_users_id"=>$uid))
            ->alias("a")
            ->join("tb_posts b on a.love_posts_id = b.id")
            ->join("tb_users c on b.post_author = c.id")
            ->field("b.id as pid,c.id as uid,b.post_title,b.post_love,c.user_nicename")
            ->limit($page->firstRow . ',' . $page->listRows)
            ->select();
        echo json_encode($love);
    }

    //用户的画板里面的采集详情页
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

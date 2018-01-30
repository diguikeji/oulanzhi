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
 
     //获取他人的画板
    public function index()
    {
        $uid = I('get.id',0,'intval');
        $users_model = M("Users");
        $users = $users_model->where(array("id"=>$uid))->select();
        $this->assign("user",$users);
        $this->display(':User/center');

    }

    //获取他人的采集
    public function caiji(){
        $uid = I('get.id',0,'intval');
        $users_model = M("Users");
        $users = $users_model->where(array("id"=>$uid))->select();
        $this->assign("user",$users);
        $this->display(':User/collect');
    }

    //获取他人的喜欢
    public function love(){
       $uid = I('get.id',0,'intval');
        $users_model = M("Users");
        $users = $users_model->where(array("id"=>$uid))->select();
        $this->assign("user",$users);
        $this->display(':User/love');
    }

    //获取他人的标签
    public function tag(){
        $uid = I('get.id',0,'intval');
        $users_model = M("Users");
        $users = $users_model->where(array("id"=>$uid))->select();
        $this->assign("user",$users);
        $this->display(":User/tag");
    }
    

    //他人标签详情页
    public function tagDetail(){
        $uid = I('get.uid',0,'intval');
        $tid = I('get.tid',0,'intval');
        $tag_model = M("Tag");
        $tag = $tag_model->where(array("tag_id"=>$tid))->find();
        $tagname = $tag["tag_name"];
        $this->assign("tagname",$tagname);
        $tagp_model = M("Tag_posts");
        $pcount = $tagp_model->where(array("tp_tag_id"=>$tid))->count();
        $users_model = M("Users");
        $users = $users_model->where(array("id"=>$uid))->select();
        $this->assign("user",$users);
        $this->assign("pcount",$pcount);
        $this->assign("tid",$tid);
        $this->display(":User/tag_detail");
    }
    
    //获取他人的关注的兴趣点
    public function hisInterest(){
        $uid = I('get.id',0,'intval');
        $users_model = M("Users");
        $users = $users_model->where(array("id"=>$uid))->select();
        $this->assign("user",$users);
        $this->display(":User/interest");
         
    }
    
    //获取他人关注的用户
    public function hisUser(){
        $uid = I('get.id',0,'intval');
        $users_model = M("Users");
        $users = $users_model->where(array("id"=>$uid))->select();
        $this->assign("user",$users);
        $this->display(":User/user");
    }
    
    //获取他人关注的画板
    public function hisDraw(){
        $uid = I('get.id',0,'intval');
        $users_model = M("Users");
        $users = $users_model->where(array("id"=>$uid))->select();
        $this->assign("user",$users);
        $this->display(":User/draw");
    }
    
    //获取他人的粉丝
    public function fans(){
        $uid = I('get.id',0,'intval');
        $users_model = M("Users");
        $users = $users_model->where(array("id"=>$uid))->select();
        $this->assign("user",$users);
        $this->display(":User/fans");
    }
    
    
    //获取用户的关注数、粉丝数、采集数、画板数、喜欢数、标签数
    public function userCount()
    {

        $uid = I('get.id',0,'intval');
        $huabanUser_model = M("Huaban");
        $caijiUser_model = M("Posts");
        $loveUser_model = M("Love");
        $tagUser_model = M("Tag");
        $usergz_model = M("Yonghu_gz");
        $huabanCount = $huabanUser_model->where(array("hb_u_id" => $uid))->count();
        $caijiCount = $caijiUser_model->where(array("post_author" => $uid))->count();
        $loveCount = $loveUser_model->where(array("love_users_id" => $uid))->count();
        $tagCount = $tagUser_model->where(array("tag_users_id" => $uid))->count();
        $pidCount = $usergz_model->where(array("usergz_uid_pid"=>$uid))->count();
        $childCount = $usergz_model->where(array("usergz_uid_childid"=>$uid))->count();
        $data["gcount"] = $pidCount;
        $data["fcount"] = $childCount;
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
        $page = new \Think\Page($count,20);
        $Model = M(); // 实例化一个model对象 没有对应任何数据表
        $xingqu = $Model ->query("Select a.hb_id ,a.hb_name,GROUP_CONCAT(id) as pidList from (select * from tb_huaban where hb_u_id='$uid') a left join tb_posts b on a.hb_id = b.post_hb_id GROUP BY hb_id limit $page->firstRow,$page->listRows");
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
        $uid = I('get.id',0,'intval');
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
    public function huabanDetail(){
        $hid = I('get.id',0,'intval');
        $users_model = M('Users');
        $post_model = M("Posts");
        $count = $post_model->count();
        $page = new \Think\Page($count,16);
        $list = $users_model
            ->alias("a")
            ->join("tb_posts b on a.id =b.post_author")
            ->field("b.id as pid,a.id as uid,a.user_nicename,a.avatar,b.post_love,b.post_title")
            ->where(array("post_hb_id"=>$hid))
            ->order('post_date desc')
            ->limit($page->firstRow . ',' . $page->listRows)
            ->select();
        echo json_encode($list);
    }

  
    
     //用户标签
    public function tagView(){
        $uid = I('get.id',0,'intval');
        $Model = M();
        $tag = $Model->query("select a.tag_id,a.tag_name,count(tp_post_id) as pcount from (select * from tb_tag where tag_users_id = '$uid') a left join tb_tag_posts b on a.tag_id = b.tp_tag_id group by tag_id");
        echo json_encode($tag);
    }

    //用户标签详情
    public function tagDetailView(){
       
        $tid = I('get.id',0,'intval');
       // var_dump($tid);
        $tag_post_model = M("Tag_posts");
        $count = $tag_post_model->where(array("tp_tag_id"=>$tid))->count();
        $page = new \Think\Page($count,16);
        $tag_post = $tag_post_model->where(array("tp_tag_id"=>$tid))
                                   ->alias("a")
                                   ->join("tb_posts b on a.tp_post_id = b.id")
                                   ->join("tb_users c on b.post_author =c.id")
                                   ->field("a.tp_id,b.id as pid,c.id as uid,c.user_nicename,b.post_love,b.post_title")
                                   ->limit($page->firstRow . ',' . $page->listRows)
                                    ->select();
        echo json_encode($tag_post);
    }
    
    
    
     //用户关注的兴趣点详情
    public function interestDetailFollow()
    {
        $uid = I('get.id',0,'intval');
        $xqdgz_model = M("Xqd_guanzhu");
        $count = $xqdgz_model->where(array("xqdgz_uid"=>$uid))->count();
        $page = new \Think\Page($count,20);
        $Model = M(); // 实例化一个model对象 没有对应任何数据表
        $xingqu = $Model->query("select b.xq_id,b.xq_name,GROUP_CONCAT(c.id) as pidList from (select * from tb_xqd_guanzhu where xqdgz_uid='$uid') a  left join tb_xingqu b on a.xqdgz_xqid = b.xq_id  left join tb_posts c on b.xq_id = c.post_xq_id group by xq_id limit $page->firstRow,$page->listRows");
        echo json_encode($xingqu);
    }
    
    
      //用户关注的用户详情
    public function userDetailFollow()
    {
        $uid =  I('get.id',0,'intval');
        $usergz_model = M("Yonghu_gz");
        $count = $usergz_model->where(array("usergz_uid_childid"=>$uid))->count();
        $page = new \Think\Page($count,20);
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

 left join tb_huaban d on a.usergz_uid_childid = d.hb_u_id  limit $page->firstRow,$page->listRows");
        echo json_encode($yonghu);

    }
    
    
    
    //用户的粉丝详情
    public function fansDetailFollow(){
        $uid =  I('get.id',0,'intval');
        $usergz_model = M("Yonghu_gz");
        $count = $usergz_model->where(array("usergz_uid_pid"=>$uid))->count();
        $page = new \Think\Page($count,20);
        $Model = M(); // 实例化一个model对象 没有对应任何数据表
        $yonghu = $Model->query("select usergz_uid_pid,user_nicename,caiji_count,count(usergz_uid_pid) as huaban_count  FROM

(
  select usergz_uid_pid,user_nicename,count(usergz_uid_pid) as caiji_count from
	(

  select usergz_uid_pid,b.user_nicename from (select usergz_uid_pid from tb_yonghu_gz where usergz_uid_childid='$uid') a

	left join tb_users b on a.usergz_uid_pid = b.id


	left join tb_posts c on a.usergz_uid_pid = c.post_author

	) a GROUP BY usergz_uid_pid
) a

 left join tb_huaban d on a.usergz_uid_pid = d.hb_u_id  GROUP BY usergz_uid_pid limit $page->firstRow,$page->listRows");
        echo json_encode($yonghu);
    }
    
    
     //用户关注的画板详情
    public function drawDetailFollow()
    {
        $uid =  I('get.id',0,'intval');
        $hbgz_model = M("Hbgz");
        $count = $hbgz_model->where(array("hbgz_uid"=>$uid))->count();
        $page = new \Think\Page($count,20);
        $Model = M(); // 实例化一个model对象 没有对应任何数据表
        $huaban = $Model->query("select b.hb_id,b.hb_name,GROUP_CONCAT(c.id) as pidList from (select * from tb_hbgz where hbgz_uid='$uid') a  left join tb_huaban b on a.hbgz_hbid = b.hb_id  left join tb_posts c on b.hb_id = c.post_hb_id group by hb_id limit $page->firstRow,$page->listRows");
        echo json_encode($huaban);
    }
    

    
    //用户关注用户按钮的状态
    public function userFollowStatus(){
        
        $upid = I('get.id',0,'intval');
        
        $uid = sp_get_current_userid();
        
        $usergz_model = M("Yonghu_gz");
        
        $usergz = $usergz_model->where(array("usergz_uid_pid"=>$uid,"usergz_uid_childid"=>$upid))->select();
        
        if($usergz){
            
            echo 1;
            
        }else{
            
            echo 0;
            
        }
        
    }
    
   


}

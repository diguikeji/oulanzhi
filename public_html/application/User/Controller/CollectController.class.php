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
    function _initialize()
    {
        parent::_initialize();
    }

    //用户中心采集列表显示
    public function index()
    {
        $uid = sp_get_current_userid();
        $huabanUser_model = M("Huaban");
        $caijiUser_model = M("Posts");
        $loveUser_model = M("Love");
        $tagUser_model = M("Tag");
        $huabanCount = $huabanUser_model->where(array("hb_u_id"=>$uid))->count();
        $caijiCount = $caijiUser_model->where(array("post_author"=>$uid))->count();
        $loveCount = $loveUser_model->where(array("love_users_id"=>$uid))->count();
        $tagCount = $tagUser_model->where(array("tag_users_id"=>$uid))->count();
        $this->assign("huabanCount",$huabanCount);
        $this->assign("caijiCount",$caijiCount);
        $this->assign("loveCount",$loveCount);
        $this->assign("tagCount",$tagCount);
        $this->assign($this->user);

        $this->display(':collect');

    }


    //获取用户采集的详情
    public function collectDetail()
    {

        $uid = sp_get_current_userid();
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

    //用户采集
    public function do_collect()
    {

    }

    //用户采集编辑
    public function edit_collect()
    {
        $uid = sp_get_current_userid();
        $pid = I('get.id',0,'intval');
        $post_model = M("Posts");
        $post = $post_model->where(array("id"=>$pid))->find();
        $huaban_model = M("Huaban");
        $huaban = $huaban_model->where(array("hb_u_id"=>$uid))->field("hb_id,hb_name")->select();
       /* $tagpost_model = M("Tag_posts");
        $tagpost = $tagpost_model->where(array("tp_post_id"))
                                 ->join("tb_tag b on a.tp_tag_id = tag_id")
                                 ->select();*/
        $this->assign($post);
        $this->assign("huaban",$huaban);
     //   $this->assign("tagpost",$tagpost);
        $this->display(":edit_collect");
    }

    //用户采集编辑提交
    public function edit_post_collect()
    {

    }

    //用户采集删除
    public function delete_collect()
    {
        $uid = sp_get_current_userid();
        $pid = I('get.id',0,'intval');
        //删除采集列表中的采集
        $post_model = M("Posts");
        $post = $post_model->where(array("id"=>$pid,"post_author"=>$uid))->delete();
        //删除标签下面这个采集
        $tag_post_model = M("Tag_posts");
        $tag_post = $tag_post_model->where(array("tp_post_id"=>$pid))->delete();
        //删除其他用户喜欢这个采集
        $love_model = M("Love");
        $love = $love_model->where(array("love_posts_id"=>$pid))->delete();
        
        if($post==true&&$tag_post==true&&$love==true){
            $this->success("采集删除成功！");
        }else{
            $this->error("采集删除失败！");
        }
    }
    
    //用户批量删除采集
    public function deleteMoreCollect(){
        
        $pids = implode(",",$_GET["pids"]);
         //删除采集列表中的采集
        $post_model = M("Posts");
        $post = $post_model->where("id in ($pids)")->delete();
        //删除标签下面这个采集
        $tag_post_model = M("Tag_posts");
        $tag_post = $tag_post_model->where("tp_post_id in ($pids)")->delete();
        //删除其他用户喜欢这个采集
        $love_model = M("Love");
        $love = $love_model->where("love_posts_id in ($pids)")->delete();
        
        if($post==true&&$tag_post==true&&$love==true){
            
            echo 1; //批量删除采集成功
            
        }else{
            
            echo 0; //批量删除采集失败
        }
        
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
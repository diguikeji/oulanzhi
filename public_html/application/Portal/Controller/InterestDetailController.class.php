<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2018/1/19
 * Time: 16:14
 */

namespace Portal\Controller;

use Common\Controller\HomebaseController;

class InterestDetailController extends HomebaseController
{
    //兴趣分类采集详情页
    public function index(){
        $flid = I('get.id',0,'intval');
        $fl_model = M("Xingqu_fenlei");
        $fl = $fl_model->where(array("xqfl_id"=>$flid))->find();
        $xingqu_model = M("Xingqu");
        $xingqu = $xingqu_model->where(array("xq_fl_id"=>$flid))->limit(5)->select();
        $this->assign($fl);
        $this->assign("xingqu",$xingqu);
        $this->display(":category");
    }

    //兴趣分类画板详情页
    public function huaban(){
        $flid = I('get.id',0,'intval');
        $fl_model = M("Xingqu_fenlei");
        $fl = $fl_model->where(array("xqfl_id"=>$flid))->find();
        $huaban_model = M("Huaban");
        $huaban = $huaban_model->where(array("hb_xqd_id"=>$flid))->limit(5)->select();
       // var_dump($huaban);
        $this->assign($fl);
        $this->assign("huaban",$huaban);
        $this->display(":huabanfl");
    }

    //兴趣分类下的采集
    public function interestCollect(){

        $flid = I('get.id',0,'intval');

        $xingqu_model = M("Xingqu");

        $xingqu = $xingqu_model->where(array("xq_fl_id"=>$flid))->getfield("xq_id",true);

        $ids = implode(",",$xingqu);

        $users_model = M('Users');
        $post_model = M("Posts");
        $count = $post_model->count();
        $page = new \Think\Page($count,16);
        $list = $users_model
            ->alias("a")
            ->join("tb_posts b on a.id =b.post_author")
            ->field("b.id as pid,a.id as uid,a.user_nicename,a.avatar,b.post_title,b.post_love,b.post_img_url,b.recommended,b.post_date")
            ->where("post_xq_id in ($ids)")
            ->order('post_date desc')
            ->limit($page->firstRow . ',' . $page->listRows)
            ->select();

        echo json_encode($list);
    }


    //画板分类下的采集
    public function huabanCollect(){
        $flid = I('get.id',0,'intval');

        $huaban_model = M("Huaban");

        $huaban = $huaban_model->where(array("hb_xqd_id"=>$flid))->getfield("hb_id",true);

        $ids = implode(",",$huaban);

        $users_model = M('Users');
        $post_model = M("Posts");
        $count = $post_model->count();
        $page = new \Think\Page($count,16);
        $list = $users_model
            ->alias("a")
            ->join("tb_posts b on a.id =b.post_author")
            ->field("b.id as pid,a.id as uid,a.user_nicename,a.avatar,b.post_love,b.post_img_url,b.recommended,b.post_date")
            ->where("post_hb_id in ($ids)")
            ->order('post_date desc')
            ->limit($page->firstRow . ',' . $page->listRows)
            ->select();

        echo json_encode($list);
    }


    //兴趣详情页
    public function interest()
    {
        $xid = I('get.xid',0,'intval');

       // $flid = I('get.fid',0,'intval');

       if($this->user){
             $this->assign("isLogin",1);
        }
        else{
            $this->assign("isLogin",0);
        }
        $xingqu_model = M("Xingqu");
        $xingqu = $xingqu_model->where(array("xq_id"=>$xid))->find();

        $flid = $xingqu["xq_fl_id"];
     if($this->user){
             $this->assign("isLogin",1);
        }
        else{
            $this->assign("isLogin",0);
        }    $xingqus = $xingqu_model->where(array("xq_fl_id"=>$flid))->limit(5)->select();

        $this->assign($xingqu);
        $this->assign("xingqus",$xingqus);
        $this->display(":xq_detail");
    }

    //兴趣详情页下的采集

    public function detailCollect()
    {
        $xid = I('get.xid',0,'intval');

        $users_model = M('Users');
        $post_model = M("Posts");
        $count = $post_model->count();
        $page = new \Think\Page($count,16);
        $list = $users_model
            ->alias("a")
            ->join("tb_posts b on a.id =b.post_author")
            ->field("b.id as pid,a.id as uid,a.user_nicename,a.avatar,b.post_title,b.post_love,b.post_img_url,b.recommended,b.post_date")
            ->where(array("post_xq_id"=>$xid))
            ->order('post_date desc')
            ->limit($page->firstRow . ',' . $page->listRows)
            ->select();

        echo json_encode($list);
    }
    
    //判断兴趣关注状态
    public function interestgz(){
        
           $xid = I('get.id',0,'intval');
          $uid = sp_get_current_userid();
          $xqgz_model = M("Xqd_guanzhu");
          $xqd = $xqgz_model->where(array("xqdgz_uid"=>$uid,"xqdgz_xqid"=>$xid))->find();
          if($xqd){
              echo 1;
          }
          else{
              echo 0;
          }
    }

}
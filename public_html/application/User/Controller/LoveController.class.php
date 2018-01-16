<?php
/**
 * Created by PhpStorm.
 * User: 周前
 * Date: 2018/1/14
 * Time: 17:34
 */
/**
 * Created by PhpStorm.
 * User: 周前
 * Date: 2018/1/7
 * Time: 12:15
 */
namespace User\Controller;


use Common\Controller\MemberbaseController;

/*
 *   用户喜欢
 */

class LoveController extends MemberbaseController
{
  public function index(){

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

          $this->display(':love');
  }

  //用户中心显示用户的喜欢
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
}
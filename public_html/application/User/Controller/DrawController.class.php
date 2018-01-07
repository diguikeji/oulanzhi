<?php
/**
 * Created by PhpStorm.
 * User: 周前
 * Date: 2018/1/7
 * Time: 12:15
 */
namespace User\Controller;


use Common\Controller\MemberbaseController;

/*
 *   用户画板行为
 */

class DrawController extends MemberbaseController
{
    //用户中心创建的画板列表展示
    public function index(){
        $this->check_login();
      $uid = sp_get_current_userid();
      $hb_model = M("Huaban");
      $where = array("hb_uid" => $uid );
      $hb_users = $hb_model->where($where)
                 ->order("hb_create_time")
                 ->alias("a")
                 ->join("tb_hbcj c on a.hb_id = c.hbcj_hb_id")
                 ->join("tb_posts d on c.hbcj_posts_id = d.id")
                 ->field("")
                 ->select();
      echo json_encode($hb_users);
    }

    //用户中心关注的画板展示
    public function interest_draw()
    {
      $this->check_login();
      $uid = sp_get_current_userid();
      $hbgz_model = M("Hbgz");
      $where = array("hbgz_uid" => $uid );
      $hbgz = $hbgz_model->where($where)
                        ->order("hbgz_create_time")
                        ->alias("a")
                        ->join("tb_huaban b on a.hbgz_hbid = b.hb_id")
                        ->join("tb_hbcj c on b.hb_id = c.hbcj_hb_id")
                        ->join("tb_posts d on c.hbcj_posts_id = d.id")
                        ->select();
      echo json_encode($hbgz);
    }

    //用户中心创建画板
    public function add_draw(){
        $this->check_login();
        //获取画板分类
        $hb_fl = M("Xingqu_fenlei")->select();
        $this->assign("hbfl",$hb_fl);
        $this->display();
    }

    //用户中心创建画板提交
    public function do_post_draw(){
        if(IS_POST){
          $this->check_login();

          if(empty($POST['term'])){
              $this->error("请至少选择一个分类");
          }
            $uid = sp_get_current_userid();
            $huban_model  = M("Huaban");
            $time = date("Y-m-d H:i:s",time());
            $result = $huban_model->add(array("hb_uid"=>$uid,"hb_name"=>$POST["name"],"hb_term_id"=>$POST["term"]["id"],"hb_create_time"=>$time));
            if($result){
                echo "画板创建成功!";
            }else{
                echo "画板创建失败!";
            }
        }
    }

    //用户中心编辑画板
    public function edit_draw(){
       $this->check_login();
       $uid = sp_get_current_userid();
       $id=I("get.id",0,'intval');
       $huaban_model = M("Huaban");
       $fl_model = M("Xingqu_fenlei");
       $result = $huaban_model->where(array("hb_id"=>$id,"hb_uid"=>$uid))->find();
       $flid = $result['hb_term_id'];
       $fl = $fl_model->where(array("xqfl_id"=>$flid))->find();
       $hb_fl = M("Xingqu_fenlei")->select();
       if(!empty($result)&&!empty($fl)){
           $this->assign("result",$result);
           $this->assign("fl",$fl);
           $this->assign("hbfl",$hb_fl);
       }else{
           echo "画板编辑失败!";
       }
       $this->display();
    }

    //用户中心编辑画板提交
    public function edit_post()
    {

    }

    //用户中心删除画板
     public function delete(){
         $this->check_login();
         $uid = sp_get_current_userid();
         $id=I("get.id",0,'intval');
         $huaban_model = M("Huaban");
         $result = $huaban_model->where(array("hb_id"=>$id,"hb_uid"=>$uid))->delete();
         if($result){
             echo "画板删除成功!";
         }else{
             echo "画板删除失败!";
         }
     }



}

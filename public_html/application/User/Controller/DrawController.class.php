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
    //用户中心关注的画板展示
    public function interest_draw()
    {
        $this->check_login();
        $uid = sp_get_current_userid();
        $hbgz_model = M("Hbgz");
        $where = array("hbgz_uid" => $uid);
        $hbgz = $hbgz_model->where($where)
            ->order("hbgz_create_time")
            ->alias("a")
            ->join("tb_huaban b on a.hbgz_hbid = b.hb_id")
            ->join("tb_hbcj c on b.hb_id = c.hbcj_hb_id")
            ->join("tb_posts d on c.hbcj_posts_id = d.id")
            ->select();
        echo json_encode($hbgz);
    }

    //用户中心编辑画板
    public function edit_draw()
    {
      // $this->check_login();
        $uid = sp_get_current_userid();
        $hid = I("get.id", 0, 'intval');
        $huaban_model = M("Huaban");
        $fl_model = M("Xingqu_fenlei");
        $hb_fl = $fl_model->select();
        $result = $huaban_model->where(array("hb_id" => $hid, "hb_uid" => $uid))->find();
        $this->assign($result);
        //var_dump($result);
        $this->assign("category",$hb_fl);
        $this->display(":editdraw");
    }

    //用户中心编辑画板提交
    public function edit_post()
    {
        if(IS_POST){
            $this->check_login();
            $uid = sp_get_current_userid();
            $huaban_model = M("Huaban");
            $id = $_POST["hb_id"];
            $draw["hb_name"] = $_POST["hb_name"];
            $draw["hb_descp"] = $_POST["hb_descp"];
            $draw["hb_update_time"] = date("Y-m-d H:i:s", time());
            $draw["hb_term_id"] = $_POST["hb_term_id"];
            $result = $huaban_model->where(array("hb_uid"=>$uid,"hb_id"=>$id))->save($draw);
            if($result){
                $this->success("编辑成功！", U("user/center/index"));
            }else{
                echo "画板编辑失败!";
            }
        }else{
            echo "画板编辑失败!";
        }
    }

    //用户中心删除画板
    public function delete()
    {
        $this->check_login();
        $uid = sp_get_current_userid();
        $id = I("get.id", 0, 'intval');
        $huaban_model = M("Huaban");
        $result = $huaban_model->where(array("hb_id" => $id, "hb_uid" => $uid))->delete();

        if ($result) {
            $this->success("画板删除成功！", U("user/center/index"));
        } else {
            $this->error("画板删除失败！");
        }
    }

    //画板详情页
    public function drawDetail(){
        $this->display(":drawdetail");
    }


}

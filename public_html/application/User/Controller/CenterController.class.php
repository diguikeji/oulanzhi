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

    //获取用户画板、采集、喜欢、标签的总数以及用户信息
    public function index()
    {
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

        //分类
        $fl_model = M("Xingqu_fenlei");
        $fl = $fl_model->select();
        $this ->assign("categroy",$fl);

        $this->display(':center');
    }


    //获取用户创建的画板详情
    public function drawDetail(){
        $uid = sp_get_current_userid();

        $huaban_model = M("Huaban");
        $count = $huaban_model->where(array("hb_u_id" =>$uid))->count();
        $page = new \Think\Page($count,16);
        $Model = M(); // 实例化一个model对象 没有对应任何数据表
        $xingqu = $Model ->query("Select a.hb_id ,a.hb_name,GROUP_CONCAT(id) as pidList from (select * from tb_huaban where hb_u_id='$uid') a left join tb_posts b on a.hb_id = b.post_hb_id GROUP BY hb_id");

        echo json_encode($xingqu);
    }

    //用户创建画板
    public function createDraw(){

        if(IS_POST){
            $uid = sp_get_current_userid();
            $huaban_model = M("Huaban");
         $hbname = $_POST["hbname"];
         $flid = $_POST["fl"];
        $data["hb_name"] = $hbname;
        $data["hb_term_id"] = $flid;
        $data["hb_u_id"] = $uid;
        $data["hb_create_time"] = time();
        $huaban = $huaban_model->add($data);
        if($huaban){
            $this->success("画板创建成功！");
        }else{
            $this->error("画板创建失败！");
        }
        }
    }

    //用户编辑画板提交
    public function edit_draw_post(){

    }

    //用户删除画板
    public function delete_draw(){

    }
}

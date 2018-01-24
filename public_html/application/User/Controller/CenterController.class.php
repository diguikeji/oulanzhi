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

    //获取用户画板
    public function index()
    {
        $this->assign($this->user);
        $this->display(':center');

    }

    public function caiji(){
        $this->assign($this->user);
        $this->display(':collect');
    }

    //获取用户喜欢
    public function love(){
        $this->assign($this->user);
        $this->display(':love');
    }

    //获取用户标签
    public function tag(){
        $this->assign($this->user);
        $this->display(":tag");
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
        $data["hb_create_time"] = date("Y-m-d H:i:s", time());;
        $huaban = $huaban_model->add($data);
        if($huaban){
            $this->success("画板创建成功！");
        }else{
            $this->error("画板创建失败！");
        }
        }
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

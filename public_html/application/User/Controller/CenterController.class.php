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
        $fl_model = M("Xingqu_fenlei");
        $categroy = $fl_model->where("xqfl_area = 3")->select();
        $this->assign("category",$categroy);
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

    //用户标签详情页
    public function tagDetail(){
        $tid = I('get.id',0,'intval');
        $tag_model = M("Tag");
        $tag = $tag_model->where(array("tag_id"=>$tid))->find();
        $tagname = $tag["tag_name"];
        $this->assign("tagname",$tagname);
        $tagp_model = M("Tag_posts");
        $pcount = $tagp_model->where(array("tp_tag_id"=>$tid))->count();
        $this->assign("pcount",$pcount);
        $this->assign("tid",$tid);
        $this->assign($this->user);
        $this->display(":tag_detail");
    }

    //获取用户的粉丝
    public function fans(){
        $this->assign($this->user);
        $this->display(":fans");
    }

    //获取用户创建的画板详情
    public function drawDetail(){
        $uid = sp_get_current_userid();

        $huaban_model = M("Huaban");
        $count = $huaban_model->where(array("hb_u_id" =>$uid))->count();
        $page = new \Think\Page($count,16);
        $Model = M(); // 实例化一个model对象 没有对应任何数据表
        $xingqu = $Model ->query("Select a.hb_id ,a.hb_name,GROUP_CONCAT(id) as pidList from (select * from tb_huaban where hb_u_id='$uid') a left join tb_posts b on a.hb_id = b.post_hb_id GROUP BY hb_id limit $page->firstRow,$page->listRows");
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
    
    
     //用户标签
    public function tagView(){
        $uid = sp_get_current_userid();
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
    
    //删除单个标签
    public function deleteTag(){
        $tid = I('get.tid',0,'intval');
        $tag_model = M("Tag");
        $tag_post_model = M("Tag_posts");
        $tag = $tag_model->where(array("tag_id"=>$tid))->delete();
        $tag_post = $tag_post_model->where(array("tp_tag_id"=>$tid))->delete();
        if($tag&&$tag_post){
            echo 1;
        }else{
            echo 0;
        }
    }
    
    //标签的批量删除
    public function deleteMoreTag(){
        $tids = implode(",",$_GET["tids"]);
        $tag_model = M("Tag");
        $tag_post_model = M("Tag_posts");
        $tag = $tag_model->where("tag_id in ($tids)")->delete();
        $tag_post = $tag_post_model->where("tp_tag_id in ($tids)")->delete();
        if($tag==true&&$tag_post==true){
            
            echo 1;   //批量删除标签成功
        }else{
            
            echo 0;   //批量删除标签失败
        }
    }
    
    //用户资料编辑
    public function infoCheck(){
        $uid = sp_get_current_userid();
        $name = $_GET["name"];
        $sign = $_GET["sign"];
        $data["user_nicename"] = $name;
        $data["signature"] = $sign;
        $user_model = M("Users");
        $user = $user_model->where(array("id"=>$uid))->save($data);
        if($user){
            echo 1;
        }else{
            echo 0;
        }
    }
    
    //个人中心修改密码提交
    public function editPassword(){
        $oldPassword = $_GET["oldpassword"];
        $password = $_GET["password"];
        $rePassword = $_GET["repassword"];
        $uid = sp_get_current_userid();
        $user_model = M("Users");
        $pass = $user_model->where(array('id'=>$uid))->find();
        if(sp_compare_password($oldPassword, $pass['user_pass'])){
            if($password==$rePassword){
                if(sp_compare_password($password, $pass['user_pass'])){
                  
                    echo 2; //新密码和原密码相同
                
                }else{ 
                    
                  $data['user_pass']=sp_password($password);
                  $r=$user_model->where(array("id"=>$uid))->save($data);
                  if($r){
                      echo 3; //修改成功
                  }
                  else{
                      echo 4; //修改失败
                  }
                }
                
            }else{
                echo 1; //两次密码输入不一致
            }
            
        }else{
            echo 0;//原密码不正确
        }
    }

   //更换手机号码
   public function phoneChange(){
       $phone = $_GET["phone"];
       $uid = sp_get_current_userid();
       $user_model = M("Users");
       $users = $user_model->where(array("id"=>$uid))->find();
       if($phone!=$users['mobile']){
           $data["mobile"] = $phone;
           $user = $user_model->where(array("id"=>$uid))->save($data);
           if($user){
               
               echo 1;  //更换手机号码成功
           }
           else{
               echo 0; //更换手机号码失败
           }
       }
       echo 3; //修改后手机号与原手机号相同
   }

}

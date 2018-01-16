<?php
namespace Admin\Controller;
use Common\Controller\AdminbaseController;
class PostsController extends AdminbaseController{

    protected $posts_model;
    protected $huaban_model;
    protected $xingqu_model;
    protected $users_model;

    public function _initialize() {
        parent::_initialize();
        $this->posts_model = D("Common/Posts");
        $this->xingqu_model=D("Common/Xingqu");
        $this->huaban_model=D("Common/Huaban");
        $this->users_model=D("Common/Users");
    }

    public function index(){

        $User = M('Posts'); // 实例化User对象
        $count=$User->count();
        $page = $this->page($count, 10);
       $list = $User->limit($page->firstRow.','.$page->listRows)
            ->alias("a")
           ->field("a.id as pid,tb_users.id as uid,a.*,user_nicename")
            ->join("tb_users ON a.post_author = tb_users.id")
            ->order("id")
            //->join("tb_huaban ON a.post_hb_id=tb_huaban.hb_id")
            //->join("tb_xingqu ON a.post_xq_id=tb_xingqu.xq_id")
            ->select();
       $this->assign('posts',$list);// 赋值数据集
        $this->assign("page", $page->show('Admin'));// 赋值分页输出

        //var_dump($posts);
        $this->display();
    }

    public function add()
    {
        $user=$this->users_model->field("id,user_nicename")->select();
        $this->assign("user",$user);
        $this->display('add');
    }
////
    public function post_add()
    {
        if (IS_POST) {
            $_POST['smeta']['thumb'] = sp_asset_relative_url($_POST['smeta']['thumb']);
            $_POST['post']['post_date']=date("Y-m-d H:i:s",time());
            $_POST['post']['recommened']=$_POST['recommended'];
            $_POST['post']['post_author']=$_POST['post_author'];
            $page=I("post.post");
            $page['smeta']=json_encode($_POST['smeta']);
            $page['post_content']=htmlspecialchars_decode($page['post_content']);
            $result=$this->posts_model->add($page);
            if ($result) {
                $this->success("添加成功！");
            } else {
                $this->error("添加失败！");
            }
        }
    }

//删除
    public function delete(){

        if(isset($_POST['ids'])){
            $ids = implode(",", $_POST['ids']);
            $data['slide_status']=0;
            if ($this->posts_model->where("id in ($ids)")->delete()!==false) {
                $this->success("删除成功！");
            } else {
                $this->error("删除失败！");
            }
        }else{
            $id = I("get.id",0,'intval');
            if ($this->posts_model->where(" id = $id")->delete()!==false) {
                $this->success("删除成功！");
            } else {
                $this->error("删除失败！");
            }
        }


        }

       //编辑
    public function edit()
    {
        $xingqu=$this->xingqu_model->field("xq_id,xq_name")->select();
        $id = I("get.id",0,'intval');
        $post=$this->posts_model->where(array('id'=>$id))->find();
        $this->assign($post);
        $this->assign("xingqu",$xingqu);
        $this->display();
        }
        //编辑提交
    public function edit_post(){
        $id = I("post.id",0,'intval');
        if(IS_POST){
            if ($this->posts_model->create()!==false) {
                if ($this->posts_model->where("id = $id")->save()!==false) {
                    $this->success("保存成功！", U("posts/index"));
                } else {
                    $this->error("保存失败！");
                }
            } else {
                $this->error($this->posts_model->getError());
            }

        }
    }
}

<?php
namespace Admin\Controller;
use Common\Controller\AdminbaseController;
class XingquController extends AdminbaseController{

    protected $xingqu_model;
    protected $posts_model;
    protected $xingqufenlei_model;
///首页列表
    public function _initialize()
    {
        parent::_initialize();
        $this->xingqu_model = D("Common/Xingqu");
        $this->xingqufenlei_model = D("Common/XingquFenlei");
        $this->posts_model=D("Common/Posts");
    }

    public function index()
    {
        $cates=array(
            array("xqfl_id"=>"0","xqfl_name"=>"默认分类"),
        );
      $xqfls=$this->xingqufenlei_model->field("xqfl_id,xqfl_name")
          ->select();
        if($xqfls){
            $xqfls=array_merge($cates,$xqfls);
        }else{
            $xqfls=$cates;
        }
       $this->assign("xqfls",$xqfls);
        $where=array();
        $id = I('post.xqfl_id',0,'intval');
        if(!empty($id)){
           $where=array('xq_fl_id'=>$id);
       }
       $this->assign("xq_fl_id",$id);

        $User = M('Xingqu'); // 实例化User对象
        $count=$User->count();
        $page = $this->page($count, 10);
        $xingqu = $User->limit($page->firstRow.','.$page->listRows)
            ->where($where)
            ->alias("a")
            ->join("tb_xingqu_fenlei ON a.xq_fl_id=tb_xingqu_fenlei.xqfl_id")
            ->order('xq_id')
            ->select();
        $this->assign('xingqu',$xingqu);
        $this->assign("page", $page->show('Admin'));// 赋值分页输出
        $this->display();

    }
//兴趣添加
    public function add()
    {
        $xqfls=$this->xingqufenlei_model->field("xqfl_id,xqfl_name")->select();
        $this->assign("xqfls",$xqfls);
        $this->display();
    }

    public function add_post()
    {
        if(IS_POST){



            if ($this->xingqu_model->create()!==false) {
                if ($this->xingqu_model->add()!==false) {
                    $this->success("添加成功！", U("xingqu/index"));
                } else {
                    $this->error("添加失败！");
                }
            } else {
                $this->error($this->xingqu_model->getError());
            }
        }
    }

    // 兴趣编辑
    public function edit(){
        $xqfls=$this->xingqufenlei_model->field("xqfl_id,xqfl_name")->select();
        $id = I("get.id",0,'intval');
        $xq=$this->xingqu_model->where(array('xq_id'=>$id))->find();
        $this->assign($xq);
        $this->assign("xqfls",$xqfls);
        $this->display();
    }

    // 兴趣编辑提交
    public function edit_post(){
        if(IS_POST){
            if ($this->xingqu_model->create()!==false) {
                if ($this->xingqu_model->save()!==false) {
                    $this->success("保存成功！", U("xingqu/index"));
                } else {
                    $this->error("保存失败！");
                }
            } else {
                $this->error($this->xingqu_model->getError());
            }

        }
    }


    // 兴趣删除
    public function delete(){
        if(isset($_POST['ids'])){
            $ids = implode(",", $_POST['ids']);
            $data['slide_status']=0;
            if ($this->xingqu_model->where("xq_id in ($ids)")->delete()!==false) {
                $this->success("删除成功！");
            } else {
                $this->error("删除失败！");
            }
        }else{
            $id = I("get.id",0,'intval');
            if ($this->xingqu_model->delete($id)!==false) {
                $this->success("删除成功！");
            } else {
                $this->error("删除失败！");
            }
        }

    }
    //兴趣内容
    public function content()
    {
        $id = I("get.id",0,'intval');
        $User = M('Xingqu'); // 实例化User对象
        $count=$User->count();
        $page = $this->page($count, 10);
        $xingqu = $User->limit($page->firstRow.','.$page->listRows)
            ->alias("a")
            ->join("tb_posts ON a.xq_id=tb_posts.post_xq_id")
            ->where(array("post_xq_id"=>$id))
            ->select();
        $this->assign('xingqu',$xingqu);
        $this->assign("page", $page->show('Admin'));// 赋值分页输出
        $this->display();

    }
    //兴趣内容编辑
    public function edits()
    {
        $xingqu=$this->xingqu_model->select();
        $id = I("get.id",0,'intval');
        $posts=$this->posts_model

          ->where(array('id'=>$id))->find();
        $this->assign($posts);
        $this->assign("xingqu",$xingqu);
        $this->display();
    }

    // 兴趣内容编辑提交
    public function edits_post(){

        if(IS_POST){

            $id = I("post.id",0,'intval');
            if ($this->posts_model->create()!==false) {
                if ($this->posts_model->where("id = $id")->save()!==false) {
                    $this->success("保存成功！", U("xingqu/content"));
                } else {
                    $this->error("保存失败！");
                }
            } else {
                $this->error($this->posts_model->getError());
            }

        }
    }

    //兴趣内容删除
    public function deletes(){

        $id = I("get.id",0,'intval');
        //var_dump($id);
       if ($this->posts_model->where("id = $id")->delete()!==false) {
            $this->success("删除成功！", U("xingqu/content"));
        } else {
            $this->error("删除失败！");
        }
    }
}
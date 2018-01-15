<?php
namespace Admin\Controller;
use Common\Controller\AdminbaseController;
class HuabanController extends AdminbaseController{
    protected $huaban_model;
    protected $xingqu_model;
    protected $posts_model;
    public function _initialize() {
        parent::_initialize();
        $this->huaban_model = D("Common/Huaban");
        $this->xingqu_model = D("Common/Xingqu");
        $this->posts_model=D("Common/Posts");
    }
///首页列表
    public function index()
    {
        $User = M('Huaban'); // 实例化User对象
        $count=$User->count();
        $page = $this->page($count, 10);
        $huaban = $User->limit($page->firstRow.','.$page->listRows)
            ->alias("a")
            ->join("tb_xingqu ON a.hb_xqd_id=tb_xingqu.xq_id")
            ->order("hb_id")
            ->select();
        $this->assign("huaban",$huaban);
        $this->assign("page", $page->show('Admin'));// 赋值分页输出
        $this->display();
    }

    //编辑
    public function edit()
    {
        $xingqu=$this->xingqu_model->field("xq_id,xq_name")->select();
        $id = I("get.id",0,'intval');
        $huaban=$this->huaban_model->where(array('hb_id'=>$id))->find();
        $this->assign($huaban);
        $this->assign("xingqu",$xingqu);
        $this->display();
    }

    //编辑提交
    public function edit_post()
    {

       // var_dump($id);
        if(IS_POST){
            if ($this->huaban_model->create()!==false) {
                if ($this->huaban_model->save()!==false) {
                    $this->success("保存成功！", U("huaban/index"));
                } else {
                    $this->error("保存失败！");
                }
            } else {
                $this->error($this->huaban_model->getError());
            }

        }
    }

    public function delete(){

        $id = I("get.id",0,'intval');
        //var_dump($id);
        if ($this->huaban_model->delete($id)!==false) {
            $this->success("删除成功！");
        } else {
            $this->error("删除失败！");
        }
    }

    public function content()
    {
        $id = I("get.id",0,'intval');
       // var_dump($id);
        $User = M('Huaban'); // 实例化User对象
        $count=$User->count();
        $page = $this->page($count, 10);
        $posts = $User->limit($page->firstRow.','.$page->listRows)
            ->alias("a")
            ->join("tb_posts ON a.hb_id=tb_posts.post_xq_id")
            ->where(array('post_hb_id'=>$id))
            ->select();
        $this->assign('posts',$posts);
        $this->assign("page", $page->show('Admin'));// 赋值分页输出
        $this->display();
    }

    public function edits()
    {
        $xingqu=$this->huaban_model->select();
        $id = I("get.id",0,'intval');
        $posts=$this->posts_model
            ->where(array('id'=>$id))->find();
        $this->assign($posts);
        $this->assign("xingqu",$xingqu);
        $this->display();
    }

    public function edits_post()
    {
        $id = I("post.id",0,'intval');
        if(IS_POST){
            if ($this->posts_model->create()!==false) {
                if ($this->posts_model->where("id = $id")->save()!==false) {
                    $this->success("保存成功！", U("huaban/content"));
                } else {
                    $this->error("保存失败！");
                }
            } else {
                $this->error($this->posts_model->getError());
            }

        }
    }
    
    
      //画板内容删除
    public function deletes()
    {
        $id = I("get.id",0,'intval');
        //var_dump($id);
        if ($this->posts_model->where("id = $id")->delete()!==false) {
            $this->success("删除成功！");
        } else {
            $this->error("删除失败！");
        }
    }
}
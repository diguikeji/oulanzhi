<?php
namespace Admin\Controller;
use Common\Controller\AdminbaseController;
class XingqufenleiController extends AdminbaseController{
   protected $xingqufenlei_model;
   protected $xingqu_model;

    public function _initialize()
    {
        parent::_initialize();
        $this->xingqufenlei_model = D("Common/XingquFenlei");
        $this->xingqu_model=D("Common/Xingqu");
   }
   ///首页列表
    public function index()
    {
        $User = M('XingquFenlei'); // 实例化User对象
        $count=$User->count();
        $page = $this->page($count, 10);
        $xingqus = $User->limit($page->firstRow.','.$page->listRows)
            ->order('xqfl_id')
            ->select();
        $this->assign('xingqus',$xingqus);
        $this->assign("page", $page->show('Admin'));// 赋值分页输出
        $this->display();
    }

    public function add()
    {
        $this->display('add');
    }

    public function add_post()
    {
        if(IS_POST){
            if ($this->xingqufenlei_model->create()!==false) {
                if ($this->xingqufenlei_model->add()!==false) {
                    $this->success("添加成功！", U("xingqufenlei/index"));
                } else {
                    $this->error("添加失败！");
                }
            } else {
                $this->error($this->xingqufenlei_model->getError());
            }

        }
    }

    // 兴趣分类删除
    public function delete(){
        $id = I("get.id", 0, 'intval');
        if ($this->xingqufenlei_model->delete($id) !== false) {
            $slide_obj=M("Xingqu");
            $slide_obj->where(array('xq_fl_id'=>$id))->save(array("xq_fl_id"=>0));
            $this->success("删除成功！");
        } else {
            $this->error("删除失败！");
        }
    }
    
    //兴趣分类编辑
    public function edit()
    {
        $id = I("get.id",0,'intval');
        $xingqus=$this->xingqufenlei_model->where(array('xqfl_id'=>$id))->find();
        $this->assign($xingqus);
        $this->display();
    }

    public function edit_post()
    {
        if(IS_POST){
            if ($this->xingqufenlei_model->create()!==false) {
                if ($this->xingqufenlei_model->save()!==false) {
                    $this->success("修改成功！", U("xingqufenlei/index"));
                } else {
                    $this->error("修改失败！");
                }
            } else {
                $this->error($this->xingqufenlei_model->getError());
            }

        }
    }

}
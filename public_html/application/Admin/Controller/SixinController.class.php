<?php
namespace Admin\Controller;
use Common\Controller\AdminbaseController;
class SixinController extends AdminbaseController{
    protected $sixin_model;

    public function _initialize()
    {
        parent::_initialize();
        $this->sixin_model=D("Common/Sixin");
    }
    //私信列表
    public function index()
    {
        $Sixin = M('Sixin'); // 实例化Sixin对象
        $count=$Sixin->count();
        $page = $this->page($count, 10);
        $list = $Sixin->limit($page->firstRow.','.$page->listRows)->order('sx_id')->select();
        $this->assign("sixin",$list);
        $this->assign("page", $page->show('Admin'));// 赋值分页输出
        $this->display();

    }

    public function add()
    {
        $this->display();
    }
    //私信内容添加
    public function add_post()
    {
        $_POST['post']['sx_title']=$_POST['sx_title'];
        $_POST['post']['sx_content']=$_POST['sx_content'];
        $_POST['post']['sx_time']=date("Y-m-d H:i:s",time());
        $sixin=I("post.post");
        $sixin['sx_content']=htmlspecialchars_decode($sixin['sx_content']);
        $result=$this->sixin_model->add($sixin);
        if ($result) {
            $this->success("添加成功！");
        } else {
            $this->error("添加失败！");
        }



    }
    //编辑
    public function edit()
    {
        $id = I("get.id",0,'intval');
        $sixin=$this->sixin_model->where(array('sx_id'=>$id))->find();
        $this->assign("sixin",$sixin);
        $this->display();
    }

    //编辑提交
    public function edit_post()
    {
        if(IS_POST){
            if ($this->sixin_model->create()!==false) {
                if ($this->sixin_model->save()!==false) {
                    $this->success("保存成功！", U("sixin/index"));
                } else {
                    $this->error("保存失败！");
                }
            } else {
                $this->error($this->sixin_model->getError());
            }

        }
    }

    //删除
    public function delete()
    {
        if(isset($_POST['ids'])){
            $ids = implode(",", $_POST['ids']);
            $data['slide_status']=0;
            if ($this->sixin_model->where("sx_id in ($ids)")->delete()!==false) {
                $this->success("删除成功！");
            } else {
                $this->error("删除失败！");
            }
        }else{
            $id = I("get.id",0,'intval');
            if ($this->sixin_model->delete($id)!==false) {
                $this->success("删除成功！");
            } else {
                $this->error("删除失败！");
            }
        }
    }
}
<?php
namespace Admin\Controller;
use Common\Controller\AdminbaseController;
class ActivityController extends AdminbaseController{
    protected $activity_model;

    public function _initialize()
    {
        parent::_initialize();
        $this->activity_model=D("Common/Activity");
    }
    //活动首页
    public function index()
    {
        $User = M('Activity'); // 实例化User对象
        $count=$User->count();
        $page = $this->page($count, 10);
        $activity = $User->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('activity',$activity);
        $this->assign("page", $page->show('Admin'));// 赋值分页输出
        $this->display();
    }
    
    ///添加
    public function add()
    {
        $this->display();
    }

    public function add_post()
    {

            if (IS_POST) {
                $_POST['post']['hd_img_url'] = $_POST['hd_img_url'];
                $_POST['post']['hd_time'] = date("Y-m-d H:i:s", time());
                $_POST['post']['hd_recommend'] = $_POST['hd_recommend'];
                $_POST['post']['hd_name'] = $_POST['hd_name'];
                $_POST['post']['hd_url'] = $_POST['hd_url'];
                $page = I("post.post");
                $result = $this->activity_model->add($page);
                if ($result) {
                    $this->success("添加成功！");
                } else {
                    $this->error("添加失败！");
                }
            }

    }


    //编辑
    public function edit()
    {
        $id = I("get.id",0,'intval');
        $activity=$this->activity_model->where(array('hd_id'=>$id))->find();
        $this->assign($activity);
        $this->display();
    }
    //编辑提交
    public function edit_post()
    {
        if(IS_POST){
            if ($this->activity_model->create()!==false) {
                if ($this->activity_model->save()!==false) {
                    $this->success("保存成功！", U("xingqu/index"));
                } else {
                    $this->error("保存失败！");
                }
            } else {
                $this->error($this->activity_model->getError());
            }

        }
    }

    // 兴趣删除
    public function delete(){
        if(isset($_POST['ids'])){
            $ids = implode(",", $_POST['ids']);
            $data['slide_status']=0;
            if ($this->activity_model->where("xq_id in ($ids)")->delete()!==false) {
                $this->success("删除成功！");
            } else {
                $this->error("删除失败！");
            }
        }else{
            $id = I("get.id",0,'intval');
            if ($this->activity_model->delete($id)!==false) {
                $this->success("删除成功！");
            } else {
                $this->error("删除失败！");
            }
        }

    }
}
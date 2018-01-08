<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2018/1/7
 * Time: 17:07
 */
namespace Portal\Controller;

use Common\Controller\HomebaseController;

/**
 *  发现
 */
class FindController extends HomebaseController
{
    //发现页分类列表
     public function index(){
         $xqfl_model = M("Xingqu_fenlei")->select();
         $xingqu_model = M("Xingqu");
         $xingqu =$xingqu_model->where("xq_recommended=1")->order("xq_create_time")->limit(5)->select();
         $this->assign("xqfl",$xqfl_model);
         $this->assign("xingqu",$xingqu);
         $this->display();
     }

     //发现页兴趣采集
     public function interest(){

     }
}
<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2018/1/7
 * Time: 17:07
 */
namespace Portal\Controller;

use Common\Controller\HomebaseController;
use Portal\Model\XingquModel;

/**
 *  发现
 */
class FindController extends HomebaseController
{
    //发现页
     public function index(){

         $this->display(":find");
     }

     //发现页活动
    public function active(){

    }

     //发现页兴趣和画板
     public function getInterestList(){
         $xingqu_model = M("xingqu");
         $count = $xingqu_model->where("xq_fl_zc=1")->count();
         $page = new \Think\Page($count,16);
         $Model = M(); // 实例化一个model对象 没有对应任何数据表
         $xingqu=$Model ->query("select a.xq_id,a.xq_name,a.xq_intro, GROUP_CONCAT(hb_id) as hb_id_list,GROUP_CONCAT(hb_img) as hb_img_list from (select * from tb_xingqu where xq_fl_zc=1) a join tb_huaban b on a.xq_id = b.hb_xqd_id group by xq_id limit $page->firstRow,$page->listRows ");
         echo json_encode($xingqu);
     }
}
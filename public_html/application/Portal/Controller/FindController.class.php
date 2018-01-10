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
    //发现页分类列表
     public function index(){

        $xingqu_model  = M("Xingqu");
         $xingqu = $xingqu_model->where("xq_fl_zc=1")
               ->alias("a")
               ->join("tb_huaban b on a.xq_id = b.hb_xqd_id")
               ->field("a.xq_id,a.xq_name,a.xq_intro,a.xq_img,b.hb_id")
               ->select();
         /*
         $dataList = json_encode($xingqu);
         $arrcount = count($xingqu);
         for($i = 1; i<$arrcount; $i++){
             $hb_id = $xingqu[$arrcount][hb_id];
         }

         echo $hb_id;

         echo json_encode($huaban);
         */
         exit();
         $this->display(":find");
     }

     //发现页兴趣采集
     public function interest(){

     }
}
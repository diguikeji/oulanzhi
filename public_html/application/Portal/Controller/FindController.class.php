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
         $activity_model = M("Activity");
         $activity = $activity_model->order('hd_time')->where("hd_recommend=1")->limit(5)->select();
         $this->assign("activity",$activity);
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

    //获取画板图片地址
    public function imgHuaban(){
        $huaban_model = M("Huaban");
        $id=I("get.id",0,"intval");
        $huaban_img = $huaban_model->field("hb_img")->where(array("hb_id" =>$id))->find();
        $img = $huaban_img['hb_img'];

        $should_show_default=false;

        if(empty($img)){
            $should_show_default=true;
        }else {
            if (strpos($img, "http") === 0) {
                header("Location: $img");
                exit();
            } else {
                $img_dir = C("UPLOADPATH") . "huaban/";
                $img = $img_dir . $img;
                if (file_exists($img)) {
                    $imageInfo = getimagesize($img);
                    if ($imageInfo !== false) {
                        $fp = fopen($img, "r");
                        $file_size = filesize($img);
                        $mime = $imageInfo['mime'];
                        header("Content-type: $mime");
                        header("Accept-Length:" . $file_size);
                        $buffer = 259 * 313;
                        $file_count = 0;
                        //向浏览器返回数据
                        while (!feof($fp) && $file_count < $file_size) {
                            $file_content = fread($fp, $buffer);
                            $file_count += $buffer;
                            echo $file_content;
                            flush();
                            ob_flush();
                        }
                        fclose($fp);
                    } else {
                        $should_show_default = true;
                    }
                } else {
                    $should_show_default = true;
                }
            }
        }
        if($should_show_default){
            $imageInfo = getimagesize("public/images/haibao.png");
            if ($imageInfo !== false) {
                $mime=$imageInfo['mime'];
                header("Content-type: $mime");
                echo file_get_contents("public/images/haibao.png");
            }

        }
        exit();
    }
}
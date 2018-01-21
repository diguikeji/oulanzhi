<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2018/1/13
 * Time: 10:41
 */
namespace Portal\Controller;

use Common\Controller\HomebaseController;
use Portal\Model\XingquModel;

/**
 *  活动
 */
class ActivityController extends HomebaseController{

    public function index(){
        $activity_model = M("Activity");
        $activity = $activity_model->select();
        $activityRecommend = $activity_model->where("hd_recommend=1")->select();
        $this->assign("activity",$activity);
        $this->assign("activityRecommend",$activityRecommend);
        $this->display(":activity");
    }

    //获取活动图片地址
    public function imgActivity(){
        $activity_model = M("Activity");
        $id=I("get.id",0,"intval");
        $activity_img = $activity_model->field("hd_img_url")->where(array("id" =>$id))->find();
        $img = $activity_img['hd_img_url'];

        $should_show_default=false;

        if(empty($img)){
            $should_show_default=true;
        }else {
            if (strpos($img, "http") === 0) {
                header("Location: $img");
                exit();
            } else {
                $img_dir = C("UPLOADPATH");
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
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
         
         
        if($this->user){
             $this->assign("isLogin",1);
        }
        else{
            $this->assign("isLogin",0);
        }
         
         $this->assign("activity",$activity);
         $this->display(":find");
     }

     //发现页活动
    public function active(){

    }

     //发现页画板和采集
     public function getHuabanList(){
         $uid = sp_get_current_userid();
         $huaban_model = M("Huaban");
         $count = $huaban_model->count();
         $page = new \Think\Page($count,6);
         $Model = M();
         $huabancaiji = $Model ->query("Select a.hb_id ,a.hb_name,a.hb_descp,GROUP_CONCAT(id) as pidList, c.hbgz_hbid from tb_huaban a left join tb_posts b on a.hb_id = b.post_hb_id left join (select * from tb_hbgz WHERE hbgz_uid ='$uid')c on c.hbgz_hbid = a.hb_id  GROUP BY hb_id limit $page->firstRow,$page->listRows");
         echo json_encode($huabancaiji);
     }


    //发现页兴趣和采集
    public function getInterestList(){
        $uid = sp_get_current_userid();
        $xingqu_model = M("xingqu");
        $count = $xingqu_model->count();
        $page = new \Think\Page($count,6);
        $Model = M();
        $xingqucaiji = $Model ->query("Select a.xq_id ,a.xq_name,a.xq_intro,GROUP_CONCAT(id) as pidList,c.xqdgz_xqid from tb_xingqu a left join tb_posts b on a.xq_id = b.post_xq_id left join (select * from tb_xqd_guanzhu where xqdgz_uid = '$uid' )c on c.xqdgz_xqid = a.xq_id GROUP BY xq_id limit $page->firstRow,$page->listRows" );
        echo json_encode($xingqucaiji);
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
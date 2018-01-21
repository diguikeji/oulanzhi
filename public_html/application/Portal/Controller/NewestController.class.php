<?php
/**
 * Created by PhpStorm.
 * User: 周前
 * Date: 2018/1/7
 * Time: 18:59
 */

namespace Portal\Controller;

use Common\Controller\HomebaseController;
use Portal\Model\XingquModel;

/**
 *  最新
 */
class NewestController extends HomebaseController
{
    public function index(){

        $category_model = M("Xingqu_fenlei");
        $one = $category_model->where("xqfl_area = 1")->select();
        $two = $category_model->where("xqfl_area = 2")->select();
        $three= $category_model->where("xqfl_area = 3")->select();
        $xingqu_model = M("Xingqu");
        $xingqu = $xingqu_model->limit(4)->select();
        $this->assign("one",$one);
        $this->assign("two",$two);
        $this->assign("three",$three);
        $this->assign("xingqu",$xingqu);
        $this->display(":newest");
    }

    //最新页的全部采集
    public function collect(){

        $users_model = M('Users');
        $post_model = M("Posts");
        $count = $post_model->count();
        $page = new \Think\Page($count,16);
        $list = $users_model
            ->alias("a")
            ->join("tb_posts b on a.id =b.post_author")
            ->field("b.id as pid,a.id as uid,a.user_nicename,a.avatar,b.post_love,b.post_title,b.post_img_url,b.recommended,b.post_date")
            ->order('post_date desc')
            ->where("post_xq_id != 0")
            ->limit($page->firstRow . ',' . $page->listRows)
            ->select();

        echo json_encode($list);
    }


    //获取兴趣图片
    public function imgXingqu(){
        $xingqu_model = M("Xingqu");
        $id=I("get.id",0,"intval");
        $xingqu_img = $xingqu_model->field("xq_img")->where(array("xq_id" =>$id))->find();
        $img = $xingqu_img['xq_img'];

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
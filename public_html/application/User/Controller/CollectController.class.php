<?php
/**
 * Created by PhpStorm.
 * User: 周前
 * Date: 2018/1/6
 * Time: 10:04
 */

namespace User\Controller;


use Common\Controller\MemberbaseController;

class CollectController extends MemberbaseController
{
    //用户中心采集列表显示
    public function index()
    {
        $uid = sp_get_current_userid();
        $caiji_model = M("Caiji");
        $where = array("cj_u_id" => $uid);
        $caiji = $caiji_model->where($where)
            ->order("cj_time")->alias("a")->join("tb_posts on a.cj_posts_id = tb_posts.id")->select();
        $this->assign("caiji", $caiji);
    }

    //用户采集
    public function do_collect()
    {
        $id = I("id");
        var_dump($id);
    }

    //用户采集编辑
    public function edit_collect()
    {

    }

    //用户采集编辑提交
    public function edit_post_collect()
    {

    }

    //用户采集删除
    public function delete_collect()
    {

    }

    //用户自己的标签
    public function label()
    {
        $uid = sp_get_current_userid();
        $tag_model = M("Tag");
        $tag = $tag_model
            ->where(array("tag_user_id" => $uid))
            ->select();
        echo json_encode($tag);
    }

    //用户自己的喜欢
    public function love()
    {
        $uid = sp_get_current_userid();
        $love_model = M("Love");
        $love = $love_model
            ->alias("a")
            ->join("tb_posts ON a.love_posts_id = tb_posts.id")
            ->where(array("love_users_id" => $uid))
            ->select();
        echo json_encode($love);
    }

    //获取采集图片地址
    public function imgCollect(){
        $posts_model = M("Posts");
        $id=I("get.id",0,"intval");
        $post_img = $posts_model->field("post_img_url")->where(array("id" =>$id))->find();
        $img = $post_img['post_img_url'];

        $should_show_default=false;

        if(empty($img)){
            $should_show_default=true;
        }else {
            if (strpos($img, "http") === 0) {
                header("Location: $img");
                exit();
            } else {
                $img_dir = C("UPLOADPATH") . "posts/";
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
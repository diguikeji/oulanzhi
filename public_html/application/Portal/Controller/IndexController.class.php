<?php
/*
 *      _______ _     _       _     _____ __  __ ______
 *     |__   __| |   (_)     | |   / ____|  \/  |  ____|
 *        | |  | |__  _ _ __ | | _| |    | \  / | |__
 *        | |  | '_ \| | '_ \| |/ / |    | |\/| |  __|
 *        | |  | | | | | | | |   <| |____| |  | | |
 *        |_|  |_| |_|_|_| |_|_|\_\\_____|_|  |_|_|
 */
/*
 *     _________  ___  ___  ___  ________   ___  __    ________  _____ ______   ________
 *    |\___   ___\\  \|\  \|\  \|\   ___  \|\  \|\  \ |\   ____\|\   _ \  _   \|\  _____\
 *    \|___ \  \_\ \  \\\  \ \  \ \  \\ \  \ \  \/  /|\ \  \___|\ \  \\\__\ \  \ \  \__/
 *         \ \  \ \ \   __  \ \  \ \  \\ \  \ \   ___  \ \  \    \ \  \\|__| \  \ \   __\
 *          \ \  \ \ \  \ \  \ \  \ \  \\ \  \ \  \\ \  \ \  \____\ \  \    \ \  \ \  \_|
 *           \ \__\ \ \__\ \__\ \__\ \__\\ \__\ \__\\ \__\ \_______\ \__\    \ \__\ \__\
 *            \|__|  \|__|\|__|\|__|\|__| \|__|\|__| \|__|\|_______|\|__|     \|__|\|__|
 */
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2014 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Dean <zxxjjforever@163.com>
// +----------------------------------------------------------------------
namespace Portal\Controller;

use Common\Controller\HomebaseController;

/**
 * 首页
 */
class IndexController extends HomebaseController
{

    //首页
    public function index()
    {
        $this->display(":index");
    }

    //获取用户登录信息
    public function getUser(){
        $user = session("user");
        if($user){
            //用户采集数
           $uid = sp_get_current_userid();
            $posts_model = M("posts");
            $postCount = $posts_model->where(array("post_author"=>$uid))->count();

            //用户喜欢数
            $love_model = M("Love");
            $loveCount = $love_model->where(array("love_users_id"=>$uid))->count();

            //用户关注
            $xqgz_model = M("Xqd_guanzhu");
            $xqdCount = $xqgz_model->where(array("xqdgz_uid"=>$uid))->count();
            $usergz_model =M("Yonghu_gz");
            $userCount = $usergz_model->where(array("usergz_uid_pid"=>$uid))->count();
            $hbgz_model = M("hbgz");
            $hbgzCount = $hbgz_model->where(array("hbgz_uid"=>$uid))->count();

            $gzCount = $xqdCount+$userCount+$hbgzCount;

            $data['post'] = $postCount;
            $data['love'] = $loveCount;
            $data['gz'] = $gzCount;
            $data["user"] = $user;

            echo json_encode($data);
            //echo json_encode($user);
        }else{
            echo 0;
        }
    }

    //采集列表
    public function getPostList()
    {
        $users_model = M('Users');
        $post_model = M("Posts");
        $count = $post_model->count();
        $page = new \Think\Page($count,16);
        $list = $users_model
            ->alias("a")
            ->join("tb_posts b on a.id =b.post_author")
            ->field("b.id as pid,a.id as uid,a.user_nicename,a.avatar,b.post_title,b.post_love,b.post_img_url,b.recommended,b.post_date")
            ->order('post_date desc')
            ->limit($page->firstRow . ',' . $page->listRows)
            ->select();

        echo json_encode($list);
    }


    //为您推荐
    public function getRecommended()
    {
        $users_model = M('Users');
        $post_model = M("Posts");
        $count = $post_model->count();
        $page = new \Think\Page($count,16);
        $list = $users_model
            ->alias("a")
            ->join("tb_posts b on a.id =b.post_author")
            ->field("b.id as pid,a.id as uid,a.user_nicename,a.avatar,b.post_title,b.post_love,b.post_img_url,b.recommended,b.post_date")
            ->order('post_date desc')
            ->where("recommended = 1")
            ->limit($page->firstRow . ',' . $page->listRows)
            ->select();


        echo json_encode($list);
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
    
     //私信列表
    public function message(){
        $sixin_model = M("Sixin");
        $sixin = $sixin_model->select();
        echo json_encode($sixin);
    }
}



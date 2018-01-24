<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2014 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Dean <zxxjjforever@163.com>
// +----------------------------------------------------------------------
namespace Portal\Controller;

use Common\Controller\HomebaseController;

class SearchController extends HomebaseController {
    
    //搜索结果页面
    public function index() {

        $postName = $_POST["postname"];

        $where["b.post_title"] = array('like',$postName);

        $users_model = M('Users');
        $list = $users_model
            ->alias("a")
            ->join("tb_posts b on a.id =b.post_author")
            ->where($where)
            ->field("b.id as pid,a.id as uid,a.user_nicename,a.avatar,b.post_title,b.post_love,b.post_img_url,b.recommended,b.post_date")
            ->order('post_date desc')
            ->select();
        $this->assign("list",$list);
        $category_model = M("Xingqu_fenlei");
        $one = $category_model->where("xqfl_area = 1")->select();
        $two = $category_model->where("xqfl_area = 2")->select();
        $three= $category_model->where("xqfl_area = 3")->select();
        $this->assign("one",$one);
        $this->assign("two",$two);
        $this->assign("three",$three);
		$this -> display(":searc");
    }
    
}

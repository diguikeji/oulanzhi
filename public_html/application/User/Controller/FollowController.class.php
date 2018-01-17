<?php
/**
 * Created by PhpStorm.
 * User: 周前
 * Date: 2018/1/16
 * Time: 20:23
 */

/**
 * Created by PhpStorm.
 * User: 周前
 * Date: 2018/1/7
 * Time: 12:15
 */
namespace User\Controller;


use Common\Controller\MemberbaseController;

/*
 *   用户关注行为
 */

class DrawController extends MemberbaseController
{
    //显示用户关注的兴趣点
   public function interest(){
       $this->display("follow/");
   }
}
<?php
namespace User\Controller;

use Common\Controller\MemberbaseController;

class CenterController extends MemberbaseController
{

    function _initialize()
    {
        parent::_initialize();
    }


    // 用户中心
    public function index()
    {
        $this->assign($this->user);
        $this->display(':center');
    }

    public function userCount(){

    }












}

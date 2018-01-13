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
        $this->display(":newest");
    }
}
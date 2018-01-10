<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2018/1/10
 * Time: 16:36
 */
namespace Portal\Model;

use Common\Model\CommonModel;

class XingquModel extends CommonModel {

    public function items()
    {
        return $this->hasMany('Huaban', 'hb_xqd_id', 'xq_id');
    }

    public static function getHuaban(){
        $huaban = self::with("item")->select();
        return $huaban;
    }
}




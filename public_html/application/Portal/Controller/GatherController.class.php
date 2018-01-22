<?php
/*
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
class GatherController extends HomebaseController
{

    //采集页面
    public function index()
    {
     
        $userInfo=session('user');
       
        
        
        if(!$userInfo)
        {
            $url="Location:/index.php?g=user&m=login&a=index&redirecturl="."http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
            header($url); 
            
        }
       else{
           
            $Huaban = M("Huaban"); 
        
            $data["hb_u_id"]=$userInfo["id"];
            $list=$Huaban->where($data)->order('hb_id desc')->select(); 
            
            //var_dump($list);
           
            $this->assign("list",$list);
            $this->assign("media",$_GET["media"]);
            $this->assign("post_source",$_GET["url"]);
            $this->assign("description",$_GET["description"]);
            $this->display();
       }
        
       
    }
    
    
    
    
    //插件下载页面
    public function plugin()
    {
        
        
        $this->display();
    }
    
    //创建画板接口
     public function addHuaban()
    {
        
        $Huaban = M("Huaban"); 
       
        $userInfo=session('user');
        $data["hb_name"]=$_POST["hb_name"];
        $data["hb_u_id"]=$userInfo["id"];
        
        $rs=$Huaban->where($data)->find(); 
        $rsList=[];
        if($rs)
        {
            $rsList["code"]=1001;
        }
        else
        {
             
             $dataAdd["hb_u_id"]=$userInfo["id"];
             $dataAdd["hb_name"]=$_POST["hb_name"];
             $dataAdd["hb_create_time"]=date("Y-m-d H:i:s");
             $rsId=$Huaban->add($dataAdd); 
             
             $data["hb_u_id"]=$userInfo["id"];
             $dataFind["hb_u_id"]=$userInfo["id"];
             $list=$Huaban->where($dataFind)->order('hb_id desc')->select(); 
             $rsList["code"]=1000;
             $rsList["data"]=$list;
             
             
             
        }
        echo json_encode($rsList);
        
       
    }
    
    
    //采集信息提交
    public function addCaiji(){
        
        
        $url=$_POST["post_yl_img_url"];
        $filename=uniqid().rand(1000,9999).strrchr($url,'.');;
        $ch = curl_init ();
        curl_setopt ( $ch, CURLOPT_CUSTOMREQUEST, 'GET' ); 
        curl_setopt ( $ch, CURLOPT_SSL_VERIFYPEER, false ); 
        curl_setopt ( $ch, CURLOPT_URL, $url );
        ob_start ();
        curl_exec ( $ch );
        $return_content = ob_get_contents ();
        ob_end_clean (); 
        $return_code = curl_getinfo ( $ch, CURLINFO_HTTP_CODE );
        $fp=@fopen("data/downloadImg/".$filename,"a"); //将文件绑定到流 
        if($fp){
        fwrite($fp,$return_content); //写入文件} 
       
       
       $userInfo=session('user');
       
       $addData["post_img_url"]="/data/downloadImg/".$filename;
       $addData["post_yl_img_url"]=$url;
       $addData["post_miaoshu"]=$_POST["post_miaoshu"];
       $addData["post_hb_id"]=$_POST["post_hb_id"];
       $addData["post_source"]=$_POST["post_source"];
       $addData["post_author"]=$userInfo["id"];
       $addData["post_date"]=date("Y-m-d H:i:s");
        
        
        $Posts = M("Posts"); 
        $rs=$Posts->add($addData); 
        
        if($rs)
        {
            echo 1;
        }
        else{
            echo 0;
        }
        
        
        }else{
           
           echo 0;
           
        }
        
    }
    
    
    
    

}



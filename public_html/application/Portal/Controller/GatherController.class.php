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
            $url="Location:/index.php?g=user&m=login&a=index&redirecturl="."https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
            header($url); 
            
        }
       else{
           
            $Huaban = M("Huaban"); 
        
            $data["hb_u_id"]=$userInfo["id"];
            $list=$Huaban->where($data)->order('hb_id desc')->select(); 
            
            //var_dump($list);
           
            $this->assign("tag_users_id",$userInfo["id"]);
            $this->assign("list",$list);
            $this->assign("media",$_GET["media"]);
            $this->assign("post_source",$_GET["url"]);
            $this->assign("description",$_GET["description"]);
            $this->display();
       }
        
       
    }
    
    
    //批量采集页面
    public function caijiAll()
    {
     
        $userInfo=session('user');
       
        var_dump($_POST);
        
        
        if(!$userInfo)
        {
            $url="Location:/index.php?g=user&m=login&a=index&redirecturl="."https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
            header($url); 
            
        }
       else{
           
            $Huaban = M("Huaban"); 
        
            $data["hb_u_id"]=$userInfo["id"];
            $list=$Huaban->where($data)->order('hb_id desc')->select(); 
            
            $imgList=$_POST["params"];
            
           
            $this->assign("tag_users_id",$userInfo["id"]);
            $this->assign("list",$list);
            $this->assign("imgList",$imgList);
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
        
        $userInfo=session('user');
        
        $Posts = M("Posts");
        $dataPosts["post_author"]=$userInfo["id"];
        $dataPosts["post_yl_img_url"]=$url;
        $rsFind=$Posts->where($dataPosts)->find(); 
        
        if($rsFind)
        {
            echo -1;
        }
        else{
            
            
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
           
           
           $addData["post_img_url"]="/data/downloadImg/".$filename;
           $addData["post_yl_img_url"]=$url;
           $addData["post_miaoshu"]=$_POST["post_miaoshu"];
           $addData["post_hb_id"]=$_POST["post_hb_id"];
           $addData["post_source"]=$_POST["post_source"];
           $addData["post_author"]=$userInfo["id"];
           $addData["post_date"]=date("Y-m-d H:i:s");
            
            
             
            $rs=$Posts->add($addData); 
            
            
            if($rs)
            {
                
                $Tag = M("tag"); 
                $addAllData=json_decode($_POST["tag_list"],1);
                
                
                $Tag_posts = M("Tag_posts");
                for($i=0;$i<count($addAllData);$i++)
                {
                    
                    $rsFind=$Tag->where($addAllData[$i])->find(); 
                    $data1["tp_post_id"]=$rs;
                    
                    if($rsFind)
                    {
                        $data1["tp_tag_id"]=$rsFind["tag_id"];
                        $rs1=$Tag_posts->add($data1);
                    }
                    else
                    {
                        $addAllData[$i]["tag_create_time"]=date("Y-m-d H:i:s");
                        
                        $tagAddRsId=$Tag->add($addAllData[$i]);
                        
                        $data1["tp_tag_id"]=$tagAddRsId;
                        
                        $rs1=$Tag_posts->add($data1);
                        
                    }
                }
                
                echo 1;
            }
            else{
                echo 0;
            }
        
            
            
            
        }
        
      
        
        
       
        
       
        
    }
    
    }
    
    

}



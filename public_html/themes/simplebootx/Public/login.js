/**
 * Created by Admin on 2018/1/22.
 */


 $(".nav-box").on("click","#modal1Open",function()
    {
        
       
       $("#modal-1").modal();
       $("#modal-1").removeClass("in").addClass("md-show");
       
        
    });
    
    $("body").on("click",".md-close",function()
    {
        $("#modal-1").modal("hide");
        $(".md-overlay").remove();
        
    });


$.ajax({
    type: "GET",

    url: "/index.php?g=&m=Index&a=getUser",

    dataType: "json",

    success: function (data) {

        //console.log(data);
        if(data== 0){
            $("#user").append(
                '<ul id="nav-login">'+
                '<li id="login"><a href="index.php?g=user&m=login&a=index"><i class="iconfont icon-denglu"></i></a></li>'+
                '</ul>'
            )
        }else{
            var uid = data.user.id;
            //console.log(uid);
            $("#user").append(
                '<ul id="nav-login">'+
                '<li id="info"><a href="#"  id="modal1Open"><i class="iconfont icon-xinxi1"></i><div  class="dote" ></div></a></li>'+
                '<li class="dropdown" >'+
                '<a href="index.php?g=user&m=center&a=index" class="dropdown-toggle">'+
                '<div class="dropdown-toggle-touxiang" style="width: 27px;height: 27px;border-radius: 50%;"><img src="index.php?g=user&m=public&a=avatar&id='+uid+'"></div></a>'+
                '<ul class="dropdown-menu" style="min-width: 12rem;background: white;margin-left: -100px;margin-top: 20px">'+
                '<div style="position: absolute;width: 13px;height: 13px;background-color: white;z-index: -1;right: 18px;top: -6px;transform:rotate(45deg);-ms-transform:rotate(45deg);-moz-transform:rotate(45deg);-webkit-transform:rotate(45deg);-o-transform:rotate(45deg);"></div>'+
                '<li style="min-width: 100%"><a href="index.php?g=User&m=follow&a=interestFollow" style="font-size: 1.5rem;line-height: 30px;;min-width: 100%;color: grey"><i class="iconfont icon-guanzhu" style="font-size: 1.8rem;float: left;margin-right: 0.8rem"></i>已关注<font style="float: right">'+data.gz+'</font></a></li>'+
                '<li><a href="index.php?g=user&m=center&a=caiji"  style="font-size: 1.5rem;line-height: 30px;min-width: 100%;color: grey"><i class="iconfont icon-huaban" style="font-size: 1.8rem;float: left;margin-right: 0.8rem" ></i>采集<font style="float: right">'+data.post+'</font></a></li>'+
                '<li><a href="index.php?g=User&m=center&a=love"  style="font-size: 1.5rem;line-height: 30px;min-width: 100%;color: grey"><i class="iconfont icon-fensi" style="font-size: 1.8rem;float: left;margin-right: 0.8rem"></i>喜欢<font style="float: right">'+data.love+'</font></a></li>'+
                '<li><a href="index.php?g=user&m=profile&a=edit"  style="font-size: 1.5rem;line-height: 30px;min-width: 100%;color: grey;text-align: center">设置</a></li>'+
                '<li><a href="index.php?g=user&m=index&a=logout"  style="font-size: 1.5rem;line-height: 30px;min-width: 100%;color: grey;text-align: center">退出</a></li>'+
                '</ul>'+
                '</li>'+
                '</ul>'
            )
        }
    }

});


$.ajax({

        type: "GET",

        url: "/index.php?g=&m=Index&a=message",

        dataType: "json",

        success: function (data) {

         var html='';

           html=html+ '<div class="md-modal md-effect-1" id="modal-1">'+
            '<div class="md-content">'+
            '<div style="width: 100%;height: 5rem;border-bottom: 1px solid gainsboro;font-size: 2rem;font-weight: 700">'+
            '私信'+
            '<a href="#" class="md-close"><i class=" iconfont icon-cha1" style="float: right;font-size: 2.5rem;"></i></a>'+
            '</div>'+
            '<div class="info-detail">'+
            '<!--foreach循环开始-->'
            
           for(var i=0;i<data.length;i++){
               
             
            html=html+'<p>系统通知 ： <font style="color: #757575">'+data[i].sx_time+'</font></p>'+
            '<ul style="border-bottom: 1px solid gainsboro">'+
            '<li><strong>欧澜芝 Live：</strong>'+data[i].sx_title+'</li>	<!--标题-->'+
            '<li style="line-height: 2rem"><strong>内容：</strong>'+ data[i].sx_content+
            '<li><strong>一切都会在这里找到答案：</strong> <a href="'+data[i].sx_url+'" target="_blank">点击这里查看详情</a></li><!--活动链接-->'+
            '</ul>'
            
            
           }
           
            
            html=html+' </div>'+
            ' <div style="width: 100%;height: 3rem;background: #FAFAFA;border: 1px solid gainsboro"></div>'+
            '</div>'+
            '</div>'+
            '<div class="md-overlay"></div>'


           $("#si-box").append(html);
          
            }
});


    



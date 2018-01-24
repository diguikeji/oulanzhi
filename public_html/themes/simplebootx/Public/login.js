/**
 * Created by Admin on 2018/1/22.
 */



function sixin() {
    layer.open({
        type: 2,
        title: '欢迎页',
        area: ['800px', '500px'],
        content: 'http://layer.layui.com/test/welcome.html'

    })
}



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
                '<li id="info"><a href="#"  onClick="sixin()"><i class="iconfont icon-xinxi1"></i><div  class="dote" ></div></a></li>'+
                '<li class="dropdown" >'+
                '<a href="index.php?g=user&m=center&a=index" class="dropdown-toggle">'+
                '<div class="dropdown-toggle-touxiang" style="width: 27px;height: 27px;border-radius: 50%;"><img src="index.php?g=user&m=public&a=avatar&id='+uid+'"></div></a>'+
                '<ul class="dropdown-menu" style="min-width: 12rem;background: white;margin-left: -100px;margin-top: 20px">'+
                '<div style="position: absolute;width: 13px;height: 13px;background-color: white;z-index: -1;right: 18px;top: -6px;transform:rotate(45deg);-ms-transform:rotate(45deg);-moz-transform:rotate(45deg);-webkit-transform:rotate(45deg);-o-transform:rotate(45deg);"></div>'+
                '<li style="min-width: 100%"><a href="index.php?g=User&m=follow&a=interestFollow" style="font-size: 1.5rem;line-height: 30px;;min-width: 100%;color: grey"><i class="iconfont icon-guanzhu" style="font-size: 1.8rem;float: left;margin-right: 0.8rem"></i>已关注<font style="float: right">'+data.gz+'</font></a></li>'+
                '<li><a href="index.php?g=user&m=collect&a=index"  style="font-size: 1.5rem;line-height: 30px;min-width: 100%;color: grey"><i class="iconfont icon-huaban" style="font-size: 1.8rem;float: left;margin-right: 0.8rem" ></i>采集<font style="float: right">'+data.post+'</font></a></li>'+
                '<li><a href="index.php?g=User&m=love&a=index"  style="font-size: 1.5rem;line-height: 30px;min-width: 100%;color: grey"><i class="iconfont icon-fensi" style="font-size: 1.8rem;float: left;margin-right: 0.8rem"></i>喜欢<font style="float: right">'+data.love+'</font></a></li>'+
                '<li><a href="index.php?g=user&m=profile&a=edit"  style="font-size: 1.5rem;line-height: 30px;min-width: 100%;color: grey;text-align: center">设置</a></li>'+
                '<li><a href="index.php?g=user&m=index&a=logout"  style="font-size: 1.5rem;line-height: 30px;min-width: 100%;color: grey;text-align: center">退出</a></li>'+
                '</ul>'+
                '</li>'+
                '</ul>'
            )
        }
    }

});




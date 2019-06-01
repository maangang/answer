<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link href="static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="static/h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<link href="static/h-ui.admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>秋名山驾校账号注册页面</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value="" />
<div class="header">欢迎注册---秋名山驾校，秋名山驾校欢迎真诚您！</div>
<div class="loginWraper">
  <div id="loginform" class="loginBox">
    <form class="form form-horizontal" onsubmit="return false">
      <input type="hidden" name="_token" value="{{csrf_token()}}"/>
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
        <div class="formControls col-xs-8">
          <input id="usernamea" name="username" type="text" placeholder="请输入2到6位用户名" class="input-text size-L" onblur="names_s()">
        </div>
          <span class="spans" id="namess"></span>
      </div>
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
        <div class="formControls col-xs-8">
          <input id="passworda" name="passworda" type="password" placeholder="请输入8~16位密码" class="input-text size-L" onblur="pwds_s()">
        </div>
        <span class="spans" id="pwdss"></span>
      </div>
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60a;</i></label>
        <div class="formControls col-xs-8">
          <input id="img" name="img" type="file" class="files">
        </div>
      </div>
      <!-- <div class="row cl">
       <div class="formControls col-xs-8 col-xs-offset-3">
          <input class="input-text size-L" type="text" placeholder="验证码" onblur="if(this.value==''){this.value='验证码:'}" onclick="if(this.value=='验证码:'){this.value='';}" value="验证码:" style="width:150px;">
          <img src=""> <a id="kanbuq" href="javascript:;">看不清，换一张</a> </div>
      </div> -->
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
            <font color="#ffffff"><a class="register" href="logins">已注册账号立即登录</a></font>
        </div>
      </div>
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <input name="" type="button" onclick="adds()" class="btn btn-success radius size-L" value="&nbsp;注&nbsp;&nbsp;&nbsp;&nbsp;册&nbsp;">
          <input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
        </div>
      </div>
    </form>
  </div>
</div>
<div class="footer">北京市，亮亮职业驾校有限公司</div>
<script src="jquery-1.11.1.js"></script>
<script>
var namez = /^[\w\u4e00-\u9fa5]{2,6}$/;
function names_s(){
  $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  name = $("#usernamea").val();
  if (name.length == 0) {
    document.getElementById('namess').innerHTML="<font color='red'>用户名不能为空</font>";
    return false;
  }else{
    if (namez.test(name)) {
      $.ajax({
        type: "post",
        url: "{{url('register/name')}}",
        data:{
        "username":name,
        },
        dataType: 'json',
        success: function(msg){
          if (msg != 1) {
            document.getElementById('namess').innerHTML="<font color='green'>用户名可用</font>";
            return true;
          }else{
            document.getElementById('namess').innerHTML="<font color='red'>用户名已注册</font>";
            return false;
          }
        }
      });
    }else{
      document.getElementById('namess').innerHTML="<font color='red'>请输入正确格式的用户名</font>";
      return false;
    }
  }
}
  
function pwds_s(){
  pwd = $("#passworda").val();
  pwdz= /^[\w@\.!#\$%\^\&\*]{8,16}$/;
  if (pwd.length == 0) {
    document.getElementById('pwdss').innerHTML="<font color='red'>密码不能为空</font>";
    return false;
  }else{
    if (pwdz.test(pwd)) {
      document.getElementById('pwdss').innerHTML="<font color='green'>密码格式正确</font>";
      return true;
    }else{
      document.getElementById('pwdss').innerHTML="<font color='red'>请输入正确格式的密码</font>";
      return false;
    }
  }
}

function adds(){
  if (names_s() || pwds_s()) {
    //alert(123);
    $.ajaxSetup({
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    var password = $("#passworda").val();
    var username = $("#usernamea").val();
    var form = new FormData();
    var picture =document.getElementById('img');
    form.append('username',username);
    form.append('password',password);
    form.append('img',picture.files[0]);
    $.ajax({
      type: "POST",
      processData:false,
      contentType: false,
      url: "{{url('register/add')}}",
      data: form,
      dataType: 'json',
      success: function(msg){
        if (msg == 1) {
          alert("恭喜您成为秋名山驾校的一员");
          window.location.href="{{url('logins')}}";
        }else{
          alert("sb,开过车么？");
        }
      }
    });
  }else{
    return false;
  }
}

  
</script>
</body>
</html>
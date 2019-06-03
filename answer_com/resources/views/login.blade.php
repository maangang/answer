<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link href="static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="static/h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<link href="static/h-ui.admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />
<title>秋名山驾校</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value="" />
<div class="header">秋名山驾校，全国的良心驾校</div>
<div class="loginWraper">
  <div id="loginform" class="loginBox">
    <form class="form form-horizontal" onsubmit="return false">
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
        <div class="formControls col-xs-8">
          <input onblur="namess()" id="names" name="username" type="text" placeholder="请输入2到6位用户名" class="input-text size-L">
        </div>
        <span class="spans" id="name_s"></span>
      </div>
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
        <div class="formControls col-xs-8">
          <input onblur="pwdss()" id="password" name="password" type="password" placeholder="请输入8~16位密码" class="input-text size-L">
        </div>
        <span class="spans" id="pwd_s"></span>
      </div>
      <!-- <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <input class="input-text size-L" type="text" placeholder="验证码" onblur="if(this.value==''){this.value='验证码:'}" onclick="if(this.value=='验证码:'){this.value='';}" value="验证码:" style="width:150px;">
          <img src=""> <a id="kanbuq" href="javascript:;">看不清，换一张</a> </div>
      </div> -->
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
            <a class="register" href="register">没有账号立即注册</a>
        </div>
      </div>
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <input name="" type="button" onclick="add()" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
          <input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
        </div>
      </div>
    </form>
  </div>
</div>
<div class="footer">北京市，亮亮职业驾校有限公司</div>
<script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
function namess(){
  usernames = $("#names").val();
  namez = /^[\w\u4e00-\u9fa5]{2,6}$/;
  if(usernames.length == 0 || !namez.test(usernames)) {
    document.getElementById('name_s').innerHTML="<font color='red'>请您输入规范用户名</font>";
    return false;
  }else{
    document.getElementById('name_s').innerHTML="<font color='#00ffff'>√</font>";
    return true;
  }
}

function pwdss(){
  passwords = $("#password").val();
  pwdz= /^[\w@\.!#\$%\^\&\*]{8,16}$/;
  if (passwords.length == 0 || !pwdz.test(passwords)) {
    document.getElementById('pwd_s').innerHTML="<font color='red'>请您输入规范密码</font>";
    return false;
  }else{
    document.getElementById('pwd_s').innerHTML="<font color='#00ffff'>√</font>";
    return true;
  }
}

function add(){
  if (!namess() || !pwdss()) {
    return false;
  }else{
    $.ajaxSetup({
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    var passwords = $("#password").val();
    var usernames = $("#names").val();
    $.ajax({
      type: "POST",

      url: "{{url('login_do')}}",
      data: {
        "password":passwords,
        "username":usernames
      },
      dataType: 'json',
      success: function(msg){
        if (msg == 1) {
          alert("欢迎老司机！");
          window.location.href="{{url('/')}}";
        }else{
          alert("山炮你还没有账号呢！");
          window.location.href="{{url('register')}}";
        }
      }
    });
  }
}
</script>
</body>
</html>
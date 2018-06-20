<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"/www/web/zhu1_51zuopin_com/public_html/../application/admin/view/login/index.html";i:1528958404;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="__STATIC__/__ADMIN__lib/html5shiv.js"></script>
<script type="text/javascript" src="__STATIC__/__ADMIN__lib/respond.min.js"></script>
<![endif]-->
<link href="__STATIC__/__ADMIN__static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="__STATIC__/__ADMIN__static/h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<link href="__STATIC__/__ADMIN__static/h-ui.admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="__STATIC__/__ADMIN__lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="__STATIC__/__ADMIN__lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>后台登录 - H-ui.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value="" />
<div class="header"></div>
<div class="loginWraper">
  <div id="loginform" class="loginBox">
    <form class="form form-horizontal">
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
        <div class="formControls col-xs-8">
          <input id="" name="admin_account" type="text" placeholder="账户" class="input-text size-L">
        </div>
      </div>
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
        <div class="formControls col-xs-8">
          <input id="" name="admin_password" type="password" placeholder="密码" class="input-text size-L">
        </div>
      </div>
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <input class="input-text size-L" type="text" placeholder="验证码" name="code" value="" style="width:150px;">
          <img name="yzm" src="<?php echo captcha_src(); ?>" onclick="this.src='<?php echo captcha_src(); ?>'"> <a id="kanbuq" href="javascript:void(0)" onclick="ghyzm()">看不清，换一张</a> </div>
      </div>
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
        </div>
      </div>
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <input name="" type="button" onclick="Login()" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
          <input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
        </div>
      </div>
    </form>
  </div>
</div>
<div class="footer">Copyright 你的公司名称 by H-ui.admin v3.1</div>
<script type="text/javascript" src="__STATIC__/__ADMIN__lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__STATIC__/__ADMIN__static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="__STATIC__/__ADMIN__lib/layer/2.4/layer.js"></script>
<script>

function Login(){
  var data = {
    'admin_account':$('[name="admin_account"]').val(),
    'admin_password':$('[name="admin_password"]').val(),
    'vcode':$('[name="code"]').val()
  }

  $.ajax({
      url:'<?php echo url('Login/index'); ?>',
      type: 'post',
      data: data,
      dataType: 'json',

      success: function(data){
        if(data.code==1){
          layer.msg(data.message,{icon:1,time:3000,btn:['确定']},function(){
            window.location.href=data.url
          })
        }else{
          layer.msg(data.message,{icon:2,time:1500})
        }
      }
  })
}


function ghyzm(){
  $('img[name="yzm"]').trigger('click');
}

</script>
</body>
</html>
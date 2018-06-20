<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"E:\phpStudy\WWW\items\public/../application/admin\view\admins\add.html";i:1526978817;s:71:"E:\phpStudy\WWW\items\public/../application/admin\view\common\base.html";i:1527234383;}*/ ?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="__STATIC__/__ADMIN__lib/html5shiv.js"></script>
<script type="text/javascript" src="__STATIC__/__ADMIN__lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="__STATIC__/__ADMIN__static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/__ADMIN__static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/__ADMIN__lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/__ADMIN__static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="__STATIC__/__ADMIN__static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="__STATIC__/__ADMIN__lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->


<title>添加管理员 - 管理员管理 - H-ui.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
  <form class="form form-horizontal" id="form-admin-add">
  <div class="row cl">
    <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>管理员昵称：</label>
    <div class="formControls col-xs-8 col-sm-9">
      <input type="text" class="input-text" value="" placeholder="" id="adminName" name="admin_name">
    </div>
  </div>
  <div class="row cl">
    <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>账号：</label>
    <div class="formControls col-xs-8 col-sm-9">
      <input type="text" class="input-text" value="" placeholder="" id="adminName" name="admin_account">
    </div>
  </div>
  <div class="row cl">
    <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>初始密码：</label>
    <div class="formControls col-xs-8 col-sm-9">
      <input type="password" class="input-text" autocomplete="off" value="" placeholder="密码" id="password" name="admin_password">
    </div>
  </div>
  <div class="row cl">
    <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>确认密码：</label>
    <div class="formControls col-xs-8 col-sm-9">
      <input type="password" class="input-text" autocomplete="off"  placeholder="确认新密码" id="password2" name="admin_password2">
    </div>
  </div>
  <div class="row cl">
    <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>性别：</label>
    <div class="formControls col-xs-8 col-sm-9 skin-minimal">
      <div class="radio-box">
        <input name="admin_sex" type="radio" id="sex-1" value="1" checked>
        <label for="sex-1">男</label>
      </div>
      <div class="radio-box">
        <input type="radio" id="sex-2" name="admin_sex" value="2">
        <label for="sex-2">女</label>
      </div>
    </div>
  </div>
  <div class="row cl">
    <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>手机：</label>
    <div class="formControls col-xs-8 col-sm-9">
      <input type="text" class="input-text" value="" placeholder="" id="phone" name="admin_phone">
    </div>
  </div>
  <div class="row cl">
    <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>邮箱：</label>
    <div class="formControls col-xs-8 col-sm-9">
      <input type="text" class="input-text" name="admin_email" id="email">
    </div>
  </div>
  <div class="row cl">
    <label class="form-label col-xs-4 col-sm-3">角色：</label>
    <div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:150px;">
      <select class="select" name="role_id" size="1">
      <?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
        <option value="<?php echo $v['role_id']; ?>"><?php echo $v['role_name']; ?></option>
      <?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
      </span> </div>
  </div>
  <div class="row cl">
    <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
      <input class="btn btn-primary radius" type="button" onclick="admin_add()" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
    </div>
  </div>
  </form>
</article>


<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="__STATIC__/__ADMIN__lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__STATIC__/__ADMIN__lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/__ADMIN__static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="__STATIC__/__ADMIN__static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->


<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="__STATIC__/__VIEWCSS__lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="__STATIC__/__VIEWCSS__lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="__STATIC__/__VIEWCSS__lib/jquery.validation/1.14.0/messages_zh.js"></script> 
<script type="text/javascript">

function admin_add(){
  var data = {
    'admin_name':$('[name="admin_name"]').val(),
    'admin_account':$('[name="admin_account"]').val(),
    'admin_password':$('[name="admin_password"]').val(),
    'admin_password2':$('[name="admin_password2"]').val(),
    'admin_sex':$('[name="admin_sex"]:checked').val(),
    'admin_phone':$('[name="admin_phone"]').val(),
    'admin_email':$('[name="admin_email"]').val(),
    'role_id':$('[name="role_id"]').val()
  }

  $.ajax({
    url:'<?php echo url('Admins/add'); ?>',
    type: 'post',
    data: data,
    dataType: 'json',

    success: function(data){
      if(data.code==1){
        layer.msg(data.message,{icon:1,time:3000,btn:['确定']},function(){
          parent.location.reload()
        })
      }else{
        layer.msg(data.message,{icon:2,time:3000,btn:['确定']})
      }
    },

    error:function(data) {
        console.log(data.message);
    },

  })

}

</script>


</body>
</html>
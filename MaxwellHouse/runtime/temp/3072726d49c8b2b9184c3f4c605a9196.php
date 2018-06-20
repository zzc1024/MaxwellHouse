<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"E:\phpStudy\WWW\items\public/../application/admin\view\roles\add.html";i:1526990107;s:71:"E:\phpStudy\WWW\items\public/../application/admin\view\common\base.html";i:1527234383;}*/ ?>

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


<title>新建网站角色 - 管理员管理 - H-ui.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
  <form class="form form-horizontal" id="form-admin-role-add">
    <div class="row cl">
      <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>角色名称：</label>
      <div class="formControls col-xs-8 col-sm-9">
        <input type="text" class="input-text" value="" placeholder="" id="roleName" name="role_name">
      </div>
    </div>
    <div class="row cl">
      <label class="form-label col-xs-4 col-sm-3">权限：</label>
      <div class="formControls col-xs-8 col-sm-9">
        <dl class="permission-list">
        <?php if(is_array($result) || $result instanceof \think\Collection || $result instanceof \think\Paginator): if( count($result)==0 ) : echo "" ;else: foreach($result as $k=>$v): ?>
          <dt>
            <label><input type="checkbox" value="<?php echo $v['menu_id']; ?>" name="menu_id" id="user-Character-0-0"><?php echo $v['menu_name']; ?></label>
          </dt>
          <dd>
            <dl class="cl permission-list2">
              <dt>
                <label class=""></label>
              </dt>
              <dd>
                <label class="">
                <?php if(is_array($v['next']) || $v['next'] instanceof \think\Collection || $v['next'] instanceof \think\Paginator): if( count($v['next'])==0 ) : echo "" ;else: foreach($v['next'] as $k1=>$vo): ?>
                  <input type="checkbox" value="<?php echo $vo['menu_id']; ?>" name="menu_id" id="user-Character-0-0-0">
                  <?php echo $vo['menu_name']; ?></label>
                <?php endforeach; endif; else: echo "" ;endif; ?>
              </dd>
            </dl>
          </dd>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </dl>
      </div>
    </div>
    <div class="row cl">
      <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
        <button type="button" class="btn btn-success radius" id="admin-role-save" name="admin-role-save" onclick="role_add()"><i class="icon-ok"></i> 确定</button>
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
<script type="text/javascript" src="lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript">



function role_add(){
  var checkID = []; //定义一个空数组

  $("input[name='menu_id']:checked").each(function(i){
             checkID[i] = $(this).val();//把所有被选中的复选框的值存入数组
         });
  var data = {
    'role_name':$('[name="role_name"]').val(),
    'menu_id':checkID
  }

  $.ajax({
    url:'<?php echo url('Roles/add'); ?>',
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
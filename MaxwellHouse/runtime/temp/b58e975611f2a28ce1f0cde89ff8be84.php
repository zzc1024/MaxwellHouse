<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"E:\phpStudy\WWW\items\public/../application/admin\view\menus\edit.html";i:1528891586;s:71:"E:\phpStudy\WWW\items\public/../application/admin\view\common\base.html";i:1527234383;}*/ ?>

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


<title>修改菜单</title>
</head>
<body>
<div class="page-container">
	<form action="" method="post" class="form form-horizontal" id="form-category-add">
		<input type="hidden" name="menu_id" value="<?php echo $res['menu_id']; ?>">
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-3">
						<span class="c-red"></span>
						上级菜单：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<span class="select-box">
						<select class="select" id="sel_Sub" name="menu_pid" onchange="SetSubID(this);">
								<option value="0">最上级菜单</option>
							<?php if($res['menu_pid'] != '0'): if(is_array($result) || $result instanceof \think\Collection || $result instanceof \think\Paginator): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($res['menu_pid'] == $v['menu_id']): ?>
								<option value="<?php echo $v['menu_id']; ?>" selected="selected"><?php echo $v['menu_name']; ?></option>
								<?php else: ?>
								<option value="<?php echo $v['menu_id']; ?>"><?php echo $v['menu_name']; ?></option>
								<?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
						</select>
						</span>
					</div>
					<div class="col-3">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-3">
						<span class="c-red">*</span>
						菜单名称：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" class="input-text" value="<?php echo $res['menu_name']; ?>" placeholder="" id="" name="menu_name">
					</div>
					<div class="col-3">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-3">
						<span class="c-red"></span>
						控制器文件名：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" class="input-text" value="<?php echo $res['controller']; ?>" placeholder="" id="" name="controller">
					</div>
					<div class="col-3">
					</div>
				</div>
				
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-3">
						<span class="c-red"></span>
						视图文件名：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" class="input-text" value="<?php echo $res['action']; ?>" placeholder="" id="" name="action">
					</div>
					<div class="col-3">
					</div>
				</div>
				

		<div class="row cl">
			<div class="col-9 col-offset-3">
				<input onClick="menuadd()" class="btn btn-primary radius" type="button" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</div>


<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="__STATIC__/__ADMIN__lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__STATIC__/__ADMIN__lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/__ADMIN__static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="__STATIC__/__ADMIN__static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->


<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$("#tab-category").Huitab({
		index:0
	});
	$("#form-category-add").validate({
		rules:{
			
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			//$(form).ajaxSubmit();
			var index = parent.layer.getFrameIndex(window.name);
			//parent.$('.btn-refresh').click();
			parent.layer.close(index);
		}
	});
});

function menuadd(){
	var data = {
		'menu_id':$('[name="menu_id"]').val(),
		'menu_pid':$('[name="menu_pid"]').val(),
		'menu_name':$('[name="menu_name"]').val(),
		'controller':$('[name="controller"]').val(),
		'action':$('[name="action"]').val()
	}

	$.ajax({
		url:'<?php echo url('Menus/edit'); ?>',
		type:'post',
		dataType:'json',
		data: data,

		success: function(data){
			if(data.code==1){
				layer.msg(data.message,{icon:1,time:3000,btn:['确定']},function(){
					parent.location.reload();
				});
			}else{
				layer.msg(data.message,{icon:2,time:3000,btn:['确定']});
			}
		}
	})
}

</script>


</body>
</html>
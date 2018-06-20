<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:76:"E:\phpStudy\WWW\items\public_html/../application/admin\view\waters\edit.html";i:1527749845;s:76:"E:\phpStudy\WWW\items\public_html/../application/admin\view\common\base.html";i:1527234383;}*/ ?>

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


<title>添加导航栏</title>
</head>
<body>
<div class="page-container">
	<form class="form form-horizontal" id="form-banner-add">
				<div class="row cl">
				    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>水印名称：</label>
				    <div class="formControls col-xs-8 col-sm-9">
				      <input type="text" class="input-text" value="<?php echo $result['name']; ?>" placeholder="" id="adminName" name="name">
				    </div>
			 	</div>

		        <div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">图片：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="file" class="input-text" value="<?php echo $result['path']; ?>" placeholder="" id="file" name="image">
						<input type="hidden" name="id" value="<?php echo $result['id']; ?>">
					</div>
				</div>

		<div class="row cl">
			<div class="col-9 col-offset-3">
				<input onClick="banneradd()" class="btn btn-primary radius" type="button" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</div>



<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="__STATIC__/__ADMIN__lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__STATIC__/__ADMIN__lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/__ADMIN__static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="__STATIC__/__ADMIN__static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->


<script type="text/javascript" src="__STATIC__/__ADMIN__lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="__STATIC__/__ADMIN__lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="__STATIC__/__ADMIN__lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="__STATIC__/__ADMIN__lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript">

function banneradd(){
	var formData = new FormData($('form')[0]); 

	$.ajax({
		url:'<?php echo url('Waters/water_edit'); ?>',
		type:'post',
		dataType:'json',
		data: formData,
		contentType: false, 
        processData: false, 

		success: function(data){
			if(data.code==1){
				layer.msg(data.message,{icon:1,time:3000,btn:['确定']},function(){
					parent.location.reload()
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
<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:79:"E:\phpStudy\WWW\items\public/../application/admin\view\orders\deliver_info.html";i:1528891381;s:71:"E:\phpStudy\WWW\items\public/../application/admin\view\common\base.html";i:1527234383;}*/ ?>

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


<title>发货信息</title>
</head>
<body>
<div class="page-container">
	<form\ class="form form-horizontal" id="form-category-add">

				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">
						<span class="c-red"></span>
						快递公司：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" class="input-text" value="" placeholder="" id="" name="company">
					</div>
					<div class="col-3">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">
						<span class="c-red">*</span>
						物流单号：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" class="input-text" value="" placeholder="" id="" name="express">
					</div>
					<div class="col-3">
					</div>
				</div>
				
				

		<div class="row cl">
			<div class="col-9 col-offset-2">
				<input onClick="deliver_goods(<?php echo $id; ?>)" class="btn btn-primary radius" type="button" value="&nbsp;&nbsp;发货&nbsp;&nbsp;">
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

	function deliver_goods(id){
		var data = {
				'order_goods_id':id,
				'company':$('[name="company"]').val(),
				'express':$('[name="express"]').val(),
			}
		$.ajax({
			url:'<?php echo url('Orders/deliver_goods'); ?>',
			type:'post',
			dataType:'json',
			data:data,

			success:function(data){
				if(data.code==1){
					layer.msg(data.message,{icon:1,time:1500},function(){
						parent.location.reload();
					});
				}else{
					layer.msg(data.message,{icon:2,time:1000});
				}
			}
		})


	}

</script>


</body>
</html>
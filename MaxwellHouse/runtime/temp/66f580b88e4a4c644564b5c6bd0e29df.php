<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"D:\phpStudy\WWW\items\public/../application/admin\view\orders\index.html";i:1528774751;s:71:"D:\phpStudy\WWW\items\public/../application/admin\view\common\base.html";i:1527234383;}*/ ?>

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


<title>用户列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 用户管理 <span class="c-gray en">&gt;</span> 用户列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c">
		<form action="<?php echo url('Users/search'); ?>" method="post">
			<input type="text" name="search" id="" placeholder="用户名、邮箱或手机" style="width:250px" class="input-text">
			<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜用户</button>
		</form>
	</div><br>
	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr class="text-c">
				<th width="130">订单编号</th>
				<th width="50">用户名</th>
				<th width="50">收货人</th>
				<th width="80">收货电话</th>
				<th width="150">收货地址</th>
				<th width="100">创建时间</th>
				<th width="80">订单状态</th>
				<th width="80">操作</th>
			</tr>
		</thead>
		<tbody>
		<!--thinkPHP5遍历name变量名，id是value值-->
		<?php if(is_array($result) || $result instanceof \think\Collection || $result instanceof \think\Paginator): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
			<tr class="text-c">
				<td><?php echo $v['order_no']; ?></td>
				<td><?php echo $v['user_name']; ?></td>
				<td><?php echo $v['address_name']; ?></td>
				<td><?php echo $v['phone']; ?></td>
				<td><?php echo $v['region']; ?><?php echo $v['address']; ?></td>
				<td><?php echo date("Y-m-d H:i:s",$v['create_time']); ?></td>
				<td><?php echo OrderStatus($v['order_status']); ?></td>
				<td class="td-manage"><a style="text-decoration:none" onClick="user_start(this,id,<?php echo $v['id']; ?>)" href="javascript:;" title="解封"><i class="Hui-iconfont">&#xe603;</i></a></td>
			</tr>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
	<?php echo $result->render(); ?>
</div>


<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="__STATIC__/__ADMIN__lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__STATIC__/__ADMIN__lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/__ADMIN__static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="__STATIC__/__ADMIN__static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->


<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="__STATIC__/__VIEWCSS__lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="__STATIC__/__VIEWCSS__lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="__STATIC__/__VIEWCSS__lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">



/*封号*/
function user_stop(obj,id,y){
	var data = {
		'id':y,
		'status':'0',
	}
	layer.confirm('确认要封号吗？',function(){
		$.ajax({
			type: 'POST',
			url: '<?php echo url('Users/edit_status'); ?>',
			dataType: 'json',
			data: data,

			success: function(data){
				if(data.code == 1){
					layer.msg('已封号!',{icon: 5,time:2000,btn:['确定']},function(){
						location.reload()
					});
				}
			},
			error:function(data) {
				console.log(data.msg);
			},
		});	
		
	});
}

/*解封*/
function user_start(obj,id,y){
	var data = {
		'id':y,
		'status':'1',
	}
	layer.confirm('确认要解封吗？',function(){
		$.ajax({
			type: 'POST',
			url: '<?php echo url('Users/edit_status'); ?>',
			dataType: 'json',
			data: data,

			success: function(data){
				if(data.code == 1){
					layer.msg('已解封!',{icon: 6,time:2000,btn:['确定']},function(){
						location.reload()
					});
				}
			},
			error:function(data) {
				console.log(data.msg);
			},
		});	
		
	});
}



</script>


</body>
</html>
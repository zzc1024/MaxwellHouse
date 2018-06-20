<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:82:"/www/web/zhu1_51zuopin_com/public_html/../application/admin/view/orders/index.html";i:1528958406;s:81:"/www/web/zhu1_51zuopin_com/public_html/../application/admin/view/common/base.html";i:1528958400;}*/ ?>

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


<title>订单列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 会员管理 <span class="c-gray en">&gt;</span> 订单列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c">
		<form action="<?php echo url('Orders/search'); ?>" method="post">
			<input type="text" name="search" id="" placeholder="订单编号" style="width:250px" class="input-text">
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
				<td class="td-manage">
					<?php if($v['order_status'] == '1'): ?>
					<a style="text-decoration:none" onClick="deliver('填写发货信息','<?php echo url('Orders/deliver_info'); ?>?id=<?php echo $v['id']; ?>',800,500)" href="javascript:;" title="发货"><i class="Hui-iconfont">&#xe603;</i></a>
					<?php endif; ?>
					<a title="商品清单" href="javascript:;" onclick="goods('商品清单','<?php echo url('Orders/goods_list'); ?>?id=<?php echo $v['id']; ?>',800,500)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>

				</td>
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

//填写发货信息
function deliver(title,url,w,h){
	layer_show(title,url,w,h);
}

//查看商品清单
function goods(title,url,w,h){
	layer_show(title,url,w,h);
}

/*封号*/
function user_stop(obj,id,y){
	var data = {
		'id':y,
		'status':'3',
	}
	layer.confirm('确认要发货吗？',function(){
		$.ajax({
			type: 'POST',
			url: '<?php echo url('Orders/deliver_goods'); ?>',
			dataType: 'json',
			data: data,

			success: function(data){
				if(data.code == 1){
					layer.msg(data.message,{icon: 5,time:1500,btn:['确定']},function(){
						location.reload()
					});
				}
				else
				{
					layer.msg(data.message,{icon: 2,time:1000});
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
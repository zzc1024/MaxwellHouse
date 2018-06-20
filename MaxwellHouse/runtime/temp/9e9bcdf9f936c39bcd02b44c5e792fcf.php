<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:83:"/www/web/zhu1_51zuopin_com/public_html/../application/admin/view/banners/index.html";i:1528958398;s:81:"/www/web/zhu1_51zuopin_com/public_html/../application/admin/view/common/base.html";i:1528958400;}*/ ?>

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


<title>banner管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
	<span class="c-gray en">&gt;</span>
	banner管理
	<span class="c-gray en">&gt;</span>
	banner列表
	<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="page-container">
	
	<div class="cl pd-5 bg-1 bk-gray mt-20">
		<span class="l">
		<a class="btn btn-primary radius" onclick="system_banner_add('添加banner','<?php echo url('Banners/add'); ?>')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加banner</a>
		</span>
	</div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-hover table-bg table-sort">
			<thead>
				<tr class="text-c">
					<th width="120">ID</th>
					<th >图片</th>
					<th width="120">添加时间</th>
					<th width="120">修改时间</th>
					<th width="100">是否已展示</th>
					<th width="150">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php if(is_array($result) || $result instanceof \think\Collection || $result instanceof \think\Paginator): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
				<tr class="text-c">
					<td><?php echo $v['id']; ?></td>
					<td><img src="<?php echo $v['path']; ?>" alt="" style="width:50%;"></td>
					<th><?php echo $v['create_time']; ?></th>
					<th><?php echo $v['update_time']; ?></th>
					<?php if($v['statu'] == '1'): ?>
					<td class="td-status"><span class="label label-success radius">已展示</span></td>
					<td class="td-manage"><a style="text-decoration:none" onClick="admin_stop(this,'10001',<?php echo $v['id']; ?>)" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a>
					<?php else: ?>
					<td class="td-status"><span class="label label-defaunt radius">已停用</span></td>
					<td class="td-manage"><a style="text-decoration:none" onClick="admin_start(this,id,<?php echo $v['id']; ?>)" href="javascript:;" title="展示"><i class="Hui-iconfont">&#xe603;</i></a>
					<?php endif; ?>
					<a title="编辑"  onclick="system_banner_edit('菜单编辑','<?php echo url('Banners/edit','id='.$v['id']); ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="system_banner_del(<?php echo $v['id']; ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
	</div>
</div>


<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="__STATIC__/__ADMIN__lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__STATIC__/__ADMIN__lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/__ADMIN__static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="__STATIC__/__ADMIN__static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->


<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="__STATIC__/__ADMIN__lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="__STATIC__/__ADMIN__lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="__STATIC__/__ADMIN__lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">

/*系统-栏目-添加*/
function system_banner_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*系统-栏目-编辑*/
function system_banner_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*系统-栏目-删除*/
function system_banner_del(w){
	var data = {
		'id':w,
	}
	layer.confirm('确认要删除吗？',function(){
		$.ajax({
			type: 'POST',
			url: '<?php echo url('Banners/banner_delete'); ?>',
			dataType: 'json',
			data:data,
			success: function(data){
				if(data.code==1){
					layer.msg(data.message,{icon:1,time:3000,btn:['确定']},function(){
						location.reload()
					});
				}else{
					layer.msg(data.message,{icon:2,time:3000,btn:['确定']});
				}
			},
			error:function(data) {
				console.log(data.msg);
			},
		});
	});
}

/*停用*/
function admin_stop(obj,id,y){
	var data = {
		'id':y,
		'statu':'0',
	}
	layer.confirm('确认要停用吗？',function(){
		$.ajax({
			type: 'POST',
			url: '<?php echo url('Banners/banner_statu'); ?>',
			dataType: 'json',
			data: data,

			success: function(data){
				if(data.code == 1){
					layer.msg('已停用!',{icon: 5,time:2000,btn:['确定']},function(){
						location.reload()
					});
				}else{
					layer.msg(data.message,{icon:2,time:1000,btn:['确定']});
				}
			},
			error:function(data) {
				console.log(data.msg);
			},
		});	
		
	});
}

/*启用*/
function admin_start(obj,id,y){
	var data = {
		'id':y,
		'statu':1,
	}
	layer.confirm('确认要展示吗？',function(){
		$.ajax({
			type: 'POST',
			url: '<?php echo url('Banners/banner_statu'); ?>',
			dataType: 'json',
			data: data,

			success: function(data){
				if(data.code == 1){
					layer.msg('已展示!',{icon: 6,time:2000,btn:['确定']},function(){
						location.reload()
					});
				}else{
					layer.msg(data.message,{icon:2,time:1000,btn:['确定']});
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
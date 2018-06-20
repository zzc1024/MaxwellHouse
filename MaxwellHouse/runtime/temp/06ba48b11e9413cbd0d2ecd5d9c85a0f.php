<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:71:"D:\phpStudy\WWW\items\public/../application/admin\view\menus\index.html";i:1527506813;s:71:"D:\phpStudy\WWW\items\public/../application/admin\view\common\base.html";i:1527234383;}*/ ?>

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


<title>菜单管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
	<span class="c-gray en">&gt;</span>
	系统管理
	<span class="c-gray en">&gt;</span>
	菜单管理
	<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="page-container">
	<div class="text-c">
		<form action="<?php echo url('Menus/product_search'); ?>" method="post">
			<input type="text" name="search" id="" placeholder=" 菜单名称、id" style="width:250px" class="input-text">
			<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
		</form>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20">
		<span class="l">
		<a class="btn btn-primary radius" onclick="system_category_add('添加资讯','<?php echo url('Menus/add'); ?>')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加菜单</a>
		</span>
	</div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-hover table-bg table-sort">
			<thead>
				<tr class="text-c">
					<th width="120">ID</th>
					<th width="120">上级菜单ID</th>
					<th >菜单名称</th>
					<th width="120">状态</th>
					<th width="150">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php if(is_array($result) || $result instanceof \think\Collection || $result instanceof \think\Paginator): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
				<tr class="text-c">
					<td><?php echo $v['menu_id']; ?></td>
					<td><?php echo $v['menu_pid']; ?></td>
					<td align="center"><?php echo $v['menu_name']; ?></td>
					<?php if($v['statu'] == '1'): ?>
					<td class="td-status"><span class="label label-success radius">已启用</span></td>
					<td class="td-manage"><a style="text-decoration:none" onClick="admin_stop(this,'10001',<?php echo $v['menu_id']; ?>)" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a>
					<?php else: ?>
					<td class="td-status"><span class="label label-defaunt radius">已停用</span></td>
					<td class="td-manage"><a style="text-decoration:none" onClick="admin_start(this,id,<?php echo $v['menu_id']; ?>)" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe603;</i></a>
					<?php endif; ?> 
					<a title="编辑"  onclick="system_category_edit('菜单编辑','<?php echo url('Menus/edit','menu_id='.$v['menu_id']); ?>','1','700','480')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="system_category_del(<?php echo $v['menu_id']; ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
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
$('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"aoColumnDefs": [
	  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
	  {"orderable":false,"aTargets":[0,4]}// 制定列不参与排序
	]
});
/*系统-菜单-添加*/
function system_category_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*系统-菜单-编辑*/
function system_category_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*系统-菜单-删除*/
function system_category_del(w){
	var data = {
		'menu_id':w,
	}
	layer.confirm('确认要删除吗？',function(){
		$.ajax({
			type: 'POST',
			url: '<?php echo url('Menus/delete'); ?>',
			dataType: 'json',
			data:data,
			success: function(data){
		      if(data.code==1){
		        layer.msg(data.message,{icon:1,time:3000,btn:['确定']},function(){
		          location.reload()
		        })
		      }else{
		        layer.msg(data.message,{icon:2,time:3000,btn:['确定']})
		      }
		    },
		});
	});
}


/*停用*/
function admin_stop(obj,id,y){
	var data = {
		'menu_id':y,
		'statu':'0',
	}
	layer.confirm('确认要停用吗？',function(){
		$.ajax({
			type: 'POST',
			url: '<?php echo url('Menus/index'); ?>',
			dataType: 'json',
			data: data,

			success: function(data){
				if(data.code == 1){
					layer.msg('已停用!',{icon: 5,time:2000,btn:['确定']},function(){
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

/*启用*/
function admin_start(obj,id,y){
	var data = {
		'menu_id':y,
		'statu':'1',
	}
	layer.confirm('确认要启用吗？',function(){
		$.ajax({
			type: 'POST',
			url: '<?php echo url('Menus/index'); ?>',
			dataType: 'json',
			data: data,

			success: function(data){
				if(data.code == 1){
					layer.msg('已启用!',{icon: 6,time:2000,btn:['确定']},function(){
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
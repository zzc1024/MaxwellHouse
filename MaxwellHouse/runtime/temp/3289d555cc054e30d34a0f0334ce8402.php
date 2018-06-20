<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:82:"/www/web/zhu1_51zuopin_com/public_html/../application/admin/view/admins/index.html";i:1528958395;s:81:"/www/web/zhu1_51zuopin_com/public_html/../application/admin/view/common/base.html";i:1528958400;}*/ ?>

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


<title>管理员列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 管理员管理 <span class="c-gray en">&gt;</span> 管理员列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c">
		<form action="<?php echo url('Admins/product_search'); ?>" method="post">
			<input type="text" name="search" id="" placeholder="管理员名称、邮箱或手机" style="width:250px" class="input-text">
			<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜用户</button>
		</form>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="admin_dels()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a href="javascript:;" onclick="admin_add('添加管理员','<?php echo url('admin/admins/add'); ?>','800','500')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加管理员</a></span>  </div>
	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="40">ID</th>
				<th width="150">登录名</th>
				<th width="90">手机</th>
				<th width="150">邮箱</th>
				<th>角色</th>
				<th width="130">加入时间</th>
				<th width="100">是否已启用</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
		<?php if(is_array($result) || $result instanceof \think\Collection || $result instanceof \think\Paginator): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		<!--thinkPHP5遍历name变量名，id是value值-->
			<tr class="text-c">
				<td><input type="checkbox" value="<?php echo $vo['admin_id']; ?>" name="id"></td>
				<td><?php echo $vo['admin_id']; ?></td>
				<td><?php echo $vo['admin_name']; ?></td>
				<td><?php echo $vo['admin_phone']; ?></td>
				<td><?php echo $vo['admin_email']; ?></td>
				<td><?php echo $vo['roleadmin']; ?></td>
				<td><?php echo $vo['create_time']; ?></td>
				<?php if($vo['statu'] == '1'): ?>
				<td class="td-status"><span class="label label-success radius">已启用</span></td>
				<td class="td-manage"><a style="text-decoration:none" onClick="admin_stop(this,'10001',<?php echo $vo['admin_id']; ?>)" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a>
				<?php else: ?>
				<td class="td-status"><span class="label label-defaunt radius">已停用</span></td>
				<td class="td-manage"><a style="text-decoration:none" onClick="admin_start(this,id,<?php echo $vo['admin_id']; ?>)" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe603;</i></a>
				<?php endif; ?>	
				 <a title="编辑" href="javascript:;" onclick="admin_edit('管理员编辑','<?php echo url('Admins/edit','admin_id='.$vo['admin_id']); ?>','1','800','500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="admin_del(<?php echo $vo['admin_id']; ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
			</tr>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
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
/*
	参数解释：
	title	标题
	url		请求的url
	id		需要操作的数据id
	w		弹出层宽度（缺省调默认值）
	h		弹出层高度（缺省调默认值）
*/
/*管理员-增加*/
function admin_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*管理员-删除*/
function admin_del(id){
	var data = {
		'admin_id': id,
	}
	layer.confirm('确认要删除吗？',function(){
		$.ajax({
		    url:'<?php echo url('Admins/delete'); ?>',
		    type: 'post',
		    data: data,
		    dataType: 'json',

		    success: function(data){
		      if(data.code==1){
		        layer.msg(data.message,{icon:1,time:3000,btn:['确定']},function(){
		          location.reload()
		        })
		      }else{
		        layer.msg(data.message,{icon:2,time:3000,btn:['确定']})
		      }
		    },

		    error:function(data) {
		        console.log(data.message);
		    },

  		})
	})
}

/*管理员-编辑*/
function admin_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*停用*/
function admin_stop(obj,id,y){
	var data = {
		'admin_id':y,
		'statu':'0',
	}
	layer.confirm('确认要停用吗？',function(){
		$.ajax({
			type: 'POST',
			url: '<?php echo url('Admins/index'); ?>',
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
		'admin_id':y,
		'statu':'1',
	}
	layer.confirm('确认要启用吗？',function(){
		$.ajax({
			type: 'POST',
			url: '<?php echo url('Admins/index'); ?>',
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

function admin_dels()
{
  var checkID = []; //定义一个空数组

  $("input[name='id']:checked").each(function(i){
        checkID[i] = $(this).val();//把所有被选中的复选框的值存入数组
  });
  // console.log(checkID)
  if(checkID!=''){
	  	layer.confirm('确认要删除吗？',function(){
			$.ajax({
			    url:'<?php echo url('Admins/admin_deletes'); ?>',
			    type: 'post',
			    data: {'checkID':checkID},  //data的类型只支持对象和字符串类型，要将数组转成对象
			    dataType: 'json',

			    success: function(data){
			      if(data.code==1){
			        layer.msg(data.message,{icon:1,time:3000,btn:['确定']},function(){
			          location.reload()
			        })
			      }else{
			        layer.msg(data.message,{icon:2,time:3000,btn:['确定']})
			      }
			    },

			    error:function(data) {
			        console.log(data.message);
			    },

	  		})
		})
	}
}
</script>


</body>
</html>
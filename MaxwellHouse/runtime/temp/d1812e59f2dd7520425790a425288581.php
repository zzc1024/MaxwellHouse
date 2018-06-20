<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:84:"/www/web/zhu1_51zuopin_com/public_html/../application/admin/view/products/index.html";i:1528958407;s:81:"/www/web/zhu1_51zuopin_com/public_html/../application/admin/view/common/base.html";i:1528958400;}*/ ?>

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


<title>建材列表</title>
<link rel="stylesheet" href="__STATIC__/__ADMIN__lib/zTree/v3/css/zTreeStyle/zTreeStyle.css" type="text/css">
</head>
<body class="pos-r">
<div class="pos-a" style="width:200px;left:0;top:0; bottom:0; height:100%; border-right:1px solid #e5e5e5; background-color:#f5f5f5; overflow:auto;">
	<ul id="treeDemo" class="ztree"></ul>
</div>
<div style="margin-left:200px;">
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 产品管理 <span class="c-gray en">&gt;</span> 产品列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="page-container">
		<div class="text-c">
			<form action="<?php echo url('Products/product_search'); ?>" method="post">
			<input type="text" name="search" id="" placeholder=" 商品名称或商品编号" style="width:250px" class="input-text">
			<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜产品</button>
			</form>
		</div>
		<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="product_dels()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" onclick="product_add('添加产品','/admin/Products/add')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加产品</a></span>  </div>
		<div class="mt-20">
			<table class="table table-border table-bordered table-bg table-hover table-sort">
				<thead>
					<tr class="text-c">
						<th width="20"><input name="" type="checkbox" value=""></th>
						<th width="40">商品编号</th>
						<th width="60">缩略图</th>
						<th width="60">产品名称</th>
						<th width="60">系列</th>
						<th width="60">添加时间</th>
						<th width="60">更新时间</th>
						<th width="60">发布状态</th>
						<th width="100">操作</th>
					</tr>
				</thead>
				<tbody>
					<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): if( count($data)==0 ) : echo "" ;else: foreach($data as $key=>$vo): ?>
					<tr class="text-c va-m">
						<td><input name="id" type="checkbox" value="<?php echo $vo['id']; ?>"></td>
						<td><?php echo $vo['number']; ?></td>
						<td><img width="60" class="product-thumb" src="<?php echo $vo['thumbnail']; ?>"></td>
						<td><?php echo $vo['name']; ?></td>
						<td><?php echo $vo['series']; ?></td>
						<td><?php echo $vo['create_time']; ?></td>
						<td><?php echo $vo['update_time']; ?></td>
						<?php if($vo['statu'] == '1'): ?>
						<td class="td-status"><span class="label label-success radius">已上架</span></td>
						<td class="td-manage"><a style="text-decoration:none" onClick="admin_stop(this,'10001',<?php echo $vo['id']; ?>)" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe631;</i></a>
						<?php else: ?>
						<td class="td-status"><span class="label label-defaunt radius">已下架</span></td>
						<td class="td-manage"><a style="text-decoration:none" onClick="admin_start(this,id,<?php echo $vo['id']; ?>)" href="javascript:;" title="上架"><i class="Hui-iconfont">&#xe603;</i></a>
						<?php endif; ?>	
						 <a title="编辑" href="javascript:;" onclick="product_edit('商品编辑','<?php echo url('Products/edit','id='.$vo['id']); ?>','1','800','500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="product_del(<?php echo $vo['id']; ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
					</tr>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
				<?php echo $data->render(); ?>
		</div>
	</div>
</div>


<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="__STATIC__/__ADMIN__lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__STATIC__/__ADMIN__lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/__ADMIN__static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="__STATIC__/__ADMIN__static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->


<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="__STATIC__/__ADMIN__lib/zTree/v3/js/jquery.ztree.all-3.5.min.js"></script>
<script type="text/javascript" src="__STATIC__/__ADMIN__lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="__STATIC__/__ADMIN__lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="__STATIC__/__ADMIN__lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
var zNodes ;
	$.ajax({
		url:'<?php echo url('Classifys/classify_ajax'); ?>',
		type: 'get',
		dataType:'json',
		async:false,

		success:function(data){
			zNodes = data;
		}
	});

var setting = {
	view: {
		dblClickExpand: false,
		showLine: false,
		selectedMulti: false
	},
	data: {
		simpleData: {
			enable:true,
			idKey: "classify_id",
			pIdKey: "classify_pid",
			rootPId: ""
		}
	},
	callback: {
		beforeClick: function(treeId, treeNode) {
			if(treeNode.classify_pid !=""){
				var id=treeNode.classify_id;
			
				location.href="<?php echo url('Products/product_list'); ?>?id="+id+"";
				
			}

		}
	}
};


		
var code;
		
function showCode(str) {
	if (!code) code = $("#code");
	code.empty();
	code.append("<li>"+str+"</li>");
}
		
$(document).ready(function(){
	var t = $("#treeDemo");
	t = $.fn.zTree.init(t, setting, zNodes);
	demoIframe = $("#testIframe");
	//demoIframe.on("load", loadReady);
	var zTree = $.fn.zTree.getZTreeObj("tree");
	//zTree.selectNode(zTree.getNodeByParam("id",'11'));
});

// $('.table-sort').dataTable({
// 	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
// 	"bStateSave": true,//状态保存
// 	"aoColumnDefs": [
// 	  {"orderable":false,"aTargets":[0,7]}// 制定列不参与排序
// 	]
// });
/*产品-添加*/
function product_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*产品-查看*/
function product_show(title,url,id){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*产品-审核*/
function product_shenhe(obj,id){
	layer.confirm('审核文章？', {
		btn: ['通过','不通过'], 
		shade: false
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="product_start(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
		$(obj).remove();
		layer.msg('已发布', {icon:6,time:1000});
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="product_shenqing(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-danger radius">未通过</span>');
		$(obj).remove();
    	layer.msg('未通过', {icon:5,time:1000});
	});	
}
/*停用*/
function admin_stop(obj,id,y){
	var data = {
		'id':y,
		'statu':'0',
	}
	layer.confirm('确认要下架吗？',function(){
		$.ajax({
			type: 'POST',
			url: '<?php echo url('Products/product_statu'); ?>',
			dataType: 'json',
			data: data,

			success: function(data){
				if(data.code == 1){
					layer.msg('已下架!',{icon: 5,time:2000,btn:['确定']},function(){
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
		'id':y,
		'statu':'1',
	}
	layer.confirm('确认要上架吗？',function(){
		$.ajax({
			type: 'POST',
			url: '<?php echo url('Products/product_statu'); ?>',
			dataType: 'json',
			data: data,

			success: function(data){
				if(data.code == 1){
					layer.msg('已上架!',{icon: 6,time:2000,btn:['确定']},function(){
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

/*产品-申请上线*/
function product_shenqing(obj,id){
	$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">待审核</span>');
	$(obj).parents("tr").find(".td-manage").html("");
	layer.msg('已提交申请，耐心等待审核!', {icon: 1,time:2000});
}

/*产品-编辑*/
function product_edit(title,url,id){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}

/*产品-删除*/
function product_del(id){
	var data = {
		'id': id,
	}
	layer.confirm('确认要删除吗？',function(){
		$.ajax({
		    url:'<?php echo url('Products/product_delete'); ?>',
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

function product_dels()
{
  var checkID = []; //定义一个空数组

  $("input[name='id']:checked").each(function(i){
        checkID[i] = $(this).val();//把所有被选中的复选框的值存入数组
  });
  // console.log(checkID)
  if(checkID!=''){
	    layer.confirm('确认要删除吗？',function(){
			$.ajax({
			    url:'<?php echo url('Products/product_deletes'); ?>',
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
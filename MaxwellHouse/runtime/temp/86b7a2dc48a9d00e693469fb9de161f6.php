<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"E:\phpStudy\WWW\items\public/../application/admin\view\cheshi\index.html";i:1527262618;}*/ ?>
<!doctype html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>基于Bootstrup 3可预览的HTML5文件上传插件|DEMO_jQuery之家-自由分享jQuery、html5、css3的插件库</title>
	<!-- 引入样式文件 -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="__STATIC__/file/css/default.css">
    <link href="__STATIC__/file/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />	
	<!--[if IE]>
		<script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body>
	
	<div class="htmleaf-container">
		
		<form enctype="multipart/form-data">
			<div class="form-group">
				<!-- 初始化插件 -->
				<input id="file-0" class="file" type="file" multiple>
			</div>
		</form>
		
	</div>
		<div>
			<input type="button" onclick="add()" value="提交">
		</div>
			<!-- 把原来这个替换jq库替换掉http://libs.useso.com/js/jquery/2.1.1/jquery.min.js -->
	<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="__STATIC__/file/js/fileinput.js" type="text/javascript"></script>
    <script src="__STATIC__/file/js/fileinput_locale_zh.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>
    <script>
	    var id=2;

//图片上传
initFileInput("file-0","<?php echo url('Cheshi/add'); ?>");

//初始化fileinput控件
function initFileInput(ctrlName,uploadUrl){
	var control = $('#' + ctrlName);
	control.fileinput({
		language: 'zh',//设置语言
		uploadUrl: uploadUrl,//上传的地址
		allowedFileExtensions: ['jpg','png','gif','jpeg'],//接收图片后缀
		showUpload: true,//是否显示上传按钮
		showCaption: true,//是否显示标题
		showPreview: true,//是否显示文件的预览图
		showRemove: true,//是否显示删除/清空按钮
		browseClass: "btn btn-primary",//按键样式
		previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
		maxFileCount: 5,//表示允许同时上传的最大文件个数
		dropZoneEnabled: true,//是否显示拖拽区域
		

		initialPreviewConfig: {
			caption: ctrlName,
			width: '120px',
			url: uploadUrl,
			key: 101,
			success: function(){
				
			}
		}

	});
}


//监听事件


$("#file-0").on("fileuploaded",function(event,data,previewId,index){
		//index是调用次数，第一次上传图片是0，第二次上传图片是1
		//data.response是返回的图片路径
		if(index == 0){
			path0 = data.response;
		}else if(index == 1){
			path1 = data.response;
		}else if(index == 2){
			path2 = data.response;
		}else if(index == 3){
			path3 = data.response;
		}else if(index == 4){
			path4 = data.response;
		}
});


function add(){
	alert(path0);
	alert(path1);
	alert(path2);
	alert(path3);
	alert(path4);
}



		</script>
</body>
</html>
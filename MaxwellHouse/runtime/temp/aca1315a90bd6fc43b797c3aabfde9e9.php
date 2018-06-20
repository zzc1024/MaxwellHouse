<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"D:\php\PHPTutorial\WWW\items\public/../application/index\view\users\order.html";i:1528878340;s:78:"D:\php\PHPTutorial\WWW\items\public/../application/index\view\common\base.html";i:1528888923;s:82:"D:\php\PHPTutorial\WWW\items\public/../application/index\view\Users\left_base.html";i:1528893048;}*/ ?>
<!DOCTYPE html>
<html>


	<head>
		<meta charset="UTF-8">
		<title>订单列表</title>
		<link rel="stylesheet" href="__STATIC__/__INDEX__css/common.css" />
		<link rel="stylesheet" href="__STATIC__/__INDEX__css/order.css" />
	</head>


	<body>
		<!--头部-->
		<div class="header">
			<!--最上边的灰色导航-->
			<div class="top">
				<div class="container">
					<!--灰色部分左边文字-->
					<span>亲，欢迎来到Maxwell House咖啡商城!</span>
					<!--灰色部分右边a标签-->
					<div>
						<?php if($user_id == '0'): ?>
						<a href="<?php echo url('Login/index'); ?>">请登录</a>
						<a href="<?php echo url('Login/register'); ?>">快速注册</a>
						<?php else: ?>
						<a href="<?php echo url('Users/index'); ?>"><?php echo $user_name; ?></a>
						<a href="<?php echo url('Users/index'); ?>">会员中心</a>
						<a href="<?php echo url('Login/logout'); ?>">退出登录</a>
						<?php endif; ?>
						<a href="##">帮助中心</a>
					</div>
				</div>
			</div>
			<!--头部中间部分-->
			<div class="middle">
				<div>
					<!--logo-->
					<a href="index.html"><img src="\static\img\logo.png" /></a>
					<!--搜索框-->
					<div class="search">
						<form action="<?php echo url('Shop/shop_list'); ?>" method="get">
							<input type="text" name="contents" />
							<input type="submit" value="搜索" />
						</form>
					</div>

					<!--购物车-->
					<div class="shop_carts">
						<a href="<?php echo url('Proess/sp_base'); ?>?proess=4"><img src="\static\img\shop(index).png" /><span>我的购物车</span></a>
						<a href="<?php echo url('Proess/sp_base'); ?>?proess=4" class="num"><?php echo $shopcart_count; ?></a>
					</div>
					<!--搜索框下面的文字-->

				</div>
			</div>
			<!--头部导航部分-->
			<div class="nav">
				<div>
					<div class="left">
						<a href="##"> 全部商品分类 <img src="\static\img\jiankuohao.png" alt="" /></a>
						<ul class="clearfix">
							<?php if(is_array($classify) || $classify instanceof \think\Collection || $classify instanceof \think\Paginator): if( count($classify)==0 ) : echo "" ;else: foreach($classify as $k=>$v): ?>
							<li>
								<h2><?php echo $v['name']; ?></h2>
								<ul>
									<?php if(is_array($v['next']) || $v['next'] instanceof \think\Collection || $v['next'] instanceof \think\Paginator): $i = 0; $__LIST__ = $v['next'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
									<li>
										<a href="<?php echo url('Shop/shop_list'); ?>?classifyid=<?php echo $vo['classify_id']; ?>"><?php echo $vo['name']; ?></a>
									</li>
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</ul>
							</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
					<ul>
						<li>
							<a href="<?php echo url('Index/index'); ?>">首页</a>
						</li>
						<?php if(is_array($series) || $series instanceof \think\Collection || $series instanceof \think\Paginator): $i = 0; $__LIST__ = $series;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
						<li>
							<a href="<?php echo url('Shop/shop_list'); ?>?seriesid=<?php echo $v['id']; ?>"><?php echo $v['name']; ?></a>
						</li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</div>
		</div>

		<!--第二部分-->

		<!--第二部分-->
		<div class="content">
						

				<!--主要内容的小导航-->
				<p>
					<a href="<?php echo url('Index/index'); ?>">麦斯威尔</a> >
					<a href="#">会员中心</a>
				</p>
				<!--个人中心-->
				<ul class="personal">
					<li>
						<h3>个人中心</h3>
						<ul>
							<li>
								<a href="<?php echo url('Users/index'); ?>">我的用户中心</a>
							</li>
							<li>
								<a href="<?php echo url('Proess/sp_base'); ?>?proess=4">我的购物车</a>
							</li>
							<li>
								<a href="<?php echo url('Users/order'); ?>">我的订单</a>
							</li>
						</ul>
					</li>
					<li>
						<h3>我的账户</h3>
						<ul>
							<li>
								<a href="<?php echo url('Users/address'); ?>">地址管理</a>
							</li>
							<li>
								<a href="<?php echo url('Login/retrieve'); ?>">修改密码</a>
							</li>
						</ul>
					</li>
				</ul>


			<!--所有订单导航-->
			<div>
				<!--小导航-->
				<ul class="order_nav">
					<?php switch($ordsta): case "99": ?>
					<li class="current">
						<a href="<?php echo url('Users/order_search'); ?>">订单列表</a>
					</li>
					<li>
						<a href="<?php echo url('Users/order_search'); ?>?ordsta=0">待付款</a>
					</li>
					<li>
						<a href="<?php echo url('Users/order_search'); ?>?ordsta=1">待发货</a>
					</li>
					<li>
						<a href="<?php echo url('Users/order_search'); ?>?ordsta=2">待收货</a>
					</li>
					<li>
						<a href="<?php echo url('Users/order_search'); ?>?ordsta=3">待评价</a>
					</li>
					<li>
						<a href="<?php echo url('Users/order_search'); ?>?ordsta=4">已完成</a>
					</li>
					<?php break; case "0": ?>
					<li>
						<a href="<?php echo url('Users/order_search'); ?>">订单列表</a>
					</li>
					<li class="current">
						<a href="<?php echo url('Users/order_search'); ?>?ordsta=0">待付款</a>
					</li>
					<li>
						<a href="<?php echo url('Users/order_search'); ?>?ordsta=1">待发货</a>
					</li>
					<li>
						<a href="<?php echo url('Users/order_search'); ?>?ordsta=2">待收货</a>
					</li>
					<li>
						<a href="<?php echo url('Users/order_search'); ?>?ordsta=3">待评价</a>
					</li>
					<li>
						<a href="<?php echo url('Users/order_search'); ?>?ordsta=4">已完成</a>
					</li>
					<?php break; case "1": ?>
					<li>
						<a href="<?php echo url('Users/order_search'); ?>">订单列表</a>
					</li>
					<li>
						<a href="<?php echo url('Users/order_search'); ?>?ordsta=0">待付款</a>
					</li>
					<li class="current">
						<a href="<?php echo url('Users/order_search'); ?>?ordsta=1">待发货</a>
					</li>
					<li>
						<a href="<?php echo url('Users/order_search'); ?>?ordsta=2">待收货</a>
					</li>
					<li>
						<a href="<?php echo url('Users/order_search'); ?>?ordsta=3">待评价</a>
					</li>
					<li>
						<a href="<?php echo url('Users/order_search'); ?>?ordsta=4">已完成</a>
					</li>
					<?php break; case "2": ?>
					<li>
						<a href="<?php echo url('Users/order_search'); ?>">订单列表</a>
					</li>
					<li>
						<a href="<?php echo url('Users/order_search'); ?>?ordsta=0">待付款</a>
					</li>
					<li>
						<a href="<?php echo url('Users/order_search'); ?>?ordsta=1">待发货</a>
					</li>
					<li class="current">
						<a href="<?php echo url('Users/order_search'); ?>?ordsta=2">待收货</a>
					</li>
					<li>
						<a href="<?php echo url('Users/order_search'); ?>?ordsta=3">待评价</a>
					</li>
					<li>
						<a href="<?php echo url('Users/order_search'); ?>?ordsta=4">已完成</a>
					</li>
					<?php break; case "3": ?>
					<li>
						<a href="<?php echo url('Users/order_search'); ?>">订单列表</a>
					</li>
					<li>
						<a href="<?php echo url('Users/order_search'); ?>?ordsta=0">待付款</a>
					</li>
					<li>
						<a href="<?php echo url('Users/order_search'); ?>?ordsta=1">待发货</a>
					</li>
					<li>
						<a href="<?php echo url('Users/order_search'); ?>?ordsta=2">待收货</a>
					</li>
					<li class="current">
						<a href="<?php echo url('Users/order_search'); ?>?ordsta=3">待评价</a>
					</li>
					<li>
						<a href="<?php echo url('Users/order_search'); ?>?ordsta=4">已完成</a>
					</li>
					<?php break; case "4": ?>
					<li>
						<a href="<?php echo url('Users/order_search'); ?>">订单列表</a>
					</li>
					<li>
						<a href="<?php echo url('Users/order_search'); ?>?ordsta=0">待付款</a>
					</li>
					<li>
						<a href="<?php echo url('Users/order_search'); ?>?ordsta=1">待发货</a>
					</li>
					<li>
						<a href="<?php echo url('Users/order_search'); ?>?ordsta=2">待收货</a>
					</li>
					<li>
						<a href="<?php echo url('Users/order_search'); ?>?ordsta=3">待评价</a>
					</li>
					<li class="current">
						<a href="<?php echo url('Users/order_search'); ?>?ordsta=4">已完成</a>
					</li>
					<?php break; endswitch; ?>
				</ul>

				<!--订单号-->
				<form action="<?php echo url('Users/order_search'); ?>" method="post">
					<div>
						<label for="name">订单号:</label>
						<input type="text" id="name" name="order_no" />
					</div>
					<div>
						<label for="time">下单时间:</label>
						<input type="text" id="time1" name="time1" placeholder="搜索格式：20180601" />-<input type="text" id="time2" name="time2" placeholder="搜索格式：20180629" />
					</div>
					<div>
						<input type="submit" value="搜索" style="text-indent:0px;width: 35px;height: 20px;" />
					</div>
				</form>

				<!--所有订单-->
				<div class="hide">

					<table cellspacing="0" cellpadding="0">
						<thead>
							<tr>
								<th>订单号</th>
								<th>商品</th>
								<th>订单状态</th>
								<th>订单时间</th>
								<th>操作</th>
							</tr>
						</thead>
						<tbody>
							<?php if(is_array($order_goods) || $order_goods instanceof \think\Collection || $order_goods instanceof \think\Paginator): $i = 0; $__LIST__ = $order_goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
							<tr>
								<td>
									<div style=" height: auto;line-height: 21px;  word-wrap:break-word;  word-break:break-all;  overflow: hidden;padding: 5px;"><?php echo $v['order_no']; ?></div>
								</td>
								<td>
									<a href="<?php echo url('Users/order_detail'); ?>?ordid=<?php echo $v['order_goods_id']; ?>" class="pic"><img src="<?php echo $v['product_path']; ?>" alt="" style="width: 70px;height: 70px;" /></a>
									<p>
										<a href="<?php echo url('Users/order_detail'); ?>?ordid=<?php echo $v['order_goods_id']; ?>"><?php echo $v['product_name']; ?></a>
									</p>
								</td>
									<td><?php switch($v['order_status']): case "0": ?>待付款 </td><td><?php echo $v['create_time']; ?></td><td><a href="<?php echo url('Users/order_detail'); ?>?ordid=<?php echo $v['order_goods_id']; ?>">订单详情></a><br /><a href="<?php echo url('Proess/sp_base'); ?>?proess=2&ordid=<?php echo $v['order_goods_id']; ?>">去付款</a><?php break; case "1": ?>已付款 </td><td><?php echo $v['create_time']; ?></td><td><a href="<?php echo url('Users/order_detail'); ?>?ordid=<?php echo $v['order_goods_id']; ?>">订单详情></a><br /><a href="##">提醒发货</a><?php break; case "2": ?>已发货 </td><td><?php echo $v['create_time']; ?></td><td><a href="<?php echo url('Users/order_detail'); ?>?ordid=<?php echo $v['order_goods_id']; ?>">订单详情></a><br><a href="<?php echo url('Users/order_detail'); ?>?ordid=<?php echo $v['order_goods_id']; ?>">查看物流</a><a href="javascript:void(0)" onclick="confirms(<?php echo $v['order_goods_id']; ?>)">确认收货</a><?php break; case "3": ?>待评价 </td><td><?php echo $v['create_time']; ?></td><td><a href="<?php echo url('Users/order_detail'); ?>?ordid=<?php echo $v['order_goods_id']; ?>">订单详情></a><a href="<?php echo url('Users/comment'); ?>?ordid=<?php echo $v['order_goods_id']; ?>">评价</a><?php break; case "4": ?>完成 </td><td><?php echo $v['create_time']; ?></td><td><a href="<?php echo url('Users/order_detail'); ?>?ordid=<?php echo $v['order_goods_id']; ?>">订单详情></a><a href="##"></a><?php break; case "5": ?>申请退款中 </td><td><?php echo $v['create_time']; ?></td><td><a href="<?php echo url('Users/order_detail'); ?>?ordid=<?php echo $v['order_goods_id']; ?>">订单详情></a><a href="##">取消申请</a><?php break; case "6": ?>退货中 </td><td><?php echo $v['create_time']; ?></td><td><a href="<?php echo url('Users/order_detail'); ?>?ordid=<?php echo $v['order_goods_id']; ?>">订单详情></a><a href="##">查看物流</a><?php break; case "7": ?>已退款 </td><td><?php echo $v['create_time']; ?></td><td><a href="<?php echo url('Users/order_detail'); ?>?ordid=<?php echo $v['order_goods_id']; ?>">订单详情></a><a href="##"></a><?php break; case "8": ?>关闭 </td><td><?php echo $v['create_time']; ?></td><td><a href="<?php echo url('Users/order_detail'); ?>?ordid=<?php echo $v['order_goods_id']; ?>">订单详情></a><a href="##"></a><?php break; endswitch; ?>

								</td>
							</tr>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody>
					</table>
				</div>
				<!--page-->
				<?php echo $order_goods->render(); ?>
			</div>
		</div>


		<!--最底部-->
		<div class="footer">
			<!--底部上面-->
			<div class="footer_top">
				<ul class="footer_top_left">
					<li>
						<h3>新手指南</h3>
						<ul>
							<li>
								<a href="##">鸿运卡使用说明</a>
							</li>
							<li>
								<a href="##">购物卷使用说明</a>
							</li>
							<li>
								<a href="##">购物流程</a>
							</li>
							<li>
								<a href="##">客户注册</a>
							</li>
						</ul>
					</li>
					<li>
						<h3>支付说明</h3>
						<ul>
							<li>
								<a href="##">优惠卷使用方法</a>
							</li>
							<li>
								<a href="##">常见支付问题</a>
							</li>
							<li>
								<a href="##">支付方式</a>
							</li>
							<li>
								<a href="##">预存款支付</a>
							</li>
						</ul>

					</li>
					<li>
						<h3>配送问题</h3>
						<ul>
							<li>
								<a href="##">常见配送问题</a>
							</li>
							<li>
								<a href="##">配送范围</a>
							</li>
							<li>
								<a href="##">运送方式及运费方式</a>
							</li>
							<li>
								<a href="##">商品验货与签收</a>
							</li>
						</ul>
					</li>
					<li>
						<h3>售后服务</h3>
						<ul>
							<li>
								<a href="##">退款说明</a>
							</li>
							<li>
								<a href="##">办理退换货</a>
							</li>
							<li>
								<a href="##">退换货政策</a>
							</li>
							<li>
								<a href="##">放心消费</a>
							</li>
						</ul>
					</li>
					<li>
						<h3>关于我们</h3>
						<ul>
							<li>
								<a href="##">了解我们</a>
							</li>
							<li>
								<a href="##">联系我们</a>
							</li>
							<li>
								<a href="##">诚聘英才</a>
							</li>
						</ul>
					</li>
				</ul>
				<ul class="footer_top_right">
					<li>
						<span>服务热线:(8:000~22:00)</span>
						<h4>400-602-1112</h4>
					</li>
					<li>
						<span>服务邮箱</span>
						<h4>service@hodo.cn</h4>
					</li>

				</ul>
			</div>
			<!--底部下面-->
			<div class="footer_bot">
				<ul class="pic">
					<li>
						<a href="##"><img src="\static\img\di1.png" alt="" /></a>
					</li>
					<li>
						<a href="##"><img src="\static\img\di2.png" alt="" /></a>
					</li>
					<li>
						<a href="##"><img src="\static\img\di3.png" alt="" /></a>
					</li>
					<li>
						<a href="##"><img src="\static\img\di4.png" alt="" /></a>
					</li>
				</ul>
				<ul class="word">
					<li>苏ICP备14039882号-4</li>
					<li>苏B1-20150021</li>
					<li>麦斯威尔有限公司</li>
				</ul>
			</div>
		</div>
		
		<script src="__STATIC__/__INDEX__js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
		<script src="__STATIC__/__INDEX__js/jquery-migrate-1.2.1.js" type="text/javascript" charset="utf-8"></script>
		<script src="__STATIC__/__INDEX__js/common.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src="__STATIC__/__ADMIN__lib/layer/2.4/layer.js"></script>
		<script type="text/javascript">
			var txt = document.getElementById("name");
			txt.onkeydown = function(ev) {
				var n = ev.keyCode;
				if(n < 48 || n > 57) {
					return false;
				}
			}
			var time1 = document.getElementById("time1");
			time1.onkeydown = function(ev) {
				var n = ev.keyCode;
				if(n < 48 || n > 57) {
					return false;
				}
			}
			var time2 = document.getElementById("time2");
			time2.onkeydown = function(ev) {
				var n = ev.keyCode;
				if(n < 48 || n > 57 ) {
						return false;
				}
			}

			function confirms(id){
				var data = {
					'id':id,
				};
				layer.confirm('确认要确认收货吗？',function(){
					$.ajax({
						url:'<?php echo url('Users/confirm'); ?>',
						type:'post',
						data:data,
						dataType:'json',

						success:function(data){
							if(data.code==1){
								layer.msg(data.message,{icon:1,time:1000},function(){
									window.location.reload();
								});
							}
							else
							{
								layer.msg(data.message,{icon:2,time:1000});
							}
						}
					})
				})
			}

		</script>

	</body>

</html>
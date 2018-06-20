<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"E:\phpStudy\WWW\items\public/../application/index\view\users\index.html";i:1528903441;s:71:"E:\phpStudy\WWW\items\public/../application/index\view\common\base.html";i:1528888923;s:75:"E:\phpStudy\WWW\items\public/../application/index\view\Users\left_base.html";i:1528893048;}*/ ?>
<!DOCTYPE html>
<html>


	<head>
		<meta charset="UTF-8">
		<title>用户中心</title>
		<link rel="stylesheet" href="__STATIC__/__INDEX__css/common.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/__INDEX__css/user.css" />
		<script src="__STATIC__/__INDEX__js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
		<script src="__STATIC__/__INDEX__js/jquery-migrate-1.2.1.js" type="text/javascript" charset="utf-8"></script>
		<script src="__STATIC__/__INDEX__js/common.js" type="text/javascript" charset="utf-8"></script>
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

		<div class="content">
			<div>
					

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


				<!--右面部分-->
				<div>
					<!--用户信息-->
					<div>
						<div>
							<p style="padding:5px 30px;">您好 ！ <?php echo $user_name; ?>， 欢迎来到会员中心</p>
							<ul style="padding:5px 30px;">
								<li>
									<a href="<?php echo url('Users/order_search'); ?>?ordsta=0">待付款(<span><?php echo $statu0; ?></span>)</a>
								</li>
								<li>
									<a href="<?php echo url('Users/order_search'); ?>?ordsta=2">待确认收货(<span><?php echo $statu2; ?></span>)</a>
								</li>
								<li>
									<a href="<?php echo url('Users/order_search'); ?>?ordsta=3">待评价(<span><?php echo $statu3; ?></span>)</a>
								</li>
								<li>
									<a href="<?php echo url('Users/address'); ?>">收货地址管理</a>
								</li>
								<li>
									<a href="javascript:void(0)">余额: <span style="color: red;"><?php echo $user_balance; ?></span></a>
								</li>
							</ul>
						</div>
					</div>
					<!--订单详情-->
					<?php if($order_product != '0'): ?>
					<div>
						<div>
							<p>订单号:<?php echo $order_goods['order_no']; ?></p>
							<p>收货人：<?php echo $order_goods['name']; ?></p>
							<p><?php echo $order_goods['create_time']; ?></p>
						</div>
						<ul>
							<?php if(is_array($order_product) || $order_product instanceof \think\Collection || $order_product instanceof \think\Paginator): $i = 0; $__LIST__ = $order_product;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
							<li>
								<div>
									<a href="<?php echo url('Shop/shop_goods'); ?>?pro=<?php echo $v['product_id']; ?>&att=<?php echo $v['attribute_id']; ?>"><img src="<?php echo $v['product_path']; ?>" style="width: 70px;height: 70px;" /></a>
									<p>
										<a href="pro_details.html"><?php echo $v['product_name']; ?></a>
									</p>
								</div>
								<div class="pri">
									<span>￥<?php echo $v['product_original_price']; ?></span>
									<span>￥<?php echo $v['product_price']; ?></span>
								</div>
								<div class="pay">
									<a href="javascript:void(0)"><?php echo $order_goods['order_status']; ?></a>
								</div>
								<a href="<?php echo url('Users/order_detail'); ?>?ordid=<?php echo $order_goods['order_goods_id']; ?>">订单详情 ></a>
							</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
					<!--查看更多-->
					<a href="<?php echo url('Users/order'); ?>">查看更多</a>
					<?php endif; ?>
				</div>

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
		
		
		<script type="text/javascript" src="__STATIC__/__INDEX__js/user.js"></script>
		<script type="text/javascript">
		</script>


	</body>

</html>
<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:81:"/www/web/zhu1_51zuopin_com/public_html/../application/index/view/index/index.html";i:1528965595;s:81:"/www/web/zhu1_51zuopin_com/public_html/../application/index/view/common/base.html";i:1529032646;}*/ ?>
<!DOCTYPE html>
<html>


	<head>
		<meta charset="utf-8" />
		<title>首页</title>
		<link rel="stylesheet" type="text/css" href="__STATIC__/__INDEX__css/common.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/__INDEX__css/index.css" />
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
					<a href="<?php echo url('Index/index'); ?>"><img src="\static\img\logo.png" /></a>
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

			<!--轮播图-->
			<div class="banner">
				<ul class="btn">
					<li class="on"></li>
					<li></li>
					<li></li>
				</ul>
				<div class="container_all">
					<ul>
						<?php if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
						<li>
							<img src="<?php echo $v['path']; ?>" />
						</li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
				
			</div>

			<!--产品-->
			<div class="product">
				<!--产品上面部分-->
				<div class="title">
					<img src="\static\img\coffee.png" alt="" />
					<h1>最新商品</h1>
					<span>new product</span>
					<hr />
				</div>
				<!--产品中间部分-->
				<ul>
					<?php if(is_array($exhibition) || $exhibition instanceof \think\Collection || $exhibition instanceof \think\Paginator): $i = 0; $__LIST__ = $exhibition;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['title'] == '1'): ?>
					<li>
						<a href="<?php echo url('Shop/shop_goods'); ?>?pro=<?php echo $v['pid']; ?>"><img src="<?php echo $v['path']; ?>" alt="" /></a>
						<h1><a href="<?php echo url('Shop/shop_goods'); ?>?pro=<?php echo $v['pid']; ?>"><?php echo $v['name']; ?></a></h1>
						<hr />
						<p>
							<a href="<?php echo url('Shop/shop_goods'); ?>?pro=<?php echo $v['pid']; ?>"><?php echo $v['content']; ?></a>
						</p>
						<img src="\static\img\index.png" alt="" />
					</li>
					<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>

			<!--热门商品-->
			<div class="commodities">
				<!--热门上面部分-->
				<div class="title">
					<img src="\static\img\coffee.png" alt="" />
					<h1>热门商品</h1>
					<span>Hot Commodities</span>
					<hr />
				</div>
				<!--热门中间部分-->
				<ul class="com_mid">
					<!--中间左边部分-->
					<?php if(is_array($exhibition) || $exhibition instanceof \think\Collection || $exhibition instanceof \think\Paginator): $i = 0; $__LIST__ = $exhibition;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['title'] == '2'): ?>
					<li>
						<a href="<?php echo url('Shop/shop_goods'); ?>?pro=<?php echo $v['pid']; ?>"><img src="<?php echo $v['path']; ?>" alt="" /></a>
						<div>
							<a href="<?php echo url('Shop/shop_goods'); ?>?pro=<?php echo $v['pid']; ?>"><?php echo $v['name']; ?></a>
						</div>
					</li>
					<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</ul>

			</div>

			<!--推荐商品-->
			<div class="recommend">
				<!--推荐商品上面部分-->
				<div class="title">
						<img src="\static\img\coffee.png" alt="" />
						<h1>推荐商品</h1>
						<hr />
				</div>

				<?php if(is_array($exhibition) || $exhibition instanceof \think\Collection || $exhibition instanceof \think\Paginator): $i = 0; $__LIST__ = $exhibition;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['title'] == '3'): ?>	
					<div class="title_bot">
						<span>CafeMocha</span>
						<p><?php echo $v['abstract']; ?></p>
						<div>
							<a href="<?php echo url('Shop/shop_goods'); ?>?pro=<?php echo $v['pid']; ?>"><img src="\static\img\exhibition\20180601\10f34a50bb99c4f48e3f9ffe6ec74ba8.png" /></a>
						</div>
						<a href="<?php echo url('Shop/shop_list'); ?>" class="more">查看更多</a>
					</div>
				<!--推荐商品中间部分-->
				<div class="rec_mid">
					<!--推荐中间左边部分-->
					<div class="rec_mid_left">
						<a href="<?php echo url('Shop/shop_goods'); ?>?pro=<?php echo $v['pid']; ?>">
							<img src="<?php echo $v['path']; ?>" />
						</a>
						<div class="rec_hide">
							<h2><?php echo $v['name']; ?></h2>
							<a href="<?php echo url('Shop/shop_list'); ?>">查看更多</a>
						</div>
					</div>
					<!--推荐中间右边部分-->
					<div class="rec_mid_right">
						<?php echo $v['content']; ?>
					</div>
				</div>
				<?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<!--爆款推荐-->
			<div class="hot">
				<div class="title">爆款推荐 HOT</div>
				<p>卡布奇诺是一种加入以同量的意大利特浓咖啡和蒸汽泡沫牛奶相混合的意大利咖啡。此时咖啡的颜色，就像卡布奇诺教会的修士在深褐色的外衣上覆上一条头巾一样，咖啡因此得名。传统的卡布奇诺咖啡是三分之一浓缩咖啡，三分之一蒸汽牛奶和三分之一泡沫牛奶，并在上面撒上小颗粒的肉桂粉末。</p>
				<ul>
				<?php if(is_array($exhibition) || $exhibition instanceof \think\Collection || $exhibition instanceof \think\Paginator): $i = 0; $__LIST__ = $exhibition;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['title'] == '4'): ?>
					<li>
						<a href="<?php echo url('Shop/shop_goods'); ?>?pro=<?php echo $v['pid']; ?>"><img src="<?php echo $v['path']; ?>" alt="" /></a>
						<a href="<?php echo url('Shop/shop_goods'); ?>?pro=<?php echo $v['pid']; ?>"><?php echo $v['name']; ?> ￥<?php echo $v['price']; ?></a>
					</li>
				<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</ul>
				<a href="<?php echo url('Shop/shop_list'); ?>">MORE</a>
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
		
		
	</body>

</html>
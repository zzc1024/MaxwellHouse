<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:82:"D:\php\PHPTutorial\WWW\items\public/../application/index\view\shop\shop_goods.html";i:1528888484;s:78:"D:\php\PHPTutorial\WWW\items\public/../application/index\view\common\base.html";i:1528888923;}*/ ?>
<!DOCTYPE html>
<html>


	<head>
		<meta charset="UTF-8">
		<title>产品详情</title>
		<link rel="stylesheet" type="text/css" href="__STATIC__/__INDEX__css/common.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/__INDEX__css/pro_details.css" />
		<script src="__STATIC__/__INDEX__js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
		<script src="__STATIC__/__INDEX__js/jquery-migrate-1.2.1.js" type="text/javascript" charset="utf-8"></script>
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
			<!--主要内容上面部分-->
			<div class="cont_top">
				<!--上面部分的小导航-->
				<ul class="cont_part_top">
					<li>当前位置：</li>
					<li>
						<a href="<?php echo url('Index/index'); ?>">首页</a>
					<?php if(is_array($series) || $series instanceof \think\Collection || $series instanceof \think\Paginator): $i = 0; $__LIST__ = $series;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($products['series'] == $v['id']): ?>
						 >
					</li>
					<li>
						<a href="<?php echo url('Shop/shop_list'); ?>?series=<?php echo $products['series']; ?>"><?php echo $v['name']; ?></a>
					<?php endif; endforeach; endif; else: echo "" ;endif; ?>
						 >
					</li>
					<li>
						<a href="#" id="test4"><?php echo $curpro['product_name']; ?><?php echo $curpro['attribute_name']; ?></a>
					</li>
				</ul>
				<!--上面部分的主要内容-->
				<div class="cont_part_bot" id="wrap">
					<!--左边小轮播图-->
					<?php if(is_array($img) || $img instanceof \think\Collection || $img instanceof \think\Paginator): if( count($img)==0 ) : echo "" ;else: foreach($img as $k=>$v): if($k == '0'): ?>
					<div class="cont_part_left">
						<div id="lwrap">
							<img src="<?php echo $v; ?>" />
						</div>
						<div id="mwrap">
							<img src="<?php echo $v; ?>" />
							<div id="slider"></div>
							<div class="big"><img src="\static\img\fangdajing.png" alt="" /></div>
						</div>
						<div id="title">
							<a class="left"></a>
							<div>
								<ul class="lin">
									<li class="current"><img src="<?php echo $v; ?>" /></li>
									<?php else: ?>
									<li><img src="<?php echo $v; ?>" /></li>
									<?php endif; endforeach; endif; else: echo "" ;endif; ?>
								</ul>
							</div>
							<a class="right"></a>
						</div>

					</div>
					<!--中间简介-->
					<div class="cont_part_mid">
						<!--中间上面部分-->
						<div>
						<form action="<?php echo url('Proess/sp_base'); ?>?proess=1" method="post">
							<h2 id="test1"><?php echo $curpro['product_name']; ?><?php echo $curpro['attribute_name']; ?> <input type="hidden" name="curpro_id" value="<?php echo $curpro['id']; ?>"></h2>

							<div class="price">
								<span>原价：</span><span id="test2"> ￥<?php echo $curpro['original_price']; ?></span>
								<span style="margin-left: 15px;color: #80807c;font-size: 15px;">售价：</span><span style="color: red;font-size: 15px;" id="test3"> ￥<?php echo $curpro['price']; ?></span>
								<p>累计评价<br /> 2.2万+
								</p>
							</div>
							<ul>
								<li><span>支    持：</span>礼品包装<img src="\static\img\hudiejie.png" alt="" /></li>
								<li>
									<span>配 送 至：</span>
									<div>
										<select>
											<option>北京朝阳区二环以内</option>
											<option>北京朝阳区四环以内</option>
											<option>北京朝阳区一环以内</option>
										</select>
										有货
										<br />
										<p>支持<span>货到付款 99元免基础运费（50kg内）</span></p>
									</div>
								</li>
								<li><span>重    量:</span> <?php echo $products['weight']; ?>kg</li>
							</ul>

						</div>

						<!--中间下面部分-->
						<ul>
							<li>
								<span>选择口味：</span>
								<ul>
									<?php if(is_array($producta) || $producta instanceof \think\Collection || $producta instanceof \think\Paginator): if( count($producta)==0 ) : echo "" ;else: foreach($producta as $key=>$v): if($att == $v['attribute_id']): ?>
									<li class="current" onclick="attribute(<?php echo $v['product_id']; ?>,<?php echo $v['attribute_id']; ?>)">
										<img src="<?php echo $products['thumbnail']; ?>" style="width: 36px;height: 35px;" /><span><?php echo $v['attribute_name']; ?></span>
									</li>
									<?php else: ?>
									<li  onclick="attribute(<?php echo $v['product_id']; ?>,<?php echo $v['attribute_id']; ?>)">
										<img src="<?php echo $products['thumbnail']; ?>" style="width: 36px;height: 35px;" /><span><?php echo $v['attribute_name']; ?></span>
									</li>
									<?php endif; endforeach; endif; else: echo "" ;endif; ?>
								</ul>
							</li>
							<li>
								<span>选择数量：</span>
								<div class="input-bth">
									<span class="prd_subnum">-</span>
									<input name="product_count" type="text" value="1" class="prd_num" id="input" />
									<span class="prd_addnum">+</span>
								</div>
								<div style="display:none;"><input type="submit" name="submit"></div></form>
							</li>
						</ul>
						<!--立即购买-->
						<div>
							<div>
								<a href="javascript:void(0)" onclick="immediately()">立即购买</a>
							</div>
							<div>
								<a href="javascript:void(0)" onclick="add_shop_cart()">加入购物车</a>
							</div>
						</div>
					</div>
					<!--看了又看-->
					<div class="cont_part_right">
						<h3>看了又看</h3>
						<ul>
							<?php if(is_array($see) || $see instanceof \think\Collection || $see instanceof \think\Paginator): $i = 0; $__LIST__ = $see;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
							<li>
								<a href="<?php echo url('Shop/shop_goods'); ?>?pro=<?php echo $v['product_id']; ?>&att=<?php echo $v['attribute_id']; ?>"><img src="<?php echo $v['path']; ?>" style="width: 110px;" /></a>
								<span>￥<?php echo $v['price']; ?></span>
							</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
				</div>

			</div>
			<!--介绍部分-->
			<div class="cont_bot">
				<!--介绍部分左侧-->
				<div class="cont_bot_left">
					<!--左侧上面文字-->
					<p>
						<span class="on">热销产品</span>
						<span>热门关注</span>
					</p>
					<!--左侧图片-->
					<div>
						<ul>
							<?php if(is_array($hotgoods) || $hotgoods instanceof \think\Collection || $hotgoods instanceof \think\Paginator): $i = 0; $__LIST__ = $hotgoods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
							<li>
								<a href="<?php echo url('Shop/shop_goods'); ?>?pro=<?php echo $v['product_id']; ?>&att=<?php echo $v['attribute_id']; ?>"><img src="<?php echo $v['path']; ?>" style="width: 160px;height: 133px;" /></a>
								<p>
									<span>1</span>
									<span>热销288311件</span><span>￥<?php echo $v['price']; ?></span>
								</p>
							</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>

						</ul>
						<ul>
							<?php if(is_array($hotfollow) || $hotfollow instanceof \think\Collection || $hotfollow instanceof \think\Paginator): $i = 0; $__LIST__ = $hotfollow;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
							<li>
								<a href="<?php echo url('Shop/shop_goods'); ?>?pro=<?php echo $v['product_id']; ?>&att=<?php echo $v['attribute_id']; ?>"><img src="<?php echo $v['path']; ?>" style="width: 160px;height: 133px;" /></a>
								<p>
									<span>1</span>
									<span>热销288311件</span>
									<span>￥<?php echo $v['price']; ?></span>
								</p>
							</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
				</div>
				<!--介绍部分右侧-->
				<div class="cont_bot_right">
					<!--右侧上面部分-->
					<div class="introduce_top">
						<ul>
							<li class="current">
								<a href="##">商品详情</a>
							</li>
							<li>
								<a href="##">规格与包装</a>
							</li>
							<li>
								<a href="##">售后保障</a>
							</li>
							<li>
								<a href="##">商品评价</a>
							</li>
						</ul>

					</div>
					<!--右侧中间部分-->
					<div class="hide">

						<div class="pic">
							<div>
								<ul>
									<li>商品名称：<?php echo $products['name']; ?></li>
									<li>商品编号：<?php echo $products['number']; ?></li>
									<li>商品毛重：<?php echo $products['weight']; ?>kg</li>
									<li>商品产地：<?php echo $products['address']; ?></li>
									<?php if(is_array($classify) || $classify instanceof \think\Collection || $classify instanceof \think\Paginator): $i = 0; $__LIST__ = $classify;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
										<li><?php echo $v['name']; ?>：
										<?php if(is_array($v['next']) || $v['next'] instanceof \think\Collection || $v['next'] instanceof \think\Paginator): $i = 0; $__LIST__ = $v['next'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(in_array(($vo['classify_id']), is_array($products['classify'])?$products['classify']:explode(',',$products['classify']))): ?>
										<?php echo $vo['name']; endif; endforeach; endif; else: echo "" ;endif; ?>
										</li>
									<?php endforeach; endif; else: echo "" ;endif; ?>

								</ul>
								<span><a href="##">更多详情>></a></span>
							</div>
							<!--右侧图片部分-->
							<div class="cont_bot_pic">
								<?php echo $products['content']; ?>
							</div>
						</div>
						<div></div>
						<div></div>
						<!--商品评价-->
						<div class="commodity">
							<!--商品评价上面部分-->
							<div class="comm_top">
								<ul>
									<li>
										<span>权利声明：</span>
										<p>本店上的所有商品信息、客户评价、商品咨询、网友讨论等内容，是本店重要的经营资源，未经许可，禁止非法转载使用。</p>
										<p>注：本站商品信息均来自于合作方，其真实性、准确性和合法性由信息拥有者（合作方）负责。 </p>
									</li>
									<li>
										<span>价格说明：</span>
										<ul>
											<li>
												<span>商品价格：</span>
												<p>商品价为商品销售价，是您最终决定是否购买商品的依据。</p>
											</li>
											<li>
												<span>划算价格：</span>
												<p>商品展示的划横线价格为参考价，该价格可能是品牌专柜标价、商品吊牌价或由品牌供应商提供的正品零售价（如厂商指导价、建议零售价等） 或该商品在京东平台上曾经展示过销售价；由于地区、时间的差异性和市场行情波动，品牌专柜价、商品吊牌价等可能会与您购物时展示的不一 样，该价格仅供您参考。
												</p>
											</li>
											<li>
												<span>折扣价格：</span>
												<p>如无特殊说明，折扣指销售商在原价、或划线价（如品牌专柜价、商品吊牌价、厂商指导价、厂商建议零售价）等某一价格基础上计算出的优惠 比例或优惠金额；如有疑问，您可在购买前联系销售商进行咨询。
												</p>
											</li>
											<li>
												<span>异常问题：</span>
												<p>商品促销信息以商品详情页“促销”栏中的信息为准；商品的具体售价以订单结算页价格为准；如您发现活动商品售价或促销信息信息有异常， 建议购买前先联系销售商咨询。
												</p>
											</li>
										</ul>
									</li>
								</ul>
							</div>

							
							<!--商品评价下面部分-->
							<div class="comm_bot">
								<ul class="comm_bot_cont">
									<?php if(is_array($comment) || $comment instanceof \think\Collection || $comment instanceof \think\Paginator): $i = 0; $__LIST__ = $comment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
									<li>
										<div>
											<span><?php echo $v['name']; ?></span>
										</div>
										<ul>
											<li>
												<?php switch($v['score']): case "1": ?>
												<img src="\static\img\xingxing.png" alt="" />
												<?php break; case "2": ?>
												<img src="\static\img\xingxing.png" alt="" />
												<img src="\static\img\xingxing.png" alt="" />
												<?php break; case "3": ?>
												<img src="\static\img\xingxing.png" alt="" />
												<img src="\static\img\xingxing.png" alt="" />
												<img src="\static\img\xingxing.png" alt="" />
												<?php break; case "4": ?>
												<img src="\static\img\xingxing.png" alt="" />
												<img src="\static\img\xingxing.png" alt="" />
												<img src="\static\img\xingxing.png" alt="" />
												<img src="\static\img\xingxing.png" alt="" />
												<?php break; case "5": ?>
												<img src="\static\img\xingxing.png" alt="" />
												<img src="\static\img\xingxing.png" alt="" />
												<img src="\static\img\xingxing.png" alt="" />
												<img src="\static\img\xingxing.png" alt="" />
												<img src="\static\img\xingxing.png" alt="" />
												<?php break; endswitch; ?>
											</li>
											<li><?php echo $v['content']; ?></li>
											<li><span><?php echo date("Y-m-d H:i:s",$v['create_time']); ?></span>
											</li>
										</ul>
									</li>
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</ul>
							</div>

						</div>

					</div>
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
		
		<script src="__STATIC__/__INDEX__js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
		<script src="__STATIC__/__INDEX__js/jquery-migrate-1.2.1.js" type="text/javascript" charset="utf-8"></script>
		<script src="__STATIC__/__INDEX__js/common.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src="__STATIC__/__ADMIN__lib/layer/2.4/layer.js"></script>
		<script type="text/javascript">
			var body = document.body;
			var contentTop = document.getElementsByClassName("cont_top")[0];
			var imgs = document.querySelectorAll("#title img");
			var title = document.getElementById("title");
			var lwrap = document.getElementById("lwrap");
			var mwrap = document.getElementById("mwrap");
			var slider = document.getElementById("slider");
			var limg = document.querySelector("#lwrap img");
			var mimg = document.querySelector("#mwrap img");
			var mimgs = [	
							<?php if(is_array($img) || $img instanceof \think\Collection || $img instanceof \think\Paginator): if( count($img)==0 ) : echo "" ;else: foreach($img as $k=>$v): ?>
								"<?php echo $v; ?>",
							<?php endforeach; endif; else: echo "" ;endif; ?>];
			var limgs = [	
							<?php if(is_array($img) || $img instanceof \think\Collection || $img instanceof \think\Paginator): if( count($img)==0 ) : echo "" ;else: foreach($img as $k=>$v): ?>
								"<?php echo $v; ?>",
							<?php endforeach; endif; else: echo "" ;endif; ?>];
			for(var i = 0; i < imgs.length; i++) {
				imgs[i].index = i;
				imgs[i].onclick = function() {
					mimg.src = mimgs[this.index];
					limg.src = limgs[this.index];
				}
			}
			mwrap.onmousemove = function(ev) {
				slider.style.display = "block";
				lwrap.style.display = "block";
				var evObj = ev || window.event;
				var x = evObj.clientX - contentTop.offsetLeft - slider.offsetWidth / 2 + body.scrollLeft;
				var y = evObj.clientY - contentTop.offsetTop - 52 - slider.offsetHeight / 2 + body.scrollTop;
				var maxWidth = mwrap.offsetLeft + mwrap.offsetWidth - slider.offsetWidth / 2;
				var maxHeight = mwrap.offsetTop + mwrap.offsetHeight - slider.offsetHeight / 2;
				if(x < 0) {
					x = 0;
				} else if(x > mwrap.offsetWidth - slider.offsetWidth) {
					x = mwrap.offsetWidth - slider.offsetWidth;
				}
				if(y < 0) {
					y = 0;
				} else if(y > mwrap.offsetHeight - slider.offsetHeight) {
					y = mwrap.offsetHeight - slider.offsetHeight;
				}
				slider.style.left = x + "px";
				slider.style.top = y + "px";
				var scaleX = x / (mwrap.offsetWidth);
				var scaleY = y / (mwrap.offsetHeight);
				lwrap.scrollLeft = scaleX * (limg.offsetWidth);
				lwrap.scrollTop = scaleY * (limg.offsetHeight);
			}
			mwrap.onmouseout = function() {
				slider.style.display = "";
				lwrap.style.display = "";
			}
			var index = 0;
			$(".lin li").click(function() {
				index = $(this).index();
				$(this).addClass("current").siblings().removeClass("current");

			})
			$(".cont_part_mid>ul li:first-child ul li").click(function() {
				index = $(this).index();
				$(this).addClass("current").siblings().removeClass("current");

			})
			$(".prd_addnum").click(function() {
				var num = parseInt($(this).siblings(".prd_num").val());
				++num;
				if(num > 99) {
					num = 99;
				}

				$(this).siblings(".prd_num").val(num);
			})
			$(".prd_subnum").click(function() {
				var num = parseInt($(this).siblings(".prd_num").val());
				--num;
				if(num < 1) {
					num = 1;
				}
				$(this).siblings(".prd_num").val(num);
			})
			$(".prd_num").change(function() {
				var numA = $(this).val();
				if(isNaN(numA)) {
					numA = 1;
				} else if(numA > 99) {
					numA = 99;
				} else if(numA < 1) {
					numA = 1;
				}
				numA = Math.round(numA);
				$(this).val(numA);
			})
			$(function() {
				$(".small").click(function() {
					$(".cont_part_mid div:first-child ul li div ul").toggle();
				})
			})

			$(function() {
				var index = 0;
				var first = 0
				$(".cont_bot_left>p span").click(function() {
					first = $(this).index();
					$(".cont_bot_left>p span").eq(first).addClass("on").siblings().removeClass("on");
					$(".cont_bot_left>div ul").eq(first).fadeIn().siblings().fadeOut();
				})
			})
			$(function() {
				var index = 0;
				var first = 0
				$(".cont_bot_right .introduce_top ul li").click(function() {
					first = $(this).index();
					$(".cont_bot_right .introduce_top ul li").eq(first).addClass("current").siblings().removeClass("current");
					$(".cont_bot_right .hide>div").eq(first).fadeIn().siblings().fadeOut();
				})
			})
		</script>

		<script type="text/javascript">
			$(function() {
				$(".left").click(function() {
					$(".lin").eq(0).animate({
						"left": "0px"
					})
				})
				$(".right").click(function() {
					$(".lin").eq(0).animate({
						"left": "-85px"
					})
				})
				var index = 0;
				$(".lin li").click(function() {
					index = $(this).index();
					$(".wrap li").eq(index).show().siblings().hide();
				})
				$(".left").click(function() {
					$(this).css("background", "url(\\static\\img\\left-black.png) no-repeat");
					$(this).css("background-position-y", "20px")
					$(".right").css("background", "url(\\static\\img\\right-gray.png  no-repeat)")
					$(".right").css("background-position-y", "20px")
				})
				$(".right").click(function() {
					$(this).css("background", "url(\\static\\img\\right-balck.png) no-repeat")
					$(this).css("background-position-y", "20px")
					$(".left").css("background", "url(\\static\\img\\left-gray.png) no-repeat")
					$(".left").css("background-position-y", "20px")
				})
			})
		</script>
		<script type="text/javascript">
	
			var input = document.getElementById("input")
			input.onkeyup = function(event) {
				if(event.keyCode >= 48 && event.keyCode <= 57 || event.keyCode >= 96 && event.keyCode <= 105) { /*输入0-9*/
					//							changeDiv();
					//							errorPoint.style.display = "none";
				} else if(event.keyCode == "8") { /*退格回删事件*/
					firstDiv();
				} else { /*输入非0-9*/
					//							errorPoint.style.display = "block";
					this.value = "";
				}
			};
				var txt = document.getElementById("txt");
			txt.onkeydown = function(ev) {
				var n = ev.keyCode;
				if(n < 48 || n > 57) {
					return false;
				}
			}

			//更新名称、价格
			function attribute(pid,aid){
				var data = {
					'pid':pid,
					'aid':aid
				}

				$.ajax({
					url:'<?php echo url('Shop/namesprice'); ?>',
					type:'post',
					data:data,
					dataType:'json',

					success:function(data){
						$("h2#test1").html(data.name);
						$("span#test2").text(data.o_price);
						$("span#test3").text(data.price);
						$("a#test4").html(data.name);
					}
				})
			}

			//添加购物车
			function add_shop_cart(){
				var data = {
					'product_attributes_id':$('[name="curpro_id"]').val(),
					'product_count':$('#input').val(),
				}
				$.ajax({
					url:'<?php echo url('Shop/add_shop_cart'); ?>',
					type:'post',
					data:data,
					dataType:'json',

					success:function(data){
						if(data.code==1){
							layer.msg('添加成功',{icon:1,time:500},function(){
								$(".num").html(data.message);
							})
						}else{
							layer.msg('添加失败',{icon:2,time:500})
						}
					}
				})
			}

			function immediately(){
				$('input[name="submit"]').trigger('click');
			}
		</script>

	</body>

</html>
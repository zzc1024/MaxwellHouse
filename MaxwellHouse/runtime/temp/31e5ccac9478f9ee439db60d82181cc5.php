<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:83:"/www/web/zhu1_51zuopin_com/public_html/../application/index/view/users/comment.html";i:1528968465;s:81:"/www/web/zhu1_51zuopin_com/public_html/../application/index/view/common/base.html";i:1528965595;s:85:"/www/web/zhu1_51zuopin_com/public_html/../application/index/view/users/left_base.html";i:1528965601;}*/ ?>
<!DOCTYPE html>
<html>


	<head>
		<meta charset="UTF-8">
		<title>我的评价</title>
		<link rel="stylesheet" href="__STATIC__/__INDEX__css/common.css" />
		<link rel="stylesheet" href="__STATIC__/__INDEX__css/comment.css" />
		<script src="__STATIC__/__INDEX__js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
		<script src="__STATIC__/__INDEX__js/jquery-migrate-1.2.1.js" type="text/javascript" charset="utf-8"></script>
		<script src="__STATIC__/__INDEX__js/common.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(function() {
				var input1 = document.getElementsByTagName("textarea")[0];
				input1.style.color = "gray";
				input1.onfocus = function() {
					if(this.value == "感谢您的宝贵的建议！") {
						this.value = "";
						this.style.color = "gray";
					}
				}
				input1.onblur = function() {
					if(this.value == "") {
						this.value = "感谢您的宝贵的建议！";
						this.style.color = "gray";
					} else {
						this.style.color = "gray";
					}
				}
				$(".cont_right_bot>div>div").hover(function() {
					var index = $(this).index()-1;
					console.log(index)
					for(var i = 0; i <= index; i++) {
						
						$(".cont_right_bot>div>div").eq(i).addClass("star2");
						console.log($(".cont_right_bot>div>div"))
					}
				}, function() {
					for(var i = 0; i < 5; i++) {
						$(".cont_right_bot>div>div").eq(i).removeClass("star2");
					}
				})

				$(".cont_right_bot>div>div").click(function() {
					var index = $(this).index()-1;
					for(var i = 0; i < 5; i++) {
						$(".cont_right_bot>div>div").eq(i).removeClass("star3");
					}
					
					for(var i = 0; i <= index; i++) {
						$(".cont_right_bot>div>div").eq(i).addClass("star3");
					}
				})
			})
		</script>
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
				<div class="cont_right">
					<!--产品详情-->
					<?php if(is_array($order_product) || $order_product instanceof \think\Collection || $order_product instanceof \think\Paginator): $i = 0; $__LIST__ = $order_product;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
					<div class="cont_right_top">
						<a href="<?php echo url('Shop/shop_goods'); ?>?pro=<?php echo $v['product_id']; ?>&att=<?php echo $v['attribute_id']; ?>">
							<img src="<?php echo $v['product_path']; ?>" style="width: 70px;height: 70px;" />
						</a>
						<p>
							<a href="<?php echo url('Shop/shop_goods'); ?>?pro=<?php echo $v['product_id']; ?>&att=<?php echo $v['attribute_id']; ?>"><?php echo $v['product_name']; ?></a>
						</p>
						<p>
							<span>￥<?php echo $v['product_price']; ?></span><br />
							<span>￥<?php echo $v['product_original_price']; ?></span>
						</p>
					</div>
					<!--建议-->
					<div class="cont_right_mid">
						<!-- <form action="<?php echo url('Users/add_comment'); ?>" method="post"> -->
						<input type="hidden" name="product_id" value="<?php echo $v['product_id']; ?>">
						<textarea class="content1" value=""></textarea>
						<!-- <input type="hidden" name="score" value=""> -->
						<!-- <input type="submit" name="submit" style="display:none;"> -->
						<!-- </form> -->
					</div>
					<?php endforeach; endif; else: echo "" ;endif; ?>

					<!--评价-->
					<div class="cont_right_bot">
						<div>
							<span>给我的评分：</span>
							<div class="star"></div>
							<div class="star"></div>
							<div class="star"></div>
							<div class="star"></div>
							<div class="star"></div>
							<span>很棒棒哦！</span>
						</div>
						<a href="javascript:void(0)" onclick="add_momment()">发表评论</a>
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
		
			<script type="text/javascript" src="__STATIC__/__ADMIN__lib/layer/2.4/layer.js"></script>
			<script type="text/javascript">
				
				function add_momment(){
					if($('.star3').length!=0){
						var productID = [];
						$('input[name="product_id"]').each(function(i){
				             productID[i] = $(this).val();
				         });

						var content = [];
						$('.content1').each(function(i){
				             content[i] = $(this).val();
				         });

						var data = {
							'score':$('.star3').length,
							'product_id':productID,
							'content':content,
							'order_goods_id':'<?php echo $order_goods_id; ?>',
						};

						$.ajax({
							url:'<?php echo url('Users/add_comment'); ?>',
							type:'post',
							data:data,
							dataType:'json',

							success:function(data){
								if(data.code==1){
									layer.msg(data.message,{icon:1,time:1000},function(){
										window.location.href=data.url;
									});
								}else{
									layer.msg(data.message,{icon:2,time:100});
								}
							}
						})

					}else{
						layer.msg('请选择评分',{icon:2,time:1000});
					}
				}

				

			</script>

	</body>

</html>
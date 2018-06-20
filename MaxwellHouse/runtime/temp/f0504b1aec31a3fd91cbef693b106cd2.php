<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:86:"/www/web/zhu1_51zuopin_com/public_html/../application/index/view/users/addressadd.html";i:1528965601;s:81:"/www/web/zhu1_51zuopin_com/public_html/../application/index/view/common/base.html";i:1529032646;s:85:"/www/web/zhu1_51zuopin_com/public_html/../application/index/view/users/left_base.html";i:1528965601;}*/ ?>
<!DOCTYPE html>
<html>


	<head>
		<meta charset="UTF-8">
		<title>地址</title>
		<link rel="stylesheet" type="text/css" href="__STATIC__/__INDEX__css/common.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/__INDEX__css/register.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/__INDEX__css/address.css" />
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



				<!--右面上半部分-->
				<div class="cont_right_top address">
									
					<h4>添加地址</h4>
					
					<div class="cont_part">
					<form>

						<div>
							<label style="width:100px">收货人姓名：</label>
							<input type="text" name="name" placeholder="请填写收货人姓名" style="width:450px" />
						</div>
						<div>
							<label style="width:100px">地区：</label>
							<input type="text" name="region" placeholder="请填写省、市、区、县" style="width:450px" />
						</div>
						<div>
							<label style="width:100px">详细地址：</label>
							<input type="text" name="address" placeholder="请填写详细收货地址，例如街道名称，门牌号码等信息" style="width:450px" />
						</div>
						<div>
							<label style="width:100px">收货人手机：</label>
							<input type="text" name="phone" placeholder="请填写收货人手机号码" style="width:450px" />
						</div>
						<input type="button" onclick="addressadd()" value="添加地址">
					</form>

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
		
		<script type="text/javascript" src="__STATIC__/__ADMIN__lib/layer/2.4/layer.js"></script>
		<script src="__STATIC__/__INDEX__js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
		<script src="__STATIC__/__INDEX__js/jquery-migrate-1.2.1.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(".cel").click(function() {

				if(confirm("亲，您确定删除这个地址吗?")) {
					$(this).parents("tr").remove();
				}

			})
			var txt = document.getElementById("txt");
			txt.onkeydown = function(ev) {
				var n = ev.keyCode;
				if(n < 48 || n > 57) {
					return false;
				}
			}

			function addressadd(){
				var data = {
					'name':$('[name="name"]').val(),
					'region':$('[name="region"]').val(),
					'address':$('[name="address"]').val(),
					'phone':$('[name="phone"]').val()
				}

				$.ajax({
					url:'<?php echo url('Users/a_add'); ?>',
					type:'post',
					data:data,
					dataType:'json',

					success:function(data){
						if(data.code==1){
							layer.msg(data.message,{icon:1,time:1500},function(){
								window.location.href=data.url;
							})
						}else{
							layer.msg(data.message,{icon:2,time:1500})
						}
					}
				})
			}

		</script>

	</body>

</html>
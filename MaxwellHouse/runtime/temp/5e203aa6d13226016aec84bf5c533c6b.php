<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:84:"/www/web/zhu1_51zuopin_com/public_html/../application/index/view/shop/shop_list.html";i:1529379227;s:81:"/www/web/zhu1_51zuopin_com/public_html/../application/index/view/common/base.html";i:1529032646;s:82:"/www/web/zhu1_51zuopin_com/public_html/../application/index/view/shop/product.html";i:1528965599;}*/ ?>
<!DOCTYPE html>
<html>



	<head>
		<meta charset="UTF-8">
		<title>商品列表</title>
		<link rel="stylesheet" type="text/css" href="__STATIC__/__INDEX__css/common.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/__INDEX__css/shop_list.css" />
		<script src="__STATIC__/__INDEX__js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
		<script src="__STATIC__/__INDEX__js/jquery-migrate-1.2.1.js" type="text/javascript" charset="utf-8"></script>
		<script src="__STATIC__/__INDEX__js/common.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(function() {
				var input1 = document.getElementsByTagName("input")[5];
				input1.style.color = "gray";
				input1.onfocus = function() {
					if(this.value == "搜索关键字") {
						this.value = "";
						this.style.color = "gray";
					}
				}
				input1.onblur = function() {
					if(this.value == "") {
						this.value = "搜索关键字";
						this.style.color = "gray";
					} else {
						this.style.color = "gray";
					}
				}

				function del() {
					$(".coffee").click(function() {
						$(this).parent().remove();
					})
				}
				del();
				<?php if(is_array($classify) || $classify instanceof \think\Collection || $classify instanceof \think\Paginator): $i = 0; $__LIST__ = $classify;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
				$("#t"+<?php echo $v['classify_id']; ?>+" li").click(function() {
					if($(".t"+<?php echo $v['classify_id']; ?>+"").eq(0).length > 0) {
						$(".t"+<?php echo $v['classify_id']; ?>+"").eq(0).html($(this).eq(0).html() + "<span class='coffee'></span>");
						$('input[name="search1"]').trigger('click');
					} else {
						$("#change").append("<li class='t"+<?php echo $v['classify_id']; ?>+"'>" + $(this).eq(0).html() + "<span class='coffee'></span></li>");
						$('input[name="search1"]').trigger('click');
					}
					del();
				})
				<?php endforeach; endif; else: echo "" ;endif; ?>
				$(".cont_top>div>div:first-child+div div ul li").click(function() {
					$(this).addClass("current").siblings().removeClass("current");
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


		<!--第二部分-->

		<div class="content">
			<!--第二部分的上面部分-->
			<div class="cont_top">
				<!--第一行内容-->
				<ul>
					<span>当前位置：</span>
					<li>
						<a href="<?php echo url('Index/index'); ?>">首页</a> >
					</li>
					<li>
						<a href="<?php echo url('Shop/shop_list'); ?>">商品分类 </a>
					<?php if(is_array($series) || $series instanceof \think\Collection || $series instanceof \think\Paginator): $i = 0; $__LIST__ = $series;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($seriesid == $v['id']): ?>
						 >
					</li>
					<li>
						<a href="<?php echo url('Shop/shop_list'); ?>?series=<?php echo $seriesid; ?>"><?php echo $v['name']; ?></a>
					<?php endif; endforeach; endif; else: echo "" ;endif; ?>
					</li>
				</ul>
				<!--红色框部分-->
				<div>
					<div>
						<span>您已经选择:</span>
						<ul id="change">
							
						</ul>
						<img src="\static\img\jiahao.png" alt="" />
					</div>
					<div>
						<?php if(is_array($classify) || $classify instanceof \think\Collection || $classify instanceof \think\Paginator): $i = 0; $__LIST__ = $classify;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
						<div>
							<span><?php echo $v['name']; ?>：</span>
							<ul id="t<?php echo $v['classify_id']; ?>">
								<?php if(is_array($v['next']) || $v['next'] instanceof \think\Collection || $v['next'] instanceof \think\Paginator): $i = 0; $__LIST__ = $v['next'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
								<li value="<?php echo $vo['classify_id']; ?>">
									<?php echo $vo['name']; ?>
								</li>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
						</div>
						<?php endforeach; endif; else: echo "" ;endif; ?>
						<div>
							<span>价格：</span>
							<form>
								<input type="text" name="price" class="txt" />-<input type="text" name="price2" class="txt"/>
							</form>

							<form class="cont_up">
								<span>关键字：</span>
								<input type="text" name="contents1" />
							</form>
						</div>
						<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" name="search1" value="确定搜索" onclick="search()" style="width:80px;height: 40px;" /></div>
					</div>
				</div>

			</div>
			<!--商品-->
			<ul><li class="asd">
						<ul class="product">
				<?php if(is_array($producta) || $producta instanceof \think\Collection || $producta instanceof \think\Paginator): $i = 0; $__LIST__ = $producta;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
				<li>
					<a href="<?php echo url('Shop/shop_goods'); ?>?pro=<?php echo $v['product_id']; ?>&att=<?php echo $v['attribute_id']; ?>"><img src="<?php echo $v['path']; ?>" style="width:278px;height: 183px;" /></a>
					<h1>￥<?php echo $v['price']; ?></h1>
					<p>
						<a href="<?php echo url('Shop/shop_goods'); ?>?pro=<?php echo $v['product_id']; ?>&att=<?php echo $v['attribute_id']; ?>">
							<span><?php echo $v['product_name']; ?></span> <?php echo $v['attribute_name']; ?>
						</a>
					</p>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<!--分页-->
			<?php echo $producta->render(); ?>
			</li></ul>
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
		
		<script type="text/javascript">
			$(function() {
				$(".coffee").click(function() {
					$(this).parent().remove();
				})
			})
			var txt = document.getElementsByClassName("txt");
			for(var i = 0; i < txt.length; i++) {
				txt[i].onkeydown = function(ev) {
					var n = ev.keyCode;
					if(n < 48 || n > 57) {
						return false;
					}
				}

			}

			function search(){
				var checkID = [];
				$("li.current").each(function(i){
					checkID[i] = $(this).val();
	     		});
	     		
	     		var data ={
	     			'price':$('[name="price"]').val(),
	     			'price2':$('[name="price2"]').val(),
	     			'search':checkID,
	     			'contents':$('[name="contents1"]').val()
	     		};


				if(data.search!=''||data.price!=''||data.price2!=''||data.contents!=''){
					$.ajax({
		     			url:'<?php echo url('Shop/shop_list'); ?>',
		     			type:'post',
		     			data: data,
		     			dataType:'json',

		     			success: function(data){
		     				if(data.code==1){
		     					$("li.asd").html(data.html);
		     				}
		     			}
		     		})
				}
	     		

			}
		</script>

	</body>

</html>
<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:74:"E:\phpStudy\WWW\items\public/../application/index\view\login\retrieve.html";i:1528103119;s:71:"E:\phpStudy\WWW\items\public/../application/index\view\common\base.html";i:1528888923;}*/ ?>
<!DOCTYPE html>
<html>


	<head>
		<meta charset="UTF-8">
		<title>找回密码</title>
		<link rel="stylesheet" type="text/css" href="__STATIC__/__INDEX__css/common.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/__INDEX__css/register.css" />
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


		<!--第二部分-->
		<div class="content">
			<div class="cont_part">
				<span>重置密码</span>
				<form>
					<div>
						<label for="email"> 注册邮箱：</label>
						<input type="text" id="email" name="email" />
					</div>
					<div>
						<label for="yan"> 验证码：</label>
						<input type="text" id="yan" name="code" />
						<div onclick="getcode()">获取验证码</div>
					</div>
					<div>
						<label for="paddword">密码：</label>
						<input type="password" id="paddword" name="password" />
					</div>
					<div>
						<label for="confirm">确认密码：</label>
						<input type="password" id="confirm" name="password2" />
					</div>
					<input type="button" onclick="register()" value="确认重置">
				</form>

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


			function register(){
					var data = {
						'email':$('[name="email"]').val(),
						'code':$('[name="code"]').val(),
						'password':$('[name="password"]').val(),
						'password2':$('[name="password2"]').val(),
					}
					$.ajax({
						url:'<?php echo url('Login/retrieve_edit'); ?>',
						type:'post',
						data:data,
						dataType:'json',

						success:function(data){
							if(data.code==1){
								layer.msg(data.message,{icon:1,time:3000,btn:['确定']},function(){
									window.location.href=data.url
								})
							}else{
								layer.msg(data.message,{icon:2,time:1500})
							}
						}
					})
			}


			function getcode(){
				var data = {
					'email':$('[name="email"]').val(),
				}

				$.ajax({
					url:'<?php echo url('Login/email_code'); ?>',
					type:'post',
					data:data,
					dataType:'json',
					success:function(data){
						if(data.code==1){
							layer.msg(data.message,{icon:1,time:3000,btn:['确定']})
						}else{
							layer.msg(data.message,{icon:2,time:1500})
						}
					}

				})
			}

		</script>

	</body>

</html>
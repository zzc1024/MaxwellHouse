<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:74:"D:\phpStudy\WWW\items\public/../application/index\view\proess\sp_base.html";i:1528947983;s:71:"D:\phpStudy\WWW\items\public/../application/index\view\common\base.html";i:1528888923;s:72:"D:\phpStudy\WWW\items\public/../application/index\view\Proess\first.html";i:1528803447;s:73:"D:\phpStudy\WWW\items\public/../application/index\view\Proess\second.html";i:1528947492;s:72:"D:\phpStudy\WWW\items\public/../application/index\view\Proess\third.html";i:1528802211;s:76:"D:\phpStudy\WWW\items\public/../application/index\view\Proess\shop_cair.html";i:1528803474;}*/ ?>
<!DOCTYPE html>
<html>


	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="__STATIC__/__INDEX__css/common.css" />

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
	<?php switch($proess): case "1": ?><link rel="stylesheet" href="__STATIC__/__INDEX__css/comfirm_order.css" />
			<!--进度条-->
			<div class="cont_top">
				<ul>
					<li>
						<hr />
						<div>1</div>
						<p>我的购物车</p>
					</li>
					<li>
						<hr />
						<div class="one">2</div>
						<p>填写核对订单信息</p>
					</li>
					<li>
						<hr />
						<div>3</div>
						<p>成功提交订单</p>
					</li>
				</ul>
			</div>
			<!--填写收货地址-->
			<form action="<?php echo url('Proess/sp_base'); ?>?proess=2" method="post">
			<div class="cont_mid">
				<div class="add_top">填写收货地址</div>
				<div class="add_bot">
					<ul>
						<?php if(is_array($address) || $address instanceof \think\Collection || $address instanceof \think\Paginator): $i = 0; $__LIST__ = $address;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
						<li>
							<div style="display:none;"><input type='checkbox' name='address_id' value="<?php echo $v['id']; ?>"/></div>
							<span>
								<img src="\static\img\tel.png" alt="" /><?php echo $v['name']; ?>  <?php echo $v['phone']; ?>
							</span>
							<span>
								<img src="\static\img\dibiao.png" alt="" /><?php echo $v['region']; ?>
							</span>
							<span class="on">
								<img src="\static\img\shijian.png" alt="" /><?php echo $v['address']; ?>
							</span>
						</li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
						<li onclick="addressadd()">
							<img src="\static\img\jiahao222.png" alt="" /><br />
							<span>添加地址</span>
					</li>
					</ul>
					
				</div>
			</div>

			<!--确认订单信息-->
			<div class="cont_bot">
				<p>确认订单信息</p>
				<table cellpadding="0" cellspacing="0">
					<thead>
						<tr>
							<th>商品信息</th>
							<th>单价</th>
							<th>数量</th>
							<th>金额</th>
							<th>操作</th>
						</tr>
					</thead>
					<tbody>
					<?php if(is_array($shop_cair_pro) || $shop_cair_pro instanceof \think\Collection || $shop_cair_pro instanceof \think\Paginator): $i = 0; $__LIST__ = $shop_cair_pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if(in_array(($v['id']), is_array($check)?$check:explode(',',$check))): ?>
						<tr>
							<td class="pro">
								<a href="<?php echo url('Shop/shop_goods'); ?>?pro=<?php echo $v['product_id']; ?>&att=<?php echo $v['attribute_id']; ?>"><img src='<?php echo $v['path']; ?>' style="width: 70px;height: 61px;" /></a>
							<p>
								<a href="<?php echo url('Shop/shop_goods'); ?>?pro=<?php echo $v['product_id']; ?>&att=<?php echo $v['attribute_id']; ?>"><?php echo $v['product_name']; ?><?php echo $v['attribute_name']; ?></a>
							</p>
							</td>
							<td class="pri">
								<p>￥<?php echo $v['price']; ?></p>
								<p>￥<?php echo $v['original_price']; ?></p>
							</td>
							<td class="num">
								<div class="input-bth">
									<span class="prd_subnum">-</span>
									<input type="text" name="product_count[]" value="<?php echo $v['product_count']; ?>" class="prd_num txt" />
									<span class="prd_addnum">+</span>
								</div>
							</td>
							<td class="amount">
								<span>￥0.00</span>
							</td>
							<td>
								<a href="##" class="cel">删除</a>
							</td>
							<input type="hidden" name="product_name[]" value="<?php echo $v['product_name']; ?><?php echo $v['attribute_name']; ?>">
							<input type="hidden" name="product_price[]" value="<?php echo $v['price']; ?>">
							<input type="hidden" name="product_original_price[]" value="<?php echo $v['original_price']; ?>">
							<input type="hidden" name="product_id[]" value="<?php echo $v['product_id']; ?>">
							<input type="hidden" name="attribute_id[]" value="<?php echo $v['attribute_id']; ?>">
							<input type="hidden" name="path[]" value="<?php echo $v['path']; ?>">
							<input type="hidden" name="amount[]" value="" class="amount_a">
							<input type="hidden" name="shop_cart_id[]" value="<?php echo $v['id']; ?>">
						</tr>
					<?php endif; endforeach; endif; else: echo "" ;endif; ?>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="4">
								<form action="##">
									<span>配送方式：</span>
									<select>
										<option>卖家承担</option>
									</select>
								</form>
							</td>
						</tr>
						<tr>
							<td colspan="4" class="text">
									<span style="float: left;">订单留言:</span>
									<textarea name="words" style="width: 380px;height: 80px;float: left;resize: none;margin-left: 15px;text-indent: 5px;padding: 5px;"></textarea>
							</td>
						</tr>
					</tfoot>
				</table>
				<!--提交订单-->
				<div>
					<input type="hidden" name="amount_total" value="">
					<p class="tol">商品总价（不含运费）<span class="totalamount">￥00.00</span></p>
					<p>应付金额:<span class="totalamount">￥00.00</span></p>
					<a href="javascript:void(0);" onclick="settlement()">提交订单</a>
				</div>
			</div>
			<div style="display:none;"><input type="submit" name="submit"></div>
			</form>

<?php break; case "2": ?>
<link rel="stylesheet" type="text/css" href="__STATIC__/__INDEX__css/pay.css" />
			<!--进度条-->
			<div class="cont_top">
				<ul>
					<li>
						<hr />
						<div>1</div>
						<p>我的购物车</p>
					</li>
					<li>
						<hr />
						<div>2</div>
						<p>填写核对订单信息</p>
					</li>
					<li class="one">
						<hr />
						<div>3</div>
						<p>成功提交订单</p>
					</li>
				</ul>
			</div>
			<!--成功支付-->
			<div class="cont_mid">
				<div>
					<img src="\static\img\duigou.png" alt="" />
				</div>
				<div>
					<p>您的订单已生成，请尽快付款</p>
					<p>应付金额：
						<span>￥<?php echo $price_amount; ?></span>
					</p>
					<p>请您在提交订单后<span>72</span>小时内完成支付，否则订单会自动取消</p>
				</div>
			</div>
										<!-- 提交支付宝付款所需数据 -->
										<form action="<?php echo url('Proess/zfbpay'); ?>" method="post">
											<input type="hidden" name="subject" value="<?php echo $subject; ?>">
											<input type="hidden" name="out_trade_no" value="<?php echo $out_trade_no; ?>">
											<input type="hidden" name="total_amount" value="<?php echo $price_amount; ?>">
											<input type="submit" name="zfbsub" style="display:none;">
										</form>
			<!--付款方式-->
			<div class="cont_bot">
				<p>您可以选择付款方式</p>
				<!--付款方式-->
				<div class="pay_top">
					<ul>
						<li>
							<p>平台支付</p>
							<ul>
								<li>
									<label for="cart_q"></label>
									<label for="cart_q" class="one">
										<img src="\static\img\zhifubaoorder.png" onclick="zfbpay()"  />
									</label>
								</li>
							</ul>
						</li>
					</ul>

					<div>
						<label for="cart_o"></label>
						<p>
							<span class="card">余额</span><span><?php echo $balance; ?></span>
						</p>
						<p class="rmb">支付
							<span>¥<?php echo $price_amount; ?></span> 元
						</p>
					</div>

				</div>
				<!--输入密码-->
				<div class="pay_bot">
					<p>
						<img src="\static\img\zhengque.png" alt="" />
						<span>您在安全的环境中，请放心使用！</span>
					</p>
					<p>支付密码：</p>
					<!--六位密码-->
					<div>
						<div class="box"></div>
						<p>请输入6位数字支付密码</p>
					</div>
					<!--按钮-->
					<a href="javascript:void(0)" onclick="pay()">确认付款</a>
				</div>

			</div>
<?php break; case "3": ?>
<link rel="stylesheet" type="text/css" href="__STATIC__/__INDEX__css/pay_success.css" />
<script src="__STATIC__/__INDEX__js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
<script src="__STATIC__/__INDEX__js/jquery-migrate-1.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="__STATIC__/__INDEX__js/common.js" type="text/javascript" charset="utf-8"></script>
			<!--主要内容-->
			<div class="cont_top">
				<!--左边部分-->
				<div class="cont_left">
					<p>
						<img src="\static\img\duide.png" alt="" /><span>支付成功，我们会尽快为您发货！</span>
					</p>
					<div>
						<div>
							<p>
								<span>在线支付：<span>¥<?php echo $amount; ?></span>元</span>
								<span>您的订单已在处理中......</span>
							</p>
							<p>
								<a href="<?php echo url('Users/order_detail'); ?>?ordid=<?php echo $ordid; ?>">查看订单</a>
								<a href="<?php echo url('Users/order_detail'); ?>?ordid=<?php echo $ordid; ?>">收货地址</a>
								<a href="<?php echo url('Shop/shop_list'); ?>" class="shop">继续购物>></a>
							</p>
						</div>
						<div>
							<img src="\static\img\kuaidiyuan.png" alt="" />
						</div>
					</div>
					
				</div>
				<!--右边部分-->
				<div class="cont_right">
					<div class="cont_right_left">
						<img src="\static\img\erweima.png" alt="" />
						<span>扫码下载APP</span><span>随时查看物流，享受更多优惠与特权</span>
					</div>
					<div class="cont_right_right">
						<img src="\static\img\tubiao.png"/>
						<span>麦斯威尔</span>
						<span>滴滴香浓，意犹未尽</span>
					</div>
				</div>
			</div>
			
			<!--返回首页-->
			<a href="<?php echo url('Index/index'); ?>">返回首页</a>
<?php break; case "4": ?>
<link rel="stylesheet" href="__STATIC__/__INDEX__css/shop_carts.css" />		
			<!--进度条-->
			<div class="cont_top">
				<ul>
					<li class="one">
						<hr />
						<div>1</div>
						<p>我的购物车</p>
					</li>
					<li>
						<hr />
						<div>2</div>
						<p>填写核对订单信息</p>
					</li>
					<li>
						<hr />
						<div>3</div>
						<p>成功提交订单</p>
					</li>
				</ul>
			</div>
			<!--全选-->
			<form>
				<input type="checkbox" name="check" id="all" class="chk" />
				<label for="all"></label>
				<label for="all" id="dels">麦斯威尔官方旗舰店</label>
			</form>
			<!--购物车-->
			<table cellpadding="0" cellspacing="0">
				<thead>
					<tr>
						<th></th>
						<th>商品信息</th>
						<th>单价</th>
						<th>数量</th>
						<th class="money">金额</th>
						<th>操作</th>
					</tr>
				</thead>
				<form action="<?php echo url('Proess/sp_base'); ?>?proess=1" method="post">
				<tbody>
				<?php if(is_array($shop_cair_pro) || $shop_cair_pro instanceof \think\Collection || $shop_cair_pro instanceof \think\Paginator): $i = 0; $__LIST__ = $shop_cair_pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
					<tr>
						<td>
							<input type='checkbox' name='check[]' value="<?php echo $v['id']; ?>" id='id<?php echo $v['id']; ?>' class='chk add shop_cart' />
							<label for='id<?php echo $v['id']; ?>'></label>
						</td>
						<td class='pro'>
							<a href="<?php echo url('Shop/shop_goods'); ?>?pro=<?php echo $v['product_id']; ?>&att=<?php echo $v['attribute_id']; ?>"><img src='<?php echo $v['path']; ?>' style="width: 70px;height: 61px;" /></a>
							<p>
								<a href="<?php echo url('Shop/shop_goods'); ?>?pro=<?php echo $v['product_id']; ?>&att=<?php echo $v['attribute_id']; ?>"><?php echo $v['product_name']; ?><?php echo $v['attribute_name']; ?></a>
							</p>
						</td>
						<td class='pri'>
							<p>￥<?php echo $v['price']; ?></p>
							<p>￥<?php echo $v['original_price']; ?></p>
						</td>
						<td class='number'>
							<div class='input-bth'>
								<span class='prd_subnum'>-</span>
								<input type='text' value='<?php echo $v['product_count']; ?>' class='prd_num' id='txt'/>
								<span class='prd_addnum'>+</span>
							</div>
						</td>
						<td class='amount'>
							<span>￥0.00</span>
						</td>
						<td>
							<a href='##' class='cel'>删除</a>
						</td>
					</tr>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
				<div style="display:none;"><input type="submit" name="submit"></div>
				</form>
			</table>
			<!--结算-->
			<div class="cont_top">
				<p>
					<span class="tol">商品总价（不含运费）</span><span class="totalamount">￥00.00</span>
				</p>
				<a href="javascript:void(0);" onclick="settlement()">去结算</a>
			</div>
		<?php break; endswitch; ?>
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


	<?php switch($proess): case "1": ?>
		<script type="text/javascript">
			$(function() {
				var initVal = {
					total: 0, //总价
					number: 0, //商品数量
					deduction: 0, //折扣价
					coupon: 0, //优惠券
					amount: 0 //总金额
				}
				var price, num;
				var cont = function() {
					var len1 = $(".table input[type=checkbox]").length;
					var len2 = $(".table input[type=checkbox]:checked").length;
					return len1 - len2;
				}
				var total = function() {
					var check = $(".table input[type=checkbox]:checked");
					var a = 0;
					initVal.amount = 0;
					initVal.total = 0;
					for(var t = 0; t < $('tbody>tr').length; t++) {

						price = $('tbody>tr').eq(t).find('.pri>p:first-child').html()
						price = parseInt(price.replace(/￥/i, ""));
						num = $('tbody>tr').eq(t).find('input[type="text"]').val()
						initVal.amount = parseInt(price) * parseInt(num)
						$(".amount").eq(t).html("￥" + initVal.amount.toFixed(2));
						$('input.amount_a').eq(t).val(initVal.amount.toFixed(2));
						initVal.total += initVal.amount;
					}
					$(".totalamount").html("￥" + initVal.total.toFixed(2));
					$('input[name="amount_total"]').val(initVal.total.toFixed(2));
				}
				$(" table input[type=checkbox]").bind("click", function() {
					total();
				})
				$(".cel").click(function() {
					$(this).parents("tr").remove();

					layer.msg('删除成功',{icon:1,time:1500});

					total();
				})
				$(".prd_addnum").click(function() {
					var num = parseInt($(this).siblings(".prd_num").val());
					++num;
					if(num > 99) {
						num = 99;
					}

					$(this).siblings(".prd_num").val(num);
					total();
				})
				$(".prd_subnum").click(function() {
					var num = parseInt($(this).siblings(".prd_num").val());
					--num;
					if(num < 1) {
						num = 1;
					}
					$(this).siblings(".prd_num").val(num);
					total();
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

					total();
				})
				$("#all").click(function() {
					total();
				})

			total();
			})

			var index = 0;
			$(".add_bot ul li").click(function() {
				index = $(this).index();
				$(this).addClass("current").siblings().removeClass("current");
				$(this).parent().find("input[type=checkbox]").removeAttr("checked");
				$(this).find("input[type=checkbox]").attr("checked","checked");

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

			function addressadd(){
				window.location.href="<?php echo url('Users/addressadd'); ?>";
			}

			
			$(".add_bot>ul>li").eq(0).attr("class","current");
			$(".add_bot>ul>li>div>input").eq(0).attr("checked","checked");			

			function settlement(){
				$('input[name="submit"]').trigger('click');
			}


		</script>
		<?php break; case "2": ?>
		<script type="text/javascript">
			var box = document.getElementsByClassName("box")[0];

			function createDIV(num) {
				for(var i = 0; i < num; i++) {
					var pawDiv = document.createElement("div");
					pawDiv.className = "pawDiv";
					box.appendChild(pawDiv);
					var paw = document.createElement("input");
					paw.type = "password";
					paw.className = "paw";
					paw.maxLength = "1";
					pawDiv.appendChild(paw);
				}
			}
			createDIV(6);
			var pawDiv = document.getElementsByClassName("pawDiv");
			var paw = document.getElementsByClassName("paw");
			var pawDivCount = pawDiv.length;
			/*设置第一个输入框默认选中*/
			//			pawDiv[0].setAttribute("style", "border: 1px solid deepskyblue;");
			paw[0].readOnly = false;
			//paw[0].focus();
			var errorPoint = document.getElementsByClassName("errorPoint")[0];
			/*绑定pawDiv点击事件*/
			function func() {
				for(var i = 0; i < pawDivCount; i++) {
					pawDiv[i].addEventListener("click", function() {
						pawDivClick(this);
					});
					paw[i].onkeyup = function(event) {
						if(event.keyCode >= 48 && event.keyCode <= 57 || event.keyCode >= 96 && event.keyCode <= 105) { /*输入0-9*/
							changeDiv();
							//							errorPoint.style.display = "none";
						} else if(event.keyCode == "8") { /*退格回删事件*/
							firstDiv();
						} else { /*输入非0-9*/
							//							errorPoint.style.display = "block";
							this.value = "";
						}
					};
				}
			}
			func();
			/*定义pawDiv点击事件*/
			var pawDivClick = function(e) {
				for(var i = 0; i < pawDivCount; i++) {
					pawDiv[i].setAttribute("style", "border:none");
				}
				//				e.setAttribute("style", "border: 1px solid deepskyblue;");
			};
			/*定义自动选中下一个输入框事件*/
			var changeDiv = function() {
				for(var i = 0; i < pawDivCount; i++) {
					if(paw[i].value.length == "1") { /*处理当前输入框*/
						paw[i].blur(); /*处理上一个输入框*/
						paw[i + 1].focus();
						pawDivClick(pawDiv[i + 1]);
					}
				}
			};
			/*回删时选中上一个输入框事件*/
			var firstDiv = function() {
				for(var i = 0; i < pawDivCount; i++) {
					if(paw[i].value.length == "0") { /*处理当前输入框*/
						console.log(i);
						paw[i].blur(); /*处理上一个输入框*/
						paw[i - 1].focus();
						paw[i - 1].readOnly = false;
						paw[i - 1].value = "";
						pawDivClick(pawDiv[i - 1]);
						break;
					}
				}
			};

			//余额支付
			function pay() {
				var paypass = '';
				$("input.paw").each(function(i){
		            paypass += $(this).val();
		        });
				if(paypass.length<6){
					layer.msg('支付密码长度不能少于6位',{icon:2,time:1000});
				}else{
			        if('<?php echo $balance; ?>'<'<?php echo $price_amount; ?>'){
			        	layer.msg('余额不足',{icon:2,time:1000});
			        }else{

						var data ={
							'out_trade_no':'<?php echo $out_trade_no; ?>',
							'paypass':paypass,
							'price_amount':'<?php echo $price_amount; ?>',
						};
			        	$.ajax({
			        		url:'<?php echo url('Proess/balance_pay'); ?>',
			        		type:'post',
			        		data:data,
			        		dataType:'json',

			        		success:function(data){
			        			if(data.code==1){
			        				window.location.href="<?php echo url('Proess/sp_base'); ?>?proess=3&total_amount="+<?php echo $price_amount; ?>+"&out_trade_no="+data.message;
			        			}else{
			        				layer.msg(data.message,{icon:2,time:1000});
			        			}
			        		}
			        	})
			        }	
				}

			}

			//支付宝支付
			function zfbpay(){
				$('input[name="zfbsub"]').trigger('click');
			}


		</script>
		<?php break; case "3": ?>
		<script type="text/javascript">
			
		</script>
		<?php break; case "4": ?>
		<script src="__STATIC__/__INDEX__js/shop_cart.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			var b = document.getElementsByClassName("add");
			var all = document.getElementById("all");
			var top = document.getElementsByClassName("content");
			all.onclick = function() {
				var a = 0;
				for(var i = 0; i < b.length; i++) {
					if(b[i].checked == true) {
						a++;
					}
				}
				if(a == b.length) {
					for(var j = 0; j < b.length; j++) {
						b[j].checked = false;
					}
				} else {
					for(var i = 0; i < b.length; i++) {
						b[i].checked = true;
					}
				}

			}
			top.onclick = function() {
				var c = 0;
				for(var i = 0; i < b.length; i++) {
					if(b[i].checked == true) {
						c++;
					}
					if(c == b.length) {
						all.checked = true;
					} else {
						all.checked = false;
					}
				}
			}
		</script>
		<script type="text/javascript">
			
			//如果购物车没有产品，删除from标签
			if($(".content>table>tbody>tr").length == 0) {
				$(".content>form").remove();
			}
			//键盘只能输入数字
			var txt = document.getElementsByClassName("prd_num");
			for( var i=0;i<txt.length;i++){
				txt[i].onkeydown = function(ev) {
				var n = ev.keyCode;
				if((n < 48 || n > 57) && n != 8 && (n < 95 || n > 105)) {
					return false;

				}
			}
			}
			
			//change 输入域发生变化时执行
			$(function() {
				$(".prd_num").change(function() {
					var id = $(this).parents("tr").find("input[type=checkbox]").attr("id");
					
					var iil = parseInt(id.replace(/id/i,""));
					//拿到id
					var count = $(this).val();
					//拿到数量

					$.ajax({
						url:'<?php echo url('Proess/edit_product_num'); ?>',
						type:'post',
						dataType:'json',
						data:{'id':iil,'product_count':count},

						success:function(data){
							if(data.code==1){
								console.log(iil)
							}
						}

					})

					
				})
				$(".prd_addnum").click(function() {
					var id = $(this).parents("tr").find("input[type=checkbox]").attr("id");
					var urr = $(this).parents("tr").find("input[type=text]").val();
					var iil = parseInt(id.replace(/id/i,""));
					$.ajax({
						url:'<?php echo url('Proess/edit_product_num'); ?>',
						type:'post',
						dataType:'json',
						data:{'id':iil,'product_count':urr},

						success:function(data){
							if(data.code==1){
								console.log(iil)
							}
						}

					})
				})
				$(".prd_subnum").click(function() {
					var id = $(this).parents("tr").find("input[type=checkbox]").attr("id");
					var urr = $(this).parents("tr").find("input[type=text]").val();
					var iil = parseInt(id.replace(/id/i,""));
					$.ajax({
						url:'<?php echo url('Proess/edit_product_num'); ?>',
						type:'post',
						dataType:'json',
						data:{'id':iil,'product_count':urr},

						success:function(data){
							if(data.code==1){
								console.log(iil)
							}
						}

					})
				})
			})

			// function settlement(){
			// 	var checkID = []; //定义一个空数组
			// 	$("input.shop_cart:checked").each(function(i){
			// 			checkID[i] = $(this).val();
		 //        });
		 //        if(checkID.length!=0){
			//         $.ajax({
			//         	url:'<?php echo url('Proess/sp_base'); ?>?proess=1',
			//         	type:'post',
			//         	data:{'check':checkID},
			//         	dataType:'json',
			//         	success:function(data){
			//         		if(data.code==1){
			//         			$(".content").html(data.message);
			//         		}
			//         	}
			//         })
			//     }else{
			//     	layer.msg('请先选择需要购买的商品',{icon:2,time:1500});
			//     }
			// }

			function settlement(){
				var checkID = []; //定义一个空数组
				$("input.shop_cart:checked").each(function(i){
						checkID[i] = $(this).val();
		        });
				if(checkID.length!=0){
					$('input[name="submit"]').trigger('click');
				}else{
			    	layer.msg('请先选择需要购买的商品',{icon:2,time:1500});
			    }
			}
		</script>
		<?php break; endswitch; ?>



		

	</body>

</html>
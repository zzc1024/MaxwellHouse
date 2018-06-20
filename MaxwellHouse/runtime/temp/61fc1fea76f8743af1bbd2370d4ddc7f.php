<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:87:"/www/web/zhu1_51zuopin_com/public_html/../application/admin/view/orders/goods_list.html";i:1528958405;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>订单详情</title>
		<link rel="stylesheet" type="text/css" href="__STATIC__/__INDEX__css/common.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/__INDEX__css/order_details.css" />
		<script src="__STATIC__/__INDEX__js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
		<script src="__STATIC__/__INDEX__js/jquery-migrate-1.2.1.js" type="text/javascript" charset="utf-8"></script>
		<script src="__STATIC__/__INDEX__js/common.js" type="text/javascript" charset="utf-8"></script>
	</head>
<body>

				<!--右面上下部分-->
				<div class="cont_right_bot" style="width:720px;">
					<h3>商品清单</h3>
					<table cellpadding="0" cellspacing="0">
						<thead>
							<tr>
								<th>商品名称</th>
								<th>价格</th>
								<th>数量</th>
								<th>总价</th>
							</tr>
						</thead>
						<tbody>
							<?php if(is_array($order_product) || $order_product instanceof \think\Collection || $order_product instanceof \think\Paginator): $i = 0; $__LIST__ = $order_product;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
							<tr>
								<td>
									<a href="javascript:vold(0)">
										<img src="<?php echo $v['product_path']; ?>" style="width: 70px;height: 70px;" />
									</a>
									<p>
										<a href="javascript:vold(0)">
											<?php echo $v['product_name']; ?>
										</a>
									</p>

								</td>
								<td>￥<?php echo $v['product_price']; ?></td>
								<td><?php echo $v['product_count']; ?></td>
								<td><span>￥<?php echo $v['amount']; ?></span></td>
							</tr>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody>
					</table>
					<div>
						<p>商品价格:<span>￥<?php echo $order_goods['amount_total']; ?></span></p>
						<p>总计:<span>￥<?php echo $order_goods['amount_total']; ?></span></p>
					</div>

				</div>

	</body>

</html>
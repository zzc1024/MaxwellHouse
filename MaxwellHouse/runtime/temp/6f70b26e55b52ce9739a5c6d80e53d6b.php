<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"E:\phpStudy\WWW\items\public/../application/index\view\Proess\first.html";i:1528529957;}*/ ?>
<link rel="stylesheet" href="__STATIC__/__INDEX__css/comfirm_order.css" />
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
			<!--填写收货地址-->
			<div class="cont_mid">
				<div class="add_top">填写收货地址</div>
				<div class="add_bot">
					<ul>
						<?php if(is_array($address) || $address instanceof \think\Collection || $address instanceof \think\Paginator): $i = 0; $__LIST__ = $address;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
						<li>
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
						<tr>
							<td class="pro">
								<a href="pro_details.html"><img src="\static\img\shopcarts.png" alt="" /></a>
								<p>
									<a href="pro_details.html">麦斯威尔经典愿望速溶黑咖啡，三合一 特浓咖啡</a>
									<span>包装：盒装  重量：1.52kg</span>
								</p>
							</td>
							<td class="pri">
								<p>￥22.00</p>
								<p>￥49.00</p>
							</td>
							<td class="num">
								<div class="input-bth">
									<span class="prd_subnum">-</span>
									<input type="text" value="1" class="prd_num txt" />
									<span class="prd_addnum">+</span>
								</div>
							</td>
							<td class="amount">
								<span>￥29.00</span>
							</td>
							<td>
								<a href="##" class="cel">删除</a>
							</td>
						</tr>
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
								<form action="##">
									<span>订单留言:</span>
									<textarea></textarea>
								</form>
							</td>
						</tr>
					</tfoot>
				</table>
				<!--提交订单-->
				<div>
					<p class="tol">商品总价（不含运费）<span class="totalamount">￥00.00</span></p>
					<p>应付金额:<span class="totalamount">￥00.00</span></p>
					<a href="<?php echo url('Proess/sp_base'); ?>?proess=2">提交订单</a>
				</div>
			</div>


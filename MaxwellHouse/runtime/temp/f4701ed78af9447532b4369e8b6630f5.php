<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\phpStudy\WWW\items\public/../application/index\view\shop\product.html";i:1528284262;}*/ ?>
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
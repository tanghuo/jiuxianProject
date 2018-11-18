<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>购物车页面</title>
	<script src="__ROOT__/Home/Tpl/Index/JS/jquery.min.js"></script>
	<link rel="stylesheet" href="__ROOT__/Home/Tpl/Index/CSS/public_bottom.css">
</head>
<style>
	*{
		margin: 0px;
		padding: 0px;
	}
	/* slightly enhanced, universal clearfix hack */
	.clearfix:after {
	     visibility: hidden;
	     display: block;
	     font-size: 0;
	     content: " ";
	     clear: both;
	     height: 0;
	}
	.clearfix { display: inline-block; }
	/* start commented backslash hack \*/
	* html .clearfix { height: 1%; }
	.clearfix { display: block; }
	/* close commented backslash hack */
	#sub_body{
		width: 1200px;
		margin: auto;
	}
	#cart_top{
		width: 1200px;
		height: 30px;
		margin: auto;
		color :#777;
		line-height: 30px;
	}
	#cart_top  a{
		text-decoration: none;
		color: #777;
	}
	#cart_right span{
		color: red!important;
		font-size: 20px;
	}
	#cart_top a:hover{
		text-decoration: underline;
		color : red;
	}
	#cart_top span{
		color: red;
	}
	#cart_top ul li{
		list-style: none;
		margin-left: 5px;
		margin-right: 5px;
	}
	#cart_left  li {
		float: left;
	}
	#cart_right  li {
		float: left;
	}
	#cart_right {
		float: right;
	}
	#cart_left {
		float: left;
	}
	#cart_focus{
		margin-top: 10px;
		position: relative;
		/*background: red;*/
	}
	.cart_unit_body{
		margin: auto;
		background: #0dd40d;
		width: 35px;
		height: 35px;
		border-radius: 50px;
		color: white;
		font-family: 微软雅黑;
		font-size: 20px;
		line-height :35px;
		text-align: center;
		opacity: 0.5;

	}
	#cfocus_left{
		float: left;
		position: relative;
		top:12px;
	}
	#cfocus_right{
		float: right;
		position: relative;

		left:80px;
		top :13px;
	}
	.cart_unit{
	
		float: left;
		width: 260px;
		position: relative;
	}
	.cart_unit p{
		text-align: center;
		color: #666;
		margin-top: 5px;
	}
	.cart_unit_follow div{
		position: relative;
		background: #0dd40d;
		height: 3px;
		width: 115px;
		opacity: 0.5px;
	}
	.cart_unit_follow div:first-child{
		position: absolute;
		top:17.5px;
	}
	.cart_unit_follow div:last-child{
		position: absolute;
		top:17.5px;
		left:148px;
	}
	#cart_main_top ul li{
		/*float: left;*/
	}
	#cart_main{
		margin-top: 50px;
	}
	#cart_main_top ul li{
		list-style: none;
		float: left;
		font-weight: bold;
		font-size: 18px;
		margin: 3px;
	}
	#table_top{
		color: #999;
		font-size: 18px;
	}
	table a{
		color: black;
		text-decoration: none;
	}
	table a:hover{
		color:red;
		text-decoration: underline;
	}
	table tr td{
		text-align: center;
		height: 100px;
	}
	#table_top td:nth-child(1){
		color: black;
	}
	#table_top td:nth-child(1) span{
		margin-left: 5px;
	}
	table tr td:nth-child(1){
		width:60px;	
		text-align: left;
	}
	table tr td:nth-child(2){
		width: 250px;	
	}
	table tr td:nth-child(3){
		width: 250px;	
	}
	table tr td:nth-child(4){
		width: 150px;	
	}
	table tr td:nth-child(5){
		width: 150px;	
	}
	table tr td:nth-child(6){
		width: 100px;	
	}
	table tr td:nth-child(7){
		width: 200px;	
	}
	.table_item_detail img{
		width: 80px;
		height: 80px;
		/*float: left;*/
	}
	.table_item_detail input{
		float: left;
	}
	
	.table_item_detail div{
		width: 230px;
		float: left;
	}
	.table_item_detail img{
		margin-left: 10px;
	}
	.quantity_cal {
		height: 50px;
		line-height: 50px;
		font-size: 25px;
	}
	.quantity_cal input{
		width: 50px;
		height: 18px;
		text-align: center;
		font-size: 18px;
	}
	.quantity_cal div{
		float: left;
	}
	.quantity_cal_left{
		user-select:none;
		text-align: center;
		width: 20px;
		height: 19px;
		line-height: 19px;
		border:1px solid #333;
		margin-top: 18px;
	}
	.quantity_cal_right{
		user-select:none;
		text-align: center;
		width: 20px;
		height: 19px;
		line-height: 19px;
		border:1px solid #333;
		margin-top: 18px;

	}
	.quantity_cal_right:hover{
		cursor: pointer;
	}
	.quantity_cal_left:hover{
		cursor: pointer;
	}
	.quantity_cal{
		margin:auto;
		width:100px;
	}
	table{
		margin-bottom: 10px;
	}
	#cart_mbottm_left span{
		font-size: 18px;
		margin-left: 5px;
		float: left;
		position: relative;
	}
	#cart_mbottm_left input{
		position: relative;
		top:5px;
		float: left;
	}
	#cart_mbottm_left a{
		text-decoration: none;
		color: black;
		font-size: 18px;
	}
	#cart_mbottm_left a:hover{
		text-decoration: underline;
		color: red;
	}
	#cart_mbottm_left ul{
		float: left;
		margin-left: 10px;
	}
	#cart_mbottm_left ul li{
		list-style: none;
		float: left;
	}
	#cart_mbottm_left{
		float: left;
	}
	#cart_mbottm_rightone{
		float: right;
		width: 120px;
		height: 62px;
		font-size: 20px;
		color: white;
		font-weight: bold;
		text-align: center;
		background: red;
		line-height: 62px;
	}
	#cart_mbottm_rightone:hover{
		cursor: pointer;
	}
	#cart_mbottm_righttwo{
		height: 62px;
		line-height: 62px;
		float: right;
		margin-right:15px;
		font-size: 20px; 
	}
	#cart_mbottm_righttwo span{
		color: red;
	}
	#cart_mbottm_righttwo span:last-child{
		font-size: 30px;
	}
	#cart_bb_top ul li{
		position: relative;
		float: left;
		list-style: none;
		margin:10px;
	}
	#cart_bb_top ul li:hover{
		color: red;
		cursor: pointer;
	}
	.catt_bbt_follow{
		width: 100%;
		height: 2px;
		background: red;
		position: relative;
		top:5px;
	}
	#cart_bb_main{
		margin-top: 20px;
		margin-left:20px;

	}
	.cart_bbm_unit{
		width:250px;
		height: 334px;
		text-align: center;
		float: left;
		margin-left: 22px;
		margin-right: 22px;
	}
	.cart_bbm_unit img{
		width: 160px;
		height: 160px;
		margin: auto;
	}
	.cart_bbm_unit p{
		text-align: left;
		color: #999;
		font-size: 18px;
		margin: auto;
		margin-left: 25px;
	}
	.cart_bbm_unit b{
		font-size:16px;
		color: red;
	}
	.cart_bbm_unit_intro{
		width: 200px;
		text-align: left;
		margin-left: 25px;
	}
	.cart_bbm_unit_intro a{
		color: black;
		text-decoration: none;
	}
	.cart_bbm_unit_intro a:hover{
		color: red;
		text-decoration: underline;
	}
	.cart_bbm_unit_buttom{
		width: 125px;
		height: 32px;
		margin: auto;
		border:1px solid #999;
		text-align: center;
		line-height: 32px;
		margin-top: 30px;
		color: #999;
	}
	.cart_bbm_unit_buttom:hover{
		cursor: pointer;
	}
	#cart_main_2{
		margin-top: 40px;
	}
	.cart_addr_body{
		margin-top: 20px;
		width: 400px;
		height: 180px;
		border: 2px dashed red;
		position: relative;
		float: left;
		margin-right: 15px;
	}
	.cart_addr_body:hover{
		cursor: pointer;
	}
	.cart_addr_body p{
		margin: 20px;
		color: #333;
		font-size: 15px;
	}
	.cart_addr_body p:first-child{
		margin-top: 10px;
		margin-bottom: 35px;
	}
	.cart_addr_body div{
		color: red;
		font-size:15px;
		position: absolute;
	}
	.cart_addr_body div:hover{
		cursor: pointer;
	}
	.cart_setdefault{
		/*top:-100px;*/
		left: 320px;
		top:15px;
		display: none;
	}
	.cart_setdefault:hover{
		border:1px dashed red;
	}
	.cart_setchange{
		left:20px;
		display: none;

	}
	.cart_setchange:hover{
		border:1px dashed red;
	}
	.cart_setdelete{
		left:70px;
		display: none;
	}
	.cart_setdelete:hover{
		border:1px dashed red;
	}
	#cart_more_addr{
		/*float: left;*/
		margin-top:20px;
		border:1px solid #bbb;
		width: 180px;
		height: 30px;
		text-align: center;
		line-height: 30px;
	}
	#cart_more_addr:hover{
		border-color: red;
		color: red;
		cursor: pointer;
	}
	.sell_info_body ul li{
		list-style: none;
		float: left;
		width: 150px;
		margin-bottom: 20px;
		margin-top: 40px;
		text-align: center;
	}
	.sell_info_body ul li:first-child{
		width: 500px;
		position: relative;
	}
	.sell_info_body ul li:last-child{
		width: 200px;
	}
	.sell_info_top{
		color: #999;
	}
	.sell_info_line{
		height: 2px;
		width: 100%;
		margin:auto;
		background: #999;
	}
	.sell_info_body img{
		width: 60px;
		height: 60px;
		float: left;
		position: relative;
		left:50px;
		top:-10px;
	}
	.sell_info_body ul {
		
	}
	.sell_info_word {
		width: 400px;
		position: relative;
		left:80px;
		text-align: left;
	}
	.sell_info_word a{
		color: black;
		text-decoration: none;
	}
	.sell_info_word a:hover{
		color: red;
	}
	#cart_sell_clear{
		margin-top: 20px;
		float: right;
		text-align: right;
		font-size:18px;
		position: relative;
	}
	#cart_sell_clear p{
		/*float: right;*/
	}

	.cart_sell_clear_red{
		color: red;
	}
	.cart_sell_clear_divide{
		height: 50px;
	}
	.cart_sell_clear_disRight{
		position: absolute;
		right: 200px;
		width: 200px;
	}
	.cart_sell_clear_bold{
		font-weight: bold;
	}
	.cart_sell_clear_money{
		font-size:28px;
	}
	#cart_sell_clear_final{
		margin-top: 30px;
	}
	#cart_sell_clear_final div , #cart_sell_clear_final p{
		float: left;
	}
	#cart_sell_clear_final p{
		margin-right: 15px;
		margin-left: 30px;
		height: 60px;
		line-height: 60px;
	}
	#cart_sell_clear_final p a{
		text-decoration: none;
		color: blue;

	}
	#cart_sell_clear_final p a:hover{
		color: red;
	}
	#cart_sell_clear_final div{
		background: red;
		height: 60px;
		width: 180px;
		color: white;
		text-align: center;
		line-height: 60px;
		border-radius: 7px;
		margin-right: 0px;
		font-size: 25px;

	}
	#cart_sell_clear_final div:hover{
		cursor: pointer;
	}
	#cart_main_3_holder{
		height: 500px;
		margin-top:40px;
		text-align: center;
	}
	#cart_main_3_holder p{
		margin-top: 50px;
		font-size:40px;
	}
	#cart_main_3_holder div{
		margin-top: 20px;
		font-size:30px;
	}
	#cart_main_3_holder a{
		color: black;
		text-decoration: none;
	}
	#cart_main_3_holder a:hover{
		color: red;
	}
	.cart_shanchu:hover{
		color:red;
		text-decoration: underline;
		cursor: pointer;
	}
	.cart_shoucang:hover{
		color:red;
		text-decoration: underline;
		cursor: pointer;
	}
	.addr_notdefault{
		border-color: #999;
	}
</style>
<body>
	
	<div id="sub_body">
		
		<div id="cart_top">
				<ul id="cart_left">
					<li>hi</li>
					<li><a href=""><?php echo ($userInfo[0]["Name"]); ?></a></li>
					<li><a href="">退出</a></li>
					<li><a href="">余额</a><span><?php echo ($userInfo[0]["user_money"]); ?></span></li>
					<li><a href="">金币</a><span><?php echo ($userInfo[0]["user_coin"]); ?></span></li>
				</ul>
				<ul id="cart_right">
					<li><a href="<?php echo U('Index/userOrder');?>">我的订单</a></li>
					<li><a href="<?php echo U('Index/index');?>">我的酒仙网</a></li>
					<li>客服热线</li>
					<li><span><i><b>400-617-9999</b></i></span></li>
				</ul>
		</div>

		<div id="cart_focus" class="clearfix">
			<div id="cfocus_left">
				<a href="<?php echo U("Index/index");?>"><img src="__ROOT__/Home/Tpl/index/img/logo.png" alt=""></a>
			</div>
			<div id="cfocus_right">
				<div class="cart_unit">
					<div class="cart_unit_body">
						<span>1</span>
					</div>
					<p>我的购物车</p>
					<div class="cart_unit_follow">
						<div style="display:none;"></div>
						<div></div>
					</div>
				</div>
				<div class="cart_unit">
					<div class="cart_unit_body">
						<span>2</span>
					</div>
					<p>确认订单信息</p>
					<div class="cart_unit_follow">
						<div style="display:none;"></div>
						<div style="display:none;"></div>
					</div>
				</div>
				<div class="cart_unit">
					<div class="cart_unit_body">
						<span>3</span>
					</div>
					<p>成功提交订单</p>
					<div class="cart_unit_follow">
						<div style="display:none;"></div>
						<div style="display:none;"></div>
					</div>
				</div>
			</div>
		</div>

		<div id="cart_main" >
			<div id="cart_main_top" class="clearfix">
				<ul>
					<li>我的购物车</li>
					<li><?php echo ($cartCount[0]["count(*)"]); ?></li>
				</ul>
			</div>

			<form action="" method="post">
				<table>
					<tr id="table_top">
						<td><input type="checkbox"><span>全选</span></td>
						<td>商品信息</td>
						<td>单价</td>
						<td>送金币</td>
						<td>数量</td>
						<td>小计</td>
						<td>操作</td>
					</tr>
					<?php if(is_array($item)): $i = 0; $__LIST__ = $item;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$iInfo): $mod = ($i % 2 );++$i;?><tr>
							<td class="table_item_detail" >
								<input type="checkbox"name="readyGo[]">
								<img src="<?php echo ($iInfo['pic_addr']); ?>" alt="">
							</td>
							<td style="text-align:left;">
									<span style="margin-left:20px;"><a href=""><?php echo ($iInfo['item_detail']); ?></a></span>
								</div>
							</td>
							<td>￥<?php echo ($iInfo['item_price']); ?></td>
							<td><?php echo ($iInfo['sendcoin']); ?></td>
							<td>
								<div class="quantity_cal">
									<div class="quantity_cal_main">
										<div class="quantity_cal_left">-</div>
											<div class="quantity_cal_center">
												<input type="text" value="<?php echo ($iInfo['item_quantity']); ?>">
											</div>
										<div class="quantity_cal_right">+</div>
									</div>	
								</div>
							</td>

							<td class="cart_xiaoji"></td>
							<td>
								<p class="cart_shanchu"> 删除</p>
								<p class="cart_shoucang">添加收藏</p>
							</td>
							<td style="display:none"><?php echo ($iInfo['item_id']); ?></td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</table>
				<div id="cart_main_bottom" class="clearfix">
					<div id="cart_mbottm_left" >
						<input type="checkbox"><span>全选</span>
						<ul>
							<li></li>
							<li><a href="">删除选中商品</a></li>
						</ul>
					</div>
					<div id="cart_mbottm_rightone" >
						去结算
					</div>
					<div id="cart_mbottm_righttwo" >
						<p>已选商品<span></span>件总价（不含运费）：<span>￥0</span>
						</p>
					</div>
				</div>

			</form>
		</div>
		<div id="cart_main_2" style="display:none;" class="clearfix">
			<div id="cart_addr_top">
				选择收货地址
			</div>
			<div class="clearfix">
				<?php if(is_array($user_addr_default)): $i = 0; $__LIST__ = $user_addr_default;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$addr): $mod = ($i % 2 );++$i;?><div class="cart_addr_body ">
						<p><span><?php echo ($addr["addr_receiver"]); ?></span> 收</p>
						<p><?php echo ($addr["addr_content"]); ?></p>
						<p><?php echo ($addr["addr_phone"]); ?></p>
						<div class="cart_setdefault">设为默认</div>
						<div class="cart_setchange">修改</div>
						<div class="cart_setdelete">删除</div>
						<p style="display:none"><?php echo ($addr["addr_id"]); ?></p>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
				<?php if(is_array($user_addr)): $i = 0; $__LIST__ = $user_addr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$addr): $mod = ($i % 2 );++$i;?><div class="cart_addr_body addr_notdefault">
						<p><span><?php echo ($addr["addr_receiver"]); ?></span> 收</p>
						<p><?php echo ($addr["addr_content"]); ?></p>
						<p><?php echo ($addr["addr_phone"]); ?></p>
						<div class="cart_setdefault">设为默认</div>
						<div class="cart_setchange">修改</div>
						<div class="cart_setdelete">删除</div>
						<p style="display:none!important"><?php echo ($addr["addr_id"]); ?></p>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<div id="cart_more_addr">
				+ 新增收货地址
			</div>
			<div id="sell_infor" class="clearfix">
					<div class="sell_info_body ">
						<ul class="sell_info_top clearfix" >
							<li>商品信息</li>
							<li>单价</li>
							<li>数量</li>
							<li>状态</li>
							<li>小计</li>
						</ul>
						<!-- <div class="sell_info_line"></div>
						<ul class="clearfix">
							<li>
								<img src="__ROOT__/Home/Tpl/Index/img/test3.jpg" alt="">
								<div class="sell_info_word"><a href="">66°汾酒头锅原浆2500ml°汾酒头锅原浆2500m°汾酒头锅原浆2500m°汾酒头锅原浆2500m</a></div>
							</li>
							<li>￥1900.00</li>
							<li>x1</li>
							<li>有货</li>
							<li>￥1900.00</li>
						</ul> -->
						
						
					</div>
			</div>

			<div id="cart_sell_clear" class="">
				<?php if(is_array($user_addr_default)): $i = 0; $__LIST__ = $user_addr_default;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$addr): $mod = ($i % 2 );++$i;?><p><span class='cart_sell_clear_disRight'><span class="cart_sell_clear_red">1</span>件商品，商品金额：</span><span class="cart_sell_clear_distance" id="i_amount_1">￥1900.00</span></p>
					<p><span class='cart_sell_clear_disRight'>运费：</span><span class="cart_sell_clear_red cart_sell_clear_distance">+￥0.00</span></p>
					<div class="cart_sell_clear_divide"></div>
					<p ><span class="cart_sell_clear_bold">应付总金额：</span><span class='cart_sell_clear_red cart_sell_clear_money' id="i_amount_2">￥1900.00</span></p>
					<p ><span class="cart_sell_clear_bold">寄送至 </span><span id="addr_last_1"><?php echo ($addr["addr_content"]); ?></span></p>
					<p><span class="cart_sell_clear_bold">收货人：</span><span id="addr_last_2"><?php echo ($addr["addr_receiver"]); ?> <?php echo ($addr["addr_phone"]); ?></span></p>
					<div id="cart_sell_clear_final">
						<p><a href="">返回购物车</a></p>
						<div >提交订单</div>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		<div id="cart_main_3" style="display:none;">
			<div id="cart_main_3_holder">
				<p>订单提交成功</p>
				<div><a href="<?php echo U("Index/index");?>">返回首页</a></div>
				<div><a href="<?php echo U("Index/userCenter");?>">个人中心</a></div>
				<div><a href="<?php echo U("Index/userOrder");?>">查看订单</a></div>
			</div>
		</div>

		<div id="cart_body_bottom">
			
			<div id="cart_bb_top" class="clearfix">
				<ul>
					<li>猜你喜欢<div class="catt_bbt_follow"></div></li>
					<li>我的收藏<div class="catt_bbt_follow" style="display:none;"></div></li>
					<li>最近浏览<div class="catt_bbt_follow" style="display:none;"></div></li>
					<li>新品推荐<div class="catt_bbt_follow" style="display:none;"></div></li>
				</ul>
			</div>

			<div id="cart_bb_main" class="clearfix">
				<div id="cart_bbm_unit_body_1">
					<div class="cart_bbm_unit">
						<img src="__ROOT__/Home/Tpl/index/img/test2.jpg" alt="">
						<div class="cart_bbm_unit_intro"><a href="">法国(原瓶进口)法圣古堡圣威骑士干红葡萄酒750ml(6瓶装)</a></div>
						<p><b>￥99</b></p>
						<p>5201人已评价</p>
						<div style="width:250px;">
							<div class="cart_bbm_unit_buttom">
								添加购物车
							</div>
							
						</div>
					</div>
				</div>
				<div id="cart_bbm_unit_body_2"></div>
				<div id="cart_bbm_unit_body_3"></div>
				<div id="cart_bbm_unit_body_4"></div>
			</div>
		</div>
		
	</div>
	<div id="footer">
			<div id="footer_main_color">
				<div id="footer_main">
					<div id="footer_MTop">
							<div id="footer_MTopL">
								<span style="font-size:30px;color:red;"><b>400-617-9999</b></span>
							</div>
							<div id="footer_MTopL2">
								<span style="">客服热线9:00-23:00贴心服务</span>
							</div>
							<div id="footer_MTopL3">
								<input type="text"  value="请输入您的邮箱地址">
							</div>
							<div id="footer_MTopL4">
								<span style="">优惠促销早知道</span>
							</div>
							<div id="footer_MTopL_img1">
								<img src="" alt="">
							</div>
							<div id="footer_MTopL_img2">
								<img src="" alt="">
							</div>
					</div>	
					<div id="footer_MLine" style="background:#ccc;">
							
					</div>
					<div id="footer_MBottom">
							<div id="footer_MB_main">
								<div class="footer_mid">
									<ul>
										<li>新手入门</li>
										<li><a href="">购物保障</a></li>
										<li><a href="">服务协议</a></li>
										<li><a href="">发票说明</a></li>
										<div class="footer_midPic" style="background:  url(__ROOT__/Home/Tpl/Index/img/public-8.png) 0 -131px no-repeat;">
										<img src="" alt="">
										</div>
									</ul>
									<ul>
										<li>常见问题</li>
										<li><a href="">红包使用</a></li>
										<li><a href="">返现使用</a></li>
										<li><a href="">兑换码</a></li>
										<div class="footer_midPic" style="background:  url(__ROOT__/Home/Tpl/Index/img/public-8.png) -30px -131px no-repeat;">
										<img src="" alt="">
										</div>
									</ul>
									<ul>
										<li>配送说明</li>
										<li><a href="">配送时间</a></li>
										<li><a href="">配送费用</a></li>
										<li><a href="">配送范围</a></li>
										<div class="footer_midPic" style="background:  url(__ROOT__/Home/Tpl/Index/img/public-8.png) -60px -131px no-repeat;">
										<img src="" alt="">
										</div>
									</ul>
									<ul>
										<li>支付方式</li>
										<li><a href="">货到付款</a></li>
										<li><a href="">在线支付</a></li>
										<li><a href="">线下支付</a></li>
										<div class="footer_midPic" style="background:  url(__ROOT__/Home/Tpl/Index/img/public-8.png) -90px -131px no-repeat;">
										<img src="" alt="">
										</div>
									</ul>
									<ul>
										<li>售后服务</li>
										<li><a href="">品质保证</a></li>
										<li><a href="">退换货政策</a></li>
										<li><a href="">退换货流程</a></li>
										<div class="footer_midPic" style="background:  url(__ROOT__/Home/Tpl/Index/img/public-8.png) -120px -131px no-repeat;">
										<img src="" alt="">
										</div>
									</ul>
									<ul>
										<li>特色服务</li>
										<li><a href="">会员俱乐部</a></li>
										<li><a href="">企业客户</a></li>
										<li><a href="">酒仙社区</a></li>
										<div class="footer_midPic" style="background:  url(__ROOT__/Home/Tpl/Index/img/public-8.png) -150px -131px no-repeat;">
										<img src="" alt="">
										</div>
									</ul>
									<div id="footer_mid_out">
										<p>酒仙新浪微博</p>
										<div id="footer_mid_out_pic1"></div>
										<p>酒仙微信</p>
										<div id="footer_mid_out_pic2"></div>
									</div>
								</div>
								
							</div>
					</div>	
				</div>	
				<div id="footer_end">
					<div id="footer_endL">
						<p>
							<a href="">公司简介</a><span>|</span>
							<a href="">管理团队</a><span>|</span>
							<a href="">媒体报道</a><span>|</span>
							<a href="">联系我们</a><span>|</span>
							<a href="">招贤纳士</a><span>|</span>
							<a href="">友情链接</a><span>|</span>
							<a href="">网站地图</a><span>|</span>
							<a href="">品牌大全</a>
						</p>
						<p>
							<span>北京酒仙网络科技有限公司  ©  酒仙网   2011  jiuxian.com  All   Rights Reserved</span>
							<a href="">京ICP备17043395号 </a>
							<span> 京公网安备1101050188221</span>
						</p>
						<p style="margin-top:18px;color:#999;">
							<a href="">酒仙网白酒</a><span>|</span>
							<a href="">酒仙网葡萄酒</a><span>|</span>
							<a href="">开放平台招商</a><span>|</span>
							<a href="">酒仙网团购</a><span>|</span>
							<a href="">更多</a>
						</p>
						<p style="margin-top:5px;color:#999;">统一社会信用代码&nbsp&nbsp&nbsp91110302306646672B&nbsp&nbsp&nbsp食品流通许可证编号&nbsp&nbsp&nbspJY11131010328793  </p>
						<p style="margin-top:5px;color:#999;">地址：北京市北京经济技术开发区经海五路58号院8幢4层</p>
						
						<div class="endL_div">
							<p style="margin-top:5px;color:#999;width:134px;height:47px;">
								<a href=""><img src="__ROOT__/Home/Tpl/Index/img/end_1.png"></a>
							</p>
						</div>
						<div class="endL_div"> 
							<p style="margin-top:5px;color:#999;">
								<div><a href=""><img src="__ROOT__/Home/Tpl/Index/img/end_2.png" 
									style="position: relative;top:26px;"></a></div>
							</p>
						</div class="endL_div">
						<div>
							<p style="margin-top:1px;color:#999;">
								<a href=""><img src="__ROOT__/Home/Tpl/Index/img/end_3.png"
									style="position: relative;top:1px;"></a>
							</p>
						</div>
						<!-- <p style="color:red;relative;top:10px;"> -->
						<div style="margin-top:30px;margin-left:00px;color:red;">
							<span>购买前请确认达到法定饮酒年龄！酒仙网不销售任何含酒精产品给18岁以下人士！</span>	
						</div>
						
						
					</div>
					<div id="footer_endR">
						<div>
							<img src="__ROOT__/Home/Tpl/Index/img/endR_code.png" >
						</div>
						<p>
							手机酒仙网
						</p>
						<div>
							<img src="__ROOT__/Home/Tpl/Index/img/endR_code2.png" style="margin-left:4px;">
						</div>
						<p>
							微信公众号
						</p>
					</div>
				</div>			
			</div>			
		</div>
</body>
<script>

	init=chFocus();//foucs_right初始化
	init();//每执行一次，focous进度条增加
	chQuantity();//点加数量
	bottomtop();//底部栏变化
	bottombottom();//猜你喜欢等的底部按钮变化
	cart_addr_set();//地址的状态变化
	chpage();//三步页面的变化
	cart_money_1();//购物车小计和总计
	cart_button();//购物车全选和单选按钮的功能
	cart_mysql_delete();//购物车删除按钮后台功能
	cart_mysql_addCollect();//购物车收藏按钮后台功能
	addr_change();//地址栏功能
	uploadOrder();//上传订单
	$(function(){
		cart_itotal();//购物车商品总数
		cart_mtotal();//购物车价格总数
	});
	function uploadOrder(){
		$("#cart_sell_clear_final div").click(function(){

			//收集数据为数组
			len=$("#cart_mbottm_righttwo span:first").text();

			for(i=0;i<len;i++){
				go_item_id = $("input:checkbox:checked:not(:first,:last)").eq(i).parent().parent().children().last().text();
				var ttemp = $("#addr_last_2").text();
				ttemp = ttemp.split(" ");
				go_receiver = ttemp[0];
				go_addr = $("#addr_last_1").text();
				go_phone = ttemp[1];
				go_quantity = $(".sell_info_body").children().eq(i+1).children().eq(2).text().slice(1);
				go_amount = $(".sell_info_body").children().eq(i+1).children().eq(4).text().slice(1);;
				
				$.getJSON("__ROOT__/Home/Tpl/Index/mysql_cart_uploadOrder.php", { 
								   user_id: <?php echo ($userInfo[0]["UserID"]); ?>,
								   item_id : go_item_id , 
								   sell_receiver : go_receiver,
								   sell_addr : go_addr,
								   sell_phone : go_phone,
								   item_quantity : go_quantity,
								   price_amount : go_amount,
								}, function(json){
			  	alert(json);
				});


			}
			
		});
	}
	function topage2(){
		$("input:checkbox:checked:not(:first,:last)").each(function(){

			//空白标签样式
			add = "<ul>";
			add += "<li>";
			add += "<img>"
			add += "<div></div>"
			add += "</li>";
			add += "<li>";
			add += "</li>";
			add += "<li>";
			add += "</li>";
			add += "<li>";
			add += "</li>";
			add += "<li>";
			add += "</li>";
			add += "</ul>";
			//增加空白标签
			$(".sell_info_body").append(add);
			

			//获取数据
			targ = $(this).parent().parent();
			i_img = targ.find("img").attr("src");//商品图片
			i_content = targ.children().eq(1).text();//商品名称
			i_pirce = targ.children().eq(2).text();//商品单价
			i_quantity = "x"+targ.children().eq(4).find("input").val();//商品数量
			i_Totalpirce = targ.children().eq(5).text();//商品总价
			i_amount = $("#cart_mbottm_righttwo span:last").text();
			//填补数据
			index=$(this).index();
			targ=$(".sell_info_body").children().eq(index-1);
			targ.addClass("clearfix");//清除浮动
			targ.find("img").attr("src",i_img);
			targ.find("div").addClass("sell_info_word").text(i_content);
			targ.children().eq(3).text("有货");//默认有货
			targ.children().eq(4).text(i_Totalpirce);//小计
			targ.children().eq(2).text(i_quantity);//数量 格式为x5
			targ.children().eq(1).text(i_pirce);//单价
			$("#i_amount_1,#i_amount_2").text(i_amount);
			// console.log(temp);
			// temp=$(this).parent().siblings().eq(1).html();

		});
	}
	function cart_itotal(){
		var quanOfQuanxuan = 2;//全选按钮框的数量
		var len = $("input:checkbox:checked").length-quanOfQuanxuan; 
		$("#cart_mbottm_righttwo span").eq(0).text(len);//第一页
		$("#cart_sell_clear span").eq(1).text(len);//第二页
	}
	function cart_mtotal(){
		var mtotal=0;
		$("input:checkbox:checked:not(:first,:last)").each(function(){
			temp = $(this).parent().parent().find(".cart_xiaoji").text();
			temp = temp.slice(1);
			temp = parseInt(temp);
			mtotal += temp;
		});
		mtotal ="￥"+mtotal;
		$("#cart_mbottm_righttwo span:last").text(mtotal);
	}
	function addr_change(){
		//修改底部的字
		$(".cart_addr_body").click(function(){
			$(".cart_addr_body").addClass("addr_notdefault");
			$(this).removeClass("addr_notdefault");
			text_2 = $(this).children().eq(0).text();//用户名
			text_1 = $(this).children().eq(1).text();//地址
			text_2 = text_2.slice(0,-1);//去掉收字
			text_2 += " ";//添加空格
			text_2 += $(this).children().eq(2).text();//手机号码
			$("#addr_last_1").text(text_1);//显示
			$("#addr_last_2").text(text_2);//显示
		});
		$(".cart_setdefault").click(function(){
			
			//后台数据库修改
			var aid=$(this).siblings().last().text();
			$.get("__ROOT__/Home/Tpl/Index/mysql_addr_default.php",  { user_id: <?php echo ($userInfo[0]["UserID"]); ?>, addr_id: aid } ,function(data){
			  console.log(data);
			});
			
			
		});

		$(".cart_setdelete").click(function(){
			var aid=$(this).siblings().last().text();
			$.get("__ROOT__/Home/Tpl/Index/mysql_addr_delete.php",  {  addr_id: aid } ,function(data){
			  console.log(data);
			});
			//当前地址消失
			$(this).parent().hide();
		});
	}
	function cart_button(){
		// 
		$("input[type='checkbox']").prop("checked", true);

		$("input[type='checkbox']").first().click(function(){
			$("input[type='checkbox']").prop("checked", true);
		});

		$("input[type='checkbox']").last().click(function(){
			$("input[type='checkbox']").prop("checked", true);
		});
		$("input[type='checkbox']").click(function(){
			cart_itotal();
		});
	}
	function cart_mysql_delete(){
		$(".cart_shanchu").click(function(){
			var iid=$(this).parent().siblings().last().text();
			$.get("__ROOT__/Home/Tpl/Index/cart_delete.php",  { user_id: <?php echo ($userInfo[0]["UserID"]); ?>, item_id: iid } ,function(data){
			  console.log(data);
			});
			//当前商品消失
			$(this).parent().parent().hide();
		});
	}
	function cart_mysql_addCollect(){
		$(".cart_shoucang").click(function(){
			var iid=$(this).parent().siblings().last().text();
			$.get("__ROOT__/Home/Tpl/Index/cart_addCollect.php",  { user_id: <?php echo ($userInfo[0]["UserID"]); ?>, item_id: iid } ,function(data){
			  console.log(data);
			});
		});
	}
	function cart_money_1(){
			total_money=0;
			$(".cart_xiaoji").each(function(){
			//小计
			index=$(this).parent().index();
			cart_xiao_1 = "￥";
			temp = $("tr").eq(index).find(".cart_xiaoji").siblings().eq(2).text();
			cart_xiao_2 = temp.substring(1);
			cart_xiao_3 = $("tr").eq(index).find(".cart_xiaoji").siblings().eq(4).find("input").val();
			fin = cart_xiao_1 + cart_xiao_2 * cart_xiao_3;
			$("tr").eq(index).find(".cart_xiaoji").text(fin);
			
			});
	}
	function chpage(){
		
		$("#cart_mbottm_rightone").click(function(){
			init();
			$("#cart_main").hide();
			$("#cart_main_2").show();
			$("html").scrollTop(0);
			topage2();
		});
		$("#cart_sell_clear_final div").click(function(){
			init();
			$("#cart_main_2").hide();
			$("#cart_main_3").show();
			$("html").scrollTop(0);

		});
	}
	function cart_addr_set(){
		$(".cart_addr_body").mouseenter(function(){
			$(this).find("div").show();
		});
		$(".cart_addr_body").mouseleave(function(){
			$(this).find("div").hide();
		});
	}
	function bottombottom(){
		
		$(".cart_bbm_unit_buttom").mouseenter(function(){
			$(this).css({"background":"red","color":"white"});
		});
		$(".cart_bbm_unit_buttom").mouseleave(function(){
			$(this).css({"background":"white","color":"#999"});
		});
	}
	function bottomtop(){

		$("#cart_bb_top ul li").mouseenter(function(){
			$(".catt_bbt_follow").hide();
			index=$(this).index();
			$(".catt_bbt_follow").eq(index).show();
		});
	}
	function chQuantity(){
		
		$(".quantity_cal_left").click(function(){
			val= $(this).parent().find("input").val();
			val=parseInt(val);
			val -=1;
			if(val <1){
				val=1;
			}
			$(this).parent().find("input").val(val);
			cart_money_1();
			cart_mtotal();
		});
		$(".quantity_cal_right").click(function(){
			val= $(this).parent().find("input").val();

			val=parseInt(val);
			val +=1;
			$(this).parent().find("input").val(val);
			cart_money_1();
			cart_mtotal();
		});
	}
	function chFocus(){
		medium = 0;
		return function(){
			medium ++;
			if(medium == 1){
				$(".cart_unit_body").css({'background':'#bbb'});
				$(".cart_unit p").css({'color':'#bbb'});
				$(".cart_unit_body").eq(0).css({'background':'#0dd40d'});
				$(".cart_unit p").eq(0).css({'color':'#666'});
			}
			if(medium == 2){
				$(".cart_unit_body").eq(1).css({'background':'#0dd40d'});
				$(".cart_unit p").eq(1).css({'color':'#666'});
				$(".cart_unit_follow div").eq(2).show();
				$(".cart_unit_follow div").eq(3).show();
			}
			if(medium == 3){
				$(".cart_unit_body").eq(2).css({'background':'#0dd40d'});
				$(".cart_unit p").eq(2).css({'color':'#666'});
				$(".cart_unit_follow div").eq(4).show();

			}

		}	
	}


</script>
</html>
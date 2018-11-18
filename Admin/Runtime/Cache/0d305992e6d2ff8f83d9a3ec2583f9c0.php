<?php if (!defined('THINK_PATH')) exit(); session_start(); ?>

 <!doctype html>
 	<html lang="en">
 	<head>
 		<meta charset="UTF-8">
 		<title>后台主页</title>
 		<link rel="stylesheet" href="__ROOT__/public/CSS/bootstrap.min.css">
 		<script src="__ROOT__/Public/JS/jquery.min.js"></script>
 		<script src="__ROOT__/Public/JS/bootstrap.min.js"></script>
 		<link rel="stylesheet" href="__ROOT__/Admin/Tpl/Admin/CSS/mySlide.css">
 		<style>
		
		#L_main{
			position: relative;
			

		}
		.divideBox{
			border:2px solid #888;
			box-shadow: 2px 2px 2px #ddd;
			text-align: center;
			font-size: 20px;
		}
		.divideBox p{
			font-size: 40px;
		}
		input[type="file"] {
			display: inline-block;
			margin-left: 20px;
		}
		input[type="text"]{
			background: #ffb6b6;
			border:1px solid black;
		}
		form div:last-child{
			margin: 10px;
		}
		table{
			font-size: 18px;
			border:1px solid #999;
			text-align: center;
		}
		table tr td{
			padding: 10px;
			margin:10px;
			border:1px solid #999;
		}
		tr:not(:first-child) td:last-child{
			color: red;
		}
		tr:not(:first-child) td:last-child:hover{
			cursor: pointer;
			text-decoration: underline;
		}
		.jump_bar{
			float: right;
			margin-right: 5%; 
			margin-top: 20px;
		}
		.jump_bar ul li{
			list-style: none;
			font-size: 20px;
			float: left;
			margin:10px;
		}
		.jump_bar ul li:hover{
			cursor: pointer;
			color: red;
			text-decoration: underline;
		}
		.jump_bar ul li:nth-child(6):hover{
			cursor: default;
			color: black;
			text-decoration: none;
		}
 		</style>
 	</head>
 	<body>
	 		<nav class="navbar navbar-inverse">
	 		  <div class="container-fluid">
	 		    <!-- Brand and toggle get grouped for better mobile display -->
	 		    <div class="navbar-header">
	 		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	 		        <span class="sr-only">Toggle navigation</span>
	 		        <span class="icon-bar"></span>
	 		        <span class="icon-bar"></span>
	 		        <span class="icon-bar"></span>
	 		      </button>
	 		      <a class="navbar-brand" >系统后台</a>
	 		    </div>

	 		      
	 		      <ul class="nav navbar-nav navbar-right" style="position: relative;top:3px;">
	 		      	<ul class="nav nav-pills" role="tablist">
	 		      	  <li role="presentation" class="active"><a href="<?php echo U('admin/adminIndex');?>">主页</a></li>
	 		      	  <li role="presentation"><a href="./index.php">登出</a></li>
	 		      	 
	 		      	</ul>
	 		        
	 		       
	 		      </ul>
	 		    </div><!-- /.navbar-collapse -->
	 		  </div><!-- /.container-fluid -->
	 		</nav>
			<div class="row">
			 <div class="col-md-2">
				  	<div>
				  		
				  		<div class="collapsed">会员系统
				  			<div class="collapsed_body" style="display:none;">
				  				
				  				<a href="<?php echo U('admin/adminUser');?>">会员查看</a>
				  			</div>
				  			<div class="collapsed_body" style="display:none;">
				  				
				  				<a href="">备份测试</a>
				  			</div>
				  		</div>
				  		<div class="collapsed">首页广告
				  			<div class="collapsed_body" style="display:none;">
				  				
				  				<a href="<?php echo U('admin/adminAdv1');?>">首页图片</a>
				  			</div>
				  			<div class="collapsed_body" style="display:none;">
				  				
				  				<a href="<?php echo U('admin/adminAdv2');?>">首页文字</a>
				  			</div>
				  			

				  	   </div>
				  	   <div class="collapsed">订单管理
				  			<div class="collapsed_body" style="display:none;">
				  				
				  				<a href="<?php echo U('admin/ad_main_sell');?>">查看订单</a>
				  			</div>
				  	   </div>
				  	    <div class="collapsed">评论管理
				  			<div class="collapsed_body" style="display:none;">
				  				
				  				<a href="<?php echo U('admin/ad_main_rate');?>">查看评论</a>
				  			</div>
				  	   </div>
				  	    <div class="collapsed">咨询管理
				  			<div class="collapsed_body" style="display:none;">
				  				
				  				<a href="<?php echo U('admin/ad_main_consult');?>">查看咨询</a>
				  			</div>
				  	   </div>
				 	 </div>
				</div>
			  <div class="col-md-10" >
			  	<div id="L_main">
			  		<table>
						<tr>
							<td>订单号</td>
							<td>用户ID</td>
							<td>用户名字</td>
							<td>商品名称</td>
							<td>商品价格</td>
							<td>商品数量</td>
							<td>商品总价</td>
							<td>收货人名称</td>
							<td>收货人地址</td>
							<td>收货人手机</td>
							<td>创建时间</td>
							<td>操作</td>
							<!-- 点击发货 -->
						</tr>
						<?php if(is_array($sellInfo)): $i = 0; $__LIST__ = $sellInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sell): $mod = ($i % 2 );++$i;?><tr>
								<td><?php echo ($sell["sell_id"]); ?></td>
								<td><?php echo ($sell["user_id"]); ?></td>
								<td><?php echo ($sell["Name"]); ?></td>
								<td><?php echo ($sell["item_detail"]); ?></td>
								<td><?php echo ($sell["item_price"]); ?></td>
								<td><?php echo ($sell["item_quantity"]); ?></td>
								<td><?php echo ($sell["price_amount"]); ?></td>
								<td><?php echo ($sell["sell_receiver"]); ?></td>
								<td><?php echo ($sell["sell_addr"]); ?></td>
								<td><?php echo ($sell["sell_phone"]); ?></td>
								<td><?php echo ($sell["sell_createTime"]); ?></td>
								<td><?php echo ($sell["sell_state"]); ?></td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>

			  		</table>
			  		
			  	</div>
			  
			  
			</div>
			</div>

 	</body>
 	<script src="__ROOT__/Admin/Tpl/Admin/JS/mySlide.js">
 	</script>
 	<script>
 			$(function(){
 				czButton();
 				// jump_bar_fun();
 			});
 			// function jump_bar_fun(in1){

 			// 	var go_destination="__ROOT__/Admin/Tpl/Admin/jump_bar_fun.php";//查询的目标文件
 			// 	var go_table="sell";//查询的表名字
 			// 	var go_limit=15;//查询单页的限制
 			// 	var go_facor=1;//跳页因子(第几页)
 			// 	var go_count=0;//总页数

 			// 	//检查是否有输入
 			// 	in1? go_facor=in1:go_facor=1;
 			// 	//jump_bar栏的数字显示

 				
 			// 	 //总页数
 			// 	$.getJSON("__ROOT__/Admin/Tpl/Admin/jump_bar_fun.php", { 
 			// 		go_table: go_table
 			// 		}, 
 			// 		function(json){

 			// 	   	go_count = json[0]["count(*)"]/15;

 			// 	   	go_count = Math.ceil(go_count);
 			// 	   	 //斜杆前的数字
 			// 	   	$(".jump_bar span:first-child").text(go_facor);
 			// 	   	 //斜杆后的数字
 			// 	   	$(".jump_bar span:last-child").text(go_count);

 			// 	});

 				 

 				
 			// 	//添加因子改变事件
 			// 	$(".jump_bar ul li").click(function(){

 			// 		if($(this).text()!="……"){
 			// 			go_facor=$(this).text();
 			// 			jump_bar_fun(go_facor);
 			// 		}
 					
 			// 	});
 			// 	//筛选显示
 			// 	$("tr:not(:first) td:first-child").each(function(){

 			// 		//隐藏全部
 			// 		$(this).parent().hide();

 			// 		//根据第一列选择显示
 			// 		var go_judge=$(this).text();
 			// 		index = $(this).parent().index();
 			// 		medium_1 = 1+(go_facor-1)*15;
 			// 		medium_2 = 1+(go_facor)*15;
 			// 		if(index>=medium_1 && index<medium_2){
 			// 			$(this).parent().show();
 			// 		}
 			// 		console.log(medium_1);
 			// 		console.log(medium_2);

 			// 		console.log(go_facor);
 			// 	});
 			// }
 			function czButton(){
 				$("tr:not(:first)").each(function(){

 				});
 				$("tr:not(:first-child) td:last-child").click(function(){
 					if($(this).text()=="等待发货"){
 						
	 					$(this).text("等待收货");
	 					go_sell_id=$(this).siblings().first().text();

						$.getJSON("__ROOT__/Admin/Tpl/Admin/mysql_sell_sendGoods.php", { 
										   sell_id: go_sell_id
										}, function(json){
					  		alert(json);
						});
 					}
 					
					// $.get("__ROOT__/Admin/Tpl/Admin/mysql_sell_sendGoods.php",  { sell_id: 5 } ,function(data){
					//   console.log(data);
					// });
 				});
 			}
 			
 	</script>
 	</html>
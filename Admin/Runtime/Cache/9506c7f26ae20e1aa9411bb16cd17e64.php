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
							<td>评论编号</td>
							<td>商品ID</td>
							<td>商品名称</td>
							<td>用户ID</td>
							<td>用户名字</td>
							<td>评论内容</td>
							<td>点赞数量</td>
							<td>评论时间</td>
							<td>操作</td>
							<!-- 点击发货 -->
						</tr>
						<?php if(is_array($rateInfo)): $i = 0; $__LIST__ = $rateInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rate): $mod = ($i % 2 );++$i;?><tr>
								<td><?php echo ($rate["rate_id"]); ?></td>
								<td><?php echo ($rate["item_id"]); ?></td>
								<td><?php echo ($rate["item_content"]); ?></td>
								<td><?php echo ($rate["user_id"]); ?></td>
								<td><?php echo ($rate["Name"]); ?></td>
								<td><?php echo ($rate["rate_content"]); ?></td>
								<td><?php echo ($rate["rate_good"]); ?></td>
								<td><?php echo ($rate["rateTime"]); ?></td>
								<td>删除</td>
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
 			});
 			function czButton(){
 				$("tr:not(:first)").each(function(){

 				});
 				$("tr:not(:first-child) td:last-child").click(function(){

 					go_rate_id = $(this).siblings().first().text();
					$.getJSON("__ROOT__/Admin/Tpl/Admin/mysql_sell_deleteRate.php", { 
									   rate_id: go_rate_id
									}, function(json){
				  		alert(json);
					});
 					
					$(this).parent().hide();
 				});
 			}
 			
 	</script>
 	</html>
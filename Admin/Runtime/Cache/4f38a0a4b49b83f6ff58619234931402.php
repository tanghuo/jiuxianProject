<?php if (!defined('THINK_PATH')) exit(); ?>

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
		#panel_huifu{
			width: 300px;
			height: 260px;
			background: #c5c5c5;
			position: fixed;
			top:50%;
			left:50%;
			text-align: center;
			display: none;
			/*line-height: 100px;*/
		}
		#panel_huifu span{
			position: absolute;
			top: 10px;
			left :260px;
			color: red;
		}
		#panel_huifu span:hover{
			cursor: pointer;
			text-decoration: underline;
		}
		.canthuifu{
			color: #bbb!important;
			text-decoration: none!important;

		}
		.canthuifu:hover{
			cursor: not-allowed!important;
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
							<td>咨询编号</td>
							<td>商品ID</td>
							<td>商品名称</td>
							<td>用户ID</td>
							<td>用户名字</td>
							<td>咨询内容</td>
							<td>咨询回复内容</td>
							<td>评论时间</td>
							<td>操作</td>
							<!-- 点击发货 -->
						</tr>
						<?php if(is_array($consultInfo)): $i = 0; $__LIST__ = $consultInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$consult): $mod = ($i % 2 );++$i;?><tr>
								<td><?php echo ($consult["consult_id"]); ?></td>
								<td><?php echo ($consult["item_id"]); ?></td>
								<td><?php echo ($consult["item_content"]); ?></td>
								<td><?php echo ($consult["user_id"]); ?></td>
								<td><?php echo ($consult["Name"]); ?></td>
								<td><?php echo ($consult["consult_content"]); ?></td>
								<td><?php echo ($consult["consult_huifu"]); ?></td>
								<td><?php echo ($consult["consult_time"]); ?></td>
								<td>回复</td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						<div id="panel_huifu">
							<form action="__ROOT__/Admin/Tpl/Admin/mysql_consult_huifu.php" method="post">
								<p>咨询编号 : <b></b></p>
								<input type="hidden" name="consult_id">
								<textarea name="consult_huifu"  cols="30" rows="10" placeholder="请输入回复内容"></textarea>
								<span>取消</span><button>确定</button>
							</form>
						</div>
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

 				//添加禁用的样式
 				$("tr:not(:first-child) td:last-child").each(function(){
 					if($(this).prev().prev().text() != ""){
 						$(this).addClass("canthuifu");
 						console.log("jhaha");
 					}
 				});
 				$("tr:not(:first)").each(function(){

 				});
 				$("tr:not(:first-child) td:last-child").click(function(){
 					$("#panel_huifu span").click(function(){
 						$("#panel_huifu").hide();
 					});
 					if($(this).prev().prev().text() == ""){
 						$("#panel_huifu b").text($(this).siblings().first().text());
 						$("input:hidden").val($(this).siblings().first().text());
 						$("#panel_huifu").show();
 					}
 						
 				});
 			}
 			
 	</script>
 	</html>
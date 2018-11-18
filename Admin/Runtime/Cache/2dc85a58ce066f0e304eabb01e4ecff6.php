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
		#L_main div{
			font-size: 85px!important;
			position:absolute;
			top:200px;
			left:350px;
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
			</div>
			  <div class="col-md-10" >
			  	<div id="L_main">

			  		

			  		<div>欢迎来到酒仙网后台！</div>

			  		

			  	</div>
			  	
			  
			</div>
			</div>

 	</body>
 	<script src="__ROOT__/Admin/Tpl/Admin/JS/mySlide.js">


 	</script>
 	</html>
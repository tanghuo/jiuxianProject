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
				  				
				  				<a href="<?php echo U('admin/ad_main_sell');?>">查看评论</a>
				  			</div>
				  	   </div>
				 	 </div>
				</div>
			  <div class="col-md-10" >
			  	<div id="L_main">
			  		<div class="divideBox" >
			  			<p>公告信息</p>
						<form action="<?php echo U("adminModify/uploadWord");?>" method="post" enctype="multipart/form-data" name="upload-form">
							<select name="wordNum_1" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
							</select>
							条公告
							<input type="text" placeholder="请输入公告信息" name="info_detail" >
							<input type="hidden" name="originate" value="adv2_noticeInfo">
							<div><button>提交替换</button></div>
						</form>
			  		</div>
			  		<div class="divideBox" >
			  			<p>促销信息</p>
						<form action="<?php echo U("adminModify/uploadWord");?>" method="post" enctype="multipart/form-data" name="upload-form">
							<select name="wordNum_1" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
							</select>
							条公告
							<input type="text" placeholder="请输入优惠信息" name="info_detail" >
							<input type="hidden" name="originate" value="adv2_saleInfo">
							<div><button>提交替换</button></div>
						</form>
			  		</div>
			  	</div>
			  	
			  
			</div>
			</div>

 	</body>
 	<script src="__ROOT__/Admin/Tpl/Admin/JS/mySlide.js">
 	</script>
 	<script>
 			$('button').click(function(){
 				// window.location.href="kuanjia/totalTest.php";
 				console.log(11);
 			});
 			// medium_1=0;
 			// $("input[type='text']").focus(function(){
 			// 	medium_1++;
 			// 	if(medium_1==1){
 			// 		firstText = aboutText( $(this) );
 			// 		$(this).val("");
 			// 	}
 			// 	if( $(this).val()==firstText()){
 			// 		$(this).val("");
 			// 	}
 			// });
 			// $("input[type='text']").blur(function(){
 			// 	if(!$(this).val()){
 			// 		$(this).val(firstText());
 			// 	}
 				
 			// });

  
 			// function aboutText( self ){
 			// 	temp = self.val();
 			// 	return function(){
 			// 		return temp;
 			// 	}
 			// }
 	</script>
 	</html>
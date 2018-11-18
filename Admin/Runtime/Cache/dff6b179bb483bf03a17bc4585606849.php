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
			width: 150px;
		}
		form div:last-child{
			margin: 10px;
		}
		table{
			border:1px solid #999;
		}
		table tr td{
			margin: 5px;
			padding: 14px;
			border:1px solid #999;
			font-size:15px;
			color: black;
			width: 200px;
		}
		input[type="file"]{
			width: 200px;
		}
		button{
			background: #da3e3e;
			width: 100px;
			height: 60px;
			color: white;
			font-size: 20px;
			font-weight: bold;
			margin-top: 120px;
			margin-left:1100px; 
		}
		button:hover{
			 cursor: pointer;
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
			  		<form action="<?php echo U("adminModify/uploadItemInfo");?>"  method="post" enctype="multipart/form-data" name="upload-form">
						<table>
							<tr>
								<td>商品id</td>
								<td>商品名称</td>
								<td>库存</td>
								<td>商品原来价格</td>
								<td>商品现在价格</td>
							</tr>
							<tr>
								<td><input type="text" name="item_id"></td>
								<td><input type="text" name="item_name"></td>
								<td><input type="text" name="item_store"></td>
								<td><input type="text" name="item_bigprice"></td>
								<td><input type="text" name="item_price"></td>

							</tr>
							<tr>
								<td>商家名称</td>
								<td>商品编号</td>
								<td>送金币数量</td>
							</tr>
							<tr>
								<td><input type="text" name="item_shopname"></td>
								<td><input type="text" name="item_bianhao"></td>								
								<td><input type="text" name="item_sendcoin"></td>
							</tr>
								
							<tr>
								<td>商品图片1</td>
								<td>商品图片2</td>
								<td>商品详情图片1</td>
								<td>商品详情图片2</td>
								<td>商品详情图片3</td>
							</tr>
							<tr>
								<td><input type="file" name="img_cart1"></td>
								<td><input type="file" name="img_cart2"></td>
								<td><input type="file" name="img_detail3"></td>
								<td><input type="file" name="img_detail4"></td>
								<td><input type="file" name="img_detail5"></td>
							</tr>
							<tr>
								<td>商品详情图片4</td>
								<td>商品详情图片5</td>
								<td>商品详情图片6</td>
								<td>商品详情图片7</td>
							</tr>
							<tr>
								
								<td><input type="file" name="img_detail6"></td>
								<td><input type="file" name="img_detail7"></td>
								<td><input type="file" name="img_detail8"></td>
								<td><input type="file" name="img_detail9"></td>
							</tr>
						</table>
						<button>提交</button>
					</form>
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
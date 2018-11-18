<?php if (!defined('THINK_PATH')) exit(); session_start(); ?>

 <!doctype html>
 	<html lang="en">
 	<head>
 		<meta charset="UTF-8">
 		<title>后台主页</title>
 		<link rel="stylesheet" href="__ROOT__/public/CSS/bootstrap.min.css">
 		<script src="__ROOT__/public/JS/jquery.min.js"></script>
 		<script src="__ROOT__/public/JS/bootstrap.min.js"></script>
 		<link rel="stylesheet" href="__ROOT__/Admin/Tpl/Admin/CSS/mySlide.css">
 		<style>
			table{
				position: absolute;
				top:40px;
				left :390px;
				border: 2px solid #999;
				width: 1400px;
			}
			tr{
				border: 2px solid #999;


			}
			td{
				font-size: 20px;
				padding: 10px;
				border: 2px solid #999;
				text-align: center;
			}
			th{
				font-size: 30px;
				text-align: center;
				border: 4px solid #999;

			}
			.delete{
				cursor: pointer;
				z-index: 9999;
			}
			.delete:hover{
				color: red;
				
			}
			#butnbar{
				position: absolute;
				left:390px;
				top:65px;
			}
			.butnbg{
				background: red;
			}
			button{
				width: 40px;
				height: 40px;
				background: #e9f592;
				border:none;
				margin-left: 5px;
			}
			button:hover{
				background: #9396ff;
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
			  <div  style="position:relative;">
			  	<div id="L_main">
					
			  			<table>
			  				
							<tr> 
								<th>用户ID</th>
								<th>用户名</th>
								<th>创建时间</th>
								<th>查看具体</th>
								<th>操作</th>
								<th>删除</th>
							 </tr>
							
						
			  			</table>

			  	</div>
			  	
			  </div>
			  <div  style="width:300px;">
			  	
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
					  	   

					  	   <div id="butnbar">
					  	     <button >1</button>
					  	     <button>2</button>
					  	     <button >4</button>
					  	     <button >5</button>
					  	     <button >5</button>
					  	     <span >........</span>
					  	     <button >7</button>
					  	   </div>
			  </div>
			  			  		
					  		
			   
			  
			 

 	</body>
 	<script src="__ROOT__/Admin/Tpl/Admin/JS/mySlide.js">
 	</script>

 	<script>
 	var total;
 	but_val=3;//按键数字初始化
 	but_val_2=1;//读取页面
 	
 	refresh();
 	butInit();
 	// total;
 	$("button").eq(1).addClass("butnbg");
 	$("button").click(function(){
 		console.log(total);
 		but_val=$(this).text();
 		but_val_2=$(this).text();
 		but_val=parseInt(but_val);
 		butInit();

 		refresh();
 		if(but_val<=3){
	 		$("button").removeClass("butnbg");
	 		$("button").eq(but_val).addClass("butnbg");
 		}
 		if(but_val>3){
 			$("button").removeClass("butnbg");
 			$("button").eq(3).addClass("butnbg");
 		}

 		
 		if(but_val>=(total-6)){
 		$("button").removeClass("butnbg");
 		$("button").eq(but_val-total+6).addClass("butnbg");
 		}
 	});



 	function butInit(){
 		test=$.getJSON("/kuanjia/Public/mysql/mysql_init.php", { way:"butInit"} ,function(json){
 		// alert(json);
 		total=Math.ceil(json[0]["count(*)"]/15);

 		if(but_val<=3){

 			for(i=0;i<5;i++){

 				$("button").eq(i+1).text(i+1);

 				$("button").last().text(total);
 				$("span").hide();
 				$("button").eq(6).before(" <span >........</span>");

 			}
 		}
 		else if(but_val>=4 && but_val<(total-2)){
 					
 					$("span").hide();
 					$("button").eq(1).text(but_val-2);
 					$("button").eq(2).text(but_val-1);
 					$("button").eq(3).text(but_val-0);
 					$("button").eq(4).text(but_val+1);
 					$("button").eq(5).text(but_val+2);
 					$("button").eq(6).before(" <span >........</span>");
 					$("button").last().text(total);
 				

 		}

 		else if(but_val>(total-2)){
 			$("span").hide();
 			$("button").eq(1).text(total-4);
 			$("button").eq(2).text(total-4);
 			$("button").eq(3).text(total-3);
 			$("button").eq(4).text(total-2);
 			$("button").eq(5).text(total-1);
 			$("button").eq(6).text(total);
 			$("button").eq(1).before(" <span >........</span>");

 		}
 		
 		});
 	}

	
 	var ID;
 	//删除功能 搁置
 	$("body").on("click",".delete",function(){
 		ID=$(this).siblings().eq(0).text();
 		mysql_delete(ID);

 		$(this).parent().hide();
 		
 		// afterD(ID);
 		//加载的方法暂时搁置
 	})


 	function afterD(in_ID){
 		// 搁置
 		//有没有只查询一个的办法
 		$.getJSON("__ROOT__/Public/mysql/mysql_init.php", { firstID: in_ID, way:"fifteen"} ,function(json){
 			alert(json);

 			$("table").append(

 				  	"<tr>"
 					+"<td>"
 					+json[0].UserID
 					+"</td>"
 					+"<td>"
 					+json[0].Name
 					+"</td>"
 					+"<td>"
 					+json[0].CreateTime
 					+"</td>"
 					+"<td>"
 					+"查看"
 					+"</td>"
 					+"<td>"
 					+"操作"
 					+"</td>"
 					+"<td class='delete'>"
 					+"删除"
 					+"</td>"
 					+"</tr>"

 				);



 		});
 		
 	}

 	function mysql_delete(in_ID){
 			$.post("/kuanjia/Public/mysql/mysql_delete.php", {ID:in_ID} ,function(data){
 				// alert(data);
 			});
 			
 	}
 	
 	function refresh(){
 			// alert("111");
 

 		$("tr").has("td").remove();
 		$.getJSON("/kuanjia/Public/mysql/mysql_init.php", { b_val:but_val_2} ,function(json){
 			// alert(json);
 		  for(var p in json){
 		  	$("table").append(
 		  	"<tr>"
 			+"<td>"
 			+json[p].UserID
 			+"</td>"
 			+"<td>"
 			+json[p].Name
 			+"</td>"
 			+"<td>"
 			+json[p].CreateTime
 			+"</td>"
 			+"<td>"
 			+"查看"
 			+"</td>"
 			+"<td>"
 			+"操作"
 			+"</td>"
 			+"<td class='delete'>"
 			+"删除"
 			+"</td>"
 			+"</tr>"
 			);
 		  }
 		});

 	}
 	
 	
 	</script>
 	</html>
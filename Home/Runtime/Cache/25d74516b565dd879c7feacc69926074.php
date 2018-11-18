<?php if (!defined('THINK_PATH')) exit(); session_start(); ?>


 <!doctype html>
 	<html lang="en">
 	<head>

 		<meta charset="UTF-8">
 		<title>酒仙网>我的订单</title>
 		<script src="__ROOT__/Home/Tpl/Index/JS/jquery.min.js"></script>
		<link rel="stylesheet" href="__ROOT__/Home/Tpl/Index/CSS/public_top.css">
		<link rel="stylesheet" href="__ROOT__/Home/Tpl/Index/CSS/public_bottom.css">
		<link rel="stylesheet" href="__ROOT__/Home/Tpl/Index/CSS/user_left_bar.css">
	</head>
 	<style>
 		*{
 			/*position: relative;*/
 			margin: 0px;
 			padding: 0px;
 			font-family:Arial,Helvetica,sans-serif;
 		}
 		body{
 			background: #F9F9F9;
 			font-size: 12px;
 		}
 		#subBody{
 			width: 1200px;
 			margin: auto;
 		}
 		
 		#user_M{
 			width: 1200px;
 			margin: auto;
 		}
 		
        #user_M_Right{
        	padding-left: 220px;
        	padding-top: 20px;
        	position: relative;
        }
       
        
	#uRM_two{
			width: 1000px;
			position: absolute;
			top:20px;
			/*left:00px;*/
			font-size: 15px;
			text-align: center;
			height: 30px;
			line-height: 30px;
        }
        #uRM_two ul li{
        	list-style: none;
        	float: left;
        	padding-left: 20px;
        }
        .uRM_two_last{
        	/*margin-left: 600px!important;*/
        	padding-left: 600px!important;

        }
        #uRM_two ul li a:hover{
        	text-decoration: underline;
        	/*color: red;*/
        }
       
        #uRM_two ul li:first-child{
        	font-size: 25px;
        }
        
        #uRM_two_M{
			height: 250px;
			/*background: #bbb;*/
			line-height: 220px;
        }
        #uRM_two_M a{
			/*text-decoration: none!important;*/
			font-size: 15px;
			color: black!important;
        }
        #uRM_two_tubiao{
        	height: 30px;
        	width: 6px;
        	background: red;
        	position: relative;

        	left:5px;
        }
        .uRM_two_last span:first-child{
        	/*width: 300px;*/
        	/*background: red;*/
        	/*text-align: left;*/
			padding-right:100px;
        }
        .uRM_two_last span:nth-child(2){
			position: relative;
			left:-25px;
			top:12px;
        	height: 0;
			display: none;
        	border-width: 7px;

        	border-style: solid;

        	border-color: black transparent transparent transparent;
        }
        #user_M_Follow{
        	width: 160px;
        	position: absolute;
        	float: none!important;
        	top:22px;
        	left:720px;
        	display: none;
        	/*background: blue;*/
        }
        #uRM_line{
        	width: 100%;
        	height: 2px;
        	background: red;
        	margin-top: 10px;
        }
        #uRM_Nav{
        	/*float: left;*/
        	text-align: center;
        	height: 10px;
        }
        #uRM_Nav ul{
        	position:  relative;
        	top:-80px;
        	/*float: left;*/
			height: 40px!important;
			width: 100%;
        }
         #uRM_Nav ul li{
        	/*float: left;*/
			height: 40px!important;
			margin-left:50px;
			margin-right: 50px;
        }
        #uRM_Nav ul li:first-child{

        	font-size: 15px!important;
        	margin-left:40px;
			margin-right: 40px;

        }
        #uRM_Nav ul li:nth-child(2){

        	/*font-size: 15px!important;*/
        	margin-left:150px;
			margin-right: 150px;

        }
        
 	</style>
 	<body>
 	
 		<div id="topHeadCon">
			<div id="topHead_left">
				<ul id="topHead_left_ul">
					<li class="topHeadCon_notRed">欢迎来到酒仙网！<li>
					<!-- <li><a href="/kuanjia/Admin/Tpl/Admin/ad_main.php">请登录</a></li> -->
					<li><a href="<?php echo U("Index/login");?>">请登录</a></li>
					<li><a href="<?php echo U("Index/sign");?>" >免费注册</a></li>
				</ul>
			</div>
			<div id="topHead_right">
				<ul id="topHead_right_ul">
					<li id="topHead_father_one" style="margin-right:0px;">
						<a href="" id="top_changeColor">我的酒仙</a>
						<div id="topHead_right_icon1"></div>
						<div id="topHead_follow_one">
							<ul>
								<li><a href="">我的订单</a></li>
								<li><a href="">物流跟踪</a></li>
								<li><a href="">我的优惠券</a></li>
							</ul>
						</div>
					</li>
					<li style="margin-left:0px;">
						<span><a href="">CEO邮箱</a></span>
					</li>
					<li>
						<div id="topHead_right_icon2">
							
						</div><a href="<?php echo U("Index/cart");?>">购物车<span>0</span>件</a>
					</li>
					<li>
						<span><a href="">CLUB会员</a></span>
					</li>
					<li
						<i>| </i>
						<a href="">招商入驻</a>
						<i> |</i>
					</li>
					<li id="topHead_right_phone">
						<label  style="color:white;"><a href="">手机逛酒仙</a></label >	
						<div id="topHead_follow_two">
							<img src="__ROOT__/Home/Tpl/Index/img/top_code.png" id="top_img">
						</div>	
					</li>
					<div id="topHead_right_icon3"></div>    <!-- 无法很好解决图片和文字一起的位移 -->
					<li style="position:relative;"id="topHead_father_three">
						
						<i>| </i>
						<div id="topHead_right_icon4"></div>
						<a href="">网站导航</a>
						<div id="topHead_right_icon1"></div>
						<div id="topHead_follow_three">
							<p>购物</p>
							
							<table>
								<tr>
									<th>白酒</th>
									<th>葡萄酒</th>
									<th>洋酒</th>
								</tr>
								<tr>
									<th>白酒</th>
									<th>葡萄酒</th>
									<th>洋酒</th>
								</tr>
							</table>
							<p>活动</p>
							
							<table>
								<tr>
									<th>清仓</th>
									<th>进口馆</th>
									<th>整箱套装</th>
								</tr>
								<tr>
									<th>老酒特卖</th>
									<th>新品发现</th>
									<th>值得买</th>
								</tr>
							</table>
							<p>其他</p>
							
							<table>
								<tr>
									<th>会员中心</th>
									<th>社区</th>
									<th>常见问题</th>
								</tr>
								<tr>
									<th>招商入驻</th>
									<th>酒类资讯</th>
									<th>VIP注册</th>
								</tr>
							</table>	
							<p>咨询热线：<b>400-617-9999</b></p>
							
						</div>
					</li>
					<li style="position:relative;"id="topHead_father_four">
						<div id="topHead_right_icon5"></div>
						<a href="">客服服务</a>
						<div id="topHead_right_icon1"></div>

						<div id="topHead_follow_four">
								<ul>
									<li><a href="">常见问题</a></li>
									<li><a href="">配送说明</a></li>
									<li><a href="">售后服务</a></li>
								</ul>
						</div>
						</li>
					<li class="topHeadCon_notRed">
						<a href="">客服热线</a>
						<span>
							<b> 400-617-9999</b>
						</span></li>
				</ul>
				
			</div>
		</div>

		<div id="top_Foucsbox">
			
		</div>	

		<div id="midHeaderCon">
			
			<div id="headerLogo">
				<div id="midHeader_Logo">
					<a href="<?php echo U('Index/index');?>"><img src="__ROOT__/Home/Tpl/Index/img/logo.png"  
					style="width:137;height:65px;"></a>
				</div>		
				<div id="midHeader_LeftGif">
					<a href=""><img src="__ROOT__/Home/Tpl/Index/img/midHeader_LeftGif.gif" 
					></a>
				</div>	
				<div id="midSearch">
					<div id="midSearch_main">
					<input type="text" id="search_input" value="周年庆主场，一元换购美酒">
					</div>
					<a href="">
						<div id="midSearch_block"></div>
					</a>
					<a href="">
						<div id="midSearch_word">搜索</div>
					</a>
					<div id="hotWords">
						<ul>
							<li><a href="">董酒大牌日</a></li>
							<li>|</li>
							<li><a href="">茅台</a></li>
							<li>|</li>
							<li><a href="">五粮液</a></li>
							<li>|</li>
							<li><a href="">剑南春</a></li>
							<li>|</li>
							<li><a href="">郎酒</a></li>
							<li>|</li>
							<li><a href="">汾酒</a></li>
							<li>|</li>
							<li><a href="">泸州老窖</a></li>
							<li>|</li>
							<li><a href="">水井坊</a></li>
							<li>|</li>
							<li><a href="">古井贡</a></li>
							<li>|</li>
							<li><a href="">拉菲</a></li>
						</ul>
					</div>
				</div>
				<div id="midHeader_right" style="width:106px;height:43px;">
					<img src="__ROOT__/Home/Tpl/Index/img/midHeader_Right.png" alt="">
				</div>
			</div>	
		</div>
		
		<div id="navWrap" style="
			position: relative;" >
			<div id="nav" >
				<div id="navCategoryMenu">
					<span>全商品分类</span>
				</div>
				<div id="navList">
					<ul>
						<li><a href=""><div id="navList_shouye">首页</div></a></li>
						<li><a href=""><div>领券中心</div><span id="navList_pic_one"></span></a></li>
						<li><a href=""><div>值得买</div><span id="navList_pic_two"></span></a></li>
						<li><a href=""><div>葡萄酒馆</div></a></li>
						<li><a href=""><div>洋酒馆</div></a></li>
						<li><a href=""><div>酒仙甄选</div></a></li>
						<li><a href=""><div>清仓</div></a><span id="navList_pic_three"></span></li>
						<li><a href=""><div>新品</div></a></li>
						<li><a href=""><div>CLUB会员</div></a></li>
				</ul>
					<ul id="navList_right">
						<li><a href=""><img src="__ROOT__/Home/Tpl/Index/img/navList.gif" alt=""></a></li>
					</ul>
				</div>
				
				
				</div>
				<div id="nav_con" >
					<div class="nav_con1">
						<div class="nav_con1_pic"> </div>
						<span>一键选酒</span>
						<ul>
							<li style="background:#f90;color:white;"><a href="">整箱购</a></li>
							<li><a href="">家乡名酒</a></li>
							<li><a href="">年份老酒</a></li>
							<li><a href="">精品酒铺</a></li>
							<li style="background:#f90;color:white;"><a href="">值得买</a></li>
							<li><a href="">精品酒铺</a></li>
						</ul>
						<div class="nav_con1_nav"></div>
					</div>
					<div class="nav_con1">
						<div class="nav_con1_pic2"> </div>
						<span>葡萄酒</span>
						<ul>
							<li style="background:#f90;color:white;"><a href="">法国</a></li>
							<li><a href="">澳大利亚</a></li>
							<li><a href="">西班牙</a></li>
							<li><a href="">中国</a></li>
							<li style="background:#f90;color:white;"><a href="">茉莉花</a></li>
							<li><a href="">丁戈树</a></li>
						</ul>
						<div class="nav_con1_nav" style="display:none;"></div>
					</div>
					<div class="nav_con1">
						<div class="nav_con1_pic3"> </div>
						<span>洋酒</span>
						<ul>
							<li style="background:#f90;color:white;"><a href="">马爹利

							</a></li>
							<li><a href="">白兰地</a></li>
							<li><a href="">人头马</a></li>
							<div></div>
							<li><a href="">轩尼诗</a></li>
							<li style="background:#f90;color:white;"><a href="">值得买</a></li>
							<li><a href="">百龄坛</a></li>
						</ul>
						<div class="nav_con1_nav" style="display:none;"></div>
					</div>
					<div class="nav_con1">
						<div class="nav_con1_pic4"> </div>
						<span><a href="">啤酒</a>/<a href="">黄酒</a>/<a href="">养生酒</a></span>
						<ul>
							<li style="background:#f90;color:white;"><a href="">整箱购</a></li>
							<li><a href="">家乡名酒</a></li>
							<li><a href="">年份老酒</a></li>
							<li><a href="">精品酒铺</a></li>
							<li style="background:#f90;color:white;"><a href="">值得买</a></li>
							<li><a href="">精品酒铺</a></li>
						</ul>
						<div class="nav_con1_nav" style="display:none;"></div>
					</div>
					
					<div id="nav_con_son" style="display:none;">
						
						<div id="nav_con_son1">
							<div class="nav_son1_P">
								<div class="nav_son1_T">特色会场</div>
								<div class="nav_son1_ul"> 
									<ul>
										<li><a href="" style="color:red">整箱购</a></li>
										<li><a href="">精品酒铺</a></li>
										<li><a href="">年份老酒</a></li>
										<li><a href="">喜宴用酒</a></li>
										<li><a href="">实惠大坛</a></li>
										<li><a href="">有礼有面</a></li>
										<li><a href="">家乡名酒</a></li>
										<li><a href="">海外直采</a></li>
									</ul>
									</div>
								<div class="forHr" ><hr></div>
							</div>
							<div class="nav_son1_P">
								<div class="nav_son1_T">精选会场</div>
								<div class="nav_son1_ul"> 
									<ul>
										<li><a href="">新品尝鲜</a></li>
										<li><a href=""style="color:red">清仓特卖</a></li>
										<li><a href="">值得买</a></li>
										<li><a href="">名优白酒</a></li>
									</ul>
									</div>
								<div class="forHr" ><hr></div>
							</div>
							<div class="nav_son1_P">
								<div class="nav_son1_T">企业用酒</div>
								<div class="nav_son1_ul"> 
									<ul>
										<li><a href="">商务用酒</a></li>
										<li><a href="">员工福利</a></li>
										<li><a href=""style="color:red">聚餐用酒</a></li>
									</ul>
									</div>
								<div class="forHr" ><hr></div>
							</div>
							<div class="nav_son1_P">
								<div class="nav_son1_T">红洋酒专区</div>
								<div class="nav_son1_ul"> 
									<ul>
										<li><a href="">洋酒疯抢</a></li>
										<li><a href="">整箱特惠</a></li>
										<li><a href="">高分推荐</a></li>
										<li><a href=""style="color:red">送礼优选</a></li>
									</ul>
									</div>
								<div class="forHr" ><hr></div>
							</div>
							<div class="nav_son1_P">
								<div class="nav_son1_T">名庒推荐</div>
								<div class="nav_son1_ul"> 
									<ul>
										<li><a href="">名庄名窑</a></li>
										<li><a href="" style="color:red">名庄特卖</a></li>
									</ul>
									</div>
								<div class="forHr" ><hr></div>
							</div>
								
						</div>
						<div id="nav_con_son2">
							<div class="nav_son1_P">
								<div class="nav_son1_T">红葡萄酒</div>
								<div class="nav_son1_ul"> 
									<ul>
										<li><a href="" >干红</a></li>
										<li><a href="">半干红</a></li>
										<li><a href="">甜白</a></li>
										<li><a href="">半甜白</a></li>
									</ul>
									</div>
								<div class="forHr" ><hr></div>
							</div>
							<div class="nav_son1_P">
								<div class="nav_son1_T">白葡萄酒</div>
								<div class="nav_son1_ul"> 
									<ul>
										<li><a href="">干白</a></li>
										<li><a href="">半干白</a></li>
										<li><a href="">甜白</a></li>
										<li><a href="">半甜白</a></li>
									</ul>
									</div>
								<div class="forHr" ><hr></div>
							</div>
							<div class="nav_son1_P">
								<div class="nav_son1_T">桃红葡萄酒</div>
								<div class="nav_son1_ul"> 
									<ul>
										<li><a href="">干形桃红</a></li>
										<li><a href="">半干形桃红</a></li>
										<li><a href="">甜形桃红</a></li>
										<li><a href="">半甜形桃红</a></li>
									</ul>
									</div>
								<div class="forHr" ><hr></div>
							</div>
							<div class="nav_son1_P">
								<div class="nav_son1_T">国家</div>
								<div class="nav_son1_ul"> 
									<ul>
										<li><a href="">法国</a></li>
										<li><a href="">澳大利亚</a></li>
										<li><a href="">西班牙</a></li>
										<li><a href=""style="color:red">智利</a></li>
										<li><a href="">意大利</a></li>
										<li><a href="">德国</a></li>
										<li><a href="">中国</a></li>
										<li><a href=""style="color:red">南非</a></li>

										<li><a href="">葡萄牙</a></li>
										<li><a href="">美国</a></li>
										<li><a href=""style="color:red">俄罗斯</a></li>
									</ul>
									</div>
								<div class="forHr" ><hr></div>
							</div>
							<div class="nav_son1_P">
								<div class="nav_son1_T">品种</div>
								<div class="nav_son1_ul"> 
									<ul>
										<li><a href="">赤德珠</a></li>
										<li><a href="" style="color:red">美乐</a></li>
										<li><a href="">歌海娜</a></li>
										<li><a href="">霞多丽</a></li>
										<li><a href="">长相思</a></li>
										<li><a href="">马尔贝克</a></li>
										<li><a href="">添普尼洛</a></li>
									</ul>
									</div>
								<div class="forHr" ><hr></div>
							</div>
								
						</div>


							

					</div>
				</div>
		</div>
 		
 		
 		
 	<div id="user_M" class="clearfix">
 		
 		
				<?php  $temp=11; ?>
		<div id="user_M_Lfet">
	 			<div id="UM-LM">
	 				<div class="rego"><span>我的酒仙网</span></div>
	 				<a href="">
	 					<div id="u_info">
	 						<div ><img src="" alt=""></div>
	 					</div>
	 				</a>
	 				<div id="u_info_1">
		 					<div style="color:red;">用户名占位</div>
		 					<div>酒虫会员</div>
		 					<div style="color:red;">立享受CLUB会员&gt</div>
	 					</div>
	 				<div id="Money_info" style="width:189px;">
	 					<p>累积消费金额：<span><b>__ROOT__</b></span></p>
	 					<p>待确认消费金额：<span><b>0.00</b></span></p>
	 				</div>
	 				<div id="UM_Lnav">
	 					<ul>
	 						<li><b>交易管理</b></li>
	 						<li><a href="<?php echo U('Index/userOrder?');?>">我的订单</a></li>
	 						<li><a href="<?php echo U('Index/userReturn');?>">退货记录</a></li>
	 						<li><a href="<?php echo U('Index/userCllect');?>">我的收藏</a></li>
	 					</ul>
	 					<ul>
	 						<li><b>酒仙圈</b></li>
	 						<li><a href="<?php echo U('Index/userComment');?>">商品评价/晒单</a></li>
	 						<li><a href="<?php echo U('Index/userConsult');?>">购买咨询</a></li>
	 					</ul>
	 					<ul>
	 						<li><b>我的账户</b></li>
	 						<li><a href="">基本信息</a></li>
	 						<li><a href="<?php echo U("Index/userAddress");?>">收获地址</a></li>
	 					</ul>
	 				</div>
	 				<div class="rego"><span>会员俱乐部</span></div>

	 			</div>
	 			<div class="clear"></div>
	 		</div>
			

		<div id="user_M_Right" >
			<div id="uRM_two">
				<div>
					<ul>
						<li>我的收藏</li>
						<li class="uRM_two_last">
							<span> </span>
							<span> </span>
							<span> </span>
						</li>
					</ul>
					<div id="user_M_Follow" >
						<p> </p>
						<p> </p>
						<p> </p>

					</div>
					<div id="uRM_two_tubiao"></div>
				</div>
				<div id="uRM_two_M">
					<div id="uRM_line"></div>
					<div id="uRM_Nav">
						<ul>
							<li>全选</li>
							<li>商品</li>
							<li>收藏时间</li>
							<li>当前价格</li>
							<li>操作</li>
						</ul>
					</div>
					<p>没有收藏</p>
				</div>
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

 		$("#user_M_Follow p").mouseover(function(){
 			$(this).css({"background":"#ff3c27"});
 		});
 		$("#user_M_Follow p").mouseout(function(){
 			$(this).css({"background":"white"});
 		});
 		$("#user_M_Follow").mouseleave(function(){
 			$(this).hide();
 		});
 		$(".uRM_two_last").children().eq(0).click(function(){
 			$("#user_M_Follow").show();
 		});
 		



		$("#nav_con").hide();
		$("#navCategoryMenu").children().eq(0).mouseover(function(){
			$("#nav_con").show();
		});
		$("#nav_con").mouseleave(function(){
			$(this).hide();
		});

		$(".rego").mouseover(function(){
			$(this).css({'cursor':"pointer"});
		});
		$(".rego").click(function(){
			if($(this).children().text()=="我的酒仙网"){
				window.location.href="./userCenter.php"
			}
			else if($(this).children().text()=="会员俱乐部"){
				window.location.href="./userClub.php"
			}
		});


		//修正左边的大字体问题
		$("#UM_Lnav ul").children().eq(0).css({"text-decoration":"none"}).mouseover(function(){
			$(this).css({"color":"black"});
		});
		$("#UM_Lnav ul").children().eq(4).css({"text-decoration":"none"}).mouseover(function(){
			$(this).css({"color":"black"});
		});
		$("#UM_Lnav ul").children().eq(7).css({"text-decoration":"none"}).mouseover(function(){
			$(this).css({"color":"black"});
		});
		// 
		redNav();
		function redNav(){
			var str=window.location.href;
			str=str.substring(str.lastIndexOf("/")+1);
			if(str=="userOrder.php"){
				$("#UM_Lnav ul li").eq(1).css({"color":"red"});
			}
			// useReturn.php
			if(str=="useReturn.php"){
				$("#UM_Lnav ul li").eq(2).css({"color":"red"});
			}
			// userCllect.php
			if(str=="userCllect.php"){
				$("#UM_Lnav ul li").eq(3).css({"color":"red"});
			}
		}
		</script>
 		<script src="__ROOT__/Home/Tpl/Index/JS/index.js"></script>
 		
 	</html>
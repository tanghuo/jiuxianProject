<?php if (!defined('THINK_PATH')) exit(); session_start(); ?>


 <!doctype html>
 	<html lang="en">
 	<head>

 		<meta charset="UTF-8">
 		<title>酒仙网>商品界面</title>
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

 		body{
 			background: #F9F9F9;
 			font-size: 12px;
 		}
 		#subBody{
 			width: 1200px;
 			margin: auto;
 		}
 		
 		
         #item_main{
         	width: 1200px;
         	margin: auto;'

         }
         #loca ul{
         	list-style: none;
         	height: 40px;
         	line-height: 40px;
         	font-size: 13px;
         }
         #loca ul li{
         	float:left;
         	margin-left: 8px;
         	margin-right: 8px;
         }
         #loca ul li:last-child{
         	color: red;
         }
         #itemInfo_Major{
         	width: 100%;
         	height: 572px;
         }
         #itemInfo_left{
         	height: 100%;
         	width: 420px;
         	/*background: red;*/
         	float: left;
         }
         #itemInfo_center{
         	width: 558px;
         	height: 100%;
         	/*background: blue;*/
         	float: left;
         }
         #itemInfo_right{
         	width: 222px;
         	height: 100%;
         	/*background: black;*/
         	float: left;
         }
         #iIl_picMain{
         	position: relative;
         	height: 420px;
         	width: 420px;
         	background: black;
         }
          #iIl_picMain img{
         	height: 420px;
         	width: 420px;
         	/*background: ;*/
         }
         .iIl_picSub{
         	margin-top:25px;
         	width: 120px;
         	height: 120px;
         	float: left;
         	cursor: pointer;
         	margin-left: 5px;
         }
         .iIl_picSub img{
         	width: 120px;
         	height: 120px;
         }
         .iIl_picSubFocus{
         	/*border:1px solid red;*/
         	outline-width: 2px;
         	outline-style: solid;
         	outline-color: red;
         }
         #picMedium{
         	position: absolute;
         	top:0px;
         	left:0px;
         	width: 200px;
         	height: 200px;
         	background: #ccd82e;
         	opacity: 0.4;
         	display: none;
         }
         #info_bigPic{
            z-index:999;
         	position: absolute;
         	top:0px;
         	left: 0px;
         	background: red;
         	width: 420px;
         	height: 420px;
         	overflow: hidden;
         	display: none;
         }
         #itemInfo_center{
         	position: relative;
         }
         #info_bigPic img{
         	position: relative;
         	/*top:-100px;*/
         	/*left:-100px;*/
         	width: 882px;
         	height: 882px;
         }
         table{
         	margin-left :20px;
         }
         #infoT_main{
         	margin-left :20px;
         	font-size: 22px;
         }
         #infoT_sub{
         	margin-left :20px;
         	font-size: 14px;
         	color: red!important;
         }
         table{
         	color: #999;
         }
         table td{
         	padding: 13px;
         	font-size: 16px;
         	height: 25px;
         	line-height: 25px;
         }
         #info_money{
         	color: red!important;
         	font-size: 34px;
         }
         .info_redBack{
         	background: red;
         	color: white!important;
         	padding: 2px;
         	margin-right: 5px;
         }
         .info_redFont{
         	color: red!important;
         }
         form input{
         	width: 40px;
         	height: 30px;
         	font-size: 20px;
         	/*padding-bottom: 5px;*/
         	text-align: center;
         	/*float: left;*/
         }
         #quantity_control{
         	/*float: left;*/
         	display: inline-block;
         	position: relative;
         	top:8px;

         }
         #quantity_control div{
         	border:1px solid #666;
         	height: 13px;
         	width: 13px;
         	text-align: center;
         	line-height: 13px;
         	margin: 2px;
         	cursor: pointer;
         }
         #info_cart{
         	background: #cc3333;
         	height: 50px;
         	width: 70%;
         	/*width: 20px;*/
         	line-height: 50px;
         	text-align: center;
         	font-size: 25px;
         	color: white;
         	cursor: pointer;
         }
         #iIr_shopname{
         	text-align: center;
         	font-size: 15px;
         	/*width: 150px;*/
         	text-align: center;
         	color: #999;
         }
         #iIr_shopname p{
         	margin:5px; 
         }
         #iIr_shopname p span{

         	background: red;
         	padding: 3px;
         	border-radius: 3px;
         	color: white;
         	/*width: 150px;*/
         	/*width: 60%;*/
         }
         #iIr_sub ul li{
         	list-style: none;
         	margin-left: 60px;
         	padding: 5px;
         	font-size: 14px;

         }
          #iIr_sub ul li:first-child{
         	list-style: none;
         	/*margin-left: 70px;*/
         	padding: 5px;
			margin-top: 20px;
         }
         #iIr_sub ul li:nth-child(2n){
         	color: #999;
         }
         #iIr_end{
         	font-size: 16px;
			margin-top: 20px;
         	margin-left: 60px;
         	height: 25px;
         	line-height: 25px;
         	position: relative;
         }
         #iIr_end img{
         	position: relative;
         	top:3px;
         }
         #Minfo_end{
         	margin:10px;
         	margin-top: 10px;
         	font-size: 15px;
         }
         #Minfo_end span:first-child{
         	margin-left: 150px;
         	margin-right: 20px;
         }
         #item_recommend{
         	width: 1200px;
         	margin:auto;
         	height: 280px;
         	margin-top: 30px;
         	/*margin-bottom: 10px;*/
         }
         #ir_nav ul li{
         	list-style: none;
         	font-size: 20px;
         	height: 25px;
         	line-height: 25px;
         	text-align: center;
         	color: red;
         	margin-left:30px;
         	width: 80px;
         	position: relative;
         }
         #ir_nav ul li div{
			position: absolute;
			top :-10px;
			left:-20px;
			width: 120px;
			height: 3px;
			background: red;

         }
         #ir_nav_con{
         	margin-top:10px;
         }
         #ir_nav_con_L{
         	width: 160px;
         	font-size: 13px;
         	float: left;
         }
         #ir_nav_con a{
			text-decoration: none;
         	color: #000;
         }
         #ir_nav_con a:hover{
			text-decoration: underline;
         	color: red;

         }
         #ir_nav_con_C{
         	float: left;
         	/*background: red;*/
         	width: 900px;
         	height: 215px;

         }
         #ir_nav_con_C ul li{
         	list-style: none;
         	width: 160px;
         	/*float: left;*/
         	display: inline-block;

         	margin-left: 30px;
         	margin-right: 30px;
         }
         #ir_nav_con_C ul li div:last-child{
         	color: red;
         	font-size: 20px;
         	text-align: right;
         }
         #ir_nav_con_C_sub{
         }
         #ir_nav_con_C ul {
         	width: 900px;
         	overflow-x: scroll;
			overflow-y: hidden;
			white-space:nowrap; 
			padding-bottom: 10px;
         }
         #form_recommend input[type="checkbox"]{
			width: 15px;
			height: 15px;
         }
         #ir_nav_con_C_R span{
			color: red;
         }
          #ir_nav_con_C_R span:last-child{
			font-size: 20px;
          }
         #ir_nav_con_C_R{
         	float: left;
         	font-size: 15px;
         	color: #666;
         	text-align: left;
         	padding-left: 00px;
         }
         #ir_nav_con_C_R div{
         	margin-top: 20px;
         	margin-bottom: 20px;
         }
         #ir_nav_con_C_R div:last-child{
         	margin-top: 10px;
         	text-align: center!important;		
         	background: red;
         	color: white;
         	height: 40px;
         	line-height: 40px;
         	font-size: 18px;
         	cursor: pointer;
         }
         #item_detail{
         	width: 1200px;
         	margin: auto;
         }
         #item_detail_L{
         	width: 145px;
         	height: 100px;
         	/*display: inline-block;*/
         	float: left;
         }
         #item_detail_R{
         	/*display: inline-block;*/
         	float: left;
         	width: 1055px;
         }
         #item_detail_R_Nav ul li{
         	position: relative;
			list-style: none;
			font-size: 15px;
			display: inline-block;
			padding: 15px;
			font-size: 16px;
			margin-top: 20px;
			cursor: pointer;
         }
         #item_detail_R_Nav ul li div{
         	width: 100%;
         	height: 2px;
         	background: red;
         	position: absolute;
         	top: -6%;
         	left:-0px;
         	display: none;
         }
         #item_detail_R_Nav span{
			color: blue;
         }
         #item_detail_one ul li{
         	width: 200px;
         	list-style: none!important;
         	display: inline-block;
         	margin: 10px;
         	text-align: left;
         	font-size: 15px;
         }
         #item_detail_one{
         	margin-left: 40px;
         	margin-top: 30px;
         }
         #item_detail_picwall p{
         	font-size: 20px;
         	color: #666;
         	margin-top: 60px;
         	margin-bottom: 20px;
         }
         #item_detail_picwall div{
         	position: relative;
         }
         #item_detail_picwall img{
			/*height: 500px;*/
			width:100%;
			padding: 0px!important;
			margin:0px!important;
			position: relative;
			vertical-align: middle;
         }
         #item_detail_picwall div:last-child{
         	font-size:16px;
         	margin-left: 30px;
         	margin-top:60px;
         }
         #ic_resume{
         	width: 1200px;
         	height: 128px;
         }
         #item_comment{
         	/*height: 500px;*/
         }
         #ic_resume_L{
			width: 126px;
			margin-left:10px;
			float: left;
			margin-top: 10px;
         }
         #ic_resume_L_big{
			height: 70px;
			line-height: 70px;
         	font-size: 40px;
         	color: red;
         	text-align: center;
         }
         #ic_resume_L_small{
         	text-align: center;
         	font-size: 18px;
         	color: #888;
         }
         #ic_resume_C{
         	float: left;
         	width: 700px;
         	margin-top: 20px;
         }
         #ic_resume_C ul li{
         	list-style: none;
         	float: left;
			text-align: center;
			width: 150px;
			font-size: 15px;
			margin-bottom: 7px;
         }
         #ic_resume_C a{
         	color: black;
         }
         #ic_resume_C div:first-child{
         	color: #888;
         	font-size: 15px;
         	margin-bottom: 5px;
         }
         #ic_resume_R{
         	font-size: 16px;
         	margin-top: 40px;
         }
          #ic_resume_R p{
         	/*font-size: 16px;*/
         	margin-bottom: 10px;
         }
          #ic_resume_R p:first-child{
         	font-size: 20px;
         	color: #333;
         }
         #ic_resume_R span{
         	color: red!important;
         }
         #ic_resume_R a{
         	color: blue!important;
         }
         #comment_main{
         	width: 100%;
         	margin-left:30px;
         }
         #comment_main p{
			height: 30px;
			margin-top: 30px;
			font-size: 20px;
			color: #888;
         }
         .itc_L div:first-child{
         	width: 80px;
         	height: 80px;
         	border-radius: 80px;
         	background: red;
         	margin-top: 20px;
         	margin-bottom: 10px;
         }
         .ic_resume_L{
         	width: 80px;
         	/*float: left;*/
         }
         .itc_L{
         	width: 80px;
         	text-align: center;
         	float: left;
         }
         .itc_L span{
         	text-align: center;
         	font-size: 15px;
         	margin-top: 10px;
         }
         .ic_resume_C{
         	/*float: left;*/
         	width: 1000px;
         	height: 50px;
         	background: blue;
         }
         .itc_C {
         	width: 750px;
         	/*padding-left: 30px;*/
         	float: left;
         }
         .itc_C span{
         	/*margin-left:10px;*/
         	padding: 20px;
         	font-size: 14px;
         }
         .user_said{
         	/*padding: 30px;*/
         	margin-left: 20px;
         	position: relative;
         }
         
         #consult_main{
            width: 1200px;
            margin-left:30px;
            margin-top: 50px;
         }
         #consult_main p{
         height: 30px;
         margin-top: 30px;
         font-size: 20px;
         color: #888;
         /*margin-left: 230px;*/

         /*margin-left: 30px;*/
         }
         #consult_main p:first-child){
            margin-left: 0px!important;
         }
         .user_said p{
         	/*position: relative;*/
         	/*float: right;*/
         	font-size: 13px!important;
         	color: black!important;
         	display: inline-block;

         }
         .user_said p:last-child{
         	font-size: 13px!important;
         	color: black!important;
         	margin-left: 500px;
         }
         .itc_R{
			float: left;
         }
         .itc_R div{
         	position: relative;
         	top:60px;
         	left: 10px;
         	width: 80px;
			height: 30px;	
			border-radius: 10px;
			border:2px solid #888;
			text-align: center;
			line-height: 30px;
         }
         .itc_R p{
         	margin-top:0!important;
         	color: red!important;
         }
         
         #item_detail_L ul li{
			list-style: none;
			color: black;
			font-size: 16px;
			]position: relative;
         }
          .item_detail_L_follow{
			position: relative;
			top:-20px;
			left:-8px;
			width: 4px;	
			height: 20px;
			background: red;
          }
          /*table */
          #item_detail_L table{
          	margin-left:0!important;
          }
          #item_detail_L table td{
          	margin:0px!important;
          	padding:5px!important;
          	font-size: 13px;
          }
          .idL_Model{
          	/*font-size: 10px;*/
          }
          .idL_Model a{
          	margin: 0!important;
          	padding:0px!important;
          }
          .idL_Model a p{
          	width: 130px;
          	overflow:hidden;
          	white-space:nowrap; 
          	text-overflow:ellipsis; 
          }
          .idL_Model span{
          	color: red;
          }
          .for_consult{
            height: 80px;
            width: 80px;
            float: left;
            text-align: center;
          }
          .for_consult img{
            width: 60px;
            height: 60px;
            border-radius: 60px;
            background: red;
            float: left;
            position: relative;
          }
          .for_consult p{
            height: 20px;
            margin-left: -12px;
            margin-bottom: -4px;
          } 
          .consult_content{
            height: 30px;
          }
          .consult_content p{
            position: relative;
            top:-20px;
          }
          .consult_content p:last-child{
            position: relative;
            top:-40px;
            left : 79px;
          }
          /*.con_huidap{
            position: relative;
            top:-50px;
            left : 50px;
          }*/
 	</style>
 	<body>

 	   <!-- <?php echo ($id); ?>
      <?php echo ($pic_addr[0][pic_addr]); ?>
      <?php if(is_array($pic_addr)): $i = 0; $__LIST__ = $pic_addr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$date): $mod = ($i % 2 );++$i;?><p><?php echo ($date["pic_addr"]); ?></p><?php endforeach; endif; else: echo "" ;endif; ?> -->
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
 		
 		
 		<div id="item_main">
 			
			<div id="top_Focus"><img src="__ROOT__/Home/Tpl/Index/img/item_top.jpg" alt=""></div>

			<div id="loca">
				<ul>
					<li><a href="">首页</a></li>
					<li>&gt</li>
					<li><a href="">白酒</a></li>
					<li>&gt</li>
					<li><a href="">白酒</a></li>
					<li>&gt</li>
					<li >
                  <?php echo ($selldate[0][item_detail]); ?>
               </li>

				</ul>
			</div>
			<div id="itemInfo_Major">
				<div id="itemInfo_left">
					<div id="iIl_picMain"><img src="<?php echo ($pic_addr[0][pic_addr]); ?>" alt=""><div id="picMedium"></div></div>
					<div class="iIl_picSub"><img src="<?php echo ($pic_addr[0][pic_addr]); ?>" alt=""></div>
					<div class="iIl_picSub"><img src="<?php echo ($pic_addr[1][pic_addr]); ?>" alt=""></div>
					
					
				</div>
				<div id="itemInfo_center">
					<div id="info_bigPic">
						<img src="<?php echo ($pic_addr[0][pic_addr]); ?>" alt="">
					</div>
					<div id="iIc_info">
						<div id="infoT_main"><b><?php echo ($selldate[0][item_detail]); ?></b></div>
						<div id="infoT_sub">性价比之王，爆款推荐，口粮好酒 本产品为预售产品，7-10个工作日发货。</div>
						<form action="<?php echo U('Index/mysql_cart_settlement');?>" method="post">
							<table>
								<!-- <?php echo U(adminModify/cart_settlement);?> -->
								<tr>
									<td>酒仙价</td>
									<td style="text-decoration:line-through ">￥<?php echo ($selldate[0][bigPrice]); ?></td>
								</tr>
								<tr>
									<td>促销价</td>
									<td id="info_money"><b>￥<?php echo ($selldate[0][item_price]); ?></b></td>
								</tr>
								<tr>
									<td></td>
									<td><span class="info_redBack">限时抢购</span><span class="info_redFont">限时抢购</span></td>
								</tr>
								<tr>
									<td></td>
									<td><span class="info_redBack">金币优惠</span><span class="info_redFont">买即享3倍金币</span></td>
								</tr>
								<tr>
									<td></td>
									<td>累计销量&nbsp<span>10607</span> &nbsp&nbsp 酒友评分&nbsp<span>5.0</span>&nbsp&nbsp 送金币&nbsp<span><?php echo ($selldate[0][sendcoin]); ?></span></td>
								</tr>
								<tr>
									<td>库存</td>
									<td><span><?php echo ($selldate[0]["item_store"]); ?></span></td>
								</tr>
								<tr>
									<td>数量</td>
									<td><input id="cart_final" type="text" value="1" name="buy_quantity"> 
										<div id="quantity_control">
											<div>+</div>
											<div>-</div>

										</div>
										<span class="info_redFont" style="margin-left:10px;">每购买2瓶，即赠送原厂手提袋1个</span>
									</td>
								</tr>
								<tr>
									<td><input type="hidden" name="id" value="<?php echo ($id); ?>"></td>
									<td ><div id="info_cart">加入购物车</div></td>
								</tr>
								<tr>
									<td>提示</td>
									<td>此商品不能使用优惠券</td>
								</tr>


							</table>
						</form>
					</div>

				</div>
				
				<div id="itemInfo_right">
					<div id="iIr_shopname">
						<img src="__ROOT__/Home/Tpl/Index/img/iteminfo_shopName.jpg" alt="">
						<p><?php echo ($selldate[0]["item_belong"]); ?></p>
						<p><span>酒仙自营</span></p>
					</div>
					<div id="iIr_sub">
						<ul>
							<li>售后无忧</li>
							<li>7天无理由退换货</li>
							<li>售后补充</li>
							<li>啤/老酒无理由不退换</li>
							<li>满100包邮</li>
							<li>全场满100包邮</li>
							<li>正品保障</li>
							<li>厂家直供 品质放心</li>
						</ul>
					</div>
					<div id="iIr_end">
						<div><img src="__ROOT__/Home/Tpl/Index/img/itenInfo_kefu.png" alt=""><span>在线客服</span></div>
						
					</div>
				</div>
			</div>
			<div id="Minfo_end">
				<p>商品编号：<?php echo ($selldate[0][item_bianhao]); ?> <span>分享</span><span>收藏</span>(<span>181</span>)</p>
			</div>

 		</div>
 		
 		<div id="item_recommend" >
 			<div id="ir_nav">
 				<ul>
 					<li>推荐组合<div></div></li>
 				</ul>
 			</div>
 			<form  id="form_recommend"action="">
	 			<div id="ir_nav_con">
	 				<div id="ir_nav_con_L">
	 					<a href=""><img src="__ROOT__/Home/Tpl/Index/img/item_focusbox1.jpg" alt=""></a>
	 					<div><a href="">【习酒特卖】53°银质习酒500ml</a></div>
	 				</div>
	 				<div id="ir_nav_con_C">
	 					<div id="ir_nav_con_C_sub">
		 					<ul>
			 					<li>
			 						<a href=""><img src="__ROOT__/Home/Tpl/Index/img/Gundongtiao1.jpg" alt=""></a>
									<div><a href="">53°红习酱500ml(6瓶装)+52°习牌特</a></div>
									<div><input type="checkbox" name="select_Recommend[]">￥368.00</div>
			 					</li>
			 					<li>
			 						<a href=""><img src="__ROOT__/Home/Tpl/Index/img/Gundongtiao2.jpg" alt=""></a>
									<div><a href="">53°红习酱500ml(6瓶装)+52°习牌特</a></div>
									<div><input type="checkbox" name="select_Recommend[]">￥33458.00</div>
			 					</li>
			 					<li>
			 						<a href=""><img src="__ROOT__/Home/Tpl/Index/img/Gundongtiao3.jpg" alt=""></a>
									<div><a href="">53°红习酱500ml(6瓶装)+52°习牌特</a></div>
									<div><input type="checkbox" name="select_Recommend[]">￥363458.00</div>
			 					</li>
			 					<li>
			 						<a href=""><img src="__ROOT__/Home/Tpl/Index/img/Gundongtiao4.jpg" alt=""></a>
									<div><a href="">53°红习酱500ml(6瓶装)+52°习牌特</a></div>
									<div><input type="checkbox" name="select_Recommend[]">￥3678.00</div>
			 					</li>
			 					<li>
			 						<a href=""><img src="__ROOT__/Home/Tpl/Index/img/Gundongtiao5.jpg" alt=""></a>
									<div><a href="">53°红习酱500ml(6瓶装)+52°习牌特</a></div>
									<div><input type="checkbox" name="select_Recommend[]">￥68.00</div>
			 					</li>
		 					</ul>

	 					</div>
	 					
	 				</div>
	 				<div id="ir_nav_con_C_R">
	 					<div>已选择<span>0</span>个商品</div>
	 					<div>搭配价：￥<span>108.00</span></div>
	 					<div>购买套装</div>
	 				</div>
	 			</div>
			</form>
 		</div>
 		<div id="item_detail" class="clearfix">
 			<div id="item_detail_L" >
 				<ul>
 					<li>
 						<p>相关分类</p><div class="item_detail_L_follow "></div>
						<table>
							<tr>
								<td><a href="">白酒</a></td>
								<td><a href="">葡萄酒</a></td>
							</tr>
							<tr>
								<td><a href="">洋酒</a></td>
								<td><a href="">黄酒</a></td>
							</tr>
							<tr>
								<td><a href="">养生酒</a></td>
								<td><a href="">啤酒</a></td>
							</tr>
							<tr>
								<td><a href="">果酒</a></td>
								<td><a href="">酒具</a></td>
							</tr>
						</table>
						
 					</li>
 					<li>
 						<p>推荐品牌</p>
 						<div class="item_detail_L_follow"></div>
						<table>
							<tr>
								<td><a href="">酒鬼酒</a></td>
								<td><a href="">羊酒</a></td>
							</tr>
							<tr>
								<td><a href="">五粮液</a></td>
								<td><a href="">扳倒井</a></td>
							</tr>
							<tr>
								<td><a href="">郎酒</a></td>
								<td><a href="">杏花村</a></td>
							</tr>
							<tr>
								<td><a href="">龙驹</a></td>
								<td><a href="">渝北老窖</a></td>
							</tr>
						</table>

 					</li>
 					<li><p>酒友推荐</p><div class="item_detail_L_follow"></div>
						<div class="idL_Model">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/item_L_1.jpg" alt=""></a>
							<a href=""><p>【酒厂直营】52度 泸州老</p></a>
							<p><span>￥100.00</span></p>
						</div>
						<div class="idL_Model">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/item_L_1.jpg" alt=""></a>
							<a href=""><p>【酒厂直营】52度 泸州老</p></a>
							<p><span>￥100.00</span></p>
						</div>
						<div class="idL_Model">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/item_L_1.jpg" alt=""></a>
							<a href=""><p>【酒厂直营】52度 泸州老</p></a>
							<p><span>￥100.00</span></p>
						</div>
 					</li>
 					
 					<li><p>买了又买</p><div class="item_detail_L_follow"></div>
						<div class="idL_Model">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/item_L_1.jpg" alt=""></a>
							<a href=""><p>【酒厂直营】52度 泸州老</p></a>
							<p><span>￥100.00</span></p>
						</div>
						<div class="idL_Model">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/item_L_1.jpg" alt=""></a>
							<a href=""><p>【酒厂直营】52度 泸州老</p></a>
							<p><span>￥100.00</span></p>
						</div>
 					</li>
 					<li><p>看了又看</p><div class="item_detail_L_follow"></div>
 						<div class="idL_Model">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/item_L_1.jpg" alt=""></a>
							<a href=""><p>【酒厂直营】52度 泸州老</p></a>
							<p><span>￥100.00</span></p>
						</div>
						<div class="idL_Model">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/item_L_1.jpg" alt=""></a>
							<a href=""><p>【酒厂直营】52度 泸州老</p></a>
							<p><span>￥100.00</span></p>
						</div>
 					</li>
 				</ul>
 			</div>
 			<div id="item_detail_R">
 				<div id="item_detail_R_Nav">
 					<ul>
 						<li>商品详情<div></div></li>
 						<li>规格参数<div></div></li>
 						<li>累计评价<span><?php echo ($rate_amount[0]["count(*)"]); ?></span><div></div></li>
 						<li>商品咨询<div></div></li>
 						<li>商品辨真伪<div></div></li>
 					</ul>
 				</div>
 				<div id="item_detail_Main_one">
 					<div id="item_detail_one">
 						<p>
 							<ul>
 								<li>香型：酱香型</li>
 								<li>原料：水、高粱、小麦</li>
 								<li>储藏条件：常温、干燥处保存</li>
 							</ul>
 						</p>
 						<p>
 							<ul>
 								<li>贮藏条件：常温、干燥处保存</li>
 								<li>净含量：500ml</li>
 								<li>箱规：1*6</li>
 							</ul>
 						</p>
 					</div>

					<div id="item_detail_picwall">
						<p>商品特点</p>
						<div style="width:900px;margin:auto;">
                    
                     <?php if(is_array($pic_addr)): $i = 0; $__LIST__ = array_slice($pic_addr,2,null,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$date): $mod = ($i % 2 );++$i;?><img src="<?php echo ($date["pic_addr"]); ?>" alt=""><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
						<div>如发现商品介绍信息有误，您可以点击<a href="">信息纠错</a>反馈给我们，谢谢。</div>

					</div>


 				</div>
 				<div id="item_comment" >
 					<div id="ic_resume">
 						<div id="ic_resume_L">
 							<div id="ic_resume_L_big"><b>98</b>%</div>
 							<div id="ic_resume_L_small">好评率</div>
 						</div>
 						<div id="ic_resume_C">
 							<div>大家都认为</div>
 							<div>
 								<ul>
 									<a href=""><li>酱香突出(<span>150</span>)</li></a>
 									<a href=""><li>品质好酒(<span>150</span>)</li></a>
 									<a href=""><li>酱香突出(<span>150</span>)</li></a>
 									<a href=""><li>酒香芬芳(<span>150</span>)</li></a>
 									<a href=""><li>窖香柔和(<span>150</span>)</li></a>
 									<a href=""><li>送货快(<span>150</span>)</li></a>
 									<a href=""><li>包装给力(<span>150</span>)</li></a>
 									<a href=""><li>口味醇正(<span>150</span>)</li></a>
 									<a href=""><li>多次购买(<span>150</span>)</li></a>
 									<a href=""><li>老牌名酒(<span>150</span>)</li></a>
 								</ul>
 							</div>
 						</div>
 						<div id="ic_resume_R">
 							<p>评论获积分</p>
 							<p>前5名额外<span> 5-15</span>金币</p>
 							<p><a>积分规则 </a>|<a> 发表评论</a></p>

 						</div>
 						
 					</div>
 					
 				</div>
 				<div id="comment_main">
               
 					<p> 全部(<span><?php echo ($rate_amount[0]["count(*)"]); ?></span>)</p>
               <?php if(is_array($rateInfo)): $i = 0; $__LIST__ = $rateInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rate): $mod = ($i % 2 );++$i;?><div class="item_user_comment clearfix">
    						<div class="itc_L">
    							<div><img src="" alt=""></div>
    							<span ><?php echo ($rate["Name"]); ?></span>
    						</div>
    						<div class="itc_C">
    							<div class="user_said">
    								<div>
    									<p>评分：<span><?php echo ($rate["rate_level"]); ?></span></p>
    									<p><?php echo ($rate["rateTime"]); ?></p>
    								</div>
    								
    								<span><?php echo ($rate["rate_content"]); ?></span>
    							</div>
    						</div>
    						<div class="itc_R">
    							<div>
    								<p>赞 <span><?php echo ($rate["rate_good"]); ?></span></p>
    							</div>
    						</div>
    					</div><?php endforeach; endif; else: echo "" ;endif; ?>
 				</div>
            <div id="consult_main">
               <p>商品咨询</p>
               <?php if(is_array($item_consult)): $i = 0; $__LIST__ = $item_consult;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ic): $mod = ($i % 2 );++$i;?><div class="for_consult clearfix" >
                     <div><img src="" alt=""></div>
                     <p><?php echo ($ic["Name"]); ?></p>
                  </div>
                  <div class="clearfix">
                     <div class="consult_content clearfix">
                        <div>
                           <p>&nbsp&nbsp 问题: <span class="wenti"><?php echo ($ic["consult_content"]); ?></span></p>
                           <span></span>
                        </div>
                        <div>
                           <p class="con_huidap">&nbsp&nbsp 回答: <span class="huida"><?php echo ($ic["consult_huifu"]); ?></span></p>
                        </div>
                     </div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>
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
      go_form();//绑定表单提交事件
      cart_itemadd();//购物车数量加减
 		detail_nav();
 		function detail_nav(){
 			$("#item_detail_R_Nav ul li").eq(0).find("div").show();
 			$("#item_detail_R_Nav ul li").click(function(){
 			$("#item_detail_R_Nav ul li div").hide();
 			$(this).find("div").show();
 		});
 		}
 		
 		var e=window.event;
 		// console.log(window.event);
 		$("#iIl_picMain").mousemove(function(e){
 			// console.log(11);
 			MouseX=e.clientX;
 			MouseY=e.clientY;
 			// console.log(e);
 			picX=$("#iIl_picMain").position().left;
 			picY=$("#iIl_picMain").position().top;
 			winmove=document.documentElement.scrollTop;
 			MouseY +=winmove;
 			abX=MouseX-picX-100;
 			abY=MouseY-picY-100;
 			if(abX>-100&& abX<420 && abY>-100 && abY<420){
 				$("#picMedium").show();
 				$("#info_bigPic").show();
 				
 			}
 			if(MouseX<picX+100){
 					abX=0;
 				}
 			if(MouseX>picX+320){
 					abX=220;//axX都是红色方块左上角的坐标
 				}
 			if(MouseY<picY+100){
 					abY=0;
 				}
 			if(MouseY>picY+320){
 					abY=220;//axY都是红色方块左上角的坐标
 				}
 			$("#picMedium").css({"left":abX,"top":abY});


 			$("#info_bigPic img").css({left:-(abX*2),top:-(abY*2)})
 		});
 		go_local();//本页面的几个跳转
      function go_local(){
         $("#item_detail_R_Nav ul li").click(function(){
            index=$(this).index();

            switch (index)
            {
               case 0:

               break;
               case 1:
               // item_detail_one
               window.location.hash="#item_detail_one";
               break;
               case 2:
               window.location.hash="#ic_resume_L_big";
               break;
               case 3:
               window.location.hash="#comment_main";
               break;
               case 4:
               window.location.hash="";
               break;
            }

         });
      }
 		function kefuAnime_Medium(){
 			var temp=0;
 			// var temp2=0;
 			return function(){
 				// speed=
 				kefu_position=$("#iIr_end img").css("top");
 				kefu_position=parseInt(kefu_position);
 				temp2 =1;
 				temp+=1;
 				if(temp>5){
 					temp2=-1
 				}
 				if(temp>=10){
 					temp=0;
 					temp2=-1;
 				}
 				kefu_position=kefu_position+temp2;
 				$("#iIr_end img").css({"top":kefu_position});

 			};
 		}
 		kefuAnime_Medium=kefuAnime_Medium();
 		setInterval(kefuAnime_Medium,80);

 		// var haha="nihao";
 		// function test(inpt,e){
 		// 	console.log(inpt);
 		// 	console.log(window.event);
 		// }
 		// test(haha,e);

 		// setInterval("test(haha)",50);

 		$("#iIl_picMain").mouseleave(function(){
 			$("#picMedium").hide();
 			$("#info_bigPic").hide();
 		});
 		$("#iIl_picMain").mouseout(function(){
 			$("#picMedium").hide();
 			$("#info_bigPic").hide();

 		});


 		// function mainPic(e){
 			
 			
 		// }
 		$("body").click(function(e){	
 			var X=$("#iIl_picMain").offset().left;
 			console.log(X);
 		});
 		setInterval(function(){
 			console.log();
 			console.log();

 		},50);
 		$(".iIl_picSub").eq(0).addClass("iIl_picSubFocus");
 		$(".iIl_picSub").mouseenter(function(){
 			$(".iIl_picSub").removeClass("iIl_picSubFocus");
 			$(this).addClass("iIl_picSubFocus");//改变红框线
 			index=$(this).index();
 			if(index==1){
            temp=$(this).find("img").attr("src");
 				$('#iIl_picMain img').attr({"src": temp });
 				$('#info_bigPic img').attr({"src": temp });
 			}
 			if(index==2){
             temp=$(this).find("img").attr("src");
            $('#iIl_picMain img').attr({"src": temp });
            $('#info_bigPic img').attr({"src": temp });
 			}
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
         
     
      function cart_itemadd(){
         //购物车数量加减
         $("#quantity_control").children().eq(0).click(function(){
            temp = $("#cart_final").val();
            temp = parseInt(temp);
            temp += 1;
            $("#cart_final").val(temp);
         });
         $("#quantity_control").children().eq(1).click(function(){
            temp = $("#cart_final").val();
            temp = parseInt(temp);
            temp -= 1;
            if(temp<=0){
               temp=1;
            }
            $("#cart_final").val(temp);
         });
         $("#cart_final").blur(function(){
            temp = $("#cart_final").val();
            if(temp<=0){
               temp=1;
            }
            $("#cart_final").val(temp);
         });

      }
      function go_form(){
         $("#info_cart").click(function(){
            // $("form").submit();
            $("form:first").submit();
         });
      }

		</script>
	<script src="__ROOT__/Home/Tpl/Index/JS/index.js"></script>
 		
 	</html>
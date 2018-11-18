<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
	<html lang="en">
	<head>

		<meta charset="UTF-8">
		<title>Document</title>
		<script src="__ROOT__/Home/Tpl/Index/JS/jquery.min.js"></script>

		<link rel="stylesheet" href="__ROOT__/Home/Tpl/Index/CSS/public_bottom.css">
		<link rel="stylesheet" href="__ROOT__/Home/Tpl/Index/CSS/public_top.css">

		<!-- <link rel="stylesheet" type="text/css" href="./CSS/one.css" /> -->
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
		
		#mainBanner{
			opacity: 1;
			cursor: pointer;
			float: left;
			height: 470px;
			width: 100%;
			background:  url(__ROOT__/Home/Tpl/Index/img/mainBanner_pic1.jpg) top center no-repeat;

		}
		#mainBanner2{
			position: absolute;
			float: left;
			height: 470px;
			width: 100%;
			background:  url(__ROOT__/Home/Tpl/Index/img/mainBanner_pic2.jpg) top center no-repeat;
		}
		#mainBanner3{
			position: absolute;
			float: left;
			height: 470px;
			width: 100%;
			background:  url(__ROOT__/Home/Tpl/Index/img/mainBanner_pic3.jpg) top center no-repeat;
		}
		#mainBanner4{
			position: absolute;
			float: left;
			height: 470px;
			width: 100%;
			background:  url(__ROOT__/Home/Tpl/Index/img/mainBanner_pic4.jpg) top center no-repeat;
		}
		#mainBanner_float{
			width: 1200px;
			height: 470px;
			margin:auto;
			position: relative;
		}
		#categoryBox{
			height: 470px;
			width:189px;
			background: #ccc;
			position: absolute;
			top:-0px;
			float: left;
		}
		#ban_cter{
			height: 470px;
			width:189px;
			background: #ccc;
			float: right;
			position: absolute;
			top:275px;
			left: 1360px;
		}

		#lay_1_clearfix_contentFirst{
			position: relative;
			top:490px;
			z-index: 2;
			width: 1200px;
			height: 500px;
			margin: auto;
			margin-top: 10px;
			/*background: #000;*/
		}
		#indexTabBox{
			height: 500px;
			width: 920px;
			position: relative;
			top:-490px;
			float: left;
		}
		#indexTabNav{
			width: 920px;
			height: 38px;
		}
		.indexTabCon{
			width: 100%;
			height:562px;
		}

		.indexTabCon div{
			width: 184px;
			height: 231px;
			/*float: left;*/
			float: left;
			
		}
		#indexTabNew{
			position: absolute;
			top:-510px;
			z-index: -5;
			width: 270px;
			height: 500px;
			float: left;
			margin-left:10px; 
		}
		#indexRightTab{
			position: relative;
			top:20px;
			width: 270px;
			height: 140px;
		}
		#indexRightTabNav {
			width: 100%;
			height: 37px;
		}
		#indexRightNew{

			width: 270px;
			height: 103px;
		}
		#indexTuanList_one{
			position: relative;
			top:0px;
			margin-top: 10px;
			width: 270px;
			height: 157px;
		}
		#indexTuanList_two{
			position: relative;
			top:0px;
			margin-top: 20px;
			width: 270px;
			height: 157px;
		}
		#ADbox{
			position: relative;
			top:470px;
			width: 1200px;
			height: 120px;
			margin:auto;
			line-height: 130px;
			margin-top: 10px;
			background: #fe3aca;
			/*颜色不要删除*/
		}
		#ADbox_total{
		/*	width: 1200px;*/
			position: relative;
			top: -450px;
			height: 130px;
			margin :auto;

		}
		#ADbox_total div{
			position: relative;
			width: 290px;
			height: 126px;
			float:left;
			margin-left:50px;
		}
		#cDPl{
			position: relative;
			width: 1200px;
			height: 300px;
			padding-top:30px;
			margin: auto;
			overflow: hidden;			
		}
		#cDPl_Tbox{
			width: 1200px;
			height: 40px;
			line-height: 40px;
			position: relative;

		}
		#cDPl_Tbox_Con{
			position: relative;
			width: 3600px;
			height: 266px;
		}
		#super_1F{

			width: 1200px;
			height: 690px;
			margin:auto;
			margin-top: 10px;
		}
		#oneF_Title{
			width: 1200px;
			height: 40px;
		}
		#oneF_Body{
			width: 1200px;
			height: 485px;
		}
		#oneF_TLeft{
			width: 210px;
			height: 485px;
			float: left;
		}
		#oneF_TRight{
			width: 990px;
			height: 485px;
			float: left;
		}
		#oneF_BLeft{
			height: 165px;
			width: 210px;
			float: left;
		}
		#oneF_BRight{
			height: 165px;
			width: 990px;
			float: left;
		}
		#logo_Wall{
			height: 350px;
			width: 1200px;
			margin:auto;
			margin-top: 10px;
		}
		#wall_Title{
			height: 43px;
			width: 1200px;
		}
		#wall_Body{
			width: 1200px;
			height: 307px;
		}
		#logo_Shop{
			width: 1200px;
			height: 180px;
			margin:auto;
			margin-top: 10px;
		}
		#shop_Title{
			width: 1200px;
			height: 40px;
		}
		#shop_Body{
			width: 1200px;
			height: 140px;
		}
		
		#shop_Title{
			position: relative;
			height: 40px;
			line-height: 40px;

		}
		#shop_Title :nth-child(1){
			width: 10px;
			height: 25px;
			position: relative;
			left:00px;
			top:5px;
			background: #ff9000;
			float: left;
		}
		#shop_Title :nth-child(2){
			position: relative;
			left:8px;
			font-size: 16px;
		}
		#shop_Body a{
			text-transform: none;
			color: inherit;
			color: #333;
		}
		#shop_Body li{
			float: left;
			list-style-type: none;
			margin-left:8px; 
		}
		.shop_Body_Head{
			float: left;
			position: relative;
			left :-460px;
			width: 60px;
			height: 60px;
			
		}
		.shop_Body_Body{
			float: left;
			padding-top:16px;
			padding-left:80px;
		}
		.shop_Body_Body2{
			/*float: left;*/
			position: relative;
			top :46px;
			left :-389px;
		}
		#wall_Title li{
			list-style: none;
			float: left;
			margin-left:20px;
			margin-right:10px;
			font-size: 17px;
			height: 43px;
			line-height: 43px;
			font-family: 微软雅黑;
		}
		#wall_Con_1 {
			margin-top: 0px;
		}
		.wall_outer{
			width: 180px;
			height: 80px;
			padding-top: 20px;
			padding-left: 20px;
			float: left;
		}
		.wall_inner{
			/*background: #ccc;*/
			width: 180px;
			height: 80px;
			overflow: hidden;
		}
		.wall_inner img{
			width: 280px;
			height: 80px;
			margin-left:-0px;
			position: relative;
		}
		.wall_inner_control{
			margin-left: 1px;
			margin: 5px;
			position: relative;
		}
		#wall_Con_2{
			margin-top: 0px;
			display: none;
		}
		#title_Silder{
			position: relative;
			left:8px;
			top:30px;
		}
		#title_Slider1{
			    border-color: #fff #fff #dd102e #fff;
                border-style: solid;
                border-width: 6px ;
                height: 0;
                width: 0;
                /* demo */
                position: relative;
                left:38px;
		}
		#title_Slider2{
			height: 3px;
			width: 90px;
			background: #dd102e;
		}
		#WTitle_Nav{
			position: relative;			
		}
		#oneF_Title{
			position: relative;
			top:0px;
			height: 40px;
			line-height: 40px;
			vertical-align: middle;
		}
		#oneF_Title_back{
			position: relative;
			top:5.5px;
			vertical-align: middle;
			width: 28px;
			height: 29px;
			line-height: 29px;
			background:  url(__ROOT__/Home/Tpl/Index/img/public-9.png) 0 -95px no-repeat;
			font-size: 18px;
			text-align: center;
			color: white;
			float:left;

		}
		#oneF_name{
				float: left;
				font-size: 17px;
				margin-left: 10px;
				font-family: 微软雅黑;
				color: rgb(51, 51, 51);
		}
		#oneF_Nav{
				position: relative;
		}
		#oneF_Nav ul li{
			float: left;
			position: relative;
			left:730px;
			list-style: none;
			margin-left:5px;
			color: #999;
		}
		#oneF_Nav a div{
			float: left;
			position: relative;
			top: 5.5px;
			/*left: -3px;*/
			width: 60px;
			height: 29px;
			background: red;
			line-height: 29px;
			text-align: center;
		}
		#oneF_TLeft{
			position: relative;

			overflow: hidden;
		}
		#oneF_TLeft_box{
			height: 485px;
			width: 840px;
			position: relative;
		}
		#oneF_TLeft_box img{
			float: left;
		}
		#oneF_TLeft_control{
			position: relative;
			top:-40px;
			left :67.5px;
		}
		#oneF_TLeft_control div{
			z-index: 999;
			height: 13px;
			width: 13px;
			background: white;
			float: left;
			margin-left: 12px;
			/*margin-left: 10px;*/
			cursor: pointer;
			border-radius: 10px;
		}
		#oneF_TLeft_control div:first-child{
			background: red;
		}
		#oneF_TRight_line{
			height: 2px;
			width: 990px;
			background: red;
		}
		#oneF_TR_Sample{
			float: left;
			height: 232px;
			width: 180px;
			padding-top: 10px;
			margin-left: 15px;

		}
		#oneF_TR_Sample div{

			width: 160px;
		}
		#oneF_TR_Sample a{
			color: #999;
			text-decoration: none;
		}
		#oneF_BLeft{
			margin-left: auto;
		}
		.oneF_BLeft_Title{
			color:red;
			font-size: 18px;
			margin-left: 22px;
			margin-top: 25px;
		}
		.oneF_BLeft_Body ul li{
			list-style:none;
			float: left;
			margin-left: 15px;
			margin-top: 10px;
		}
		#oneF_BRight_Title{
			width: 990px;
			height: 40px;
			margin-top:40px; 
			position: relative;
		}
		#oneF_BRight_Title ul{
			margin-left:680px;
			float: left;
		}
		#oneF_BRight_uL ul li{
			float: left;
			margin-left: 7px;
			margin-right: 7px;
			list-style: none;
			color:#999;
		}
		#oneF_BRight_uL{
			float: left;
		}
		#oneF_BRight_TWord{
			margin-left: 45px;
			color: #bd7833;
			float: left;
		}
		#oneF_BRight_Tpic{
			position: relative;
			left: 31px;
			top:3px;
			width: 11px;
			height: 13px;
			background:  url(__ROOT__/Home/Tpl/Index/img/public-9.png) -38px 0 no-repeat;
		}
		#oneF_BRight_Body{
			width: 196px;
			height: 90px;
			margin-top:20px;
		}
		#oneF_BRight_Bpic{
			margin-left: 15px;
			width: 90px;
			height: 90px;
			float: left;
		}
		#oneF_BRight_Bword{
			float: left;
			height: 90px;
			line-height: 20px;
			width: 80px;
			margin-left: 10px;
			padding-left: 0px; 
			padding-top: 20px; 
			text-align: left;

		}
		#oneF_BRight_Bword p{
			color: red;
			font-size: 17px;
		}
		#oneF_BRight_Bword a{
			text-decoration: none;
		}
		#oneF_BRight_BPanel_1{
			position: relative;
			width: 990px;
		}
		#oneF_BRight_BPanel_4{
			position: relative;
			width: 990px;
			display: none;
		}
		#oneF_BRight_BPanel_2{
			position: relative;
			width: 990px;
			display: none;
		}
		#oneF_BRight_BPanel_3{
			position: relative;
			width: 990px;
			display: none;
		}
		#cDPl_Tbox_Tpic{
			position: relative;
			top:10px;
			width: 20px;
			height: 20px;
			float: left;
			background:  url(__ROOT__/Home/Tpl/Index/img/public-9.png) 0 0 no-repeat;
		}
		#cDPl_Tbox_Tword{
			margin-left: 10px;
			float: left;
			font-size: 20px;

		}
		#cDPl_Tbox_Nav{
			float: left;
			position: relative;
			left: 1020px;
			top: 20px;
		}
		#cDPl_Tbox_Nav div{
			z-index: 999;
			background: #999;
			width: 10px;
			height: 10px;
			margin-left: 10px;
			float: left;
			cursor: pointer;
		}
		.cDPl_Tbox_main{
				width: 200px;
				height: 226px;
				float: left;
				position: relative;
				top:40px;
		}
		.cDPl_Tbox_pic{
				width: 160px;
				height: 160px;
		}
		.cDPl_Tbox_word{

		}
		.cDPl_Tbox_word p{
			overflow: hidden;
		    white-space: nowrap;
		    text-overflow: ellipsis;
		}
		#cDPl_Tbox_Tag{
			width: 45px;
			height: 55px;
			float: left;
			position: relative;
			top: -210px;
			left: 130px;
			text-align: center;
		}
		#cDPl_Tbox_Tag span{
			color: white;
			font-size: 18px;
			position: relative;
			top:-50px;
		}
		#lay_1_clearfix_contentFirst{
			position: relative;
		}
		#indexTabNav{
			position: relative;
		}
		#indexTabNav ul{
			height: 40px;
			line-height: 40px;
			text-align: center;
			font-size: 20px;
			color: #999;
		}
		#indexTabNav ul li {
			position: relative;
			height: 38px;
			width: 184px;
			float: left;
			list-style: none;
			cursor: pointer;

		}
		#indexTabNav ul li div{
			position: relative;
			top:-40px;
			background: red;
			width: 184px;
			height: 2px;
			/*display: none;*/
		}
		.indexTabCon{
			position: relative;
		
		}
		.indexTabCon_pic{
			position: relative;
			margin-left: 10px;
		}
		.indexTabCon p{
			position: relative;
			width: 160px;
			overflow: hidden;
			white-space: nowrap;
			text-overflow:ellipsis;
			top:-60px;
			left:15px;
		}
		.indexTabCon_tag{
			position: relative;
			width: 45px;
			text-align: center;
			float: left;

		}
		.indexTabCon_tag img{
			float: left;
			position: relative;
			top: -260px;
			left :120px;
		}
		.indexTabCon_tag p{
			position: relative;
			left : 75px!important;
			top :-260px!important;
			width: 45px!important;
			color: white;
		}
		#indexTabNew{
			position: relative;
		}
		#indexRightTabNav{
			position: relative;
		}
		#indexRightTabNav ul{
			height: 37px;
			line-height: 37px;
			float: left;
			text-align: center;
		}
		#indexRightTabNav ul li{
			float: left;
			position: relative;
			width: 135px;
			height: 37px;
			list-style: none;
			font-size: 20px;
			color: #999;
			cursor: pointer;

		}
		#indexRightTabNav ul li div{
			position: relative;
			top:-37px;
			background: red;
			width: 135px;
			height: 2px;
			/*display: none;*/
		}
		#indexRightNew ul li{
			width: 125px;
			overflow: hidden;
			white-space: nowrap;
			text-overflow:ellipsis;
			position: relative;
			top:05px;
			left: 10px;
			float: left;
			padding-top: 10px;
		}
		#indexTuanList_one{
			position: relative;

			overflow: hidden;
		}
		#indexTuanList_two{
			position: relative;
			overflow: hidden;
		}
		#indexTuanList_one div{
			width: 804px;
			height: 157px;
			position: relative;
		}
		#indexTuanList_two div{
			position: relative;
			height: 157px;
			width: 1072px;
		}
		#indexTuanList_one div img{
			float: left;
		}
		#indexTuanList_two div img{
			float: left;
		}
			
		#tuanOne_point {
			position: relative;
		}
		#tuanTwo_point{
			position: relative;
		}
		#tuanOne_point div{
			position: relative;
			top:-25px;
			width: 18px;
			height: 18px;
			border-radius: 18px;
			background: #999;
			margin-left: 12px;
			float: left;
			cursor: pointer;
		}
		#tuanOne_point :first-child{
			margin-left: 30px;
		}
		#tuanTwo_point div{
			position: absolute;
			top:-20px;
			width: 18px;
			height: 18px;
			border-radius: 18px;
			background: #999;
			margin-left: 12px;
			float: left;
			cursor: pointer;
		}
		#tuanTwo_point :first-child{
			margin-left: 23px;
		}
		#tuanTwo_point :nth-child(2){
			margin-left: 50px;
		}
		#tuanTwo_point :nth-child(3){
			margin-left: 77px;
		}

		
		
		a{

			/*text-decoration: none;*/
		}
		.indexTabCon a{
			/*color: red;*/
			color: #333;
			text-decoration: none;
		}
		
		#mainBanner_button{
			width: 200px;
			position: absolute;
			top:700px;
			left: 50%;
			margin-left: -80px;
			cursor: pointer;
			/*z-index: ;*/
		}

		#mainBanner_button div{
			width: 25px;
			height: 25px;
			background: #000;
			border-radius: 25px;
			float: left;
			position: relative;
			margin-left: 15px;
			line-height: 25px;
			text-align:  center;
			color: white;
			font-size: 15px;
			cursor: pointer!important;
		}
		#main_Right div{
			width: 190px;
			height: 155px;
			background: #000;
			position: relative;
			margin-top:2.5px;/*
			overflow: hidden;*/
			/*470*/
		}
		#main_Right img{
			width: 190px;
			height: 155px;
			/*155*/
			position: absolute;
		}
		#main_Right div :first-child {
			position: absolute;
		}
		#main_Right :first-child div{
			margin-top: 0px;
		}
		#main_Right{
			position: absolute;
			left:1361px;
			top:275px;
			z-index: 999;/*
			width: 190px;
			height: 470px;*/
			overflow: hidden;
		}
		
	</style>
	<body>
	<div id="subBody">
		<div id="main_Right">
				<a href="">
					<div>
						<img src="__ROOT__/Home/Tpl/Index/img/mainRight1.png" >
						<img src="__ROOT__/Home/Tpl/Index/img/mainRight2.png" >
						<img src="__ROOT__/Home/Tpl/Index/img/mainRight3.png" >
						<img src="__ROOT__/Home/Tpl/Index/img/mainRight4.png" alt="">
					</div>
				</a>
				<a href="">
					<div>
						<img src="__ROOT__/Home/Tpl/Index/img/mainRight1.png" alt="">
						<img src="__ROOT__/Home/Tpl/Index/img/mainRight2.png" alt="">
						<img src="__ROOT__/Home/Tpl/Index/img/mainRight3.png" alt="">
						<img src="__ROOT__/Home/Tpl/Index/img/mainRight4.png" alt="">
					</div>
				</a>
				<a href="">
					<div>
						<img src="__ROOT__/Home/Tpl/Index/img/mainRight1.png" alt="">
						<img src="__ROOT__/Home/Tpl/Index/img/mainRight2.png" alt="">
						<img src="__ROOT__/Home/Tpl/Index/img/mainRight3.png" alt="">
						<img src="__ROOT__/Home/Tpl/Index/img/mainRight4.png" alt="">
					</div>
				</a>	
		</div>
	</div>
		
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
		<div>
			<a href=""><div id="mainBanner"></div></a>
		<a href=""><div id="mainBanner2" ></div></a>
		<a href=""><div id="mainBanner3" ></div></a>
		<a href=""><div id="mainBanner4" ></div></a>
		
		</div>
		
		
		<div id="mainBanner_button">
				<div style="background:red; cursor: pointer;"><span>1</span> </div>
				<div><span>2</span></div>
				<div><span>3</span></div>
				<div><span>4</span> </div>
		</div>	
		
		
		<div id="lay_1_clearfix_contentFirst">
			<div id="indexTabBox">
				<div id="indexTabNav">	
					<ul>
						<li>疯狂抢购<div></div></li>
						<li>满300减60<div style="display: none;"></div></li>
						<li>爆款精选<div style="display: none;"></div></li>
						<li>整箱特惠<div style="display: none;"></div></li>
						<li>大牌特卖<div style="display: none;"></div></li>
					</ul>
				</div>


				<div class="indexTabCon" >
					<div>
						<div class="indexTabCon_pic">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexpic2.jpg" alt=""></a>
						</div>
						<p ><a href="" style="">【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</a></p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>下单得</p>
							<p>小酒版</p>
						</div>
					</div>
					<div>
						<div class="indexTabCon_pic">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexpic5.jpg" alt=""></a>
						</div>
						<p ><a href="">【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</a></p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>满300</p>
							<p>减60</p>
						</div>
					</div>
					<div>
						<div class="indexTabCon_pic">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexpic4.jpg" alt=""></a>
						</div>
						<p ><a href="" style="">【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</a></p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>下单得</p>
							<p>小酒版</p>
						</div>
					</div>
					<div>
						<div class="indexTabCon_pic">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexpic3.jpg" alt=""></a>
						</div>
						<p ><a href="" style="">【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</a></p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>满300</p>
							<p>减60</p>
						</div>
					</div>
					<div>
						<div class="indexTabCon_pic">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexpic1.jpg" alt=""></a>
						</div>
					<p ><a href="" style="">【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</a></p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>下单得</p>
							<p>小酒版</p>
						</div>
					</div>
					<div>
						<div class="indexTabCon_pic">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexpic4.jpg" alt=""></a>
						</div>
						<p ><a href="" style="">【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</a></p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>满300</p>
							<p>减60</p>
						</div>
					</div><div>
						<div class="indexTabCon_pic">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexpic5.jpg" alt=""></a>
						</div>
						<p ><a href="" style="">【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</a></p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>下单得</p>
							<p>小酒版</p>
						</div>
					</div><div>
						<div class="indexTabCon_pic">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexpic3.jpg" alt=""></a>
						</div>
						<p ><a href="" style="">【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</a></p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>满300</p>
							<p>减60</p>
						</div>
					</div><div>
						<div class="indexTabCon_pic">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexpic1.jpg" alt=""></a>
						</div>
						<p ><a href="" style="">【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</a></p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>下单得</p>
							<p>小酒版</p>
						</div>
					</div><div>
						<div class="indexTabCon_pic">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexpic4.jpg" alt=""></a>
						</div>
						<p ><a href="" style="">【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</a></p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>满300</p>
							<p>减60</p>
						</div>
					</div>
				</div>
				
				<div class="indexTabCon" style="display:none;">
					<div>
						<div class="indexTabCon_pic">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexpic1.jpg" alt=""></a>
						</div>
						<p ><a href="" style="">【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</a></p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>下单得</p>
							<p>小酒版</p>
						</div>
					</div>
					<div>
						<div class="indexTabCon_pic">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexpic3.jpg" alt=""></a>
						</div>
						<p ><a href="" style="">【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</a></p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>满300</p>
							<p>减60</p>
						</div>
					</div>
					<div>
						<div class="indexTabCon_pic">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexpic5.jpg" alt=""></a>
						</div>
						<p ><a href="" style="">【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</a></p>
						<p class="indexTabCon_word"style="color:red;">￥448.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>下单得</p>
							<p>小酒版</p>
						</div>
					</div>
					<div>
						<div class="indexTabCon_pic">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexpic5.jpg" alt=""></a>
						</div>
						<p ><a href="" style="">【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</a></p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>满300</p>
							<p>减60</p>
						</div>
					</div>
					<div>
						<div class="indexTabCon_pic">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexpic5.jpg" alt=""></a>
						</div>
						<p ><a href="" style="">【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</a></p>
						<p class="indexTabCon_word"style="color:red;">￥2448.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>下单得</p>
							<p>小酒版</p>
						</div>
					</div>
					<div>
						<div class="indexTabCon_pic">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexpic5.jpg" alt=""></a>
						</div>
						<p ><a href="" style="">【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</a></p>
						<p class="indexTabCon_word"style="color:red;">￥266.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>满300</p>
							<p>减60</p>
						</div>
					</div><div>
						<div class="indexTabCon_pic">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexpic3.jpg" alt=""></a>
						</div>
						<p ><a href="" style="">【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</a></p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>下单得</p>
							<p>小酒版</p>
						</div>
					</div><div>
						<div class="indexTabCon_pic">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexpic3.jpg" alt=""></a>
						</div>
						<p ><a href="" style="">【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</a></p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>满300</p>
							<p>减60</p>
						</div>
					</div><div>
						<div class="indexTabCon_pic">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexpic3.jpg" alt=""></a>
						</div>
						<p ><a href="" style="">【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</a></p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>下单得</p>
							<p>小酒版</p>
						</div>
					</div><div>
						<div class="indexTabCon_pic">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexpic3.jpg" alt=""></a>
						</div>
						<p ><a href="" style="">【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</a></p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>满310</p>
							<p>减60</p>
						</div>
					</div>
				</div>
				

				<div class="indexTabCon" style="display:none;">
					<div>
						<div class="indexTabCon_pic">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexpic2.jpg" alt=""></a>
						</div>
						<p >【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>下单得</p>
							<p>小酒版</p>
						</div>
					</div>
					<div>
						<div class="indexTabCon_pic">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexpic2.jpg" alt=""></a>
						</div>
						<p >【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>满300</p>
							<p>减60</p>
						</div>
					</div>
					<div>
						<div class="indexTabCon_pic">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexpic2.jpg" alt=""></a>
						</div>
						<p >【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</p>
						<p class="indexTabCon_word"style="color:red;">￥448.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>下单得</p>
							<p>小酒版</p>
						</div>
					</div>
					<div>
						<div class="indexTabCon_pic">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexpic2.jpg" alt=""></a>
						</div>
						<p >【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>满300</p>
							<p>减60</p>
						</div>
					</div>
					<div>
						<div class="indexTabCon_pic">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexpic1.jpg" alt=""></a>
						</div>
						<p >【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</p>
						<p class="indexTabCon_word"style="color:red;">￥2448.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>下单得</p>
							<p>小酒版</p>
						</div>
					</div>
					<div>
						<div class="indexTabCon_pic">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexpic1.jpg" alt=""></a>
						</div>
						<p >【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</p>
						<p class="indexTabCon_word"style="color:red;">￥266.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>满300</p>
							<p>减60</p>
						</div>
					</div><div>
						<div class="indexTabCon_pic">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexpic1.jpg" alt=""></a>
						</div>
						<p >【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>下单得</p>
							<p>小酒版</p>
						</div>
					</div><div>
						<div class="indexTabCon_pic">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexpic1.jpg" alt=""></a>
						</div>
						<p >【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>满300</p>
							<p>减60</p>
						</div>
					</div><div>
						<div class="indexTabCon_pic">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexpic1.jpg" alt=""></a>
						</div>
						<p >【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>下单得</p>
							<p>小酒版</p>
						</div>
					</div><div>
						<div class="indexTabCon_pic">
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexpic1.jpg" alt=""></a>
						</div>
						<p >【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>满310</p>
							<p>减60</p>
						</div>
					</div>
				</div>




				<div class="indexTabCon" style="display:none;">
					<div>
						<div class="indexTabCon_pic">
							<img src="__ROOT__/Home/Tpl/Index/img/indexpic1.jpg" alt="">
						</div>
						<p >【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>下单得</p>
							<p>小酒版</p>
						</div>
					</div>
					<div>
						<div class="indexTabCon_pic">
							<img src="__ROOT__/Home/Tpl/Index/img/indexpic2.jpg" alt="">
						</div>
						<p >【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>满300</p>
							<p>减60</p>
						</div>
					</div>
					<div>
						<div class="indexTabCon_pic">
							<img src="__ROOT__/Home/Tpl/Index/img/indexpic3.jpg" alt="">
						</div>
						<p >【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</p>
						<p class="indexTabCon_word"style="color:red;">￥448.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>下单得</p>
							<p>小酒版</p>
						</div>
					</div>
					<div>
						<div class="indexTabCon_pic">
							<img src="__ROOT__/Home/Tpl/Index/img/indexpic5.jpg" alt="">
						</div>
						<p >【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>满300</p>
							<p>减60</p>
						</div>
					</div>
					<div>
						<div class="indexTabCon_pic">
							<img src="__ROOT__/Home/Tpl/Index/img/indexpic3.jpg" alt="">
						</div>
						<p >【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</p>
						<p class="indexTabCon_word"style="color:red;">￥2448.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>下单得</p>
							<p>小酒版</p>
						</div>
					</div>
					<div>
						<div class="indexTabCon_pic">
							<img src="__ROOT__/Home/Tpl/Index/img/indexpic4.jpg" alt="">
						</div>
						<p >【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</p>
						<p class="indexTabCon_word"style="color:red;">￥266.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>满300</p>
							<p>减60</p>
						</div>
					</div><div>
						<div class="indexTabCon_pic">
							<img src="__ROOT__/Home/Tpl/Index/img/indexpic5.jpg" alt="">
						</div>
						<p >【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>下单得</p>
							<p>小酒版</p>
						</div>
					</div><div>
						<div class="indexTabCon_pic">
							<img src="__ROOT__/Home/Tpl/Index/img/indexpic5.jpg" alt="">
						</div>
						<p >【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>满300</p>
							<p>减60</p>
						</div>
					</div><div>
						<div class="indexTabCon_pic">
							<img src="__ROOT__/Home/Tpl/Index/img/indexpic5.jpg" alt="">
						</div>
						<p >【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>下单得</p>
							<p>小酒版</p>
						</div>
					</div><div>
						<div class="indexTabCon_pic">
							<img src="__ROOT__/Home/Tpl/Index/img/indexpic1.jpg" alt="">
						</div>
						<p >【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>满310</p>
							<p>减60</p>
						</div>
					</div>
				</div>




				<div class="indexTabCon" style="display:none;">
					<div>
						<div class="indexTabCon_pic">
							<img src="__ROOT__/Home/Tpl/Index/img/indexpic1.jpg" alt="">
						</div>
						<p >【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>下单得</p>
							<p>小酒版</p>
						</div>
					</div>
					<div>
						<div class="indexTabCon_pic">
							<img src="__ROOT__/Home/Tpl/Index/img/indexpic4.jpg" alt="">
						</div>
						<p >【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>满300</p>
							<p>减60</p>
						</div>
					</div>
					<div>
						<div class="indexTabCon_pic">
							<img src="__ROOT__/Home/Tpl/Index/img/indexpic5.jpg" alt="">
						</div>
						<p >【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</p>
						<p class="indexTabCon_word"style="color:red;">￥448.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>下单得</p>
							<p>小酒版</p>
						</div>
					</div>
					<div>
						<div class="indexTabCon_pic">
							<img src="__ROOT__/Home/Tpl/Index/img/indexpic5.jpg" alt="">
						</div>
						<p >【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>满300</p>
							<p>减60</p>
						</div>
					</div>
					<div>
						<div class="indexTabCon_pic">
							<img src="__ROOT__/Home/Tpl/Index/img/indexpic4.jpg" alt="">
						</div>
						<p >【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</p>
						<p class="indexTabCon_word"style="color:red;">￥2448.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>下单得</p>
							<p>小酒版</p>
						</div>
					</div>
					<div>
						<div class="indexTabCon_pic">
							<img src="__ROOT__/Home/Tpl/Index/img/indexpic5.jpg" alt="">
						</div>
						<p >【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</p>
						<p class="indexTabCon_word"style="color:red;">￥266.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>满300</p>
							<p>减60</p>
						</div>
					</div><div>
						<div class="indexTabCon_pic">
							<img src="__ROOT__/Home/Tpl/Index/img/indexpic4.jpg" alt="">
						</div>
						<p >【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>下单得</p>
							<p>小酒版</p>
						</div>
					</div><div>
						<div class="indexTabCon_pic">
							<img src="__ROOT__/Home/Tpl/Index/img/indexpic5.jpg" alt="">
						</div>
						<p >【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>满300</p>
							<p>减60</p>
						</div>
					</div><div>
						<div class="indexTabCon_pic">
							<img src="__ROOT__/Home/Tpl/Index/img/indexpic3.jpg" alt="">
						</div>
						<p >【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>下单得</p>
							<p>小酒版</p>
						</div>
					</div><div>
						<div class="indexTabCon_pic">
							<img src="__ROOT__/Home/Tpl/Index/img/indexpic2.jpg" alt="">
						</div>
						<p >【董酒大牌日】38°国密董酒500ml(双瓶装)+46°董酒（100）100ml+董酒烟灰缸</p>
						<p class="indexTabCon_word"style="color:red;">￥258.00</p>
						<div class="indexTabCon_tag">
							<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
							<p>满310</p>
							<p>减60</p>
						</div>
					</div>
				</div>


			</div>
			<div id="indexTabNew">
				<div id="indexRightTab">
					<div id="indexRightTabNav">
						<ul>
							<li>公告信息<div></div></li>
							<li>促销信息<div style="display:none;"></div></li>
						</ul>
					</div>
					<div id="indexRightNew">
						<ul>
							<?php if(is_array($medium)): $i = 0; $__LIST__ = array_slice($medium,0,6,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Index/itemshop',array('id'=> $data[Info_id] ));?>"><?php echo ($data["Info_detail"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
						<ul style="display:none;">
							<?php if(is_array($medium)): $i = 0; $__LIST__ = array_slice($medium,6,6,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li><a href=""><?php echo ($data["Info_detail"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
				</div>
				<div id="indexTuanList_one">
					<div id="tuanOne"><!-- width: 270px;height: 157px; -->

						<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexRpic1.jpg" alt=""></a>
						<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexRpic2.jpg" alt=""></a>
						<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexRpic1.jpg" alt=""></a>
						
					</div>
					<div id="tuanOne_point">
						<div style="background:red;"></div>
						<div></div>
					</div>

				</div>
				<div id="indexTuanList_two">
						<div id="tuanTwo"><!-- width: 270px;height: 157px; -->
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexRpic1.png" alt=""></a>
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexRpic2.png" alt=""></a>
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexRpic3.png" alt=""></a>
							<a href=""><img src="__ROOT__/Home/Tpl/Index/img/indexRpic1.png" alt=""></a>
							
						</div>
						<div id="tuanTwo_point">
							<div style="background:red;"></div>
							<div></div>
							<div></div>
						</div>
				</div>
			</div>
		</div>

		<div id="ADbox">
			<div id="ADbox_total">
					<div id="ADbox_1">
					<div>
						<img src="__ROOT__/Home/Tpl/Index/img/mid_ADbox_3.png" style="width:
						290px;height:126px;">
					</div>
					</div>
					<div id="ADbox_2">
					<div>
						<img src="__ROOT__/Home/Tpl/Index/img/mid_ADbox_2.png" style="width:
						290px;height:126px;">
					</div>
					</div>
					<div id="ADbox_3">
					<div>
						<img src="__ROOT__/Home/Tpl/Index/img/mid_ADbox_3.png" style="width:
						290px;height:126px;">
					</div>
					</div>
			</div>
			
		</div>
		<div id="cDPl">
			<div id="cDPl_Tbox">
				<div id="cDPl_Tbox_Tpic"></div>
				<div id="cDPl_Tbox_Tword">优惠推荐</div>
				<div id="cDPl_Tbox_Nav">
					<div style="background:red;"></div>
					<!--  -->
					<div></div>
					<div></div>
				</div>
			</div>
			<div id="cDPl_Tbox_Con">
				<div class="cDPl_Tbox_main">
					<div class="cDPl_Tbox_pic"><img src="__ROOT__/Home/Tpl/Index/img/cdp1.jpg" ></div>
					<div class="cDPl_Tbox_word">
						<p>【董酒大牌日】54°董酒珍酿（20）500ml(双瓶装)+茶具五件套（酒仙会员专享）</p>
						<p style="color:red;font-size:18px;">￥299.00</p>
					</div>
					<div id="cDPl_Tbox_Tag">
						<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
						<span>疯抢</span>
					</div>
				</div>
				<div class="cDPl_Tbox_main">
					<div class="cDPl_Tbox_pic"><img src="__ROOT__/Home/Tpl/Index/img/cdp1.jpg" ></div>
					<div class="cDPl_Tbox_word">
						<p>【董酒大牌日】54°董酒珍酿（20）500ml(双瓶装)+茶具五件套（酒仙会员专享）</p>
						<p style="color:red;font-size:18px;">￥299.00</p>
					</div>
					
				</div>
				<div class="cDPl_Tbox_main">
					<div class="cDPl_Tbox_pic"><img src="__ROOT__/Home/Tpl/Index/img/cdp1.jpg" ></div>
					<div class="cDPl_Tbox_word">
						<p>【董酒大牌日】54°董酒珍酿（20）500ml(双瓶装)+茶具五件套（酒仙会员专享）</p>
						<p style="color:red;font-size:18px;">￥299.00</p>
					</div>
					<div id="cDPl_Tbox_Tag">
						<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
						<span>疯抢</span>
					</div>
				</div>
				<div class="cDPl_Tbox_main">
					<div class="cDPl_Tbox_pic"><img src="__ROOT__/Home/Tpl/Index/img/cdp1.jpg" ></div>
					<div class="cDPl_Tbox_word">
						<p>【董酒大牌日】54°董酒珍酿（20）500ml(双瓶装)+茶具五件套（酒仙会员专享）</p>
						<p style="color:red;font-size:18px;">￥299.00</p>
					</div>
					<div id="cDPl_Tbox_Tag">
						<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
						<span>疯抢</span>
					</div>
				</div>
				<div class="cDPl_Tbox_main">
					<div class="cDPl_Tbox_pic"><img src="__ROOT__/Home/Tpl/Index/img/cdp3.jpg" ></div>
					<div class="cDPl_Tbox_word">
						<p>【董酒大牌日】54°董酒珍酿（20）500ml(双瓶装)+茶具五件套（酒仙会员专享）</p>
						<p style="color:red;font-size:18px;">￥299.00</p>
					</div>
					<div id="cDPl_Tbox_Tag">
						<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
						<span>疯抢</span>
					</div>
				</div>
				<div class="cDPl_Tbox_main">
					<div class="cDPl_Tbox_pic"><img src="__ROOT__/Home/Tpl/Index/img/cdp2.jpg" ></div>
					<div class="cDPl_Tbox_word">
						<p>【董酒大牌日】54°董酒珍酿（20）500ml(双瓶装)+茶具五件套（酒仙会员专享）</p>
						<p style="color:red;font-size:18px;">￥299.00</p>
					</div>
					<div id="cDPl_Tbox_Tag">
						<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
						<span>疯抢</span>
					</div>
				</div>
				<div class="cDPl_Tbox_main">
					<div class="cDPl_Tbox_pic"><img src="__ROOT__/Home/Tpl/Index/img/cdp2.jpg" ></div>
					<div class="cDPl_Tbox_word">
						<p>【董酒大牌日】54°董酒珍酿（20）500ml(双瓶装)+茶具五件套（酒仙会员专享）</p>
						<p style="color:red;font-size:18px;">￥299.00</p>
					</div>
					<div id="cDPl_Tbox_Tag">
						<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
						<span>疯抢</span>
					</div>
				</div><div class="cDPl_Tbox_main">
					<div class="cDPl_Tbox_pic"><img src="__ROOT__/Home/Tpl/Index/img/cdp2.jpg" ></div>
					<div class="cDPl_Tbox_word">
						<p>【董酒大牌日】54°董酒珍酿（20）500ml(双瓶装)+茶具五件套（酒仙会员专享）</p>
						<p style="color:red;font-size:18px;">￥299.00</p>
					</div>
					
				</div>
				<div class="cDPl_Tbox_main">
					<div class="cDPl_Tbox_pic"><img src="__ROOT__/Home/Tpl/Index/img/cdp2.jpg" ></div>
					<div class="cDPl_Tbox_word">
						<p>【董酒大牌日】54°董酒珍酿（20）500ml(双瓶装)+茶具五件套（酒仙会员专享）</p>
						<p style="color:red;font-size:18px;">￥299.00</p>
					</div>
					
				</div>
				<div class="cDPl_Tbox_main">
					<div class="cDPl_Tbox_pic"><img src="__ROOT__/Home/Tpl/Index/img/cdp2.jpg" ></div>
					<div class="cDPl_Tbox_word">
						<p>【董酒大牌日】54°董酒珍酿（20）500ml(双瓶装)+茶具五件套（酒仙会员专享）</p>
						<p style="color:red;font-size:18px;">￥299.00</p>
					</div>
					<div id="cDPl_Tbox_Tag">
						<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
						<span>疯抢</span>
					</div>
				</div>
				<div class="cDPl_Tbox_main">
					<div class="cDPl_Tbox_pic"><img src="__ROOT__/Home/Tpl/Index/img/cdp2.jpg" ></div>
					<div class="cDPl_Tbox_word">
						<p>【董酒大牌日】54°董酒珍酿（20）500ml(双瓶装)+茶具五件套（酒仙会员专享）</p>
						<p style="color:red;font-size:18px;">￥299.00</p>
					</div>
					<div id="cDPl_Tbox_Tag">
						<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
						<span>疯抢</span>
					</div>
				</div>
				<div class="cDPl_Tbox_main">
					<div class="cDPl_Tbox_pic"><img src="__ROOT__/Home/Tpl/Index/img/cdp3.jpg" ></div>
					<div class="cDPl_Tbox_word">
						<p>【董酒大牌日】54°董酒珍酿（20）500ml(双瓶装)+茶具五件套（酒仙会员专享）</p>
						<p style="color:red;font-size:18px;">￥299.00</p>
					</div>
					
				</div>
				<div class="cDPl_Tbox_main">
					<div class="cDPl_Tbox_pic"><img src="__ROOT__/Home/Tpl/Index/img/cdp3.jpg" ></div>
					<div class="cDPl_Tbox_word">
						<p>【董酒大牌日】54°董酒珍酿（20）500ml(双瓶装)+茶具五件套（酒仙会员专享）</p>
						<p style="color:red;font-size:18px;">￥299.00</p>
					</div>
					
				</div>
				<div class="cDPl_Tbox_main">
					<div class="cDPl_Tbox_pic"><img src="__ROOT__/Home/Tpl/Index/img/cdp2.jpg" ></div>
					<div class="cDPl_Tbox_word">
						<p>【董酒大牌日】54°董酒珍酿（20）500ml(双瓶装)+茶具五件套（酒仙会员专享）</p>
						<p style="color:red;font-size:18px;">￥299.00</p>
					</div>
					<div id="cDPl_Tbox_Tag">
						<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
						<span>疯抢</span>
					</div>
				</div>
				<div class="cDPl_Tbox_main">
					<div class="cDPl_Tbox_pic"><img src="__ROOT__/Home/Tpl/Index/img/cdp3.jpg" ></div>
					<div class="cDPl_Tbox_word">
						<p>【董酒大牌日】54°董酒珍酿（20）500ml(双瓶装)+茶具五件套（酒仙会员专享）</p>
						<p style="color:red;font-size:18px;">￥299.00</p>
					</div>
					<div id="cDPl_Tbox_Tag">
						<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
						<span>疯抢</span>
					</div>
				</div>
				<div class="cDPl_Tbox_main">
					<div class="cDPl_Tbox_pic"><img src="__ROOT__/Home/Tpl/Index/img/cdp3.jpg" ></div>
					<div class="cDPl_Tbox_word">
						<p>【董酒大牌日】54°董酒珍酿（20）500ml(双瓶装)+茶具五件套（酒仙会员专享）</p>
						<p style="color:red;font-size:18px;">￥299.00</p>
					</div>
					<div id="cDPl_Tbox_Tag">
						<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
						<span>疯抢</span>
					</div>
				</div>
				<div class="cDPl_Tbox_main">
					<div class="cDPl_Tbox_pic"><img src="__ROOT__/Home/Tpl/Index/img/cdp1.jpg" ></div>
					<div class="cDPl_Tbox_word">
						<p>【董酒大牌日】54°董酒珍酿（20）500ml(双瓶装)+茶具五件套（酒仙会员专享）</p>
						<p style="color:red;font-size:18px;">￥299.00</p>
					</div>
					<div id="cDPl_Tbox_Tag">
						<img src="__ROOT__/Home/Tpl/Index/img/TagBg.png" alt="">
						<span>疯抢</span>
					</div>
				</div>
				<div class="cDPl_Tbox_main">
					<div class="cDPl_Tbox_pic"><img src="__ROOT__/Home/Tpl/Index/img/cdp2.jpg" ></div>
					<div class="cDPl_Tbox_word">
						<p>【董酒大牌日】54°董酒珍酿（20）500ml(双瓶装)+茶具五件套（酒仙会员专享）</p>
						<p style="color:red;font-size:18px;">￥299.00</p>
					</div>
					
				</div>

				
			</div>
			<div>
				
			</div>
		</div>
		<div id="super_1F">
			<div id="oneF_Title">
				<div id="oneF_Title_back">		
				<span id="oneF_oneF">1F</span>
				</div>
				<div id="oneF_name">白象馆</div>
				<div id="oneF_Nav">
					<ul>
						<li><a href="">贵州</a></li>
						<li>|</li>
						<li><a href="">四川</a></li>
						<li>|</li>
						<li><a href="">山西</a></li>
						<li>|</li>
						<li><a href="">北京</a></li>
						<li>|</li>
						<li><a href="">江苏</a></li>
						<li>|</li>
						<li><a href="">山东</a></li>
						<li>|</li>
						<li><a href="">安徽</a></li>
						<li style="z-index:999;color:white;margin-left:10px;"><a href=""><div >白酒馆&nbsp&gt</div></a></li>
						
					</ul>
				</div>
			</div>
			<div id="oneF_Body">
				<div id="oneF_Body_Top">
					<div id="oneF_TLeft">
						<div id="oneF_TLeft_box">
							<img src="__ROOT__/Home/Tpl/Index/img/1F_huandeng.jpg" alt="">
							<img src="__ROOT__/Home/Tpl/Index/img/1F_huandeng2.jpg" alt="">
							<img src="__ROOT__/Home/Tpl/Index/img/1F_huandeng3.png" alt="">
							<img src="__ROOT__/Home/Tpl/Index/img/1F_huandeng.jpg" alt="">
						</div>
						<div id="oneF_TLeft_control">
							<div ></div>
							<div></div>
							<div></div>
						</div>
					</div>
					<div id="oneF_TRight">
						<div id="oneF_TRight_line"></div>
						<div id="oneF_TR_Sample">
							<div id="oneF_TR-Pic">
								<img src="__ROOT__/Home/Tpl/Index/img/oneF_TRight.jpg" alt="">
							</div>
							<div><a href="">52°泸州老窖三人炫·送父亲的一
								款酒1000ml+三人炫烟灰缸</a></div>
							<p style="color:red;font-size:18px;">￥128.00</p>
						</div>
						<div id="oneF_TR_Sample">
							<div id="oneF_TR-Pic">
								<img src="__ROOT__/Home/Tpl/Index/img/oneF_TRight.jpg" alt="">
							</div>
							<div><a href="">52°泸州老窖三人炫·送父亲的一
								款酒1000ml+三人炫烟灰缸</a></div>
							<p style="color:red;font-size:18px;">￥128.00</p>
						</div>
						<div id="oneF_TR_Sample">
							<div id="oneF_TR-Pic">
								<img src="__ROOT__/Home/Tpl/Index/img/oneF_TRight.jpg" alt="">
							</div>
							<div><a href="">52°泸州老窖三人炫·送父亲的一
								款酒1000ml+三人炫烟灰缸</a></div>
							<p style="color:red;font-size:18px;">￥128.00</p>
						</div>
						<div id="oneF_TR_Sample">
							<div id="oneF_TR-Pic">
								<img src="__ROOT__/Home/Tpl/Index/img/oneF_TRight.jpg" alt="">
							</div>
							<div><a href="">52°泸州老窖三人炫·送父亲的一
								款酒1000ml+三人炫烟灰缸</a></div>
							<p style="color:red;font-size:18px;">￥128.00</p>
						</div>
						<div id="oneF_TR_Sample">
							<div id="oneF_TR-Pic">
								<img src="__ROOT__/Home/Tpl/Index/img/oneF_TRight.jpg" alt="">
							</div>
							<div><a href="">52°泸州老窖三人炫·送父亲的一
								款酒1000ml+三人炫烟灰缸</a></div>
							<p style="color:red;font-size:18px;">￥128.00</p>
						</div>
						<div id="oneF_TR_Sample">
							<div id="oneF_TR-Pic">
								<img src="__ROOT__/Home/Tpl/Index/img/oneF_TRight.jpg" alt="">
							</div>
							<div><a href="">52°泸州老窖三人炫·送父亲的一
								款酒1000ml+三人炫烟灰缸</a></div>
							<p style="color:red;font-size:18px;">￥128.00</p>
						</div>
						<div id="oneF_TR_Sample">
							<div id="oneF_TR-Pic">
								<img src="__ROOT__/Home/Tpl/Index/img/oneF_TRight.jpg" alt="">
							</div>
							<div><a href="">52°泸州老窖三人炫·送父亲的一
								款酒1000ml+三人炫烟灰缸</a></div>
							<p style="color:red;font-size:18px;">￥128.00</p>
						</div>
						<div id="oneF_TR_Sample">
							<div id="oneF_TR-Pic">
								<img src="__ROOT__/Home/Tpl/Index/img/oneF_TRight.jpg" alt="">
							</div>
							<div><a href="">52°泸州老窖三人炫·送父亲的一
								款酒1000ml+三人炫烟灰缸</a></div>
							<p style="color:red;font-size:18px;">￥128.00</p>
						</div>
						<div id="oneF_TR_Sample">
							<div id="oneF_TR-Pic">
								<img src="__ROOT__/Home/Tpl/Index/img/oneF_TRight.jpg" alt="">
							</div>
							<div><a href="">52°泸州老窖三人炫·送父亲的一
								款酒1000ml+三人炫烟灰缸</a></div>
							<p style="color:red;font-size:18px;">￥128.00</p>
						</div>
						<div id="oneF_TR_Sample">
							<div id="oneF_TR-Pic">
								<img src="__ROOT__/Home/Tpl/Index/img/oneF_TRight.jpg" alt="">
							</div>
							<div><a href="">52°泸州老窖三人炫·送父亲的一
								款酒1000ml+三人炫烟灰缸</a></div>
							<p style="color:red;font-size:18px;">￥128.00</p>
						</div>
					</div>
				</div>
				<div id="oneF_Body_Bottom">
					<div id="oneF_BLeft">
						<div class="oneF_BLeft_Title">
							<ul><li>热门推荐</li></ul>
						</div>
						<div class="oneF_BLeft_Body">
							<ul>
								<li><a href="">整箱购</a></li>
								<li><a href="">婚庆用酒</a></li>
								<li><a href="">大坛专场</a></li>
							</ul>
						</div>
						<div class="oneF_BLeft_Title"style="margin-top:40px;">
							<ul><li>美酒品牌</li></ul>
						</div>
						<div class="oneF_BLeft_Body" >
							<ul>
								<li><a href="">茅台</a></li>
								<li><a href="">五粮液</a></li>
								<li><a href="">剑南春</a></li>
								<li><a href="">汾酒</a></li>
								<li><a href="">郎酒</a></li>
								<li><a href="">泸州老窖</a></li>
							</ul>
						</div>
					</div>
					<div id="oneF_BRight">
						<div id="oneF_BRight_Title">
							<div id="oneF_BRight_TWord">本周热销排行榜</div>
							<div id="oneF_BRight_Tpic"></div>
							<div  id="oneF_BRight_uL">
								<ul>
								<li><a href="">酱香型</a></li>
								<li>|</li>
								<li><a href="">浓香型</a></li>
								<li>|</li>
								<li><a href="">清香型</a></li>
								<li>|</li>
								<li><a href="">其他香型</a></li>
							</ul></div>
							
						</div>
						<div id="oneF_BRight_Body">
							<div id="oneF_BRight_BPanel_1">
								<div style="float: left;">
									<div id="oneF_BRight_Bpic"><img src="__ROOT__/Home/Tpl/Index/img/oneF_BRight_Bpic.jpg" alt=""></div>
									<div id="oneF_BRight_Bword"><a href="">43°茅台飞天500ml</a>
										<p>￥149.00</p>
									</div>
								</div>
								<div style="float: left;">
									<div id="oneF_BRight_Bpic"><img src="__ROOT__/Home/Tpl/Index/img/oneF_BRight_Bpic.jpg" alt=""></div>
									<div id="oneF_BRight_Bword"><a href="">43°茅台飞天500ml</a>
										<p>￥149.00</p>
									</div>
								</div>
								<div style="float: left;">
									<div id="oneF_BRight_Bpic"><img src="__ROOT__/Home/Tpl/Index/img/oneF_BRight_Bpic.jpg" alt=""></div>
									<div id="oneF_BRight_Bword"><a href="">43°茅台飞天500ml</a>
										<p>￥149.00</p>
									</div>
								</div>
								<div style="float: left;">
									<div id="oneF_BRight_Bpic"><img src="__ROOT__/Home/Tpl/Index/img/oneF_BRight_Bpic.jpg" alt=""></div>
									<div id="oneF_BRight_Bword"><a href="">43°茅台飞天500ml</a>
										<p>￥149.00</p>
									</div>
								</div>
								<div style="float: left;">
									<div id="oneF_BRight_Bpic"><img src="__ROOT__/Home/Tpl/Index/img/oneF_BRight_Bpic.jpg" alt=""></div>
									<div id="oneF_BRight_Bword"><a href="">43°茅台飞天500ml</a>
										<p>￥149.00</p>
									</div>
								</div>
							</div>

							<div id="oneF_BRight_BPanel_2">
								<div style="float: left;">
									<div id="oneF_BRight_Bpic"><img src="__ROOT__/Home/Tpl/Index/img/oneF_BRight_Bpic2.jpg" alt=""></div>
									<div id="oneF_BRight_Bword"><a href="">43°茅台飞天500ml</a>
										<p>￥155.00</p>
									</div>
								</div>
								<div style="float: left;">
									<div id="oneF_BRight_Bpic"><img src="__ROOT__/Home/Tpl/Index/img/oneF_BRight_Bpic2.jpg" alt=""></div>
									<div id="oneF_BRight_Bword"><a href="">43°茅台飞天500ml</a>
										<p>￥149.09</p>
									</div>
								</div>
								<div style="float: left;">
									<div id="oneF_BRight_Bpic"><img src="__ROOT__/Home/Tpl/Index/img/oneF_BRight_Bpic2.jpg" alt=""></div>
									<div id="oneF_BRight_Bword"><a href="">43°茅台飞天500ml</a>
										<p>￥999.00</p>
									</div>
								</div>
								<div style="float: left;">
									<div id="oneF_BRight_Bpic"><img src="__ROOT__/Home/Tpl/Index/img/oneF_BRight_Bpic2.jpg" alt=""></div>
									<div id="oneF_BRight_Bword"><a href="">43°茅台飞天500ml</a>
										<p>￥199.00</p>
									</div>
								</div>
								<div style="float: left;">
									<div id="oneF_BRight_Bpic"><img src="__ROOT__/Home/Tpl/Index/img/oneF_BRight_Bpic2.jpg" alt=""></div>
									<div id="oneF_BRight_Bword"><a href="">43°茅台飞天500ml</a>
										<p>￥999.00</p>
									</div>
								</div>
							</div>
							
							<div id="oneF_BRight_BPanel_3">
								<div style="float: left;">
									<div id="oneF_BRight_Bpic"><img src="__ROOT__/Home/Tpl/Index/img/oneF_BRight_Bpic3.jpg" alt=""></div>
									<div id="oneF_BRight_Bword"><a href="">43°茅台飞天500ml</a>
										<p>￥149.00</p>
									</div>
								</div>
								<div style="float: left;">
									<div id="oneF_BRight_Bpic"><img src="__ROOT__/Home/Tpl/Index/img/oneF_BRight_Bpic3.jpg" alt=""></div>
									<div id="oneF_BRight_Bword"><a href="">43°茅台飞天500ml</a>
										<p>￥149.00</p>
									</div>
								</div>
								<div style="float: left;">
									<div id="oneF_BRight_Bpic"><img src="__ROOT__/Home/Tpl/Index/img/oneF_BRight_Bpic3.jpg" alt=""></div>
									<div id="oneF_BRight_Bword"><a href="">43°茅台飞天500ml</a>
										<p>￥149.00</p>
									</div>
								</div>
								<div style="float: left;">
									<div id="oneF_BRight_Bpic"><img src="__ROOT__/Home/Tpl/Index/img/oneF_BRight_Bpic3.jpg" alt=""></div>
									<div id="oneF_BRight_Bword"><a href="">43°茅台飞天500ml</a>
										<p>￥149.00</p>
									</div>
								</div>
								<div style="float: left;">
									<div id="oneF_BRight_Bpic"><img src="__ROOT__/Home/Tpl/Index/img/oneF_BRight_Bpic3.jpg" alt=""></div>
									<div id="oneF_BRight_Bword"><a href="">43°茅台飞天500ml</a>
										<p>￥149.00</p>
									</div>
								</div>
							</div>

							<div id="oneF_BRight_BPanel_4">
								<div style="float: left;">
									<div id="oneF_BRight_Bpic"><img src="__ROOT__/Home/Tpl/Index/img/oneF_BRight_Bpic.jpg" alt=""></div>
									<div id="oneF_BRight_Bword"><a href="">43°茅台飞天500ml</a>
										<p>￥155.00</p>
									</div>
								</div>
								<div style="float: left;">
									<div id="oneF_BRight_Bpic"><img src="__ROOT__/Home/Tpl/Index/img/oneF_BRight_Bpic.jpg" alt=""></div>
									<div id="oneF_BRight_Bword"><a href="">43°茅台飞天500ml</a>
										<p>￥149.09</p>
									</div>
								</div>
								<div style="float: left;">
									<div id="oneF_BRight_Bpic"><img src="__ROOT__/Home/Tpl/Index/img/oneF_BRight_Bpic.jpg" alt=""></div>
									<div id="oneF_BRight_Bword"><a href="">43°茅台飞天500ml</a>
										<p>￥999.00</p>
									</div>
								</div>
								<div style="float: left;">
									<div id="oneF_BRight_Bpic"><img src="__ROOT__/Home/Tpl/Index/img/oneF_BRight_Bpic.jpg" alt=""></div>
									<div id="oneF_BRight_Bword"><a href="">43°茅台飞天500ml</a>
										<p>￥199.00</p>
									</div>
								</div>
								<div style="float: left;">
									<div id="oneF_BRight_Bpic"><img src="__ROOT__/Home/Tpl/Index/img/oneF_BRight_Bpic.jpg" alt=""></div>
									<div id="oneF_BRight_Bword"><a href="">43°茅台飞天500ml</a>
										<p>￥999.00</p>
									</div>
								</div>
							</div>




						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="logo_Wall">
			<div id="wall_Title">
				<div id="WTitle_Nav">
					<ul>
						<li>官方推荐</li>
						<li>地方名品</li>
					</ul>
					<div id="title_Silder">
						<div id="title_Slider1"></div>
						<div id="title_Slider2"></div>
					</div>
				</div>
			</div>

			<div id="wall_Body">
				<div id="wall_Con_1">
					<div class="wall_outer">
						<div class="wall_inner">
							<div class="wall_inner_control">
								<a href="">
									<div>
										<img src="__ROOT__/Home/Tpl/Index/img/logowall_one.jpg" name="1">
									</div>
								</a>
							</div>	
						</div>
					</div>
					<div class="wall_outer">
						<div class="wall_inner">
							<div class="wall_inner_control">
								<a href="">
									<div>
										<img src="__ROOT__/Home/Tpl/Index/img/logowall_one.jpg" name="1">
									</div>
								</a>
							</div>	
						</div>
					</div>
					<div class="wall_outer">
						<div class="wall_inner">
							<div class="wall_inner_control">
								<a href="">
									<div>
										<img src="__ROOT__/Home/Tpl/Index/img/logowall_one.jpg" name="1">
									</div>
								</a>
							</div>	
						</div>
					</div>
					<div class="wall_outer">
						<div class="wall_inner">
							<div class="wall_inner_control">
								<a href="">
									<div>
										<img src="__ROOT__/Home/Tpl/Index/img/logowall_one.jpg" name="1">
									</div>
								</a>
							</div>	
						</div>
					</div>
					<div class="wall_outer">
						<div class="wall_inner">
							<div class="wall_inner_control">
								<a href="">
									<div>
										<img src="__ROOT__/Home/Tpl/Index/img/logowall_one.jpg" name="1">
									</div>
								</a>
							</div>	
						</div>
					</div>
					<div class="wall_outer">
						<div class="wall_inner">
							<div class="wall_inner_control">
								<a href="">
									<div>
										<img src="__ROOT__/Home/Tpl/Index/img/logowall_one.jpg" name="1">
									</div>
								</a>
							</div>	
						</div>
					</div>
					<div class="wall_outer">
						<div class="wall_inner">
							<div class="wall_inner_control">
								<a href="">
									<div>
										<img src="__ROOT__/Home/Tpl/Index/img/logowall_one.jpg" name="1">
									</div>
								</a>
							</div>	
						</div>
					</div>
					<div class="wall_outer">
						<div class="wall_inner">
							<div class="wall_inner_control">
								<a href="">
									<div>
										<img src="__ROOT__/Home/Tpl/Index/img/logowall_one.jpg" name="1">
									</div>
								</a>
							</div>	
						</div>
					</div>
					<div class="wall_outer">
						<div class="wall_inner">
							<div class="wall_inner_control">
								<a href="">
									<div>
										<img src="__ROOT__/Home/Tpl/Index/img/logowall_one.jpg" name="1">
									</div>
								</a>
							</div>	
						</div>
					</div>
					<div class="wall_outer">
						<div class="wall_inner">
							<div class="wall_inner_control">
								<a href="">
									<div>
										<img src="__ROOT__/Home/Tpl/Index/img/logowall_one.jpg" name="1">
									</div>
								</a>
							</div>	
						</div>
					</div>
					<div class="wall_outer">
						<div class="wall_inner">
							<div class="wall_inner_control">
								<a href="">
									<div>
										<img src="__ROOT__/Home/Tpl/Index/img/logowall_one.jpg" name="1">
									</div>
								</a>
							</div>	
						</div>
					</div>
					<div class="wall_outer">
						<div class="wall_inner">
							<div class="wall_inner_control">
								<a href="">
									<div>
										<img src="__ROOT__/Home/Tpl/Index/img/logowall_one.jpg" name="1">
									</div>
								</a>
							</div>	
						</div>
					</div>
					<div class="wall_outer">
						<div class="wall_inner">
							<div class="wall_inner_control">
								<a href="">
									<div>
										<img src="__ROOT__/Home/Tpl/Index/img/logowall_one.jpg" name="1">
									</div>
								</a>
							</div>	
						</div>
					</div>
					<div class="wall_outer">
						<div class="wall_inner">
							<div class="wall_inner_control">
								<a href="">
									<div>
										<img src="__ROOT__/Home/Tpl/Index/img/logowall_one.jpg" name="1">
									</div>
								</a>
							</div>	
						</div>
					</div>
					<div class="wall_outer">
						<div class="wall_inner">
							<div class="wall_inner_control">
								<a href="">
									<div>
										<img src="__ROOT__/Home/Tpl/Index/img/logowall_one.jpg" name="1">
									</div>
								</a>
							</div>	
						</div>
					</div>
					<div class="wall_outer">
						<div class="wall_inner">
							<div class="wall_inner_control">
								<a href="">
									<div>
										<img src="__ROOT__/Home/Tpl/Index/img/logowall_one.jpg" name="1">
									</div>
								</a>
							</div>	
						</div>
					</div><div class="wall_outer">
						<div class="wall_inner">
							<div class="wall_inner_control">
								<a href="">
									<div>
										<img src="__ROOT__/Home/Tpl/Index/img/logowall_one.jpg" name="1">
									</div>
								</a>
							</div>	
						</div>
					</div>
					<div class="wall_outer">
						<div class="wall_inner">
							<div class="wall_inner_control">
								<a href="">
									<div>
										<img src="__ROOT__/Home/Tpl/Index/img/logowall_one.jpg" name="1">
									</div>
								</a>
							</div>	
						</div>
					</div>
					
				</div>
				<div id="wall_Con_2">
						<div class="wall_outer">
							<div class="wall_inner">
								<div class="wall_inner_control">
									<a href="">
										<div>
											<img src="__ROOT__/Home/Tpl/Index/img/logowall_two.jpg" name="1">
										</div>
									</a>
								</div>	
							</div>
						</div>
						<div class="wall_outer">
							<div class="wall_inner">
								<div class="wall_inner_control">
									<a href="">
										<div>
											<img src="__ROOT__/Home/Tpl/Index/img/logowall_two.jpg" name="1">
										</div>
									</a>
								</div>	
							</div>
						</div>
						<div class="wall_outer">
							<div class="wall_inner">
								<div class="wall_inner_control">
									<a href="">
										<div>
											<img src="__ROOT__/Home/Tpl/Index/img/logowall_two.jpg" name="1">
										</div>
									</a>
								</div>	
							</div>
						</div>
						<div class="wall_outer">
							<div class="wall_inner">
								<div class="wall_inner_control">
									<a href="">
										<div>
											<img src="__ROOT__/Home/Tpl/Index/img/logowall_two.jpg" name="1">
										</div>
									</a>
								</div>	
							</div>
						</div>
						<div class="wall_outer">
							<div class="wall_inner">
								<div class="wall_inner_control">
									<a href="">
										<div>
											<img src="__ROOT__/Home/Tpl/Index/img/logowall_two.jpg" name="1">
										</div>
									</a>
								</div>	
							</div>
						</div>
						<div class="wall_outer">
							<div class="wall_inner">
								<div class="wall_inner_control">
									<a href="">
										<div>
											<img src="__ROOT__/Home/Tpl/Index/img/logowall_two.jpg" name="1">
										</div>
									</a>
								</div>	
							</div>
						</div>
						<div class="wall_outer">
							<div class="wall_inner">
								<div class="wall_inner_control">
									<a href="">
										<div>
											<img src="__ROOT__/Home/Tpl/Index/img/logowall_two.jpg" name="1">
										</div>
									</a>
								</div>	
							</div>
						</div>
						<div class="wall_outer">
							<div class="wall_inner">
								<div class="wall_inner_control">
									<a href="">
										<div>
											<img src="__ROOT__/Home/Tpl/Index/img/logowall_two.jpg" name="1">
										</div>
									</a>
								</div>	
							</div>
						</div>
						<div class="wall_outer">
							<div class="wall_inner">
								<div class="wall_inner_control">
									<a href="">
										<div>
											<img src="__ROOT__/Home/Tpl/Index/img/logowall_two.jpg" name="1">
										</div>
									</a>
								</div>	
							</div>
						</div>
						<div class="wall_outer">
							<div class="wall_inner">
								<div class="wall_inner_control">
									<a href="">
										<div>
											<img src="__ROOT__/Home/Tpl/Index/img/logowall_two.jpg" name="1">
										</div>
									</a>
								</div>	
							</div>
						</div>
						<div class="wall_outer">
							<div class="wall_inner">
								<div class="wall_inner_control">
									<a href="">
										<div>
											<img src="__ROOT__/Home/Tpl/Index/img/logowall_two.jpg" name="1">
										</div>
									</a>
								</div>	
							</div>
						</div>
						<div class="wall_outer">
							<div class="wall_inner">
								<div class="wall_inner_control">
									<a href="">
										<div>
											<img src="__ROOT__/Home/Tpl/Index/img/logowall_two.jpg" name="1">
										</div>
									</a>
								</div>	
							</div>
						</div>
						<div class="wall_outer">
							<div class="wall_inner">
								<div class="wall_inner_control">
									<a href="">
										<div>
											<img src="__ROOT__/Home/Tpl/Index/img/logowall_two.jpg" name="1">
										</div>
									</a>
								</div>	
							</div>
						</div>
						<div class="wall_outer">
							<div class="wall_inner">
								<div class="wall_inner_control">
									<a href="">
										<div>
											<img src="__ROOT__/Home/Tpl/Index/img/logowall_two.jpg" name="1">
										</div>
									</a>
								</div>	
							</div>
						</div>
						<div class="wall_outer">
							<div class="wall_inner">
								<div class="wall_inner_control">
									<a href="">
										<div>
											<img src="__ROOT__/Home/Tpl/Index/img/logowall_two.jpg" name="1">
										</div>
									</a>
								</div>	
							</div>
						</div>
						<div class="wall_outer">
							<div class="wall_inner">
								<div class="wall_inner_control">
									<a href="">
										<div>
											<img src="__ROOT__/Home/Tpl/Index/img/logowall_two.jpg" name="1">
										</div>
									</a>
								</div>	
							</div>
						</div>
						<div class="wall_outer">
							<div class="wall_inner">
								<div class="wall_inner_control">
									<a href="">
										<div>
											<img src="__ROOT__/Home/Tpl/Index/img/logowall_two.jpg" name="1">
										</div>
									</a>
								</div>	
							</div>
						</div>
						<div class="wall_outer">
							<div class="wall_inner">
								<div class="wall_inner_control">
									<a href="">
										<div>
											<img src="__ROOT__/Home/Tpl/Index/img/logowall_two.jpg" name="1">
										</div>
									</a>
								</div>	
							</div>
						</div>
				</div>
			</div>
		</div>
		<div id="logo_Shop">
			<div id="shop_Title">
				<div></div>
				<div>品牌精品店</div>
			</div>
			<div id="shop_Body">
				<div style="height:0px;position: relative;">	
						<ul class="shop_Body_Body">
							<li><a href="">兰益松</a></li>
							<li><span>|</span></li>
							<li><a href="">原味老窖</a></li>
							<li><span>|</span></li>
							<li><a href="">国五液</a></li>
							<li><span>|</span></li>
							<li><a href="">海福星</a></li>
							<li><span>|</span></li>
							<li><a href="">茅台集团国隆</a></li>
							<li><span>|</span></li>
							<li><a href="">金不换</a></li>
							
								</ul>
							<div class="shop_Body_Body2">
								<ul >
									<a href="">元曲</a>
									<span>|</span>
									<a href="">二锅头酒业股份</a>
									<span>|</span>
									<a href="">共创益</a>
								</ul>
							</div>
							<div class="shop_Body_Head" style="background: 
								url(__ROOT__/Home/Tpl/Index/img/logo_shop.jpg) center no-repeat "></div>
					
				</div>
				<div style="height:0px;position: relative;">	
						<ul class="shop_Body_Body" style="padding-top:0px;">
							<li><a href="">兰益松</a></li>
							<li><span>|</span></li>
							<li><a href="">原味老窖</a></li>
							<li><span>|</span></li>
							<li><a href="">国五液</a></li>
							<li><span>|</span></li>
							<li><a href="">海福星</a></li>
							<li><span>|</span></li>
							<li><a href="">茅台集团国隆</a></li>
							<li><span>|</span></li>
							<li><a href="">金不换</a></li>
							
								</ul>
							<div class="shop_Body_Body2" style="left:155px;">
								<ul >
									<a href="">元曲</a>
									<span>|</span>
									<a href="">二锅头酒业股份</a>
									<span>|</span>
									<a href="">共创益</a>
								</ul>
							</div>
							<div class="shop_Body_Head" style="background: 
								url(__ROOT__/Home/Tpl/Index/img/logo_shop.jpg) center no-repeat"></div>
					
				</div>
				<div style="height:0px;position: relative;">	
						<ul class="shop_Body_Body" style="padding-top:10px;">
							<li><a href="">兰益松</a></li>
							<li><span>|</span></li>
							<li><a href="">原味老窖</a></li>
							<li><span>|</span></li>
							<li><a href="">国五液</a></li>
							<li><span>|</span></li>
							<li><a href="">海福星</a></li>
							<li><span>|</span></li>
							<li><a href="">茅台集团国隆</a></li>
							<li><span>|</span></li>
							<li><a href="">金不换</a></li>
							
								</ul>
							<div class="shop_Body_Body2" style="top:112px;left:-390px;">
								<ul >
									<a href="">元曲</a>
									<span>|</span>
									<a href="">二锅头酒业股份</a>
									<span>|</span>
									<a href="">共创益</a>
								</ul>
							</div >
							<div class="shop_Body_Head" style="background: 
								url(__ROOT__/Home/Tpl/Index/img/logo_shop.jpg) center no-repeat;
								top:5px;"></div>
					
				</div>
				<div style="height:0px;position: relative;">	
						<ul class="shop_Body_Body" style="padding-top:10px;">
							<li><a href="">兰益松</a></li>
							<li><span>|</span></li>
							<li><a href="">原味老窖</a></li>
							<li><span>|</span></li>
							<li><a href="">国五液</a></li>
							<li><span>|</span></li>
							<li><a href="">海福星</a></li>
							<li><span>|</span></li>
							<li><a href="">茅台集团国隆</a></li>
							<li><span>|</span></li>
							<li><a href="">金不换</a></li>
							
								</ul>
							<div class="shop_Body_Body2" style="top:112px;left:155px;">
								<ul >
									<a href="">元曲</a>
									<span>|</span>
									<a href="">二锅头酒业股份</a>
									<span>|</span>
									<a href="">共创益</a>
								</ul>
							</div >
							<div class="shop_Body_Head" style="background: 
								url(__ROOT__/Home/Tpl/Index/img/logo_shop.jpg) center no-repeat;
								top:5px;"></div>
					
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
			$("#nav_con").show();
		</script>
		<script src="__ROOT__/Home/Tpl/Index/JS/index.js"></script>
	</html>
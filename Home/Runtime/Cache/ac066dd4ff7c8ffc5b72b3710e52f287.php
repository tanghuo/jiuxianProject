<?php if (!defined('THINK_PATH')) exit(); session_start(); ?>


 <!doctype html>
 	<html lang="en">
 	<head>

 		<meta charset="UTF-8">
 		<title>酒仙网>我的订单</title>
 		<script src="JS/jquery.min.js"></script>
 		<!-- <link rel="stylesheet" href="./CSS/index.css"> -->

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
 		#topHeadCon{
 			width: 1200px;
 			height: 26px;
 			margin: auto;
 			line-height: 26px;
 			color: #999;
 		}
 		#topHeadCon ul{
 			list-style-type: none;
 		}
 		#topHeadCon li{
 			float: left;

 		}
 		#topHeadCon a,li a{
 			color: inherit;
 			margin-left: 6px;
 			text-decoration: none;
 		}
 		#topHeadCon span{
 			color:red;
 		}
 		
 		#topHead_right{
 			float: right;
 		}
 		#topHead_right_ul li{
 			margin: 0px 5px;
 			/*padding: 0.5px;*/
 		}
 		#topHead_right_icon1 {
 			width: 5px;
 			height: 5px;
 			background:  url(img/public-8.png) -101px 1px no-repeat;
 			margin-left: 0px;
 			display: inline-block;
 		}
 		#topHead_right_phone{
 			width: 76px;
 			background: #cc0001;
 			border-radius: 2px;
 			line-height: 16px;
 			position: relative;
 			top :5px;
 			text-align:right;
 			/*vertical-align: middle;*/
 			
 		}

 		#topHead_right_phone label{
 			margin-right: 2px;
 		}
 		#topHead_right_icon2 {
 			width: 15px;
 			height: 15px;
 			background:  url(img/public-8.png) -18px 4px no-repeat;
 			/*background: #ccc;*/
 			position: relative;
 			left :-2px;
 			top :3px;
 			display: inline-block;
 		}
 		#topHead_right_icon3 {
 			width: 15px;
 			height: 15px;
 			background:  url(img/public-8.png) -60px 4px no-repeat;
 			position: absolute;
 			left :1140px;/*100%的缩放下，绝对位置是这个数*/
 			top :3px;
 			display: inline-block;
 		}/*手机图标*/
 		#topHead_right_icon4 {
 			width: 15px;
 			height: 15px;
 			background:  url(img/public-8.png) -78px 4px no-repeat;
 			/*background: #ccc;*/
 			position: relative;
 			left :-1px;
 			top :1px;
 			display: inline-block;
 		}
 		#topHead_right_icon5 {
 			width: 15px;
 			height: 15px;
 			background:  url(img/public-8.png) -90px -261px no-repeat;
 			/*background: #ccc;*/
 			position: relative;
 			left :-1px;
 			top :1px;
 			display: inline-block;
 		}
 		#topHead_father_one {
 			width: 74px;
 		}
 		#topHead_follow_one{
 			background: white;
 			width: 80px;
 			height: 85px;
 			position: relative;
 			left :0px;
 			padding-top: 5px;
 			display: none;
 		}
 		#topHead_follow_two{
 			background: white;
 			width: 90px;
 			height: 89px;
 			position: absolute;
 			left :-7px;
 			top :21px;
 			border-top: 1px solid #000;
 			display: none;
 		}
 		#topHead_follow_three{
 			z-index: 999;
 			background: white;
 			width: 185px;
 			height: 255px;
 			position: absolute;		
 			display: none;
 		}
 		#topHead_follow_three p{
 			font-size: 15px;
 			margin-left:10px;
 			margin-top: 0px;
 			color: black;

 		}
 		#topHead_follow_three p:last-child{
 			margin-top:5px;
 			
 		}
 		#topHead_follow_three table{
 			margin: 0px;
 			margin-left: 10px;
 			margin-bottom: 0px;
 			height:20px;
 			line-height: 20px;
 		}
 		#topHead_follow_three tr{
 			color: #666666;
 			font-size: 12px;
 			text-align:center；

 		}
 		#topHead_follow_three th{
 			width: 80px;

 		}
 	
 		#topHead_follow_four{
 			background: white;
 			width: 90px;
 			height: 90px;
 			position: absolute;
 			left :0px;
 			display: none;
 		}
 		#topHead_follow_four li{
 			margin-left:15px;
 		}
 		#top_img{
 			width: 81px;
 			height: 81px;
 			margin: auto;
 			position: absolute;
 			left: 4.5px;
 			top:4.5px;
 		}
 		
 		.li_Top_InChange{
 			cursor:pointer;
 			color:  red;
 			text-decoration: underline;
 			float: left;
 		}
 		.li_Top_OutChange{
 			cursor:default;
 			color: #999;
 			text-decoration: none;
 		}
 		
 		#topHead_follow_one li,#topHead_follow_four li{
 			color: #999;
 		}
 		/*以上是页面最上栏*/


 		#top_Foucsbox{
 			background:  url(img/focusBox.jpg) center top  no-repeat;
 			height: 90px;
 			width: 100%;
 		}
 		#midHeaderCon{
 			width: 1200px;
 			height: 125px;
 			margin:  0 auto;
 			position: relative;
 		}
 		#midHeader_Logo{
 			margin-top: 30px;
 			float: left
 		}
 		#midHeader_LeftGif{
 			float: left;
 			margin-top:30px;
 			margin-left:10px;
 		}
 		#midSearch{
 			/*background: #0083a4;*/
 			float: left;
 			width: 540px;
 			height: 38px;
 			margin-top: 30px;
 			margin-left: 20px;
 		}
 		#midSearch_main{
 			width: 534px;
 			height: 32px;
 			border: 3px solid #ce171f;
 			
 		}
 		#search_input{
 			border: none;
 			width:450px;
 			height: 32px;
 			margin-left: 10px;
 			font-size: 12px;
 			opacity: 0.7;
 		}
 		#midSearch_block{
 			position: relative;
 			bottom:33px;
 			left: 465px;
 			width: 75px;
 			height: 33px;
 			background: #ce171f;
 		}
 		#midSearch_word{
 			position: relative;
 			bottom:60px;
 			left: 487px;
 			color: #fff;
 			font-size: 15px;
 		}
 		#hotWords {
 			height: 18px;
 			position: relative;
 			top :-43px;

 		}
 		#hotWords ul{
 			list-style: none;

 		}
 		#hotWords ul li{
 			float: left;
 			margin-left: 5px;
 			color: #999;
 		}
 		#hotWords ul li:first-child{
 			margin-left: 0px;
 		}
 		#hotWords a{
 			margin-left: 0px;
 		}
 		#midHeader_right{
 			position: relative;
 			top:-76px;
 			left:821px;
 		}
 		.mid_In{
 			color: red;
 			text-decoration: underline;
 		}
 		.imd_out{
 			color:#999;
 			text-decoration: none;
 		}
 		#navWrap{
 			width: 100%;
 			height: 34px;
 			background: #990000;
 			position: relative !important;
 		}
 		#nav{
 			width: 1200px;
 			height: 34px;
 			margin: auto;
 			position: relative;
 		}
 		#navCategoryMenu{
 			width: 189px;
 			height: 34px;
 			background: #ce171f;
 			float: left;
 			text-align: center;
 		}
 		#navList{
 			width: 1011px;
 			height: 34px;
 			float: left;
 			background: #990000;
 		}
 		#navCategoryMenu span{
 			height: 34px;
 			font-size: 17px;
 			color:white;
 			line-height: 34px;
 		}
 		#navList{
 			line-height: 34px;
 			color:white;
 		}
 		#navList a{
 			padding: 0px;
 			margin:0px;
 		}
 		#navList div{
 			float: left;
 			padding: 0 15px;
 			position: relative;
 		}
 		
 		#navList li{
 			font-size: 17px;
 			list-style-type: none;
 			float: left;
 			background: #990000;
 		}
 		#navList_shouye{
 			background: #b40c10;
 		}
 		.navList_In{
 			background: #b40c10;
 		}
 		#navList_pic_one{
 			z-index:999;
 			float: left;
 			position: absolute;
 			top: -7px;
 			left: 327px;
 			height: 17px;
 			width: 29px;
 			background:  url(img/public-8.png) 0px -264px no-repeat;
 		}
 		#navList_pic_two{
 			z-index:999;
 			float: left;
 			position: absolute;
 			top: -7px;
 			left: 417px;
 			height: 17px;
 			width: 29px;
 			background:  url(img/public-8.png) 0px -264px no-repeat;
 		}
 		#navList_pic_three{
 			z-index:999;
 			float: left;
 			position: absolute;
 			top: -7px;
 			left: 785px;
 			height: 17px;
 			width: 29px;
 			background:  url(img/public-8.png) 0px -264px no-repeat;
 		}
 		#mainBanner{
 			opacity: 1;
 			cursor: pointer;
 			float: left;
 			height: 470px;
 			width: 100%;
 			background:  url(img/mainBanner_pic1.jpg) top center no-repeat;

 		}
 		#mainBanner2{
 			position: absolute;
 			float: left;
 			height: 470px;
 			width: 100%;
 			background:  url(img/mainBanner_pic2.jpg) top center no-repeat;
 		}
 		#mainBanner3{
 			position: absolute;
 			float: left;
 			height: 470px;
 			width: 100%;
 			background:  url(img/mainBanner_pic3.jpg) top center no-repeat;
 		}
 		#mainBanner4{
 			position: absolute;
 			float: left;
 			height: 470px;
 			width: 100%;
 			background:  url(img/mainBanner_pic4.jpg) top center no-repeat;
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
 		#footer{
 			width: 100%;
 			height: 590px;
 			margin:auto;
 			margin-top: 10px; 
 			
 		}
 		#footer_main_color{
 			width: 100%;
 			height: 290px;
 			margin:auto;
 			background: #333333;
 		}
 		#footer_main{
 			width: 1200px;
 			height: 290px;
 			margin:auto;
 		}
 		#footer_MTop{
 			width: 1200px;
 			height: 85px;
 		}
 		#footer_MLine{
 			width: 1200px;
 			height: 1px;
 			background: #737373!important;
 		}
 		#footer_MBottom{
 			height: 153px;
 			width: 1200px;
 		}
 		#footer_end{
 			padding-top: 20px;
 			width: 1200px;
 			height: 280px;
 			margin:auto;
 		}
 		#footer_endL{
 			width: 760px;
 			height: 220px;
 			float: left;
 			position: relative;
 		}
 		#footer_endR{
 			width: 220px;
 			height: 220px;
 			margin-left: 30px;
 			float: left;
 			padding: 10px;
 		}
 		#footer_endR p{
 			margin-left:12px;
 		}
 		#footer_endL p{
 			position: relative;
 			top:30px;
 			left:0px;
 			color: #666;
 		}
 		#footer_endL p :first-child{
 			margin-left:0px;
 		}
 		#footer_endL a{
 			color: inherit;
 			text-decoration: none;
 			margin-left:5px;
 			margin-right:5px;  
 		}
 		.endL_div{
 			float: left;
 		}
 		#footer_MTopL{
 			height: 85px;
 			line-height: 85px;
 			padding-left: 80px;
 			padding-top:0px;
 			float: left;
 			position: relative;
 		}
 		#footer_MTopL2{
 			height: 85px;
 			line-height: 85px;
 			padding-left: 20px;
 			padding-top:0px;
 			float: left;
 			color:white;
 			font-size: 17px;
 		}
 		#footer_MTopL3{
 			height: 85px;
 			line-height: 85px;
 			padding-left: 5px;
 			padding-top:0px;
 			padding-right: 40px;
 			float: right;
 			font-size: 17px;
 		}
 		#footer_MTopL3 input{
 			height: 22px;
 			width: 250px;
 			color:#999;
 			padding: 4px;
 			background: #333333;
 			border-color: #999;
 			border-width: 1px;
 			border-style: solid;
 		}
 		#footer_MTopL4{
 			height: 85px;
 			line-height: 85px;
 			padding-left: 20px;
 			padding-top:0px;
 			float: right;
 			color:white;
 			font-size: 12px;
 		}
 		#footer_MTopL_img1{
 			width: 40px;
 			height: 40px;
 			float;left; 
 			position: relative;
 			top:20px;
 			left:30px;
 			background:  url(img/public-8.png) -144px -22px no-repeat;
 		}
 		#footer_MTopL_img2{
 			z-index: 999;
 			/*background: #ccc;*/
 			width: 18px;
 			height: 18px;
 			float:right; 
 			position: relative;
 			top:-6px;
 			left: 360px;
 			background:  url(img/public-8.png) 0px -200px no-repeat;
 		}
 		.footer_mid{
 			position: relative;
 			width: 1200px;
 			height: 153px;	
 			margin-top: 50px;	
 			float: left;
 		}
 		.footer_mid ul{
 			margin-left: 70px;
 			margin-right: 30px;
 			line-height: 25px;
 			color: #999;
 			list-style: none;
 			list-style-type: none;
 			float: left;
 		}
 		.footer_mid li:first-child{
 			font-size: 16px;
 			margin-bottom: 3px;
 		}
 		.footer_mid a{
 			margin:0;
 			padding: 0px; 
 		}
 		.footer_midPic {
 			z-index: 999;
 			width: 26px;
 			height: 26px;
 			position: relative;
 			top:-102px;
 			left: -32px;
 		}
 		#footer_mid_out{
 			color:#999;
 			position: relative;
 			left :60px;
 			font-size: 17px;
 		}
 		#footer_mid_out p{
 			margin-bottom:10px;
 		}
 		#footer_mid_out_pic1{
 			width:28px;
 			height:28px;
 			position: relative;
 			top:-34px;
 			left:950px;
 			background:  url(img/public-8.png) -140px -74px no-repeat;
 		}
 		#footer_mid_out_pic2{
 			width:28px;
 			height:28px;
 			position: relative;
 			top:-34px;
 			left:950px;
 			background:  url(img/public-8.png) -103px -74px; no-repeat;
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
 			background:  url(img/public-9.png) 0 -95px no-repeat;
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
 			background:  url(img/public-9.png) -38px 0 no-repeat;
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
 			background:  url(img/public-9.png) 0 0 no-repeat;
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
 		#navList_right{
 			width: 120px;
 			overflow: hidden;
 			height: 32px;
 			float: right;
 			z-index: 66;/*

 			background: #000;*/
 		}
 		#navList_right div{
 			width: 120px;
 			height: 40px;
 		}
 		#nav_con{
 			z-index: 99;
 			height: 470px;
 			width: 189px;
 			position: absolute;
 			top:34px;
 			left: 265px;
 			background: #F9F9F9;
 		}
 		#nav_con ul{
 			list-style: none;
 		}
 		#nav_con ul li{
 			clear: #999;
 			float: left;
 			height: 20px;
 			line-height: 20px;
 			border-radius: 5px;
 			text-align: center;
 			padding-left:5px;
 			padding-right:5px;
 			margin-top:10px;
 		}

 		#nav_con a{
 			margin:0!important;
 			text-decoration: none!important;
 		}
 		#nav_con span{
 			position: relative;
 			left:-20px;
 			top:5px;
 			font-size: 	15px;
 			color: #333;
 			margin-left:30px;
 		}
 		#nav_con_son{
 			z-index: 999;
 			height: 470px;
 			width: 550px;
 			position: relative;
 			top:0px;
 			left: 189px;
 			background: #F9F9F9;
 		}
 		.nav_con1{
 			width: 180px;
 			height: 117.5px;
 			position: relative;
 			left: 12px;
 			top:12px;
 			float: left;
 			line-height: 28px;
 			cursor: pointer;
 		}
 		.nav_con1_nav{
 			background: red;
 			height: 117.5px;
 			width: 5px;
 			position: relative;
 			top:-41px;
 			left:-15px;
 		}

 		.nav_con1_pic{
 			z-index: 99;
 			position: relative;
 			left: 5px;
 			top:7px;
 			float: left;
 			width: 14px;
 			height: 20px;
 			background:  url(img/public-8.png) -73px -260px no-repeat;
 			/*background: red;*/
 		}
 		.nav_con1_pic2{
 			z-index: 99;
 			position: relative;
 			left: 5px;
 			top:7px;
 			float: left;
 			width: 14px;
 			height: 20px;
 			background:  url(img/public-8.png) -16px -102px no-repeat;
 			/*background: red;*/
 		}
 		.nav_con1_pic3{
 			z-index: 99;
 			position: relative;
 			left: 5px;
 			top:7px;
 			float: left;
 			width: 14px;
 			height: 20px;
 			background:  url(img/public-8.png) -37px -100px; no-repeat;
 			/*background: red;*/
 		}
 		.nav_con1_pic4{
 			z-index: 99;
 			position: relative;
 			left: 5px;
 			top:7px;
 			float: left;
 			width: 14px;
 			height: 20px;
 			background:  url(img/public-8.png) -59px -100px; no-repeat;
 			/*background: red;*/
 		}
 		/*public-8.png*/
 		/*2px -100px*/
 		.nav_son1_P div{
 			text-align: left!important;
 			position: relative;
 			float: left;
 			left:00px;
 		}
 		.nav_son1_T{
 			font-size: 18px;
 			position: relative;
 			left: 40px;
 			top:10px;
 			width: 100px;
 		}
 		.nav_son1_P{
 			position: relative;
 		}
 		#nav_con_son1{
 			position: absolute;
 			width: 560px;
 			height: 80px;
 			/*width: 550px;*/
 		}
 		#nav_con_son2{
 			position: absolute;
 			width: 560px;
 			height: 80px;
 			/*width: 550px;*/
 		}
 		.nav_son1_ul{
 			position: relative;
 			left:80px;
 			margin-left:20px;
 			/*margin: */
 			width: 400px;
 		}
 		.forHr{
 			position: relative;
 			margin-left:120px;
 			margin-top:20px;
 			background: #999;
 			height: 2px;
 			width: 400px;
 		}
 		#user_M{
 			width: 1200px;
 			margin: auto;
 		}
 		#user_M_Lfet{
 			width: 189px;
 			text-align: center;
 			float: left;
 		}
 		.rego{
 			color: white;
 			font-size: 20px;
 			height: 40px;
 			background: red;
 			text-align: center;
 			line-height: 40px;
 		}
 		#u_info{
 			/*margin-top: 10px;*/
			/*width: 80px;*/
			/*height: 10px;*/
			padding: 10px;
			padding-left: 00px;
 		}
 		#u_info div{
 			position: relative;
 			margin-left: 20px;
 			width: 60px;
 			height: 60px;
 			border:2px solid #999;
 			border-radius: 50px;
 			float: left;
 		}
 		#u_info_1{
			/*position: absolute;*/
			position: relative;
			left:10px;
			padding-left:20px;
			/*margin-bottom: 10px;*/
			/*font-size: 20px;*/
 		}
 		#u_info_1  div{
 			position: relative;
 			top:-10px;
 			/*margin-top:-20px;*/
 			margin: 5px;

 		}
/**/	
		#Money_info span{
			color: red;
		}
		#Money_info p{

			padding-bottom: 5px;
		}
		#Money_info{
			font-size: 15px;
			margin-left: 10px;
		}

		#UM_Lnav ul li{
			list-style: none!important;
			margin: 20px;
			font-size: 15px;
		}
		#UM_Lnav ul li:first-child{
			/*color: red;*/
			font-size:28px!important;
		}
		#UM_Lnav ul li:hover{
			text-decoration: underline;
			color: red;
		}
		#UM_Lnav ul:last-child{
			margin-bottom: 60px;
		}
		.clearfix:after{
            content:"";
            display:table;
            clear:both;
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
        #uRM_Nav ul li:nth-child(3){

        	/*font-size: 15px!important;*/
        	margin-left:120px;
			margin-right: 120px;

        }
        
 	</style>
 	<body>
 	
 		<div id="topHeadCon">
 			<div id="topHead_left">
 				<ul id="topHead_left_ul">
 					<li class="topHeadCon_notRed">欢迎来到酒仙网！<li>
 					<li><a href="./login.php">请登录</a></li>
 					<li><a href="./sign.php" >免费注册</a></li>
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
 							
 						</div><a href="">购物车<span>0</span>件</a>
 					</li>
 					<li>
 						<span><a href="">CLUB会员</a></span>
 					</li>
 					<li>
 						<i>| </i>
 						<a href="">招商入驻</a>
 						<i> |</i>
 					</li>
 					<li id="topHead_right_phone">
 						<label  style="color:white;"><a href="">手机逛酒仙</a></label >	
 						<div id="topHead_follow_two">
 							<img src="img/top_code.png" id="top_img">
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

 	

 		<div id="midHeaderCon">
 			
 			<div id="headerLogo">
 				<div id="midHeader_Logo">
 					<a href=""><img src="img/logo.png"  
 					style="width:137;height:65px;"></a>
 				</div>		
 				<div id="midHeader_LeftGif">
 					<a href=""><img src="img/midHeader_LeftGif.gif" 
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
 					<img src="img/midHeader_Right.png" alt="">
 				</div>
 			</div>	
 		</div>
 		
 		<div id="navWrap" style="
 			position: relative;">
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
 						<li><a href=""><img src="img/navList.gif" alt=""></a></li>
 					</ul>
 				</div>
 				
 					
 				</div>
 				<div id="nav_con">
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
 					<p>累积消费金额：<span><b>0.00</b></span></p>
 					<p>待确认消费金额：<span><b>0.00</b></span></p>
 				</div>
 				<div id="UM_Lnav">
 					<ul>
 						<li><b>交易管理</b></li>
 						<li><a href="./userOrder.php">我的订单</a></li>
 						<li><a href="./useReturn.php">退货记录</a></li>
 						<li><a href="./userCllect.php">我的收藏</a></li>
 					</ul>
 					<ul>
 						<li><b>酒仙圈</b></li>
 						<li><a href="./userComment.php">商品评价/晒单</a></li>
 						<li><a href="./userConsult.php">购买咨询</a></li>
 					</ul>
 					<ul>
 						<li><b>我的账户</b></li>
 						<li><a href="">基本信息</a></li>
 						<li><a href="./userAddress.php">收获地址</a></li>
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
						<li>退货记录</li>
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
							<li>退货编号</li>
							<li>订单编号</li>
							<li>商品名称</li>
							<li>申请时间</li>
							<li>状态</li>
						</ul>
					</div>
					<p>没有记录</p>
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

		}
		</script>
 		<script src="__ROOT__/Home/Tpl/Index/JS/index.js"></script>
 	</html>
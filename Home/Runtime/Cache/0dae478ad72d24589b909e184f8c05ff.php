<?php if (!defined('THINK_PATH')) exit();?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册页面</title>
	<script  src="JS/jquery.min.js"></script>
</head>
	<style>
	*{
		margin: 0px;
		padding:0px;
	}
	#sign_Top_Bg{
		width: 100%;
		border-bottom: 1px solid #bbb;
		box-shadow: 2px 2px 2px #bbb;

		overflow:visible;
		z-index: -99;

	}
	#sign_Top_Bd{
		overflow:visible;
		position: relative;
		width: 1200px;
		height: 63px;
		margin:auto;
		margin-bottom: 10px;
		margin-top:10px;

	}

	#sign_Top_Bd div{
		float: left;
		overflow:visible;
	}
	#sign_Top_R{
		float: right!important;
		position: relative;
		top:20px;
		overflow:visible;
	}
	#sign_Top_R ul li {
		float: left;
		list-style: none;
		margin-left: 5px;
		margin-right: 10px;

		overflow:visible;
	}
	#sign_Top_R a{
		text-decoration: none;

	}
	#sign_box{
		height: 500px;
		width: 994px;
		margin:auto;
		position: relative;
		top:80px;

		border-width: 2px;
		border-radius: 8px;
		border-color: #bbb;
		border-style: solid;
		box-shadow: 10px 10px 20px #bbb;
		background: white;
	}
	#box_main{
		position: relative;
		width: 402px;
		/*376*/
		margin: auto;
		padding-top: 90px;
	}
	#box_main *{
		float: right;
	}
	#box_main input{
		position: relative;
		padding-left: 30px;
		width: 250px;
		height: 35px;
		margin-top: 7px;
		margin-bottom: 7px;
		font-size: 18px;
		color: #999;
		/*box-shadow: 1px 1px 1px #bbb;*/
		border-width: 1px;
		border-style: solid;
		border-color: #bbb;
	}
	#box_main div{
		position: relative;
		/*height: 35px;*/
		line-height:51px;
	}
	#box_main span{
		position: relative;
		margin-right: 30px;
		color: #666;
	}
	#box_main a{
		text-decoration: none;
	
		color: #0066cc;
	}
	#Sread{
		position: relative;
		top:12px;
		width: 15px !important;
		height: 15px !important;
	}
	button {
		position: relative;
		top :10px;
		float: right;
		width: 282px;
		height: 45px;
		border-width: 0px;
		border-radius: 0px;
		background: #e10303;
		color: white;
		font-size: 20px;
		letter-spacing:3px;
	}
	#sign_Bd{
		background:  url(img/sign_bg.jpg) repeat-x scroll left top;
		position: relative;
		z-index: -99;
	}
	#sign-end{
		position: relative;
		width: 100%;
		margin: auto;
	}
	#end_box{
		position: relative;
		top:150px;
		text-align: center;
		margin: auto;
		font-size: 14px;
	}
	.inError{
		z-index: 99;
		position: absolute;
		top:50px;
	}
	#inPic1{
		z-index: 99;
		width: 26px;
		height: 26px;
		position: absolute;
		top:16px;
		left: 110px;
		background:  url(img/regLogin-8.png) -47px 0 no-repeat;
	}
	#inPic2{
		z-index: 99;
		width: 26px;
		height: 26px;
		position: absolute;
		top:16px;
		left: 110px;
		background:  url(img/regLogin-8.png) -421px 0 no-repeat;
	}
	#inPic3{
		z-index: 99;
		width: 26px;
		height: 26px;
		position: absolute;
		top:16px;
		left: 126px;
		background:  url(img/regLogin-8.png) -76px 0 no-repeat;
	}
	#inPic4{
		z-index: 99;
		width: 26px;
		height: 26px;
		position: absolute;
		top:16px;
		left: 126px;
		background:  url(img/regLogin-8.png) -76px 0 no-repeat;
	}
	#Sign_Tpic{
		z-index: 99;
		width: 20px;
		height: 20px;
		position: relative;
		left:-35px;
		top:5px;
		background:  url(img/regLogin-8.png) -19px 0 no-repeat;
	}
	#sign_Tmaster{
		position: relative;
		/*background: red;*/
		padding-right: 17px;
		border-style: solid;
		border-width: 1px;
		border-color: #999;
		padding-left:5px;
		padding-bottom: 5px;
		background: white;
	 
	}
	#YZcd{
		position: absolute!important;
		top:9px;
		left:277px;
		/*background: #222;*/
		width: 106px;
		height:  33px;
		cursor: pointer;
	}
	#follow1{
		padding:0px;
		margin:0px;
		height: 20px;
		/*width: 100px;*/
		line-height: 20px;
		position: absolute!important;
		left:277px;
		top:35px;
		font-size: 11px;
		background: #bbb;
		text-align: center;
		display :none;
	}
	#follow1 p{
		position: relative;
		top:-15px;
		color: white;
	}
	#follow1_2{
		padding:0px;
		margin:0px;
		height: 20px;
		/*width: 100px;*/
		line-height: 20px;
		position: absolute!important;
		left:277px;
		top:35px;
		font-size: 11px;
		background: #ed787f;
		text-align: center;
		display: none;
	}
	#follow1_2 p{
		position: relative;
		top:-15px;
		color: white;
	}
	#follow1_3{
		padding:0px;
		margin:0px;
		height: 20px;
		/*width: 100px;*/
		line-height: 20px;
		position: absolute!important;
		left:277px;
		top:35px;
		font-size: 11px;
		background: #ed787f;
		text-align: center;
		display: none;
	}
	#follow1_3 p{
		position: relative;
		top:-15px;
		color: white;
	}
	#follow3{
		padding:0px;
		margin:0px;
		height: 20px;
		/*width: 100px;*/
		line-height: 20px;
		position: absolute!important;
		left:277px;
		top:35px;
		font-size: 11px;
		background: #bbb;
		text-align: center;
		display: none;
	}
	#follow3 p{
		position: relative;
		top:-15px;
		color: white;
	}
	#follow3_2{
		padding:0px;
		margin:0px;
		height: 20px;
		/*width: 100px;*/
		line-height: 20px;
		position: absolute!important;
		left:277px;
		top:35px;
		font-size: 11px;
		background: #ed787f;
		text-align: center;
		display: none;
	}
	#follow3_2 p{
		position: relative;
		top:-15px;
		color: white;
	}
	#follow4{
		padding:0px;
		margin:0px;
		height: 20px;
		/*width: 100px;*/
		line-height: 20px;
		position: absolute!important;
		left:277px;
		top:35px;
		font-size: 11px;
		background: #ed787f;
		text-align: center;
		display: none;
	}
	#follow4 p{
		position: relative;
		top:-15px;
		color: white;
	}
	#follow2{
		padding:0px;
		margin:0px;
		height: 20px;
		/*width: 100px;*/
		line-height: 20px;
		position: absolute!important;
		left:197px;
		top:35px;
		font-size: 11px;
		background: #ed787f;
		text-align: center;
		display: none;
	}
	#follow2 p{
		position: relative;
		top:-15px;
		color: white;
	}
	
	</style>
<body>

	<!-- sign_bg.jpg -->
	<div id="sign_Top">
		<div id="sign_Top_Bg">
			<div id="sign_Top_Bd">
				<div>
				<a href="./index.php">
					<img src="img/logo.png" alt="">
				</a>
				</div>
				<div>
					<img src="img/slogan.jpg" alt="">
				</div>
				<div id="sign_Top_R">
					<div>
						<ul>
							<li style="color:#999;">欢迎来到酒仙网！</li>
							<li><a href="./login.php"  style="color:#0066cc;"#>请登录</a></li>
						</ul>
						
					</div>
				</div>
			</div>
			
		</div>
		
	</div>
	<div id="sign_Bd"style="z-index:99999;" >
		<div id="sign_box" >
				<div id="box_main" >
					<form action="../admin/ad_sign.php" method="post">
						<div style="position: relative;">	
								
								
								<input type="text" maxlength="11"  name="user">
								<span>手机号</span>
								<div id="inPic1"></div>
								<div id="follow1"><p>请输入11位的手机号</p></div>
								<div id="follow1_2"><p>请输入手机号</p></div>
								<div id="follow1_3"><p>请输入正确的手机号</p></div>
							
						</div>
						<div >
							

								<input type="text"  maxlength="4"name="YZcode">
								<span>验证码</span>
								<div id="inPic2"></div>
								<div id="YZcd"><img src="../admin/codeCreate.php" alt=""></div>
								<div id="follow2"><p>请输入验证码</p></div>
							
						</div>
						<div>
							
								<input type="password" maxlength="12" name="password">
								<span>设置密码</span>
								<div id="inPic3"></div>
								<div id="follow3"><p>密码长度为8位以上</p></div>
								<div id="follow3_2"><p>请输入8位以上的密码</p></div>
						</div>
						<div>
							
								<input type="password" name="pass-recheck">
								<span>确认密码</span>
								<div id="inPic4"></div>
								<div id="follow4"><p>请再次输入密码</p></div>
								
						</div>
						<div>


							<p><a href="">《酒仙网用户注册协议》</a></p>
							<div style="font-size:14px;color:#999;margin-top:1px;">我已阅读并同意</div>
							<input id="Sread" type="checkbox">
							<div><button name="imTijiao">提交注册</button></div>


						</div>
					</form>
				</div>
		</div>
	</div>
	<div id="sign-end">
		<div id="end_box">
			<p>©  酒仙网  2011 jiuxian.com All  Rights Reserved  京ICP证110141号  京公网安备1101050188221</p>
			<p style="color:red;">购买前请确认达到法定饮酒年龄！酒仙网不销售任何含酒精产品给18岁以下人士！</p>
		</div>

	</div>
</body>
<script>
	var swi=false;//提交注册的开关，默认为false
	$("button").css({"background-color":"#bbb"});
	$("input").blur(function(){
		$(this).css({"border-color":"#ed787f"});
	});
	$("a").mouseover(function(){
		$(this).css({"color":"red","text-decoration":"underline"});
	});
	$("a").mouseout(function(){
		$(this).css({"color":"#0066cc","text-decoration":"none"});
	});
	$("#YZcd").click(function(){
		console.log(11);
		temp=$(this).children().attr("src");
		temp +="?";
		temp +=1;
		console.log(temp);
		$(this).children().attr("src",temp);
	});


	pout();

	function pout(){
		$("input").focus(function(){
			index=$(this).parent().index();
			switch (index){
				case 0:
				$("#follow1").show();
				break;
				case 1:
				// $("#follow2").show();
				break;
				case 2:
				$("#follow3").show();
				break;
				case 3:
				$("#follow4").show();
				break;
				
			}

		});
		$("input").blur(function(){
			allReady();
			$("div[id^=follow]").hide();

			index=$(this).parent().index();

			switch (index){

				case 0:
				if($(this).val().length<11 && $(this).val().length>=0){
					$("#follow1_3").show();
				}
				if($(this).val().length=11){
					$(this).css({"border-color":"#bbb"});
				}
				break;

				case 1:
				if($(this).val().length<4 && $(this).val().length>=0){
					$("#follow2").show();
				}
				if($(this).val().length=4){
					$(this).css({"border-color":"#bbb"});
				}
				break;

				case 2:
				if($(this).val().length<8 && $(this).val().length>=0){
					$("#follow3_2").show();
				}
				if($(this).val().length>8){
					$(this).css({"border-color":"#bbb"});
				}

				case 3:
				// $("#follow4").show();
				var temp=$("form").children().eq(2).find("input").val();
				console.log(temp);
				if($(this).val()==1){
					$(this).css({"border-color":"#bbb"});
				}
				break;
				
			}


		});
	}
	$("form").keyup(function(){
		allReady();
	});

	setInterval(function(){
		allReady();
	},50);
	$("button").mouseover(function(){
		$(this).css({"cursor":"pointer"});
	});
	$("button").click(function(){
		var temp=$("#Sread").is(":checked");
		console.log(temp);
		if(swi==false){
			return false;
		}

	});

	function allReady(){
		var chk=0;
		if($("#Sread").is(":checked")){
			chk +=1;
		}

 		if(
 			$("input[name='password']").val()
 			==
 			$("input[name='pass-recheck']").val()
 			){
 			if($("input[name='password']").val()!=""){
 				chk +=1;
 			}
 			
 		}

 		if($("input[name='user']").val().length==11){
 			chk +=1;
 		}

 		if($("input[name='YZcode']").val().length==4){
 			chk +=1;
 		}

 		if(chk==4){
 			$("button").css({"background":"#e10303"});
 			
 			return swi=true;
 		}
 		else{
 			$("button").css({"background":"#bbb"});
 			
 			return swi=false;
 		}
	}
</script>
</html>
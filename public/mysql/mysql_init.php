<?php 
			
		// session_start();

		// echo "hahaha";	
		// var_dump($_GET);
		// var_dump($_POST);
		// var_dump($_SESSION);
	

	try{

		

		$user="root";
		$pass="123456789";

		$PDO=new PDO("mysql:host=localhost;dbname=jiuxian",$user,$pass);
		$PDO->beginTransaction();


		$query= queryPart();
		
		
		$temp=$PDO->prepare($query);

		


		$temp->execute();
		$result=$temp->fetchAll(PDO::FETCH_ASSOC);

		
		$PDO->commit();
		if($result && $_POST['hide']){

			$_SESSION['user']=$result["Name"];

			echo "<script>";
			echo "window.location.href='/kuanjia/Index.php/Index/.php";
			echo "</script>";
			exit();
		}
		// var_dump($_SERVER);
		 echo json_encode($result); 

	}catch(PDOException $e)
	{
		echo 'Connection failed: ' . $e->getMessage();
	}

	function queryPart(){
		
		if($_GET["way"]=="fifteen"){
		return	$query="select *
					from user LIMIT 14,1";
		}
		else if($_GET["way"]=="butInit"){

		return	$query="select count(*)
					from user ";
		
		}	
		elseif($_GET["b_val"]){
				$mark=$_GET["b_val"]*15-15;
				if($mark<0){
					$mark=0;
				}
				$_SESSION["make"]=$mark;
				return	$query="select * from user LIMIT {$mark},15";//页数排序
		}
		elseif($_POST['hide']){//登录?
			$user=$_POST["user"];
			$password=$_POST["password"];
		return 	$query="select * from user where Name={$user} and Password ={$password}";
		}
		// elseif {
		// return	$query="select * from user LIMIT 15";
		// }
		

	}
 ?>	
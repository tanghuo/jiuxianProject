<?php 
	// var_dump($_GET['commandId']) ;

	// exit;
	require_once('../config/config.php');
	try{
		$_opts_values = array(PDO::ATTR_PERSISTENT=>true,PDO::ATTR_ERRMODE=>2);
		$PDO=new PDO("mysql:host=localhost;dbname=jiuxian_admin",MYSQL_NAME,MYSQL_PASS, $_opts_values);
		$PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION );	
		$PDO->beginTransaction();
		$query="select commandName from adminCommand where commandId >=? and commandId <?";
		$temp = $PDO->prepare($query);
		$temp -> bindParam(1,$commandId);
		$temp -> bindParam(2,$commandId2);
		$commandId = $_GET['commandId'];
		$commandId2 = $commandId + 10;
		$temp -> execute();
		$result=$temp->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($result); 
		// var_dump($result);
		$PDO->commit();
	}catch(PDOException $e)
	{
		echo 'Connection failed: ' . $e->getMessage();
		$PDO->rollback();

	}

	

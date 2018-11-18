<?php 
	
	try{
		

		$user="root";
		$pass="123456789";

		$PDO=new PDO("mysql:host=localhost;dbname=jiuxian",$user,$pass);
		$PDO->beginTransaction();
		$query="delete from user 
				where userID=?";
		// $query="insert user(Name,Password) values('wrwer','yjtjrt')";
		$temp=$PDO->prepare($query);

		$temp->bindParam(1, $ID);


		$ID=$_POST["ID"];
		// for($i=0;$i<2000;$i++){
			$temp->execute();
		// }
			
		

		echo json_encode("success");
		$PDO->commit();
		
	}catch(PDOException $e)
	{
		echo 'Connection failed: ' . $e->getMessage();
	}


	


 ?>	
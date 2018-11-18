<?php
// 本类由系统自动生成，仅供测试用途
class MysqlAction extends Action {
    public function delete(){
    	$Model=M();
    	// $Model = new PDO("mysql:host=localhost;dbname=jiuxian;charset=utf8","root","123456789");
    	//$Model=$Model->query('SELECT * FROM User ');
    	// echo $Model;
    	 // $db = new PDO("dbtype:host=yourhost;dbname=yourdbname;charset=utf8","username","password");
    	// $mysecuredata=14;
    	$Model=$Model->query("Select * from User ");
    	// $Model = $Model->fetchAll();

    	var_dump($Model);

    }
    public function justtest(){
    	// echo "is it success";
    }
}
<?php
    class CmysqlModel extends Model{
        public function conmysql(){
           	 $user="root";
           	 $pass="123456789";
           	 $PDO=new PDO("mysql:host=localhost;dbname=jiuxian",$user,$pass);
           	 return $PDO;
        	// echo "im conmysql";
        	// return "im conmysql";
        }
    }
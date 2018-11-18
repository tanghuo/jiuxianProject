<?php
// 本类由系统自动生成，仅供测试用途
class adminAction extends Action {
    public function adminIndex(){
    	$this->display("ad_main");

    }
    public function adminUser(){

    	$this->display("ad_userInfo");

    }
    public function adminAdv1(){

    	$this->display("ad_main_adv1");

    }
     public function adminAdv2(){

    	$this->display("ad_main_adv2");

    }
    // ad_main_additem
     public function ad_main_additem(){

        $this->display("ad_main_additem");
    }
     //cart_settlement
    //ad_main_sell
     public function ad_main_sell(){

        //连接数据库
       
        $user="root";
        $pass="123456789";

        $Model=new PDO("mysql:host=localhost;dbname=jiuxian",$user,$pass);
        $Model -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION ); 


        //查询订单信息
        $query = "SELECT * FROM sell";
        $PDO = $Model->prepare($query);
        // $PDO -> bindParam(1,$user_id);
        // $user_id = $_SESSION["user_id"];
        $PDO -> execute();
        $sellInfo = $PDO -> fetchAll(PDO::FETCH_ASSOC);
       

        //查询商品名称和价格
        $query = "SELECT item_detail,item_price FROM shopitem WHERE item_id = ?";
        $PDO = $Model->prepare($query);
        foreach ($sellInfo as $key => $value) {

            $PDO = $Model -> prepare($query);

            $PDO -> bindParam(1,$item_id);

            $item_id = $sellInfo[$key][item_id];

            $PDO -> execute();

            $sellitem[] = $PDO -> fetchAll(PDO::FETCH_ASSOC);

            $sellInfo[$key]["item_detail"] = $sellitem[$key][0][item_detail];
            
            $sellInfo[$key]["item_price"] = $sellitem[$key][0][item_price];

        }
        //查询用户基本信息

        $query = "SELECT * FROM user WHERE UserID = ?";
        $PDO = $Model->prepare($query);
        foreach ($sellInfo as $key => $value) {

            $PDO = $Model -> prepare($query);

            $PDO -> bindParam(1,$user_id);

            $user_id = $_SESSION["user_id"];

            $PDO -> execute();

            $user_info[] = $PDO -> fetchAll(PDO::FETCH_ASSOC);

            $_SESSION["admin_user_info"] =$user_info;

            $sellInfo[$key]["Name"] = $user_info[$key][0]["Name"];

        }

        

        //分配变量
        $this->assign("sellInfo",$sellInfo);#订单基本信息

        //显示视图
        $this->display("ad_main_sell");
    }
    // ad_main_rate
    public function ad_main_rate(){

        //连接数据库
        
        $user="root";
        $pass="123456789";

        $Model=new PDO("mysql:host=localhost;dbname=jiuxian",$user,$pass);
        $Model -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION ); 

        //查询订单信息
        $query = "SELECT * FROM user_rate";
        $PDO = $Model->prepare($query);
        // $PDO -> bindParam(1,$user_id);
        // $user_id = $_SESSION["user_id"];
        $PDO -> execute();
        $rateInfo = $PDO -> fetchAll(PDO::FETCH_ASSOC);

        //查询用户名
        $query = "SELECT * FROM user where UserID=?";
        $PDO = $Model->prepare($query);
        $PDO -> bindParam(1,$user_id);

        foreach ($rateInfo as $key => $value) {
            # code...
            $user_id = $rateInfo[$key]["user_id"];

            $PDO -> execute();

            $userInfo[] = $PDO -> fetchAll(PDO::FETCH_ASSOC);

            $_SESSION["userInfo"] = $userInfo;

            $rateInfo[$key]["Name"] = $userInfo[$key][0]["Name"];

            $_SESSION["rateInfo"] = $rateInfo;

        }

        //查询商品名
        $query = "SELECT * FROM shopitem where item_id=?";
        $PDO = $Model->prepare($query);
        $PDO -> bindParam(1,$item_id);

        foreach ($rateInfo as $key => $value) {
            # code...
            $item_id = $rateInfo[$key]["item_id"];

            $PDO -> execute();

            $itemInfo[] = $PDO -> fetchAll(PDO::FETCH_ASSOC);

            $_SESSION["itemInfo"] = $itemInfo;

            $rateInfo[$key]["item_content"] = $itemInfo[$key][0]["item_detail"];
            // $rateInfo[$key] = $itemInfo[$key][0]["item_detail"];
            

            $_SESSION["rateInfo"] = $rateInfo;


        }
        //分配变量
        $this->assign("rateInfo",$rateInfo);

        //显示视图
        $this->display("ad_main_rate");
    }


    //ad_main_consult

    public function ad_main_consult(){

        //连接数据库
        
        $user="root";
        $pass="123456789";

        $Model=new PDO("mysql:host=localhost;dbname=jiuxian",$user,$pass);
        $Model -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION ); 

        //查询订单信息
        $query = "SELECT * FROM user_consult";
        $PDO = $Model->prepare($query);
        $PDO -> execute();
        $consultInfo = $PDO -> fetchAll(PDO::FETCH_ASSOC);

        //查询用户名
        $query = "SELECT * FROM user where UserID=?";
        $PDO = $Model->prepare($query);
        $PDO -> bindParam(1,$user_id);

        foreach ($consultInfo as $key => $value) {
            # code...
            $user_id = $consultInfo[$key]["user_id"];

            $PDO -> execute();

            $userInfo[] = $PDO -> fetchAll(PDO::FETCH_ASSOC);

            $_SESSION["userInfo"] = $userInfo;

            $consultInfo[$key]["Name"] = $userInfo[$key][0]["Name"];

            $_SESSION["consultInfo"] = $consultInfo;

        }

        //查询商品名
        $query = "SELECT * FROM shopitem where item_id=?";
        $PDO = $Model->prepare($query);
        $PDO -> bindParam(1,$item_id);

        foreach ($consultInfo as $key => $value) {
            # code...
            $item_id = $consultInfo[$key]["item_id"];

            $PDO -> execute();

            $itemInfo[] = $PDO -> fetchAll(PDO::FETCH_ASSOC);

            $_SESSION["itemInfo"] = $itemInfo;

            $consultInfo[$key]["item_content"] = $itemInfo[$key][0]["item_detail"];
            // $rateInfo[$key] = $itemInfo[$key][0]["item_detail"];
            

            $_SESSION["consultInfo"] = $consultInfo;


        }
        //分配变量
        $this->assign("consultInfo",$consultInfo);


        $this->display("ad_main_consult");
    }

    //mysql_sell_sendGoods
    public function mysql_sell_sendGoods(){
        $this->display("mysql_sell_sendGoods");
    }

    public function test(){
    	$this->display("test");
    }
    public function mysqlinit(){
        $this->display("test");
    }
    // ad_userInfo
}
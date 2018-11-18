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
    //添加商品
     public function uploadItemInfo(){

        $this->display("uploadItemInfo");

    }
    public function test(){
    	$this->display("test");

    }
    // ad_userInfo
}
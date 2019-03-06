<?php
Class PersonInfo
{
    public function getName(){
        return "My Name is Chance";
    }
}
// 改成自己的地址
$s = new SoapServer(null,array("location"=>"http://localhost:8080/soap/server1.php","uri"=>"server1.php"));
$s -> setClass("PersonInfo");
$s -> handle();

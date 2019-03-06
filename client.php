<?php
// 改成自己的地址
$soap = new SoapClient(null,array('location'=>"http://localhost:8080/soap/server1.php",'uri'=>'server1.php'));
//两种调用方式，直接调用方法，和用__soapCall简接调用
$result1 = $soap->getName();
$result2 = $soap->__soapCall("getName",array());
echo $result1."<br/>";
echo $result2;
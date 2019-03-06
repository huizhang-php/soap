<?php
ini_set('default_socket_timeout',80);
ini_set('soap.wsdl_cache_enabled', 0); //关闭wsdl缓存
$soap = new SoapClient('http://localhost:8080/soap/daemo2/myapi.wsdl?wsdl');
var_dump($soap->__getFunctions()); // 输出暴露的方法
var_dump($soap->__getTypes()); // 输出每个方法参数
$res = $soap->Bdd('123'); // 调用
var_dump($res);
<?php
/**
 * User: yuzhao
 * CreateTime: 2019/3/5 下午4:03
 * Description:
 */
class myapi {

    public function HelloWorld() {
        return "Hello";
    }

    public function Add($a) {
        return $a;
    }

    public function Bdd($a) {
        return $a;
    }
}
$server = new SoapServer('myapi.wsdl', array('soap_version' => SOAP_1_2));
$server->setClass("myapi"); // 注册Service类的所有方法
$server->handle(); // 处理请求
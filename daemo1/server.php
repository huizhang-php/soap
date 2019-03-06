<?php
/**
 * User: yuzhao
 * CreateTime: 2019/3/5 下午3:27
 * Description:
 */

include("robot.php");
ini_set('soap.wsdl_cache_enabled','0');    //关闭WSDL缓存
$objSoapServer = new SoapServer("robot_origin.wsdl");//person.wsdl是刚创建的wsdl文件
$objSoapServer->setClass("Robot");//注册person类的所有方法
$objSoapServer->handle();//处理请求
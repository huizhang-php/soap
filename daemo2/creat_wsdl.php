<?php
/**
 * User: yuzhao
 * CreateTime: 2019/3/5 下午3:45
 * Description:
 */
ini_set('soap.wsdl_cache_enabled', 0); //关闭wsdl缓存
include("Service.php");
include("SoapDiscovery.class.php");
$disco = new SoapDiscovery('myapi', 'soap'); //第一个参数是类名（生成的wsdl文件就是以它来命名的），即Service类，第二个参数是服务的名字（这个可以随便写）。
$disco->getWSDL();
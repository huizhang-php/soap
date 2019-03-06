<?php
$client = new SoapClient("http://localhost:8080/soap/daemo1/robot_origin.wsdl", array('trace'=>true));
try {
    $parms = array(
        'EXEC_STATE' => "hujun",
        'PICTURE' => 'pictures',
        'TASK_NO' => 'task_nos',
    );
    $result = $client->receiveTaskResult($parms);
    var_dump($result);
    print("<br/>=======================<br/>");

    $standPointInfo = array(
        'POINTDES' => 'hujun',
        'STANDPOINT' => 'standPoint',
        'STOR_TYPE' => 'storType',
        'WH_NO' => 'whNo',
    );
    $standPointInfoArray = array(
        array(
            'POINTDES' => 'hujun',
            'STANDPOINT' => 'standPoint',
            'STOR_TYPE' => 'storType',
            'WH_NO' => 'whNo1',
        ),
        array(
            'POINTDES' => 'hujun',
            'STANDPOINT' => 'standPoint',
            'STOR_TYPE' => 'storType',
            'WH_NO' => 'whNo2',
        ),
    );
    $result = $client->receiveStandPointInfo($standPointInfoArray);
    var_dump($result);
    print("<br/>=======================<br/>");

    //下面两个看懂,输出就是你要写的类
    var_dump($client->__getFunctions());//打印暴露的方法
    print("<br/>");
    var_dump($client->__getTypes());//打印对应方法的参数和参数类型
    print("<br/>");
    echo("\nDumping request headers:\n");
    var_dump($client->__getLastRequestHeaders());
    echo "<br>";
    echo("\nDumping request:\n");
    var_dump($client->__getLastRequest());
    echo "<br>";
    echo("\nDumping response headers:\n");
    var_dump($client->__getLastResponseHeaders());
    echo "<br>";
    echo("\nDumping response:\n");
    var_dump($client->__getLastResponse());
}
catch (SoapFault $f){
    echo "Error Message: {$f->getMessage()}";
}
?>
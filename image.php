<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/25
 * Time: 17:10
 */
error_reporting(E_ALL);
$xmlstr= file_get_contents("php://input");
$filename=time().'.png';
if(file_put_contents($filename,$xmlstr)){
    echo 'success';
}else{
    echo 'failed';
}
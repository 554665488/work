<?php
//header("Content-Type: multipart/form-data; charset=UTF-8");
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/25
 * Time: 17:06
 */
//var_dump($_SERVER);
//exit();
//var_dump(file_get_contents('./img/qq.jpg'));
$data = file_get_contents('./img/qq.jpg');
$http_entity_body = $data;
$http_entity_type = 'application/x-www-form-urlencoded';
$http_entity_length = strlen($http_entity_body);
$host = '127.0.0.1';
$port = 80;
$path = './image.php';
$fp = fsockopen($host, $port);
if ($fp) {
    fputs($fp, "POST {$path} HTTP/1.1\r\n");
    fputs($fp, "Host: {$host}\r\n");
    fputs($fp, "Content-Type: {$http_entity_type}\r\n");
    fputs($fp, "Content-Length: {$http_entity_length}\r\n");
    fputs($fp, "Connection: close\r\n\r\n");
    fputs($fp, $http_entity_body . "\r\n\r\n");
    $d = '';
    while (!feof($fp)) {
        $d .= fgets($fp, 4096);
    }
    fclose($fp);
    echo $d;
}
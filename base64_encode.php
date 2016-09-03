<?php

//设计此种编码是为了使二进制数据可以通过非纯8-bit的传输层传输 例如电子邮件的主题
//编码后的数据不原始数据多占用33%左右的空间
$arr=explode(".", '15546688.jpg');
array_pop($arr);
//var_dump($arr);
echo $basenames=basename('sssss.kpg','.kpg');;
echo realpath(__DIR__) . PHP_EOL;
$real_path = realpath("./qq");//返回当前文件所在绝对路径
var_dump($real_path);
exit;
$str='name';
//echo $encode_after=base64_encode($str);
//echo base64_decode($encode_after);//反编码

//将数组分隔为指定参数的神数组
$arr=range(0,20);
//var_dump(array_chunk($arr,10,true));//第三个参数可选默认为false 为true不会改变数组的键名
//join是implode的别名
$arr = array('Hello','World!','I','love','Shanghai!');
//echo join(' ',$arr);
echo implode(' ',$arr);

//将字符串分割组成preg_split正则分割字符串为数组    str_split 制定长度分割字符串为数组
$str='hell';
$aar=str_split($str,'1');//返回的数组
var_dump($aar);
//将字符串分隔成多个部分

$str = "aassss";

echo chunk_split($str,2)."\n";//Yar? m ki lo ? ay, yar? m ki lo ? eker  肉太多  分割


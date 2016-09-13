<?php 
$arr=array('112','name');

$text=vsprintf('id为 %u 名字为 %s',$arr);//变量赋值替换
echo $text;
$str1 = "Hello";
$str2 = "Hello world!";

echo vsprintf("[%s]",array($str1))."<br>";
echo vsprintf("[%8s]",array($str1))."<br>";
echo vsprintf("[%-8s]",array($str1))."<br>";
echo vsprintf("[%08s]",array($str1))."<br>";
echo vsprintf("[%'*8s]",array($str1))."<br>";
echo vsprintf("[%8.8s]",array($str2))."<br>";
?>
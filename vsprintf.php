<?php 
$arr=array('112','name');

$text=vsprintf('idΪ %u ����Ϊ %s',$arr);//������ֵ�滻
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
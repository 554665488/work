<?php

//设计此种编码是为了使二进制数据可以通过非纯8-bit的传输层传输 例如电子邮件的主题
//编码后的数据比原始数据多占用33%左右的空间
$arr=explode(".", '15546688.jpg');
array_pop($arr);
//var_dump($arr);
// echo $basenames=basename('sssss.kpg','.kpg');;返回路径的文件名部分
// echo realpath(__DIR__) . PHP_EOL;
$real_path = realpath("./qq");//返回当前文件所在绝对路径
// var_dump($real_path);
// exit;
$str='name';
//echo $encode_after=base64_encode($str);
//echo base64_decode($encode_after);//反编码

//将数组分隔为指定参数的神数组
$arr=range(0,20);
//var_dump(array_chunk($arr,10,true));//第三个参数可选默认为false 为true不会改变数组的键名
//join是implode的别名
$arr = array('Hello','World!','I','love','Shanghai!');
//echo join(' ',$arr);
// echo implode(' ',$arr);

//将字符串分割组成preg_split正则分割字符串为数组    str_split 制定长度分割字符串为数组
$str='hell';
$aar=str_split($str,'1');//返回的数组  array(4) { [0]=> string(1) "h" [1]=> string(1) "e" [2]=> string(1) "l" [3]=> string(1) "l" }
// var_dump($aar);
//将字符串分隔成多个部分

$str = "aassss";

// echo chunk_split($str,2)."\n";//Yar? m ki lo ? ay, yar? m ki lo ? eker  肉太多  分割     aa ss ss  将字符串已制定长度分割成数组

$keyword="a b,c d";
$arr=preg_split('/[\s,]+/',$keyword);
// print_r($arr);

$arr=array('a'=>'A','b'=>'B');
$arr=array_values($arr);//获取数组的所有值 并重建索引
// print_r($arr);
$string = 'The quick brown fox jumped over the lazy dog.';
$patterns=array();
$patterns[0]='/quick/';
$patterns[1]='/brown/';
$patterns[2]='/fox/';   //fox欺骗
$replacements=array();
$replacements[0]='a';
$replacements[1]='b';
$replacements[2]='c';
// echo preg_replace($patterns,$replacements,$string);//正则替换 1）待搜索的字符串  2）用来替换的字符 3）被搜索的字符串
 $array = array("23.32","22","12.009","23.43");
 print_r(preg_grep('/^(\d+)?\.\d+$/',$array));
 
 function map($n,$m){
	 return $n.'++'.$m;
 }
 
$a = array(1, 2, 3, 4, 5);
$b = array("uno", "dos", "tres", "cuatro", "cinco");
 
 $c=array_map('map',$a,$b);
 /*
 Array
(
    [0] => 1++uno
    [1] => 2++dos
    [2] => 3++tres
    [3] => 4++cuatro
    [4] => 5++cinco
)
将两个数组整个到一起
 */
 print_r($c);
 
 
 
 
 
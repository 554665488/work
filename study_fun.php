<?php 
$str="name=yfl&key=sss";
parse_str($str,$array);//将url请求的变量字符串解释到变量
/* echo $name;
echo $key; */
//print_r($array);//注：讲字符串解析到变量
array_map('test',$array);//将数组的每一个单元传入到数组当中
function test($v){
	
	echo $v."\n";
}

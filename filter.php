<?php
 function map($n,$m){
	 return $n.'++'.$m;
 }
 
$a = array(1, 2, 3, 4, 5);
$b = array("uno", "dos", "tres", "cuatro", "cinco");
 
 $c=array_map('map',$a,$b);
 // print_r($c);
 
 // Array
// (
    // [0] => 1++uno
    // [1] => 2++dos
    // [2] => 3++tres
    // [3] => 4++cuatro
    // [4] => 5++cinco
// )
 
 
$keyword="a b,c d";
$arr=preg_split('/[\s,]+/',$keyword);//Array ( [0] => a [1] => b [2] => c [3] => d )
// print_r($arr);
exit;
function convertSpace($string){
	return str_replace("_",".",$string);
}
$string="www_runoob_com";
$str=filter_var($string,FILTER_CALLBACK,array('options'=>"convertSpace"));
echo $str;
exit;
if(!filter_has_var(INPUT_GET,"email")){
	echo "没有参数";
}else{
	if(!filter_input(INPUT_GET,"email",FILTER_VALIDATE_EMAIL)){
		echo "不是一个合法的E-Mail";
	}else{
		echo "是一个合法的E_Mail";
	}
}
exit;
$var=300;
$int_option=array(
   "options"=>array(
      "min_range"=>0,
	  "max_range"=>256
   )
);
if(!filter_var($var,FILTER_VALIDATE_INT,$int_option)){
	echo "不是一个合法的整数";
}else{
	echo "是一个合法的参数";//西游记告诉我们，有后台的妖精最后都被接走了，没有后台的都被打死了。
}
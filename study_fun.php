<?php 
$str="name=yfl&key=sss";
parse_str($str,$array);//��url����ı����ַ������͵�����
/* echo $name;
echo $key; */
//print_r($array);//ע�����ַ�������������
array_map('test',$array);//�������ÿһ����Ԫ���뵽���鵱��
function test($v){
	
	echo $v."\n";
}

<?php 
//proerty_exists  �Ʋ� �Ƿ����  �������������� property �Ƿ������ָ�������У��Լ��Ƿ����ڵ�ǰ��Χ�ڷ��ʣ���
class person{
	static protected $test;
	static function prex(){
		$str='5489796548.jpg';
		$arr=pathinfo($str);
	}
}
$obj=new person();
$b=property_exists('person','test');
var_dump($b);
var_dump(property_exists('person','test'));
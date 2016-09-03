<?php 
//proerty_exists  财产 是否存在  本函数检查给出的 property 是否存在于指定的类中（以及是否能在当前范围内访问）。
class person{
	static protected $test;
	public function prex(){
		$str='5489796548.jpg';
		$arr=pathinfo($str);
	}
}
$obj=new person();
$b=property_exists('peerson','prex');
var_dump($b);
var_dump(property_exists('person','test'));
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/25
 * Time: 12:07
 */
class M{

public function getCommandObiect($error){

   echo $error;

}

}
/*
try{

    $m=new M();
    $cmd=$m->getCommandObiect('cuowuxinxi');
   
}catch(Exception $e){

    print $e->getMessage();
    exit();
}
*/

function checkNum($number){
	if($number>1){
		throw new Exception('must > 1');//这里规定如何触发异常每一个throw必须对应一个catch
		
	}
	return true;
}
function checkPhone($phone){
	
	if(strlen($phone)>11){
		throw new Exception('手机号为11位');
	}
}
try{  
	checkNum(2);//在try代码块中使用自定义的错误处理函数
	//checkPhone('182460174611');
}catch(Exception $e){//catch 代码块会捕获异常  触发异常
	
	echo $e->getMessage();
}
try{
  checkPhone('182460174611');	
	
}catch(Exception $q){
	
	echo $q->getMessage();
}
<?php
//设置顶层的异常处理器
function myException($exception){
	echo "<b>Exception</b>:".$exception->getMessage();
}
set_exception_handler('myException');
throw new Exception('Uncaught Exception occurred');
exit;
//重新抛出异常
class customException extends Exception {
	
	public function errorMessage(){
	   $errorMsg=$this->getMessage().'不是一个合法数据';
       return	$errorMsg;
	   
	}
}
$email="sonmeone@example.com";
try{
	try{
		if(strpos($email,'example')!==false){
			throw new Exception($email);
		}
	}
	catch(Exception $e){
		throw new customException($email);
	}
}
catch(customException $e){
	echo $e->errorMessage();
}
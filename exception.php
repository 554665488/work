<?php
//���ö�����쳣������
function myException($exception){
	echo "<b>Exception</b>:".$exception->getMessage();
}
set_exception_handler('myException');
throw new Exception('Uncaught Exception occurred');
exit;
//�����׳��쳣
class customException extends Exception {
	
	public function errorMessage(){
	   $errorMsg=$this->getMessage().'����һ���Ϸ�����';
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
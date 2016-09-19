<?php 

error_reporting(E_ALL);
class consume_time{
  
  public $arr=array();  
  
	public function __construct(){
		$this->arr=func_get_args();
		$this->test();
		
	}
	  /*public function test(){
		var_dump($this->arr);
		foreach($this->arr as $val){
			foreach($val as $v){
			 	
				if($v=='b') continue 1;
				echo $v; 
				
			}
		}
		
		
	}*/
	public function test(){//????????
		$time=microtime(true);
		foreach($this->arr as $key=>$val){
			// echo $val."\n";
			for($i=5000;$i--;){
				$x=$key+1;
				$val();
				//echo $x;
				
			}

		}
	   //echo microtime(true)-$time;
	}
	
}
$obj=new consume_time('a','b','c');

function a(){};
function b(){};
function c(){};
//echo microtime();//0.14491000 1472448437 true ΢
echo microtime(true);// 1472448452.1648  //
$timeparts = explode(' ',microtime()); 
var_dump($timeparts);

/*
//var_dump(range(1,20));//
//$arr=range(1,20);
//shuffle($arr);//
//var_dump($arr);


*/

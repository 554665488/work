<?php 
function fa(){ return 1;}
function fb(){return 1;}
function fc(){return 1;}
$calla='fa';
$callb='fb';
$callc='fc';
$time=microtime(true);
//echo $time;

echo "</br>";
for($i=5000;$i--;){ //for 循环可以有三个参数，注意也可以有两个 在第二个参数后边加分号 ：：：：：

	//echo $i."</br>";
	$x = 0;
    $x += $calla();
    $x += $callb();
    $x += $callc();
    if( $x != 3 ) die( 'Bad numbers' );
	
}
echo (microtime(true)-$time);
echo "\n\n变量函数消耗时间最短";

echo "<hr>";
$time=microtime(true);
for($i=5000;$i--;){
	$x=0;
	$x+=call_user_func('fa');
	$x+=call_user_func('fb','');
	$x+=call_user_func('fc','');
	if($x!=3) die('Bad numbers');
}
echo (microtime(true)-$time);//变量函数花了0.125958204269秒。同时执行5000次 call_user_func消耗的时间长
//call_user_func花了0.485446929932秒。
//eval花了2.78526711464秒。
echo "\n\ncall_user_func时间变长";
echo "<hr>";
$time=microtime(true);
for($i=5000;$i--;){
	$x=0;
	eval('$x+='.$calla.'();');
	eval('$x+='.$callb.'();');
	eval('$x+='.$callc.'();');
	if($x!=3)die ('程序执行错误');
}
echo microtime(true)-$time;
echo "\n\neval解析变量时间变最长";
echo "<hr>";
 exit;
 //call _uer_func  把第一的参数作为函数调用

//namespace one;
//例：注意哦  call_user_func()的参数不能为引用传递  作用用域的问题

//设置错误级别
error_reporting(E_ALL);
function increment(&$var){
	$var++;
	echo $var;
}
$a=0;
//echo @call_user_func('increment',$a);

echo $a."\n";
@call_user_func_array("increment",array(&$a));//
echo $a."\n";//调用回调函数的返回值如果失败  返回的false

//命名空间的使用  使用命名空间必须是类元素的引用
exit();
// namespace two;
 class Foo{
	 static public function test($var){
		 
		 //print "test function ".$var;
		 
	 }
	 
 }
 call_user_func(__NAMESPACE__.'\Foo::test','554665488');
 call_user_func(array(__NAMESPACE__ .'\Foo','test'),'55466544'); 
 
 
 
//调用一个类的方法

/* class myclass{
	
	static function H(){
		
		//echo "hellow";
	}
	
}
$myclss='myclass';
call_user_func(array($myclss,'H'));//总结调用类的方法使用call_user_func 参数为数组的时候 数组的第一个值可以为类的名字或者类的一个对象  第二个参数为调用的方法
call_user_func($myclss.'::H');
$my=new myclass();
call_user_func(array($my,'H'));     //参数的传递必须一个整体数组或者拼接的字符串


//call_user_func_array的测试   调用制定的的回调函数 并且把参数数组作为回调函数的参数


function test($var1,$var2){
	
	//echo __FUNCTION__.$var1.$var2;
}

call_user_func_array('test',array('one','two'));

class A{
	
	function test($var1,$var2){
		
		echo __CLASS__.$var1.$var2."\n";
		echo __METHOD__.$var1.$var2;
		
	}
}
$a=new A();
call_user_func_array(array($a,'test'),array('o','t'));//输出foobar got one and two            foo::bar got three and four */

exit;
//namespace three;
class B{
	
	static public function Foo($var1,$var2){
		
		echo __METHOD__.$var1,$var2."\n";
	}
}
call_user_func_array(__NAMESPACE__.'\B::Foo',array('one','two','5555'));


call_user_func_array(array(__NAMESPACE__.'\B','Foo'),array('1','2'));//总结：1）在使用 call_user_func_array的时候调用类里边的方法第一参数：：array(对象实例，方法名，array（参数1，参数2））)
                                                                     //      2）是用当前的命名空间的时候；参数是两部分  1，参数2））注意是两部分
																	 //  1被调用的回调函数。2第二个参数是数组，并且为索引数组



























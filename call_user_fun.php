<?php 
/* //call _uer_func  �ѵ�һ�Ĳ�����Ϊ��������

namespace one;
//����ע��Ŷ  call_user_func()�Ĳ�������Ϊ���ô���

//���ô��󼶱�
error_reporting(E_ALL);
function increment(&$var){
	$var++;
	echo $var;
}
$a=0;
echo @call_user_func('increment',$a);

echo $a."\n";
//call_user_func_array("increment",array(&$a));
echo $a."\n";//���ûص������ķ���ֵ���ʧ��  ���ص�false

//�����ռ��ʹ��  ʹ�������ռ��������Ԫ�ص�����

namespace two;
 class Foo{
	 static public function test($var){
		 
		 //print "test function ".$var;
		 
	 }
	 
 }
 call_user_func(__NAMESPACE__.'\Foo::test','554665488');
 call_user_func(array(__NAMESPACE__ .'\Foo','test'),'55466544'); */
 
 
 
//����һ����ķ���

/* class myclass{
	
	static function H(){
		
		//echo "hellow";
	}
	
}
$myclss='myclass';
call_user_func(array($myclss,'H'));//�ܽ������ķ���ʹ��call_user_func ����Ϊ�����ʱ�� ����ĵ�һ��ֵ����Ϊ������ֻ������һ������  �ڶ�������Ϊ���õķ���
call_user_func($myclss.'::H');
$my=new myclass();
call_user_func(array($my,'H'));


//call_user_func_array�Ĳ���   �����ƶ��ĵĻص����� ���ҰѲ���������Ϊ�ص������Ĳ���


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
call_user_func_array(array($a,'test'),array('o','t'));//���foobar got one and two            foo::bar got three and four */


namespace three;
class B{
	
	static public function Foo($var1,$var2){
		
		echo __METHOD__.$var1,$var2."\n";
	}
}
call_user_func_array(__NAMESPACE__.'\B::Foo',array('one','two','5555'));


call_user_func_array(array(__NAMESPACE__.'\B','Foo'),array('1','2'));//�ܽ᣺1����ʹ�� call_user_func_array��ʱ���������ߵķ�����һ��������array(����ʵ������������array������1������2����)
                                                                     //      2�����õ�ǰ�������ռ��ʱ�򣻲�����������  1������2����ע����������
																	 //  1�����õĻص�������2�ڶ������������飬����Ϊ��������



























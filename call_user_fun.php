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
for($i=5000;$i--;){ //for ѭ������������������ע��Ҳ���������� �ڵڶ���������߼ӷֺ� ����������

	//echo $i."</br>";
	$x = 0;
    $x += $calla();
    $x += $callb();
    $x += $callc();
    if( $x != 3 ) die( 'Bad numbers' );
	
}
echo (microtime(true)-$time);
echo "\n\n������������ʱ�����";

echo "<hr>";
$time=microtime(true);
for($i=5000;$i--;){
	$x=0;
	$x+=call_user_func('fa');
	$x+=call_user_func('fb','');
	$x+=call_user_func('fc','');
	if($x!=3) die('Bad numbers');
}
echo (microtime(true)-$time);//������������0.125958204269�롣ͬʱִ��5000�� call_user_func���ĵ�ʱ�䳤
//call_user_func����0.485446929932�롣
//eval����2.78526711464�롣
echo "\n\ncall_user_funcʱ��䳤";
echo "<hr>";
$time=microtime(true);
for($i=5000;$i--;){
	$x=0;
	eval('$x+='.$calla.'();');
	eval('$x+='.$callb.'();');
	eval('$x+='.$callc.'();');
	if($x!=3)die ('����ִ�д���');
}
echo microtime(true)-$time;
echo "\n\neval��������ʱ����";
echo "<hr>";
 exit;
 //call _uer_func  �ѵ�һ�Ĳ�����Ϊ��������

//namespace one;
//����ע��Ŷ  call_user_func()�Ĳ�������Ϊ���ô���  �������������

//���ô��󼶱�
error_reporting(E_ALL);
function increment(&$var){
	$var++;
	echo $var;
}
$a=0;
//echo @call_user_func('increment',$a);

echo $a."\n";
@call_user_func_array("increment",array(&$a));//
echo $a."\n";//���ûص������ķ���ֵ���ʧ��  ���ص�false

//�����ռ��ʹ��  ʹ�������ռ��������Ԫ�ص�����
exit();
// namespace two;
 class Foo{
	 static public function test($var){
		 
		 //print "test function ".$var;
		 
	 }
	 
 }
 call_user_func(__NAMESPACE__.'\Foo::test','554665488');
 call_user_func(array(__NAMESPACE__ .'\Foo','test'),'55466544'); 
 
 
 
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
call_user_func(array($my,'H'));     //�����Ĵ��ݱ���һ�������������ƴ�ӵ��ַ���


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

exit;
//namespace three;
class B{
	
	static public function Foo($var1,$var2){
		
		echo __METHOD__.$var1,$var2."\n";
	}
}
call_user_func_array(__NAMESPACE__.'\B::Foo',array('one','two','5555'));


call_user_func_array(array(__NAMESPACE__.'\B','Foo'),array('1','2'));//�ܽ᣺1����ʹ�� call_user_func_array��ʱ���������ߵķ�����һ��������array(����ʵ������������array������1������2����)
                                                                     //      2�����õ�ǰ�������ռ��ʱ�򣻲�����������  1������2����ע����������
																	 //  1�����õĻص�������2�ڶ������������飬����Ϊ��������



























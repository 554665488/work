<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/28
 * Time: 16:51
 */
error_reporting(E_ALL);
function increment(&$var)
{
    $var++;
    echo $var;
}

$a = 1;
//call_user_func('increment',$a);
//call_user_func_array('increment',array(&$a));
//echo $a;
//命名空间的使用  使用命名空间必须是类元素的引用


// namespace two;
class Foo
{
    static public function test($var)
    {

        print "test function " . $var;

    }

}

//call_user_func(__NAMESPACE__ . '\Foo::test', '554665488');
//call_user_func(array(__NAMESPACE__.'\Foo','test'),'12345');
class D
{
    public  function test()
    {
        echo __FUNCTION__;
    }
}
$d=new D();
call_user_func(array($d,'test'));//参数的传递必须一个整体数组或者拼接的字符串
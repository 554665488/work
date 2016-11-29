<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/29
 * Time: 13:15
 */
class A
{
    public static function get_self()
    {
        return new self();
    }

    public static function get_static()
    {
        return new static();
    }
}

class B extends A
{
}

echo get_class(B::get_self()) . '</br>';//A
echo get_class(B::get_static()) . '</br>';//B
echo get_class(A::get_static()) . '</br>';//A
/**
 * self 是代码段里面的这个类
 * static 只是当前的这个类有点$this的的意思是从堆栈里取出来的类，访问的是当前实例化的那个类，那么static代表的就是那个类
 */
class D
{
    public function create1()
    {
        $class = get_class($this);
        return new $class();
    }

    public function create2()
    {
        return new static();
    }
}

class F extends A
{
}

$b = new F();
var_dump(get_class($b->create1()), get_class($b->create2()));
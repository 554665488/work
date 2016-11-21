<?php 
error_reporting(E_ALL);
$a=true;
$b=true;
//var_dump($a Xor $b); //false
$c=true;
$c && $v=1;
//var_dump($v);
var_dump(empty($g)&&isset($g));//empty若变量不存在返回true
echo '<B>未定义$var</b><Br>';
echo "isset测试:<Br>";
if ( isset ( $var ))
{
    echo '变量$var存在!<Br>' ;

}
//若变量存在且其值为""、0、"0"、NULL、、FALSE、array()、var $var; 以及没有任何属性的对象，则返回 TURE

if ( empty ( $var )){
    echo '变量$var的值为空<Br>';
}
echo '----------------------------------<br>';
echo '<B>$var = \'\'</b><Br>';
echo "isset测试:<Br>";

$var = '';
if ( isset ( $var ))
{
    echo '变量$var存在!<Br>' ;

}
echo "empty测试:<Br>";
if ( empty ( $var )){
    echo '变量$var的值为空<Br>';
}
echo "变量直接测试:<Br>";
if ( $var ){
    echo '变量$var存在!<Br>';
}
else {
    echo '变量$var不存在!<Br>';
}
echo '----------------------------------<br>';
echo '<B>$var = 0</b><Br>';
echo 'isset测试:<Br>';
$var = 0 ;
if ( isset ( $var ))
{
    echo '变量$var存在!<Br>' ;
}
echo "empty测试:<Br>";
if ( empty ( $var )){
    echo '变量$var的值为空<Br>';
}
else
{
    echo '变量$var的值不为空<Br>';
}
echo "变量直接测试:<Br>";
if ( $var ){
    echo '变量$var存在!<Br>';
}
else {
    echo '变量$var不存在!<Br>';
}


echo '<B>$var = null</b><Br>';
echo 'isset测试:<Br>';
$var = null ;
if ( isset ( $var ))
{
    echo '变量$var存在!<Br>' ;
}
echo "empty测试:<Br>";
if ( empty ( $var )){
    echo '变量$var的值为空<Br>';
}
echo "变量直接测试:<Br>";
if ( $var ){
    echo '变量$var存在!<Br>';
}
else {
    echo '变量$var不存在!<Br>';
}
echo '----------------------------------<br>';

echo '<B>$var ="php"</b><Br>';
echo 'isset测试:<Br>';
$var = "php";
if ( isset ( $var ))
{
    echo '变量$var存在!<Br>' ;
}

echo "empty测试:<Br>";
if ( empty ( $var )){
    echo '变量$var的值为空<Br>';
}
else
{
    echo '变量$var的值不为空<Br>';
}
echo "变量直接测试:<Br>";
if ( $var ){
    echo '变量$var存在!<Br>';
}
else {
    echo '变量$var不存在!<Br>';
}



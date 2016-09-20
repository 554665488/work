<?php
$db_host='localhost';
$db_user='root';
$db_pwd='root';
$db_name='test';
$db_port='3306';
$sqlcon=new mysqli($db_host,$db_user,$db_pwd,$db_name);
$q="set names utf8";
$result=$sqlcon->query($q);//���ñ���
if(mysqli_connect_errno()){
	printf("Connect failed:%s\n",mysqli_connect_errno());
	exit();
}

// echo rand(1,time());
// echo rand(10,12);
// $str="55454.jpg";
// print_r(pathinfo($str));

<?php 
$con=mysql_connect('localhost','root','root');
if(!$con){
	die('Connot connect DB'.mysql_error());
}
$db_list=mysql_list_dbs($con);
while($db=mysql_fetch_object($db_list)){
	echo $db->Database."</br>";
}
mysql_close($con);
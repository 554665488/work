<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db('test');
function get_recursion($id=0){
	$str='';
	$sql="select id,title from class where pid=$id";
	$result=mysql_query($sql);
	if($result && mysql_affected_rows()){
		$str.='<ul>';
		while($row=mysql_fetch_assoc($result)){
			// print_r($row);
			$str.="<li>".$row['id'].'--'.$row['title']."</li>".get_recursion($row['id']);
			// echo $row['id'].'</br>';
			
		}
		$str.='</ul>';
	}
	return $str;
}
// echo get_recursion(0);
function get_array($id=0){
	$sql="select * from class where pid=$id";
	$result=mysql_query($sql);
	$arr=array();
	if($result && mysql_affected_rows()!=0){
		while($rows=mysql_fetch_assoc($result)){
			// print_r($rows);
			echo mysql_affected_rows()."</br>";
			if($rows['pid']==0){
				$rows['list']=get_array($rows['id']);
			}
			
			 $arr[]=$rows;
		}
		return $arr;
	}
	
}
print_r(get_array());
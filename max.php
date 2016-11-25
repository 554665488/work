<?php 

//ȡ���������
$arr=array(5,9.11,1,66,14,999);
$max=$arr[0];

for($i=0;$i<count($arr);$i++){
	if($max<=$arr[$i]){
		$max=$arr[$i];
		
	}
}
echo $max;
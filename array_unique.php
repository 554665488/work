<?php
// $arr=array('a'=>'green','red','s'=>'green');
// $arr=array('4',4,'3',3 );
// print_r(array_unique($arr));
$max=100;
$arr=range(1,$max,3);//数组最小值   最大值 步进值

$arr2=range(1,$max,2);
$arr=array_merge($arr,$arr2);
print_r(count($arr));
echo "</br>";
$time=-microtime(true);
$res1=array_unique($arr);
$time+=microtime(true);
// echo count($res1).'时间'.$time;
echo "</br>";
$time = -microtime(true); 
    $res2 = array(); 
// echo count($arr);
    echo "</br>";
    foreach($arr as $key=>$val) {    
        $res2[$val] = true; 
    } 
    $res2 = array_keys($res2); 
    $time += microtime(true); 
    echo "<br />deduped to ".count($res2)." in ".$time; 
    // deduped to 666667 in 0.84372591972351 
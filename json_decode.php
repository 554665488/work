<?php

$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
  
  echo "<pre>";
  print_r(json_decode($json));//默认第三个参数是为false  返回的是对象
  
  echo "</pre>";
$obj=json_decode($json);
echo $obj->a;

echo "<pre>";
  print_r(json_decode($json,true));//默认第三个参数是为true 返回的是是数组
  
  echo "</pre>";
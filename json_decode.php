<?php

$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
  
  echo "<pre>";
  print_r(json_decode($json));//Ĭ�ϵ�����������Ϊfalse  ���ص��Ƕ���
  
  echo "</pre>";
$obj=json_decode($json);
echo $obj->a;

echo "<pre>";
  print_r(json_decode($json,true));//Ĭ�ϵ�����������Ϊtrue ���ص���������
  
  echo "</pre>";
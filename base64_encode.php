<?php

//��ƴ��ֱ�����Ϊ��ʹ���������ݿ���ͨ���Ǵ�8-bit�Ĵ���㴫�� ��������ʼ�������
//���������ݲ�ԭʼ���ݶ�ռ��33%���ҵĿռ�

$str='name';
//echo $encode_after=base64_encode($str);
//echo base64_decode($encode_after);//������

//������ָ�Ϊָ��������������
$arr=range(0,20);
//var_dump(array_chunk($arr,10,true));//������������ѡĬ��Ϊfalse Ϊtrue����ı�����ļ���
//join��implode�ı���
$arr = array('Hello','World!','I','love','Shanghai!');
//echo join(' ',$arr);
echo implode(' ',$arr);

//���ַ����ָ����preg_split����ָ��ַ���Ϊ����    str_split �ƶ����ȷָ��ַ���Ϊ����
$str='hell';
$aar=str_split($str,'1');
var_dump($aar);
//���ַ����ָ��ɶ������

$str = "aassss";

echo chunk_split($str,2)."\n";//Yar? m ki lo ? ay, yar? m ki lo ? eker  ��̫��  �ָ�
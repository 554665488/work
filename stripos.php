<?php
// echo strstr("I love Shanghai!","Shanghai");//����ַ�������һ���ַ����Ƿ����  ���ڷ��ر������ַ���
//echo stripos('abcd','d');//�����ַ�������һ���ַ�����һ�γ��ֵ�λ��  ��������ֵ 1000.000000
$number=1000.000000;
function round_down($number, $num = 2)
{
    if (strstr($number, '.')) {
        $p = stripos($number, '.');
        $tmp = substr($number, 0, $p + 3);
    } else {
        $tmp = $number;
    }
    return number_format($tmp, $num);//number_format  ͨ��ǧλ����ʽ���ַ���
}
echo round_down($number);
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/25
 * Time: 9:01
 */



print_r($_FILES['fileInput']);
$img_name=$_FILES['fileInput']['name'];
$img_name_arr=explode('.',$img_name);
var_dump($_POST['id']);
var_dump(move_uploaded_file($_FILES['fileInput']['tmp_name'],"./img/".time().rand(1,100).'.'.end($img_name_arr)));

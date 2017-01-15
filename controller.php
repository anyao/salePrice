<?php 
include "./calprice.php";
include "./model.php";
// 规定文件的路径桌面 salePrice 文件夹内
define("PATH", 'C:\Users\Administrator\Desktop\salePrice\\');
// 文件的绝对路径
$path = PATH.$_FILES['file']['name'];

$file = fopen($path,'r+');
$goods_list = implode("\r\n",getList($file));
fclose($file);
header("Content-type:text/csv"); 
Header("Accept-Ranges:bytes");
Header('Content-Disposition:attachment;filename='.$_FILES['file']['name'].'-计算.csv');
header("Pragma: no-cache");
header("Expires: 0");
echo "$goods_list";
?>
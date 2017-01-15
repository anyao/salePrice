<?php 
include "./calprice.php";
// 规定文件的路径桌面 salePrice 文件夹内
define("PATH", 'C:\Users\Administrator\Desktop\salePrice\\');
// 文件的绝对路径
$path = PATH.$_FILES['file']['name'];
$file = fopen($path,'r+');
// [0] => 钢种 [1] => 基价 [2] => 厚度 [3] => 宽度 [4] => 长度选择 [5] => 长度 [6] => 两切/四切 
// [7] => 保性能 [8] => Z向性能 [9] => 探伤级别 [10] => 总价 [11] => 备注 
$i = 0;
while ($data = fgetcsv($file)) { //每次读取CSV里面的一行内容
	// 第一次行不执行操作
	if ($i != 0) {
		$res = get_price($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7],$data[8],$data[9],$data[10]);
		print_R($res);
		$data[] = $res['price'];
		$data[] = $res['msg'];
		echo $res['price'];
		die;
	}
	++$i;
$goods_list[] = $data;
}
// echo "<pre>";
print_r($goods_list);


 fclose($file);
?>
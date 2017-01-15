<?php  
function getList($file){
	$i = 0;
	while ($data = fgetcsv($file)) { //每次读取CSV里面的一行内容
		// 第一次行不执行操作
		if ($i != 0) {
			$res = get_price($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7],$data[8]);
			$data[9] = $res['price'];
			$data[10] = $res['msg'];
		}
		++$i;
		$goods_list[] = implode(",",$data);
	}	
	// die;
	return $goods_list;

}
?>
<?php  
header("content-type:text/html;charset=gbk");
include "./calprice.php";
function getList($file){
	$getPrice = new calPrice();
	$i = 0;
	while ($data = fgetcsv($file)) { //ÿ�ζ�ȡCSV�����һ������
		if(empty($data[0]))
			continue;
		// ��һ���в�ִ�в���
		if ($i != 0) {
			$res = $getPrice->get_price($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7]);
			if (isset($res['errmsg'])) {
				$data[9] = $res['errmsg'];
				$data[8] = 0;
			}else{
				$data[8] = $res['price'];
				$data[9] = $res['msg'];
				
			}
		}
		++$i;
		$goods_list[] = implode(",",$data);
	}	
	return $goods_list;
}



?>
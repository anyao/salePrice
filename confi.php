<?php  
header("content-type:text/html;charset=gbk");
// 配置词典形成函数
function confi($file){
    $i = 0;
    while ($data = fgetcsv($file)) { //每次读取CSV里面的一行内容
        // 第一次行不执行操作
        if ($i == 0) 
            $fname = $data;
        else{
            $confi[] = array_combine($fname,$data);
        }
        ++$i;
    }   

    return $confi;
}

// // 将数组转为gbk编码
// function array_iconv($arr, $in_charset="gbk", $out_charset="utf-8//IGNORE")
// {
//   $ret = eval('return '.mb_convert_encoding(var_export($arr,true), "gbk", "auto").";");
//   // $ret = eval('return '.iconv($in_charset,$out_charset,var_export($arr,true).';'));
//   return $ret;
// }
?>
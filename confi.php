<?php  
header("content-type:text/html;charset=gbk");
// ���ôʵ��γɺ���
function confi($file){
    $i = 0;
    while ($data = fgetcsv($file)) { //ÿ�ζ�ȡCSV�����һ������
        // ��һ���в�ִ�в���
        if ($i == 0) 
            $fname = $data;
        else{
            $confi[] = array_combine($fname,$data);
        }
        ++$i;
    }   

    return $confi;
}

// ����ȹ涨����Ϊ��������
function trans($arr){
    for ($i=0; $i < count($arr); $i++) { 
        $tgtArr[$arr[$i]['pgrade']][] = $arr[$i];
    }
    return $tgtArr;
}

// // ������תΪgbk����
// function array_iconv($arr, $in_charset="gbk", $out_charset="utf-8//IGNORE")
// {
//   $ret = eval('return '.mb_convert_encoding(var_export($arr,true), "gbk", "auto").";");
//   // $ret = eval('return '.iconv($in_charset,$out_charset,var_export($arr,true).';'));
//   return $ret;
// }
?>
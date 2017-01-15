<?php
header("content-type:text/html;charset=gbk");

function get_price( $pgrade, $thick, $width, $typeLength, $length, $border, $bxn, $zlevel, $tslevel) {
    include "./thick.php";
    include "./widthLength.php";
    $bscprice = $BasePrice;
    $msg = "基价：".$bscprice." ";
    // 厚度基价 thick
    for ($i=0; $i < count($thickArr); $i++) { 
        $rThick = $thickArr[$i];
        if ($rThick['minthick'] <= $thick && 
            $thick <= $rThick['maxthick'] && 
            $rThick['name'] == $pgrade &&
            $rThick['edge'] == $border &&
            $rThick['guarantee'] == $bxn ) {
            $price['thick'] = $rThick['price'];
            $msg .= "品种加价:".$price['thick']." ";
            break;
        }else
            if ($i == count($thickArr)-1) 
                return array('errmsg' => '没有找到对应基价。');  
    }
    // 宽度加价
    // 常规宽度不加价
    $ifNorm = in_array($width, array(2200,2400,2500));
    // 另容器板两米宽也不加价
    $ifR2 = in_array($pgrade, array('Q245R','Q345R')) && $width == 2000;
    if ($ifNorm || $ifR2) {
        $price['width'] = 0;
        $msg .= "宽度 $width 加价：".$price['width']." ";
    }elseif ($width <= 1800 && $width >= 3210)
    // 宽度不符合要求
        return array('errmsg' => '宽度不符合要求');
    else
        // 非常规宽度加价
        for ($i=0; $i < count($widthArr); $i++) { 
            $rWidth = $widthArr[$i];
            if ($rWidth['minwidth'] <= $width && $rWidth['maxwidth'] >= $width) {
                $price['width'] = $rWidth['price'];
                $msg .= "宽度 $width 加价：".$price['width']." ";
                break;
            }
        }

    // 长度加价分2种情况：1、指定长度（值） 2、指定长度范围（a、“8米以上”不加价 b、非常规指定长度范围）
    for ($i=0; $i < count($lengthArr); $i++) { 
        $rLength = $lengthArr[$i];
        if ($typeLength == "指定长度") {
            // 指定长度值
            if ($rLength['minlength'] <= $length && $rLength['maxlength'] >= $length) {
                $price['length'] = $rLength['price'];
                $msg .= "长度 $length 加价：".$price['length']." ";
                break;
            }else
                // 指定长度值不符合范围
                if ($i == count($lengthArr)-1) 
                    return array('errmsg' => '指定长度值不符合范围');
        }elseif($length >= 8000){
            // $typeLength == "指定长度范围" 其范围大于8米
            $price['length'] = 0;
            $msg .= "长度 $length 加价：".$price['length']." ";
            
        }else
            for ($i=0; $i < count($lengthArr); $i++) { 
                $rLength = $lengthArr[$i];
                if ($rLength['minlength'] <= $length && $rLength['maxLength'] >= $length) {
                    $price['length'] = $rLength['extraprice'];
                    $msg .= "长度 $length 加价：".$price['length']." ";
                    break;
                }
            }
    }

    // z向性能性能加价
    if (empty($zlevel)){
        // z向性能无要求
        $price['zlevel'] = 0;
    }else
        for ($i=0; $i < count($zFunctionArr); $i++) {
            $rZ = $zFunctionArr[$i];
            if ($rZ['zfunction'] == $zlevel) {
                $price['zlevel'] = $rZ['price'];
                $msg .= "Z向性能 $zlevel 加价：".$price['zlevel']." ";
                break;
            }else
                // z向性能错误
                if ($i == count($zFunctionArr)-1) 
                    return array('errmsg' => 'z向性能错误'); 
        }

    // 探伤要求
    if (empty($tslevel)) 
        // 探伤无要求
        $price['tslevel'] = 0;
    else{
        for ($i=0; $i < count($probeArr); $i++) {
            $rProbe = $probeArr[$i];
            if ($rProbe['level'] == $tslevel) {
                $price['tslevel'] = $rProbe['price'];
                $msg .= "探伤 $tslevel级 加价：".$price['tslevel']." ";
                break;
            }else
                // 探伤性能错误
                if ($i == count($probeArr)-1) 
                    return array('errmsg' => '探伤性能错误');    
        }
        
    }
    // print_r($price);
    // die;
    $res = array('price'=>array_sum($price) + $bscprice, 'msg'=>$msg);
    return $res;
}
?>
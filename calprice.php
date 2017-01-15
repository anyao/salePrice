<?php
header("content-type:text/html;charset=gbk");

function get_price( $pgrade, $thick, $width, $typeLength, $length, $border, $bxn, $zlevel, $tslevel) {
    include "./thick.php";
    include "./widthLength.php";
    $bscprice = $BasePrice;
    $msg = "���ۣ�".$bscprice." ";
    // ��Ȼ��� thick
    for ($i=0; $i < count($thickArr); $i++) { 
        $rThick = $thickArr[$i];
        if ($rThick['minthick'] <= $thick && 
            $thick <= $rThick['maxthick'] && 
            $rThick['name'] == $pgrade &&
            $rThick['edge'] == $border &&
            $rThick['guarantee'] == $bxn ) {
            $price['thick'] = $rThick['price'];
            $msg .= "Ʒ�ּӼ�:".$price['thick']." ";
            break;
        }else
            if ($i == count($thickArr)-1) 
                return array('errmsg' => 'û���ҵ���Ӧ���ۡ�');  
    }
    // ��ȼӼ�
    // �����Ȳ��Ӽ�
    $ifNorm = in_array($width, array(2200,2400,2500));
    // �����������׿�Ҳ���Ӽ�
    $ifR2 = in_array($pgrade, array('Q245R','Q345R')) && $width == 2000;
    if ($ifNorm || $ifR2) {
        $price['width'] = 0;
        $msg .= "��� $width �Ӽۣ�".$price['width']." ";
    }elseif ($width <= 1800 && $width >= 3210)
    // ��Ȳ�����Ҫ��
        return array('errmsg' => '��Ȳ�����Ҫ��');
    else
        // �ǳ����ȼӼ�
        for ($i=0; $i < count($widthArr); $i++) { 
            $rWidth = $widthArr[$i];
            if ($rWidth['minwidth'] <= $width && $rWidth['maxwidth'] >= $width) {
                $price['width'] = $rWidth['price'];
                $msg .= "��� $width �Ӽۣ�".$price['width']." ";
                break;
            }
        }

    // ���ȼӼ۷�2�������1��ָ�����ȣ�ֵ�� 2��ָ�����ȷ�Χ��a����8�����ϡ����Ӽ� b���ǳ���ָ�����ȷ�Χ��
    for ($i=0; $i < count($lengthArr); $i++) { 
        $rLength = $lengthArr[$i];
        if ($typeLength == "ָ������") {
            // ָ������ֵ
            if ($rLength['minlength'] <= $length && $rLength['maxlength'] >= $length) {
                $price['length'] = $rLength['price'];
                $msg .= "���� $length �Ӽۣ�".$price['length']." ";
                break;
            }else
                // ָ������ֵ�����Ϸ�Χ
                if ($i == count($lengthArr)-1) 
                    return array('errmsg' => 'ָ������ֵ�����Ϸ�Χ');
        }elseif($length >= 8000){
            // $typeLength == "ָ�����ȷ�Χ" �䷶Χ����8��
            $price['length'] = 0;
            $msg .= "���� $length �Ӽۣ�".$price['length']." ";
            
        }else
            for ($i=0; $i < count($lengthArr); $i++) { 
                $rLength = $lengthArr[$i];
                if ($rLength['minlength'] <= $length && $rLength['maxLength'] >= $length) {
                    $price['length'] = $rLength['extraprice'];
                    $msg .= "���� $length �Ӽۣ�".$price['length']." ";
                    break;
                }
            }
    }

    // z���������ܼӼ�
    if (empty($zlevel)){
        // z��������Ҫ��
        $price['zlevel'] = 0;
    }else
        for ($i=0; $i < count($zFunctionArr); $i++) {
            $rZ = $zFunctionArr[$i];
            if ($rZ['zfunction'] == $zlevel) {
                $price['zlevel'] = $rZ['price'];
                $msg .= "Z������ $zlevel �Ӽۣ�".$price['zlevel']." ";
                break;
            }else
                // z�����ܴ���
                if ($i == count($zFunctionArr)-1) 
                    return array('errmsg' => 'z�����ܴ���'); 
        }

    // ̽��Ҫ��
    if (empty($tslevel)) 
        // ̽����Ҫ��
        $price['tslevel'] = 0;
    else{
        for ($i=0; $i < count($probeArr); $i++) {
            $rProbe = $probeArr[$i];
            if ($rProbe['level'] == $tslevel) {
                $price['tslevel'] = $rProbe['price'];
                $msg .= "̽�� $tslevel�� �Ӽۣ�".$price['tslevel']." ";
                break;
            }else
                // ̽�����ܴ���
                if ($i == count($probeArr)-1) 
                    return array('errmsg' => '̽�����ܴ���');    
        }
        
    }
    // print_r($price);
    // die;
    $res = array('price'=>array_sum($price) + $bscprice, 'msg'=>$msg);
    return $res;
}
?>
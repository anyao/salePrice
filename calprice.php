<?php
header("content-type:text/html;charset=utf-8");
// bscprice ����
// pgrade ����
// thick ���
// width ���
// length ����
// border ��������
// bxn ������
// zlevel z������
// tslevel ̽�˼���
// plevel ��Ʒ����

// $price = get_price('Q235A',0,8.00,2.2,'ָ������',8,'����','������','Z15',1);
// echo "<pre>";
// print_R($price);

function get_price( $pgrade, $bscprice, $thick, $width, $typeLength, $length, $border, $bxn, $zlevel, $tslevel) {
    include "./thick.php";
    include "./widthLength.php";
    echo "$pgrade, $bscprice, $thick, $width, $typeLength, $length, $border, $bxn, $zlevel, $tslevel";
    $msg = "���ۣ�".$bscprice."\r\n";
    // ��Ȼ��� thick
    for ($i=0; $i < count($thickArr); $i++) { 
        $rThick = $thickArr[$i];
        if ($rThick['minthick'] <= $thick && 
            $thick <= $rThick['maxthick'] && 
            $rThick['name'] == $pgrade &&
            $rThick['edge'] == $border &&
            $rThick['guarantee'] == $bxn ) {
            $price['thick'] = $rThick['price'];
            $msg .= "Ʒ�ּӼ�:".$price['thick']."\r\n";
            break;
        }else
            if ($i == count($thickArr)-1) 
                return array('errmsg' => 'û���ҵ���Ӧ���ۡ�');  
    }
    // ��ȼӼ�
    // �����Ȳ��Ӽ�
    $ifNorm = in_array($width, array(2.2,2.4,2.5));
    // �����������׿�Ҳ���Ӽ�
    $ifR2 = in_array($pgrade, array('Q245R','Q345R')) && $width == 2.0;
    if ($ifNorm || $ifR2) {
        $price['width'] = 0;
        $msg .= "��� $width �Ӽۣ�".$price['width']."\r\n";
    }elseif ($width <= 1.8 && $width >= 3.21)
    // ��Ȳ�����Ҫ��
        return array('errmsg' => '��Ȳ�����Ҫ��');
    else
        // �ǳ����ȼӼ�
        for ($i=0; $i < count($widthArr); $i++) { 
            $rWidth = $widthArr[$i];
            if ($rWidth['minwidth'] <= $width && $rWidth['maxwidth'] >= $width) {
                $price['width'] = $rWidth['price'];
                break;
                $msg .= "��� $width �Ӽۣ�".$price['width']."\r\n";
            }
        }

    // ���ȼӼ۷�2�������1��ָ�����ȣ�ֵ�� 2��ָ�����ȷ�Χ��a����8�����ϡ����Ӽ� b���ǳ���ָ�����ȷ�Χ��
    for ($i=0; $i < count($lengthArr); $i++) { 
        $rLength = $lengthArr[$i];
        if ($typeLength == "ָ������") {
            // ָ������ֵ
            if ($rLength['minlength'] <= $length && $rLength['maxlength'] >= $length) {
                $price['length'] = $rLength['price'];
                $msg .= "���� $length �Ӽۣ�".$price['length']."\r\n";
                break;
            }else
                // ָ������ֵ�����Ϸ�Χ
                if ($i == count($lengthArr)-1) 
                    return array('errmsg' => 'ָ������ֵ�����Ϸ�Χ');
        }elseif($length >= 8){
            // $typeLength == "ָ�����ȷ�Χ" �䷶Χ����8��
            $price['length'] = 0;
            $msg .= "���� $length �Ӽۣ�".$price['length']."\r\n";
            
        }else
            for ($i=0; $i < count($lengthArr); $i++) { 
                $rLength = $lengthArr[$i];
                if ($rLength['minlength'] <= $length && $rLength['maxLength'] >= $length) {
                    $price['length'] = $rLength['extraprice'];
                    $msg .= "���� $length �Ӽۣ�".$price['length']."\r\n";
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
                $msg .= "Z������ $zlevel �Ӽۣ�".$price['zlevel']."\r\n";
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
                $msg .= "̽�� $tslevel�� �Ӽۣ�".$price['tslevel']."\r\n";
                break;
            }else
                // ̽�����ܴ���
                if ($i == count($probeArr)-1) 
                    return array('errmsg' => '̽�����ܴ���');    
        }
        
    }

    $res = array('price'=>array_sum($price) + $bscprice, 'msg'=>$msg);
    return $res;
}
?>
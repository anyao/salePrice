<?php
// �涨�ļ���·������ salePrice �ļ�����
define("PATH", 'C:\Users\Administrator\Desktop\salePrice\\');
header("content-type:text/html;charset=gbk");
include "./confi.php";

class calPrice{
    public $confi_width;
    public $confi_length;
    public $confi_probe;
    public $confi_thick;
    public $confi_z;
    public $basePrice;

    function __construct(){
        // �����ļ���ȡ
        $confiWidth = fopen(PATH."confi\\width.csv",'r');
        $this->confi_width = confi($confiWidth);
        fclose($confiWidth);

        $confiLength = fopen(PATH."confi\\length.csv",'r');
        $this->confi_length = confi($confiLength);
        fclose($confiLength);

        $confiProbe = fopen(PATH."confi\\probe.csv",'r');
        $this->confi_probe = confi($confiProbe);
        fclose($confiProbe);

        $confiThick = fopen(PATH."confi\\thick.csv",'r');
        $this->confi_thick = confi($confiThick);
        fclose($confiThick);
        
        $confiZ = fopen(PATH."confi\\z.csv",'r');
        $this->confi_z = confi($confiZ);
        fclose($confiZ);

        $confiBscPrice = fopen(PATH."confi\\bscPrice.csv",'r');
        $this->basePrice = confi($confiBscPrice);
        fclose($confiBscPrice);
    }

    function get_price($pgrades, $thick, $width, $typeLength, $length, $border, $bxn, $tslevel) {
        // Z�������ж�
          if (in_array(substr($pgrades,-3),array('Z15','Z25','Z35') )) {
            $pgrade = substr($pgrades,0,-4);
            $zlevel = substr($pgrades,-3);
        }else{
            $pgrade = $pgrades;
            $zlevel = "";
        }

        $thickArr = $this->confi_thick;
        $lengthArr = $this->confi_length;
        $widthArr = $this->confi_width;
        $probeArr = $this->confi_probe;
        $zFunctionArr = $this->confi_z;
        $bscprice = $this->basePrice[0]['bscPrice'];
        $price = array();

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
        $ifR2 = in_array($pgrade, array('�к���¯������Q245R','�к���¯������Q345R')) && $width == 2000;

        // ���ն��߷ѵ��ͺŲ��Ӽ�
        $ifGivenScale = in_array($pgrade, array("�к��ͺϽ��Q345D", "�к��ͺϽ��Q345E", "�к��������Q345qE", "�к��������Q345qD", "�к��߽���Q345GJB", "�к��߽���Q345GJC"));
        $ifZ = empty($zlevel);

        if ($ifNorm || $ifR2 || $ifGivenScale || $ifZ) {
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
        // ���ն����ѵĸ���
        $ifGivenLen = in_array($pgrade, array("�к��ͺϽ��Q345C", "�к����߸�L245", "�к����߸�L245M"));
        if($ifGivenScale || $ifGivenLen){
            $price['length'] = 0;
            $msg .= "���� $length �Ӽۣ�".$price['length']." ";
        }else{
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
                    if ($rLength['minlength'] <= $length && $rLength['maxlength'] >= $length) {
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
                    $msg .= "̽��{$tslevel}�� �Ӽۣ�".$price['tslevel']." ";
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
}




?>
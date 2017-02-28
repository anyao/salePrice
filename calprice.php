<?php
// 规定文件的路径桌面 salePrice 文件夹内
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
        // 配置文件读取
        $confiWidth = fopen(PATH."confi\\width.csv",'r');
        $this->confi_width = trans(confi($confiWidth));
        fclose($confiWidth);

        $confiLength = fopen(PATH."confi\\length.csv",'r');
        $this->confi_length = trans(confi($confiLength));
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
        // Z向性能判定
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

        // 宽度的pgrade判断
        if (in_array($pgrade, array_keys($widthArr))) 
            // 如果存在其型号的宽度记录
            $arrWidth = $widthArr[$pgrade];
        else if (strpos($pgrade,"出口") !== false) 
            $arrWidth = $widthArr['出口'];
        else if (strpos($pgrade,"船板") !== false) 
            $arrWidth = $widthArr['船板'];
        else{
            $arrWidth = $widthArr['内贸'];
            if(!empty($zlevel))
                $ifZW = true;
        }


        if (isset($ifZW)) {
            $price['width'] = 0;
            $msg .= "宽度 $width 加价：z向钢免收定尺费 ";
        }elseif ($width <= 1800 && $width >= 3210)
        // 宽度不符合要求
            return array('errmsg' => '宽度不符合要求');
        else
            // 非常规宽度加价
            for ($i=0; $i < count($arrWidth); $i++) { 
                $rWidth = $arrWidth[$i];
                if ($rWidth['minwidth'] <= $width && $rWidth['maxwidth'] >= $width) {
                    $price['width'] = $rWidth['price'];
                    $msg .= "宽度 $width 加价：".$price['width']." ";
                    break;
                }
            }


        // 长度的pgrade判断
        if (in_array($pgrade, array_keys($lengthArr))) 
            // 如果存在其型号的宽度记录
            $arrLength = $lengthArr[$pgrade];
        else if (strpos($pgrade,"出口") !== false) {
            $arrLength = $lengthArr['出口'];
        }
        else if (strpos($pgrade,"船板") !== false) 
            $arrLength = $lengthArr['船板'];
        else{
            $arrLength = $lengthArr['内贸'];
            if(!empty($zlevel))
                $ifZ = true;
        }


        if (isset($ifZ)) {
           $price['length'] = 0;
            $msg .= "宽度 $width 加价：z向钢免收定尺费 "; 
        }else
            for ($i=0; $i < count($arrLength); $i++) {
                $rLength = $arrLength[$i];
                // 内贸---长度加价分2种情况：1、指定长度（值） 2、指定长度范围（a、“8米以上”不加价 b、非常规指定长度范围）
                if ($typeLength == "指定长度"){
                    // 指定长度值
                    if ($rLength['minlength'] <= $length && $rLength['maxlength'] >= $length ) {
                        $price['length'] = $rLength['price'];
                        $msg .= "长度 $length 加价：".$price['length']." ";
                        break;
                    }else
                        // 指定长度值不符合范围
                        if ($i == count($arrLength)-1) 
                            return array('errmsg' => '指定长度值不符合范围');
                }
                elseif($length >= 8000){
                    // $typeLength == "指定长度范围" 其范围大于8米
                    $price['length'] = 0;
                    $msg .= "长度 $length 加价：".$price['length']." ";
                }else
                    if ($rLength['minlength'] <= $length && $rLength['maxlength'] >= $length) {
                        $price['length'] = $rLength['extraprice'];
                        $msg .= "长度 $length 加价：".$price['length']." ";
                        break;
                    }
            } 

        // z向性能性能加价
        if (empty($zlevel)){
            // z向性能无要求
            $price['zlevel'] = 0;
            $msg .= "Z向性能 $zlevel 加价：".$price['zlevel']." ";
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
                    $msg .= "探伤{$tslevel}级 加价：".$price['tslevel']." ";
                    break;
                }else
                    // 探伤性能错误
                    if ($i == count($probeArr)-1) 
                        return array('errmsg' => '探伤性能错误');    
            } 
            if ($zlevel) {
                   $price['tslevel'] -= 100;
                   $msg .= "探伤{$tslevel}级 加价：".$price['tslevel']." ";
            }   
        }
        // print_r($price);
        // die;
        $res = array('price'=>array_sum($price) + $bscprice, 'msg'=>$msg);
        return $res;
    }
}




?>
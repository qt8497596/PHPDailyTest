<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/16
 * Time: 9:28
 */

//1---100的和
function sum1($num)
{
    $sum = 0;
    for ($i = 0; $i <= $num; $i++) {
        $sum += $i;
    }
    return $sum;
}
//print_r(sum1(100));

//阶乘   例如1*2*3*4*5
function jie($num)
{
    $sum = 1;
    for ($i = $num; $i > 0; $i--) {
        $sum *= $i;
    }
    return $sum;
}
//print_r(jie(5));

//回文1234321
function wen($str)
{
   $res = '';
   for ($i = strlen($str) - 1; $i >= 0; $i--) {
       $res .=$str[$i];
   }
   for ($i = 0; $i < strlen($res) - 1; $i--) {
       if($str[$i] == $res[$i]){
           return 1;
       }else{
           return 2;
       }
   }
}
//print_r(wen($str = '1234321'));

//冒泡排序
function mao($arr)
{
    $count = count($arr);
    for ($i = 1; $i < $count; $i++) {
        for ($j = 0; $j < $count - $i; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $arr[$j] = $arr[$j] ^ $arr[$j + 1];
                $arr[$j + 1] = $arr[$j] ^ $arr[$j + 1];
                $arr[$j] = $arr[$j] ^ $arr[$j + 1];
            }
        }
    }
    return $arr;
}
//print_r(mao($arr = array(3,34,2,435,23,45,56,1)));


//快速排序
function kuai($arr)
{
    $count = count($arr);
    if($count <= 1){
        return $arr;
    }

    $left = [];
    $right = [];
    $zhong = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if($arr[$i] < $zhong){
            $left[] = $arr[$i];
        }else{
            $right[] = $arr[$i];
        }
    }
    $left = kuai($left);
    $right = kuai($right);
    return array_merge($left,[$zhong],$right);
}
//print_r(kuai($arr = array(3,34,2,435,23,45,56,1)));

//水仙花
function hua($str)
{
    $ge = $str % 10;
    $shi = ($str % 100 - $ge) / 10;
    $bai = ($str - $shi * 10 - $ge) / 100;
    if ($ge*$ge*$ge+$shi*$shi*$shi+$bai*$bai*$bai) {
        return true;
    }
    return false;
}
//print_r(hua(375));


//数字->字母
function shu($str)
{
    if($str <= 26){
        return chr($str+64);
    }else{
        $res = $str % 26;
        if($res == 0){
            $chu = $str / 26 - 1;
            $qian = chr($chu + 64);
            $hou = chr($res + 90);
        }else{
            $chu = floor($str / 26);
            $qian = chr($chu + 64);
            $hou = chr($res + 64);
        }
        return $qian.$hou;
    }
}
//print_r(shu(52));


//中间值
function zhong($arr)
{
    $sum = array_sum($arr);
    $qian = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $qian += $arr[$i];
        if (($sum - $arr[$i + 1]) / 2 == $qian) {
           return $arr[$i + 1];
        }
    }
    return false;
}
//print_r(zhong($arr = array(1,2,3,4,5,10)));

//上楼梯  斐波那契数列
function fb($str)
{
    $arr = [];
    $arr[0] = $arr[1] = 1;
    for ($i = 2; $i < $str; $i++) {
        $arr[$i] = $arr[$i - 1] + $arr[$i - 2];
    }
    return $arr[$str - 1];
}
//print_r(fb(10));


//银行排队
function yin($arr1,$arr2)
{
    $count = count($arr1);
    $wait = 0;
    $chuang = [];
    for ($i = 0; $i < $count; $i++) {
        if(count($chuang) < 4){
            $chuang[] = $arr2[$i] + $arr1[$i];
        }
        sort($chuang);
        $xiao = array_shift($chuang);
        if($xiao > $arr2[$i]){
            $wait += $xiao - $arr2[$i];
            $chuang[] = $xiao + $arr1[$i];
        }else{
            $chuang[] = $arr2[$i] + $arr1[$i];
        }
    }
    return $wait / $count;
}
//print_r(yin($arr1 = array(0.3,0.3,0.3,0.3,0.3),
//            $arr2 = array(9.00,9.10,9.10,9.10,9.20)));


//function yi($num)
//{
//    return 2 << $num;
//}
//print_r(yi(4));

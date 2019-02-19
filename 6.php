<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/19
 * Time: 10:21
 */


//求出1~13的整数中1出现的次数,并算出100~1300的整数中1出现的次数
function fun($n,$m)
{
    $num = 0;
    for ($n;$n <= $m;$n++){
        $n = (string) $n;
        for ($i = 0; $i < strlen($n); $i++){
            if($n[$i] == 1){
                $num++;
            }
        }
    }
    return $num;
}
print_r(fun(1,13));
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/13
 * Time: 10:23
 */
$str = 'Have you ever gone shopping and';
function cha($str)
{
    $arr = [];
    $len = strlen($str);
    for ($i = 0; $i < $len; $i++) {
        if (isset($arr[$str[$i]])) {
            $arr[$str[$i]]++;
        } else {
            $arr[$str[$i]]++;
        }
        if ($arr[$str[$i]] >=3) {
           return $str[$i];
        }
    }
}

echo(cha($str));
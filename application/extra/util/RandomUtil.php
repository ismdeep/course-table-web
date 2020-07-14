<?php
/**
 * Created by PhpStorm.
 * User: ismdeep
 * Date: 2018/8/15
 * Time: 3:03 PM
 */

namespace app\extra\util;


class RandomUtil
{
    static function randStr($base = '0123456789abcdefghijklmnopqrstuvwxyzQWERTYUIOPLKJMNHGBVFDCXSAZ', $length = 32) {
        $ans = '';
        while ($length-- > 0) {
            $ans .= $base[mt_rand(0, strlen($base) - 1)];
        }
        return $ans;
    }
}
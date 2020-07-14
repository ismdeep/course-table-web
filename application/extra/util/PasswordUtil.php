<?php
/**
 * Created by PhpStorm.
 * User: ismdeep
 * Date: 2018/9/7
 * Time: 9:42 PM
 */

namespace app\extra\util;


class PasswordUtil
{
    static function magic_sha512($password){
        $rand_str = RandomUtil::randStr('0123456789abcdefghijklmnopqrstuvwxyzQWERTYUIOPLKJMNHGBVFDCXSAZ', 64);
        $sha512 = hash('sha512', $rand_str . $password . config('sha512_salt'));
        return $sha512 . '-' . $rand_str;
    }

    static function check($magic_password,$password) {
        $rand_str = explode('-', $magic_password)[1];
        $sha512 = explode('-', $magic_password)[0];
        return $sha512 == hash('sha512', $rand_str . $password . config('sha512_salt'));
    }
}
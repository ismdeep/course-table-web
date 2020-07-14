<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

define('SESSION_ADMIN', 'admin');
define('SESSION_USER' , 'user');
define('SESSION_AGENT', 'agent');

/**
 * intercept output text
 *
 * @param $flag
 * @param $msg
 */
function intercept($flag, $msg)
{
    if ($flag) {
        echo $msg;
        die();
    }
}

/**
 * intercept output json
 *
 * @param $flag
 * @param $msg
 */
function intercept_json($flag, $msg)
{
    if ($flag) {
        header('Content-Type: application/json');
        echo json_encode(['status' => 'error', 'msg' => $msg]);
        die();
    }
}

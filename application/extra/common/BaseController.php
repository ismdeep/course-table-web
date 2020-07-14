<?php
/**
 * Created by PhpStorm.
 * User: ismdeep
 * Date: 2018/9/7
 * Time: 5:25 PM
 */

namespace app\extra\common;


use think\App;
use think\Controller;

class BaseController extends Controller
{

    public function __construct(App $app = null)
    {
        parent::__construct($app);
    }
}
<?php

namespace app\index\controller;

use app\extra\model\CourseModel;
use think\App;
use think\Controller;

class Index extends Controller
{
    public $cur_week_index;

    public function __construct(App $app = null)
    {
        parent::__construct($app);
        $start_time = strtotime('2019-09-02 00:00:00');
        $now_time = time();
        $sec = $now_time - $start_time;
        $this->cur_week_index = ceil($sec / (60 * 60 * 24 * 7));
        $this->assign('week_index', $this->cur_week_index);

        if ($this->request->get('week_index') != '') {
            $this->assign('week_index', intval($this->request->get('week_index')));
        }
        $this->assign('back_cur_week', false);

    }

    public function index()
    {
        return (new \app\course\controller\Index())->index($this->cur_week_index);
    }
}

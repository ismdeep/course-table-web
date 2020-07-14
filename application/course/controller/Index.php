<?php
/**
 * Created by PhpStorm.
 * User: ismdeep
 * Date: 2019-02-16
 * Time: 17:23
 */

namespace app\course\controller;


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
        if ($this->request->get('week') != '') {
            $this->assign('week_index', intval($this->request->get('week')));
        }
        $this->assign('back_cur_week', false);
    }


    public function index($week = "")
    {
        $week = intval($week);

        $courses = CourseModel::getList();

        $rows = [];
        for ($rowi = 1; $rowi <= 11; $rowi++) {
            $row = [];
            for ($day = 1; $day <= 8; $day++) {
                $row[] = '';
            }
            $rows[] = $row;
        }

        foreach ($courses as $course) {
            $week_start = min($course['week']);
            $week_end = max($course['week']);

            if (in_array($week, $course['week'])) {
                foreach ($course['class_time'] as $class_time) {
                    foreach ($class_time['class_index'] as $index) {
                        $rows[$index][$class_time['week_day']] = $course['name'] . "({$course['location']})";
                    }
                }
            }
        }
        $this->assign('rows', $rows);
        if ($week != $this->cur_week_index) {
            $this->assign('back_cur_week', true);
        }
        return view('course@course/detail');
    }
}
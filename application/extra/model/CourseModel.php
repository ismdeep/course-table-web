<?php
/**
 * Created by PhpStorm.
 * User: ismdeep
 * Date: 2018/9/8
 * Time: 3:09 PM
 */

namespace app\extra\model;


use think\Model;

class CourseModel extends Model
{
    static function getList()
    {
        return [
            [
                'name' => '网络',
                'week' => [4],
                'class_time' => [
                    ['week_day' => '1', 'class_index' => [1,2]]
                ],
                'location' => '2-406'
            ],
            [
                'name' => '网络',
                'week' => [7,8],
                'class_time' => [
                    ['week_day' => '1', 'class_index' => [3,4]]
                ],
                'location' => '2-406'
            ],
            [
                'name' => '计算机',
                'week' => [10,11],
                'class_time' => [
                    ['week_day' => '1', 'class_index' => [3,4]]
                ],
                'location' => '东实训楼2-208'
            ],
            [
                'name' => '计算机',
                'week' => [6,7,8,9],
                'class_time' => [
                    ['week_day' => '2', 'class_index' => [1,2]]
                ],
                'location' => '5-209'
            ],
            [
                'name' => '网络',
                'week' => [10,11],
                'class_time' => [
                    ['week_day' => '2', 'class_index' => [1,2]]
                ],
                'location' => '2-406'
            ],
            [
                'name' => '计算机',
                'week' => [6,7,8,9,10,11],
                'class_time' => [
                    ['week_day' => '2', 'class_index' => [3,4]]
                ],
                'location' => '5-209'
            ],
            [
                'name' => '计算机',
                'week' => [6,7,8,9,10,11],
                'class_time' => [
                    ['week_day' => '2', 'class_index' => [5,6]]
                ],
                'location' => '东实训2-214'
            ],
            [
                'name' => '网络',
                'week' => [6,7],
                'class_time' => [
                    ['week_day' => '2', 'class_index' => [7,8]]
                ],
                'location' => '2-406'
            ],
            [
                'name' => '计算机',
                'week' => [6,7],
                'class_time' => [
                    ['week_day' => '3', 'class_index' => [1,2]]
                ],
                'location' => '5-209'
            ],
            [
                'name' => '计算机',
                'week' => [6,7,8,9,10],
                'class_time' => [
                    ['week_day' => '3', 'class_index' => [3,4]]
                ],
                'location' => '5-209'
            ],
            [
                'name' => '网络',
                'week' => [11],
                'class_time' => [
                    ['week_day' => '3', 'class_index' => [3,4]]
                ],
                'location' => '2-406'
            ],
            [
                'name' => '网络',
                'week' => [6,7,8,9,10,11],
                'class_time' => [
                    ['week_day' => '3', 'class_index' => [5,6]]
                ],
                'location' => '2-406'
            ],
            [
                'name' => '网络',
                'week' => [6,7,8,9,10,11],
                'class_time' => [
                    ['week_day' => '3', 'class_index' => [5,6]]
                ],
                'location' => '2-406'
            ],
            [
                'name' => '网络',
                'week' => [6,7,8,11],
                'class_time' => [
                    ['week_day' => '4', 'class_index' => [1,2]]
                ],
                'location' => '5-209'
            ],
            [
                'name' => '网络',
                'week' => [10],
                'class_time' => [
                    ['week_day' => '4', 'class_index' => [1,2]]
                ],
                'location' => '2-406'
            ],
            [
                'name' => '计算机',
                'week' => [6,7,8,10],
                'class_time' => [
                    ['week_day' => '4', 'class_index' => [3,4]]
                ],
                'location' => '5-209'
            ],
            [
                'name' => '网络',
                'week' => [11],
                'class_time' => [
                    ['week_day' => '4', 'class_index' => [3,4]]
                ],
                'location' => '5-209'
            ],
            [
                'name' => '网络',
                'week' => [7,8,10],
                'class_time' => [
                    ['week_day' => '4', 'class_index' => [5,6]]
                ],
                'location' => '2-406'
            ],
            [
                'name' => '网络',
                'week' => [10,11],
                'class_time' => [
                    ['week_day' => '4', 'class_index' => [7,8]]
                ],
                'location' => '3-405'
            ],
            [
                'name' => '计算机',
                'week' => [6,7,8],
                'class_time' => [
                    ['week_day' => '5', 'class_index' => [1,2]]
                ],
                'location' => '5-209'
            ],
            [
                'name' => '网络',
                'week' => [10,11],
                'class_time' => [
                    ['week_day' => '5', 'class_index' => [1,2]]
                ],
                'location' => '5-209'
            ],
            [
                'name' => '网络',
                'week' => [4],
                'class_time' => [
                    ['week_day' => '6', 'class_index' => [1,2]]
                ],
                'location' => '5-209'
            ],
            [
                'name' => '网络',
                'week' => [4],
                'class_time' => [
                    ['week_day' => '6', 'class_index' => [3,4]]
                ],
                'location' => '2-406'
            ],
            [
                'name' => '网络',
                'week' => [4],
                'class_time' => [
                    ['week_day' => '6', 'class_index' => [5,6]]
                ],
                'location' => '4-401'
            ],
            [
                'name' => '网络',
                'week' => [4],
                'class_time' => [
                    ['week_day' => '7', 'class_index' => [1,2]]
                ],
                'location' => '5-209'
            ],
            [
                'name' => '网络',
                'week' => [4],
                'class_time' => [
                    ['week_day' => '7', 'class_index' => [3,4]]
                ],
                'location' => '2-406'
            ]
        ];
    }
}

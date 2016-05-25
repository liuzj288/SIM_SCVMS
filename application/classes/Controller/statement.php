<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Created by PhpStorm.
 * User: SG
 * Date: 2016/5/25
 * Time: 1:22
 */
class Controller_statement extends Controller_Template
{
    public $template='statement.tpl';
    public function  action_index()
    {

    }

    public  function  action_stateTea()
    {
        $this -> auto_render = FALSE;
        if ($this -> request -> is_ajax()) //判断是否为ajax请求
        {
            //get $arr here.
            $arr = statement::getAllCourseByTeaId();
            echo json_encode($arr);//建议这样写,避免0或其他情况.
            exit;
        }
    }
}
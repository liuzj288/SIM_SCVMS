<?php
/**
 * Created by PhpStorm.
 * User: SG
 * Date: 2016/5/25
 * Time: 16:55
 */
class Controller_query extends Controller_Template
{
    public $template='query.tpl';
    public function  action_index()
    {

    }

    public  function  action_Tea()
    {
        $this -> auto_render = FALSE;
        if ($this -> request -> is_ajax()) //判断是否为ajax请求
        {
            //get $arr here.
            $arr = query::getAllCourseTeaId();
            echo json_encode($arr);//建议这样写,避免0或其他情况.
            exit;
        }
    }
}
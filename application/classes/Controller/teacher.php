<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by PhpStorm.
 * User: LZM20
 * Date: 2016/5/19
 * Time: 15:30
 */
class Controller_teacher extends  Controller_Template
{
    public $template='teacher.tpl';
    public function action_index(){
    
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
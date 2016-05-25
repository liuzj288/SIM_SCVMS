<?php
/**
 * Created by PhpStorm.
 * User: WLB
 * Date: 2016/5/17
 * Time: 15:24
 */
class Controller_Course extends Controller_Template{
    public $template = 'Course.tpl';
    public function action_index(){

    }
    public function action_filter(){

    }
    public function action_loginapi(){
        $this -> auto_render = FALSE;
        //if ($this -> request -> is_ajax()) //判断是否为ajax请求
        {
            $data = $this->request->post();
            $query = Login::loginchack($data);
            if (sizeof($query) == 1)
                echo 'success';
            else
                echo 'false';
            exit;

        }
    }
    public function action_getall()
    {
        $this -> auto_render = FALSE;
        $data=$this->request->post();
        $arr = DB::query(Database::SELECT,$data['sql'])->execute()->as_array();

        echo json_encode($arr);//建议这样写,避免0或其他情况.
        exit;
    }

    public function action_getall1()
    {
        $this -> auto_render = FALSE;
        $data=$this->request->post();
        $arr = DB::query(Database::SELECT,$data['sql'])->execute()->as_array();

        for($i=0;$i<count($arr);$i++) {
            $sql = "select * from workout_course where  workout_course.courseid=".$arr[$i]['courseId'];
            $temp = DB::query(Database::SELECT,$sql)->execute()->as_array();
            $arr[$i]['count'] = count($temp);
        }

        echo json_encode($arr);//建议这样写,避免0或其他情况.
        exit;
    }

    public function action_getcoursework()
    {
        $this -> auto_render = FALSE;
        $data=$this->request->post();
        $arr = DB::query(Database::SELECT,$data['sql'])->execute()->as_array();
        echo json_encode($arr);//建议这样写,避免0或其他情况.
        exit;
    }
    public function action_insert(){
        $this -> auto_render = FALSE;
        //if ($this -> request -> is_ajax()) //判断是否为ajax请求
        {
            $data = $this->request->post();
            Course::insert($data);
        }
    }
}
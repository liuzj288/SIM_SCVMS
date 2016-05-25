<?php

/**
 * Created by PhpStorm.
 * User: SG
 * Date: 2016/5/25
 * Time: 1:25
 */
class statement
{
   

    public static function getAllStudent(){
        return BaseClass::getStu();
    }
    public static function getAllTeacher()
    {
        return BaseClass::getTea();
    }

    public  static  function  getAllCourseByTeaId()
    {
        return BaseClass::getAllCourseByTeacherId();
    }
}

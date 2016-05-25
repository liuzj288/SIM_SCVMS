<?php

/**
 * Created by PhpStorm.
 * User: LZM20
 * Date: 2016/5/19
 * Time: 15:24
 */
class teacher
{
    public static function  getTeacherById()
    {
        return BaseClass::getTeaById();
    }
    public  static  function  getAllCourseByTeaId()
    {
        return BaseClass::getAllCourseByTeacherId();
    }
    public  static  function  getAllCourseTeaId()
    {
        return BaseClass::getAllCourseTeacherId();
    }

}
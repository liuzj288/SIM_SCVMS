<?php
/**
 * Created by PhpStorm.
 * User: jinhan
 * Date: 2016/5/11
 * Time: 10:03
 */
class BaseClass{
    public static function getstudent($table){
        $query = DB::select()
            ->from($table)
            ->execute()
            ->as_array();
//		$query = DB::query(Database::INSERT,'insert into student values (12343,"123","123")');
//        $query->execute();
        return $query;
    }
    public static function loginchack($data){
        $query = DB::select()->from($data['person'])
            ->where($data['person'].'Id','=' ,$data['id'] )
            ->and_where('password','=' ,$data['password'] )
            ->execute()
            ->as_array();
        return $query;
    }
    public static function insert($data){
        $query= DB::query(Database::INSERT,'insert into workout_course(weeknum,startsection,endsection,classroomid,courseid,startweek,endweek,occupationreason)
            values('.$data['weeknum'].','.$data['startsection'].','.$data['endsection'].','.$data['classroomid'].','.$data['courseid'].','.$data['startweek'].','.$data['endweek'].',"'.$data['occupationreason'].'")')->execute();
        return $query;
    }

    public  static  function getAllCourseByTeacherId()
    {
        $b=$_COOKIE['id'];
        $sql=DB::query(Database::SELECT,"select workout_course.courseid,weeknum,startsection,endsection,startweek,endweek,Place as classname,course.testtime,course.credit,course.name,course.capacity,course.margin,course.campus,college.name as collegeId,course.property,course.classhour,course.direction,teacher.name as teachername
from workout_course,classroom,course,courseselection_tea,teacher,college
where classroomid=classroom.Id and course.courseId=workout_course.courseid
and courseselection_tea.courseId=workout_course.courseid
and teacher.teacherId=courseselection_tea.teacherId
and course.collegeId=college.collegeId
and workout_course.courseid in (select courseselection_tea.courseId from courseselection_tea where 
courseselection_tea.teacherId=$b)")->execute()->as_array();
        // $a[0]=$sql[0];
        $k=0;
        $x=0;
        $i=0;
        while($k<sizeof($sql))
        {

            if ($sql[$i]['courseid'] != -1) {
                $a[$x] = $sql[$i];
                $a[$x]['time']="周".$sql[$i]['weeknum'].','.$sql[$i]['startsection']."~".$sql[$i]['endsection']."节;";
                $a[$x]['classname']=$sql[$i]['classname'].";";
                $a[$x]['startend']="第".$sql[$i]['startweek']."~".$sql[$i]['endweek']."周;";
                for ($j = $i + 1; $j < sizeof($sql); $j++) {
                    if ($sql[$i]['courseid'] == $sql[$j]['courseid']) {
                        $a[$x]['time']=$a[$x]['time']."周".$sql[$j]['weeknum'].','.$sql[$j]['startsection']."~".$sql[$j]['endsection']."节;";
                        $a[$x]['classname']=$a[$x]['classname'].$sql[$j]['classname'].";";
                        $a[$x]['startend']=$a[$x]['startend']."第".$sql[$j]['startweek']."~".$sql[$j]['endweek']."周;";
                        $sql[$i]['courseid']=-1;
                        $k++;
                        $i=$j;
                    }
                }
                $sql[$i]['courseid']=-1;
                $k++;
                $x++;
                $i=0;
            }
            else{
                $i++;
            }

        }
        return $a;
    }
    public  static  function getAllCourseByStuId()
    {
        $b=$_COOKIE['id'];
        $sql=DB::query(Database::SELECT,"select teacher.teacherId,workout_course.courseid,weeknum,startsection,endsection,startweek,endweek,Place as classname,course.testtime,course.credit,course.name,course.capacity,course.margin,course.campus,college.name as collegeId,course.property,course.classhour,course.direction,teacher.name as teachername
from workout_course,classroom,course,courseselection_tea,teacher,college
where classroomid=classroom.Id and course.courseId=workout_course.courseid
and courseselection_tea.courseId=workout_course.courseid
and teacher.teacherId=courseselection_tea.teacherId
and course.collegeId=college.collegeId
and workout_course.courseid in (select courseselection_stu.courseId from courseselection_stu where 
courseselection_stu.studentId=$b)")->execute()->as_array();
        for($i=0;$i<count($sql);$i++) {
            $sql[$i]['classhour'] = "周".$sql[$i]['weeknum'].','.$sql[$i]['startsection']."~".$sql[$i]['endsection']."节;";
        }
//        // $a[0]=$sql[0];
//        $k=0;
//        $x=0;
//        $i=0;
//        while($k<sizeof($sql))
//        {
//
//            if ($sql[$i]['courseid'] != -1) {
//                $a[$x] = $sql[$i];
//                $a[$x]['teacherid']=$sql[$i]['teacherId'];
//                $a[$x]['teachername']=$sql[$i]['teachernaFme'];
//                $a[$x]['courseid']=$sql[$i]['courseid'];
//                $a[$x]['name']=$sql[$i]['name'];
//                $a[$x]['time']="周".$sql[$i]['weeknum'].','.$sql[$i]['startsection']."~".$sql[$i]['endsection']."节;";
//                $a[$x]['classname']=$sql[$i]['classname'].";";
//                $a[$x]['startend']="第".$sql[$i]['startweek']."~".$sql[$i]['endweek']."周;";
//                for ($j = $i + 1; $j < sizeof($sql); $j++) {
//                    if ($sql[$i]['courseid'] == $sql[$j]['courseid']) {
//                        $a[$x]['time']=$a[$x]['time']."周".$sql[$j]['weeknum'].','.$sql[$j]['startsection']."~".$sql[$j]['endsection']."节;";
//                        $a[$x]['classname']=$a[$x]['classname'].$sql[$j]['classname'].";";
//                        $a[$x]['startend']=$a[$x]['startend']."第".$sql[$j]['startweek']."~".$sql[$j]['endweek']."周;";
//                        $sql[$i]['courseid']=-1;
//                        $k++;
//                        $i=$j;
//                    }
//                }
//                $sql[$i]['courseid']=-1;
//                $k++;
//                $x++;
//                $i=0;
//            }
//            else{
//                $i++;
//            }
//
//        }
        return $sql;
    }
    public  static  function getAllCourseTeacherId()
    {
        //$b=$_COOKIE['id'];
        $sql=DB::query(Database::SELECT,"select teacher.teacherId, workout_course.courseid,weeknum,startsection,endsection,startweek,endweek,Place as classname,course.testtime,course.credit,course.name as name,course.capacity,course.margin,course.campus,college.name as collegeId,course.property,course.classhour,course.direction,teacher.name as teachername
from workout_course,classroom,course,courseselection_tea,teacher,college
where classroomid=classroom.Id and course.courseId=workout_course.courseid
and courseselection_tea.courseId=workout_course.courseid
and teacher.teacherId=courseselection_tea.teacherId
and course.collegeId=college.collegeId")->execute()->as_array();
        // $a[0]=$sql[0];
        $k=0;
        $x=0;
        $i=0;
        while($k<sizeof($sql))
        {

            if ($sql[$i]['courseid'] != -1) {
                $a[$x] = $sql[$i];
                $a[$x]['teacherid']=$sql[$i]['teacherId'];
                $a[$x]['teachername']=$sql[$i]['teachername'];
                $a[$x]['courseid']=$sql[$i]['courseid'];
                $a[$x]['name']=$sql[$i]['name'];
                $a[$x]['time']="周".$sql[$i]['weeknum'].','.$sql[$i]['startsection']."~".$sql[$i]['endsection']."节;";
                $a[$x]['classname']=$sql[$i]['classname'].";";
                $a[$x]['startend']="第".$sql[$i]['startweek']."~".$sql[$i]['endweek']."周;";
                for ($j = $i + 1; $j < sizeof($sql); $j++) {
                    if ($sql[$i]['courseid'] == $sql[$j]['courseid']) {
                        $a[$x]['time']=$a[$x]['time']."周".$sql[$j]['weeknum'].','.$sql[$j]['startsection']."~".$sql[$j]['endsection']."节;";
                        $a[$x]['classname']=$a[$x]['classname'].$sql[$j]['classname'].";";
                        $a[$x]['startend']=$a[$x]['startend']."第".$sql[$j]['startweek']."~".$sql[$j]['endweek']."周;";
                        $sql[$i]['courseid']=-1;
                        $k++;
                        $i=$j;
                    }
                }
                $sql[$i]['courseid']=-1;
                $k++;
                $x++;
                $i=0;
            }
            else{
                $i++;
            }

        }
        return $a;
    }

    public static function getTeaById()
    {
        $b=$_COOKIE['id'];
        $sql=DB::query(Database::SELECT,"select name from teacher where teacherId=$b")->execute()->as_array();
        return $sql;
    }

    public static function getStuById()
    {
        $b=$_COOKIE['id'];
        $sql=DB::query(Database::SELECT,"select name from student where studentId=$b")->execute()->as_array();
        return $sql;
    }

}
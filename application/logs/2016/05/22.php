<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-05-22 08:11:06 --- CRITICAL: ErrorException [ 8 ]: Undefined index: courseId ~ APPPATH\classes\Controller\Course.php [ 37 ] in C:\Users\WLB\Desktop\sim\application\classes\Controller\Course.php:37
2016-05-22 08:11:06 --- DEBUG: #0 C:\Users\WLB\Desktop\sim\application\classes\Controller\Course.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\Users\\WLB\\De...', 37, Array)
#1 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Controller.php(84): Controller_Course->action_getall()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Course))
#4 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\WLB\Desktop\sim\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Users\WLB\Desktop\sim\application\classes\Controller\Course.php:37
2016-05-22 09:20:36 --- CRITICAL: Database_Exception [ 1048 ]: Column 'classroomid' cannot be null [ insert into workout_course(weeknum,startsection,endsection,classroomid,courseid,startweek,endweek,occupationreason)
            values(4,11,13,NULL,2,5,8,"上课") ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\Query.php:251
2016-05-22 09:20:36 --- DEBUG: #0 C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'insert into wor...', false, Array)
#1 C:\Users\WLB\Desktop\sim\application\classes\Baseclass.php(28): Kohana_Database_Query->execute()
#2 C:\Users\WLB\Desktop\sim\application\classes\Course.php(13): BaseClass::insert(Array)
#3 C:\Users\WLB\Desktop\sim\application\classes\Controller\Course.php(69): Course::insert(Array)
#4 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Controller.php(84): Controller_Course->action_insert()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Course))
#7 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\WLB\Desktop\sim\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\Query.php:251
2016-05-22 09:22:23 --- CRITICAL: Database_Exception [ 1048 ]: Column 'classroomid' cannot be null [ insert into workout_course(weeknum,startsection,endsection,classroomid,courseid,startweek,endweek,occupationreason)
            values(1,6,9,NULL,3,1,16,"上课") ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\Query.php:251
2016-05-22 09:22:23 --- DEBUG: #0 C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'insert into wor...', false, Array)
#1 C:\Users\WLB\Desktop\sim\application\classes\Baseclass.php(28): Kohana_Database_Query->execute()
#2 C:\Users\WLB\Desktop\sim\application\classes\Course.php(13): BaseClass::insert(Array)
#3 C:\Users\WLB\Desktop\sim\application\classes\Controller\Course.php(69): Course::insert(Array)
#4 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Controller.php(84): Controller_Course->action_insert()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Course))
#7 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\WLB\Desktop\sim\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\Query.php:251
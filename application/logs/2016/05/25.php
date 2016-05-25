<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-05-25 01:37:32 --- CRITICAL: ErrorException [ 1 ]: Class 'teacher' not found ~ MODPATH\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code [ 59 ] in file:line
2016-05-25 01:37:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-05-25 01:39:15 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method BaseClass::getTeaById() ~ APPPATH\classes\teacher.php [ 13 ] in file:line
2016-05-25 01:39:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-05-25 01:40:09 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Baseclass.php [ 80 ] in C:\wamp\www\new\sim\application\classes\Baseclass.php:80
2016-05-25 01:40:09 --- DEBUG: #0 C:\wamp\www\new\sim\application\classes\Baseclass.php(80): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\new...', 80, Array)
#1 C:\wamp\www\new\sim\application\classes\teacher.php(13): BaseClass::getTeaById()
#2 C:\wamp\www\new\sim\application\cache\smarty_compiled\92ad427dd1bddadbe22499ff185af238f1c69958.file.statement.tpl.php(59): teacher::getTeacherById()
#3 C:\wamp\www\new\sim\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(182): content_57453ead0ec127_39272355(Object(Smarty_Internal_Template))
#4 C:\wamp\www\new\sim\modules\smarty\classes\Smarty\View.php(383): Smarty_Internal_TemplateBase->fetch('C:\\wamp\\www\\new...')
#5 C:\wamp\www\new\sim\system\classes\Kohana\Controller\Template.php(44): Smarty_View->render()
#6 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_statement))
#9 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\new\sim\application\classes\Baseclass.php:80
2016-05-25 03:04:12 --- CRITICAL: ErrorException [ 8 ]: Undefined index: teacherId ~ MODPATH\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code [ 120 ] in C:\wamp\www\new\sim\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code:120
2016-05-25 03:04:12 --- DEBUG: #0 C:\wamp\www\new\sim\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code(120): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\new...', 120, Array)
#1 C:\wamp\www\new\sim\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(182): content_57453ead0ec127_39272355(Object(Smarty_Internal_Template))
#2 C:\wamp\www\new\sim\modules\smarty\classes\Smarty\View.php(383): Smarty_Internal_TemplateBase->fetch('C:\\wamp\\www\\new...')
#3 C:\wamp\www\new\sim\system\classes\Kohana\Controller\Template.php(44): Smarty_View->render()
#4 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_statement))
#7 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\new\sim\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code:120
2016-05-25 03:05:08 --- CRITICAL: ErrorException [ 8 ]: Undefined index: teacher_name ~ MODPATH\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code [ 117 ] in C:\wamp\www\new\sim\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code:117
2016-05-25 03:05:08 --- DEBUG: #0 C:\wamp\www\new\sim\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code(117): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\new...', 117, Array)
#1 C:\wamp\www\new\sim\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(182): content_57453ead0ec127_39272355(Object(Smarty_Internal_Template))
#2 C:\wamp\www\new\sim\modules\smarty\classes\Smarty\View.php(383): Smarty_Internal_TemplateBase->fetch('C:\\wamp\\www\\new...')
#3 C:\wamp\www\new\sim\system\classes\Kohana\Controller\Template.php(44): Smarty_View->render()
#4 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_statement))
#7 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\new\sim\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code:117
2016-05-25 03:09:52 --- CRITICAL: ErrorException [ 8 ]: Undefined index: teacher.name ~ MODPATH\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code [ 117 ] in C:\wamp\www\new\sim\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code:117
2016-05-25 03:09:52 --- DEBUG: #0 C:\wamp\www\new\sim\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code(117): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\new...', 117, Array)
#1 C:\wamp\www\new\sim\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(182): content_57453ead0ec127_39272355(Object(Smarty_Internal_Template))
#2 C:\wamp\www\new\sim\modules\smarty\classes\Smarty\View.php(383): Smarty_Internal_TemplateBase->fetch('C:\\wamp\\www\\new...')
#3 C:\wamp\www\new\sim\system\classes\Kohana\Controller\Template.php(44): Smarty_View->render()
#4 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_statement))
#7 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\new\sim\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code:117
2016-05-25 03:13:25 --- CRITICAL: ErrorException [ 8 ]: Undefined index: course.name ~ MODPATH\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code [ 116 ] in C:\wamp\www\new\sim\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code:116
2016-05-25 03:13:25 --- DEBUG: #0 C:\wamp\www\new\sim\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code(116): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\new...', 116, Array)
#1 C:\wamp\www\new\sim\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(182): content_57453ead0ec127_39272355(Object(Smarty_Internal_Template))
#2 C:\wamp\www\new\sim\modules\smarty\classes\Smarty\View.php(383): Smarty_Internal_TemplateBase->fetch('C:\\wamp\\www\\new...')
#3 C:\wamp\www\new\sim\system\classes\Kohana\Controller\Template.php(44): Smarty_View->render()
#4 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_statement))
#7 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\new\sim\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code:116
2016-05-25 04:44:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method query::getAllCourseByTeaId() ~ MODPATH\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(151) : eval()'d code [ 87 ] in file:line
2016-05-25 04:44:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-05-25 05:16:14 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 05:16:14 --- DEBUG: #0 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'select teacher....', false, Array)
#2 C:\wamp\www\new\sim\application\classes\Baseclass.php(85): Kohana_Database_Query->execute()
#3 C:\wamp\www\new\sim\application\classes\query.php(12): BaseClass::getAllCourseTeacherId()
#4 C:\wamp\www\new\sim\application\classes\Controller\query.php(22): query::getAllCourseTeaId()
#5 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_query->action_Tea()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_query))
#8 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 05:16:35 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 05:16:35 --- DEBUG: #0 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'select teacher....', false, Array)
#2 C:\wamp\www\new\sim\application\classes\Baseclass.php(85): Kohana_Database_Query->execute()
#3 C:\wamp\www\new\sim\application\classes\query.php(12): BaseClass::getAllCourseTeacherId()
#4 C:\wamp\www\new\sim\application\classes\Controller\query.php(22): query::getAllCourseTeaId()
#5 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_query->action_Tea()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_query))
#8 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 05:17:20 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 05:17:20 --- DEBUG: #0 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'select teacher....', false, Array)
#2 C:\wamp\www\new\sim\application\classes\Baseclass.php(85): Kohana_Database_Query->execute()
#3 C:\wamp\www\new\sim\application\classes\query.php(12): BaseClass::getAllCourseTeacherId()
#4 C:\wamp\www\new\sim\application\classes\Controller\query.php(22): query::getAllCourseTeaId()
#5 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_query->action_Tea()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_query))
#8 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 05:17:52 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 05:17:52 --- DEBUG: #0 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'select teacher....', false, Array)
#2 C:\wamp\www\new\sim\application\classes\Baseclass.php(85): Kohana_Database_Query->execute()
#3 C:\wamp\www\new\sim\application\classes\query.php(12): BaseClass::getAllCourseTeacherId()
#4 C:\wamp\www\new\sim\application\classes\Controller\query.php(22): query::getAllCourseTeaId()
#5 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_query->action_Tea()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_query))
#8 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 05:33:16 --- CRITICAL: Database_Exception [ 1048 ]: Column 'classroomid' cannot be null [ insert into workout_course(weeknum,startsection,endsection,classroomid,courseid,startweek,endweek,occupationreason)
            values(1,1,1,NULL,NULL,1,1,"上课") ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query.php:251
2016-05-25 05:33:16 --- DEBUG: #0 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'insert into wor...', false, Array)
#1 C:\wamp\www\new\sim\application\classes\Baseclass.php(28): Kohana_Database_Query->execute()
#2 C:\wamp\www\new\sim\application\classes\Course.php(13): BaseClass::insert(Array)
#3 C:\wamp\www\new\sim\application\classes\Controller\Course.php(69): Course::insert(Array)
#4 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_Course->action_insert()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Course))
#7 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query.php:251
2016-05-25 07:32:00 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): �׽��ֲ������һ���޷����ӵ������
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:409
2016-05-25 07:32:00 --- DEBUG: #0 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php(409): Kohana_Database_MySQLi->connect()
#1 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database.php(478): Kohana_Database_MySQLi->escape('1')
#2 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query\Builder.php(116): Kohana_Database->quote('1')
#3 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query\Builder\Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQLi), Array)
#4 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQLi))
#5 C:\wamp\www\new\sim\application\classes\Baseclass.php(22): Kohana_Database_Query->execute()
#6 C:\wamp\www\new\sim\application\classes\Login.php(11): BaseClass::loginchack(Array)
#7 C:\wamp\www\new\sim\application\classes\Controller\Login.php(21): Login::loginchack(Array)
#8 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_login->action_loginapi()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_login))
#11 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:409
2016-05-25 09:03:50 --- CRITICAL: ErrorException [ 8 ]: Undefined index: teacherId ~ APPPATH\classes\Baseclass.php [ 98 ] in C:\wamp\www\new\sim\application\classes\Baseclass.php:98
2016-05-25 09:03:50 --- DEBUG: #0 C:\wamp\www\new\sim\application\classes\Baseclass.php(98): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\new...', 98, Array)
#1 C:\wamp\www\new\sim\application\classes\studentcourse.php(17): BaseClass::getAllCourseByStuId()
#2 C:\wamp\www\new\sim\application\classes\Controller\studentcourse.php(22): studentcourse::getAllCourseByStuId()
#3 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_studentcourse->action_getcourseByStuId()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_studentcourse))
#6 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\new\sim\application\classes\Baseclass.php:98
2016-05-25 09:06:05 --- CRITICAL: ErrorException [ 8 ]: Undefined index: teacherId ~ APPPATH\classes\Baseclass.php [ 98 ] in C:\wamp\www\new\sim\application\classes\Baseclass.php:98
2016-05-25 09:06:05 --- DEBUG: #0 C:\wamp\www\new\sim\application\classes\Baseclass.php(98): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\new...', 98, Array)
#1 C:\wamp\www\new\sim\application\classes\studentcourse.php(17): BaseClass::getAllCourseByStuId()
#2 C:\wamp\www\new\sim\application\classes\Controller\studentcourse.php(22): studentcourse::getAllCourseByStuId()
#3 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_studentcourse->action_getcourseByStuId()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_studentcourse))
#6 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\new\sim\application\classes\Baseclass.php:98
2016-05-25 09:06:35 --- CRITICAL: ErrorException [ 8 ]: Undefined index: teacherId ~ APPPATH\classes\Baseclass.php [ 98 ] in C:\wamp\www\new\sim\application\classes\Baseclass.php:98
2016-05-25 09:06:35 --- DEBUG: #0 C:\wamp\www\new\sim\application\classes\Baseclass.php(98): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\new...', 98, Array)
#1 C:\wamp\www\new\sim\application\classes\studentcourse.php(17): BaseClass::getAllCourseByStuId()
#2 C:\wamp\www\new\sim\application\classes\Controller\studentcourse.php(22): studentcourse::getAllCourseByStuId()
#3 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_studentcourse->action_getcourseByStuId()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_studentcourse))
#6 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\new\sim\application\classes\Baseclass.php:98
2016-05-25 09:09:39 --- CRITICAL: ErrorException [ 8 ]: Undefined index: teacherId ~ APPPATH\classes\Baseclass.php [ 98 ] in C:\wamp\www\new\sim\application\classes\Baseclass.php:98
2016-05-25 09:09:39 --- DEBUG: #0 C:\wamp\www\new\sim\application\classes\Baseclass.php(98): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\new...', 98, Array)
#1 C:\wamp\www\new\sim\application\classes\studentcourse.php(17): BaseClass::getAllCourseByStuId()
#2 C:\wamp\www\new\sim\application\classes\Controller\studentcourse.php(22): studentcourse::getAllCourseByStuId()
#3 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_studentcourse->action_getcourseByStuId()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_studentcourse))
#6 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\new\sim\application\classes\Baseclass.php:98
2016-05-25 09:13:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index: teacherId ~ APPPATH\classes\Baseclass.php [ 97 ] in C:\wamp\www\new\sim\application\classes\Baseclass.php:97
2016-05-25 09:13:22 --- DEBUG: #0 C:\wamp\www\new\sim\application\classes\Baseclass.php(97): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\new...', 97, Array)
#1 C:\wamp\www\new\sim\application\classes\studentcourse.php(17): BaseClass::getAllCourseByStuId()
#2 C:\wamp\www\new\sim\application\classes\Controller\studentcourse.php(22): studentcourse::getAllCourseByStuId()
#3 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_studentcourse->action_getcourseByStuId()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_studentcourse))
#6 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\new\sim\application\classes\Baseclass.php:97
2016-05-25 09:15:06 --- CRITICAL: ErrorException [ 8 ]: Undefined index: teacherId ~ APPPATH\classes\Baseclass.php [ 97 ] in C:\wamp\www\new\sim\application\classes\Baseclass.php:97
2016-05-25 09:15:06 --- DEBUG: #0 C:\wamp\www\new\sim\application\classes\Baseclass.php(97): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\new...', 97, Array)
#1 C:\wamp\www\new\sim\application\classes\studentcourse.php(17): BaseClass::getAllCourseByStuId()
#2 C:\wamp\www\new\sim\application\classes\Controller\studentcourse.php(22): studentcourse::getAllCourseByStuId()
#3 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_studentcourse->action_getcourseByStuId()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_studentcourse))
#6 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\new\sim\application\classes\Baseclass.php:97
2016-05-25 09:20:43 --- CRITICAL: ErrorException [ 8 ]: Undefined index: teachernaFme ~ APPPATH\classes\Baseclass.php [ 98 ] in C:\wamp\www\new\sim\application\classes\Baseclass.php:98
2016-05-25 09:20:43 --- DEBUG: #0 C:\wamp\www\new\sim\application\classes\Baseclass.php(98): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\new...', 98, Array)
#1 C:\wamp\www\new\sim\application\classes\studentcourse.php(17): BaseClass::getAllCourseByStuId()
#2 C:\wamp\www\new\sim\application\classes\Controller\studentcourse.php(22): studentcourse::getAllCourseByStuId()
#3 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_studentcourse->action_getcourseByStuId()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_studentcourse))
#6 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\new\sim\application\classes\Baseclass.php:98
2016-05-25 09:24:41 --- CRITICAL: ErrorException [ 8 ]: Undefined index: teachernaFme ~ APPPATH\classes\Baseclass.php [ 98 ] in C:\wamp\www\new\sim\application\classes\Baseclass.php:98
2016-05-25 09:24:41 --- DEBUG: #0 C:\wamp\www\new\sim\application\classes\Baseclass.php(98): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\new...', 98, Array)
#1 C:\wamp\www\new\sim\application\classes\studentcourse.php(17): BaseClass::getAllCourseByStuId()
#2 C:\wamp\www\new\sim\application\classes\Controller\studentcourse.php(22): studentcourse::getAllCourseByStuId()
#3 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_studentcourse->action_getcourseByStuId()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_studentcourse))
#6 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\new\sim\application\classes\Baseclass.php:98
2016-05-25 10:00:35 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 10:00:35 --- DEBUG: #0 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'select Id,Place...', false, Array)
#2 C:\wamp\www\new\sim\application\classes\Controller\Course.php(34): Kohana_Database_Query->execute()
#3 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_Course->action_getall()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Course))
#6 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 10:00:39 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 10:00:39 --- DEBUG: #0 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'select * from w...', false, Array)
#2 C:\wamp\www\new\sim\application\classes\Controller\Course.php(34): Kohana_Database_Query->execute()
#3 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_Course->action_getall()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Course))
#6 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 10:00:43 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 10:00:43 --- DEBUG: #0 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'select * from w...', false, Array)
#2 C:\wamp\www\new\sim\application\classes\Controller\Course.php(34): Kohana_Database_Query->execute()
#3 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_Course->action_getall()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Course))
#6 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 10:00:44 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 10:00:44 --- DEBUG: #0 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'select * from w...', false, Array)
#2 C:\wamp\www\new\sim\application\classes\Controller\Course.php(34): Kohana_Database_Query->execute()
#3 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_Course->action_getall()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Course))
#6 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 10:00:46 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 10:00:46 --- DEBUG: #0 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'select * from w...', false, Array)
#2 C:\wamp\www\new\sim\application\classes\Controller\Course.php(34): Kohana_Database_Query->execute()
#3 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_Course->action_getall()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Course))
#6 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 10:00:46 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 10:00:46 --- DEBUG: #0 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'select * from w...', false, Array)
#2 C:\wamp\www\new\sim\application\classes\Controller\Course.php(34): Kohana_Database_Query->execute()
#3 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_Course->action_getall()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Course))
#6 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 10:00:50 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 10:00:50 --- DEBUG: #0 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'select workout_...', false, Array)
#2 C:\wamp\www\new\sim\application\classes\Controller\Course.php(34): Kohana_Database_Query->execute()
#3 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_Course->action_getall()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Course))
#6 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 10:00:50 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 10:00:50 --- DEBUG: #0 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'select name,col...', false, Array)
#2 C:\wamp\www\new\sim\application\classes\Controller\Course.php(34): Kohana_Database_Query->execute()
#3 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_Course->action_getall()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Course))
#6 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 10:00:57 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 10:00:57 --- DEBUG: #0 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'select workout_...', false, Array)
#2 C:\wamp\www\new\sim\application\classes\Controller\Course.php(34): Kohana_Database_Query->execute()
#3 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_Course->action_getall()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Course))
#6 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 10:00:57 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 10:00:57 --- DEBUG: #0 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'select name,col...', false, Array)
#2 C:\wamp\www\new\sim\application\classes\Controller\Course.php(34): Kohana_Database_Query->execute()
#3 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_Course->action_getall()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Course))
#6 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 10:00:59 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 10:00:59 --- DEBUG: #0 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'select workout_...', false, Array)
#2 C:\wamp\www\new\sim\application\classes\Controller\Course.php(34): Kohana_Database_Query->execute()
#3 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_Course->action_getall()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Course))
#6 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 10:00:59 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 10:00:59 --- DEBUG: #0 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'select name,col...', false, Array)
#2 C:\wamp\www\new\sim\application\classes\Controller\Course.php(34): Kohana_Database_Query->execute()
#3 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_Course->action_getall()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Course))
#6 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 10:01:00 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 10:01:00 --- DEBUG: #0 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'select workout_...', false, Array)
#2 C:\wamp\www\new\sim\application\classes\Controller\Course.php(34): Kohana_Database_Query->execute()
#3 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_Course->action_getall()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Course))
#6 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 10:01:00 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 10:01:00 --- DEBUG: #0 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'select name,col...', false, Array)
#2 C:\wamp\www\new\sim\application\classes\Controller\Course.php(34): Kohana_Database_Query->execute()
#3 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_Course->action_getall()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Course))
#6 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-25 10:01:24 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:409
2016-05-25 10:01:24 --- DEBUG: #0 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php(409): Kohana_Database_MySQLi->connect()
#1 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database.php(478): Kohana_Database_MySQLi->escape('1')
#2 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query\Builder.php(116): Kohana_Database->quote('1')
#3 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query\Builder\Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQLi), Array)
#4 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQLi))
#5 C:\wamp\www\new\sim\application\classes\Baseclass.php(22): Kohana_Database_Query->execute()
#6 C:\wamp\www\new\sim\application\classes\Login.php(11): BaseClass::loginchack(Array)
#7 C:\wamp\www\new\sim\application\classes\Controller\Login.php(21): Login::loginchack(Array)
#8 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_login->action_loginapi()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_login))
#11 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:409
2016-05-25 10:01:26 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:409
2016-05-25 10:01:26 --- DEBUG: #0 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php(409): Kohana_Database_MySQLi->connect()
#1 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database.php(478): Kohana_Database_MySQLi->escape('1')
#2 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query\Builder.php(116): Kohana_Database->quote('1')
#3 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query\Builder\Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQLi), Array)
#4 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQLi))
#5 C:\wamp\www\new\sim\application\classes\Baseclass.php(22): Kohana_Database_Query->execute()
#6 C:\wamp\www\new\sim\application\classes\Login.php(11): BaseClass::loginchack(Array)
#7 C:\wamp\www\new\sim\application\classes\Controller\Login.php(21): Login::loginchack(Array)
#8 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_login->action_loginapi()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_login))
#11 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:409
2016-05-25 10:01:28 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:409
2016-05-25 10:01:28 --- DEBUG: #0 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php(409): Kohana_Database_MySQLi->connect()
#1 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database.php(478): Kohana_Database_MySQLi->escape('1')
#2 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query\Builder.php(116): Kohana_Database->quote('1')
#3 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query\Builder\Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQLi), Array)
#4 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQLi))
#5 C:\wamp\www\new\sim\application\classes\Baseclass.php(22): Kohana_Database_Query->execute()
#6 C:\wamp\www\new\sim\application\classes\Login.php(11): BaseClass::loginchack(Array)
#7 C:\wamp\www\new\sim\application\classes\Controller\Login.php(21): Login::loginchack(Array)
#8 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_login->action_loginapi()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_login))
#11 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:409
2016-05-25 10:01:28 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:409
2016-05-25 10:01:28 --- DEBUG: #0 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php(409): Kohana_Database_MySQLi->connect()
#1 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database.php(478): Kohana_Database_MySQLi->escape('1')
#2 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query\Builder.php(116): Kohana_Database->quote('1')
#3 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query\Builder\Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQLi), Array)
#4 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQLi))
#5 C:\wamp\www\new\sim\application\classes\Baseclass.php(22): Kohana_Database_Query->execute()
#6 C:\wamp\www\new\sim\application\classes\Login.php(11): BaseClass::loginchack(Array)
#7 C:\wamp\www\new\sim\application\classes\Controller\Login.php(21): Login::loginchack(Array)
#8 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_login->action_loginapi()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_login))
#11 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:409
2016-05-25 10:01:29 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:409
2016-05-25 10:01:29 --- DEBUG: #0 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php(409): Kohana_Database_MySQLi->connect()
#1 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database.php(478): Kohana_Database_MySQLi->escape('1')
#2 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query\Builder.php(116): Kohana_Database->quote('1')
#3 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query\Builder\Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQLi), Array)
#4 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQLi))
#5 C:\wamp\www\new\sim\application\classes\Baseclass.php(22): Kohana_Database_Query->execute()
#6 C:\wamp\www\new\sim\application\classes\Login.php(11): BaseClass::loginchack(Array)
#7 C:\wamp\www\new\sim\application\classes\Controller\Login.php(21): Login::loginchack(Array)
#8 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_login->action_loginapi()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_login))
#11 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:409
2016-05-25 10:01:29 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:409
2016-05-25 10:01:29 --- DEBUG: #0 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php(409): Kohana_Database_MySQLi->connect()
#1 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database.php(478): Kohana_Database_MySQLi->escape('1')
#2 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query\Builder.php(116): Kohana_Database->quote('1')
#3 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query\Builder\Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQLi), Array)
#4 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQLi))
#5 C:\wamp\www\new\sim\application\classes\Baseclass.php(22): Kohana_Database_Query->execute()
#6 C:\wamp\www\new\sim\application\classes\Login.php(11): BaseClass::loginchack(Array)
#7 C:\wamp\www\new\sim\application\classes\Controller\Login.php(21): Login::loginchack(Array)
#8 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_login->action_loginapi()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_login))
#11 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:409
2016-05-25 10:01:45 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:409
2016-05-25 10:01:45 --- DEBUG: #0 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php(409): Kohana_Database_MySQLi->connect()
#1 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database.php(478): Kohana_Database_MySQLi->escape('1')
#2 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query\Builder.php(116): Kohana_Database->quote('1')
#3 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query\Builder\Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQLi), Array)
#4 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQLi))
#5 C:\wamp\www\new\sim\application\classes\Baseclass.php(22): Kohana_Database_Query->execute()
#6 C:\wamp\www\new\sim\application\classes\Login.php(11): BaseClass::loginchack(Array)
#7 C:\wamp\www\new\sim\application\classes\Controller\Login.php(21): Login::loginchack(Array)
#8 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_login->action_loginapi()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_login))
#11 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:409
2016-05-25 10:01:47 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:409
2016-05-25 10:01:47 --- DEBUG: #0 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php(409): Kohana_Database_MySQLi->connect()
#1 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database.php(478): Kohana_Database_MySQLi->escape('1')
#2 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query\Builder.php(116): Kohana_Database->quote('1')
#3 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query\Builder\Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQLi), Array)
#4 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQLi))
#5 C:\wamp\www\new\sim\application\classes\Baseclass.php(22): Kohana_Database_Query->execute()
#6 C:\wamp\www\new\sim\application\classes\Login.php(11): BaseClass::loginchack(Array)
#7 C:\wamp\www\new\sim\application\classes\Controller\Login.php(21): Login::loginchack(Array)
#8 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_login->action_loginapi()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_login))
#11 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:409
2016-05-25 10:01:49 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:409
2016-05-25 10:01:49 --- DEBUG: #0 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php(409): Kohana_Database_MySQLi->connect()
#1 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database.php(478): Kohana_Database_MySQLi->escape('1')
#2 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query\Builder.php(116): Kohana_Database->quote('1')
#3 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query\Builder\Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQLi), Array)
#4 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQLi))
#5 C:\wamp\www\new\sim\application\classes\Baseclass.php(22): Kohana_Database_Query->execute()
#6 C:\wamp\www\new\sim\application\classes\Login.php(11): BaseClass::loginchack(Array)
#7 C:\wamp\www\new\sim\application\classes\Controller\Login.php(21): Login::loginchack(Array)
#8 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(84): Controller_login->action_loginapi()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_login))
#11 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:409
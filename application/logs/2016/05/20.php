<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-05-20 03:59:49 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-20 03:59:49 --- DEBUG: #0 C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'insert into wor...', false, Array)
#2 C:\Users\WLB\Desktop\sim\application\classes\Baseclass.php(28): Kohana_Database_Query->execute()
#3 C:\Users\WLB\Desktop\sim\application\classes\Course.php(13): BaseClass::insert(Array)
#4 C:\Users\WLB\Desktop\sim\application\classes\Controller\Course.php(43): Course::insert(Array)
#5 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Controller.php(84): Controller_Course->action_insert()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Course))
#8 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\Users\WLB\Desktop\sim\index.php(118): Kohana_Request->execute()
#11 {main} in C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-20 03:59:50 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-20 03:59:50 --- DEBUG: #0 C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'insert into wor...', false, Array)
#2 C:\Users\WLB\Desktop\sim\application\classes\Baseclass.php(28): Kohana_Database_Query->execute()
#3 C:\Users\WLB\Desktop\sim\application\classes\Course.php(13): BaseClass::insert(Array)
#4 C:\Users\WLB\Desktop\sim\application\classes\Controller\Course.php(43): Course::insert(Array)
#5 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Controller.php(84): Controller_Course->action_insert()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Course))
#8 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\Users\WLB\Desktop\sim\index.php(118): Kohana_Request->execute()
#11 {main} in C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-20 03:59:53 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-20 03:59:53 --- DEBUG: #0 C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'insert into wor...', false, Array)
#2 C:\Users\WLB\Desktop\sim\application\classes\Baseclass.php(28): Kohana_Database_Query->execute()
#3 C:\Users\WLB\Desktop\sim\application\classes\Course.php(13): BaseClass::insert(Array)
#4 C:\Users\WLB\Desktop\sim\application\classes\Controller\Course.php(43): Course::insert(Array)
#5 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Controller.php(84): Controller_Course->action_insert()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Course))
#8 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\Users\WLB\Desktop\sim\index.php(118): Kohana_Request->execute()
#11 {main} in C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-20 03:59:56 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-20 03:59:56 --- DEBUG: #0 C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'insert into wor...', false, Array)
#2 C:\Users\WLB\Desktop\sim\application\classes\Baseclass.php(28): Kohana_Database_Query->execute()
#3 C:\Users\WLB\Desktop\sim\application\classes\Course.php(13): BaseClass::insert(Array)
#4 C:\Users\WLB\Desktop\sim\application\classes\Controller\Course.php(43): Course::insert(Array)
#5 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Controller.php(84): Controller_Course->action_insert()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Course))
#8 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\Users\WLB\Desktop\sim\index.php(118): Kohana_Request->execute()
#11 {main} in C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-20 04:00:25 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-20 04:00:25 --- DEBUG: #0 C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'select name,cou...', false, Array)
#2 C:\Users\WLB\Desktop\sim\application\classes\Controller\Course.php(34): Kohana_Database_Query->execute()
#3 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Controller.php(84): Controller_Course->action_getall()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Course))
#6 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\Users\WLB\Desktop\sim\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-20 04:00:37 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-20 04:00:37 --- DEBUG: #0 C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'select Id,Place...', false, Array)
#2 C:\Users\WLB\Desktop\sim\application\classes\Controller\Course.php(34): Kohana_Database_Query->execute()
#3 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Controller.php(84): Controller_Course->action_getall()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Course))
#6 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\Users\WLB\Desktop\sim\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-20 04:00:41 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-20 04:00:41 --- DEBUG: #0 C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'insert into wor...', false, Array)
#2 C:\Users\WLB\Desktop\sim\application\classes\Baseclass.php(28): Kohana_Database_Query->execute()
#3 C:\Users\WLB\Desktop\sim\application\classes\Course.php(13): BaseClass::insert(Array)
#4 C:\Users\WLB\Desktop\sim\application\classes\Controller\Course.php(43): Course::insert(Array)
#5 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Controller.php(84): Controller_Course->action_insert()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Course))
#8 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\Users\WLB\Desktop\sim\index.php(118): Kohana_Request->execute()
#11 {main} in C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-20 04:00:42 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-20 04:00:42 --- DEBUG: #0 C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'insert into wor...', false, Array)
#2 C:\Users\WLB\Desktop\sim\application\classes\Baseclass.php(28): Kohana_Database_Query->execute()
#3 C:\Users\WLB\Desktop\sim\application\classes\Course.php(13): BaseClass::insert(Array)
#4 C:\Users\WLB\Desktop\sim\application\classes\Controller\Course.php(43): Course::insert(Array)
#5 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Controller.php(84): Controller_Course->action_insert()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Course))
#8 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\Users\WLB\Desktop\sim\index.php(118): Kohana_Request->execute()
#11 {main} in C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-20 04:01:05 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-20 04:01:05 --- DEBUG: #0 C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'select name,col...', false, Array)
#2 C:\Users\WLB\Desktop\sim\application\classes\Controller\Course.php(34): Kohana_Database_Query->execute()
#3 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Controller.php(84): Controller_Course->action_getall()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Course))
#6 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\Users\WLB\Desktop\sim\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-20 04:01:25 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-20 04:01:25 --- DEBUG: #0 C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'select name,col...', false, Array)
#2 C:\Users\WLB\Desktop\sim\application\classes\Controller\Course.php(34): Kohana_Database_Query->execute()
#3 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Controller.php(84): Controller_Course->action_getall()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Course))
#6 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\Users\WLB\Desktop\sim\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-20 04:09:07 --- CRITICAL: Database_Exception [ 1048 ]: Column 'classroomid' cannot be null [ insert into workout_course(weeknum,startsection,endsection,classroomid,courseid,startweek,endweek,occupationreason)
            values(4,3,5,NULL,5,3,9,"上课") ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\Query.php:251
2016-05-20 04:09:07 --- DEBUG: #0 C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'insert into wor...', false, Array)
#1 C:\Users\WLB\Desktop\sim\application\classes\Baseclass.php(28): Kohana_Database_Query->execute()
#2 C:\Users\WLB\Desktop\sim\application\classes\Course.php(13): BaseClass::insert(Array)
#3 C:\Users\WLB\Desktop\sim\application\classes\Controller\Course.php(43): Course::insert(Array)
#4 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Controller.php(84): Controller_Course->action_insert()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Course))
#7 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\WLB\Desktop\sim\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\Query.php:251
2016-05-20 23:43:09 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-20 23:43:09 --- DEBUG: #0 C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'select name,col...', false, Array)
#2 C:\Users\WLB\Desktop\sim\application\classes\Controller\Course.php(34): Kohana_Database_Query->execute()
#3 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Controller.php(84): Controller_Course->action_getall()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Course))
#6 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\Users\WLB\Desktop\sim\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-20 23:45:20 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-20 23:45:20 --- DEBUG: #0 C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'select name,col...', false, Array)
#2 C:\Users\WLB\Desktop\sim\application\classes\Controller\Course.php(34): Kohana_Database_Query->execute()
#3 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Controller.php(84): Controller_Course->action_getall()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Course))
#6 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\Users\WLB\Desktop\sim\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-20 23:45:57 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): ������ӷ���һ��ʱ���û���ȷ�𸴻�ӵ����û�з�Ӧ�����ӳ���ʧ�ܡ�
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-20 23:45:57 --- DEBUG: #0 C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'select name,col...', false, Array)
#2 C:\Users\WLB\Desktop\sim\application\classes\Controller\Course.php(34): Kohana_Database_Query->execute()
#3 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Controller.php(84): Controller_Course->action_getall()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Course))
#6 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\Users\WLB\Desktop\sim\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Users\WLB\Desktop\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
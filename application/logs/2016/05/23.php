<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-05-23 19:20:35 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): �׽��ֲ������һ���޷����ӵ������
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-23 19:20:35 --- DEBUG: #0 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', false, Array)
#2 C:\wamp\www\new\sim\application\classes\Baseclass.php(12): Kohana_Database_Query->execute()
#3 C:\wamp\www\new\sim\application\classes\Student.php(11): BaseClass::getstudent('student')
#4 C:\wamp\www\new\sim\application\cache\smarty_compiled\fc774fef3f0eb6f2d4816612930fb7dec0edcc80.file.student.tpl.php(55): Student::getAllStudent()
#5 C:\wamp\www\new\sim\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(182): content_5742d98f10f959_88135673(Object(Smarty_Internal_Template))
#6 C:\wamp\www\new\sim\modules\smarty\classes\Smarty\View.php(383): Smarty_Internal_TemplateBase->fetch('C:\\wamp\\www\\new...')
#7 C:\wamp\www\new\sim\system\classes\Kohana\Controller\Template.php(44): Smarty_View->render()
#8 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_student))
#11 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-23 19:21:09 --- CRITICAL: Database_Exception [ 2 ]: mysqli::mysqli(): (HY000/2002): �׽��ֲ������һ���޷����ӵ������
 ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
2016-05-23 19:21:09 --- DEBUG: #0 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', false, Array)
#2 C:\wamp\www\new\sim\application\classes\Baseclass.php(12): Kohana_Database_Query->execute()
#3 C:\wamp\www\new\sim\application\classes\Student.php(11): BaseClass::getstudent('student')
#4 C:\wamp\www\new\sim\application\cache\smarty_compiled\fc774fef3f0eb6f2d4816612930fb7dec0edcc80.file.student.tpl.php(55): Student::getAllStudent()
#5 C:\wamp\www\new\sim\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(182): content_5742d98f10f959_88135673(Object(Smarty_Internal_Template))
#6 C:\wamp\www\new\sim\modules\smarty\classes\Smarty\View.php(383): Smarty_Internal_TemplateBase->fetch('C:\\wamp\\www\\new...')
#7 C:\wamp\www\new\sim\system\classes\Kohana\Controller\Template.php(44): Smarty_View->render()
#8 C:\wamp\www\new\sim\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_student))
#11 C:\wamp\www\new\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\new\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\new\sim\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\new\sim\modules\database\classes\Kohana\Database\MySQLi.php:154
<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-05-16 09:09:16 --- CRITICAL: ErrorException [ 8 ]: Undefined index: person ~ APPPATH\classes\Baseclass.php [ 19 ] in C:\Users\WLB\Desktop\sim\application\classes\Baseclass.php:19
2016-05-16 09:09:16 --- DEBUG: #0 C:\Users\WLB\Desktop\sim\application\classes\Baseclass.php(19): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\Users\\WLB\\De...', 19, Array)
#1 C:\Users\WLB\Desktop\sim\application\classes\Login.php(11): BaseClass::loginchack(Array)
#2 C:\Users\WLB\Desktop\sim\application\classes\Controller\Login.php(21): Login::loginchack(Array)
#3 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Controller.php(84): Controller_login->action_loginapi()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_login))
#6 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\Users\WLB\Desktop\sim\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Users\WLB\Desktop\sim\application\classes\Baseclass.php:19
2016-05-16 09:09:50 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\Controller\Login.php [ 20 ] in file:line
2016-05-16 09:09:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-05-16 09:10:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\Controller\Login.php [ 20 ] in file:line
2016-05-16 09:10:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-05-16 09:10:27 --- CRITICAL: ErrorException [ 8 ]: Undefined index: person ~ APPPATH\classes\Baseclass.php [ 19 ] in C:\Users\WLB\Desktop\sim\application\classes\Baseclass.php:19
2016-05-16 09:10:27 --- DEBUG: #0 C:\Users\WLB\Desktop\sim\application\classes\Baseclass.php(19): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\Users\\WLB\\De...', 19, Array)
#1 C:\Users\WLB\Desktop\sim\application\classes\Login.php(11): BaseClass::loginchack(Array)
#2 C:\Users\WLB\Desktop\sim\application\classes\Controller\Login.php(21): Login::loginchack(Array)
#3 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Controller.php(84): Controller_login->action_loginapi()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_login))
#6 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Users\WLB\Desktop\sim\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\Users\WLB\Desktop\sim\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Users\WLB\Desktop\sim\application\classes\Baseclass.php:19
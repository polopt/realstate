<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-01-24 08:18:26 --- ERROR: View_Exception [ 0 ]: The requested view admin/home could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-01-24 08:18:26 --- STRACE: View_Exception [ 0 ]: The requested view admin/home could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/realstate/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/home')
#1 /var/www/realstate/application/classes/controller/welcome.php(7): Kohana_View->__construct('admin/home')
#2 [internal function]: Controller_Welcome->action_index()
#3 /var/www/realstate/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/realstate/index.php(108): Kohana_Request->execute()
#7 {main}
2014-01-24 08:19:38 --- ERROR: View_Exception [ 0 ]: The requested view admin/home could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-01-24 08:19:38 --- STRACE: View_Exception [ 0 ]: The requested view admin/home could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/realstate/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/home')
#1 /var/www/realstate/application/classes/controller/welcome.php(7): Kohana_View->__construct('admin/home')
#2 [internal function]: Controller_Welcome->action_index()
#3 /var/www/realstate/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/realstate/index.php(108): Kohana_Request->execute()
#7 {main}
2014-01-24 08:35:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 35 ]
2014-01-24 08:35:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 35 ]
--
#0 /var/www/realstate/application/views/template.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/realst...', 35, Array)
#1 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#2 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#3 /var/www/realstate/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/realstate/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/realstate/index.php(108): Kohana_Request->execute()
#9 {main}
2014-01-24 08:37:05 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Request::$is_ajax ~ APPPATH/classes/controller/website.php [ 24 ]
2014-01-24 08:37:05 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Request::$is_ajax ~ APPPATH/classes/controller/website.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-01-24 08:37:19 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH/classes/controller/website.php [ 30 ]
2014-01-24 08:37:19 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH/classes/controller/website.php [ 30 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-01-24 08:37:35 --- ERROR: ErrorException [ 1 ]: Class 'meta' not found ~ APPPATH/classes/controller/website.php [ 61 ]
2014-01-24 08:37:35 --- STRACE: ErrorException [ 1 ]: Class 'meta' not found ~ APPPATH/classes/controller/website.php [ 61 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-01-24 08:46:06 --- ERROR: ErrorException [ 1 ]: Call to undefined function data() ~ APPPATH/views/footer.php [ 4 ]
2014-01-24 08:46:06 --- STRACE: ErrorException [ 1 ]: Call to undefined function data() ~ APPPATH/views/footer.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-01-24 08:49:26 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-01-24 08:49:26 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/realstate/system/classes/kohana/view.php(137): Kohana_View->set_filename('template')
#1 /var/www/realstate/system/classes/kohana/view.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/realstate/system/classes/kohana/controller/template.php(33): Kohana_View::factory('template')
#3 /var/www/realstate/application/classes/controller/website.php(21): Kohana_Controller_Template->before()
#4 /var/www/realstate/application/classes/controller/frontend.php(9): Controller_Website->before()
#5 [internal function]: Controller_Frontend->before()
#6 /var/www/realstate/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/realstate/index.php(108): Kohana_Request->execute()
#10 {main}
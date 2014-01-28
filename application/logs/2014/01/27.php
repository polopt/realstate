<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-01-27 17:28:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-01-27 17:28:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-01-27 17:55:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: main_menu ~ APPPATH/views/template/header.php [ 35 ]
2014-01-27 17:55:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: main_menu ~ APPPATH/views/template/header.php [ 35 ]
--
#0 /var/www/realstate/application/views/template/header.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/realst...', 35, Array)
#1 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#2 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#3 /var/www/realstate/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/realstate/application/views/template/template.php(35): Kohana_View->__toString()
#5 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#6 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#7 /var/www/realstate/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /var/www/realstate/application/classes/controller/website.php(61): Kohana_Controller_Template->after()
#9 /var/www/realstate/application/classes/controller/frontend.php(40): Controller_Website->after()
#10 [internal function]: Controller_Frontend->after()
#11 /var/www/realstate/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/realstate/index.php(108): Kohana_Request->execute()
#15 {main}
2014-01-27 18:03:55 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/template/header.php [ 42 ]
2014-01-27 18:03:55 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/template/header.php [ 42 ]
--
#0 /var/www/realstate/application/views/template/header.php(42): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/realst...', 42, Array)
#1 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#2 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#3 /var/www/realstate/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/realstate/application/views/template/template.php(35): Kohana_View->__toString()
#5 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#6 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#7 /var/www/realstate/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /var/www/realstate/application/classes/controller/website.php(61): Kohana_Controller_Template->after()
#9 /var/www/realstate/application/classes/controller/frontend.php(40): Controller_Website->after()
#10 [internal function]: Controller_Frontend->after()
#11 /var/www/realstate/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/realstate/index.php(108): Kohana_Request->execute()
#15 {main}
2014-01-27 18:10:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: value ~ APPPATH/views/template/header.php [ 42 ]
2014-01-27 18:10:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: value ~ APPPATH/views/template/header.php [ 42 ]
--
#0 /var/www/realstate/application/views/template/header.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/realst...', 42, Array)
#1 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#2 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#3 /var/www/realstate/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/realstate/application/views/template/template.php(35): Kohana_View->__toString()
#5 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#6 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#7 /var/www/realstate/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /var/www/realstate/application/classes/controller/website.php(61): Kohana_Controller_Template->after()
#9 /var/www/realstate/application/classes/controller/frontend.php(40): Controller_Website->after()
#10 [internal function]: Controller_Frontend->after()
#11 /var/www/realstate/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/realstate/index.php(108): Kohana_Request->execute()
#15 {main}
2014-01-27 18:23:24 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: body ~ SYSPATH/classes/kohana/view.php [ 171 ]
2014-01-27 18:23:24 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: body ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /var/www/realstate/application/classes/controller/frontend.php(34): Kohana_View->__get('body')
#1 [internal function]: Controller_Frontend->before()
#2 /var/www/realstate/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/realstate/index.php(108): Kohana_Request->execute()
#6 {main}
2014-01-27 18:24:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: partners ~ APPPATH/views/home/home.php [ 756 ]
2014-01-27 18:24:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: partners ~ APPPATH/views/home/home.php [ 756 ]
--
#0 /var/www/realstate/application/views/home/home.php(756): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/realst...', 756, Array)
#1 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#2 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#3 /var/www/realstate/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/realstate/application/views/template/template.php(36): Kohana_View->__toString()
#5 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#6 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#7 /var/www/realstate/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /var/www/realstate/application/classes/controller/website.php(26): Kohana_Controller_Template->after()
#9 /var/www/realstate/application/classes/controller/frontend.php(46): Controller_Website->after()
#10 [internal function]: Controller_Frontend->after()
#11 /var/www/realstate/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/realstate/index.php(108): Kohana_Request->execute()
#15 {main}
2014-01-27 18:30:07 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: body ~ SYSPATH/classes/kohana/view.php [ 171 ]
2014-01-27 18:30:07 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: body ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /var/www/realstate/application/classes/controller/frontend.php(35): Kohana_View->__get('body')
#1 [internal function]: Controller_Frontend->before()
#2 /var/www/realstate/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/realstate/index.php(108): Kohana_Request->execute()
#6 {main}
2014-01-27 18:31:57 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: body ~ SYSPATH/classes/kohana/view.php [ 171 ]
2014-01-27 18:31:57 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: body ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /var/www/realstate/application/classes/controller/website.php(22): Kohana_View->__get('body')
#1 /var/www/realstate/application/classes/controller/frontend.php(10): Controller_Website->before()
#2 [internal function]: Controller_Frontend->before()
#3 /var/www/realstate/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/realstate/index.php(108): Kohana_Request->execute()
#7 {main}
2014-01-27 18:34:55 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/website.php [ 21 ]
2014-01-27 18:34:55 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/website.php [ 21 ]
--
#0 /var/www/realstate/application/classes/controller/website.php(21): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/realst...', 21, Array)
#1 /var/www/realstate/application/classes/controller/frontend.php(10): Controller_Website->before()
#2 [internal function]: Controller_Frontend->before()
#3 /var/www/realstate/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/realstate/index.php(108): Kohana_Request->execute()
#7 {main}
2014-01-27 18:35:28 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: body ~ SYSPATH/classes/kohana/view.php [ 171 ]
2014-01-27 18:35:28 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: body ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /var/www/realstate/application/classes/controller/website.php(22): Kohana_View->__get('body')
#1 /var/www/realstate/application/classes/controller/frontend.php(10): Controller_Website->before()
#2 [internal function]: Controller_Frontend->before()
#3 /var/www/realstate/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/realstate/index.php(108): Kohana_Request->execute()
#7 {main}
2014-01-27 18:44:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: slider ~ APPPATH/views/home/home.php [ 16 ]
2014-01-27 18:44:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: slider ~ APPPATH/views/home/home.php [ 16 ]
--
#0 /var/www/realstate/application/views/home/home.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/realst...', 16, Array)
#1 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#2 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#3 /var/www/realstate/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/realstate/application/views/template/template.php(36): Kohana_View->__toString()
#5 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#6 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#7 /var/www/realstate/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /var/www/realstate/application/classes/controller/website.php(31): Kohana_Controller_Template->after()
#9 /var/www/realstate/application/classes/controller/frontend.php(44): Controller_Website->after()
#10 [internal function]: Controller_Frontend->after()
#11 /var/www/realstate/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/realstate/index.php(108): Kohana_Request->execute()
#15 {main}
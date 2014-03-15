<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-03-10 06:29:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: partners ~ APPPATH/views/home/home.php [ 370 ]
2014-03-10 06:29:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: partners ~ APPPATH/views/home/home.php [ 370 ]
--
#0 /var/www/realstate/application/views/home/home.php(370): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/realst...', 370, Array)
#1 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#2 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#3 /var/www/realstate/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/realstate/application/views/template/template.php(38): Kohana_View->__toString()
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
2014-03-10 06:29:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: partners ~ APPPATH/views/home/home.php [ 370 ]
2014-03-10 06:29:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: partners ~ APPPATH/views/home/home.php [ 370 ]
--
#0 /var/www/realstate/application/views/home/home.php(370): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/realst...', 370, Array)
#1 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#2 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#3 /var/www/realstate/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/realstate/application/views/template/template.php(38): Kohana_View->__toString()
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
2014-03-10 06:29:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: partners ~ APPPATH/views/home/home.php [ 370 ]
2014-03-10 06:29:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: partners ~ APPPATH/views/home/home.php [ 370 ]
--
#0 /var/www/realstate/application/views/home/home.php(370): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/realst...', 370, Array)
#1 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#2 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#3 /var/www/realstate/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/realstate/application/views/template/template.php(38): Kohana_View->__toString()
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
2014-03-10 06:29:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: partners ~ APPPATH/views/home/home.php [ 370 ]
2014-03-10 06:29:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: partners ~ APPPATH/views/home/home.php [ 370 ]
--
#0 /var/www/realstate/application/views/home/home.php(370): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/realst...', 370, Array)
#1 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#2 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#3 /var/www/realstate/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/realstate/application/views/template/template.php(38): Kohana_View->__toString()
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
2014-03-10 06:29:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: partners ~ APPPATH/views/home/home.php [ 370 ]
2014-03-10 06:29:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: partners ~ APPPATH/views/home/home.php [ 370 ]
--
#0 /var/www/realstate/application/views/home/home.php(370): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/realst...', 370, Array)
#1 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#2 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#3 /var/www/realstate/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/realstate/application/views/template/template.php(38): Kohana_View->__toString()
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
2014-03-10 08:08:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-10 08:08:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-10 08:10:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: partners ~ APPPATH/views/home/home.php [ 370 ]
2014-03-10 08:10:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: partners ~ APPPATH/views/home/home.php [ 370 ]
--
#0 /var/www/realstate/application/views/home/home.php(370): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/realst...', 370, Array)
#1 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#2 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#3 /var/www/realstate/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/realstate/application/views/template/template.php(38): Kohana_View->__toString()
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
2014-03-10 08:12:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: partners ~ APPPATH/views/home/home.php [ 370 ]
2014-03-10 08:12:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: partners ~ APPPATH/views/home/home.php [ 370 ]
--
#0 /var/www/realstate/application/views/home/home.php(370): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/realst...', 370, Array)
#1 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#2 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#3 /var/www/realstate/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/realstate/application/views/template/template.php(38): Kohana_View->__toString()
#5 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#6 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#7 /var/www/realstate/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /var/www/realstate/application/classes/controller/website.php(33): Kohana_Controller_Template->after()
#9 /var/www/realstate/application/classes/controller/frontend.php(44): Controller_Website->after()
#10 [internal function]: Controller_Frontend->after()
#11 /var/www/realstate/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/realstate/index.php(108): Kohana_Request->execute()
#15 {main}
2014-03-10 08:13:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: partners ~ APPPATH/views/home/home.php [ 370 ]
2014-03-10 08:13:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: partners ~ APPPATH/views/home/home.php [ 370 ]
--
#0 /var/www/realstate/application/views/home/home.php(370): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/realst...', 370, Array)
#1 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#2 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#3 /var/www/realstate/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/realstate/application/views/template/template.php(38): Kohana_View->__toString()
#5 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#6 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#7 /var/www/realstate/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /var/www/realstate/application/classes/controller/website.php(33): Kohana_Controller_Template->after()
#9 /var/www/realstate/application/classes/controller/frontend.php(44): Controller_Website->after()
#10 [internal function]: Controller_Frontend->after()
#11 /var/www/realstate/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/realstate/index.php(108): Kohana_Request->execute()
#15 {main}
2014-03-10 08:13:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: partners ~ APPPATH/views/home/home.php [ 370 ]
2014-03-10 08:13:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: partners ~ APPPATH/views/home/home.php [ 370 ]
--
#0 /var/www/realstate/application/views/home/home.php(370): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/realst...', 370, Array)
#1 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#2 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#3 /var/www/realstate/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/realstate/application/views/template/template.php(38): Kohana_View->__toString()
#5 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#6 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#7 /var/www/realstate/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /var/www/realstate/application/classes/controller/website.php(33): Kohana_Controller_Template->after()
#9 /var/www/realstate/application/classes/controller/frontend.php(44): Controller_Website->after()
#10 [internal function]: Controller_Frontend->after()
#11 /var/www/realstate/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/realstate/index.php(108): Kohana_Request->execute()
#15 {main}
2014-03-10 08:13:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: partners ~ APPPATH/views/home/home.php [ 370 ]
2014-03-10 08:13:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: partners ~ APPPATH/views/home/home.php [ 370 ]
--
#0 /var/www/realstate/application/views/home/home.php(370): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/realst...', 370, Array)
#1 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#2 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#3 /var/www/realstate/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/realstate/application/views/template/template.php(38): Kohana_View->__toString()
#5 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#6 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#7 /var/www/realstate/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /var/www/realstate/application/classes/controller/website.php(33): Kohana_Controller_Template->after()
#9 /var/www/realstate/application/classes/controller/frontend.php(44): Controller_Website->after()
#10 [internal function]: Controller_Frontend->after()
#11 /var/www/realstate/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/realstate/index.php(108): Kohana_Request->execute()
#15 {main}
2014-03-10 08:14:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: partners ~ APPPATH/views/home/home.php [ 370 ]
2014-03-10 08:14:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: partners ~ APPPATH/views/home/home.php [ 370 ]
--
#0 /var/www/realstate/application/views/home/home.php(370): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/realst...', 370, Array)
#1 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#2 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#3 /var/www/realstate/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/realstate/application/views/template/template.php(38): Kohana_View->__toString()
#5 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#6 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#7 /var/www/realstate/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /var/www/realstate/application/classes/controller/website.php(33): Kohana_Controller_Template->after()
#9 /var/www/realstate/application/classes/controller/frontend.php(44): Controller_Website->after()
#10 [internal function]: Controller_Frontend->after()
#11 /var/www/realstate/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/realstate/index.php(108): Kohana_Request->execute()
#15 {main}
2014-03-10 08:15:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/views/home/home.php [ 369 ]
2014-03-10 08:15:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/views/home/home.php [ 369 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-10 08:15:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: partners ~ APPPATH/views/home/home.php [ 369 ]
2014-03-10 08:15:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: partners ~ APPPATH/views/home/home.php [ 369 ]
--
#0 /var/www/realstate/application/views/home/home.php(369): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/realst...', 369, Array)
#1 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#2 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#3 /var/www/realstate/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/realstate/application/views/template/template.php(38): Kohana_View->__toString()
#5 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#6 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#7 /var/www/realstate/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /var/www/realstate/application/classes/controller/website.php(33): Kohana_Controller_Template->after()
#9 /var/www/realstate/application/classes/controller/frontend.php(44): Controller_Website->after()
#10 [internal function]: Controller_Frontend->after()
#11 /var/www/realstate/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/realstate/index.php(108): Kohana_Request->execute()
#15 {main}
2014-03-10 08:18:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-870x350.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-10 08:18:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-870x350.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-10 08:18:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-80x80.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-10 08:18:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-80x80.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-10 08:18:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-870x350.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-10 08:18:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-870x350.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-10 08:18:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-80x80.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-10 08:18:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-80x80.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-10 08:18:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-540x360.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-10 08:18:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-540x360.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-10 08:18:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-150x150.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-10 08:18:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-150x150.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-10 08:18:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-70x60.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-10 08:18:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-70x60.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-10 13:43:17 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-10 13:43:17 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-10 13:44:34 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-10 13:44:34 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-10 13:54:29 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-10 13:54:29 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-10 13:55:42 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-10 13:55:42 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-10 16:58:24 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-10 16:58:24 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-10 12:03:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property-listings-list.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-10 12:03:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property-listings-list.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-10 18:36:17 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-10 18:36:17 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-10 18:38:54 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-10 18:38:54 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-10 18:42:56 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-10 18:42:56 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
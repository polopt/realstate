<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-29 16:30:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/welcome.php [ 9 ]
2012-04-29 16:30:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/welcome.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-29 16:30:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 16:30:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 16:30:44 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-04-29 16:30:44 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/camping/system/classes/kohana/view.php(137): Kohana_View->set_filename('template')
#1 /var/www/camping/system/classes/kohana/view.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/camping/system/classes/kohana/controller/template.php(33): Kohana_View::factory('template')
#3 [internal function]: Kohana_Controller_Template->before()
#4 /var/www/camping/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/camping/index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-29 16:30:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 16:30:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 16:33:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 16:33:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 16:34:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 16:34:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 16:34:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 16:34:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 16:34:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 16:34:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 16:38:26 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: view ~ SYSPATH/classes/kohana/view.php [ 171 ]
2012-04-29 16:38:26 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: view ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /var/www/camping/application/classes/controller/welcome.php(8): Kohana_View->__get('view')
#1 [internal function]: Controller_Welcome->action_index()
#2 /var/www/camping/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/camping/index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-29 16:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 16:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 16:39:06 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: view ~ SYSPATH/classes/kohana/view.php [ 171 ]
2012-04-29 16:39:06 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: view ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /var/www/camping/application/classes/controller/welcome.php(8): Kohana_View->__get('view')
#1 [internal function]: Controller_Welcome->action_index()
#2 /var/www/camping/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/camping/index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-29 16:39:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 16:39:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 16:58:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: langObj ~ APPPATH/views/template.php [ 2 ]
2012-04-29 16:58:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: langObj ~ APPPATH/views/template.php [ 2 ]
--
#0 /var/www/camping/application/views/template.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/campin...', 2, Array)
#1 /var/www/camping/system/classes/kohana/view.php(61): include('/var/www/campin...')
#2 /var/www/camping/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/campin...', Array)
#3 /var/www/camping/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/camping/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/camping/index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-29 16:58:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 16:58:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 16:58:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: langObj ~ APPPATH/views/template.php [ 2 ]
2012-04-29 16:58:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: langObj ~ APPPATH/views/template.php [ 2 ]
--
#0 /var/www/camping/application/views/template.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/campin...', 2, Array)
#1 /var/www/camping/system/classes/kohana/view.php(61): include('/var/www/campin...')
#2 /var/www/camping/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/campin...', Array)
#3 /var/www/camping/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/camping/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/camping/index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-29 16:58:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 16:58:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 16:59:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: langObj ~ APPPATH/views/template.php [ 2 ]
2012-04-29 16:59:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: langObj ~ APPPATH/views/template.php [ 2 ]
--
#0 /var/www/camping/application/views/template.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/campin...', 2, Array)
#1 /var/www/camping/system/classes/kohana/view.php(61): include('/var/www/campin...')
#2 /var/www/camping/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/campin...', Array)
#3 /var/www/camping/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/camping/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/camping/index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-29 16:59:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 16:59:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 16:59:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: langObj ~ APPPATH/views/template.php [ 2 ]
2012-04-29 16:59:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: langObj ~ APPPATH/views/template.php [ 2 ]
--
#0 /var/www/camping/application/views/template.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/campin...', 2, Array)
#1 /var/www/camping/system/classes/kohana/view.php(61): include('/var/www/campin...')
#2 /var/www/camping/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/campin...', Array)
#3 /var/www/camping/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/camping/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/camping/index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-29 16:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 16:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 16:59:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: metas ~ APPPATH/views/template.php [ 10 ]
2012-04-29 16:59:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: metas ~ APPPATH/views/template.php [ 10 ]
--
#0 /var/www/camping/application/views/template.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/campin...', 10, Array)
#1 /var/www/camping/system/classes/kohana/view.php(61): include('/var/www/campin...')
#2 /var/www/camping/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/campin...', Array)
#3 /var/www/camping/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/camping/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/camping/index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-29 16:59:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 16:59:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:00:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: metas ~ APPPATH/views/template.php [ 10 ]
2012-04-29 17:00:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: metas ~ APPPATH/views/template.php [ 10 ]
--
#0 /var/www/camping/application/views/template.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/campin...', 10, Array)
#1 /var/www/camping/system/classes/kohana/view.php(61): include('/var/www/campin...')
#2 /var/www/camping/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/campin...', Array)
#3 /var/www/camping/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/camping/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/camping/index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-29 17:00:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:00:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:01:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: metas ~ APPPATH/views/template.php [ 10 ]
2012-04-29 17:01:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: metas ~ APPPATH/views/template.php [ 10 ]
--
#0 /var/www/camping/application/views/template.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/campin...', 10, Array)
#1 /var/www/camping/system/classes/kohana/view.php(61): include('/var/www/campin...')
#2 /var/www/camping/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/campin...', Array)
#3 /var/www/camping/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/camping/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/camping/index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-29 17:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:01:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: metas ~ APPPATH/views/template.php [ 10 ]
2012-04-29 17:01:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: metas ~ APPPATH/views/template.php [ 10 ]
--
#0 /var/www/camping/application/views/template.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/campin...', 10, Array)
#1 /var/www/camping/system/classes/kohana/view.php(61): include('/var/www/campin...')
#2 /var/www/camping/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/campin...', Array)
#3 /var/www/camping/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/camping/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/camping/index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-29 17:01:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:01:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:02:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: metas ~ APPPATH/views/template.php [ 10 ]
2012-04-29 17:02:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: metas ~ APPPATH/views/template.php [ 10 ]
--
#0 /var/www/camping/application/views/template.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/campin...', 10, Array)
#1 /var/www/camping/system/classes/kohana/view.php(61): include('/var/www/campin...')
#2 /var/www/camping/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/campin...', Array)
#3 /var/www/camping/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/camping/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/camping/index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-29 17:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:02:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH/views/template.php [ 34 ]
2012-04-29 17:02:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH/views/template.php [ 34 ]
--
#0 /var/www/camping/application/views/template.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/campin...', 34, Array)
#1 /var/www/camping/system/classes/kohana/view.php(61): include('/var/www/campin...')
#2 /var/www/camping/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/campin...', Array)
#3 /var/www/camping/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/camping/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/camping/index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-29 17:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:02:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: footer ~ APPPATH/views/template.php [ 68 ]
2012-04-29 17:02:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: footer ~ APPPATH/views/template.php [ 68 ]
--
#0 /var/www/camping/application/views/template.php(68): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/campin...', 68, Array)
#1 /var/www/camping/system/classes/kohana/view.php(61): include('/var/www/campin...')
#2 /var/www/camping/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/campin...', Array)
#3 /var/www/camping/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/camping/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/camping/index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-29 17:02:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:02:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:03:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:03:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:04:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:04:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:05:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:05:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:05:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:05:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:05:43 --- ERROR: ErrorException [ 1 ]: Class 'A2' not found ~ MODPATH/admin/classes/controller/admin/base.php [ 60 ]
2012-04-29 17:05:43 --- STRACE: ErrorException [ 1 ]: Class 'A2' not found ~ MODPATH/admin/classes/controller/admin/base.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-29 17:05:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:05:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:05:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:05:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:06:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:06:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:08:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:08:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:10:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:10:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:11:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:11:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:12:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:12:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:12:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:12:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:13:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:13:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:13:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:13:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:13:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:13:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:14:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 31 ]
2012-04-29 17:14:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 31 ]
--
#0 /var/www/camping/application/views/template.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/campin...', 31, Array)
#1 /var/www/camping/system/classes/kohana/view.php(61): include('/var/www/campin...')
#2 /var/www/camping/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/campin...', Array)
#3 /var/www/camping/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/camping/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/camping/index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-29 17:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:15:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 31 ]
2012-04-29 17:15:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 31 ]
--
#0 /var/www/camping/application/views/template.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/campin...', 31, Array)
#1 /var/www/camping/system/classes/kohana/view.php(61): include('/var/www/campin...')
#2 /var/www/camping/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/campin...', Array)
#3 /var/www/camping/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/camping/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/camping/index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-29 17:15:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:15:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:15:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 31 ]
2012-04-29 17:15:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 31 ]
--
#0 /var/www/camping/application/views/template.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/campin...', 31, Array)
#1 /var/www/camping/system/classes/kohana/view.php(61): include('/var/www/campin...')
#2 /var/www/camping/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/campin...', Array)
#3 /var/www/camping/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/camping/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/camping/index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-29 17:15:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:15:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:15:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 31 ]
2012-04-29 17:15:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 31 ]
--
#0 /var/www/camping/application/views/template.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/campin...', 31, Array)
#1 /var/www/camping/system/classes/kohana/view.php(61): include('/var/www/campin...')
#2 /var/www/camping/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/campin...', Array)
#3 /var/www/camping/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/camping/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/camping/index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-29 17:15:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:15:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:15:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 31 ]
2012-04-29 17:15:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 31 ]
--
#0 /var/www/camping/application/views/template.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/campin...', 31, Array)
#1 /var/www/camping/system/classes/kohana/view.php(61): include('/var/www/campin...')
#2 /var/www/camping/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/campin...', Array)
#3 /var/www/camping/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/camping/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/camping/index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-29 17:15:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:15:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:15:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 31 ]
2012-04-29 17:15:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 31 ]
--
#0 /var/www/camping/application/views/template.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/campin...', 31, Array)
#1 /var/www/camping/system/classes/kohana/view.php(61): include('/var/www/campin...')
#2 /var/www/camping/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/campin...', Array)
#3 /var/www/camping/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/camping/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/camping/index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-29 17:15:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:15:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:16:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 31 ]
2012-04-29 17:16:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 31 ]
--
#0 /var/www/camping/application/views/template.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/campin...', 31, Array)
#1 /var/www/camping/system/classes/kohana/view.php(61): include('/var/www/campin...')
#2 /var/www/camping/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/campin...', Array)
#3 /var/www/camping/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/camping/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/camping/index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-29 17:16:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:16:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:16:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:16:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:17:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:17:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:17:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:17:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:17:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:17:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 17:17:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-29 17:17:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-03-20 11:20:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-20 11:20:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-20 11:35:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL services was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-20 11:35:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL services was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-20 11:35:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: full_width ~ APPPATH/views/template/template.php [ 36 ]
2014-03-20 11:35:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: full_width ~ APPPATH/views/template/template.php [ 36 ]
--
#0 /var/www/realstate/application/views/template/template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/realst...', 36, Array)
#1 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#2 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#3 /var/www/realstate/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /var/www/realstate/application/classes/controller/website.php(40): Kohana_Controller_Template->after()
#5 /var/www/realstate/application/classes/controller/frontend.php(44): Controller_Website->after()
#6 [internal function]: Controller_Frontend->after()
#7 /var/www/realstate/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Servicos))
#8 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/realstate/index.php(108): Kohana_Request->execute()
#11 {main}
2014-03-20 11:54:02 --- ERROR: ErrorException [ 1 ]: Call to undefined function dumper() ~ APPPATH/classes/controller/website.php [ 22 ]
2014-03-20 11:54:02 --- STRACE: ErrorException [ 1 ]: Call to undefined function dumper() ~ APPPATH/classes/controller/website.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
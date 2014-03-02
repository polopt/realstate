<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-03-02 10:00:07 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: header ~ SYSPATH/classes/kohana/view.php [ 171 ]
2014-03-02 10:00:07 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: header ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /var/www/realstate/application/views/template/template.php(38): Kohana_View->__get('header')
#1 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#2 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#3 /var/www/realstate/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /var/www/realstate/application/classes/controller/website.php(31): Kohana_Controller_Template->after()
#5 /var/www/realstate/application/classes/controller/frontend.php(44): Controller_Website->after()
#6 [internal function]: Controller_Frontend->after()
#7 /var/www/realstate/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/realstate/index.php(108): Kohana_Request->execute()
#11 {main}
2014-03-02 10:03:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/home/home.php [ 16 ]
2014-03-02 10:03:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/home/home.php [ 16 ]
--
#0 /var/www/realstate/application/views/home/home.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/realst...', 16, Array)
#1 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#2 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#3 /var/www/realstate/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/realstate/application/views/template/template.php(37): Kohana_View->__toString()
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
2014-03-02 10:13:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/home/slider.php [ 2 ]
2014-03-02 10:13:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/home/slider.php [ 2 ]
--
#0 /var/www/realstate/application/views/home/slider.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/realst...', 2, Array)
#1 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#2 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#3 /var/www/realstate/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/realstate/application/views/home/home.php(16): Kohana_View->__toString()
#5 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#6 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#7 /var/www/realstate/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/realstate/application/views/template/template.php(38): Kohana_View->__toString()
#9 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#10 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#11 /var/www/realstate/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 /var/www/realstate/application/classes/controller/website.php(31): Kohana_Controller_Template->after()
#13 /var/www/realstate/application/classes/controller/frontend.php(44): Controller_Website->after()
#14 [internal function]: Controller_Frontend->after()
#15 /var/www/realstate/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#16 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 /var/www/realstate/index.php(108): Kohana_Request->execute()
#19 {main}
2014-03-02 10:17:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/home/slider.php [ 2 ]
2014-03-02 10:17:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/home/slider.php [ 2 ]
--
#0 /var/www/realstate/application/views/home/slider.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/realst...', 2, Array)
#1 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#2 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#3 /var/www/realstate/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/realstate/application/views/home/home.php(16): Kohana_View->__toString()
#5 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#6 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#7 /var/www/realstate/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/realstate/application/views/template/template.php(38): Kohana_View->__toString()
#9 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#10 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#11 /var/www/realstate/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 /var/www/realstate/application/classes/controller/website.php(31): Kohana_Controller_Template->after()
#13 /var/www/realstate/application/classes/controller/frontend.php(44): Controller_Website->after()
#14 [internal function]: Controller_Frontend->after()
#15 /var/www/realstate/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#16 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 /var/www/realstate/index.php(108): Kohana_Request->execute()
#19 {main}
2014-03-02 10:17:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/home/slider.php [ 2 ]
2014-03-02 10:17:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/home/slider.php [ 2 ]
--
#0 /var/www/realstate/application/views/home/slider.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/realst...', 2, Array)
#1 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#2 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#3 /var/www/realstate/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/realstate/application/views/home/home.php(16): Kohana_View->__toString()
#5 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#6 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#7 /var/www/realstate/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/realstate/application/views/template/template.php(38): Kohana_View->__toString()
#9 /var/www/realstate/system/classes/kohana/view.php(61): include('/var/www/realst...')
#10 /var/www/realstate/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/realst...', Array)
#11 /var/www/realstate/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 /var/www/realstate/application/classes/controller/website.php(31): Kohana_Controller_Template->after()
#13 /var/www/realstate/application/classes/controller/frontend.php(44): Controller_Website->after()
#14 [internal function]: Controller_Frontend->after()
#15 /var/www/realstate/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#16 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 /var/www/realstate/index.php(108): Kohana_Request->execute()
#19 {main}
2014-03-02 10:21:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/view-grid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-02 10:21:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/view-grid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-02 10:21:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/dummy-540x360.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-02 10:21:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/dummy-540x360.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-02 10:21:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/view-list.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-02 10:21:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/view-list.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-02 10:21:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/dummy-70x60.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-02 10:21:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/dummy-70x60.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-02 10:24:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/view-list.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-02 10:24:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/view-list.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-02 10:24:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/view-grid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-02 10:24:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/view-grid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-02 10:24:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/dummy-540x360.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-02 10:24:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/dummy-540x360.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-02 10:24:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/dummy-70x60.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-02 10:24:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/dummy-70x60.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-02 10:24:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/view-list.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-02 10:24:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/view-list.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-02 10:24:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/dummy-70x60.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-02 10:24:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/dummy-70x60.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-02 10:24:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/view-grid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-02 10:24:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/view-grid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-02 10:24:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/dummy-540x360.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-02 10:24:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/dummy-540x360.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-02 10:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/view-list.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-02 10:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/view-list.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-02 10:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/view-grid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-02 10:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/view-grid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-02 10:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/dummy-540x360.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-02 10:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/dummy-540x360.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-02 10:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/dummy-70x60.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-02 10:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/dummy-70x60.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-02 10:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/view-list.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-02 10:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/view-grid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-02 10:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/view-grid.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-02 10:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/view-list.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-02 10:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/dummy-540x360.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-02 10:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/dummy-540x360.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-02 10:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/dummy-70x60.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-02 10:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/dummy-70x60.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
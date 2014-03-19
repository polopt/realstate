<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-03-19 14:19:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-19 14:19:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-19 14:19:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-19 14:19:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-19 14:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL servicoes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-19 14:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL servicoes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-19 14:55:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-19 14:55:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
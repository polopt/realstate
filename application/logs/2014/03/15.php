<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-03-15 10:26:16 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 10:26:16 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 05:26:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-15 05:26:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-15 05:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:30:55 --- ERROR: ErrorException [ 1 ]: Class 'A2' not found ~ MODPATH/admin/classes/controller/admin/base.php [ 60 ]
2014-03-15 05:30:55 --- STRACE: ErrorException [ 1 ]: Class 'A2' not found ~ MODPATH/admin/classes/controller/admin/base.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 05:32:40 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Base' not found ~ MODPATH/kohana3-admin/classes/controller/admin/base.php [ 3 ]
2014-03-15 05:32:40 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Base' not found ~ MODPATH/kohana3-admin/classes/controller/admin/base.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 05:33:02 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Base' not found ~ MODPATH/kohana3-admin/classes/controller/admin/base.php [ 3 ]
2014-03-15 05:33:02 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Base' not found ~ MODPATH/kohana3-admin/classes/controller/admin/base.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 05:33:02 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Base' not found ~ MODPATH/kohana3-admin/classes/controller/admin/base.php [ 3 ]
2014-03-15 05:33:02 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Base' not found ~ MODPATH/kohana3-admin/classes/controller/admin/base.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 05:33:03 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Base' not found ~ MODPATH/kohana3-admin/classes/controller/admin/base.php [ 3 ]
2014-03-15 05:33:03 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Base' not found ~ MODPATH/kohana3-admin/classes/controller/admin/base.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 05:33:03 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Base' not found ~ MODPATH/kohana3-admin/classes/controller/admin/base.php [ 3 ]
2014-03-15 05:33:03 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Base' not found ~ MODPATH/kohana3-admin/classes/controller/admin/base.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 05:33:04 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Base' not found ~ MODPATH/kohana3-admin/classes/controller/admin/base.php [ 3 ]
2014-03-15 05:33:04 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Base' not found ~ MODPATH/kohana3-admin/classes/controller/admin/base.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 05:33:04 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Base' not found ~ MODPATH/kohana3-admin/classes/controller/admin/base.php [ 3 ]
2014-03-15 05:33:04 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Base' not found ~ MODPATH/kohana3-admin/classes/controller/admin/base.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 05:33:04 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Base' not found ~ MODPATH/kohana3-admin/classes/controller/admin/base.php [ 3 ]
2014-03-15 05:33:04 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Base' not found ~ MODPATH/kohana3-admin/classes/controller/admin/base.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 05:33:04 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Base' not found ~ MODPATH/kohana3-admin/classes/controller/admin/base.php [ 3 ]
2014-03-15 05:33:04 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Base' not found ~ MODPATH/kohana3-admin/classes/controller/admin/base.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 05:33:05 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Base' not found ~ MODPATH/kohana3-admin/classes/controller/admin/base.php [ 3 ]
2014-03-15 05:33:05 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Base' not found ~ MODPATH/kohana3-admin/classes/controller/admin/base.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 05:33:34 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Base' not found ~ MODPATH/kohana3-admin/classes/controller/admin/base.php [ 3 ]
2014-03-15 05:33:34 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Base' not found ~ MODPATH/kohana3-admin/classes/controller/admin/base.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 05:34:11 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'admin.old' at 'MODPATH/kohana3-admin.old' ~ SYSPATH/classes/kohana/core.php [ 542 ]
2014-03-15 05:34:11 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'admin.old' at 'MODPATH/kohana3-admin.old' ~ SYSPATH/classes/kohana/core.php [ 542 ]
--
#0 /var/www/realstate/application/bootstrap.php(109): Kohana_Core::modules(Array)
#1 /var/www/realstate/index.php(101): require('/var/www/realst...')
#2 {main}
2014-03-15 05:34:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana3-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:34:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana3-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:34:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana3-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:34:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana3-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:35:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:35:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:37:36 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Base' not found ~ MODPATH/kohana3-admin/classes/controller/admin/base.php [ 3 ]
2014-03-15 05:37:36 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Base' not found ~ MODPATH/kohana3-admin/classes/controller/admin/base.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 05:42:57 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'admin' at 'MODPATH/kohana3-admin' ~ SYSPATH/classes/kohana/core.php [ 542 ]
2014-03-15 05:42:57 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'admin' at 'MODPATH/kohana3-admin' ~ SYSPATH/classes/kohana/core.php [ 542 ]
--
#0 /var/www/realstate/application/bootstrap.php(109): Kohana_Core::modules(Array)
#1 /var/www/realstate/index.php(101): require('/var/www/realst...')
#2 {main}
2014-03-15 05:43:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:43:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:43:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:43:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:43:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:43:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:43:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:43:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:43:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:43:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:43:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:43:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:43:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/install was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:43:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/install was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/install.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-15 05:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/install.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-15 05:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/install was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/install was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:45:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/install was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:45:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/install was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:45:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:45:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:48:00 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Base' not found ~ MODPATH/admin/classes/controller/admin/base.php [ 3 ]
2014-03-15 05:48:00 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Base' not found ~ MODPATH/admin/classes/controller/admin/base.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 05:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:50:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:50:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:53:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:53:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:53:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:53:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:53:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:53:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:53:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:53:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:53:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:53:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:53:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:53:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:53:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:53:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:53:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 05:53:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 05:53:11 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Request::$is_ajax ~ MODPATH/admin/classes/controller/admin/base.php [ 25 ]
2014-03-15 05:53:11 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Request::$is_ajax ~ MODPATH/admin/classes/controller/admin/base.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 05:53:57 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$controller ~ MODPATH/admin/classes/controller/admin/base.php [ 28 ]
2014-03-15 05:53:57 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$controller ~ MODPATH/admin/classes/controller/admin/base.php [ 28 ]
--
#0 /var/www/realstate/modules/admin/classes/controller/admin/base.php(28): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/realst...', 28, Array)
#1 [internal function]: Controller_Admin_Base->before()
#2 /var/www/realstate/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Home))
#3 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/realstate/index.php(108): Kohana_Request->execute()
#6 {main}
2014-03-15 07:07:44 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Request::$is_ajax ~ MODPATH/admin/classes/controller/admin/base.php [ 25 ]
2014-03-15 07:07:44 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Request::$is_ajax ~ MODPATH/admin/classes/controller/admin/base.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 07:07:45 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Request::$is_ajax ~ MODPATH/admin/classes/controller/admin/base.php [ 25 ]
2014-03-15 07:07:45 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Request::$is_ajax ~ MODPATH/admin/classes/controller/admin/base.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 07:07:46 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Request::$is_ajax ~ MODPATH/admin/classes/controller/admin/base.php [ 25 ]
2014-03-15 07:07:46 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Request::$is_ajax ~ MODPATH/admin/classes/controller/admin/base.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 07:07:46 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Request::$is_ajax ~ MODPATH/admin/classes/controller/admin/base.php [ 25 ]
2014-03-15 07:07:46 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Request::$is_ajax ~ MODPATH/admin/classes/controller/admin/base.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 13:03:34 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 13:03:34 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 08:03:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 08:03:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 08:03:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-15 08:03:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-15 08:04:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 08:04:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 08:06:45 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'pagination' at 'MODPATH/pagination' ~ SYSPATH/classes/kohana/core.php [ 542 ]
2014-03-15 08:06:45 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'pagination' at 'MODPATH/pagination' ~ SYSPATH/classes/kohana/core.php [ 542 ]
--
#0 /var/www/realstate/application/bootstrap.php(116): Kohana_Core::modules(Array)
#1 /var/www/realstate/index.php(101): require('/var/www/realst...')
#2 {main}
2014-03-15 08:08:20 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'pagination' at 'MODPATH/pagination' ~ SYSPATH/classes/kohana/core.php [ 542 ]
2014-03-15 08:08:20 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'pagination' at 'MODPATH/pagination' ~ SYSPATH/classes/kohana/core.php [ 542 ]
--
#0 /var/www/realstate/application/bootstrap.php(116): Kohana_Core::modules(Array)
#1 /var/www/realstate/index.php(101): require('/var/www/realst...')
#2 {main}
2014-03-15 08:09:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shindig was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 08:09:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shindig was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 08:09:44 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Controller::__construct() must be an instance of Response, none given, called in /var/www/realstate/modules/shindig/classes/controller/shindig/admin.php on line 12 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
2014-03-15 08:09:44 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Controller::__construct() must be an instance of Response, none given, called in /var/www/realstate/modules/shindig/classes/controller/shindig/admin.php on line 12 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
--
#0 /var/www/realstate/system/classes/kohana/controller.php(43): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/var/www/realst...', 43, Array)
#1 /var/www/realstate/modules/shindig/classes/controller/shindig/admin.php(12): Kohana_Controller->__construct(Object(Request))
#2 [internal function]: Controller_Shindig_Admin->__construct(Object(Request), Object(Response))
#3 /var/www/realstate/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/realstate/index.php(108): Kohana_Request->execute()
#7 {main}
2014-03-15 08:10:56 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Controller::__construct() must be an instance of Response, none given, called in /var/www/realstate/modules/shindig/classes/controller/shindig/admin.php on line 12 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
2014-03-15 08:10:56 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Controller::__construct() must be an instance of Response, none given, called in /var/www/realstate/modules/shindig/classes/controller/shindig/admin.php on line 12 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
--
#0 /var/www/realstate/system/classes/kohana/controller.php(43): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/var/www/realst...', 43, Array)
#1 /var/www/realstate/modules/shindig/classes/controller/shindig/admin.php(12): Kohana_Controller->__construct(Object(Request))
#2 [internal function]: Controller_Shindig_Admin->__construct(Object(Request), Object(Response))
#3 /var/www/realstate/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/realstate/index.php(108): Kohana_Request->execute()
#7 {main}
2014-03-15 08:13:51 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Controller::__construct() must be an instance of Response, null given, called in /var/www/realstate/modules/shindig/classes/controller/shindig/admin.php on line 12 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
2014-03-15 08:13:51 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Controller::__construct() must be an instance of Response, null given, called in /var/www/realstate/modules/shindig/classes/controller/shindig/admin.php on line 12 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
--
#0 /var/www/realstate/system/classes/kohana/controller.php(43): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/var/www/realst...', 43, Array)
#1 /var/www/realstate/modules/shindig/classes/controller/shindig/admin.php(12): Kohana_Controller->__construct(Object(Request), NULL)
#2 [internal function]: Controller_Shindig_Admin->__construct(Object(Request), Object(Response))
#3 /var/www/realstate/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/realstate/index.php(108): Kohana_Request->execute()
#7 {main}
2014-03-15 08:17:07 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/shindig/classes/controller/shindig/admin.php [ 14 ]
2014-03-15 08:17:07 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/shindig/classes/controller/shindig/admin.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 08:21:29 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ MODPATH/shindig/classes/controller/shindig/admin.php [ 48 ]
2014-03-15 08:21:29 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ MODPATH/shindig/classes/controller/shindig/admin.php [ 48 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 08:22:55 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/shindig/classes/controller/shindig/post.php [ 10 ]
2014-03-15 08:22:55 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/shindig/classes/controller/shindig/post.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 08:24:15 --- ERROR: Shindig_Exception [ 0 ]: Unauthorized Access ~ MODPATH/shindig/classes/controller/shindig/post.php [ 12 ]
2014-03-15 08:24:15 --- STRACE: Shindig_Exception [ 0 ]: Unauthorized Access ~ MODPATH/shindig/classes/controller/shindig/post.php [ 12 ]
--
#0 [internal function]: Controller_Shindig_Post->before()
#1 /var/www/realstate/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Shindig_Post))
#2 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /var/www/realstate/modules/shindig/classes/controller/shindig/admin.php(70): Kohana_Request->execute()
#5 [internal function]: Controller_Shindig_Admin->action_list()
#6 /var/www/realstate/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Shindig_Admin))
#7 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/realstate/index.php(108): Kohana_Request->execute()
#10 {main}
2014-03-15 08:24:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shindig was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-15 08:24:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shindig was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/realstate/index.php(108): Kohana_Request->execute()
#3 {main}
2014-03-15 08:24:54 --- ERROR: ErrorException [ 2048 ]: Declaration of Model_User::values() should be compatible with Kohana_ORM::values(array $values, array $expected = NULL) ~ APPPATH/classes/model/user.php [ 3 ]
2014-03-15 08:24:54 --- STRACE: ErrorException [ 2048 ]: Declaration of Model_User::values() should be compatible with Kohana_ORM::values(array $values, array $expected = NULL) ~ APPPATH/classes/model/user.php [ 3 ]
--
#0 /var/www/realstate/application/classes/model/user.php(3): Kohana_Core::error_handler(2048, 'Declaration of ...', '/var/www/realst...', 3, Array)
#1 /var/www/realstate/system/classes/kohana/core.php(496): require('/var/www/realst...')
#2 [internal function]: Kohana_Core::auto_load('Model_User')
#3 /var/www/realstate/modules/orm/classes/kohana/orm.php(37): spl_autoload_call('Model_User')
#4 /var/www/realstate/modules/shindig/classes/controller/shindig/admin.php(204): Kohana_ORM::factory('user')
#5 [internal function]: Controller_Shindig_Admin->action_login()
#6 /var/www/realstate/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Shindig_Admin))
#7 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/realstate/index.php(108): Kohana_Request->execute()
#10 {main}
2014-03-15 08:34:59 --- ERROR: ErrorException [ 2048 ]: Declaration of Model_User::values() should be compatible with Kohana_ORM::values(array $values, array $expected = NULL) ~ APPPATH/classes/model/user.php [ 3 ]
2014-03-15 08:34:59 --- STRACE: ErrorException [ 2048 ]: Declaration of Model_User::values() should be compatible with Kohana_ORM::values(array $values, array $expected = NULL) ~ APPPATH/classes/model/user.php [ 3 ]
--
#0 /var/www/realstate/application/classes/model/user.php(3): Kohana_Core::error_handler(2048, 'Declaration of ...', '/var/www/realst...', 3, Array)
#1 /var/www/realstate/system/classes/kohana/core.php(496): require('/var/www/realst...')
#2 [internal function]: Kohana_Core::auto_load('Model_User')
#3 /var/www/realstate/modules/orm/classes/kohana/orm.php(37): spl_autoload_call('Model_User')
#4 /var/www/realstate/modules/shindig/classes/controller/shindig/admin.php(204): Kohana_ORM::factory('user')
#5 [internal function]: Controller_Shindig_Admin->action_login()
#6 /var/www/realstate/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Shindig_Admin))
#7 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/realstate/index.php(108): Kohana_Request->execute()
#10 {main}
2014-03-15 08:36:41 --- ERROR: ErrorException [ 2048 ]: Declaration of Model_User::values() should be compatible with Kohana_ORM::values(array $values, array $expected = NULL) ~ APPPATH/classes/model/user.php [ 3 ]
2014-03-15 08:36:41 --- STRACE: ErrorException [ 2048 ]: Declaration of Model_User::values() should be compatible with Kohana_ORM::values(array $values, array $expected = NULL) ~ APPPATH/classes/model/user.php [ 3 ]
--
#0 /var/www/realstate/application/classes/model/user.php(3): Kohana_Core::error_handler(2048, 'Declaration of ...', '/var/www/realst...', 3, Array)
#1 /var/www/realstate/system/classes/kohana/core.php(496): require('/var/www/realst...')
#2 [internal function]: Kohana_Core::auto_load('Model_User')
#3 /var/www/realstate/modules/orm/classes/kohana/orm.php(37): spl_autoload_call('Model_User')
#4 /var/www/realstate/modules/shindig/classes/controller/shindig/admin.php(204): Kohana_ORM::factory('user')
#5 [internal function]: Controller_Shindig_Admin->action_login()
#6 /var/www/realstate/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Shindig_Admin))
#7 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/realstate/index.php(108): Kohana_Request->execute()
#10 {main}
2014-03-15 08:37:15 --- ERROR: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2014-03-15 08:37:15 --- STRACE: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /var/www/realstate/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/realstate/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/realstate/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 /var/www/realstate/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /var/www/realstate/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /var/www/realstate/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /var/www/realstate/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/realstate/modules/shindig/classes/controller/shindig/admin.php(204): Kohana_ORM::factory('user')
#8 [internal function]: Controller_Shindig_Admin->action_login()
#9 /var/www/realstate/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Shindig_Admin))
#10 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/realstate/index.php(108): Kohana_Request->execute()
#13 {main}
2014-03-15 08:37:16 --- ERROR: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2014-03-15 08:37:16 --- STRACE: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /var/www/realstate/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/realstate/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/realstate/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 /var/www/realstate/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /var/www/realstate/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /var/www/realstate/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /var/www/realstate/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/realstate/modules/shindig/classes/controller/shindig/admin.php(204): Kohana_ORM::factory('user')
#8 [internal function]: Controller_Shindig_Admin->action_login()
#9 /var/www/realstate/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Shindig_Admin))
#10 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/realstate/index.php(108): Kohana_Request->execute()
#13 {main}
2014-03-15 08:37:17 --- ERROR: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2014-03-15 08:37:17 --- STRACE: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /var/www/realstate/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/realstate/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/realstate/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 /var/www/realstate/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /var/www/realstate/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /var/www/realstate/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /var/www/realstate/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/realstate/modules/shindig/classes/controller/shindig/admin.php(204): Kohana_ORM::factory('user')
#8 [internal function]: Controller_Shindig_Admin->action_login()
#9 /var/www/realstate/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Shindig_Admin))
#10 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/realstate/index.php(108): Kohana_Request->execute()
#13 {main}
2014-03-15 08:37:18 --- ERROR: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2014-03-15 08:37:18 --- STRACE: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /var/www/realstate/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/realstate/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/realstate/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 /var/www/realstate/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /var/www/realstate/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /var/www/realstate/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /var/www/realstate/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/realstate/modules/shindig/classes/controller/shindig/admin.php(204): Kohana_ORM::factory('user')
#8 [internal function]: Controller_Shindig_Admin->action_login()
#9 /var/www/realstate/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Shindig_Admin))
#10 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/realstate/index.php(108): Kohana_Request->execute()
#13 {main}
2014-03-15 08:37:18 --- ERROR: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2014-03-15 08:37:18 --- STRACE: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /var/www/realstate/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/realstate/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/realstate/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 /var/www/realstate/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /var/www/realstate/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /var/www/realstate/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /var/www/realstate/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/realstate/modules/shindig/classes/controller/shindig/admin.php(204): Kohana_ORM::factory('user')
#8 [internal function]: Controller_Shindig_Admin->action_login()
#9 /var/www/realstate/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Shindig_Admin))
#10 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/realstate/index.php(108): Kohana_Request->execute()
#13 {main}
2014-03-15 08:37:19 --- ERROR: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2014-03-15 08:37:19 --- STRACE: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /var/www/realstate/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/realstate/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/realstate/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 /var/www/realstate/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /var/www/realstate/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /var/www/realstate/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /var/www/realstate/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/realstate/modules/shindig/classes/controller/shindig/admin.php(204): Kohana_ORM::factory('user')
#8 [internal function]: Controller_Shindig_Admin->action_login()
#9 /var/www/realstate/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Shindig_Admin))
#10 /var/www/realstate/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/realstate/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/realstate/index.php(108): Kohana_Request->execute()
#13 {main}
2014-03-15 09:40:20 --- ERROR: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/kohana/database.php [ 78 ]
2014-03-15 09:40:20 --- STRACE: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/kohana/database.php [ 78 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 14:43:34 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 14:43:34 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 14:44:06 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 14:44:06 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 09:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-15 09:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-15 09:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-15 09:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-15 14:48:00 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 14:48:00 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 15:00:55 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 15:00:55 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 15:04:57 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 15:04:57 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 15:05:07 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 15:05:07 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 15:05:52 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 15:05:52 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 15:06:42 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 15:06:42 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 15:07:16 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 15:07:16 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 15:08:11 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 15:08:11 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 15:08:48 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 15:08:48 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 15:18:58 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 15:18:58 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 15:20:01 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 15:20:01 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 15:21:45 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 15:21:45 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 15:22:39 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 15:22:39 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 15:25:13 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 15:25:13 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 15:28:23 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 15:28:23 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 15:30:09 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 15:30:09 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 15:31:30 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 15:31:30 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 15:34:04 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 15:34:04 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 15:37:10 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 15:37:10 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 15:41:17 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 15:41:17 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 15:44:00 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 15:44:00 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 15:44:56 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 15:44:56 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 15:45:15 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 15:45:15 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 15:46:39 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 15:46:39 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 15:47:56 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 15:47:56 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 15:53:08 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 15:53:08 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 15:53:37 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 15:53:37 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 15:53:57 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 15:53:57 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 15:57:02 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 15:57:02 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 15:57:17 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 15:57:17 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 15:58:49 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 15:58:49 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 15:59:41 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 15:59:41 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 16:00:14 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 16:00:14 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 16:00:56 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 16:00:56 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 16:01:23 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 16:01:23 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 16:01:54 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 16:01:54 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 16:02:30 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 16:02:30 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 16:03:16 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 16:03:16 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 16:03:44 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 16:03:44 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 16:06:48 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 16:06:48 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 16:10:28 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 16:10:28 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 16:15:27 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 16:15:27 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 16:21:03 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 16:21:03 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 16:26:25 --- ERROR: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
2014-03-15 16:26:25 --- STRACE: ErrorException [ 1 ]: Cannot redeclare __() (previously declared in /var/www/realstate/system/classes/kohana/i18n.php:155) ~ /var/www/wordpress/wp-includes/l10n.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-03-15 11:26:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/background.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-15 11:26:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/background.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-15 11:29:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/background.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-15 11:29:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/background.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-15 11:29:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/background.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-15 11:29:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/background.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-15 11:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-870x350.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-15 11:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-870x350.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-15 11:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-80x80.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-15 11:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-80x80.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-15 11:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-150x150.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-15 11:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-150x150.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-15 11:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-540x360.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-15 11:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-540x360.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-15 11:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-70x60.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-15 11:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-70x60.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-15 11:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-870x350.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-15 11:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-870x350.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-15 11:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-80x80.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-15 11:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-80x80.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-15 11:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-150x150.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-15 11:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-540x360.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-15 11:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-540x360.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-15 11:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-150x150.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
2014-03-15 11:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-70x60.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-03-15 11:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: property/uploads/dummy-70x60.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/realstate/index.php(108): Kohana_Request->execute()
#1 {main}
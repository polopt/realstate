<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-01 10:58:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 10:58:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-01 10:58:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 10:58:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-01 10:59:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 10:59:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-01 11:05:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 11:05:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-01 11:10:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 11:10:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-01 12:10:27 --- ERROR: ErrorException [ 1 ]: Call to undefined function dumper() ~ APPPATH/classes/controller/welcome.php [ 16 ]
2012-05-01 12:10:27 --- STRACE: ErrorException [ 1 ]: Call to undefined function dumper() ~ APPPATH/classes/controller/welcome.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-01 12:28:55 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`camping`.`places`, CONSTRAINT `places_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `places` (`name`) VALUES ('') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-05-01 12:28:55 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`camping`.`places`, CONSTRAINT `places_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `places` (`name`) VALUES ('') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/camping/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pl...', false, Array)
#1 /var/www/camping/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/camping/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /var/www/camping/application/classes/controller/welcome.php(21): Kohana_ORM->save()
#4 [internal function]: Controller_Welcome->action_index()
#5 /var/www/camping/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/camping/index.php(109): Kohana_Request->execute()
#9 {main}
2012-05-01 12:30:31 --- ERROR: ErrorException [ 8 ]: Undefined index: company_di ~ APPPATH/classes/controller/welcome.php [ 21 ]
2012-05-01 12:30:31 --- STRACE: ErrorException [ 8 ]: Undefined index: company_di ~ APPPATH/classes/controller/welcome.php [ 21 ]
--
#0 /var/www/camping/application/classes/controller/welcome.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/campin...', 21, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 /var/www/camping/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/camping/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-01 12:30:46 --- ERROR: ErrorException [ 8 ]: Undefined index: company_id ~ APPPATH/classes/controller/welcome.php [ 21 ]
2012-05-01 12:30:46 --- STRACE: ErrorException [ 8 ]: Undefined index: company_id ~ APPPATH/classes/controller/welcome.php [ 21 ]
--
#0 /var/www/camping/application/classes/controller/welcome.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/campin...', 21, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 /var/www/camping/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/camping/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-01 12:30:52 --- ERROR: ErrorException [ 8 ]: Undefined index: company_id ~ APPPATH/classes/controller/welcome.php [ 21 ]
2012-05-01 12:30:52 --- STRACE: ErrorException [ 8 ]: Undefined index: company_id ~ APPPATH/classes/controller/welcome.php [ 21 ]
--
#0 /var/www/camping/application/classes/controller/welcome.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/campin...', 21, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 /var/www/camping/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/camping/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-01 12:35:41 --- ERROR: ErrorException [ 8 ]: Undefined index: photo ~ APPPATH/classes/controller/welcome.php [ 17 ]
2012-05-01 12:35:41 --- STRACE: ErrorException [ 8 ]: Undefined index: photo ~ APPPATH/classes/controller/welcome.php [ 17 ]
--
#0 /var/www/camping/application/classes/controller/welcome.php(17): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/campin...', 17, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 /var/www/camping/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/camping/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-01 12:36:04 --- ERROR: ErrorException [ 8 ]: Undefined index: photo ~ APPPATH/classes/controller/welcome.php [ 17 ]
2012-05-01 12:36:04 --- STRACE: ErrorException [ 8 ]: Undefined index: photo ~ APPPATH/classes/controller/welcome.php [ 17 ]
--
#0 /var/www/camping/application/classes/controller/welcome.php(17): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/campin...', 17, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 /var/www/camping/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/camping/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-01 12:36:29 --- ERROR: ErrorException [ 8 ]: Undefined index: photo[] ~ APPPATH/classes/controller/welcome.php [ 17 ]
2012-05-01 12:36:29 --- STRACE: ErrorException [ 8 ]: Undefined index: photo[] ~ APPPATH/classes/controller/welcome.php [ 17 ]
--
#0 /var/www/camping/application/classes/controller/welcome.php(17): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/campin...', 17, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 /var/www/camping/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/camping/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-01 12:45:04 --- ERROR: ErrorException [ 8 ]: Undefined index: photo ~ APPPATH/classes/controller/welcome.php [ 26 ]
2012-05-01 12:45:04 --- STRACE: ErrorException [ 8 ]: Undefined index: photo ~ APPPATH/classes/controller/welcome.php [ 26 ]
--
#0 /var/www/camping/application/classes/controller/welcome.php(26): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/campin...', 26, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 /var/www/camping/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/camping/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-01 12:46:11 --- ERROR: ErrorException [ 8 ]: Undefined index: photo ~ APPPATH/classes/controller/welcome.php [ 26 ]
2012-05-01 12:46:11 --- STRACE: ErrorException [ 8 ]: Undefined index: photo ~ APPPATH/classes/controller/welcome.php [ 26 ]
--
#0 /var/www/camping/application/classes/controller/welcome.php(26): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/campin...', 26, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 /var/www/camping/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/camping/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-01 12:46:51 --- ERROR: ErrorException [ 8 ]: Undefined index: photo ~ APPPATH/classes/controller/welcome.php [ 26 ]
2012-05-01 12:46:51 --- STRACE: ErrorException [ 8 ]: Undefined index: photo ~ APPPATH/classes/controller/welcome.php [ 26 ]
--
#0 /var/www/camping/application/classes/controller/welcome.php(26): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/campin...', 26, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 /var/www/camping/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/camping/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-01 12:47:13 --- ERROR: ErrorException [ 8 ]: Undefined index: photo ~ APPPATH/classes/controller/welcome.php [ 26 ]
2012-05-01 12:47:13 --- STRACE: ErrorException [ 8 ]: Undefined index: photo ~ APPPATH/classes/controller/welcome.php [ 26 ]
--
#0 /var/www/camping/application/classes/controller/welcome.php(26): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/campin...', 26, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 /var/www/camping/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/camping/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-01 12:47:45 --- ERROR: ErrorException [ 8 ]: Undefined index: photo ~ APPPATH/classes/controller/welcome.php [ 17 ]
2012-05-01 12:47:45 --- STRACE: ErrorException [ 8 ]: Undefined index: photo ~ APPPATH/classes/controller/welcome.php [ 17 ]
--
#0 /var/www/camping/application/classes/controller/welcome.php(17): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/campin...', 17, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 /var/www/camping/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/camping/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-01 12:48:04 --- ERROR: ErrorException [ 8 ]: Undefined index: photo[0] ~ APPPATH/classes/controller/welcome.php [ 17 ]
2012-05-01 12:48:04 --- STRACE: ErrorException [ 8 ]: Undefined index: photo[0] ~ APPPATH/classes/controller/welcome.php [ 17 ]
--
#0 /var/www/camping/application/classes/controller/welcome.php(17): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/campin...', 17, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 /var/www/camping/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/camping/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-01 12:49:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: files ~ APPPATH/classes/controller/welcome.php [ 29 ]
2012-05-01 12:49:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: files ~ APPPATH/classes/controller/welcome.php [ 29 ]
--
#0 /var/www/camping/application/classes/controller/welcome.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/campin...', 29, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 /var/www/camping/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/camping/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-01 12:49:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: camping ~ APPPATH/classes/controller/welcome.php [ 29 ]
2012-05-01 12:49:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: camping ~ APPPATH/classes/controller/welcome.php [ 29 ]
--
#0 /var/www/camping/application/classes/controller/welcome.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/campin...', 29, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 /var/www/camping/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/camping/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-01 12:49:43 --- ERROR: ErrorException [ 2 ]: is_uploaded_file() expects parameter 1 to be string, array given ~ SYSPATH/classes/kohana/upload.php [ 54 ]
2012-05-01 12:49:43 --- STRACE: ErrorException [ 2 ]: is_uploaded_file() expects parameter 1 to be string, array given ~ SYSPATH/classes/kohana/upload.php [ 54 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'is_uploaded_fil...', '/var/www/campin...', 54, Array)
#1 /var/www/camping/system/classes/kohana/upload.php(54): is_uploaded_file(Array)
#2 /var/www/camping/application/classes/controller/welcome.php(29): Kohana_Upload::save(Array, '2659916628_05aa...', '/var/www/campin...', 488)
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/camping/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/camping/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-01 12:51:05 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/welcome.php [ 26 ]
2012-05-01 12:51:05 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/welcome.php [ 26 ]
--
#0 /var/www/camping/application/classes/controller/welcome.php(26): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/campin...', 26, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 /var/www/camping/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/camping/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-01 12:55:03 --- ERROR: Kohana_Exception [ 0 ]: Directory DOCROOT/datastore/camping/43/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
2012-05-01 12:55:03 --- STRACE: Kohana_Exception [ 0 ]: Directory DOCROOT/datastore/camping/43/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
--
#0 /var/www/camping/application/classes/controller/welcome.php(29): Kohana_Upload::save(Array, '2659872049_d1f0...', '/var/www/campin...', 488)
#1 [internal function]: Controller_Welcome->action_index()
#2 /var/www/camping/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/camping/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-01 12:56:06 --- ERROR: ErrorException [ 1 ]: Call to undefined function dumper() ~ APPPATH/classes/controller/welcome.php [ 33 ]
2012-05-01 12:56:06 --- STRACE: ErrorException [ 1 ]: Call to undefined function dumper() ~ APPPATH/classes/controller/welcome.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-01 13:01:07 --- ERROR: Kohana_Exception [ 0 ]: The adress property does not exist in the Model_Place class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-05-01 13:01:07 --- STRACE: Kohana_Exception [ 0 ]: The adress property does not exist in the Model_Place class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /var/www/camping/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('adress', 'N343, 3320 Pamp...')
#1 /var/www/camping/application/classes/controller/welcome.php(22): Kohana_ORM->__set('adress', 'N343, 3320 Pamp...')
#2 [internal function]: Controller_Welcome->action_index()
#3 /var/www/camping/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/camping/index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-01 15:14:28 --- ERROR: Database_Exception [ 1049 ]: Unknown database 'camping' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2012-05-01 15:14:28 --- STRACE: Database_Exception [ 1049 ]: Unknown database 'camping' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
--
#0 /var/www/camping/modules/database/classes/kohana/database/mysql.php(75): Kohana_Database_MySQL->_select_db('camping')
#1 /var/www/camping/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#2 /var/www/camping/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /var/www/camping/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('companies')
#4 /var/www/camping/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#5 /var/www/camping/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#6 /var/www/camping/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#7 /var/www/camping/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#8 /var/www/camping/application/classes/controller/welcome.php(41): Kohana_ORM::factory('company')
#9 [internal function]: Controller_Welcome->action_index()
#10 /var/www/camping/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/camping/index.php(109): Kohana_Request->execute()
#14 {main}
2012-05-01 17:08:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 17:08:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(108): Kohana_Request->execute()
#1 {main}
2012-05-01 17:32:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 17:32:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(108): Kohana_Request->execute()
#1 {main}
2012-05-01 17:45:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 17:45:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(108): Kohana_Request->execute()
#1 {main}
2012-05-01 17:46:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 17:46:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(108): Kohana_Request->execute()
#1 {main}
2012-05-01 17:59:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 17:59:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(108): Kohana_Request->execute()
#1 {main}
2012-05-01 18:11:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 18:11:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(108): Kohana_Request->execute()
#1 {main}
2012-05-01 18:11:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 18:11:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(108): Kohana_Request->execute()
#1 {main}
2012-05-01 18:19:20 --- ERROR: Kohana_Exception [ 0 ]: The adress property does not exist in the Model_Place class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-05-01 18:19:20 --- STRACE: Kohana_Exception [ 0 ]: The adress property does not exist in the Model_Place class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /var/www/camping/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('adress', 'Est??ncia Terma...')
#1 /var/www/camping/application/classes/controller/welcome.php(22): Kohana_ORM->__set('adress', 'Est??ncia Terma...')
#2 [internal function]: Controller_Welcome->action_index()
#3 /var/www/camping/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/camping/index.php(108): Kohana_Request->execute()
#7 {main}
2012-05-01 18:19:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 18:19:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(108): Kohana_Request->execute()
#1 {main}
2012-05-01 18:19:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 18:19:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(108): Kohana_Request->execute()
#1 {main}
2012-05-01 18:20:58 --- ERROR: Kohana_Exception [ 0 ]: The adress property does not exist in the Model_Place class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-05-01 18:20:58 --- STRACE: Kohana_Exception [ 0 ]: The adress property does not exist in the Model_Place class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /var/www/camping/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('adress', 'Est??ncia Terma...')
#1 /var/www/camping/application/classes/controller/welcome.php(22): Kohana_ORM->__set('adress', 'Est??ncia Terma...')
#2 [internal function]: Controller_Welcome->action_index()
#3 /var/www/camping/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/camping/index.php(108): Kohana_Request->execute()
#7 {main}
2012-05-01 18:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 18:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(108): Kohana_Request->execute()
#1 {main}
2012-05-01 18:21:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 18:21:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(108): Kohana_Request->execute()
#1 {main}
2012-05-01 18:22:30 --- ERROR: Kohana_Exception [ 0 ]: The adress property does not exist in the Model_Place class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-05-01 18:22:30 --- STRACE: Kohana_Exception [ 0 ]: The adress property does not exist in the Model_Place class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /var/www/camping/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('adress', 'R. de Lobi?? 10...')
#1 /var/www/camping/application/classes/controller/welcome.php(22): Kohana_ORM->__set('adress', 'R. de Lobi?? 10...')
#2 [internal function]: Controller_Welcome->action_index()
#3 /var/www/camping/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/camping/index.php(108): Kohana_Request->execute()
#7 {main}
2012-05-01 18:22:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 18:22:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(108): Kohana_Request->execute()
#1 {main}
2012-05-01 18:27:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 18:27:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(108): Kohana_Request->execute()
#1 {main}
2012-05-01 18:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 18:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(108): Kohana_Request->execute()
#1 {main}
2012-05-01 18:28:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 18:28:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(108): Kohana_Request->execute()
#1 {main}
2012-05-01 18:29:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 18:29:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(108): Kohana_Request->execute()
#1 {main}
2012-05-01 18:38:51 --- ERROR: Kohana_Exception [ 0 ]: The adress property does not exist in the Model_Place class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-05-01 18:38:51 --- STRACE: Kohana_Exception [ 0 ]: The adress property does not exist in the Model_Place class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /var/www/camping/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('adress', 'Estr. EN202, 49...')
#1 /var/www/camping/application/classes/controller/welcome.php(22): Kohana_ORM->__set('adress', 'Estr. EN202, 49...')
#2 [internal function]: Controller_Welcome->action_index()
#3 /var/www/camping/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/camping/index.php(108): Kohana_Request->execute()
#7 {main}
2012-05-01 18:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 18:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(108): Kohana_Request->execute()
#1 {main}
2012-05-01 18:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 18:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(108): Kohana_Request->execute()
#1 {main}
2012-05-01 18:41:17 --- ERROR: Kohana_Exception [ 0 ]: The adress property does not exist in the Model_Place class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-05-01 18:41:17 --- STRACE: Kohana_Exception [ 0 ]: The adress property does not exist in the Model_Place class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /var/www/camping/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('adress', 'Estr. CM1138, 4...')
#1 /var/www/camping/application/classes/controller/welcome.php(22): Kohana_ORM->__set('adress', 'Estr. CM1138, 4...')
#2 [internal function]: Controller_Welcome->action_index()
#3 /var/www/camping/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/camping/index.php(108): Kohana_Request->execute()
#7 {main}
2012-05-01 18:41:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 18:41:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(108): Kohana_Request->execute()
#1 {main}
2012-05-01 18:46:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 18:46:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(108): Kohana_Request->execute()
#1 {main}
2012-05-01 18:46:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 18:46:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(108): Kohana_Request->execute()
#1 {main}
2012-05-01 18:50:05 --- ERROR: Kohana_Exception [ 0 ]: The adress property does not exist in the Model_Place class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-05-01 18:50:05 --- STRACE: Kohana_Exception [ 0 ]: The adress property does not exist in the Model_Place class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /var/www/camping/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('adress', 'GPS - 41?? 49' ...')
#1 /var/www/camping/application/classes/controller/welcome.php(22): Kohana_ORM->__set('adress', 'GPS - 41?? 49' ...')
#2 [internal function]: Controller_Welcome->action_index()
#3 /var/www/camping/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/camping/index.php(108): Kohana_Request->execute()
#7 {main}
2012-05-01 18:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 18:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(108): Kohana_Request->execute()
#1 {main}
2012-05-01 18:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 18:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(108): Kohana_Request->execute()
#1 {main}
2012-05-01 18:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL administrator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-01 18:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL administrator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/camping/index.php(108): Kohana_Request->execute()
#3 {main}
2012-05-01 18:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 18:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(108): Kohana_Request->execute()
#1 {main}
2012-05-01 18:54:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 18:54:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(108): Kohana_Request->execute()
#1 {main}
2012-05-01 19:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 19:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(108): Kohana_Request->execute()
#1 {main}
2012-05-01 19:03:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 19:03:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(108): Kohana_Request->execute()
#1 {main}
2012-05-01 19:08:08 --- ERROR: Kohana_Exception [ 0 ]: The adress property does not exist in the Model_Place class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-05-01 19:08:08 --- STRACE: Kohana_Exception [ 0 ]: The adress property does not exist in the Model_Place class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /var/www/camping/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('adress', 'Estr. EN203, 49...')
#1 /var/www/camping/application/classes/controller/welcome.php(22): Kohana_ORM->__set('adress', 'Estr. EN203, 49...')
#2 [internal function]: Controller_Welcome->action_index()
#3 /var/www/camping/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/camping/index.php(108): Kohana_Request->execute()
#7 {main}
2012-05-01 19:08:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 19:08:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(108): Kohana_Request->execute()
#1 {main}
2012-05-01 19:23:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 19:23:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(108): Kohana_Request->execute()
#1 {main}
2012-05-01 20:08:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 20:08:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(108): Kohana_Request->execute()
#1 {main}
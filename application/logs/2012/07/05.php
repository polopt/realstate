<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-05 16:33:32 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH/database/classes/kohana/database.php [ 65 ]
2012-07-05 16:33:32 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH/database/classes/kohana/database.php [ 65 ]
--
#0 /var/www/camping/modules/database/classes/kohana/database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/campin...', 65, Array)
#1 /var/www/camping/modules/orm/classes/kohana/orm.php(295): Kohana_Database::instance(NULL)
#2 /var/www/camping/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#3 /var/www/camping/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#4 /var/www/camping/application/classes/controller/welcome.php(35): Kohana_ORM::factory('company')
#5 [internal function]: Controller_Welcome->action_index()
#6 /var/www/camping/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /var/www/camping/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/camping/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/camping/index.php(108): Kohana_Request->execute()
#10 {main}
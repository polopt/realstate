<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-28 16:36:34 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'admin' at 'MODPATH/camping' ~ SYSPATH/classes/kohana/core.php [ 542 ]
2012-04-28 16:36:34 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'admin' at 'MODPATH/camping' ~ SYSPATH/classes/kohana/core.php [ 542 ]
--
#0 /var/www/camping/application/bootstrap.php(109): Kohana_Core::modules(Array)
#1 /var/www/camping/index.php(102): require('/var/www/campin...')
#2 {main}
2012-04-28 16:36:34 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'admin' at 'MODPATH/camping' ~ SYSPATH/classes/kohana/core.php [ 542 ]
2012-04-28 16:36:34 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'admin' at 'MODPATH/camping' ~ SYSPATH/classes/kohana/core.php [ 542 ]
--
#0 /var/www/camping/application/bootstrap.php(109): Kohana_Core::modules(Array)
#1 /var/www/camping/index.php(102): require('/var/www/campin...')
#2 {main}
2012-04-28 17:03:16 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'admin' at 'MODPATH/camping' ~ SYSPATH/classes/kohana/core.php [ 542 ]
2012-04-28 17:03:16 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'admin' at 'MODPATH/camping' ~ SYSPATH/classes/kohana/core.php [ 542 ]
--
#0 /var/www/camping/application/bootstrap.php(109): Kohana_Core::modules(Array)
#1 /var/www/camping/index.php(102): require('/var/www/campin...')
#2 {main}
2012-04-28 17:03:16 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'admin' at 'MODPATH/camping' ~ SYSPATH/classes/kohana/core.php [ 542 ]
2012-04-28 17:03:16 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'admin' at 'MODPATH/camping' ~ SYSPATH/classes/kohana/core.php [ 542 ]
--
#0 /var/www/camping/application/bootstrap.php(109): Kohana_Core::modules(Array)
#1 /var/www/camping/index.php(102): require('/var/www/campin...')
#2 {main}
2012-04-28 17:03:38 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/admin/classes/controller/template/admin.php [ 36 ]
2012-04-28 17:03:38 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/admin/classes/controller/template/admin.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 17:03:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-28 17:03:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 17:21:28 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/admin/classes/controller/template/admin.php [ 36 ]
2012-04-28 17:21:28 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/admin/classes/controller/template/admin.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 17:21:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-28 17:21:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 17:30:26 --- ERROR: ErrorException [ 1 ]: Class 'A2' not found ~ MODPATH/admin/classes/controller/admin/base.php [ 60 ]
2012-04-28 17:30:26 --- STRACE: ErrorException [ 1 ]: Class 'A2' not found ~ MODPATH/admin/classes/controller/admin/base.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 17:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-28 17:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/camping/index.php(109): Kohana_Request->execute()
#1 {main}
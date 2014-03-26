<?php

defined('SYSPATH') or die('No direct script access.');

//-- Environment setup --------------------------------------------------------

/**
 * Set the default time zone.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/timezones
 */
date_default_timezone_set('Europe/Lisbon');

/**
 * Set the default locale.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/setlocale
 */
setlocale(LC_ALL, 'pt_PT.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @see  http://kohanaframework.org/guide/using.autoloading
 * @see  http://php.net/spl_autoload_register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @see  http://php.net/spl_autoload_call
 * @see  http://php.net/manual/var.configuration.php#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

//-- Configuration and initialization -----------------------------------------

/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 */
//if (getenv('KOHANA_ENV') !== FALSE)
//{
//Kohana::$environment = Kohana::PRODUCTION;
Kohana::$environment = Kohana::DEVELOPMENT;
//}

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 */
Kohana::init(array(
	'base_url' => '/',
//	    'errors' => false,
//	    'error_view' => 'templates/error_template',
	'index_file' => false
));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Kohana_Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Kohana_Config_File);

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
	'auth' => MODPATH.'auth', // Basic authentication
	'cache' => MODPATH.'cache', // Caching with multiple backends
	'database' => MODPATH.'database', // Database access
	'image' => MODPATH.'image', // Image manipulation
	'orm' => MODPATH.'orm', // Object Relationship Mapping
	'pagination' => MODPATH.'pagination', // Paging of results
	'email' => MODPATH.'email', // kohana 2.3.3 email module
//	    'userguide' => MODPATH.'userguide', // User guide and API documentation
	'paypal' => MODPATH.'paypal',
	'sitemap' => MODPATH.'sitemap',
	'facebook' => MODPATH.'facebook',
	'editor' => MODPATH.'editor',
	'sprig' => MODPATH.'sprig',
	'captcha'   => MODPATH.'captcha',   // Unit testing
	//'userguide'  => MODPATH.'userguide',  // User guide and API documentation
	'shindig' => MODPATH.'shindig',
));
function dumper()
{
	$args = func_get_args();
	echo "<pre>";
	foreach ($args as $arg) {
		echo kohana::debug($arg);
	}
	echo "</pre>";
}

function format_date($date, $format_hours = true, $short_format = false)
{
	$format_str = (!$short_format) ? '%A, %d de %B de %Y' : '%d/%b/%y';
	$format_str .= ( $format_hours) ? ', %H:%M' : '';

	$time = is_numeric($date) ? $date : strtotime($date);

	return translate_date(utf8::clean(strftime($format_str, $time)));
}

function array_to_object($array, $class = null, $recursive = false)
{
	if (!empty($array) && is_array($array)) {
		$data = (is_null($class)) ? (object) $class : new $class;
		foreach ($array as $key => $value) {
			if ($recursive && is_array($value)) {
				$value = array_to_object($value, $class, $recursive);
			}
			$data->{$key} = $value;
		}
		return $data;
	}
	return false;
}

function getXwords($phrase, $num_caracteres)
{
	$phrase = strip_tags($phrase);
	if ($num_caracteres > strlen($phrase)) {
		return $phrase;
	}
	$temp = explode(" ", trim($phrase));
	$result = array();
	$counter = 0;
	foreach ($temp as $word) {
		$counter+=strlen($word);
		if ($counter > $num_caracteres) {
			continue;
		} else {
			$result[] = $word;
		}
	}
	return implode(' ', $result).' ...';
}

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */

Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'welcome',
		'action'     => 'index',
	));


Route::set('public', '(<slug>)', array('slug' => '(regras|diversos)'))
	->defaults(array(
		'controller' => 'welcome',
		'action'     => 'page',
	));


if (!defined('SUPPRESS_REQUEST')) {
	/**
	 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
	 * If no source is specified, the URI will be automatically detected.
	 */
//	echo Request::instance()
//		->execute()
//		->send_headers()
//		->response;



	try {
		/**
		 * Execute the main request using PATH_INFO. If no URI source is specified,
		 * the URI will be automatically detected.
		 */
		$request = Request::instance($_SERVER['PATH_INFO']);
		// Attempt to execute the response
		$request->execute();
	} catch (ReflectionException $e) {
		$GLOBALS['exception'] = $e;
		$request = Request::factory('error/404')->send_headers()->execute();
		Kohana::$log->add(Kohana::ERROR, Kohana::exception_text($e));
	} catch (ErrorException $e) {
		$GLOBALS['exception'] = $e;
		$request = Request::factory('error/500')->send_headers()->execute();
		Kohana::$log->add(Kohana::ERROR, Kohana::exception_text($e));
	} catch (Kohana_Exception $e) {
		$GLOBALS['exception'] = $e;
		$request = Request::factory('error/500')->send_headers()->execute();
		Kohana::$log->add(Kohana::ERROR, Kohana::exception_text($e));
	} catch (Kohana_Request_Exception $e) {
		$GLOBALS['exception'] = $e;
		$request = Request::factory('error/404')->send_headers()->execute();
		Kohana::$log->add(Kohana::ERROR, Kohana::exception_text($e));
	} catch (Swift_RfcComplianceException $e) {
		$GLOBALS['exception'] = $e;
		$request = Request::factory('error/500')->send_headers()->execute();
		Kohana::$log->add(Kohana::ERROR, Kohana::exception_text($e));
	} catch (Swift_TransportException $e) {
		$GLOBALS['exception'] = $e;
		$request = Request::factory('error/500')->send_headers()->execute();
		Kohana::$log->add(Kohana::ERROR, Kohana::exception_text($e));
	} catch (Exception $e) {
//	if (Kohana::$environment === Kohana::DEVELOPMENT)
//	{
//	    // Just re-throw the exception
//	    throw $e;
//	}

		$GLOBALS['exception'] = $e;
		// Log the error
		Kohana::$log->add(Kohana::ERROR, Kohana::exception_text($e));
		$request = Request::factory('error/500')->send_headers()->execute();
	}


	/**
	 * Display the request response.
	 */
	echo $request->send_headers()->response;
}

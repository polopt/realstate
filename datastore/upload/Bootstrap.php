<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	// This one is executed first, for security only...
	protected function _initAaa()
	{
		$this->bootstrap('config');
		$this->bootstrap('cli');
		$this->bootstrap('autoload');
		$this->bootstrap('db');
	}

	protected function _initAutoload()
	{
		// Old autoloader compatibility:
		//$loader->setFallbackAutoloader(true);
		//$loader->suppressNotFoundWarnings(false);

		// Done in application config
		//$autoloader = Zend_Loader_Autoloader::getInstance();
		//$autoloader->registerNamespace('My_');

		/*
		The module autoloader will autoload classes with a certain prefix that are in
		certain directories within application/ as per this table:

		Directory - Prefix
		services - Service_
		forms - Form_
		models - Model_
		models/DbTable - Model_DbTable_
		plugins - Plugin_
		 */

		$module_loader = new Zend_Application_Module_Autoloader(array(
			'namespace' => '',
			'basePath' => APPLICATION_PATH,
		));
		
		$module_loader->addResourceTypes(
			array(
				'library' => array(
					'path' => 'library',
					'namespace' => 'Tweasy_',
				),
			)
		);

		if (ISSERVICE) {
			// services are already in the base module
			$module_loader->addResourceTypes(
				array(
					'rpc' => array(
						'path' => 'rpc',
						'namespace' => 'Rpc_',
					),
				)
			);
		} elseif (ISAJAX) {
			$module_loader->addResourceTypes(
				array(
					'ajax' => array(
						'path' => 'ajax',
						'namespace' => 'Ajax_',
					)
				)
			);
		}
		return $module_loader;
	}

	/*
	Running from CLI:
	http://stackoverflow.com/questions/2325338/running-a-zend-framework-action-from-command-line
	This actually work well only if APPLICATION_ENV is set to 'development' (why ?).

	protected function _initRouter()
	{
		if (ISCLI) {
			$this->bootstrap('frontcontroller');
			$front = $this->getResource('frontcontroller');
			$front->setRouter(new My_Router_Cli());
			$front->setRequest(new Zend_Controller_Request_Simple());
		}
	}

	protected function _initRoutes()
	{
		$router = Zend_Controller_Front::getInstance()->getRouter();
		if ($router instanceof Zend_Controller_Router_Rewrite) {
			put your web-interface routes here, so they do not interfere
		}
	}

	protected function _initError ()
	{
		if (ISCLI) {
			$error->setErrorHandlerController('error');
			$error->setErrorHandlerAction('cli');
		}
	}
	 */

	protected function _initAcl()
	{
		$frontController = Zend_Controller_Front::getInstance();
		// Must be called before ACL (50 < 60)
		$frontController->registerPlugin(new My_Controller_Plugin_NotFound(), 50);
		$acl = new Tweasy_Acl();
		$frontController->registerPlugin(new Tweasy_Controller_Plugin_Acl($acl), 60);

		Zend_Registry::set('acl', $acl);
	}

	protected function _initConfig()
	{
		$files = array('config', 'subscriptions', 'campaigns', 'countries');
		if (ISSERVICE) {
			$files[] = 'services';
		}
		if (ISCRON) {
			$files[] = 'crons';
		}

		foreach ($files as $n) {
			$config = new Zend_Config(require APPLICATION_PATH.'/configs/'.$n.'.php', true);
			if (is_file(APPLICATION_PATH.'/configs/'.$n.'_perso.php')) {
				$config_perso = new Zend_Config(require APPLICATION_PATH.'/configs/'.$n.'_perso.php');
				$config->merge($config_perso);
			}
			Zend_Registry::set($n, $config);
		}
	}

	// Build an env for CLI, should be the first bootstrap function called after config !
	protected function _initCli()
	{
		$this->bootstrap('config');
		$config = Zend_Registry::get('config');
		if (ISCLI) {
			$_SERVER = $config->cli->_SERVER->toArray();
		} else {
			// Security check that can only done when not running in CLI mode.
			if ($config->cli->_SERVER->HTTP_HOST != $_SERVER['HTTP_HOST']) {
				die('CLI configuration not synchronized');
			}
		}
	}

	// The ONLY way to get the current language in the app is using
	// Zend_Registry::get('lang'), it's the current language of the page.
	// $session->lang will store the language of the current user (that can
	// be different of the language of the current page).
	// See http://tweasy.local/test/change-lang/
	protected function _initLang()
	{
		$this->bootstrap('config');
		$config = Zend_Registry::get('config');

		if (!ISCLI and !ISSERVICE) {

			// Don't start a new session if not needed
			if ($_COOKIE[session_name()] or $_GET['change_lang']) {
				$session = new Zend_Session_Namespace();
			}
			
			$this->bootstrap('user');
			if (Zend_Registry::isRegistered('user')) {
				$user = Zend_Registry::get('user');
			}

			// Select the new language
			if ($_GET['change_lang'] and Tweasy_Language::check($_GET['change_lang'])) {
				$lang = $_GET['change_lang'];
			} elseif ($user and Tweasy_Language::check($user->language)) {
				$lang = $user->language;
			} elseif ($session and $session->lang and Tweasy_Language::check($session->lang)) {
				$lang = $session->lang;
			} elseif ( // the second condition should always be true
				Tweasy_Language::preferedLanguage() and
				Tweasy_Language::check(Tweasy_Language::preferedLanguage())
				) {
					$lang = Tweasy_Language::preferedLanguage();
				} else {
					$ca = $config->languages->toArray();
					$lang = $ca[0];
				}

			// Store the new language
			if ($user and $user->language != $lang) {
				$user->language = $lang;
				$user->save();
			}

			if ($session) {
				$session->lang = $lang;
			}

		} else {
			$ca = $config->languages->toArray();
			$lang = $ca[0];
		}

		if ($_GET['_force_lang'] and Tweasy_Language::check($_GET['_force_lang'])) {
			Zend_Registry::set('lang', $_GET['_force_lang']);
		} else {
			Zend_Registry::set('lang', $lang);
		}
	}

	protected function _initLog()
	{
		$this->bootstrap('config');
		$config = Zend_Registry::get('config');

		if (!is_writable(APPLICATION_PATH.'/logs/')) {
			throw new Exception('Cannot write in log dir.');
		}
		if (ISCRON) { // Also CLI
			$log = My_Log::newStreamLog('crons.txt');
		} elseif (ISCLI) {
			$log = My_Log::newStreamLog('cli.txt');
		} elseif (ISSERVICE) {
			$log = My_Log::newStreamLog('services.txt');
		} elseif (ISAJAX) {
			$log = My_Log::newStreamLog('ajax.txt');
		} else {
			$log = My_Log::newStreamLog('tweasy.txt');
		}
		Zend_Registry::set('log', $log);

		// firePHP logger
		// cf http://www.christophdorn.com/Blog/2008/09/02/firephp-and-zend-framework-16/
		if ($config->firephp->log) {
			$log = new Zend_Log();
			$writer = new Zend_Log_Writer_Firebug();
			$log->addWriter($writer);
			Zend_Registry::set('firelog', $log);
		}
	}

	protected function _initMiniAction()
	{
		$frontController = Zend_Controller_Front::getInstance();
		$frontController->registerPlugin(new My_Controller_Plugin_MiniAction());
	}

	protected function _initSmtp()
	{
		$this->bootstrap('config');
		$config = Zend_Registry::get('config');

		if ($config->smtp->standard) {
			$transport = new Zend_Mail_Transport_Smtp(
				$config->smtp->standard->address,
				$config->smtp->standard->config->toArray());
			Zend_Mail::setDefaultTransport($transport);

			// Set From & Reply-To address and name for all emails to send.
			// We don't use origin here, but all emails to be sent normally use it.
			if ($_SERVER['HTTP_HOST']) {
				$host = $_SERVER['HTTP_HOST'];
			} else {
				$host = 'localhost';
			}
			Zend_Mail::setDefaultFrom('support@'.$host, 'Support');
			Zend_Mail::setDefaultReplyTo('reply@'.$host, 'Reply');
		}
	}

	// Override existing
	protected function _initTranslate()
	{
		$this->bootstrap('lang');

		$lang = Zend_Registry::get('lang');

		if (!ISCLI and !ISSERVICE) {

			$this->bootstrap('user');
			if (Zend_Registry::isRegistered('user')) {
				$user = Zend_Registry::get('user');
				if ($user->isTranslator()) {
					$session = new Zend_Session_Namespace();
					if (strstr($_SERVER['REQUEST_URI'],'/_translate/1')) {
						$session->translate = true;
					} elseif (strstr($_SERVER['REQUEST_URI'],'/_translate/0')) {
						$session->translate = false;
					}
				}
			}
		}

		$cache = Zend_Cache::factory(
			'Core',
			'File',
			array('automatic_serialization' => true),
			array('cache_dir' => APPLICATION_PATH.'/tmp/cache')
		);

		Zend_Translate::setCache($cache);

		if (!file_exists(APPLICATION_PATH.'/translations/en.php')) {
			Model_TranslationMapper::toFiles();
		}

		$options = array('disableNotices' => 'true');

		$translate = new Zend_Translate('My_Translate_Adapter_Array', APPLICATION_PATH.'/translations/'.
			$lang.'.php', $lang, $options);

		$translate->setLocale($lang);

		Zend_Registry::set('Zend_Translate', $translate);
	}

	// Override existing
	protected function _initView()
	{
		$options = $this->getOptions();
		$config = Zend_Registry::get('config');
		if (isset($options['resources']['view'])) {
			$view = new Zend_View($options['resources']['view']);
		} else {
			$view = new Zend_View();
		}
		if ($config->minify->js) {
			$view->registerHelper(new My_View_Helper_MinifyHeadScript(), 'headScript');
		}
		if ($config->minify->css) {
			$view->registerHelper(new My_View_Helper_MinifyHeadLink(), 'headLink');
		}

		if (isset($options['resources']['view']['doctype'])) {
			$view->doctype($options['resources']['view']['doctype']);
		}
		if (isset($options['resources']['view']['headTitle'])) {
			$view->headTitle($options['resources']['view']['headTitle']);
		}
		if (isset($options['resources']['view']['contentType'])) {
			$view->headMeta()->appendHttpEquiv('Content-Type',
				$options['resources']['view']['contentType']);
		}

		if (isset($options['resources']['view']['meta']['description'])) {
			$view->headMeta()->appendName('Description',
				$options['resources']['view']['meta']['description']);
		}
		if (isset($options['resources']['view']['meta']['copyright'])) {
			$view->headMeta()->appendName('Copyright',
				$options['resources']['view']['meta']['copyright']);
		}

		// These shortcuts will never be available in CLI
		//$view->user = null;
		//$view->origin = null;
		//$view->lang = null;
		//$view->layout_type = null;

		if (!ISCLI and !ISSERVICE) {

			/* TODO remove all view initialisations with Zend_Registry objects:
				It is dangerous to get these values with '$this->xxx' in a view/layout because
				they can possibly have been altered for a specific view/layout and then affect
				globally any successive view/layout.
				When the global one is wanted, directly get it in Zend_Registry.
				Just keep; session, headTitle, ...
			 */

			$this->bootstrap('origin');
			$this->bootstrap('user');
			$this->bootstrap('lang');

			if (Zend_Registry::isRegistered('origin')) {
				$origin = Zend_Registry::get('origin');
				$view->origin = $origin;
				$view->headTitle($origin->long_name);
				$view->layout_type = $origin->name;
			}

			if (Zend_Registry::isRegistered('user')) {
				$view->user = Zend_Registry::get('user');
			}

			if (Zend_Registry::isRegistered('lang')) {
				$view->lang = Zend_Registry::get('lang');
			}
		}

		$view->headLink()
			->headLink(
				array(
					'rel' => 'icon',
					'href' => '/images/favicon.png',
					'type' => 'image/png',
				), 'PREPEND');

		$viewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper(
			'ViewRenderer'
		);
		$viewRenderer->setView($view);
	}

	// Re-implementation of the default DB bootstrap
	// ZFDebug didn't work with $this->getPluginResource('db')->getDbAdapter();
	protected function _initDb()
	{
		$this->bootstrap('config');
		$config = Zend_Registry::get('config');
		$options = $this->getOptions();

		$db = Zend_Db::factory($options['resources']['db']['adapter'], $options['resources']['db']['params']);

		// profiling db queries with firePHP
		if (APPLICATION_ENV == 'development' and $config->firephp->db) {
			$profiler = new Zend_Db_Profiler_Firebug('All DB Queries');
			$profiler->setEnabled(true);
			$db->setProfiler($profiler);
		}

		//$db->query("SET NAMES 'utf8'");

		if (APPLICATION_ENV == 'production') {
			
			// APC is not accessible in cli
			if (!ISCLI and function_exists('apc_store') and apc_store('test_storage', '1')) {
				$cache = Zend_Cache::factory(
					'Core',
					'Apc',
					array('automatic_serialization' => true)
				);
			} else {
				$cache = Zend_Cache::factory(
					'Core',
					'File',
					array('automatic_serialization' => true),
					array('cache_dir' => APPLICATION_PATH.'/tmp/cache')
				);
			}
			Zend_Db_Table_Abstract::setDefaultMetadataCache($cache);
		}

		Zend_Db_Table::setDefaultAdapter($db);
		Zend_Registry::set('db', $db);
	}

	protected function _initUser()
	{
		if (ISCLI or ISSERVICE) {
			die('no user in cli/api');
		}
		if (!$_COOKIE[session_name()] and !$_GET['_a_l']) {
			// no session => no user (if not autologin)
			return;
		}

		$this->bootstrap('db');
		$auth = Zend_Auth::getInstance();

		// Restore the 'traditional' behavior of beeing logged out if browser is closed.
		if (browser_reopened() and !$_COOKIE['permanent']) {
			$auth->clearIdentity();
		}

		// To provide 'auto login' links
		if ($_GET['_a_l']) {
			$user_m = new Model_UserMapper();
			$user = $user_m->getInstanceByLoginCode($_GET['_a_l']);
			if ($user and $user->status == 'active') {
				$result = new Zend_Auth_Result(Zend_Auth_Result::SUCCESS, $user->id);
				$auth->clearIdentity();
				$auth->getStorage()->write($result->getIdentity());
			}
		}

		if ($auth->hasIdentity()) {
			$user_m = new Model_UserMapper();
			$user = $user_m->getInstanceById($auth->getIdentity());

			Zend_Registry::set('user', $user);

			// Renew auth time at each page if the user is logged in
			$session = new Zend_Session_Namespace('Zend_Auth');
			if ($_COOKIE['permanent']) {
				$session->setExpirationSeconds(COOKIE_MAX_LIFETIME);
			} else {
				$session->setExpirationSeconds(7200);
			}
		}
	}

	protected function _initOrigin()
	{
		// origin is needed because some button images need origin
		// (Form_Elements::_button call on mobile campaign's activation)
//		if (ISCLI or ISSERVICE) {
//			die('no origin in cli/api');
//		}

		// Force tweasy all the time
		$origin_m = new Model_OriginMapper();
		$origin = $origin_m->getInstanceById(1);
		Zend_Registry::set('origin', $origin);

		/*
		$this->bootstrap('user');
		// TEMP hack
		//$this->bootstrap('lang');

		$session = new Zend_Session_Namespace();
		$origin_m = new Model_OriginMapper();

		// 'confidential' parameter
		if ($_GET['_force_origin']) {
			$new_origin = $origin_m->getInstanceByName($_GET['_force_origin']);
		}

		if (Zend_Registry::isRegistered('user')) {
			$user = Zend_Registry::get('user');
			if ($user->origin_id) {
				$origin = $origin_m->getInstanceById($user->origin_id);
				if (!$_COOKIE['origin'] or ($_COOKIE['origin'] and $_COOKIE['origin'] != $origin->name)) {
					// We set the cookie only if an user has created an account on this computer.
					setcookie('origin', $origin->name, time() + COOKIE_MAX_LIFETIME, '/');
				}
			}
		}

		if (!$origin and $_COOKIE['origin']) {
			$origin = $origin_m->getInstanceByName($_COOKIE['origin']);
		}

		if (!$origin and !$new_origin and $_GET['_origin']) {
			$new_origin = $origin_m->getInstanceByName($_GET['_origin']);
		}

		if (!$origin and $session->origin) {
			$origin = $origin_m->getInstanceByName($session->origin);
		}

		if (!$origin) {
			$origin = $origin_m->getInstanceById(2);
			if (!$origin) {
				die('Origin db problem');
			}
		}

		// Write the new origin
		if ($new_origin) {
			//die('new origin');
			$origin = $new_origin;
			$session->origin = $origin->name;
			if (Zend_Registry::isRegistered('user')) {
				$user = Zend_Registry::get('user');
				if ($user->origin_id != $origin->id) {
					$user->origin_id = $origin->id;
					$user->save();
				}
			}
			// Security
			setcookie('origin', '', time() - 3600, '/');
			// Fix when '/' path was not specified.
			setcookie('origin', '', time() - 3600);
			setcookie('origin', '', time() - 3600, '/index');
			setcookie('origin', '', time() - 3600, '/css');
			setcookie('origin', '', time() - 3600, '/login');
			setcookie('origin', '', time() - 3600, '/user');
		}

		Zend_Registry::set('origin', $origin);
		*/
	}

	protected function _initZFDebug()
	{
		if (APPLICATION_ENV == 'development') {
			$this->bootstrap('user');

			if (Zend_Registry::isRegistered('user')) {
				$session = new Zend_Session_Namespace();
				if (strstr($_SERVER['REQUEST_URI'],'/_session_debug/1')) {
					$session->zfdebug = true;
				} elseif (strstr($_SERVER['REQUEST_URI'],'/_session_debug/0')) {
					$session->zfdebug = false;
				}

				if (Zend_Auth::getInstance()->hasIdentity() and
					(strstr($_SERVER['REQUEST_URI'],'/_debug/') or
					$session->zfdebug)
				) {
					$autoloader = Zend_Loader_Autoloader::getInstance();
					$autoloader->registerNamespace('ZFDebug');

					$options = array(
						'plugins' => array(
							'Variables',
							'File' => array('base_path' => realpath(APPLICATION_PATH.'/../')),
							'Memory',
							'Time',
							'Registry',
							'Exception',
							'Html'
						),
						'jquery_noConflict' => true,
					);

					// Instantiate the database adapter and setup the plugin.
					// Alternatively just add the plugin like above and rely on the autodiscovery feature.
					if ($this->hasPluginResource('db')) {
						$this->bootstrap('db');
						//$db = $this->getPluginResource('db')->getDbAdapter();
						//$options['plugins']['Database']['adapter'] = $db;
						// New version that works with both the plugin and my bootstrap
						$options['plugins']['Database']['adapter'] = Zend_Db_Table::getDefaultAdapter();
					}

					// Setup the cache plugin
					if ($this->hasPluginResource('cache')) {
						$this->bootstrap('cache');
						$cache = $this->getPluginResource('cache')->getDbAdapter();
						$options['plugins']['Cache']['backend'] = $cache->getBackend();
					}

					$debug = new ZFDebug_Controller_Plugin_Debug($options);

					$this->bootstrap('frontController');
					$frontController = $this->getResource('frontController');
					$frontController->registerPlugin($debug);
				}
			}
		}
	}

	// Last function to be called by the bootstrap.
	protected function _initZzz()
	{
		if ($_GET['_k_s']) { // kill session
			session_write_close();
		} elseif ($_GET['_d_s']) { // destroy session
			session_destroy();
		}
	}
}

<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Shindig_Admin extends Controller_Template
{
	public $template = 'shindig/template';
	public $user;

	public function __construct(Request $request)
	{
		parent::__construct($request);

		if (!Kohana::config('shindig.use_authentication')) {
			// Redirect to the home page
			$this->request->redirect('');
		}

//		dumper(Cookie::get('authorized'));
		if (Auth::instance()->logged_in()) {

//			$user = Sprig::factory('user', array('username' => $user))->load();
			$user = Auth::instance()->get_user();
			if ($user) {
				// User is logged in
				$this->user = $user;
				Shindig::$has_auth = TRUE;
			}
		}

		if (!$this->user) {
			// Force the user to login
			$this->request->action = 'login';
		}
	}

	public function before()
	{
		parent::before();

		$this->template->title = '';
		$this->template->menu = array();
		$this->template->menu_b = array();
	}

	public function action_list()
	{
		$id = Request::instance()->param('id');
		if (!empty($id)) {

			$post = Sprig::factory('shindig_post')
					->values(array('id' => $id))
					->load();
			$post->delete();
		}


		$this->template->content = Request::factory(
						Route::get('shindig/admin/posts')->uri(array(
							'action' => 'list',
						)))->execute()->response;
	}

	public function action_create()
	{
		$this->template->content = Request::factory(
						Route::get('shindig/admin/posts')->uri(array(
							'action' => 'create',
						)))->execute()->response;
	}

	public function action_update()
	{
		$this->template->content = Request::factory(
						Route::get('shindig/admin/posts')->uri(array(
							'action' => 'update',
							'id' => Request::instance()->param('id'),
						)))->execute()->response;
	}

	public function action_add_user()
	{
		$this->template->title = 'Add User';
		$this->template->content = View::factory('shindig/admin/register')
				->bind('user', $user)
				->bind('errors', $errors);
		$user = ORM::factory('user');
		if ($_POST) {
			$user->values($_POST);
			if (!$user->check()) {
				$this->template->content->errors = $user->errors();
			} else {
				$user->save();
				$roleObj = ORM::factory('role')->where('name', '=', 'login')->find();
				$user->add('roles', $roleObj);
				$this->request->redirect(Route::get('shindig/admin')->uri());
			}
		}
	}

//	$userObj->values($_POST['user']);
//            if (!$userObj->check()) {
//                $view->errors = $userObj->errors();
//                $view->post = $_POST['user'];
//            } else {
//                $userObj->save();
//                $roleObj = ORM::factory('role')->where('name', '=', 'login')->find();
//                $userObj->add('roles', $roleObj);
//
//                //subscrever a newsletter
//               
//                //fazer login
//                Auth::instance()->login($_POST['user']['username'], $_POST['user']['password']);
//                //enviar email com dados
//                $welcome_view = new View('mail/welcome');
//                $welcome_view->userObj = $userObj;
//                $welcome_view->password = $_POST['user']['password'];
//                $welcome_view->urlBase = url::base(false, true);
//
//                $main_template = new View('mail/main_template');
//                $main_template->urlBase = url::base(false, true);
//                $main_template->mail_content = $welcome_view;
//                
//                try {
//                    Email::send('olivictor@gmail.com', array('info@mesfantasmes.net', 'Mesfantasmes'), __("Nouveau User"), $main_template->render(), true);
//                } catch(Exception $e) {
//                    Kohana_Log::instance()->add('error', $e);
//                }
//                
//
//                $this->request->redirect('/user/dashboard');
//            }


	public function action_login()
	{

		$this->template->title = 'Login';
		$this->template->content = View::factory('shindig/admin/login')
				->bind('user', $user)
				->bind('errors', $errors);
		$user = ORM::factory('user');
		//redirect to home page if the user is already logged in
		if (Auth::instance()->logged_in()) {
			$this->request->redirect(Route::get('shindig/admin')->uri());
		}

		if ($_POST) {
			//did the user check the Remember Checkbox?
			$remember = isset($_POST['remember']) ? TRUE : FALSE;
			//Use Auth to login the user
			Auth::instance()->login($_POST['username'], $_POST['password'], $remember);

			if (!Auth::instance()->logged_in()) {
				//just a simple error message if the login failed
				$this->request->response = "Login Failed";
				return;
			} else {
				$user->where('username', '=', array('username' => $_POST['username']))->find();
//					dumper("OK");die;
				Cookie::set('authorized', $user->username);
				$this->request->redirect(Route::get('shindig/admin')->uri());
			}

			//go to the home page if successful
			$this->request->redirect('/');
		}
	}

//	public function action_login()
//	{
//		$this->template->title   = 'Login';
//		$this->template->content = View::factory('shindig/admin/login')
//			->bind('user', $user)
//			->bind('errors', $errors);
//
//		// Load an empty user
//		$user = Sprig::factory('user');
//
////		$post = Validate::factory($_POST)
////			->rules('username', $user->field('username')->rules)
////			->rules('password', $user->field('password')->rules)
////			->callback('username', array($user, '_login'));
////
////		if ($post->check())
////		{
////			$this->request->redirect(Route::get('shindig/admin')->uri());
////		}
////
////		$errors = $post->errors('auth/login');
////		
//		
//		$post = Validate::factory($_POST)
//        ->rules('username', $user->field('username')->rules)
//        ->rules('password', $user->field('password')->rules);
//
//          // Validate the post    
//		if ($post->check())
//		{
//			// Load the user by username and password
//			$user->values($post->as_array())->load();
//
//			if ($user->loaded())
//			{
//				// Store the user id
//				Cookie::set('authorized', $user->id);
//
//				// Redirect to the home page
//			   $this->request->redirect(Route::get('shindig/admin')->uri());
//			}
//			else
//			{
//				$post->error('password', 'invalid');
//			}
//		}
//		$errors = $post->errors('validate');
//		
//		
//	}
//
	public function action_logout()
	{
		$this->template->title = 'logout';
		$this->template->content = View::factory('shindig/admin/logout');

		if (isset($_POST['logout'])) {
			// Delete the user cookie
			Cookie::delete('authorized');

			// Redirect to the home page
			$this->request->redirect('');
		}
	}

	public function after()
	{
		if ($this->auto_render) {
			$this->template->styles = array(
				'shindig/media/css/screen.css' => 'screen',
				'shindig/media/css/style.css' => 'screen',
			);

			$this->template->scripts = array(
				'shindig/media/tinymce/tiny_mce.js',
				'http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js',
			);

			if ($this->request->action == 'create' OR $this->request->action == 'update') {
				array_push($this->template->scripts, 'shindig/media/js/post_edit.js');
			}

			if ($this->user) {
				$this->template->menu = array(
					Route::get('shindig/admin')->uri() => __('List Pages'),
					Route::get('shindig/admin')->uri(array('action' => 'create')) => __('New Page'),
					Route::get('shindig/admin/events')->uri(array('action' => 'list')) => __('List Walks'),
					Route::get('shindig/admin/events')->uri(array('action' => 'add')) => __('New Walks'),
					Route::get('shindig/admin')->uri(array('action' => 'add_user')) => __('New User'),
				);
				$this->template->menu_b = array(
					Route::get('shindig/admin')->uri(array('action' => 'logout')) => __('Logout'),
				);
			}
		}

		parent::after();
	}

	protected function tiny($name, $value = '', $options=NULL)
	{

		$input[] = '<script type="text/javascript">';
		$input[] = 'tinyMCE.init({';

		$input[] = 'mode: "exact",';
		$input[] = 'elements : "'.$name.'",';

		$options = Kohana::config('tinymce');

		foreach ($options as $key => $option) {
			$input[] = $key.' : "'.$option.'",';
		}

		$input[] = '});';
		$input[] = '</script>';

		if (!isset($attr['id'])) {
			$attr['id'] = $name;
		}

		$input[] = Form::textarea($name, $value, $attr);

		return "\n".implode("\n", $input)."\n";
	}

}
<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Shindig_Shindig extends Controller_Template 
{
	public $template = 'shindig/template';
	public $user;

	public function __construct(Request $request)
	{
		parent::__construct($request);
		
		if( ! Kohana::config('shindig.use_authentication') )
		{
			// Redirect to the home page
			$this->request->redirect('');
		}

		if ($user = Cookie::get('authorized'))
		{
			$user = Sprig::factory('user', array('username' => $user))->load();

			if ($user->loaded())
			{
				// User is logged in
				$this->user = $user;
				Shindig::$has_auth = TRUE;
			}
		}

		if (! $this->user)
		{
			// Force the user to login
			$this->request->action = 'login';
		}
	}
	
	public function before()
	{
		parent::before();
		
		$this->template->title = '';
		$this->template->menu = array();
	}
			
	public function action_list()
	{
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
	
	public function action_login()
	{
		$this->template->title   = 'Login';
		$this->template->content = View::factory('shindig/admin/login')
			->bind('user', $user)
			->bind('errors', $errors);

		// Load an empty user
		$user = Sprig::factory('user');

		$post = Validate::factory($_POST)
			->rules('username', $user->field('username')->rules)
			->rules('password', $user->field('password')->rules)
			->callback('username', array($user, '_login'));

		if ($post->check())
		{
			$this->request->redirect(Route::get('shindig/admin')->uri());
		}

		$errors = $post->errors('auth/login');
	}

	public function action_logout()
	{
		$this->template->title = 'logout';
		$this->template->content = View::factory('shindig/admin/logout');

		if (isset($_POST['logout']))
		{
			// Delete the user cookie
			Cookie::delete('authorized');

			// Redirect to the home page
			$this->request->redirect('');
		}
	}
	
	public function after()
	{
		if ($this->auto_render)
		{
			$this->template->styles = array(
				'shindig/media/css/screen.css' => 'screen',
				'shindig/media/css/style.css'  => 'screen',
			);

			$this->template->scripts = array(
				'shindig/media/tinymce/tiny_mce.js',
				'http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js',
			);

			if ($this->user)
			{
				$this->template->menu = array(
					Route::get('shindig/admin')->uri() => __('List Pages'),
					Route::get('shindig/admin')->uri(array('action' => 'create')) => __('New Page'),
				);
			}
		}

		parent::after();
	}
	
	
}
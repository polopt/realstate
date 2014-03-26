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
		$not_remove = array(12,11,10);
		if (!empty($id)) {
			if(!in_array($id, $not_remove)) {
				$post = Sprig::factory('shindig_post')
					->values(array('id' => $id))
					->load();
				$post->delete();
			} else {
				$post = Sprig::factory('shindig_post')
					->values(array('id'=>$id))
					->load();
				$post->values(array('title' => '', 'text' => ''))->update();
//				var_dump($post);die;
			}
		}


		$this->template->content = Request::factory(
						Route::get('shindig/admin/posts')->uri(array(
							'action' => 'list',
						)))->execute()->response;
	}

	
	public function action_users() {
		
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

	public function action_add_user($id=null)
	{
		$this->template->title = 'Novo Utilizador';
		$this->template->content = View::factory('shindig/admin/register')
				->bind('user', $user)
				->bind('errors', $errors);
		
		$user = ORM::factory('user');
		if(!is_null($id)) {
			$user->find($id);
		}
		
		if ($_POST) {
			$user->values($_POST);
//			if (!$user->) {
////				$this->template->content->errors = $user->errors();
//                var_dump("ERROR");die;
//			} else {
				$user->save();
				if(is_null($id)) {
					$roleObj = ORM::factory('role')->where('name', '=', 'login')->find();
					$user->add('roles', $roleObj);
				}
//				dumper($_FILES);die; if(!empty($_FILES['image']['tmp_name'])) {
				if(!empty($_FILES["photo"]['tmp_name']) && $_FILES["photo"]['tmp_name'] != null) {
					$file = $_FILES["photo"];
					$path = upload::save($file, $file['name'], DOCROOT.'datastore/users/', 0777);
					$user->img = $file['name'];
					$user->save();
				}
				
				
				$this->request->redirect(Route::get('shindig/admin')->uri(array('action' => 'list_users')));
			}
//		}
	}

	
	public function action_list_users() {
		$ipp = 15;
        	$n_walks = ORM::factory('user')->count_all();
		
		
		$this->template->content = View::factory('shindig/admin/listUsers')
			->bind('form_title', $pagination)
			->bind('posts', $posts);
			
		
		$id = Request::instance()->param('id');
		if (!empty($id)) {
//			$post = ORM::factory('event')->find($id);
			ORM::factory('user')->delete($id);
		}
		
		$search = ORM::factory('user');
		$posts = $search->find_all();
		
		$this->template->content->pagination = new Pagination(array(
                    'current_page' => array('source' => 'query_string', 'key' => 'page'),
                    'total_items' => $n_walks,
                    'items_per_page' => $ipp,
                    'view' => 'pagination/floating',
                    'auto_hide' => TRUE,
                    'first_page_in_url' => FALSE,
                ));
	}
	
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

	
	public function action_config() {
		
		$this->template->content = View::factory('shindig/admin/configs')
			->bind('form_title', $title)
			->bind('config', $config);
			
		$title = "Configurações gerais";
		$config = ORM::factory("config")->find(1);
		$logo = $config->logo;
		if ($_POST) {
			$config->name = $_POST["entreprise_name"];
			$config->address = $_POST["address"];
			$config->email = $_POST["email"];
			$config->fb = $_POST["fb"];
			$config->emailcontent = $_POST["emailcontent"];
			if(!empty($_FILES["logo"]) && $_FILES["logo"]["name"] != null) {
				$file = $_FILES["logo"];
				$path = upload::save($file, $file['name'], DOCROOT.'datastore/', 0777);
				//dumper($path);die;
				$config->logo = $file['name'];
				//$user->save();
			} else {
				$config->logo = $logo;
			}

			$config->save();
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
					Route::get('shindig/admin')->uri(array('action' => 'config')) => __('Configurações gerais'),
					Route::get('shindig/admin')->uri() => __('Lista de Paginas'),
					Route::get('shindig/admin')->uri(array('action' => 'create')) => __('Nova Pagina'),
//					Route::get('shindig/admin/places')->uri(array('action' => 'list')) => __('Lista de Imoveis'),
//					Route::get('shindig/admin/events')->uri(array('action' => 'add')) => __('Nova Actividade'),
//					Route::get('shindig/admin/photos')->uri(array('action' => 'add')) => __('Nova Foto'),
//					Route::get('shindig/admin/photos')->uri(array('action' => 'list')) => __('Lista de Fotos'),
//					Route::get('shindig/admin')->uri(array('action' => 'add_user')) => __('Novo Utilisador'),
                    Route::get('shindig/admin/services')->uri(array('action' => 'list')) => __('Lista de Serviços'),
//                    Route::get('shindig/admin/services')->uri(array('action' => 'add')) => __('Novo Serviço'),
                    Route::get('shindig/admin')->uri(array('action' => 'list_users')) => __('Lista de Utilizadores'),
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

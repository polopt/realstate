<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Shindig_Public extends Controller_Template 
{
	public $template = 'shindig/template';

	public function before()
	{
		parent::before();
		
		$this->template->title = '';
		$this->template->menu = array();
		$this->template->menu_b = array();
	}
			
	public function action_posts()
	{
		$this->template->content = Request::factory(
			Route::get('shindig/blog')->uri())->execute()->response;
	}
	
	public function action_post()
	{
		$this->template->content = Request::factory(
			Route::get('shindig/blog')->uri(array(
				'action' => 'post',
				'slug' => Request::instance()->param('slug'),
			)))->execute()->response;
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
				'http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js',
			);

			$this->template->menu = array_merge(array(
				'' => __('Blog'),
			), Shindig::page_menu() );

			
			
			$this->template->menu_b = array(
				Route::get('shindig/admin')->uri() => __('Admin'),
			);
		}

		parent::after();
	}
	
	
}
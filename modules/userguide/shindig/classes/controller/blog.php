<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Blog extends Controller_Shindig_Public  
{
	
	public function before()
	{
		if( $this->request->param('slug') AND $this->request->action != 'page' )
		{
			$this->request->action = 'post';
		}
		parent::before();
	}
	
	public function action_posts()
	{
		$this->template->content = Request::factory(
			Route::get('shindig/blog')->uri()
		)->execute()->response;
	}
	
	public function action_post()
	{
		$this->template->content = Request::factory(
			Route::get('shindig/blog')->uri(array(
				'action' => 'post',
				'slug' => $this->request->param('slug'),
			))
		)->execute()->response;
	}
	
	public function action_page()
	{
		$this->template->content = Request::factory(
			Route::get('shindig/blog')->uri(array(
				'action' => 'page',
				'slug' => $this->request->param('slug'),
			))
		)->execute()->response;
	}
}
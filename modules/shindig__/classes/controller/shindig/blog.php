<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Shindig_Blog extends Controller 
{
	public function action_posts()
	{
		$this->request->response = View::factory('shindig/posts')
			->set('use_excerpt', Kohana::config('blog.use_excerpt'))
			->bind('pagination', $pagination)
			->bind('posts', $posts);
			
		$search = Sprig::factory('shindig_post_search');
		$posts = $search->load_blog_posts(NULL, FALSE);	
		$pagination = $search->pagination;
	}
	
	public function action_post()
	{
		$this->request->response = View::factory('shindig/post')
			->bind('post', $post);
			
		$slug = $this->request->param('slug');
			
		$post = Sprig::factory('shindig_post')
			->values(array(
				'slug'=>$slug,
				'type'=>'post',
				'status'=>'publish',
			))
			->load();
			
		if( ! $post->loaded() )
		{
			throw new Shindig_Exception(__('Post ":post" Not Found'), array(':post'=>$slug), 404);
		}
	}
	
	public function action_page()
	{
		$this->request->response = View::factory('shindig/page')
			->bind('page', $page);
			
		$slug = $this->request->param('slug');
			
		$page = Sprig::factory('shindig_post')
			->values(array(
				'slug'=>$slug,
				'type'=>'page',
				'status'=>'publish',
			))
			->load();
			
		if( ! $page->loaded() )
		{
			throw new Shindig_Exception(__('Page ":page" Not Found'), array(':page'=>$slug), 404);
		}
	}
	
	public function action_menu()
	{
		$this->request->response = View::factory('shindig/menu')
				->bind('menu', $menu);
				
		$menu = Sprig::factory('shindig_post')->load_page_menu();		
	}
}
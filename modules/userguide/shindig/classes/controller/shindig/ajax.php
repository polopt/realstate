<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Shindig_Ajax extends Controller
{
	/**
	 * TODO: Add check to enforce ajax request
	 */
	
	public function action_slug()
	{
		$title = (isset($_POST['title'])) ? $_POST['title'] : '' ;
		$slug = url::title($title);
		
		/**
		 * TODO: Add check to ensure unique slug
		 */
		
		$this->request->response = json_encode(array('slug'=>$slug));
	}
}
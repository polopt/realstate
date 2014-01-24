<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Camping extends Controller_Template {

	public function action_show_all()
	{
            $view = new View('places/showAll');
            $companies = ORM::factory('place')->find_all();
            $this->template->header = null;
            $this->template->footer = null;
            $view->companies = $companies;
            $this->template->body = $view;
        }
        
}
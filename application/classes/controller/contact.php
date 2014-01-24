<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contact extends Controller_Frontend {

    public function action_index()
    {
        $view   = new View('contact/contact');
        $this->template->body = $view;
    }
}
<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Search extends Controller_Frontend {

    public function action_index()
    {
//        $this->show_partners = true;
        $view   = new View('list/show');
        $this->template->body = $view;
//        $this->template->body->slider = new View('home/slider');
    }

} // End Welcome

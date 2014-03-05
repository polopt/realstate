<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Frontend {

    public function action_index()
    {
        $this->show_partners = true;
        $view   = new View('home/home');
        $this->template->header = null;
        $this->template->body = $view;
        $this->template->body->slider = new View('home/slider');
    }

} // End Welcome

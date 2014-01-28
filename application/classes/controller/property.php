<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Property extends Controller_Frontend {

    public function action_detail()
    {
//        $this->show_partners = true;
        $view   = new View('property/detail');
        $this->template->body = $view;
//        $this->template->body->slider = new View('home/slider');
    }

} // End Welcome

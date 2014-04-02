<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Property extends Controller_Frontend {

    public function action_detail($id)
    {
//        $this->show_partners = true;

        $house = ORM::factory('house')->find($id);
        $view   = new View('property/detail');
        $view->house = $house;
        $this->template->body = $view;
//        $this->template->body->slider = new View('home/slider');
    }

} // End Welcome

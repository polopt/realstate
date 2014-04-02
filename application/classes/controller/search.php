<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Search extends Controller_Frontend {

    public function action_index()
    {
//        $this->show_partners = true;
//        var_dump($_POST);die;
        $view   = new View('list/show');
        $city = $_POST['city'];
        $zone_id = $_POST['zone_id'];
        $houses = ORM::factory('house')->where("zone_id", "=", $zone_id)->find_all();

        $view->city = $city;
        $view->houses = $houses;
        $this->template->body = $view;
//        $this->template->body->slider = new View('home/slider');
    }

} // End Welcome

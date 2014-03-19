<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Servicos extends Controller_Frontend {

    public function action_index()
    {
        $view   = new View('services/service');
        $this->template->body = $view;
    }
}
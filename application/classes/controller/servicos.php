<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Servicos extends Controller_Frontend {

    public function action_index()
    {
        $this->full_width = true;
        $view   = new View('services/service');
        $this->template->body = $view;
    }
}
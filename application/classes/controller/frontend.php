<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Frontend extends Controller_Website {
    public $template = 'template/template';
    
    
     public function before()
    {
        parent::before();
        $this->template->header = new View('template/header');
        $this->template->footer = new View('template/footer');
    }

    
    
    public function after()
    { 
        if ($this->auto_render)
        {
            $this->template->styles     = null;
            $this->template->scripts    = null;
            $this->template->metas      = null;
        }
        parent::after();
    }
    
    
}
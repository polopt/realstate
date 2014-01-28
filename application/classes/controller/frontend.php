<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Frontend extends Controller_Website
{
    public $template = 'template/template';

    public function before()
    {
        parent::before();

        $main_menu = array();
        $main_menu[] = array('label' => __('Home'), 'url' => '/', 'auth' => null);
        $main_menu[] = array('label' => __('Property Listing'), 'url' => '/listing', 'auth' => NULL,
                        'sub_menu' => array(
                                        array('label' => __('List 2'), 'url' => '/property/detail', 'auth' => null),
                                        array('label' => __('List 3'), 'url' => '/property/detail', 'auth' => null)
                                        )
                        );
        $main_menu[] = array('label' => __('Properties Types'), 'url' => '/listing', 'auth' => NULL);
        $main_menu[] = array('label' => __('Agents'), 'url' => '/agents', 'auth' => 'login');
        $main_menu[] = array('label' => __('Blog'), 'url' => '/blog', 'auth' => NULL);
        $main_menu[] = array('label' => __('Contacts'), 'url' => '/contact', 'auth' => NULL);

        foreach ($main_menu as $key => $menu) {
            if ((!is_null($menu['auth']) && $menu['auth'] != 'logout' && Auth::instance()->logged_in($menu['auth']) === FALSE)
                || ($menu['auth'] == 'logout' && Auth::instance()->logged_in())
            ) {
                unset($main_menu[$key]);
            }
        }
        $this->template->header = new View('template/header');
        $this->template->header->main_menu  = $main_menu;
        $this->template->footer = new View('template/footer');
    }


    public function after()
    {
        if ($this->auto_render) {
            $this->template->styles = null;
            $this->template->scripts = null;
            $this->template->metas = null;
        }
        parent::after();
    }
}
<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Website extends Controller_Template {

    public $template = 'template/template';
// Controls access for the whole controller, if not set to FALSE we will only allow user roles specified
// Can be set to a string or an array, for example 'login' or array('login', 'admin')
// Note that in second(array) example, user must have both 'login' AND 'admin' roles set in database
    public $auth_required = FALSE;
// Controls access for separate actions
// 'adminpanel' => 'admin' will only allow users with the role admin to access action_adminpanel
// 'moderatorpanel' => array('login', 'moderator') will only allow users with the roles login and moderator to access action_moderatorpanel
    public $secure_actions = FALSE;
    public $lang_id;


    public function before()
    {
        parent::before();


//        if (Request::$is_ajax)
//        {
//            $this->auto_render = false;
//        }


//        $action_name = Request::instance()->action;
//        if (($this->auth_required !== FALSE && Auth::instance()->logged_in($this->auth_required) === FALSE) ||
//            (is_array($this->secure_actions) && array_key_exists($action_name, $this->secure_actions) &&
//                Auth::instance()->logged_in($this->secure_actions[$action_name]) === FALSE))
//        {
//
//            if (Auth::instance()->logged_in())
//            {
//                $this->request->redirect('user/accessdenied');
//            }
//            else
//            {
//                $this->request->redirect('user/login');
//            }
//        }


        #Open session
//        $this->session = Session::instance();
//        // Set the language
//        I18n::$lang = 'pt-pt';
//        $this->lang_id = 1;
//
//        if ($this->auto_render)
//        {
//            assets::add_js('/ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js');
//        }
    }

    public function after()
    {
        parent::after();
    }

}

?>

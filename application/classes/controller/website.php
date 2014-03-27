<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Website extends Controller_Template {

    public $template = 'template/template';
    protected  $show_partners = false;
// Controls access for the whole controller, if not set to FALSE we will only allow user roles specified
// Can be set to a string or an array, for example 'login' or array('login', 'admin.old')
// Note that in second(array) example, user must have both 'login' AND 'admin.old' roles set in database
    public $auth_required = FALSE;
// Controls access for separate actions
// 'adminpanel' => 'admin.old' will only allow users with the role admin.old to access action_adminpanel
// 'moderatorpanel' => array('login', 'moderator') will only allow users with the roles login and moderator to access action_moderatorpanel
    public $secure_actions = FALSE;
    public $lang_id;
    public $full_width = true;

    public function before()
    {
//        var_dump("before");
        parent::before();
    }

    public function after()
    {
        if($this->auto_render) {
            if($this->show_partners) {
                $this->template->body->show_partners = $this->show_partners;
                $this->template->body->partners = new View('widgets/partners');
            } else {
                $this->template->body->show_partners = false;
                $this->template->body->partners = null;
            }
            if($this->full_width) {
                $this->template->full_width_css = 'no-full';
            } else {
                $this->template->full_width_css = 'center_page';
            }
        }
//        var_dump("after");die;
	    parent::after();
    }

}

?>

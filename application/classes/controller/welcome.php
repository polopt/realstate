<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Frontend {

    public function action_index()
    {
        //$this->show_partners = true;
        $this->full_width = true;
        $view = new View('home/home');
        $this->template->header = null;
        $this->template->body = $view;
        $this->template->body->slider = new View('home/slider');
    }

    public function action_login() {
        if (!empty($_POST['username'])) {
            $user = ORM::factory('user')->where('username', '=', $_POST['username'])->find();
            if(isset($_POST['password'])) {
                $password = $_POST['password'];//Auth::instance()->hash_password($_POST['user']['newPassword'], '1, 3, 5, 9, 14, 15, 20, 21, 28, 30');
                $user->password  = $password;
                $user->save();
                if (Auth::instance()->login($_POST['username'], $_POST['password'], false)) {
                    $this->request->redirect($this->session->get('requested_url', Auth::instance()->get_user()->dashboard()));
                } else {
                    $this->request->redirect('/');
                }
            }
        }
        $this->auto_render = false;
    }
} // End Welcome

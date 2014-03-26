<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Controller_Error
 *
 * @package    Bazartes
 * @category   Controller
 * @author     Rui Cardoso
 * @copyright  (c) 2011 Bazartes Team
 * @license    http://kohanaframework.org/license
 */
class Controller_Error extends Controller_Template {

    public $template = 'templates/error_template';

    public function before()
    {
        parent::before();

        $this->template->page = (Request::instance()) ? URL::site(rawurldecode(Request::instance()->uri)) : '';
        $this->template->message = "";
        $this->template->code = "";

        //enviar email de erro
//        if (isset($GLOBALS['exception']))
//        {
            $e = $GLOBALS['exception'];
//            $emailView = new View('mail/error');
//            $emailView->type = get_class($e);
//            $emailView->code = $e->getCode();
//            $emailView->message = $e->getMessage();
//            $emailView->file = $e->getFile();
//            $emailView->line = $e->getLine();
//            $emailView->trace = array_reverse($e->getTrace());
//        }
//        else
//        {
//            $emailView = new View('mail/page_not_found');
//            $emailView->type = "Page not found";
//            $emailView->code = 404;
//        }
//
//        $emailView->userObj = (Auth::instance()->logged_in()) ? Auth::instance()->get_user() : null;
//        $emailView->requested_url = Request::instance()->detect_uri();
//
//        $main_template = new View('mail/main_template');
//        $main_template->urlBase = url::base(false, true);
//        $main_template->mail_content = $emailView;
//
//        if (Kohana::$environment == Kohana::PRODUCTION && request::user_agent('robot') === false/*  && $emailView->type != 'ReflectionException' */)
//        {
//            try
//            {
//                Email::send('info@bazartes.com', array('info@bazartes.com', 'Bazartes'), "Error: " . $emailView->type . " - Code:" . $emailView->code, $main_template->render(), true);
//            }
//            catch (Exception $e)
//            {
//                
//            }
//        }
//        else
//        {
            Kohana::exception_handler($e);
//        }
    }

    public function action_404()
    {
        $this->template->code = 404;
        $this->template->message = __('Página não encontrada');
        $this->request->status = 404;
    }

    public function action_503()
    {
        $this->request->status = 503;
        $this->template->code = 503;
        $this->template->message = __('Página não encontrada');
    }

    public function action_500()
    {
        $this->request->status = 500;
        $this->template->code = 500;
        $this->template->message = __('Página não encontrada');
    }

}
<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Shindig_Event extends Controller_Shindig_Admin
{
	
	public function __construct(Request $request)
	{
		parent::__construct($request);
	}
	
	public function before()
	{
		parent::before();
	}
	
	
	public function action_list() {
		$ipp = 15;
        $n_walks = ORM::factory('event')->count_all();
		
		
		$this->template->content = View::factory('shindig/admin/events')
			->bind('form_title', $pagination)
			->bind('posts', $posts);
			
		
		$id = Request::instance()->param('id');
		if (!empty($id)) {
//			$post = ORM::factory('event')->find($id);
			ORM::factory('event')->delete($id);
		}
		
		$search = ORM::factory('event');
		$posts = $search->find_all();
		
		$this->template->content->pagination = new Pagination(array(
                    'current_page' => array('source' => 'query_string', 'key' => 'page'),
                    'total_items' => $n_walks,
                    'items_per_page' => $ipp,
                    'view' => 'pagination/floating',
                    'auto_hide' => TRUE,
                    'first_page_in_url' => FALSE,
                ));
	}
	
	
	public function action_add($id=null) {

		$this->template->content = View::factory('shindig/admin/events_add')
			->set('form_title', __('New Walk'))
			->set('use_authors', Kohana::config('shindig.use_authors'))
			->bind('site_url', $site_url)
			->bind('errors', $errors)
			->bind('user', $event)
			->bind('editor', $editor)
			->bind('msg', $message);

		$event = ORM::factory('event');
		$description = null;
		
		if(!is_null($id)) {
			$event->find($id);
			$description = $event->description;
		}
		
		$site_url = URL::site('page', TRUE).'/';
		$editor = $this->tiny('description', $description);
		$title = 'Add Walk';
		
		
		
		if (!empty($_POST))
        {
            $event->values($_POST);
            if (!$event->check() )
            {
                $message   = $event->validate()->errors();
            }
            else
            {
                $event->save();
                $message  = 'Evento inserido com sucedido';
            }
        }
	}
}
<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Shindig_Services extends Controller_Shindig_Admin
{
	
	public function __construct(Request $request)
	{
		parent::__construct($request);
	}

	
	public function action_add()
	{
		$this->template->content = View::factory('shindig/admin/services/add')
				->bind('service', $service)
				->bind('msg', $msg)
                ->bind('editor', $editor)
                ->bind('editor_topics', $editor_topics)
				->bind('msg_error', $msg_error);
        $content = null;
        $editor = $this->tiny('description', $content);
        $editor_topics = $this->tiny('topics', $content);
		$msg = "";
		$msg_error = "";
		if($_POST) {
//			$service_id = $_POST['service_id'];
			$service = ORM::factory('service');
            $service->values($_POST);
            if(!$service->check()) {
                var_dump("Error");die;
            }
            $service->save();
            if ($_FILES) {
//                var_dump($_FILES);die;
                if(!empty($_FILES['img']['tmp_name'])) {
                    $file = $_FILES["img"];
                    $path = upload::save($file, $file['name'], DOCROOT.'datastore/services/', 0777);
                    $service->img = $file['name'];
                    $service->save();
                }
            }
			$this->request->redirect("/shindig/admin/services/list");
		}
	}

	public function action_list($id=NULL, $action=NULL) {
		$ipp = 15;
        $n_services = ORM::factory('service')->count_all();
		$this->template->content = View::factory('shindig/admin/services/list')
            ->bind('form_title', $pagination)
			->bind('services', $services);

        if(!is_null($id)) {
            $service = ORM::factory('service')->find($id);
            $service->delete();
        }
		$services = ORM::factory('service')->find_all();
		$this->template->content->pagination = new Pagination(array(
                    'current_page' => array('source' => 'query_string', 'key' => 'page'),
	                'total_items' => $n_services,
                    'items_per_page' => $ipp,
                    'view' => 'pagination/floating',
                    'auto_hide' => TRUE,
                    'first_page_in_url' => FALSE,
                ));
	}

    public function action_delete($id=NULL) {
        if(!is_null($id)) {
            $service = ORM::factory('service')->find($id);
            $service->delete();
        }
        $this->request->redirect("/shindig/admin/services/list");
    }
	
}

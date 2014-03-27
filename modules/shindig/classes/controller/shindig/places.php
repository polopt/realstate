<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Shindig_Places extends Controller_Shindig_Admin
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
        $n_walks = ORM::factory('house')->count_all();
		$this->template->content = View::factory('shindig/admin/places/list')
			->bind('form_title', $pagination)
			->bind('places', $places);

		$places = ORM::factory('house')->find_all();
		$this->template->content->pagination = new Pagination(array(
                    'current_page' => array('source' => 'query_string', 'key' => 'page'),
                    'total_items' => $n_walks,
                    'items_per_page' => $ipp,
                    'view' => 'pagination/floating',
                    'auto_hide' => TRUE,
                    'first_page_in_url' => FALSE,
                ));
	}
	
	public function action_delete($id=null) {
		if(!is_null($id)) {
			$event = ORM::factory('house');
			$event->find($id);
			$event->delete();
			/*$images = ORM::factory("photo")->where("event_id", "=", $id)->find_all();

			foreach($images as $image) {
				$image->delete();
				
			}*/
		}
		$this->request->redirect("/shindig/admin/places/list");
	}

	public function action_add($id=null) {

		$view = View::factory('shindig/admin/places/add')
			->set('form_title', __('Novo Imovel'))
			->set('use_authors', Kohana::config('shindig.use_authors'))
			->bind('site_url', $site_url)
			->bind('errors', $errors)
			->bind('house', $house)
			->bind('categories', $categories)
			->bind('editor', $editor)
            ->bind('services', $services);
		$msg = "";
		$house = ORM::factory('house');
		$description = null;
		$image = null;
        $services =  ORM::factory('service')->find_all();
		$categories = ORM::factory('category')->find_all();

		if(!is_null($id)) {
			$house->find($id);
			$description = $house->description;
//			$image = ORM::factory("photo")->where("event_id", "=", $id)->where("is_background", "=", true)->find();
		}

		$site_url = URL::site('page', TRUE).'/';
		$editor = $this->tiny('description', $description);
		if (!empty($_POST))
        {
            $house->values($_POST);
            if (!$house->check() ) {
                $msg = $house->validate()->errors();
            } else {
                $house->save();
//                if(!is_null($_POST['services'])) {
                    foreach ($_POST['services'] as $selectedOption) {
                        $servicesIds = $_POST['services'];
                        $house->add('services', ORM::factory('service')->find($selectedOption));
//                        var_dump($_POST['services']);die;
                    }
//                }
				if (isset($_FILES["image"]) and !is_null($_FILES["image"])) {
					if(!empty($_FILES['image']['tmp_name'])) {
						$file = $_FILES['image']['tmp_name'];
						$image = ORM::factory('photo');
						if($image->save_image_form($_FILES['image'], $house->id, 1)) {
							/*if(isset($_POST["description"]) and !is_null($_POST["description$i"])) {
								if($_POST["description$i"] != "Insira descrição aqui ...")
								$image->description = $_POST["description$i"];
							}*/
							$image->is_background = 1;
							$image->save();
							$msg .= "Imagem guardada <br />";
						} else {
							//var_dump($error);die;
							//$msg_error .= "Image $i saved <br />";
						}
					}
				}
                $msg  .= 'Evento inserido com sucedido';
				$this->request->redirect("/shindig/admin/places/list");
            }
			//$msg  .= 'Evento inserido com sucedido';
        }
		$view->msg = $msg;
		$this->template->content = $view;
	}
}

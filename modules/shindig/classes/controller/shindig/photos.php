<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Shindig_Photos extends Controller_Shindig_Admin
{
	
	public function __construct(Request $request)
	{
		parent::__construct($request);
	}

	
	public function action_add()
	{
		$this->template->content = View::factory('shindig/admin/photos/add')
				->bind('houses', $houses)
				->bind('msg', $msg)
				->bind('msg_error', $msg_error);
		$msg = "";
		$msg_error = "";
		$houses = ORM::factory('house')->find_all();
		if($_POST) {
			$campaign_id = $_POST['campaing_id'];
			if ($_FILES) {
//				dumper($_FILES);die;
				for($i=1; $i<6;$i++) {
					if(!empty($_FILES['file'.$i]['tmp_name'])) {
						$file = $_FILES['file'.$i]['tmp_name'];
						$image = ORM::factory('photo');
						if($image->save_image_form($_FILES['file'.$i], $campaign_id)) {
							if(isset($_POST["description$i"]) and !is_null($_POST["description$i"])) {
								if($_POST["description$i"] != "Insira descrição aqui ...")
								$image->description = $_POST["description$i"];	
							}		
							$msg .= "Image $i saved <br />";
						} else {
							$msg_error .= "Image $i saved <br />";
						}
					}
				}
			}
		}
	}

	public function action_list() {
		$ipp = 15;
        	$n_photos = ORM::factory('photo')->count_all();
		
		
		$this->template->content = View::factory('shindig/admin/photos/list')
			->bind('form_title', $pagination)
			->bind('events', $events)
			->bind('event', $event)
			->bind('name', $event_name)
			->bind('photos', $photos);
				
		$event_name = "";
		$id = Request::instance()->param('id');
		if (!empty($id)) {
			$photo = ORM::factory('photo')->find($id);
			$photo->deleteImg($photo->name);
		}
		
		if(isset($_POST["actividade"]) && $_POST["actividade"] != 0) {
			$photos = ORM::factory('photo')->where("is_background", "=", 0)->where("event_id", "=", $_POST["actividade"])->find_all();
			$event = $_POST["actividade"];
			$event_name = ORM::factory('event')->find($_POST["actividade"])->name;
		} else {
			$photos = ORM::factory('photo')->where("is_background", "=", 0)->find_all();
		}
		$month = date('d-m-Y');
		$events = ORM::factory('event')->find_all();
		
		$this->template->content->pagination = new Pagination(array(
                    'current_page' => array('source' => 'query_string', 'key' => 'page'),
                    'total_items' => $n_photos,
                    'items_per_page' => $ipp,
                    'view' => 'pagination/floating',
                    'auto_hide' => TRUE,
                    'first_page_in_url' => FALSE,
                ));
	}
	
}

<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Frontend {

    public function action_index()
    {
        $view   = new View('home/home');
        $this->template->body = $view;
    }


	public function action_index2()
	{
            $view   = new View('admin/newCamping');
            if(!empty($_POST)) {
                $place              = ORM::factory('place');
                $place->name        = $_POST['name'];
                $place->company_id  = $_POST['empresa'];
                $place->address     = $_POST['morada'];
                $place->geoloc      = $_POST['geoloc'];
                $place->description = $_POST['description'];
                $place->price       = $_POST['preco'];
//                $price->email       = $_POST['email'];
                $price->telephone   = $_POST['tel'];


                $place->save();
                if(isset($_FILES) && !empty($_FILES))
                {
                    for($i=0; $i<9; $i++) {
                         if(isset($_FILES['foto'.$i]['name']) && !empty($_FILES['foto'.$i]['name'])) {
                            $file   = $_FILES['foto'.$i]['tmp_name'];
                            if(!file_exists(DOCROOT.'datastore/camping/'.$place->id.'/')) {
                                mkdir(DOCROOT.'datastore/camping/'.$place->id.'/');
                            }
                            $path = upload::save($_FILES['foto'.$i], $_FILES['foto'.$i]['name'], DOCROOT.'datastore/camping/'.$place->id.'/', 0750);
                        }
                    }
                }
                $view->msg = "Gravado !!!";
            }
            $companies = ORM::factory('company')->find_all();


            $this->template->header = null;
            $this->template->footer = null;
            $view->companies = $companies;
            $this->template->body = $view;
	}
        
        
        
        
        public function action_addCompany() {
            
            $company = ORM::factory('company');
            
            if(!empty($_POST)) {
                if($company->check()) {
                    $company->name = $_POST['name'];
                    $company->save();
                    $this->request->redirect('/');
                }
            }
            
            $this->template->header = null;
            $this->template->footer = null;
            $this->template->body   = new View('admin/addCompany');
        }
        
        
        public function action_showAll() {
            $view       = new View('admin/showAll');
            $places     = ORM::factory('place')->find_all();
            $this->template->header = null;
            $this->template->footer = null;
            $view->companies = $companies;
            $this->template->body = $view;

        }
        
        
        public function action_edit($id) {
            $view   = new View('admin/newCamping');
            $places = ORM::factory('place')->find_all();
            if(!empty($_POST)) {
                $place              = ORM::factory('place')->find($id);
                $place->name        = $_POST['name'];
                $place->company_id  = $_POST['empresa'];
                $place->address     = $_POST['morada'];
                $place->geoloc      = $_POST['geoloc'];
                $place->description = $_POST['description'];
                $place->price       = $_POST['preco'];
                $price->email       = $_POST['email'];
                $price->telephone   = $_POST['tel'];
                
                
                $place->save();
//                if(isset($_FILES) && !empty($_FILES))
//                {
//                    for($i=0; $i<9; $i++) { 
//                         if(isset($_FILES['foto'.$i]['name']) && !empty($_FILES['foto'.$i]['name'])) {
//                            $file   = $_FILES['foto'.$i]['tmp_name'];
//                            if(!file_exists(DOCROOT.'datastore/camping/'.$place->id.'/')) {
//                                mkdir(DOCROOT.'datastore/camping/'.$place->id.'/');
//                            }
//                            $path = upload::save($_FILES['foto'.$i], $_FILES['foto'.$i]['name'], DOCROOT.'datastore/camping/'.$place->id.'/', 0750);
//                        }
//                    }
//                }
                $view->msg = "Gravado !!!";
            }
            $companies = ORM::factory('company')->find_all();
            
            
            $this->template->header = null;
            $this->template->footer = null;
            $view->places = $places;    
            $view->companies = $companies;
            $this->template->body = $view;

        }

} // End Welcome

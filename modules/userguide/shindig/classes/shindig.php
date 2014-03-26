<?php defined('SYSPATH') or die('No direct script access.');

class Shindig
{
	public static $has_auth = FALSE;
	public static $authors = array();
	public static $author = '';
	
	
	public static function load_authors()
	{
//		$authors = Sprig::factory('user')->load(NULL, FALSE);
		
		$authors = ORM::factory('user')->find_all();
		
		foreach( $authors as $i=>$a)
		{
			shindig::$authors[$a->id] = $a->username;
		}
		
	}
	
	public static function page_menu()
	{
		return Sprig::factory('shindig_post')->load_page_menu();
	}
	
//	public static load_menu() {
//		$main_menu = array();
//		$main_menu[] = array('label' => __('Home'), 'key' => 1, 'url' => '/', 'classlink' => '','auth' => NULL);
//		$main_menu[] = array('label' => __('Próximas Caminhadas'), 'key' => 2, 'url' => '/caminhadas/proximas', 'classlink' => 'two_rows', 'auth' => NULL);
//		$main_menu[] = array('label' => __('Caminhadas Realizadas'), 'key' => 3, 'url' => '/caminhadas/feitas', 'classlink' => 'two_rows', 'auth' =>  NULL);
//		$main_menu[] = array('label' => __('Galeria'), 'key' => 4,  'url' => '/galeria', 'classlink' => '', 'auth' =>  NULL);
//		$main_menu[] = array('label' => __('Ranking'), 'key' => 5,  'url' => '/ranking', 'classlink' => '', 'auth' => NULL);
//		$main_menu[] = array('label' => __('Sugestões'), 'key' => 6,  'url' => '/sugestoes', 'classlink' => '', 'auth' => NULL);
//		return 
//	}
	
}
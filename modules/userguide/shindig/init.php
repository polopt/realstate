<?php defined('SYSPATH') or die('No direct script access.');

Route::set('shindig/blog', 'shindig/blog(/<action>(/<slug>))')
	->defaults(array(
		'directory'  => 'shindig',
		'controller' => 'blog',
		'action'     => 'posts',
	));

Route::set('shindig/admin/posts', 'shindig/admin/posts((/<id>)/<action>)', array('id' => '\d+'))
	->defaults(array(
		'directory'  => 'shindig',
		'controller' => 'post',
		'action'     => 'list',
	));

Route::set('shindig/admin', 'shindig/admin((/<id>)/<action>)', array('id' => '\d+'))	
	->defaults(array(
		'directory'  => 'shindig',
		'controller' => 'admin',
		'action'     => 'list',
	));

Route::set('shindig/admin/events', 'shindig/admin/events((/<id>)/<action>)', array('id' => '\d+'))	
	->defaults(array(
		'directory'  => 'shindig',
		'controller' => 'event',
		'action'     => 'list',
	));

Route::set('shindig/users', 'shindig/users((/<id>)/<action>)', array('id' => '\d+'))	
	->defaults(array(
		'directory'  => 'shindig',
		'controller' => 'users',
//		'action'     => 'list',
	));

Route::set('shindig/media', 'shindig/media(/<file>)', array('file'=>'.*?'))
	->defaults(array(
		'directory' => 'shindig',
		'controller' => 'media',
		'action'	=> 'get', 		
	));	

Route::set('page/menu', 'page/menu')
	->defaults(array(
		'directory' => 'shindig',
		'controller' => 'blog',
		'action'     => 'menu',
	));
	
Route::set('public/blog', 'blog(/<slug>)')
	->defaults(array(
		'controller' => 'blog',
		'action'     => 'posts',
	));

	
Route::set('shindig/ajax', 'shindig/ajax/<action>(/<id>)')
	->defaults(array(
		'directory' => 'shindig',
		'controller' => 'ajax',
	));
	
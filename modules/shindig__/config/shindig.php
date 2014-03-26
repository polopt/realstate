<?php defined('SYSPATH') or die('No direct script access.');

return array(
	'use_authors' => TRUE, 
	'use_authentication' => TRUE,
	'admin_posts_per_page' => 20,
	'categories' => array(
		'uncategorized' => 'Uncategorized',
		'news' => 'News',
		'articles' => 'Articles',
	),
	'post' => array(
		'type' => array(
//			'post' => 'Walk',
			'page' => 'Page',
		),
	),
	'sidebars' => array(
		'default' => 'Default',
	),
	'time' => array(
		'format' => 'M d, Y',
	),
	'post_create_redirect' => array(
			'route' => 'shindig/admin',
			'action' => 'update',
	),
);
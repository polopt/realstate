<?php defined('SYSPATH') or die('No direct script access.');

class Model_Shindig_Post extends Sprig {

	protected $_title_key = 'title';
	protected $_table = 'posts';

	public function __get($field)
	{
		if ($field === 'post_excerpt')
		{
			if( ! parent::__get('post_excerpt') )
			{
				return Text::limit_words( parent::__get('post_content'), 50, ' ...');
			}
		}
		if($field === 'link')
		{
			return Route::get('public/blog')->uri(array('slug'=>$this->slug));
		}

		return parent::__get($field);
	}

	public function load_page_menu()
	{
		$query = DB::select()->order_by('id', 'DESC')
			->order_by('created_on', 'DESC')
			->where('type','=','page')
			->and_where('status','=','publish');

		$pages = $this->load($query, FALSE);

		$menu = array();

		foreach($pages as $i=>$page)
		{
			$menu[URL::site('page/'.$page->slug, TRUE)] = $page->title;
		}

		return $menu;
	}

	protected function _init()
	{
		$this->_fields += array(
			'id' => new Sprig_Field_Auto,
			'title' => new Sprig_Field_Char(array(
				'label' => __('Post Title'),
			)),
			'slug' => new Sprig_Field_Char(array(
				'label' => __('Slug'),
				'unique' => TRUE,
				'rules' => array(
					'regex' => array('/^[a-zA-Z_-]+$/D'),
				),
			)),
			'status' => new Sprig_Field_Enum(array(
				'label' => __('Post Status'),
				'choices' => array(
					'draft'   => 'Draft',
					'review'  => 'Review',
					'publish' => 'Publish',
					'archive' => 'Archive',
				),
				'default' => 'publish',
			)),
			'type' => new Sprig_Field_Char(array(
				'label' => __('Post Type'),
				'choices' => Kohana::config('shindig.post.type'),
				'default' => 'publish',
			)),
			'post_content' => new Sprig_Field_Tinymce(array(
				'label' => __('Post Content'),
				'empty' => TRUE,
			)),
            'topics' => new Sprig_Field_Tinymce(array(
                    'label' => __('Topicos'),
                    'empty' => TRUE,
                )),
			'post_excerpt' => new Sprig_Field_Tinymce(array(
				'label' => __('Excerpt'),
				'empty' => TRUE,
			)),
			'author' => new Sprig_Field_Char(array(
				'label' => __('Author'),
				'choices' => Shindig::$authors,
				'default' => Shindig::$author,
			)),
			'created_on' => new Sprig_Field_Timestamp(array(
				'label'           => __('Created On'),
				'format'          => Kohana::config('shindig.time.format'),
				'auto_now_create' => TRUE,
			)),
			'updated_on' => new Sprig_Field_Timestamp(array(
				'label'           => __('Updated On'),
				'format'          => Kohana::config('shindig.time.format'),
				'auto_now_update' => TRUE,
				'empty'           => TRUE,
			)),
			'tags' => new Sprig_Field_ManyToMany(array(
				'label' => __('Tags'),
				'model' => 'Shindig_Tag',
				'empty' => TRUE,
			)),
		);
	}

} // End Model_Shindig_Post

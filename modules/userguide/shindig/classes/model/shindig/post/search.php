<?php defined('SYSPATH') or die('No direct script access.');

class Model_Shindig_Post_Search extends Sprig {

	public $pagination;

	public function load(Database_Query_Builder_Select $query = NULL, $limit = NULL)
	{
		if ( ! $query)
		{
			$query = DB::select()->order_by('id', 'DESC')->order_by('created_on', 'DESC');
		}
		return Sprig::factory('Shindig_Post')->load($query, $limit);
	}

	public function load_blog_posts()
	{
		$query = DB::select()->where('status','=','publish')
			->where('type','=','post')
			->order_by('id', 'DESC')
			->order_by('created_on', 'DESC');
		$limit = $this->limit;

		$this->total_items = DB::select(DB::expr('COUNT(*) AS mycount'))->from('posts')
			->where('status','=','publish')
			->where('type','=','post')
			->execute()->get('mycount');

		$this->pagination->setup(array(
  			'total_items'    => $this->total_items,
  			'items_per_page' => $limit,
  		));
  		$query->offset($this->pagination->offset);

		return $this->load($query, $limit);
	}

	public function load_all_posts()
	{
		$query = DB::select()->order_by('id', 'DESC')
			->order_by('created_on', 'DESC');
		$limit = Kohana::config('shindig.admin_posts_per_page');

		$this->total_items = DB::select(DB::expr('COUNT(*) AS mycount'))->from('posts')
			->execute()->get('mycount');

		$this->pagination->setup(array(
  			'total_items'    => $this->total_items,
  			'items_per_page' => $limit,
  		));
  		$query->offset($this->pagination->offset);

		return $this->load($query, $limit);
	}

	protected function _init()
	{
		$this->_fields += array(
			'query' => new Sprig_Field_Char(array(
				'in_db' => FALSE,
			)),
			'p' => new Sprig_Field_Integer(array(
				'in_db' => FALSE,
				'default' => 1,
			)),
			'limit' => new Sprig_Field_Integer(array(
				'in_db' => FALSE,
				'default' => Kohana::config('blog.posts_per_page'),
			)),
			'total_items' => new Sprig_Field_Integer(array(
				'in_db' => FALSE,
			)),
		);

		$this->pagination = Pagination::factory();
	}

} // End Model_Shindig_Post_Search

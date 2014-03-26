<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Event Model
 *
 * @package    Kohana/Auth
 * @author     Kohana Team
 * @copyright  (c) 2007-2010 Kohana Team
 * @license    http://kohanaframework.org/license
 */
class Model_Event extends ORM 
{

	 protected $_has_many = array(
        'photos'		=> array('model' => 'photo'), //Auth module
		'subscriptions' => array('model' => 'subscription')
    );
	
	 protected $_belongs_to = array(
        'category' => array('model' => 'category'),
		
    );
	 
    protected $_rules = array(
            'name' => array(
            'not_empty' => NULL,
            'min_length' => array(3),
            'max_length' => array(250),
        ),
            'date' => array(
            'not_empty' => NULL,
        ),
		   'degree' => array(
            'not_empty' => NULL,
        ),
            'description' => array(
            'not_empty'  => NULL,
        ),
        
    );
	
	
	public function next_event() {
		return $this->where('events.date', '>=',  DB::expr('DATE(NOW())'))->limit(1)->find();
	}
}
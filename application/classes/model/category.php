<?php

class Model_Category extends ORM {

	protected $_has_many = array(
        'events'		=> array('model' => 'event'),
    );
	
}
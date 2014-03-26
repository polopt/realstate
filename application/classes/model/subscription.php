<?php

class Model_Subscription extends ORM {

	protected $_belongs_to = array(
        'event'		=> array('model' => 'event'),
    );
	
}
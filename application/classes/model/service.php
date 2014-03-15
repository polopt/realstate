<?php

class Model_Company extends ORM {

    protected $_has_many = array(
        'places' => array('model' => 'place')
    );
    
    protected $_rules = array(
            'name' => array(
            'not_empty' => NULL,
            'min_length' => array(2),
            'max_length' => array(50),
        ),
    );
}

?>
<?php

class Model_Service extends ORM {

    protected $_belongs_to = array(
        'house' => array('model' => 'house'),
    );
//    protected $_rules = array(
//            'name' => array(
//            'not_empty' => NULL,
//            'min_length' => array(2),
//            'max_length' => array(50),
//        ),
//    );
}

?>

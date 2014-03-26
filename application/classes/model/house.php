<?php

class Model_House extends ORM {

    /*protected $_belongs_to = array(
        'company' => array('model' => 'company'),
    );

    protected $_has_many = array(
        'company' => array('model' => 'company'),
    );

    protected $_rules = array(
        'Upload::valid'
    );*/

    protected $_has_many = array(
        'services' => array('model' => 'service')
    );	
}

?>

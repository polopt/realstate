<?php

class Model_Place extends ORM {

    protected $_belongs_to = array(
        'company' => array('model' => 'company'),
    );

    protected $_has_many = array(
        'company' => array('model' => 'company'),
    );

    protected $_rules = array(
        'Upload::valid'
    );
}

?>
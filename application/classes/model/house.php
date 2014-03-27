<?php

class Model_House extends ORM {

    protected $_has_many = array(
        'services'  => array('model' => 'services', 'through' => 'house_service'),
    );
}

?>

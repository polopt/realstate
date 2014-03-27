<?php

class Model_Service extends ORM {
    protected $_has_many = array(
        'houses' => array('model' => 'houses', 'through' => 'house_service'),
    );
}

?>

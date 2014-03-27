<?php

class Model_house_service extends ORM {

    protected $_belongs_to = array(
        'house'   => array('model' => 'house'),
        'service' => array('model' => 'service'),
    );

}

?>
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
    
//    protected $_rules = array(
//        'question' => array(
//            'not_empty' => NULL,
//            'min_length' => array(4),
//            'max_length' => array(250),
//        ),
//        'answer' => array(
//            'not_empty' => NULL,
//            'min_length' => array(4),
//            'max_length' => array(2500),
//        )
//    );
//
//    function check()
//    {
//        foreach (array_keys($this->_rules) as $field_name)
//        {
//            $this->_labels[$field_name] = __($field_name);
//        }
//
//        return parent::check();
//    }

}

?>
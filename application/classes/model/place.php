<?php

class Model_Place extends ORM {

    protected $_belongs_to = array(
        'company' => array('model' => 'company'),
    );
    
    
    protected $_rules = array(
        'Upload::valid'
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
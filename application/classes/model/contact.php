<?php

class Model_Contact extends ORM {

    protected $_belongs_to = array(
        'user' => array('model' => 'user')
    );
    protected $_filters = array(
        TRUE => array(
            'trim' => NULL
        )
    );
    protected $_rules = array(
        'email' => array(
            'not_empty' => NULL,
            'min_length' => array(4),
            'max_length' => array(100),
            'email' => NULL,
        ),
        'name' => array(
            'not_empty' => NULL,
            'min_length' => array(3),
            'max_length' => array(100),
        ),
        'subject' => array(
            'not_empty' => NULL,
            'min_length' => array(3),
            'max_length' => array(100),
        ),
        'message' => array(
            'not_empty' => NULL,
            'min_length' => array(3),
        )
    );
    protected $_labels = array();

    public static function unique_email($email)
    {
        return!DB::select(array(DB::expr('COUNT(email)'), 'total'))
                ->from('subscribers')
                ->where('email', '=', $email)
                ->execute()
                ->get('total');
    }

    public function errors($file = 'validation', $translate = TRUE)
    {
        return $this->_validate->errors($file, $translate);
    }

//    function check()
//    {
//        foreach (array_keys($this->_rules) as $field_name)
//        {
//            $this->_labels[$field_name] = __($field_name);
//        }
//
////        $check = parent::check();
////        if ($check)
////        {
////            $this->created = DB::expr('now()');
////        }
//        return $check;
//    }

}

?>

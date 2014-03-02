<?php

class Model_User extends Model_Auth_User {

    protected $_has_many = array(
        'user_tokens'	=> array('model' => 'user_token'), //Auth module
        'roles'		=> array('model' => 'role', 'through' => 'roles_users'), //Auth module
        'images'        => array('model' => 'image', 'through' => 'images_users'),
		'rooms'        => array('model' => 'room', 'through' => 'users_rooms'),
        'visits'	=> array('model' => 'visit'),
		'articles'	=> array('model' => 'article'),
    );

    protected $_ignored_columns = array('payments', 'password_conf', 'is_vendor');
    protected $_filters = array(
	TRUE => array(
	    'trim' => NULL	    //retirada este filtro devido ao campo payments ser array e dar fatal error ao validar
	),
        'username' => array(
            'strtolower' => NULL,
            'trim' => NULL
        ),
        'email' => array(
            'strtolower' => NULL,
            'trim' => NULL
        ),
        'name' => array(
            'ucfirst' => NULL,
            'trim' => NULL
        ),
//        'lastname' => array(
//            'ucfirst' => NULL,
//            'trim' => NULL
//        ),
        'password' => array('trim' => NULL),
//        'shop_description' => array('trim' => NULL),
    );
    protected $_rules = array(
            'username' => array(
            'not_empty' => NULL,
            'min_length' => array(4),
            'max_length' => array(30),
            'Model_User::unique_username' => NULL,
            'Model_User::regex_username' => NULL
        ),
        'firstname' => array(
            'not_empty' => NULL,
            'min_length' => array(3),
            'max_length' => array(50),
        ),
        'lastname' => array(
            'not_empty' => NULL,
            'min_length' => array(3),
            'max_length' => array(50),
        ),
        'email' => array(
            'not_empty' => NULL,
            'min_length' => array(4),
            'max_length' => array(100),
            'email' => NULL,
            'Model_User::unique_email' => NULL
        ),
        'password' => array(
            'not_empty' => NULL,
            'min_length' => array(6),
        ),
        'password_conf' => array(
            'matches' => array('password'),
        ),
        'birth_day' => array(
            'digit' => NULL,
            'min_length' => array(1),
            'max_length' => array(2),
            'range' => array(1, 31)
        ),
        'birth_month' => array(
            'digit' => NULL,
            'min_length' => array(1),
            'max_length' => array(2),
             'range' => array(1, 12)
        ),
        'birth_year' => array(
            'digit' => NULL,
            'exact_length' => array(4),
            'range' => array(1910, 2011)
        ),
        'sexe' => array(
            'digit' => NULL,
            'exact_length' => array(2),
            'range' => array(0, 1)
        ),
	  'exitme' => array(
            'digit' => NULL,
            'min_length' => array(2),
        ),
    );
    protected $_labels = array();
    protected $_post_values = array();




    function check()
    {
        foreach (array_keys($this->_rules) as $field_name)
        {
            $this->_labels[$field_name] = __($field_name);
        }

        if ($this->id > 0)
        {
            unset($this->_rules['password']);
            unset($this->_rules['password_conf']);
            unset($this->_rules['email']);
            unset($this->_rules['username']);
        }
        $check = parent::check();
        if ($check && $this->id == 0)
        {
            $this->username = url::title($this->username);
            $this->created = strtotime("now");
        }
        return $check;
    }

    public function values($values)
    {
        $this->_post_values = $values;
        return parent::values($values);
    }

    public static function regex_username($username)
    {
        return (bool) preg_match('/^[a-z\d_]{4,30}$/i', $username);
    }

    public static function unique_username($username)
    {
        return!DB::select(array(DB::expr('COUNT(username)'), 'total'))
                ->from('users')
                ->where('username', '=', $username)
                ->execute()
                ->get('total');
    }

    public static function unique_email($email)
    {
        return!DB::select(array(DB::expr('COUNT(email)'), 'total'))
                ->from('users')
                ->where('email', '=', $email)
                ->execute()
                ->get('total');
    }

    public static function email_exists($email)
    {
        return DB::select(array(DB::expr('COUNT(email)'), 'total'))
                ->from('users')
                ->where('email', '=', $email)
                ->execute()
                ->get('total');
    }

    public static function check_old_password($old_password)
    {
        return Auth::instance()->check_password($old_password);
    }

    public static function check_new_password($new_password)
    {
        return!Auth::instance()->check_password($new_password);
    }

    public function errors($file = 'validation', $translate = TRUE)
    {
        return $this->_validate->errors($file, $translate);
    }

    public function slug()
    {
        if (!$this->has('roles', ORM::factory('role', array('name' => 'vendor'))))
        {
            return '/user/detail/' . $this->id;
        }

        $slugObj = ORM::factory('slug')->where('user_id', '=', $this->id)->find();
        if ($slugObj->loaded())
        {
            return "/" . $slugObj->url;
        }
        return "/" . $slugObj->create_vendor_slug($this->id, $this->username)->url;
    }

    public function fullslug()
    {
        return substr(url::base(false, true), 0, -1) . $this->slug();
    }

    public function dashboard()
    {
        return '/user/dashboard';
    }

    public function full_dashboard()
    {
        return substr(url::base(false, true), 0, -1) . $this->dashboard();
    }

    public function wall_visits()
    {
        return DB::select(array(DB::expr('COUNT(wall)'), 'total'))
                ->from('visits')
                ->where('user_id', '=', $this->id)
                ->execute()
                ->get('total');
    }

    public function is_favourite()
    {
        if (!Auth::instance()->logged_in())
        {
            return false;
        }

        return ORM::factory('favourite_artist')->is_favourite(Auth::instance()->get_user()->id, $this->id);
    }

    public function billing_address()
    {
        if ($this->use_shipping_for_billing)
        {
            return ORM::factory('address')
                    ->where('user_id', '=', $this->id)
                    ->where('billing', '=', 1)
                    ->find();
        }
        return $this->shipping_address();
    }

    public function shipping_address()
    {
        return ORM::factory('address')
                ->where('user_id', '=', $this->id)
                ->where('billing', '=', 0)
                ->find();
    }

    public function is($role_name)
    {
        return $this->has('roles', ORM::factory('role', array('name' => $role_name)));
    }

    public function is_vendor()
    {
        return $this->is('vendor');
    }

    public function is_admin()
    {
        return $this->is('admin');
    }

    public function role_name()
    {
        $vendorObj = ORM::factory('role')->where('name', '=', 'vendor')->find();
        if ($this->has('roles', $vendorObj))
        {
            return $vendorObj->friendly_name;
        }

        $adminObj = ORM::factory('role')->where('name', '=', 'admin')->find();
        if ($this->has('roles', $adminObj))
        {
            return $adminObj->friendly_name;
        }

        return $this->roles->find()->friendly_name;
    }

    
    public function get_best_members()
    {
        $best_members = $this->join('articles')->on('users.id', '=', 'articles.user_id')->group_by('articles.user_id')->limit(10)->find_all();
        return $best_members;
    }
    
    
    public function getImage() {
        if($this->image != NULL) {
            return "<img src='".$this->image."'>";
        } else {
            return "<img src='/media/images/logo.png' >";
        }
    }
    
    public function getActiveUsers() {
        return $this->where('active', '=', 1)->find_all();
    }
    
}

?>

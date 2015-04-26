<?php

App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {

    public $validate = array(
        'password' => array(
            'rule' => array('minLength', '8'),
            'message' => 'Minimum 8 characters long',
            'on' => 'create'
        ),
        'email' => array(
            'isUnique' => array(
                'rule' => 'isUnique',
                'message' => 'Email is already taken',
                'on' => 'create'
            )
        )
    );
    
    public $virtualFields = array(
        'full_name' => 'CONCAT(User.first_name, " ", User.last_name)'
    );

    public function beforeSave($options = array()) {

        if (isset($this->data[$this->alias]['password'])) {
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash(
                $this->data[$this->alias]['password']
            );
        }
        return true;
    }
}

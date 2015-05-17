<?php

App::uses('AppModel', 'Model');

class UserDetail extends AppModel {
    
    public $belongsTo = array (
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id'
        )
    );
    
    public function beforeSave($options = array()) {
        
        if (isset($this->data[$this->alias]['birth_date'])) {
            $this->data[$this->alias]['birth_date']
        }
        return true;
    }
}

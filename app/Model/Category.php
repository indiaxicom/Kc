<?php

App::uses('AppModel', 'Model');

class Category extends AppModel {
	//public $actsAs = array('Tree');
	
	public $hasAndBelongsToMany = array(
		'User' => array(
			'className' => 'User',
			'joinTable' => 'user_categories',
			'foreignKey' => 'user_id',		
		)
    );
}

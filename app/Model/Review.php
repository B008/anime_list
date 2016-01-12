<?php
App::uses('AppModel', 'Model');
/**
 * Review Model
 *
 * @property AnimesLists $AnimesLists
 * @property Users $Users
 */
class Review extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'reviews';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'animes_lists_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'users_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'AnimesLists' => array(
			'className' => 'AnimesLists',
			'foreignKey' => 'animes_lists_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Users' => array(
			'className' => 'Users',
			'foreignKey' => 'users_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

<?php
App::uses('AppModel', 'Model');
/**
 * Genre Model
 *
 * @property AnimesList $AnimesList
 */
class Genre extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'genre_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'genre_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'AnimesList' => array(
			'className' => 'AnimesList',
			'foreignKey' => 'genre_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}

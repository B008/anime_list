<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'user_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'user_name' => array(
			'isUnique' => array(
				'rule' => array('isUnique'),
				'message' => 'Šù‚Ég‚í‚ê‚Ä‚¢‚é–¼‘O‚Å‚·',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
				'message' => '–¼‘O‚Í”¼Šp‰p”‚Å“ü—Í‚µ‚Ä‚­‚¾‚³‚¢',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'between' => array(
				'rule' => array('between',2,8),
				'message' => '–¼‘O‚Í2`8•¶šˆÈ“à‚É‚µ‚Ä‚­‚¾‚³‚¢',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
				'message' => 'password‚Í”¼Šp‰p”‚Å“ü—Í‚µ‚Ä‚­‚¾‚³‚¢',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'between' => array(
				'rule' => array('between', 6,24),
				'message' => 'ƒpƒXƒ[ƒh‚Í8`32•¶šˆÈ“à‚É‚µ‚Ä‚­‚¾‚³‚¢',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}

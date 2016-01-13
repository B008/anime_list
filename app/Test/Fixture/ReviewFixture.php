<?php
/**
 * ReviewFixture
 *
 */
class ReviewFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'animes_lists_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'review_rank' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'reviews' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'users_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'created' => '2016-01-13 09:37:49',
			'modified' => '2016-01-13 09:37:49',
			'animes_lists_id' => 1,
			'review_rank' => 1,
			'reviews' => 'Lorem ipsum dolor sit amet',
			'users_id' => 1
		),
	);

}

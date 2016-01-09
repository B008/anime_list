<?php
App::uses('AnimesList', 'Model');

/**
 * AnimesList Test Case
 *
 */
class AnimesListTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.animes_list',
		'app.genre'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AnimesList = ClassRegistry::init('AnimesList');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AnimesList);

		parent::tearDown();
	}

}

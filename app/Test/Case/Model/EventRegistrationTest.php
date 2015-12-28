<?php
App::uses('EventRegistration', 'Model');

/**
 * EventRegistration Test Case
 *
 */
class EventRegistrationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.event_registration'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EventRegistration = ClassRegistry::init('EventRegistration');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EventRegistration);

		parent::tearDown();
	}

}

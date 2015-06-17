<?php
/* RequestsTutor Fixture generated on: 2015-06-12 05:40:28 : 1434080428 */
class RequestsTutorFixture extends CakeTestFixture {
	var $name = 'RequestsTutor';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'tutor_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'request_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'tutor_id' => 1,
			'request_id' => 1
		),
	);
}

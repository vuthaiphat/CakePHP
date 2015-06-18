<?php
/* Major Fixture generated on: 2015-06-12 05:39:08 : 1434080348 */
class MajorFixture extends CakeTestFixture {
	var $name = 'Major';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'field_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'major' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'field_id' => 1,
			'major' => 'Lorem ipsum dolor sit amet'
		),
	);
}

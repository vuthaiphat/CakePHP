<?php
/* Request Fixture generated on: 2015-06-12 05:39:32 : 1434080372 */
class RequestFixture extends CakeTestFixture {
	var $name = 'Request';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'customer_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'numOfDay' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 2),
		'numOfPeo' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 2),
		'place' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 300, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'fee' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'sex' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'customer_id' => 1,
			'numOfDay' => 1,
			'numOfPeo' => 1,
			'place' => 'Lorem ipsum dolor sit amet',
			'fee' => 1,
			'sex' => 1
		),
	);
}

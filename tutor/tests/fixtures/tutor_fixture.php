<?php
/* Tutor Fixture generated on: 2015-06-12 05:43:29 : 1434080609 */
class TutorFixture extends CakeTestFixture {
	var $name = 'Tutor';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'firstName' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'lastName' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 30, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'dateOfBirth' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'sex' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'phoneNo' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'identityCard' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'address' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 300, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'fee' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'image' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 256, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'email' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'firstName' => 'Lorem ipsum dolor sit amet',
			'lastName' => 'Lorem ipsum dolor sit amet',
			'dateOfBirth' => '2015-06-12',
			'sex' => 1,
			'phoneNo' => 1,
			'identityCard' => 1,
			'address' => 'Lorem ipsum dolor sit amet',
			'fee' => 1,
			'image' => 'Lorem ipsum dolor sit amet'
		),
	);
}

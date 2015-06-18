<?php
/* Tutordetail Fixture generated on: 2015-06-12 05:42:21 : 1434080541 */
class TutordetailFixture extends CakeTestFixture {
	var $name = 'Tutordetail';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'tutor_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'major_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'degree_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'tutor_id' => 1,
			'major_id' => 1,
			'degree_id' => 1
		),
	);
}

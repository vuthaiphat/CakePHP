<?php
/* DistrictsTutor Fixture generated on: 2015-06-12 05:28:37 : 1434079717 */
class DistrictsTutorFixture extends CakeTestFixture {
	var $name = 'DistrictsTutor';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'tutor_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'district_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'tutor_id' => 1,
			'district_id' => 1
		),
	);
}

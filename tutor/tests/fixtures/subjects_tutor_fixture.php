<?php
/* SubjectsTutor Fixture generated on: 2015-06-12 05:41:57 : 1434080517 */
class SubjectsTutorFixture extends CakeTestFixture {
	var $name = 'SubjectsTutor';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'tutor_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'subject_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'tutor_id' => 1,
			'subject_id' => 1
		),
	);
}

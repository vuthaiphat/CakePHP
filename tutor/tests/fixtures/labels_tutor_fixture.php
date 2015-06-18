<?php
/* LabelsTutor Fixture generated on: 2015-06-12 05:32:38 : 1434079958 */
class LabelsTutorFixture extends CakeTestFixture {
	var $name = 'LabelsTutor';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'tutor_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'label_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'tutor_id' => 1,
			'label_id' => 1
		),
	);
}

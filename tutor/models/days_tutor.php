<?php
class DaysTutor extends AppModel {
	var $name = 'DaysTutor';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Tutor' => array(
			'className' => 'Tutor',
			'foreignKey' => 'tutor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Day' => array(
			'className' => 'Day',
			'foreignKey' => 'day_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

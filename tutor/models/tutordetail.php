<?php
class Tutordetail extends AppModel {
	var $name = 'Tutordetail';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Tutor' => array(
			'className' => 'Tutor',
			'foreignKey' => 'tutor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Major' => array(
			'className' => 'Major',
			'foreignKey' => 'major_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Degree' => array(
			'className' => 'Degree',
			'foreignKey' => 'degree_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

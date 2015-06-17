<?php
class Subject extends AppModel {
	var $name = 'Subject';
	var $displayField = 'subject';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'Tutor' => array(
			'className' => 'Tutor',
			'joinTable' => 'subjects_tutors',
			'foreignKey' => 'subject_id',
			'associationForeignKey' => 'tutor_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}

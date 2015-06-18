<?php
class Day extends AppModel {
	var $name = 'Day';
	var $displayField = 'day';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'Tutor' => array(
			'className' => 'Tutor',
			'joinTable' => 'days_tutors',
			'foreignKey' => 'day_id',
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

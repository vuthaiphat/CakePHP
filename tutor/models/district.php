<?php
class District extends AppModel {
	var $name = 'District';
	var $displayField = 'district';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'City' => array(
			'className' => 'City',
			'foreignKey' => 'city_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasAndBelongsToMany = array(
		'Tutor' => array(
			'className' => 'Tutor',
			'joinTable' => 'districts_tutors',
			'foreignKey' => 'district_id',
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

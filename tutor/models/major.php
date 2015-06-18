<?php
class Major extends AppModel {
	var $name = 'Major';
	var $displayField = 'major';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Field' => array(
			'className' => 'Field',
			'foreignKey' => 'field_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Tutordetail' => array(
			'className' => 'Tutordetail',
			'foreignKey' => 'major_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}

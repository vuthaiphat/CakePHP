<?php
class Degree extends AppModel {
	var $name = 'Degree';
	var $displayField = 'degree';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Tutordetail' => array(
			'className' => 'Tutordetail',
			'foreignKey' => 'degree_id',
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

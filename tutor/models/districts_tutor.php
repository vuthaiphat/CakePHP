<?php
class DistrictsTutor extends AppModel {
	var $name = 'DistrictsTutor';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Tutor' => array(
			'className' => 'Tutor',
			'foreignKey' => 'tutor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'District' => array(
			'className' => 'District',
			'foreignKey' => 'district_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

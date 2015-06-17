<?php
class RequestsTutor extends AppModel {
	var $name = 'RequestsTutor';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Tutor' => array(
			'className' => 'Tutor',
			'foreignKey' => 'tutor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Request' => array(
			'className' => 'Request',
			'foreignKey' => 'request_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

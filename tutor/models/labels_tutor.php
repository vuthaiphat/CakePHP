<?php
class LabelsTutor extends AppModel {
	var $name = 'LabelsTutor';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Tutor' => array(
			'className' => 'Tutor',
			'foreignKey' => 'tutor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Label' => array(
			'className' => 'Label',
			'foreignKey' => 'label_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

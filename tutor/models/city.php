<?php
class City extends AppModel {
	var $name = 'City';
	var $displayField = 'city';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'District' => array(
			'className' => 'District',
			'foreignKey' => 'city_id',
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

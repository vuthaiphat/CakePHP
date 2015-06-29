<?php
class Tutor extends AppModel {
	var $name = 'Tutor';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $validate = array(
		'email' => array(
			'email1' => array(
				'rule' => array('email', true),
				'require' => true,
				'allowEmpty' => false,
				'message' => 'email không hợp lệ'
				),
			'email2' => array(
				'rule' => 'isUnique',
				'message' => 'email đã được sử dụng'
				)
			),
		'password' => array(
			'rule' => array('between', 6, 30),
			'message' => 'password phải có từ 6 đến 30 ký tự'
			),
		'firstName' => array(
			'rule' => array('minLength', 1),
			'require' => true,
			'allowEmpty' => false,
			'message' => 'chưa nhập Họ lót'
			),
		'lastName' => array(
			'rule' => array('minLength', 1),
			'require' => true,
			'allowEmpty' => false,
			'message' => 'chưa nhập Tên'
			),
		'dateOfBirth' => array(
			'rule' => 'date',
			'require' => true,
			'allowEmpty' => false,
			'message' => ''
			),
		'sex' => array(
			'rule' => array('boolean'),
			'require' => true,
			'allowEmpty' => false,
			'message' => 'chưa chọn giới tính' 
			),
		'phoneNo' => array(
			'rule' => 'alphaNumeric',
			'require' => true,
			'allowEmpty' => false,
			'message' => 'Nhập số điện thoại'
			),
		'identityCard' => array(
			'rule' => array('numeric', 'isUnique'),
			'require' => true,
			'allowEmpty' => false,
			'message' => 'Nhập số điện thoại'
			),
		'address' => array(
			'rule' => array('minLength', 1),
			'require' => true,
			'allowEmpty' => false,
			'on' => 'create',
			'message' => 'Nhập địa chỉ'
			),
		'fee' => array(
			'rule' => 'money',
			'allowEmpty' => true,
			'message' => 'chỉ nhập số'
			),
		'image' => array(
			'allowEmpty' => true
			),
		);

	var $hasMany = array(
		'Tutordetail' => array(
			'className' => 'Tutordetail',
			'foreignKey' => 'tutor_id',
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


	var $hasAndBelongsToMany = array(
		'Day' => array(
			'className' => 'Day',
			'joinTable' => 'days_tutors',
			'foreignKey' => 'tutor_id',
			'associationForeignKey' => 'day_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'District' => array(
			'className' => 'District',
			'joinTable' => 'districts_tutors',
			'foreignKey' => 'tutor_id',
			'associationForeignKey' => 'district_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Label' => array(
			'className' => 'Label',
			'joinTable' => 'labels_tutors',
			'foreignKey' => 'tutor_id',
			'associationForeignKey' => 'label_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Request' => array(
			'className' => 'Request',
			'joinTable' => 'requests_tutors',
			'foreignKey' => 'tutor_id',
			'associationForeignKey' => 'request_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Subject' => array(
			'className' => 'Subject',
			'joinTable' => 'subjects_tutors',
			'foreignKey' => 'tutor_id',
			'associationForeignKey' => 'subject_id',
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

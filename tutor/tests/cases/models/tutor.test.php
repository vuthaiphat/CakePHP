<?php
/* Tutor Test cases generated on: 2015-06-12 05:43:30 : 1434080610*/
App::import('Model', 'Tutor');

class TutorTestCase extends CakeTestCase {
	var $fixtures = array('app.tutor', 'app.tutordetail', 'app.major', 'app.field', 'app.degree', 'app.day', 'app.days_tutor', 'app.district', 'app.city', 'app.districts_tutor', 'app.label', 'app.labels_tutor', 'app.request', 'app.customer', 'app.requests_tutor', 'app.subject', 'app.subjects_tutor');

	function startTest() {
		$this->Tutor =& ClassRegistry::init('Tutor');
	}

	function endTest() {
		unset($this->Tutor);
		ClassRegistry::flush();
	}

}

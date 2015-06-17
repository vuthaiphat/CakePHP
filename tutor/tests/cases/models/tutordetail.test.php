<?php
/* Tutordetail Test cases generated on: 2015-06-12 05:42:21 : 1434080541*/
App::import('Model', 'Tutordetail');

class TutordetailTestCase extends CakeTestCase {
	var $fixtures = array('app.tutordetail', 'app.tutor', 'app.major', 'app.field', 'app.degree');

	function startTest() {
		$this->Tutordetail =& ClassRegistry::init('Tutordetail');
	}

	function endTest() {
		unset($this->Tutordetail);
		ClassRegistry::flush();
	}

}

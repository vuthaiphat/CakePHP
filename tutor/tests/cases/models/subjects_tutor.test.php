<?php
/* SubjectsTutor Test cases generated on: 2015-06-12 05:41:57 : 1434080517*/
App::import('Model', 'SubjectsTutor');

class SubjectsTutorTestCase extends CakeTestCase {
	var $fixtures = array('app.subjects_tutor', 'app.tutor', 'app.subject');

	function startTest() {
		$this->SubjectsTutor =& ClassRegistry::init('SubjectsTutor');
	}

	function endTest() {
		unset($this->SubjectsTutor);
		ClassRegistry::flush();
	}

}

<?php
/* RequestsTutor Test cases generated on: 2015-06-12 05:40:28 : 1434080428*/
App::import('Model', 'RequestsTutor');

class RequestsTutorTestCase extends CakeTestCase {
	var $fixtures = array('app.requests_tutor', 'app.tutor', 'app.request', 'app.customer');

	function startTest() {
		$this->RequestsTutor =& ClassRegistry::init('RequestsTutor');
	}

	function endTest() {
		unset($this->RequestsTutor);
		ClassRegistry::flush();
	}

}

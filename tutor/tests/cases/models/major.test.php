<?php
/* Major Test cases generated on: 2015-06-12 05:39:08 : 1434080348*/
App::import('Model', 'Major');

class MajorTestCase extends CakeTestCase {
	var $fixtures = array('app.major', 'app.field', 'app.tutordetail');

	function startTest() {
		$this->Major =& ClassRegistry::init('Major');
	}

	function endTest() {
		unset($this->Major);
		ClassRegistry::flush();
	}

}

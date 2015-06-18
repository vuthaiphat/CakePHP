<?php
/* DaysTutor Test cases generated on: 2015-06-12 05:25:47 : 1434079547*/
App::import('Model', 'DaysTutor');

class DaysTutorTestCase extends CakeTestCase {
	var $fixtures = array('app.days_tutor', 'app.tutor', 'app.day');

	function startTest() {
		$this->DaysTutor =& ClassRegistry::init('DaysTutor');
	}

	function endTest() {
		unset($this->DaysTutor);
		ClassRegistry::flush();
	}

}

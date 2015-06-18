<?php
/* Day Test cases generated on: 2015-06-12 05:25:29 : 1434079529*/
App::import('Model', 'Day');

class DayTestCase extends CakeTestCase {
	var $fixtures = array('app.day', 'app.tutor', 'app.days_tutor');

	function startTest() {
		$this->Day =& ClassRegistry::init('Day');
	}

	function endTest() {
		unset($this->Day);
		ClassRegistry::flush();
	}

}

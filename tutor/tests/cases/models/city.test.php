<?php
/* City Test cases generated on: 2015-06-12 05:14:08 : 1434078848*/
App::import('Model', 'City');

class CityTestCase extends CakeTestCase {
	var $fixtures = array('app.city', 'app.district');

	function startTest() {
		$this->City =& ClassRegistry::init('City');
	}

	function endTest() {
		unset($this->City);
		ClassRegistry::flush();
	}

}

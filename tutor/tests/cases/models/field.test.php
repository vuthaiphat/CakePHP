<?php
/* Field Test cases generated on: 2015-06-12 05:29:00 : 1434079740*/
App::import('Model', 'Field');

class FieldTestCase extends CakeTestCase {
	var $fixtures = array('app.field', 'app.major');

	function startTest() {
		$this->Field =& ClassRegistry::init('Field');
	}

	function endTest() {
		unset($this->Field);
		ClassRegistry::flush();
	}

}

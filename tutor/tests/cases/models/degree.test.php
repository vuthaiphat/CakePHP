<?php
/* Degree Test cases generated on: 2015-06-12 05:26:17 : 1434079577*/
App::import('Model', 'Degree');

class DegreeTestCase extends CakeTestCase {
	var $fixtures = array('app.degree', 'app.tutordetail');

	function startTest() {
		$this->Degree =& ClassRegistry::init('Degree');
	}

	function endTest() {
		unset($this->Degree);
		ClassRegistry::flush();
	}

}

<?php
/* DistrictsTutor Test cases generated on: 2015-06-12 05:28:37 : 1434079717*/
App::import('Model', 'DistrictsTutor');

class DistrictsTutorTestCase extends CakeTestCase {
	var $fixtures = array('app.districts_tutor', 'app.tutor', 'app.district', 'app.city');

	function startTest() {
		$this->DistrictsTutor =& ClassRegistry::init('DistrictsTutor');
	}

	function endTest() {
		unset($this->DistrictsTutor);
		ClassRegistry::flush();
	}

}

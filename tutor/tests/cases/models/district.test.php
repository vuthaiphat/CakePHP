<?php
/* District Test cases generated on: 2015-06-12 05:28:07 : 1434079687*/
App::import('Model', 'District');

class DistrictTestCase extends CakeTestCase {
	var $fixtures = array('app.district', 'app.city', 'app.tutor', 'app.districts_tutor');

	function startTest() {
		$this->District =& ClassRegistry::init('District');
	}

	function endTest() {
		unset($this->District);
		ClassRegistry::flush();
	}

}

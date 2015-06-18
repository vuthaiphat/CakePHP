<?php
/* Request Test cases generated on: 2015-06-12 05:39:32 : 1434080372*/
App::import('Model', 'Request');

class RequestTestCase extends CakeTestCase {
	var $fixtures = array('app.request', 'app.customer', 'app.tutor', 'app.requests_tutor');

	function startTest() {
		$this->Request =& ClassRegistry::init('Request');
	}

	function endTest() {
		unset($this->Request);
		ClassRegistry::flush();
	}

}

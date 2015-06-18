<?php
/* Customer Test cases generated on: 2015-06-12 05:25:06 : 1434079506*/
App::import('Model', 'Customer');

class CustomerTestCase extends CakeTestCase {
	var $fixtures = array('app.customer', 'app.request');

	function startTest() {
		$this->Customer =& ClassRegistry::init('Customer');
	}

	function endTest() {
		unset($this->Customer);
		ClassRegistry::flush();
	}

}

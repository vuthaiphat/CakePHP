<?php
/* Customers Test cases generated on: 2015-06-12 05:56:44 : 1434081404*/
App::import('Controller', 'Customers');

class TestCustomersController extends CustomersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CustomersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.customer', 'app.request', 'app.tutor', 'app.tutordetail', 'app.major', 'app.field', 'app.degree', 'app.day', 'app.days_tutor', 'app.district', 'app.city', 'app.districts_tutor', 'app.label', 'app.labels_tutor', 'app.requests_tutor', 'app.subject', 'app.subjects_tutor');

	function startTest() {
		$this->Customers =& new TestCustomersController();
		$this->Customers->constructClasses();
	}

	function endTest() {
		unset($this->Customers);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}

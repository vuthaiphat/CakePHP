<?php
/* Days Test cases generated on: 2015-06-12 06:44:22 : 1434084262*/
App::import('Controller', 'Days');

class TestDaysController extends DaysController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DaysControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.day', 'app.tutor', 'app.tutordetail', 'app.major', 'app.field', 'app.degree', 'app.days_tutor', 'app.district', 'app.city', 'app.districts_tutor', 'app.label', 'app.labels_tutor', 'app.request', 'app.customer', 'app.requests_tutor', 'app.subject', 'app.subjects_tutor');

	function startTest() {
		$this->Days =& new TestDaysController();
		$this->Days->constructClasses();
	}

	function endTest() {
		unset($this->Days);
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

<?php
/* Degrees Test cases generated on: 2015-06-12 06:44:36 : 1434084276*/
App::import('Controller', 'Degrees');

class TestDegreesController extends DegreesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DegreesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.degree', 'app.tutordetail', 'app.tutor', 'app.day', 'app.days_tutor', 'app.district', 'app.city', 'app.districts_tutor', 'app.label', 'app.labels_tutor', 'app.request', 'app.customer', 'app.requests_tutor', 'app.subject', 'app.subjects_tutor', 'app.major', 'app.field');

	function startTest() {
		$this->Degrees =& new TestDegreesController();
		$this->Degrees->constructClasses();
	}

	function endTest() {
		unset($this->Degrees);
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

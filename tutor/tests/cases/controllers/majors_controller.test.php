<?php
/* Majors Test cases generated on: 2015-06-12 06:47:44 : 1434084464*/
App::import('Controller', 'Majors');

class TestMajorsController extends MajorsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MajorsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.major', 'app.field', 'app.tutordetail', 'app.tutor', 'app.day', 'app.days_tutor', 'app.district', 'app.city', 'app.districts_tutor', 'app.label', 'app.labels_tutor', 'app.request', 'app.customer', 'app.requests_tutor', 'app.subject', 'app.subjects_tutor', 'app.degree');

	function startTest() {
		$this->Majors =& new TestMajorsController();
		$this->Majors->constructClasses();
	}

	function endTest() {
		unset($this->Majors);
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

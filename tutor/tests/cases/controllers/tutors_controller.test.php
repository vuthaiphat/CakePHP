<?php
/* Tutors Test cases generated on: 2015-06-12 06:48:57 : 1434084537*/
App::import('Controller', 'Tutors');

class TestTutorsController extends TutorsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TutorsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.tutor', 'app.tutordetail', 'app.major', 'app.field', 'app.degree', 'app.day', 'app.days_tutor', 'app.district', 'app.city', 'app.districts_tutor', 'app.label', 'app.labels_tutor', 'app.request', 'app.customer', 'app.requests_tutor', 'app.subject', 'app.subjects_tutor');

	function startTest() {
		$this->Tutors =& new TestTutorsController();
		$this->Tutors->constructClasses();
	}

	function endTest() {
		unset($this->Tutors);
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

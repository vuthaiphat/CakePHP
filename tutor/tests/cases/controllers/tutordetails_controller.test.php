<?php
/* Tutordetails Test cases generated on: 2015-06-12 06:48:50 : 1434084530*/
App::import('Controller', 'Tutordetails');

class TestTutordetailsController extends TutordetailsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TutordetailsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.tutordetail', 'app.tutor', 'app.day', 'app.days_tutor', 'app.district', 'app.city', 'app.districts_tutor', 'app.label', 'app.labels_tutor', 'app.request', 'app.customer', 'app.requests_tutor', 'app.subject', 'app.subjects_tutor', 'app.major', 'app.field', 'app.degree');

	function startTest() {
		$this->Tutordetails =& new TestTutordetailsController();
		$this->Tutordetails->constructClasses();
	}

	function endTest() {
		unset($this->Tutordetails);
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

<?php
/* Requests Test cases generated on: 2015-06-12 06:47:55 : 1434084475*/
App::import('Controller', 'Requests');

class TestRequestsController extends RequestsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RequestsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.request', 'app.customer', 'app.tutor', 'app.tutordetail', 'app.major', 'app.field', 'app.degree', 'app.day', 'app.days_tutor', 'app.district', 'app.city', 'app.districts_tutor', 'app.label', 'app.labels_tutor', 'app.requests_tutor', 'app.subject', 'app.subjects_tutor');

	function startTest() {
		$this->Requests =& new TestRequestsController();
		$this->Requests->constructClasses();
	}

	function endTest() {
		unset($this->Requests);
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

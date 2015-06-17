<?php
/* Labels Test cases generated on: 2015-06-12 06:45:42 : 1434084342*/
App::import('Controller', 'Labels');

class TestLabelsController extends LabelsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class LabelsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.label', 'app.tutor', 'app.tutordetail', 'app.major', 'app.field', 'app.degree', 'app.day', 'app.days_tutor', 'app.district', 'app.city', 'app.districts_tutor', 'app.labels_tutor', 'app.request', 'app.customer', 'app.requests_tutor', 'app.subject', 'app.subjects_tutor');

	function startTest() {
		$this->Labels =& new TestLabelsController();
		$this->Labels->constructClasses();
	}

	function endTest() {
		unset($this->Labels);
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

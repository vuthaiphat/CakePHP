<?php
/* Fields Test cases generated on: 2015-06-12 06:45:17 : 1434084317*/
App::import('Controller', 'Fields');

class TestFieldsController extends FieldsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class FieldsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.field', 'app.major', 'app.tutordetail', 'app.tutor', 'app.day', 'app.days_tutor', 'app.district', 'app.city', 'app.districts_tutor', 'app.label', 'app.labels_tutor', 'app.request', 'app.customer', 'app.requests_tutor', 'app.subject', 'app.subjects_tutor', 'app.degree');

	function startTest() {
		$this->Fields =& new TestFieldsController();
		$this->Fields->constructClasses();
	}

	function endTest() {
		unset($this->Fields);
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

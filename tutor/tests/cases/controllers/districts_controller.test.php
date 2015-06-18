<?php
/* Districts Test cases generated on: 2015-06-12 06:44:55 : 1434084295*/
App::import('Controller', 'Districts');

class TestDistrictsController extends DistrictsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DistrictsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.district', 'app.city', 'app.tutor', 'app.tutordetail', 'app.major', 'app.field', 'app.degree', 'app.day', 'app.days_tutor', 'app.districts_tutor', 'app.label', 'app.labels_tutor', 'app.request', 'app.customer', 'app.requests_tutor', 'app.subject', 'app.subjects_tutor');

	function startTest() {
		$this->Districts =& new TestDistrictsController();
		$this->Districts->constructClasses();
	}

	function endTest() {
		unset($this->Districts);
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

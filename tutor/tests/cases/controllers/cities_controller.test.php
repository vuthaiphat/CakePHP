<?php
/* Cities Test cases generated on: 2015-06-12 06:19:22 : 1434082762*/
App::import('Controller', 'Cities');

class TestCitiesController extends CitiesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CitiesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.city', 'app.district', 'app.tutor', 'app.tutordetail', 'app.major', 'app.field', 'app.degree', 'app.day', 'app.days_tutor', 'app.districts_tutor', 'app.label', 'app.labels_tutor', 'app.request', 'app.customer', 'app.requests_tutor', 'app.subject', 'app.subjects_tutor');

	function startTest() {
		$this->Cities =& new TestCitiesController();
		$this->Cities->constructClasses();
	}

	function endTest() {
		unset($this->Cities);
		ClassRegistry::flush();
	}

}

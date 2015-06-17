<?php
/* LabelsTutor Test cases generated on: 2015-06-12 05:32:38 : 1434079958*/
App::import('Model', 'LabelsTutor');

class LabelsTutorTestCase extends CakeTestCase {
	var $fixtures = array('app.labels_tutor', 'app.tutor', 'app.label');

	function startTest() {
		$this->LabelsTutor =& ClassRegistry::init('LabelsTutor');
	}

	function endTest() {
		unset($this->LabelsTutor);
		ClassRegistry::flush();
	}

}

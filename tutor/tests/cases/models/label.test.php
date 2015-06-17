<?php
/* Label Test cases generated on: 2015-06-12 05:32:13 : 1434079933*/
App::import('Model', 'Label');

class LabelTestCase extends CakeTestCase {
	var $fixtures = array('app.label', 'app.tutor', 'app.labels_tutor');

	function startTest() {
		$this->Label =& ClassRegistry::init('Label');
	}

	function endTest() {
		unset($this->Label);
		ClassRegistry::flush();
	}

}

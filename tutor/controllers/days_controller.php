<?php
class DaysController extends AppController {

	var $name = 'Days';

	function index() {
		$this->Day->recursive = 0;
		$this->set('days', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid day', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('day', $this->Day->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Day->create();
			if ($this->Day->save($this->data)) {
				$this->Session->setFlash(__('The day has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The day could not be saved. Please, try again.', true));
			}
		}
		$tutors = $this->Day->Tutor->find('list');
		$this->set(compact('tutors'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid day', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Day->save($this->data)) {
				$this->Session->setFlash(__('The day has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The day could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Day->read(null, $id);
		}
		$tutors = $this->Day->Tutor->find('list');
		$this->set(compact('tutors'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for day', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Day->delete($id)) {
			$this->Session->setFlash(__('Day deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Day was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}

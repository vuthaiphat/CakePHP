<?php
class DegreesController extends AppController {

	var $name = 'Degrees';

	function index() {
		$this->Degree->recursive = 0;
		$this->set('degrees', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid degree', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('degree', $this->Degree->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Degree->create();
			if ($this->Degree->save($this->data)) {
				$this->Session->setFlash(__('The degree has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The degree could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid degree', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Degree->save($this->data)) {
				$this->Session->setFlash(__('The degree has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The degree could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Degree->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for degree', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Degree->delete($id)) {
			$this->Session->setFlash(__('Degree deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Degree was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}

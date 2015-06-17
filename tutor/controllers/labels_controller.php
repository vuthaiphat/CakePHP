<?php
class LabelsController extends AppController {

	var $name = 'Labels';

	function index() {
		$this->Label->recursive = 0;
		$this->set('labels', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid label', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('label', $this->Label->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Label->create();
			if ($this->Label->save($this->data)) {
				$this->Session->setFlash(__('The label has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The label could not be saved. Please, try again.', true));
			}
		}
		$tutors = $this->Label->Tutor->find('list');
		$this->set(compact('tutors'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid label', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Label->save($this->data)) {
				$this->Session->setFlash(__('The label has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The label could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Label->read(null, $id);
		}
		$tutors = $this->Label->Tutor->find('list');
		$this->set(compact('tutors'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for label', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Label->delete($id)) {
			$this->Session->setFlash(__('Label deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Label was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}

<?php
class TutorsController extends AppController {

	var $name = 'Tutors';

	function index() {
		$this->Tutor->recursive = 0;
		$this->set('tutors', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid tutor', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tutor', $this->Tutor->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Tutor->create();
			if ($this->Tutor->save($this->data)) {
				$this->Session->setFlash(__('The tutor has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tutor could not be saved. Please, try again.', true));
			}
		}
		$days = $this->Tutor->Day->find('list');
		$districts = $this->Tutor->District->find('list');
		$labels = $this->Tutor->Label->find('list');
		$requests = $this->Tutor->Request->find('list');
		$subjects = $this->Tutor->Subject->find('list');
		$this->set(compact('days', 'districts', 'labels', 'requests', 'subjects'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid tutor', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tutor->save($this->data)) {
				$this->Session->setFlash(__('The tutor has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tutor could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tutor->read(null, $id);
		}
		$days = $this->Tutor->Day->find('list');
		$districts = $this->Tutor->District->find('list');
		$labels = $this->Tutor->Label->find('list');
		$requests = $this->Tutor->Request->find('list');
		$subjects = $this->Tutor->Subject->find('list');
		$this->set(compact('days', 'districts', 'labels', 'requests', 'subjects'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for tutor', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tutor->delete($id)) {
			$this->Session->setFlash(__('Tutor deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tutor was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}

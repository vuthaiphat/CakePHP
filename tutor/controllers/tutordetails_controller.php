<?php
class TutordetailsController extends AppController {

	var $name = 'Tutordetails';

	function index() {
		$this->Tutordetail->recursive = 0;
		$this->set('tutordetails', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid tutordetail', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tutordetail', $this->Tutordetail->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Tutordetail->create();
			if ($this->Tutordetail->save($this->data)) {
				$this->Session->setFlash(__('The tutordetail has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tutordetail could not be saved. Please, try again.', true));
			}
		}
		$tutors = $this->Tutordetail->Tutor->find('list');
		$majors = $this->Tutordetail->Major->find('list');
		$degrees = $this->Tutordetail->Degree->find('list');
		$this->set(compact('tutors', 'majors', 'degrees'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid tutordetail', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tutordetail->save($this->data)) {
				$this->Session->setFlash(__('The tutordetail has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tutordetail could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tutordetail->read(null, $id);
		}
		$tutors = $this->Tutordetail->Tutor->find('list');
		$majors = $this->Tutordetail->Major->find('list');
		$degrees = $this->Tutordetail->Degree->find('list');
		$this->set(compact('tutors', 'majors', 'degrees'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for tutordetail', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tutordetail->delete($id)) {
			$this->Session->setFlash(__('Tutordetail deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tutordetail was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}

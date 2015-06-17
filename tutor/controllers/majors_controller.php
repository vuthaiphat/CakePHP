<?php
class MajorsController extends AppController {

	var $name = 'Majors';

	function index() {
		$this->Major->recursive = 0;
		$this->set('majors', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid major', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('major', $this->Major->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Major->create();
			if ($this->Major->save($this->data)) {
				$this->Session->setFlash(__('The major has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The major could not be saved. Please, try again.', true));
			}
		}
		$fields = $this->Major->Field->find('list');
		$this->set(compact('fields'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid major', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Major->save($this->data)) {
				$this->Session->setFlash(__('The major has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The major could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Major->read(null, $id);
		}
		$fields = $this->Major->Field->find('list');
		$this->set(compact('fields'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for major', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Major->delete($id)) {
			$this->Session->setFlash(__('Major deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Major was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}

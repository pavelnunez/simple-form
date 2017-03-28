<?php
class ClubsController extends AppController {

	var $name = 'Clubs';
	
	function index() {
		$this->Club->recursive = 0;
		$this->set('clubs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Registro Inválido', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('club', $this->Club->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Club->create();
			if ($this->Club->save($this->data)) {
				$this->Session->setFlash(__('El Registro ha sido guardado', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Registro no pudo ser guardado. Por favor, inténtelo de nuevo.', true));
			}
		}
		//$sucursales = $this->Club->Sucursal->find('list');
		$sucursales = $this->Club->Sucursal->listar(2);
		$sexos = $this->Club->Sexo->find('list');
		$this->set(compact('sucursales', 'sexos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Registro Inválido', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Club->save($this->data)) {
				$this->Session->setFlash(__('El Registro ha sido guardado', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Registro no pudo ser guardado. Por favor, inténtelo de nuevo.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Club->read(null, $id);
		}
		//$sucursales = $this->Club->Sucursal->find('list');
		$sucursales = $this->Club->Sucursal->listar(2);
		$sexos = $this->Club->Sexo->find('list');
		$this->set(compact('sucursales', 'sexos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Identificador de registro inválido', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Club->delete($id)) {
			$this->Session->setFlash(__('Registro eliminado', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('El Registro no pudo ser eliminado', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Club->recursive = 0;
		$this->set('clubs', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Registro Inválido', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('club', $this->Club->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Club->create();
			if ($this->Club->save($this->data)) {
				$this->Session->setFlash(__('El Registro ha sido guardado', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Registro no pudo ser guardado. Por favor, inténtelo de nuevo.', true));
			}
		}
		$sucursales = $this->Club->Sucursal->find('list');
		$this->set(compact('sucursales'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Registro Inválido', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Club->save($this->data)) {
				$this->Session->setFlash(__('El Registro ha sido guardado', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Registro no pudo ser guardado. Por favor, inténtelo de nuevo.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Club->read(null, $id);
		}
		$sucursales = $this->Club->Sucursal->find('list');
		$this->set(compact('sucursales'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Identificador de registro inválido', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Club->delete($id)) {
			$this->Session->setFlash(__('Registro eliminado', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('El Registro no pudo ser eliminado', true));
		$this->redirect(array('action' => 'index'));
	}
}

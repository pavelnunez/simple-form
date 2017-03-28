<?php
class SucursalesController extends AppController {

	var $name = 'Sucursales';

	function index() {
		$this->Sucursal->recursive = 0;
		$this->set('sucursales', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Registro Inválido', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('sucursal', $this->Sucursal->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Sucursal->create();
			if ($this->Sucursal->save($this->data)) {
				$this->Session->setFlash(__('El Registro ha sido guardado', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Registro no pudo ser guardado. Por favor, inténtelo de nuevo.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Registro Inválido', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Sucursal->save($this->data)) {
				$this->Session->setFlash(__('El Registro ha sido guardado', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Registro no pudo ser guardado. Por favor, inténtelo de nuevo.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Sucursal->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Identificador de registro inválido', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Sucursal->delete($id)) {
			$this->Session->setFlash(__('Registro eliminado', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('El Registro no pudo ser eliminado', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Sucursal->recursive = 0;
		$this->set('sucursales', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Registro Inválido', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('sucursal', $this->Sucursal->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Sucursal->create();
			if ($this->Sucursal->save($this->data)) {
				$this->Session->setFlash(__('El Registro ha sido guardado', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Registro no pudo ser guardado. Por favor, inténtelo de nuevo.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Registro Inválido', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Sucursal->save($this->data)) {
				$this->Session->setFlash(__('El Registro ha sido guardado', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Registro no pudo ser guardado. Por favor, inténtelo de nuevo.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Sucursal->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Identificador de registro inválido', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Sucursal->delete($id)) {
			$this->Session->setFlash(__('Registro eliminado', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('El Registro no pudo ser eliminado', true));
		$this->redirect(array('action' => 'index'));
	}
}

<?php
class UsuariosController extends AppController {

	public $name = 'Usuarios';
	
	//Seccion de implementacion de autenticacion con el componente Auth

	/**@desc Metodo que implementa y configura algunas variables necesarias para
	 * el funcionamiento del componente Auth.
	 * @version 0.0.1 Revision 20110823-1024
	 * */
	public function beforeFilter(){
		/* Llamar al metodo beforeFilter() del padre */
		parent::beforeFilter();
		/* Para implementar formularios seguros que requieran Authentication Key y usen solo el método POST */
		//$this->Security->requireAuth('login', 'logout');
		/* Para configurar el algoritmo OWF de encriptación para las contraseñas */
		Security::setHash('md5');
		/* Define la accion que a que redirecciona cuando es autenticado exitosamente */
		$this->Auth->loginRedirect = array('controller' => 'adm', 'action' => 'index');
		
		
		
	}
	
	
	/**@desc Metodo que implementa la pantalla de login (inicio de sesión), autenticación y otros
	 * aspectos de seguridad inicial 
	 * @version 0.0.1 Revision 20110823-1021
	 * */
	public function login(){
		$this->layout = 'ego_login';
		
	}
	
	/**@desc Metodo que implementa la funcionalidad de cierre de sesion, redirecciona al portal
	 * destruye la sesion creada.  
	 * @version 0.0.1 Revision 20110823-1023
	 * */
	public function logout(){
			/* Destruye las variables de sesion del usuario */
			$this->Session->destroy('Auth.User');
			/* Setea un mensaje en la sesión para que salga en la página redireccionada */
            $this->Session->setFlash('Cerrando Sesión');
            /* Redirecciona al logout del componente Auth */
            $this->redirect($this->Auth->logout());
	}
	/**@desc Metodo para probar las configuraciones
	 * 
	 * */
	public function prueba(){
		$this->layout = 'orico_login';
		$this->set('datos',$this->Auth->user());
	}
	
	//Seccion de implementacion de autenticacion con el componente Auth

	function index() {
		$this->Usuario->recursive = 0;
		$this->set('usuarios', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Registro Inválido', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('usuario', $this->Usuario->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			/* Para asignarle los datos complementarios a $this->data */
			$this->data['Usuario']['clave_generada'] = $this->Usuario->generarClave('USU');
			$this->data['Usuario']['creado_en'] = date("Y-m-d");
			$this->data['Usuario']['ultima_sesion_en'] = null;
			$this->data['Usuario']['rol_id'] = 3;
			$this->data['Usuario']['activo'] = 1;
			/* Para asignarle los datos complementarios a $this->data */
			
			$this->Usuario->create();
			if ($this->Usuario->save($this->data)) {
				$this->Session->setFlash(__('El Registro ha sido guardado', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Registro no pudo ser guardado. Por favor, inténtelo de nuevo.', true));
			}
		}
		//$roles = $this->Usuario->Rol->find('list');
		/*Lista los roles que no sean root*/
		$roles = $this->Usuario->Rol->listar();
		$this->set(compact('roles'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Registro Inválido', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			
			if ($this->Usuario->save($this->data)) {
				$this->Session->setFlash(__('El Registro ha sido guardado', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Registro no pudo ser guardado. Por favor, inténtelo de nuevo.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Usuario->read(null, $id);
		}
		//$roles = $this->Usuario->Rol->find('list');
		/*Lista los roles que no sean root*/
		$roles = $this->Usuario->Rol->listar();
		$this->set(compact('roles'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Identificador de registro inválido', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Usuario->delete($id)) {
			$this->Session->setFlash(__('Registro eliminado', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('El Registro no pudo ser eliminado', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Usuario->recursive = 0;
		$this->set('usuarios', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Registro Inválido', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('usuario', $this->Usuario->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Usuario->create();
			if ($this->Usuario->save($this->data)) {
				$this->Session->setFlash(__('El Registro ha sido guardado', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Registro no pudo ser guardado. Por favor, inténtelo de nuevo.', true));
			}
		}
		$roles = $this->Usuario->Rol->find('list');
		$this->set(compact('roles'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Registro Inválido', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Usuario->save($this->data)) {
				$this->Session->setFlash(__('El Registro ha sido guardado', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Registro no pudo ser guardado. Por favor, inténtelo de nuevo.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Usuario->read(null, $id);
		}
		$roles = $this->Usuario->Rol->find('list');
		$this->set(compact('roles'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Identificador de registro inválido', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Usuario->delete($id)) {
			$this->Session->setFlash(__('Registro eliminado', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('El Registro no pudo ser eliminado', true));
		$this->redirect(array('action' => 'index'));
	}
}

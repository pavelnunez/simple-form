<?php
class PublicoController extends AppController {
	public $name = 'Publico';
	public $uses = array('Club', 'Sucursal', 'Sexo');	

	//Propiedad que guarda los contenidos de la sección pública del portal
	public $datos = array();
	
	//public $layout = 'orico';
	public $helpers = array('Ego', 'Seo');
	
	//
	public function beforeFilter(){
		
		/*Para implementar formularios seguros con el componente Security declarado en AppController*/
		$this->Security->requirePost('suscribirse', 'registrar');
		$this->Security->requireAuth('suscribirse', 'registrar');
		
		/*Para clasificar como publicos todos las acciones de este controlador*/
		$this->Auth->allow('*');
		
		/* Contenido del portal */
		$this->datos['title'] = 'Bienvenidos a Orico Consulting';
		$this->datos['title_description'] = 'Firma de consultoría, para trabajos especializados a nivel de Rep&uacute;blica Dominicana, contabilidad, finanzas y outsourcing empresarial en servicios relacionados';
		$this->datos['meta_description'] = 'Firma de consultoría, para trabajos especializados a nivel de Rep&uacute;blica Dominicana, contabilidad, finanzas y outsourcing empresarial en servicios relacionados';
		$this->datos['meta_keywords'] = 'keyword research specific words';
		$this->datos['author'] = 'Pavel Núñez Deschamps :: pndeschamps@gmail.com :: pnunez@solucionesorico.com';
		$this->datos['year_copyright'] = date("Y");
	}
	
	public function index(){
		$this->layout = 'ego';
		$title_for_layout = 'Inicio';
		$sucursales = $this->Sucursal->listar();
		$sexos = $this->Sexo->find('list');
		
		$this->set(compact('contenido', 'title_for_layout', 'sucursales', 'sexos'));
	}
	
	public function prueba(){
		$this->layout = 'ego';
		$contenido = $this->data;
		$this->set(compact('contenido', 'title_for_layout'));
	}
	
	public function registrar(){
		$this->layout = 'ego';
		
		/* Para procesar y guardar los datos del formulario */
				if (!empty($this->data)) {
					
				 if($this->data['Club']['acepto'] == 'on'){
				 	     $this->data['Club']['acepta_ego_club'] = 1; 
						  if($this->data['Club']['email'] === $this->data['Club']['email_confirmacion']){
								$this->data['Club']['clave'] = $this->Club->generarClave('CLU');	
								$this->Club->create();
								if ($this->Club->save($this->data)) {
									$this->Session->setFlash(__('El Registro ha sido guardado', true));
									$this->redirect($this->referer());
								} else {
									$this->Session->setFlash(__('El Registro no pudo ser guardado. Por favor, inténtelo de nuevo.', true));
									$this->redirect($this->referer());
								}
							} else {
								$this->Session->setFlash(__('Los emails no coinciden. Por favor, inténtelo de nuevo.', true));
								$this->redirect($this->referer());
						   }
				 } else {
				 	 $this->Session->setFlash(__('Debe aceptar los términos de la membresia del EGO Club. Por favor, inténtelo de nuevo.', true));
					 $this->redirect($this->referer());
				 }
					
						
				} else {
					$this->Session->setFlash(__('El formulario fue remitido sin datos. Por favor, inténtelo de nuevo.', true));
					$this->redirect($this->referer());
				}
	}


}

<?php
class AdmController extends AppController {
	public $name = 'Adm';
	public $uses = array();

	public function index(){
		$datos['title'] = 'Bienvenidos a Orico Consulting';
		$datos['titleDescription'] = 'Firma de consultor&iacute;a, para trabajos especializados a nivel de Rep&uacute;blica Dominicana, contabilidad, finanzas y outsourcing empresarial en servicios relacionados';
		$datos['yearCopyright'] = date("Y");
		
		if($this->Auth->user('id')){
		    App::import('model', 'Usuario');
		    $usuario = new Usuario();
		    $usuario->actualizarFechaSesion($this->Auth->user('id'));	
		}
		
		
		$this->set('datos', $datos);
	}


}

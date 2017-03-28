<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.app
 */
class AppController extends Controller {
	
	public $components = array('Auth', 'Session', 'RequestHandler');
	//public $components = array('Auth', 'Session', 'RequestHandler');
	public $helpers = array('Html', 'Form', 'Javascript', 'Session', 'Ego', 'Formulario');
		
	
	/**Este metodo crea algunas configuraciones importantes de seguridad contenidas
	 * en el componente Auth
	 * 
	 * @version 0.0.1 Revision 20110823-1034
	 * */
	public function beforeFilter(){
		
		/* Define el model que se usara para autenticar los usuario. Por defecto es 'User' en este caso es 'Usuario' */
		$this->Auth->userModel = 'Usuario';
		/* Define cuales son los campos de la tabla contra los cuales autenticar los usuarios */
		$this->Auth->fields = array('username' => 'usuario', 'password' => 'contrasena');
		/* Define el error de autenticación la primera vez que se accede al portal sin estar autenticado */
		$this->Auth->authError = __('Ha intentado acceder a un recurso protegido con contraseña.', true);
		/* Define el error de validacón de credenciales, que resultan inválidas */
        $this->Auth->loginError = __('Credenciales inválidas', true);
		/* Define la accion que se utilizara para autenticar */
        //Parece ser que causa una inconsistencia y no autentica
		//$this->Auth->loginAction = array('controller' => 'usuarios', 'action' => 'login');
		
	}
	
	/**@name desacentuar
	 * @desc Intenta reemplazar letras acentuadas por equivalentes sin acento. Ejemplo 'á' por 'a'.
	 * @param string $texto: Es una cadena (string) de texto normal.
	 * @return string $noticiasProcesadas: Es el texto de la noticia procesada
	 * @version 0.0.3 Rev 20110109-1405 
	 * 
	 * */
	public function desacentuar($texto = null){
		$acentuados = array('/á/','/é/','/í/','/ó/','/ú/','/Á/','/É/','/Í/','/Ó/','/Ú/', '/Ñ/', '/ñ/', '/ü/', '/Ü/');
	    $desacentuados = array('a','e','i','o','u','A','E','I','O','U', 'N', 'n', 'u', 'U');
	    $textoDesacentuado = preg_replace($acentuados, $desacentuados, $texto); 
	  	return $textoDesacentuado;
	}
	
    /**@name menuActivo
	 * @desc Intenta generar un arreglo de menus, marcando el menu activo
	 * @param array $menus: Arreglo con los menus extraido desde la BD
	 * @param string $activo: Menu que sera marcado como activo. El menu por defecto es 'index' o 'inicio'
	 * @return array $menusProcesados: Arreglo con el menú en cuestión marcado como activo 
	 * @version 0.0.1 Rev 20110823-0907
	 * */
	public function menuActivo($menus = array(), $activo = 'index'){
		$i = 0;
		$menusProcesados = array();
		if(is_array($menus) && count($menus) > 0){
			foreach ($menus as $menu){
				if($menu['Menu']['accion'] === $activo){
					$menusProcesados[$i] = $menu;
					$menusProcesados[$i]['Menu']['activo'] = 1;
				} else {
					$menusProcesados[$i] = $menu;
					$menusProcesados[$i]['Menu']['activo'] = 0;
				}
				$i++;
			}
		}
		return $menusProcesados; 
	}
	
}

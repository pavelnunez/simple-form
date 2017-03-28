<?php
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
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
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.app
 */
class AppModel extends Model {
	
	/**@name generarClave
	 * @desc Intenta generar una clave para asignarsela a un registro cualquiera. 
	 * @param string $prefijo: Es un prefijo que denota la entidad a la se se le asignará la clave.;
	 * @version 0.0.1 Rev 20110627-1522 
	 * */
	public function generarClave($prefijo = ''){
		
		  $clave = date('Y-m-d').microtime(true);
		  $clave = preg_replace("/[\s.-]/", "", $clave);
		  
		  if(is_string($prefijo) && strlen($prefijo) === 3){
		  	 $clave = $prefijo.$clave; 
		  }
  
		return $clave; 
	}
	
	/**@name todos
	 * @desc Intenta recuperar todos los registros de la base de datos.
	 * @return arreglo con todos los registros del sistema  
	 * @version 0.0.1 Rev 20110827-0937 
	 * */
	public function todos(){
		return $this->find('all');
	}
	
	/**@name frontales
	 * @desc Intenta recuperar todos los registros que irian en la parte frontal. Aplica
	 * generalmente para elmentos de contenido.
	 * @return arreglo con todos  
	 * @version 0.0.1 Rev 20110827-0937 
	 * */
	public function frontales(){
		return $this->find('all');
	}
}

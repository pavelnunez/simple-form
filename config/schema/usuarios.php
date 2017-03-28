<?php
/*Sessions schema generated on: 2007-11-25 07:11:54 : 1196004714*/

/*
 *
 * Using the Schema command line utility
 * cake schema run create Usuarios
 *
 */
class UsuariosSchema extends CakeSchema {

	var $name = 'Usuarios';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	public $roles = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
			'rol' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 10),
			'clave_rol' => array('type'=>'string', 'null' => 'web'),
			'activo' => array('type'=>'integer', 'null' => true, 'default' => 3),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
		);
	
	public $usuarios = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
			'clave_generada' => array('type'=>'string', 'null' => true, 'default' => 'web', 'length' => 45),
			'usuario' => array('type'=>'string', 'null' => true, 'default' => null, 'length' => 100),
			'contrasena' => array('type'=>'string', 'null' => true, 'default' => null, 'length' => 100),
			'creado_en' => array('type'=>'date', 'null' => true, 'default' => null),
			'ultima_sesion_en' => array('type'=>'date', 'null' => true, 'default' => null),
			'parent_id' => array('type'=>'integer', 'null' => false, 'default' => null, 'length' => 10),
			'activo' => array('type'=>'integer', 'null' => true, 'default' => 1),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
		);	

}

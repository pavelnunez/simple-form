<?php
/* Club Fixture generated on: 2011-10-02 14:41:56 : 1317566516 */
class ClubFixture extends CakeTestFixture {
	var $name = 'Club';
	var $table = 'club';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'sucursal_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'clave' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cedula' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nombre_apellido' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fecha_cumpleanos' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'telefonos' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'acepta_ego_club' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'activo' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'sucursal_id' => 1,
			'clave' => 'Lorem ipsum dolor sit amet',
			'cedula' => 'Lorem ipsum dolor ',
			'nombre_apellido' => 'Lorem ipsum dolor sit amet',
			'fecha_cumpleanos' => '2011-10-02',
			'telefonos' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'acepta_ego_club' => 1,
			'activo' => 1
		),
	);
}

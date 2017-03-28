<?php
class Sucursal extends AppModel {
	var $name = 'Sucursal';
	var $displayField = 'codigo';
	var $validate = array(
		'codigo' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'sucursal' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'activa' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Club' => array(
			'className' => 'Club',
			'foreignKey' => 'sucursal_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
	
	/**@name listar
	 * @desc Devuelve un conveniente listado de las sucursales
	 * @param numeric $formtato: El formato en que devolvera los datos
	 * 1: array('id' => sucursal - telefono)
	 * 2: array('id' => codigo - sucursal)
	 * @version 0.0.1 Revision 20111002-1838
	 * */
	public function listar($formato = 1){
		$todas = $this->find('all', array('columns' => array('Sucursal.id', 'Sucursal.codigo', 'Sucursal.sucursal', 'Sucursal.telefono')));
		if($todas){
			switch ($formato) {
				case 1:
						foreach($todas as $sucursal){
							if(!empty($sucursal['Sucursal']['telefono'])){
								$sucursales[$sucursal['Sucursal']['id']] = sprintf('%s - %s', $sucursal['Sucursal']['sucursal'], $sucursal['Sucursal']['telefono']);
							} else {
								$sucursales[$sucursal['Sucursal']['id']] = sprintf('%s', $sucursal['Sucursal']['sucursal']);
							}
							
						}
				break;
				case 2:
						foreach($todas as $sucursal){
								$sucursales[$sucursal['Sucursal']['id']] = sprintf('%s - %s', $sucursal['Sucursal']['codigo'], $sucursal['Sucursal']['sucursal']);
						}
				break;
				
				default:
						foreach($todas as $sucursal){
							if(!empty($sucursal['Sucursal']['telefono'])){
								$sucursales[$sucursal['Sucursal']['id']] = sprintf('%s - %s', $sucursal['Sucursal']['sucursal'], $sucursal['Sucursal']['telefono']);
							} else {
								$sucursales[$sucursal['Sucursal']['id']] = sprintf('%s', $sucursal['Sucursal']['sucursal']);
							}
							
						}
				break;
			}
		   return $sucursales;
		} else {
		   return false; 
		}
	}

}

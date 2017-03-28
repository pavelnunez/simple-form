<?php
class Contenido extends AppModel {
	var $name = 'Contenido';
	var $displayField = 'titulo';
	var $validate = array(
		'titulo' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'ContenidosTipo' => array(
			'className' => 'ContenidosTipo',
			'foreignKey' => 'contenidos_tipo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	/**
	 * @name blogs
	 * @desc Intenta extraer los blogs exclusivamente de la tabla 
	 * @version 0.0.1 Revision 20110825-0910
	 * */
	public function blogs(){
		return $this->find('all', array('conditions' => array('')));
	}
	
	
}

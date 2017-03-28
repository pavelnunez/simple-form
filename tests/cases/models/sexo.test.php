<?php
/* Sexo Test cases generated on: 2011-10-02 21:39:14 : 1317591554*/
App::import('Model', 'Sexo');

class SexoTestCase extends CakeTestCase {
	var $fixtures = array('app.sexo', 'app.club', 'app.sucursal');

	function startTest() {
		$this->Sexo =& ClassRegistry::init('Sexo');
	}

	function endTest() {
		unset($this->Sexo);
		ClassRegistry::flush();
	}

}

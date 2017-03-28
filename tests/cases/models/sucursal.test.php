<?php
/* Sucursal Test cases generated on: 2011-10-02 14:47:04 : 1317566824*/
App::import('Model', 'Sucursal');

class SucursalTestCase extends CakeTestCase {
	var $fixtures = array('app.sucursal', 'app.club');

	function startTest() {
		$this->Sucursal =& ClassRegistry::init('Sucursal');
	}

	function endTest() {
		unset($this->Sucursal);
		ClassRegistry::flush();
	}

}

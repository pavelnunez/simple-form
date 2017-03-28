<?php
/* Sucursales Test cases generated on: 2011-10-02 21:14:03 : 1317590043*/
App::import('Controller', 'Sucursales');

class TestSucursalesController extends SucursalesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SucursalesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.sucursal', 'app.club');

	function startTest() {
		$this->Sucursales =& new TestSucursalesController();
		$this->Sucursales->constructClasses();
	}

	function endTest() {
		unset($this->Sucursales);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}

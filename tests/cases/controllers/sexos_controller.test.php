<?php
/* Sexos Test cases generated on: 2011-10-02 21:40:40 : 1317591640*/
App::import('Controller', 'Sexos');

class TestSexosController extends SexosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SexosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.sexo', 'app.club', 'app.sucursal');

	function startTest() {
		$this->Sexos =& new TestSexosController();
		$this->Sexos->constructClasses();
	}

	function endTest() {
		unset($this->Sexos);
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

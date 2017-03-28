<?php
/* Clubs Test cases generated on: 2011-10-02 14:51:35 : 1317567095*/
App::import('Controller', 'Clubs');

class TestClubsController extends ClubsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ClubsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.club', 'app.sucursal');

	function startTest() {
		$this->Clubs =& new TestClubsController();
		$this->Clubs->constructClasses();
	}

	function endTest() {
		unset($this->Clubs);
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

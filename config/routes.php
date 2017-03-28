<?php

/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/views/pages/home.ctp)...
 */

 
	//Router::connect('/', array('controller' => 'publico', 'action' => 'mostrar', 'index')); 
	
	//Algunas secciones importantes pre-cocidas con CakePHP
	Router::connect('/', array('controller' => 'publico', 'action' => 'index'));
	
	//Para implementar la url de acceso al CMS
	//Router::connect('/manager', array('controller' => 'usuarios', 'action' => 'login'));
	
	//Españolizar: Aparentemente funciona para todas las URLs, seguir probando
	Router::connect('/:controller/agregar', array('action' => 'add'));
	Router::connect('/:controller/editar/*', array('action' => 'edit'));
	Router::connect('/:controller/ver/*', array('action' => 'view'));
	Router::connect('/:controller/eliminar/*', array('action' => 'delete'));
	Router::connect('/:controller', array('action' => 'index'));
	
	//Para implementar la url de logout del CMS
	Router::connect('/usuarios/cerrar_sesion', array('controller' => 'usuarios', 'action' => 'logout'));
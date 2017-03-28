<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<link href="favicon.ico" type="image/x-icon" rel="icon" />
	<title>
		<?php __('CLUB - Interfaz Administrativa:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		//echo $this->Html->meta('icon');
		echo $this->Html->css('ego');
		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php 
			       echo $this->Html->link(__('CLUB - Interfaz Administrativa', true), 'http://www.ego.com.do/');
			       if($this->Session->check('Auth.Usuario')){
			       		echo "&nbsp;|&nbsp;";
			       		echo $this->Html->link(__('Dashboard', true), array('controller' => 'adm', 'action' => 'index'));
			       		echo "&nbsp;|&nbsp;";
			       		echo $this->Html->link(__('Cerrar Sesión', true), array('controller' => 'usuarios', 'action' => 'logout'));
			       }	
			       	?>
			
			</h1>
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('header-c.gif', array('alt' => __('CLUB - Interfaz Administrativa', true), 'border' => '0', 'width' => 230, 'height' => 30)),
					'http://www.ego.com.do/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
<fieldset><legend><?php __('CLUB: Administracion'); ?></legend>
<div>
<?php echo $this->Html->link(__('Listar Miembros', true), array('controller' => 'clubs', 'action' => 'index')); 
	  echo "&nbsp;|&nbsp;";
	  echo $this->Html->link(__('Nueva Membresia', true), array('controller' => 'clubs', 'action' => 'add'));
?>
</div>
</fieldset>
<fieldset><legend><?php __('Registros'); ?></legend>
<div>
<?php 
	  echo $this->Html->link(__('Listar Sucursales', true), array('controller' => 'sucursales', 'action' => 'index')); 
	  echo "&nbsp;|&nbsp;";
	  echo $this->Html->link(__('Nueva Sucursal', true), array('controller' => 'sucursales', 'action' => 'add'));
	  echo '<br/>';
	  echo $this->Html->link(__('Listar Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); 
	  echo "&nbsp;|&nbsp;";
	  echo $this->Html->link(__('Nuevo Usuario', true), array('controller' => 'usuarios', 'action' => 'add'));
	  echo '<br/>';
	  echo $this->Html->link(__('Listar Sexos', true), array('controller' => 'sexos', 'action' => 'index')); 
	  echo "&nbsp;|&nbsp;";
	  echo $this->Html->link(__('Nuevo Sexo', true), array('controller' => 'sexos', 'action' => 'add'));
?>
</div>

</fieldset>

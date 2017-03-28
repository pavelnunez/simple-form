<div class="usuarios form">
<?php echo $this->Form->create('Usuario');?>
	<fieldset>
		<legend><?php __('Editar Usuario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		//echo $this->Form->input('clave_generada');
		echo $this->Form->input('usuario');
		echo $this->Form->input('contrasena', array('type' => 'password'));
		//echo $this->Form->input('creado_en');
		//echo $this->Form->input('ultima_sesion_en');
		echo $this->Form->input('rol_id');
		//echo $this->Form->input('activo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Registrar', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value('Usuario.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Usuario.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Usuarios', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Roles', true), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Rol', true), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>
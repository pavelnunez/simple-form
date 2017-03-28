<div class="roles form">
<?php echo $this->Form->create('Rol');?>
	<fieldset>
		<legend><?php __('Editar Rol'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('rol');
		echo $this->Form->input('clave_rol');
		echo $this->Form->input('activo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Registrar', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value('Rol.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Rol.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Roles', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
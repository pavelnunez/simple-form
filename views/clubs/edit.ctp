<div class="clubs form">
<?php echo $this->Form->create('Club');?>
	<fieldset>
		<legend><?php __('Editar Miembro'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('sucursal_id');
		echo $this->Form->input('clave');
		echo $this->Form->input('cedula');
		echo $this->Form->input('nombre_apellido', array('label' => 'Nombre y Apellido'));
		echo $this->Form->input('sexo_id');
		echo $this->Formulario->inputFecha('fecha_cumpleanos');
		echo $this->Form->input('telefonos');
		echo $this->Form->input('email');
		echo $this->Form->input('acepta_ego_club');
		echo $this->Form->input('activo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Registrar', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value('Club.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Club.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Miembros', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Sucursales', true), array('controller' => 'sucursales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Sucursal', true), array('controller' => 'sucursales', 'action' => 'add')); ?> </li>
	</ul>
</div>
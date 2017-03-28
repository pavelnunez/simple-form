<div class="sucursales form">
<?php echo $this->Form->create('Sucursal');?>
	<fieldset>
		<legend><?php __('Agregar Sucursal'); ?></legend>
	<?php
		echo $this->Form->input('codigo');
		echo $this->Form->input('sucursal');
		echo $this->Form->input('direccion');
		echo $this->Form->input('telefono');
		echo $this->Form->input('activa');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Registrar', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Sucursales', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Miembros', true), array('controller' => 'clubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Miembro', true), array('controller' => 'clubs', 'action' => 'add')); ?> </li>
	</ul>
</div>
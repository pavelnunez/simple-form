<div class="sexos form">
<?php echo $this->Form->create('Sexo');?>
	<fieldset>
		<legend><?php __('Agregar Sexo'); ?></legend>
	<?php
		echo $this->Form->input('sexo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Registrar', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Sexos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Miembros', true), array('controller' => 'clubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Miembro', true), array('controller' => 'clubs', 'action' => 'add')); ?> </li>
	</ul>
</div>
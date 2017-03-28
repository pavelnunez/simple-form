<div class="sexos view">
<h2><?php  __('Sexo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sexo['Sexo']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sexo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sexo['Sexo']['sexo']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Sexo', true), array('action' => 'edit', $sexo['Sexo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Eliminar Sexo', true), array('action' => 'delete', $sexo['Sexo']['id']), null, sprintf(__('Estás seguro de que quieres eliminar el registro # %s?', true), $sexo['Sexo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Sexos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Sexo', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Miembros', true), array('controller' => 'clubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Miembro', true), array('controller' => 'clubs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Relacionados de Clubs');?></h3>
	<?php if (!empty($sexo['Club'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Sucursal Id'); ?></th>
		<th><?php __('Clave'); ?></th>
		<th><?php __('Cedula'); ?></th>
		<th><?php __('Nombre Apellido'); ?></th>
		<th><?php __('Sexo Id'); ?></th>
		<th><?php __('Fecha Cumpleanos'); ?></th>
		<th><?php __('Telefonos'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Acepta Ego Club'); ?></th>
		<th><?php __('Activo'); ?></th>
		<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($sexo['Club'] as $club):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $club['id'];?></td>
			<td><?php echo $club['sucursal_id'];?></td>
			<td><?php echo $club['clave'];?></td>
			<td><?php echo $club['cedula'];?></td>
			<td><?php echo $club['nombre_apellido'];?></td>
			<td><?php echo $club['sexo_id'];?></td>
			<td><?php echo $club['fecha_cumpleanos'];?></td>
			<td><?php echo $club['telefonos'];?></td>
			<td><?php echo $club['email'];?></td>
			<td><?php echo $club['acepta_ego_club'];?></td>
			<td><?php echo $club['activo'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'clubs', 'action' => 'view', $club['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'clubs', 'action' => 'edit', $club['id'])); ?>
				<?php echo $this->Html->link(__('Eliminar', true), array('controller' => 'clubs', 'action' => 'delete', $club['id']), null, sprintf(__('Estás seguro de que quieres eliminar el registro # %s?', true), $club['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuev@ Miembro', true), array('controller' => 'clubs', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

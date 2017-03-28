<div class="sucursales view">
<h2><?php  __('Sucursal');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sucursal['Sucursal']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Codigo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sucursal['Sucursal']['codigo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sucursal'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sucursal['Sucursal']['sucursal']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Direccion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sucursal['Sucursal']['direccion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Telefono'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sucursal['Sucursal']['telefono']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Activa'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sucursal['Sucursal']['activa'] == 1 ? "Si" : "No"; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Sucursal', true), array('action' => 'edit', $sucursal['Sucursal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Eliminar Sucursal', true), array('action' => 'delete', $sucursal['Sucursal']['id']), null, sprintf(__('Estás seguro de que quieres eliminar el registro # %s?', true), $sucursal['Sucursal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Sucursales', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Sucursal', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Miembros', true), array('controller' => 'clubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Miembro', true), array('controller' => 'clubs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Miembros de Esta Sucursal');?></h3>
	<?php if (!empty($sucursal['Club'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Sucursal Id'); ?></th>
		<th><?php __('Clave'); ?></th>
		<th><?php __('Cedula'); ?></th>
		<th><?php __('Nombre Apellido'); ?></th>
		<th><?php __('Fecha Cumpleanos'); ?></th>
		<th><?php __('Telefonos'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Acepta Ego Club'); ?></th>
		<th><?php __('Activo'); ?></th>
		<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($sucursal['Club'] as $club):
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
			<td><?php echo $club['fecha_cumpleanos'];?></td>
			<td><?php echo $club['telefonos'];?></td>
			<td><?php echo $club['email'];?></td>
			<td><?php echo $club['acepta_ego_club'] == 1 ? "Si" : "No";?></td>
			<td><?php echo $club['activo'] == 1 ? "Si" : "No";?></td>
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

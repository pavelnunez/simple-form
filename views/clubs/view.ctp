<div class="clubs view">
<h2><?php  __('Miembro');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $club['Club']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sucursal'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($club['Sucursal']['codigo'], array('controller' => 'sucursales', 'action' => 'view', $club['Sucursal']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clave'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $club['Club']['clave']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cedula'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $club['Club']['cedula']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre Apellido'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $club['Club']['nombre_apellido']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Cumpleanos'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $club['Club']['fecha_cumpleanos']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Telefonos'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $club['Club']['telefonos']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $club['Club']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Acepta Ego Club'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $club['Club']['acepta_ego_club'] == 1 ? "Si" : "No"; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Activo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $club['Club']['activo'] == 1 ? "Si" : "No"; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Miembro', true), array('action' => 'edit', $club['Club']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Eliminar Miembro', true), array('action' => 'delete', $club['Club']['id']), null, sprintf(__('Estás seguro de que quieres eliminar el registro # %s?', true), $club['Club']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Miembros', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Miembro', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Sucursales', true), array('controller' => 'sucursales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Sucursal', true), array('controller' => 'sucursales', 'action' => 'add')); ?> </li>
	</ul>
</div>

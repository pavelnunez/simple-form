<div class="roles view">
<h2><?php  __('Rol');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $rol['Rol']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rol'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $rol['Rol']['rol']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clave Rol'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $rol['Rol']['clave_rol']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Activo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $rol['Rol']['activo']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Rol', true), array('action' => 'edit', $rol['Rol']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Eliminar Rol', true), array('action' => 'delete', $rol['Rol']['id']), null, sprintf(__('Estás seguro de que quieres eliminar el registro # %s?', true), $rol['Rol']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Roles', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Rol', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Relacionados de Usuarios');?></h3>
	<?php if (!empty($rol['Usuario'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Clave Generada'); ?></th>
		<th><?php __('Usuario'); ?></th>
		<th><?php __('Contrasena'); ?></th>
		<th><?php __('Creado En'); ?></th>
		<th><?php __('Ultima Sesion En'); ?></th>
		<th><?php __('Rol Id'); ?></th>
		<th><?php __('Activo'); ?></th>
		<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($rol['Usuario'] as $usuario):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $usuario['id'];?></td>
			<td><?php echo $usuario['clave_generada'];?></td>
			<td><?php echo $usuario['usuario'];?></td>
			<td><?php echo $usuario['contrasena'];?></td>
			<td><?php echo $usuario['creado_en'];?></td>
			<td><?php echo $usuario['ultima_sesion_en'];?></td>
			<td><?php echo $usuario['rol_id'];?></td>
			<td><?php echo $usuario['activo'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'usuarios', 'action' => 'view', $usuario['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'usuarios', 'action' => 'edit', $usuario['id'])); ?>
				<?php echo $this->Html->link(__('Eliminar', true), array('controller' => 'usuarios', 'action' => 'delete', $usuario['id']), null, sprintf(__('Estás seguro de que quieres eliminar el registro # %s?', true), $usuario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuev@ Usuario', true), array('controller' => 'usuarios', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

<div class="usuarios index">
	<h2><?php __('Usuarios');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('clave_generada');?></th>
			<th><?php echo $this->Paginator->sort('usuario');?></th>
			<th><?php echo $this->Paginator->sort('contrasena');?></th>
			<th><?php echo $this->Paginator->sort('creado_en');?></th>
			<th><?php echo $this->Paginator->sort('ultima_sesion_en');?></th>
			<th><?php echo $this->Paginator->sort('rol_id');?></th>
			<th><?php echo $this->Paginator->sort('activo');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($usuarios as $usuario):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $usuario['Usuario']['id']; ?>&nbsp;</td>
		<td><?php echo $usuario['Usuario']['clave_generada']; ?>&nbsp;</td>
		<td><?php echo $usuario['Usuario']['usuario']; ?>&nbsp;</td>
		<td><?php echo $usuario['Usuario']['contrasena']; ?>&nbsp;</td>
		<td><?php echo $usuario['Usuario']['creado_en']; ?>&nbsp;</td>
		<td><?php echo $usuario['Usuario']['ultima_sesion_en']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($usuario['Rol']['rol'], array('controller' => 'roles', 'action' => 'view', $usuario['Rol']['id'])); ?>
		</td>
		<td><?php echo $usuario['Usuario']['activo']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $usuario['Usuario']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $usuario['Usuario']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $usuario['Usuario']['id']), null, sprintf(__('Estás seguro de que quieres eliminar el registro # %s?', true), $usuario['Usuario']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página %page% de %pages%, mostrando %current% registros de un total de %count%, comenzando en %start%, terminando en %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previo', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('próximo', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuev@ Usuario', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Roles', true), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Rol', true), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>
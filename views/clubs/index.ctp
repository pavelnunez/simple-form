<div class="clubs index">
	<h2><?php __('Miembros del Club');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('sucursal_id');?></th>
			<th><?php echo $this->Paginator->sort('clave');?></th>
			<th><?php echo $this->Paginator->sort('cedula');?></th>
			<th><?php echo $this->Paginator->sort('nombre_apellido');?></th>
			<th><?php echo $this->Paginator->sort('sexo_id');?></th>
			<th><?php echo $this->Paginator->sort('fecha_cumpleanos');?></th>
			<th><?php echo $this->Paginator->sort('telefonos');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('acepta_ego_club');?></th>
			<th><?php echo $this->Paginator->sort('activo');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($clubs as $club):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $club['Club']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($club['Sucursal']['codigo'], array('controller' => 'sucursales', 'action' => 'view', $club['Sucursal']['id'])); ?>
		</td>
		<td><?php echo $club['Club']['clave']; ?>&nbsp;</td>
		<td><?php echo $club['Club']['cedula']; ?>&nbsp;</td>
		<td><?php echo $club['Club']['nombre_apellido']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($club['Sexo']['sexo'], array('controller' => 'sexos', 'action' => 'view', $club['Sexo']['id'])); ?>
		</td>
		<td><?php echo $club['Club']['fecha_cumpleanos']; ?>&nbsp;</td>
		<td><?php echo $club['Club']['telefonos']; ?>&nbsp;</td>
		<td><?php echo $club['Club']['email']; ?>&nbsp;</td>
		<td><?php echo $club['Club']['acepta_ego_club'] == 1 ? "Si" : "No"; ?>&nbsp;</td>
		<td><?php echo $club['Club']['activo'] == 1 ? "Si" : "No"; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $club['Club']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $club['Club']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $club['Club']['id']), null, sprintf(__('Estás seguro de que quieres eliminar el registro # %s?', true), $club['Club']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nuev@ Miembro', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Sucursales', true), array('controller' => 'sucursales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Sucursal', true), array('controller' => 'sucursales', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="sucursales index">
	<h2><?php __('Sucursales');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('codigo');?></th>
			<th><?php echo $this->Paginator->sort('sucursal');?></th>
			<th><?php echo $this->Paginator->sort('direccion');?></th>
			<th><?php echo $this->Paginator->sort('telefono');?></th>
			<th><?php echo $this->Paginator->sort('activa');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($sucursales as $sucursal):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $sucursal['Sucursal']['id']; ?>&nbsp;</td>
		<td><?php echo $sucursal['Sucursal']['codigo']; ?>&nbsp;</td>
		<td><?php echo $sucursal['Sucursal']['sucursal']; ?>&nbsp;</td>
		<td><?php echo $sucursal['Sucursal']['direccion']; ?>&nbsp;</td>
		<td><?php echo $sucursal['Sucursal']['telefono']; ?>&nbsp;</td>
		<td><?php echo $sucursal['Sucursal']['activa'] == 1 ? "Si" : "No"; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $sucursal['Sucursal']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $sucursal['Sucursal']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $sucursal['Sucursal']['id']), null, sprintf(__('Estás seguro de que quieres eliminar el registro # %s?', true), $sucursal['Sucursal']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nuev@ Sucursal', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Miembros', true), array('controller' => 'clubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Miembro', true), array('controller' => 'clubs', 'action' => 'add')); ?> </li>
	</ul>
</div>
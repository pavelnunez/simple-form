<?php 
//debug($datos);
?>
<div id="main" class="form">
			<h2 class="inner"><?php echo __('Contactanos'); ?></h2>
			<?php echo $this->Form->create('Contacto', array('url' => array('controller' => 'publico', 'action' => 'contactarnos'))); ?>
			<p><?php echo $this->Form->input('nombre', array('class' => 'text', 'div' => false)); ?></p>
			<p><?php echo $this->Form->input('correo_electronico', array('class' => 'text', 'div' => false)); ?></p>
			<p><?php echo $this->Form->input('telefono', array('class' => 'text', 'div' => false, 'label' => 'Teléfono')); ?></p>
			<p><?php echo $this->Form->label('Mensaje'); ?> 
			   <?php echo $this->Form->textarea('mensaje', array('class' => 'text', 'div' => false)); ?></p>
			<p><?php echo $this->Form->end(array('label' => 'Enviar', 'class' => 'submit', 'div' => false)); ?></p>
</div>

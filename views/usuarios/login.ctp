<?php
//debug($datos); 
?>
  <!-- <form action="./login_strutta_files/login_strutta.htm" accept-charset="UTF-8" method="post" id="strutta-auth-login">  -->
 <?php echo $this->Form->create('Usuario', array('id' => 'strutta-auth-login', 'url' => '/usuarios/login')); ?>

	<div class="form-item" id="edit-mail-wrapper">
 		<label for="edit-mail">Usuario <span class="form-required" title="Este campo es requerido.">*</span></label>
 		<!-- <input type="text" maxlength="128" name="mail" id="edit-mail" size="60" value="" class="form-text required">  --> 
 		<?php echo $this->Form->input('usuario', array('label' => false, 'maxlength' => 128, 'id' => 'edit-mail', 'size' => 60, 'class' => 'form-text'));?>
	</div>
	
	<div class="form-item" id="edit-pass-wrapper">
 		<label for="edit-pass">Contraseña <span class="form-required" title="Este campo es requerido.">*</span></label>
 		<!-- <input type="password" name="pass" id="edit-pass" maxlength="128" size="60" class="form-text required">  -->
 		<?php echo $this->Form->input('contrasena', array('label' => false, 'maxlength' => 128, 'id' => 'edit-pass', 'size' => 60, 'class' => 'form-text', 'type' => 'password'));?>
	</div>
<!-- <input type="submit" name="op" id="edit-submit" value="Iniciar Sesión" class="form-submit">  -->
<?php echo $this->Form->end(array('label' => 'Iniciar Sesión', 'class' => 'form-submit', 'id' => 'edit-submit', 'name' => 'op')); ?>

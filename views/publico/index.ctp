<?php echo $this->Form->create('Club', array('url' => 'registrar')); ?>
  <p>&nbsp;</p>
  <table width="745" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr>
      <td colspan="2" align="right"><p class="texto">
            <?php echo $this->Html->image('header-c.gif', array('width' => 570, 'height' => 75, 'alt' => 'EGO CLUB')); ?>        
            <?php echo $this->Html->image('tarjeta0.gif', array('width' => 163, 'height' => 120, 'alt' => 'EGO CLUB - TARJETA')); ?>
      </p>
  </td>
    </tr>
    <tr>
      <td colspan="2"><p class="texto"><strong>Suscribete al EGO Club y Disfruta de:</strong> 10% de descuento en todas tus compras + Acumula 5% de todas tus compras en Puntos EGO para futuras compras a partir de 1000 puntos ego puedes redimirlos por mercancia y articulos promocionales + 25% de descuento en tu mes cumpleaños + Noticias y Actualizaciones de nuevos Productos y ofertas y eventos especiales para los miembros de ego club = Membresía Anual RD$ 100 + Impuestos.<br />
          <span class="titulo1">EGO Club Suscribete Ya!  </span></p></td>
    </tr>
    <tr>
      <td colspan="2">
      	<?php echo $this->Html->image('puntobla.gif', array('width' => 740, 'height' => 1, 'vspace' => 4)); ?>
      	<?php echo $this->Session->flash(); ?>
      </td>
    </tr>
    <tr>
      <td width="377"><span class="texto">En que sucursal quieres retirar tu tarjeta EGO Club? </span></td>
      <td width="376"><span class="texto">
        <?php echo $this->Form->input('sucursal_id', array('label' => false));?>
      </span></td>
    </tr>
    <tr>
      <td><span class="texto">Cedula o Pasaporte :</span></td>
      <td><span class="texto">
        <?php echo $this->Form->input('cedula', array('label' => false)); ?>
      </span></td>
    </tr>
    <tr>
      <td><span class="texto">Nombre y Apellido :</span></td>
      <td>
      	<span class="texto">
            <?php echo $this->Form->input('nombre_apellido', array('label' => false)); ?>
        </span>
      </td>
    </tr>
    <tr>
      <td><span class="texto">Fecha de    Cumpleaños: </span></td>
      <td>
      	  <span class="texto">
	         <?php echo $this->Formulario->inputFecha('fecha_cumpleanos', array('label' => false)); ?>
    	  </span>
   	  </td>
    </tr>
    <tr>
      <td><span class="texto">Teléfonos:</span></td>
      <td><span class="texto">
        <!-- <input type="text" name="telefonos" size="40" value="" /> -->
        <?php echo $this->Form->input('telefonos', array('label' => false)); ?>
      </span></td>
    </tr>
    <tr>
      <td><span class="texto">Sexo:</span></td>
      <td><span class="texto">
          <?php echo $this->Form->input('sexo_id', array('label' => false)); ?>
      </span></td>
    </tr>
    <tr>
      <td><span class="texto">E-mail:</span></td>
      <td><span class="texto">
        <?php echo $this->Form->input('email', array('label' => false)); ?>
      </span></td>
    </tr>
    <tr>
      <td><span class="texto">Confirme su dirección Email:</span></td>
      <td><span class="texto">
        <?php echo $this->Form->input('email_confirmacion', array('label' => false)); ?>
      </span></td>
    </tr>
    <tr>
      <td colspan="2">
      	<?php echo $this->Html->image('puntobla.gif', array('width' => 740, 'height' => 1, 'vspace' => 4)); ?>
      </td>
    </tr>
    <tr>
      <td colspan="2"><span class="texto">
        <?php echo $this->Form->checkbox('acepto', array('value' => 'on')); ?>
Acepto ser parte del EGO Club, pagar una Membresía Anual RD$ 100 + Impuestos<br />
al recoger mi tarjeta y así disfrutar de todas las ventajas descritas arriba?
<script language="JavaScript" type="text/javascript">addFieldToCheck("attribute11","Acepto ser parte del EGO Club, pagar una Membresía Anual RD$ 100 + Impuestos al recoger mi tarjeta y así disfrutar de todas las ventajas descritas arriba?");</script>
      </span></td>
    </tr>
    <!-- <tr>
      <td colspan="2"><span class="texto">
        <input type="submit" name="subscribe" value="Suscribir" onclick="return checkform();" />
      </span>
        <input type="reset" name="Reset" id="button" value="Borrar" /></td>
    </tr>
  </table>
</form>  -->
<?php echo $this->Formulario->end(); ?>
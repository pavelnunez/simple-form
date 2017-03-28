<?php


class FormularioHelper extends AppHelper {
	
	public $helpers = array('Form', 'Html');
	public $monthNames = array('01' => 'Enero', '02' =>  'Febrero', '03' => 'Marzo', '04' => 'Abril', '05' => 'Mayo', '06' => 'Junio', '07' => 'Julio', '08' => 'Agosto', '09' => 'Septiembre', '10' => 'Octubre', '11' => 'Noviembre', '12' => 'Diciembre');
	public $dateFormat = 'DMY'; 
	
	public function input($fieldName, $options = array()){
		if(array_key_exists('tipo_dato', $options)){
			switch ($options['tipo_dato']) {
				case 'entero':
					return $this->Form->input($fieldName, array('maxlength' => 5, 'size' => 5, 'accesskey' => 'u'));
				break;
				
				default:
					return $this->Form->input($fieldName, array('maxlength' => 10, 'size' => 10));
				break;
			}
		}
	} 
	
	public function inputInactivo($fieldName, $options = array()){
		$inactivo = array('class' => 'inactivo', 'readonly' => 'readonly');
		$options = array_merge($options, $inactivo);
		return $this->Form->input($fieldName, $options);
	}
	
	public function selectInactivo($fieldName, $options = array()){
		$inactivo = array('id' => 'selectInactivo', 'onmouseover'=> "this.disabled=true;", 'onmouseout' => "this.disabled=false;", 'class' => 'inactivo');
		$options = array_merge($options, $inactivo);
		return $this->Form->input($fieldName, $options);	
	}
	
	
	/**@name inputFecha
     * @desc Intenta hacer un campo de fecha personalizado y en espanol, pero usando el metodo input() original
     * de CakePHP, pero formateado con unos parametros especiales, convenientes para lograr la salida esperada.
     * @param string $fieldName: El nombre del campo en cuestion
     * @param array $options: Opciones pasadas al metodo, soporta las mismas opciones que el metodo input() original
     * de CakePHP.
     * @version 0.0.2 Revision 20111002-2339
     * 
     * */
	public function inputFecha($fieldName, $options = array()){
		$mesRepublicaDominicana = array('monthNames' => $this->monthNames, 'dateFormat' => $this->dateFormat, 'minYear' => 1970, 'maxYear' => 2030);
		$options = array_merge($options, $mesRepublicaDominicana);
		return $this->Form->input($fieldName, $options);
	}
	
	/**@name formatearFecha
     * @desc Intenta imprimir un formato de fecha abreviado
     * @param string $fecha: La hilera de la fecha
     * @param boolean $abreviar: Si va a ser abreviado o no
     * @param string $formato: El formato que llevara la fecha. Por defecto es '-' 
     * @version 0.0.2 Revision 20111002-2343
     * 
     * */
	public function formatearFecha($fecha = null, $abreviar = 0, $formato = null){
		if(is_null($fecha)){
			return date("d-m-Y");
		}
		
		//2011-05-16
		$ano = substr($fecha, 0, 4);
		if($abreviar == 1){
			$mes = substr($this->monthNames[substr($fecha, 5, 2)], 0, 3);
		} else {
			$mes = $this->monthNames[substr($fecha, 5, 2)];
		}
		
		
		$dia =  substr($fecha, 8, 2);
		
		if(is_null($formato)){
			$formato = '-';
			$fechaFormateada = sprintf("%s%4\$s%s%4\$s%s", $dia, $mes, $ano, $formato);
		} else {
			$fechaFormateada = sprintf("%s%4\$s%s%4\$s%s", $dia, $mes, $ano, $formato);
		
		}

		return $fechaFormateada;
		
	}
	
	public function booleanoAmigable($booleano = 1){
		if($booleano == 1){
			$texto = __('Si',true);
		} else {
			$texto = __('No',true);
		}
		return $texto;
    }
    
    public function linkImagen($title = '', $url = array(), $options = array(), $confirmMessage = 'Confirmacion de Accion. Esta seguro de realizarlo?'){
		$mesRepublicaDominicana = array('monthNames' => $this->monthNames, 'dateFormat' => $this->dateFormat);
		$options = array_merge($options, $mesRepublicaDominicana);
		return $this->Form->input($fieldName, $options);		    	
    }
    
    
    public function campoUsuario($fieldName, $options = array()){
    	$atributos = array('id' => 'usuario', 'maxlength' => '20');
    	$options = array_merge($options, $atributos);
    	$campoUsuario = sprintf("<p>%s</p>", $this->Form->input($fieldName, $options));
    	return $campoUsuario;
    }
    
    public function campoContrasena($fieldName, $options = array()){
    	$atributos = array('id' => 'contrasena', 'maxlength' => '20', 'type' => 'password', 'label' => 'Contraseña');
    	$options = array_merge($options, $atributos);
    	$campoContrasena = sprintf("<p>%s</p>", $this->Form->input($fieldName, $options));
    	return $campoContrasena;
    }
    
    public function botonFormulario($options = array()){
    	$boton = sprintf('<button type="submit" class="positive" name="Submit">%s %s </button>', $this->Html->image('key.png', array('alt' => 'Login')), __('Iniciar Sesión', true));
    	return $boton; 
    	
    }
    
    /**@name end
     * @desc Cierra el formulario auxiliandose del metodo end() del helper Form, que se usa en este metodo
     * con un cierto formato especifico para este formulario.
     * @param array $opciones: Son opciones pasadas al metodo, son soportadas las mismas que en el metodo end()
     * original
     * @version 0.0.1 Revision 20111002-2336
     * 
     * */
    public function end($opciones = null){
    	$options['before'] = sprintf('<tr>
    								  <td colspan="2"><span class="texto">');
    	$options['after'] = sprintf('</span>
        						  	 	%s
        						  	 </td>
    							   </tr>
  								</table>', $this->Form->submit('Borrar', array('type' => 'reset', 'div' => false, 'id' => 'button', 'name' => 'Reset')));
    	$options['name'] = 'suscribe';
    	$options['label'] = 'Suscribir';
    	$options['div'] = false; 
    	
    	if(!is_null($opciones)){
    		$options = array_merge($options, $opciones);
    	}
    	
    	return $this->Form->end($options);
    }
     
	
	
}
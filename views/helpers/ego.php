<?php

class EgoHelper extends AppHelper {
	
	public $helpers = array('Html', 'Form');
	/*Nombre de los meses en letras*/
	public $meses = array('01' => 'Enero', 
					      '02' => 'Febrero', 
					      '03' => 'Marzo', 
					      '04' => 'Abril', 
					      '05' => 'Mayo', 
					      '06' => 'Junio', 
					      '07' => 'Julio', 
					      '08' => 'Agosto', 
					      '09' => 'Septiembre', 
					      '10' => 'Octubre', 
					      '11' => 'Noviembre', 
					      '12' => 'Diciembre');
	
	public function holamundo(){
		return 'Hola Mundo Cruel.. !';
	}
	
	/**@name menus
	 * @desc Intenta generar el menu con base en los definidos en la base de datos
	 * @version 0.0.1 Rev 20110624-1255
	 * */
	public function menus($menus = array()){
		$menuGenerado = '';
		$link = '';
		$primero = 0;
		if(is_array($menus) && count($menus) > 0){
			$menuGenerado .= '<div id="menu">';
			$menuGenerado .= '<ul>';
			foreach($menus as $menu){
				if($menu['Menu']['activo'] == 1){
				  	/*if($menu['Menu']['controlador'] == 1){
				  		$link = $this->Html->link($menu['Menu']['menu'], array('action' => $menu['Menu']['accion']), array('class' => 'current'));
				  	} else {*/
				  	    $link = $this->Html->link($menu['Menu']['menu'], array('controller' => $menu['Menu']['controlador'], 'action' => $menu['Menu']['accion']), array('class' => 'current')); 	
				  	/*}*/
				} else {
					/*if($menu['Menu']['controlador'] == 1){
					   $link = $this->Html->link($menu['Menu']['menu'], array('action' => $menu['Menu']['accion']));	
					} else {*/
					   $link = $this->Html->link($menu['Menu']['menu'], array('controller' => $menu['Menu']['controlador'], 'action' => $menu['Menu']['accion']));
					/*}*/
				}
				$menuGenerado .= sprintf("<li>%s</li>", $link);
			}
			$menuGenerado .= '</ul>';
			$menuGenerado .= '</div>';
		}
		return $menuGenerado;
	}
	
	
	/**@name slideshow
	 * @desc Intenta generar el slide show o diapositivas presentadas en la pagina principal
	 * o de inicio. Estas diapositivas se componen de fotos y descripciones de las mismas. 
	 * Son elementos extraidos de la base de datos, específicamente de la tabla 'slides'.
	 * @version 0.0.1 Rev 20110624-1255 
	 * */
	public function slideshow($elementos = array()){
		$slideShow = '';
		$primero = 0;
		$tituloOverlay = 'Relaciones Publicas';
		$descripcionOverlay = 'Empresa de servicios, con una vasta experiencia en el &aacute;rea de Contabilidad y Finanzas';
		
		if(is_array($elementos) && count($elementos) > 0){
			$slideShow .= '<div id="pitch">';
			$slideShow .= '<div id="slideshow">';
			foreach($elementos as $elemento){
				$primero++;
				if($primero == 1){
				   $imagen = $this->Html->image($elemento['Slid']['imagen'], array('alt' => $elemento['Slid']['texto_alternativo'], 'class' => 'active', 'height' => 310, 'width' => 960));	
				} else {
				   $imagen = $this->Html->image($elemento['Slid']['imagen'], array('alt' => $elemento['Slid']['texto_alternativo'], 'height' => 310, 'width' => 960));
				}

				$slideShow .= $imagen;   
				
				
			}
			$slideShow .= '</div>';
			$slideShow .= sprintf('<div class="overlay transparent">
								  	<h2>%s</h2>
								  	<p>%s</p>
								  </div>', $tituloOverlay, $descripcionOverlay);
			$slideShow .= '</div>';
			
		}
	
		return $slideShow;
		
	}
	
	/**@name secciones
	 * @desc Muestra bits de las descripciones generales de las secciones en la parte frontal.
	 * @param string $secciones: Es un arreglo con los registros de las secciones. 
	 * @param numeric $max: Es el numero maximo de secciones a desplegar o imprimir.
	 * @param numeric $palabrasContenido: Es la cantidad de palabras a desplegar. 
	 * Por defecto no se despliegan todas las palabras del texto original. 
	 * @version 0.0.1 Rev 20110625-1036
	 * */
	public function secciones($secciones = array(), $max = 4, $palabrasContenido = 15){
		if(is_array($secciones) && count($secciones) > 0){
			$seccionesGeneradas = '';
			$seccionesGeneradas .= '<div id="bits">';
			
			/*Este parche es para que no rompa la apariencia de la pagina frontal si el 
			 * maximo de secciones es mayor al conteo de secciones del arreglo $secciones */
			if($max > count($secciones)){
				$max = count($secciones);
			}
			
			foreach ($secciones as $indice => $seccion){
				
				if($indice === $max - 1){
					/*$linkSeccion = $this->Html->link('»', array('controller' => 'publico', 'action' => 'secciones', $seccion['Seccion']['id'], $seccion['Seccion']['slug']));
					$linkSeccionTitulo = $this->Html->link($this->desacentuar($seccion['Seccion']['seccion']), array('controller' => 'publico', 'action' => 'secciones', $seccion['Seccion']['id'], $seccion['Seccion']['slug']));*/
					$linkSeccion = $this->Html->link('»', array('controller' => '', 'action' => 'seccion', $seccion['Seccion']['slug']));
					$linkSeccionTitulo = $this->Html->link($this->desacentuar($seccion['Seccion']['seccion']), array('controller' => '', 'action' => 'seccion', $seccion['Seccion']['slug']));
					$seccionesGeneradas .= sprintf('<div class="bit last">
													<h4>%s</h4>
													<p>%s %s</p>
													</div>', $linkSeccionTitulo, $this->soloMostrar($seccion['Seccion']['descripcion']), $linkSeccion);
				} else {
					/*$linkSeccion = $this->Html->link('»', array('controller' => 'public', 'action' => 'secciones', $seccion['Seccion']['id'], $seccion['Seccion']['slug']));
					$linkSeccionTitulo = $this->Html->link($this->desacentuar($seccion['Seccion']['seccion']), array('controller' => 'public', 'action' => 'secciones', $seccion['Seccion']['id'], $seccion['Seccion']['slug']));*/
					$linkSeccion = $this->Html->link('»', array('controller' => '', 'action' => 'seccion', $seccion['Seccion']['slug']));
					$linkSeccionTitulo = $this->Html->link($this->desacentuar($seccion['Seccion']['seccion']), array('controller' => '', 'action' => 'seccion', $seccion['Seccion']['slug']));
					$seccionesGeneradas .= sprintf('<div class="bit">
													<h4>%s</h4>
													<p>%s %s</p>
													</div>', $linkSeccionTitulo, $this->soloMostrar($seccion['Seccion']['descripcion']), $linkSeccion);
				}
				
				if($indice === $max - 1){
					break;
				}
			}
			
			$seccionesGeneradas .= '<div class="clear"></div>';
			$seccionesGeneradas .= '</div>';
		}
		return $seccionesGeneradas;
	}
	
	/**@name soloMostrar
	 * @desc Este metodo intenta solo mostrar la cantidad de palabras a partir del string o texto que se pasa
	 * como parametro.
	 * @param string $texto Es el texto que se va a procesar para mostrar
	 * @param numeric $palabras Es la cantidad de palabras a presentar. Por defecto son 15.
	 * @return string $textoProcesado Es el texto que contiene solo las primeras 15 palabras
	 * @version 0.0.1 Rev 20110625-1015
	 * */
	public function soloMostrar($texto = '', $palabras = 15) {
		$conteoPalabras = str_word_count($texto, 1, 'áéíóúñü1234567890"?');
		$textoProcesado = '';
		foreach($conteoPalabras as $indice => $palabra){
			$textoProcesado .= $palabra." ";
			if($indice === $palabras - 1){
				break;
			} 
		}	
		return $textoProcesado;
	}
	
	/**@name noticias
	 * @desc Intenta desplegar las noticias desde la base de datos
	 * @param array $noticias: Es un arreglo con las noticias extraidas de la base de datos.
	 * @param numeric $max: Es el numero maximo de secciones a desplegar o imprimir.
	 * @param numeric $palabrasContenido: Es la cantidad de palabras a desplegar.
	 * @return string $noticiasProcesadas: Es el texto de la noticia procesada
	 * @version 0.0.1 Rev 20110625-1150 
	 * 
	 * */
	public function noticias($noticias = array(), $max = 3, $palabrasContenido = 15, $encabezado = 'h2'){
		
		if(is_array($noticias) && count($noticias)){
			$noticiasProcesadas = '';
			$noticiasProcesadas .= '<div class="news">';
			foreach ($noticias as $indice => $noticia){
				$linkNoticia = $this->Html->link('»', array('controller' => '', 'action' => 'mostrar', 'noticia', $noticia['Noticia']['id'], $noticia['Noticia']['slug']));
				$linkNoticiaTitulo = $this->Html->link($this->desacentuar($this->soloMostrar($noticia['Noticia']['noticia'], 3)).'...', array('controller' => '', 'action' => 'mostrar', 'noticia', $noticia['Noticia']['id'], $noticia['Noticia']['slug']), array('title' => $noticia['Noticia']['noticia']));
				$noticiasProcesadas .= sprintf('<%s>%s</%s><p>%s %s</p>', $encabezado, $linkNoticiaTitulo, $encabezado, $this->soloMostrar($noticia['Noticia']['detalle'], $palabrasContenido), $linkNoticia);

				if($indice === $max - 1){
					break;
				}
			}
			$noticiasProcesadas .= '</div>';
		}
		return $noticiasProcesadas;
	}
	
	/**@name desacentuar
	 * @desc Intenta reemplazar letras acentuadas por equivalentes sin acento. Ejemplo 'á' por 'a'.
	 * @param string $texto: Es una cadena (string) de texto normal.
	 * @return string $noticiasProcesadas: Es el texto de la noticia procesada
	 * @version 0.0.3 Rev 20110109-1405 
	 * 
	 * */
	public function desacentuar($texto = null){
		$acentuados = array('/á/','/é/','/í/','/ó/','/ú/','/Á/','/É/','/Í/','/Ó/','/Ú/', '/Ñ/', '/ñ/', '/ü/', '/Ü/');
	    $desacentuados = array('a','e','i','o','u','A','E','I','O','U', 'N', 'n', 'u', 'U');
	    $textoDesacentuado = preg_replace($acentuados, $desacentuados, $texto); 
	  	return $textoDesacentuado;
	}
	
	/**@name contenidos
	 * @desc Intenta los contenidos desde disponibles para la parte frontal. 
	 * @param array $noticias: Es un arreglo con las noticias extraidas de la base de datos.
	 * @param numeric $max: Es el numero maximo de contenidos a desplegar o imprimir.
	 * @param numeric $palabrasContenido: Es la cantidad de palabras a desplegar.
	 * @return string $noticiasProcesadas: Es el texto de la noticia procesada
	 * @version 0.0.1 Rev 20110627-0139 
	 * */
	public function contenidos($contenidos = array(), $max = 3, $palabrasContenido = 25, $encabezado = 'h2'){
		
		$contenidosProcesados = '';
		$contenidosProcesados .= '<div class="col-left">';
		if(is_array($contenidos) && count($contenidos) > 0){
			foreach($contenidos as $indice => $contenido){
					if ($indice == 0){
						$encabezado = 'h2';
						$imagenContenido = $this->Html->link($this->Html->image('img.jpg', array('alt' => 'Imagen', 'class' => 'img', 'width' => 290, 'height' => 126)), array('controller' => '', 'action' => 'mostrar', 'contenido', $contenido['Contenido']['id'], $contenido['Contenido']['slug']), array('escape' => false));
						$linkTitulo = $this->Html->link($this->desacentuar($contenido['Contenido']['titulo']), array('controller' => '', 'action' => 'mostrar', 'contenido', $contenido['Contenido']['id'], $contenido['Contenido']['slug']));
						$linkContenido = $this->Html->link('»', array('controller' => '', 'action' => 'mostrar', 'contenido', $contenido['Contenido']['id'], $contenido['Contenido']['slug']));
						$contenidosProcesados .= sprintf('%s<%s>%s</%s><p>%s %s</p>', $imagenContenido, $encabezado, $linkTitulo, $encabezado, $this->soloMostrar($contenido['Contenido']['contenido'], $palabrasContenido), $linkContenido);
					}		
			}
			unset($indice, $contenido, $linkTitulo);
			$contenidosProcesados .= '</div>';
			
			$contenidosProcesados .= '<div class="col-right">';
			foreach ($contenidos as $indice => $contenido) {
				if($indice != 0){
					$encabezado = 'h3';
					$linkTitulo = $this->Html->link($this->desacentuar($contenido['Contenido']['titulo']), array('controller' => '', 'action' => 'mostrar', 'contenido', $contenido['Contenido']['id'], $contenido['Contenido']['slug']));
					$linkContenido = $this->Html->link('»', array('controller' => '', 'action' => 'mostrar', 'contenido', $contenido['Contenido']['id'], $contenido['Contenido']['slug']));
					$contenidosProcesados .= sprintf('<%s>%s</%s><p class="date">%s</p><p>%s %s</p>', $encabezado, $linkTitulo, $encabezado, $this->fechar($contenido['Contenido']['publicado_en'], 2), $this->soloMostrar($contenido['Contenido']['contenido'], $palabrasContenido), $linkContenido); 	
				}
				
			}
			$contenidosProcesados .= '</div>';
		}
		return $contenidosProcesados;
	}
	
	
	/**@name fechar
	 * @desc Intenta formatear la fecha extraida desde la base de datos a un formato legible. 
	 * @param string $fecha: La fecha tal cual como se extrae de la base de datos.
	 * @version 0.0.1 Rev 20110818-0332 
	 * */
	public function fechar($fecha = null, $formato = 1){
		
		$muestraFecha = '2011-06-27';
		$ano = '';
		$mes = '';
		$dia = '';
		 
		$meses = array('01' => __('Enero', true), 
					   '02' => __('Febrero', true), 
					   '03' => __('Marzo', true), 
					   '04' => __('Abril', true), 
					   '05' => __('Mayo', true), 
					   '06' => __('Junio', true), 
					   '07' => __('Julio', true), 
					   '08' => __('Agosto', true), 
					   '09' => __('Septiembre', true), 
					   '10' => __('Octubre', true), 
					   '11' => __('Noviembre', true), 
					   '12' => __('Diciembre', true));
		
		if(is_null($fecha)){
			$fecha = date('Y-m-d');
		}
		
		$ano = substr($fecha, 0, 4);
		$mes = substr($fecha, 5, 2);
		$dia = substr($fecha, 8, 2);
		switch ($formato) {
			case 1: $fechaProcesada = sprintf('%s de %s del %s', $dia, $meses[$mes], $ano); break;
			case 2: $fechaProcesada = sprintf('%s %s, %s', $dia, $meses[$mes], $ano); break;
			default: $fechaProcesada = sprintf('%s de %s del %s', $dia, $meses[$mes], $ano); break;
		}
		return $fechaProcesada;
	}
	
	/**@name formularioSubscripcion
	 * @desc Intenta generar un formulario de subscripcion y ponerle una acción que sea la de subscripcion. 
	 * @param array $url: Una url en el formato de CakePHP array('controller' => 'controlador', 'action' => 'accion');
	 * @return string $formularioSubscripcion: Las etiquetas validas para crear el formulario.
	 * @version 0.0.1 Rev 20110627-0142 
	 * */
	public function formularioSubscripcion($url = array(), $tituloFormulario = 'Recibe actualizaciones y suscripciones', $encabezado = 'h5'){
		
		if(empty($url)){
			$url = array('controller' => 'subscripciones', 'action' => 'index');
		}
		
	    $formularioSubscripcion = '';
	    $formularioSubscripcion .= '<div id="newsletter">';
	    $formularioSubscripcion .= sprintf('<%s>%s</%s>', $encabezado, $tituloFormulario, $encabezado);
	    //$formularioSubscripcion .= $this->Form->create(null, array('url' => array('controller' => 'subscripciones', 'action' => 'index')));
	    $formularioSubscripcion .= $this->Form->create(null, array('url' => array('controller' => 'publico', 'action' => 'suscribirse')));
	    $formularioSubscripcion .= '<fieldset>';
	    $formularioSubscripcion .= $this->Form->input('correo', array('label' => false, 'div' => false, 'class' => 'text'));
	    $formularioSubscripcion .= $this->Form->end(array('class' => 'submit', 'div' => false, 'label' => ''));
	    $formularioSubscripcion .= '</fieldset>';
	    $formularioSubscripcion .= '<div class="clear"></div>';
	    $formularioSubscripcion .= '</div>';
		
		return $formularioSubscripcion;
	}
	
	/**@name footer
	 * @desc Intenta generar el pie de pagina. 
	 * @param array $elementos: un arreglo con los elementos a ser procesados. Estos elementos son las secciones
	 * y las redes sociales. 
	 * @return string $copy: Copyright (c) Orico Consulting. El nombre de la compañía.
	 * @version 0.0.2 Rev 20110717-1505 
	 * */
	public function footer($elementos = array(), $copy = 'Copyright (c) Orico Consulting'){
		
		$footerProcesado = '';
		
		if(array_key_exists('redes_sociales', $elementos)){
			$footerProcesado .= '<p id="right">';
			foreach ($elementos['redes_sociales'] as $indice => $redSocial){
				$footerProcesado .= $this->Html->link($redSocial['RedesSocial']['red'], $redSocial['RedesSocial']['url_perfil']);
			}
			unset($indice);
			$footerProcesado .= '</p>';
		}
		
		if(array_key_exists('secciones', $elementos)){
			$footerProcesado .= '<p>';
			foreach ($elementos['secciones'] as $indice => $seccion){
				$footerProcesado .= $this->Html->link($seccion['Seccion']['seccion'], array('controller' => '', 'action' => 'seccion', $seccion['Seccion']['slug']));
			}
			$footerProcesado .= '</p>';
		}
		
		$footerProcesado .= sprintf('<p id="copy">%s, %s</p>', $copy, $elementos['year_copyright']);
		
		return $footerProcesado; 
		
	}
	
    /**@name blogs
	 * @desc Intenta el HTML de la sección blog. 
	 * @param array $blogs: un arreglo con los elementos a ser procesados. Estos elementos son los blogs registrados
	 * en la base de datos. 
	 * @return string $blogsProcesados: Es el HTML de los blogs procesados.
	 * @version 0.0.1 Rev 20110820-0840 
	 * */
	public function blogs($blogs = array(), $paginarSiSonMasDe = 5){
			$blogPost = '<div class="blog-post">';
			$blogDate = '<p class="blog-date"><span>%s</span><br />%s</p>';
			$blogBody = '<div class="blog-body">';
			$blogTitle = '<h3>%s</h3>';
			$blogContent = '<p>%s%s</p>';
			$blogDivClose = '</div>';
			$blogClear = '<div class="clear"></div>';
			$blogsProcesados = '';
			
			foreach($blogs as $blog){
				$blogsProcesados .= '<div class="blog-post">';
				$fecha = $this->extraerFragmentoFecha($blog['Contenido']['publicado_en']);
				$blogsProcesados .= sprintf($blogDate, $fecha[2], $this->meses[$fecha[1]]);
				$blogsProcesados .= $blogBody; 
				$blogsProcesados .= sprintf($blogTitle, $this->Html->link($blog['Contenido']['titulo'], array('controller' => '', 'action' => 'mostrar', 'blog', $blog['Contenido']['id'], $blog['Contenido']['slug'])));
				$blogsProcesados .= sprintf($blogContent, $this->soloMostrar($blog['Contenido']['contenido']), $this->Html->link("»", array('controller' => '', 'action' => 'mostrar', 'blog', $blog['Contenido']['id'], $blog['Contenido']['slug'])));
				$blogsProcesados .= $blogDivClose;
				$blogsProcesados .= $blogClear;
				$blogsProcesados .= $blogDivClose;
			}
			
			return $blogsProcesados; 
	}
	
	/**@name extraerFragmentoFecha
	 * @desc Intenta extraer un formato una fecha. 
	 * @param array $fecha: Un string con la fecha actual
	 * @return array: Un arreglo con los campos.
	 * @version 0.0.1 Rev 20110820-0840 
	 * */
	 public function extraerFragmentoFecha($fecha = null){
	 	if(is_null($fecha))$fecha=date("Y-m-d");
	 	return is_array(explode('-', $fecha))?explode('-', $fecha):false; 
	 }

	/**@name links
	 * @desc Intenta imprimir los links marcados como publicos o amigables 
	 * @param array $links: Un arreglo con los links desde la base de datos
	 * @param string $titulo: El titulo de este modulo de links
	 * @return string $linksProcesados: Un string con las etiquetas HTML necesarias 
	 * para formar la apariencia de los links amigables.
	 * @version 0.0.1 Rev 20110901-0832 
	 * */
	 public function links($links = array(), $titulo = 'Links Importantes'){
	 	$ulSideMenu = '<ul class="side-menu">';
	 	$ulSideMenuClose = '</ul>';
	 	$titulo = sprintf('<h2>%s</h2>', $titulo);
	 	$linksProcesados = '';
	 	
	 	$linksProcesados .= $titulo;
	 	$linksProcesados .= $ulSideMenu;
	 	foreach($links as $link){
	 			$linkReferido = $this->Html->link($link['Link']['titulo'], $link['Link']['href_url'], array('target' => '_blank', 'title' => $link['Link']['texto_alternativo']));
			 	$linksProcesados .= sprintf('<li>%s</li>', $linkReferido);
	 	}
	 	$linksProcesados .= $ulSideMenuClose;
	 	return $linksProcesados;
	 }

   /** @name activo
	 * @desc Intenta imprimir imagenes para campos booleanos en lugar de Si o No. 
	 * @param string $texto: El texto a evaluar
	 * @return string $imagen: Imagen ativa o no 
	 * @version 0.0.1 Rev 20110901-1102 
	 * */
	 public function activo($activo = 0){
	 		return $activo == 1 ? $this->Html->image('test-pass-icon.png') : "No";
	 }

}

?>
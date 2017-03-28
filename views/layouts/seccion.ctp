<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<?php echo $this->Html->charset(); ?>
	<!-- SEO -->
	<?php echo $this->Seo->metas($contenido); ?>
	<!-- SEO -->
	
	<link href="favicon.ico" type="image/x-icon" rel="icon" />
	
	<title><?php echo isset($contenido['title'])?$contenido['title']:'Bienvenidos a Orico Consulting*'; ?> | <?php echo isset($contenido['title_description'])?$contenido['title_description']:'Firma de consultor&iacute;a, para trabajos especializados a nivel de Rep&uacute;blica Dominicana, contabilidad, finanzas y outsourcing empresarial en servicios relacionados*'; ?></title>
	<?php echo $this->Javascript->link(array('jquery-1.4.1.min', 'slideshow', 'cufon-yui', 'Sansation.font')); ?>
	<script type="text/javascript">
		Cufon.replace('h1,h2,h3,h4,h5,#top,#menu,#copy,.blog-date');
	</script>
	<?php echo $this->Html->css(array('main', 'red')); ?>
	<!-- <link rel="stylesheet" href="css/main.css" type="text/css" />
	<link rel="stylesheet" href="css/red.css" type="text/css" />  -->
</head>
<body>
	<div id="content">
		
		<p id="top"><?php echo $this->Html->link(__('+ CONTACTO', true), array('controller' => 'publico', 'action' => 'contacto')); ?></p>
		
		<h1>
			<?php echo $this->Html->image('orico.logo.med.png', array('alt' => 'Logo de Orico Consulting')); ?>
		</h1>
		
		<!-- INICIO: MENU -->
		<?php echo $this->Orico->menus($contenido['menus']); ?>
		<!-- FINAL: MENU -->
		
		<!-- INICIO: TITULO DE LA SECCION -->
		<div id="inner-pitch">
			<div class="overlay">				
				<h2><?php echo isset($title_for_layout) ? $title_for_layout:"*"; ?></h2>
			</div>
			<div class="clear"></div>
		</div>
		<!-- FINAL: TITULO DE LA SECCION -->
		
		<!-- INICIO: CONTENEDOR PRINCIPAL -->
		<!-- GENERADO POR EL ORICO: CMS -->
		<?php echo $content_for_layout; ?>
		<!-- GENERADO POR EL ORICO: CMS -->
		<!-- FINAL: CONTENEDOR PRINCIPAL -->
		
		<!-- INICIO: CONTENEDOR LATERAL DERECHO -->
		<div id="side">
			<h4 class="transparent"><?php __('Que hay de nuevo?'); ?></h4>
			<!-- INICIO: MODULO DE NOTICIAS  -->
				<?php echo $this->Orico->noticias($contenido['noticias']); ?>
			<!-- FINAL: MODULO DE NOTICIAS  -->
			<br/>
			<!-- INICIO: LINKS -->
			<?php echo $this->Orico->links($contenido['links']); ?>
			<!-- INICIO: LINKS -->
			
			<!-- INICIO: MODULO DE SUBSCRIPCION  -->
			<div id="newsletter">
				<h5><?php __('Recibe actualizaciones y suscripciones'); ?></h5>
					<?php echo $this->Form->create('Subscripcion', array('url' => array('controller' => 'publico', 'action' => 'suscribirse'))); ?>
					<fieldset>
						<?php echo $this->Form->input('correo', array('label' => false, 'div' => false, 'class' => 'text')); ?>
						<?php echo $this->Form->end(array('class' => 'submit', 'div' => false, 'label' => '')); ?>
					</fieldset>
				
				
			</div>
			<!-- INICIO: MODULO DE SUBSCRIPCION  -->
		</div>
		<!-- FINAL: CONTENEDOR LATERAL DERECHO -->
		<div class="clear"></div>
		<br />
		<div id="footer">
			
			
			<!-- INICIO: PIE DE PAGINA/COPYRIGHT -->
			<?php echo $this->Orico->footer($contenido); ?>
			<!-- FINAL: PIE DE PAGINA/COPYRIGHT -->
		</div>
	</div>
</body>
</html>
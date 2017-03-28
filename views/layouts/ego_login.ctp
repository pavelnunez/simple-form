<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr" class="js">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  	<title>EGO Vanity Store | CLUB: Interfaz Administrativa</title>
	<link href="favicon.ico" type="image/x-icon" rel="icon" />
  
     <?php echo $this->Html->css('ego.login', null, array('media' => 'all')); ?>
	  
	  <!--[if IE]>
	  <?php echo $this->Html->css('fuie', 'stylesheet', array('media' => 'all')); ?> 
	  <![endif]-->
	  <!-- end styles -->

  
</head>

<body id="page-auth-login" class="not-front not-logged-in page-auth no-sidebars shift-processed sortable-leave-processed builder-leave-processed">

  <div id="container">
    
    <div id="masthead">
      <div class="inner-center">
                  <h2><a id="strutta-logo" target="_blank" href="http://www.solucionesorico.com/" title="Especialistas en consultoria, contabilidad, auditoría, contabilidad fiscal y mucho más." class="strutta-logo-processed"><span>Orico Consulting</span></a></h2>
                		<div id="logo-bubble-container"><a href="http://www.solucionesorico.com/" id="logo-download-bubble"><strong id="need-logo">Need our logo?</strong> Download it from our <strong>Media Kit</strong></a></div>
                  </div>
    </div>
    <!-- end masthead -->
    
        
    <div id="header">
      <div id="header-inner">
        <div class="inner-center">
                      <h1>Inicio de Sesión</h1>
                            </div>
      </div>
    </div>
    <!-- end header -->
    
        
    <div id="content">
    
            
      <div class="inner-center clear-block">
        
        <div id="center" class="column">
          
                    
                    
                    
                    
          <div id="auth-form">
    
			  <div class="form">
			  	<!-- INICIO: FORMULARIO DE INICIO DE SESION -->
			  		<?php
			  			echo $this->Session->flash();
			  			echo $this->Session->flash('auth'); 
			  			echo $content_for_layout;
			  			 
			  		?>
			  	<!-- FINAL: FORMULARIO DE INICIO DE SESION -->
			  </div>
		</div>          
       </div>
        <!-- end center -->
      </div>
      
    </div>
    <!-- end content -->
  </div>
  <!-- end container -->
  <div class="dump"><?php echo $this->element('sql_dump'); ?></div>
	</body>
</html>
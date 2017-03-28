<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8;charset=utf-8" />
<title>EGO CLUB: SUSCRIPCION</title>
<style type="text/css">
body {
	background-color: #000;
}
.texto {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	color: #FFF;
	text-align: justify;
}
.titulo1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	color: #FFF;
}

/** Avisos y Errores **/
div.message {
	clear: both;
	color: #fff;
	font-size: 140%;
	font-weight: bold;
	margin: 0 0 1em 0;
	/*background: #c73e14;*/
	background: #757575;
	padding: 5px;
}
div.error-message {
	clear: both;
	color: #fff;
	font-weight: bold;
	background: #c73e14;
}
p.error {
	background-color: #e32;
	color: #fff;
	font-family: Courier, monospace;
	font-size: 120%;
	line-height: 140%;
	padding: 0.8em;
	margin: 1em 0;
}
p.error em {
	color: #000;
	font-weight: normal;
	line-height: 140%;
}
.notice {
	background: #ffcc00;
	color: #000;
	display: block;
	font-family: Courier, monospace;
	font-size: 120%;
	line-height: 140%;
	padding: 0.8em;
	margin: 1em 0;
}
.success {
	background: green;
	color: #fff;
}

</style>
</head>

<body>
<!-- INICIO: FORMULARIO DE REGISTRO -->
			  		<?php
			  			echo $this->Session->flash('auth'); 
			  			echo $content_for_layout;
			  		?>
<!-- FINAL: FORMULARIO DE REGISTRO -->
<p>&nbsp;</p>
</body>
</html>
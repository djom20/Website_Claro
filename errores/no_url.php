<?php
	ob_start( 'ob_gzhandler' );
	header('Vary: Accept-Encoding');
	$cache_expire = 60*60*24*365;
	header("Pragma: public");
	header("Cache-Control: max-age=".$cache_expire);
	header('Expires: ' . gmdate('D, d M Y H:i:s', time()+$cache_expire) . ' GMT');
?>
<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta http-equiv="window-target" content="_top" >
	<meta http-equiv="expires" content="Sat, 4 Feb 2012 16:05:00 GMT" > <!-- FECHA EN QUE EXPIRA LA WEB -->
	<meta http-equiv="refresh" content="15;URL=../colombia/" > <!-- TIEMPO EN LA CUAL SE RECARGARA LA PAGINA A ESTA -->
	<!--
	<META HTTP-EQUIV="Cache-Control" CONTENT="no-cache"> 
	-->

	<meta name="robots" content="index">
	<META name="robots" content="NOARCHIVE"> <!-- NO VER LA WEB EN EL CACHE DE GOOGLE -->
	<meta name="distribution" content="global"> <!-- A QUIEN Y QUIEN NO SE LE MOSTRARA EL CONTENIDO -->
	<meta name="rating" content="general"> <!-- TIPO DE CONTENIDO PARA LO USUARIOS -->
	<meta name="author" content="">
	<meta name="copyright" content="&copy; 2012 Altivia Corp.">
	<meta name="language" content="es">
	<meta name="date" content="1994-11-06T08:49:37+00:00">
	<meta name="revisit" content="15 days">
	<meta name="revisit-after" content="15 days"> <!-- INDICA AL MOTOR DE BUSQUEDA CADA CUANTO DEBE REVISAR NUESTRO SITIO -->
	<meta name="description" content="Articulos, tutoriales y noticias acerca de PHP, ActionScript, WordPress. " />
	<meta name="keywords" content="wordpress, php, actionscript, google, adsense, flash, thickbox" />

	<link rel="shortcut icon" href="../themes/ico/fav.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="../themes/css/bootstrap-responsive.min.css" media="all">
	<link rel="stylesheet" type="text/css" href="../themes/css/bootstrap.min.css" media="all">
	<link rel="stylesheet" type="text/css" href="../themes/css/stylesheet.css" media="all">
	<title>Not found on this server</title>
</head>
<body>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div id="error" class="alert alert-error" style="height: 15em; width: 25em; margin-left: 35%; margin-top: -4%;">
		<a class="close">&times;</a>
		<div>
			<img src="../themes/img/logo.jpg" width="120" height="20" />
			<br/>
			<br/>
			<?php 
				if(isset($_REQUEST['error'])){
					echo '<p><strong>Thats an error.</strong></p>';
					echo '<p>'.$_REQUEST['error'].'</p>';
					echo '<div class="progress progress-danger progress-striped active">';
					echo '<div class="bar" style="width: 100%;"></div></div>';
				}else{
					echo '<p><strong>404. Thats an error.</strong></p>';
					echo '<p>The requested <span class="label label-important">URL</span> was not found on this server. Thats all we know. </p>';
					echo '<div class="progress progress-danger progress-striped active">';
					echo '<div class="bar" style="width: 100%;"></div></div>';
				}
			?>
		</div>		
	</div>
</body>
</html>
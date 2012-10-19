<?php include('clases/conexion.php'); ?>
<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
	<meta name="googlebot" content="index,follow"/>
    <meta name="author" content="Ing. Jonathan Olier Miranda"/>
    <link rel="shortcut icon" type="image/x-ico" href="themes/ico/fav.ico" />
	<link rel="stylesheet" type="text/css" href="themes/css/bootstrap-responsive.min.css" media="all">
	<link rel="stylesheet" type="text/css" href="themes/css/bootstrap.min.css" media="all">
	<link rel="stylesheet" type="text/css" href="themes/css/stylesheet.css" media="all">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>Claro International</title>
</head>
<body id="bodypaises" class="container-fluid" data-spy="scroll">
	<div class="row-fluid">
		<div id="paises">
			<div id="bienvenido">Bienvenido</div>
			<br/>
			<form id="formpaises" action="colombia/" method="POST">
				<?php if(file_exists('consultas/paises.php')){ include('consultas/paises.php'); } ?>
				<br/>
				<input type="submit" value="Seleccionar" class="btn btn-danger">
				<br/>
				<br/>
				<br/>
			</form>
			<p>Todos los derechos reservados por Claro 2012.</p>
		</div>
	</div>
</body>
</html>
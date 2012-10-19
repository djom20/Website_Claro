<?php
	session_start();
	if(!isset($_SESSION['userid'])){ header('location: ../'); }
?>
<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
	<meta name="googlebot" content="index,follow"/>
    <meta name="author" content="Ing. Jonathan Olier Miranda"/>
    <link rel="shortcut icon" type="image/x-ico" href="../themes/ico/fav.ico" />
	<link rel="stylesheet" type="text/css" href="../themes/css/bootstrap-responsive.min.css" media="all">
	<link rel="stylesheet" type="text/css" href="../themes/css/bootstrap.min.css" media="all">
	<link rel="stylesheet" type="text/css" href="../themes/css/stylesheet.css" media="all">
	<link rel="stylesheet" type="text/css" href="../themes/css/usuarios.css" media="all">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>Claro <?php if(isset($_REQUEST['ubicacion'])){ echo $_SESSION['ubicacion']; } ?></title>
</head>
<body class="container-fluid" data-spy="scroll">
	<div class="row-fluid">
		<nav class="span3"><?php if(file_exists('../mod/nav_user.php')){ include('../mod/nav_user.php'); } ?></nav>
		<div class="span9">
			<?php if(file_exists('../mod/home.php')){ include('../mod/home.php'); } ?>
			<?php if(file_exists('../mod/datosusuario.php')){ include('../mod/datosusuario.php'); } ?>
			<?php if(file_exists('../mod/compra.php')){ include('../mod/compra.php'); } ?>
			<?php if(file_exists('../mod2/facturas.php')){ include('../mod/facturas.php'); } ?>
			<?php if(file_exists('../mod/contacto.php')){ include('../mod/contacto.php'); } ?>
		</div>
	</div>
	<?php if (file_exists('../mod/javascripts.php')){ include('../mod/javascripts.php'); } ?>
</body>
</html>
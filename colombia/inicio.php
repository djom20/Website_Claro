<?php 
	if(isset($_REQUEST['ubicacion'])){
		$sql='SELECT nombre FROM paises WHERE id ='.$_REQUEST['ubicacion'];
		$_SESSION['id_ubicacion'] = $_REQUEST['ubicacion'];
		include('../clases/consultas.php');
		if($result > 0){
			if($row=mysql_fetch_array($result)){
				$_SESSION['ubicacion'] = $row['nombre'];
			}
			mysql_free_result($result);
		}
	}

	if(!isset($_SESSION['ubicacion'])){ header('location: ../'); }
	if (isset($_SESSION['reg1'])) {
		echo '<script type="text/javascript" src="../themes/js/mostrar_seccion.js"></script>';
		unset($_SESSION['reg1']);
	}
?>
<!DOCTYPE HTML>
<html lang="es-CO">
<head>
	<meta charset="utf-8">
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
	<meta name="googlebot" content="index,follow"/>
    <meta name="author" content="Ing. Norman Henriquez Rosales"/>
    <link rel="shortcut icon" type="image/x-ico" href="../themes/ico/fav.ico" />
	<link rel="stylesheet" type="text/css" href="../themes/css/bootstrap-responsive.min.css" media="all">
	<link rel="stylesheet" type="text/css" href="../themes/css/bootstrap.min.css" media="all">
	<link rel="stylesheet" type="text/css" href="../themes/css/stylesheet.css?id=<?php echo date('s'); ?>" media="all">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>Claro <?php if(isset($_SESSION['ubicacion'])){ echo $_SESSION['ubicacion']; } ?></title>
</head>
<body class="container-fluid" data-spy="scroll">
	<div class="row-fluid">
		<nav id="menu" class="span3"><?php if(file_exists('../mod/nav.php')){ include('../mod/nav.php'); } ?></nav>
		<div class="span9">
			<?php if(file_exists('../mod/home.php')){ include('../mod/home.php'); } ?>
			<?php if(file_exists('../mod/compras.php')){ include('../mod/compras.php'); } ?>
			<?php if(file_exists('../mod/publicidad.php')){ include('../mod/publicidad.php'); } ?>
			<?php if(file_exists('../mod/movil.php')){ include('../mod/movil.php'); } ?>
			<?php if(file_exists('../mod/videos.php')){ include('../mod/videos.php'); } ?>
			<?php if(file_exists('../mod/contacto.php')){ include('../mod/contacto.php'); } ?>
		</div>
	</div>
	<?php if (file_exists('../mod/javascripts.php')){ include('../mod/javascripts.php'); } ?>
</body>
</html>
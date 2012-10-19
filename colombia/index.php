<?php 
	session_start();
	if(isset($_REQUEST['ubicacion'])){
		$sql='SELECT nombre FROM pasies WHERE id ='.$_REQUEST['ubicacion'];
		$id_ubi = $_REQUEST['ubicacion'];
		include('../clases/consultas.php');
		if($result > 0){
			if($row=mysql_fetch_array($result)){
				$_SESSION['ubicacion'] = $row['nombre'];
				$_SESSION['id_ubicacion'] = $id_ubi;
			}
		}
	}

	if(!isset($_SESSION['ubicacion'])){ header('location: ../'); }
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
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>Claro <?php if(isset($_REQUEST['ubicacion'])){ echo $_SESSION['ubicacion']; } ?></title>
</head>
<body class="container-fluid" data-spy="scroll">
	<div class="row-fluid">
		<nav class="span3"><?php if(file_exists('../mod/nav.php')){ include('../mod/nav.php'); } ?></nav>
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
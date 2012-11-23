	<script type="text/javascript" src="../themes/js/jquery-1.7.2.min.js"></script>
<?php 
	session_start();
	if(!isset($_SESSION['userid'])){ header('location: ../colombia/'); }


	if (isset($_SESSION['reg1'])) {
		echo '<script type="text/javascript" src="../themes/js/admin/mostrar_visitantes.js"></script>';
		unset($_SESSION['reg1']);
	}
	if (isset($_SESSION['reg2'])) {
		echo '<script type="text/javascript" src="../themes/js/admin/mostrar_usuarios.js"></script>';
		unset($_SESSION['reg2']);
	}
	if (isset($_SESSION['reg3'])) {
		echo '<script type="text/javascript" src="../themes/js/admin/mostrar_tipos.js"></script>';
		unset($_SESSION['reg3']);
	}
	if (isset($_SESSION['reg4'])) {
		echo '<script type="text/javascript" src="../themes/js/admin/mostrar_cotizaciones.js"></script>';
		unset($_SESSION['reg4']);
	}
	if (isset($_SESSION['reg5'])) {
		echo '<script type="text/javascript" src="../themes/js/admin/mostrar_paquetes.js"></script>';
		unset($_SESSION['reg5']);
	}
	if (isset($_SESSION['reg6'])) {
		echo '<script type="text/javascript" src="../themes/js/admin/mostrar_servicios.js"></script>';
		unset($_SESSION['reg6']);
	}
	if (isset($_SESSION['reg7'])) {
		echo '<script type="text/javascript" src="../themes/js/admin/mostrar_empresas.js"></script>';
		unset($_SESSION['reg7']);
	}
	if (isset($_SESSION['reg8'])) {
		echo '<script type="text/javascript" src="../themes/js/admin/mostrar_asignaciones.js"></script>';
		unset($_SESSION['reg8']);
	}
?>
<html lang="es-CO">
	<head>
		<title>Admin 2.0</title>
		<meta charset="utf-8">
	    <meta name="keywords" content=""/>
	    <meta name="description" content=""/>
		<meta name="googlebot" content="index,follow"/>
	    <meta name="author" content="Ing. Norman Henriquez Rosales"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
	    <link rel="shortcut icon" type="image/x-ico" href="../themes/ico/fav.ico" />
		<link rel="stylesheet" href="../themes/css/admin/stylesheet.css?id=<?php echo date('s'); ?>">
		<link rel="stylesheet" href="../themes/css/bootstrap.min.css">
		<link rel="stylesheet" href="../themes/css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="../themes/css/admin/fullcalendar.css">	
		<link rel="stylesheet" href="../themes/css/admin/unicorn.main.css?id=<?php echo date('s'); ?>">
		<link rel="stylesheet" href="../themes/css/admin/jquery.gritter.css">
		<link rel="stylesheet" href="../themes/css/admin/unicorn.grey.css" class="skin-color">
	</head>
	<body>
		<div id="header">
			<h1><a href="./">Admin 2.0</a></h1>
		</div>
		<?php if(file_exists('../mod/admin/menu.php')){ include('../mod/admin/menu.php'); } ?>
		<?php if(file_exists('../mod/admin/inicio.php')){ include('../mod/admin/inicio.php'); } ?>
		<?php if(file_exists('../mod/admin/tipos.php')){ include('../mod/admin/tipos.php'); } ?>
		<?php if(file_exists('../mod/admin/visitantes.php')){ include('../mod/admin/visitantes.php'); } ?>
		<?php if(file_exists('../mod/admin/usuarios.php')){ include('../mod/admin/usuarios.php'); } ?>
		<?php if(file_exists('../mod/admin/empresas.php')){ include('../mod/admin/empresas.php'); } ?>
		<?php if(file_exists('../mod/admin/compras.php')){ include('../mod/admin/compras.php'); } ?>
		<?php if(file_exists('../mod/admin/cotizaciones.php')){ include('../mod/admin/cotizaciones.php'); } ?>
		<?php if(file_exists('../mod/admin/paquetes.php')){ include('../mod/admin/paquetes.php'); } ?>
		<?php if(file_exists('../mod/admin/servicios.php')){ include('../mod/admin/servicios.php'); } ?>
		<?php if(file_exists('../mod/admin/asignaciones.php')){ include('../mod/admin/asignaciones.php'); } ?>
		<?php if(file_exists('../mod/admin/asignar.php')){ include('../mod/admin/asignar.php'); } ?>
		<?php if(file_exists('../mod/admin/seguridad.php')){ include('../mod/admin/seguridad.php'); } ?>
		
		<?php if(file_exists('../mod/admin/usuarios_editar.php')){ include('../mod/admin/usuarios_editar.php'); } ?>
		<?php if(file_exists('../mod/admin/empresas_editar.php')){ include('../mod/admin/empresas_editar.php'); } ?>
		<?php if(file_exists('../mod/admin/tipos_editar.php')){ include('../mod/admin/tipos_editar.php'); } ?>
		<?php if(file_exists('../mod/admin/paquetes_editar.php')){ include('../mod/admin/paquetes_editar.php'); } ?>
		<?php if(file_exists('../mod/admin/servicios_editar.php')){ include('../mod/admin/servicios_editar.php'); } ?>

		<?php if(file_exists('../mod/admin/usuarios_new.php')){ include('../mod/admin/usuarios_new.php'); } ?>
		<?php if(file_exists('../mod/admin/empresas_new.php')){ include('../mod/admin/empresas_new.php'); } ?>
		<?php if(file_exists('../mod/admin/tipos_new.php')){ include('../mod/admin/tipos_new.php'); } ?>
		<?php if(file_exists('../mod/admin/paquetes_new.php')){ include('../mod/admin/paquetes_new.php'); } ?>
		<?php if(file_exists('../mod/admin/servicios_new.php')){ include('../mod/admin/servicios_new.php'); } ?>

		<div id="gritter-notice-wrapper">
			<div id="gritter-item-1" class="gritter-item-wrapper hover" style="">
				<div class="gritter-top"></div>
				<div class="gritter-item">
					<div class="gritter-close" style="display: block; "></div>
					<img src="../themes/img/admin/32/envelope.png" class="gritter-image">
					<div class="gritter-with-image">
						<span class="gritter-title">
							Bienvenido <?php if (isset($_SESSION['user'])) { echo $_SESSION['user']; } ?>
						</span>
						<p>Tú eres el administrador de este sitio web, por lo tanto debes pendiente de todas las actualizaciones del sitio.</p>
					</div>
					<div style="clear:both"></div>
				</div>
				<div class="gritter-bottom"></div>
			</div>
		</div>
        <script src="../themes/js/admin/jquery.js"></script>
        <script src="../themes/js/bootstrap.min.js"></script>
        <script src="../themes/js/admin/excanvas.min.js"></script>
        <script src="../themes/js/admin/fullcalendar.min.js"></script>
        <script src="../themes/js/admin/jquery.gritter.min.js"></script>
        <script src="../themes/js/admin/jquery.peity.min.js"></script>
        <script src="../themes/js/admin/jquery.ui.custom.js"></script>
        <script src="../themes/js/admin/unicorn.dashboard.js"></script>
        <script src="../themes/js/admin/unicorn.interface.js"></script>
        <script src="../themes/js/admin/unicorn.js"></script>
        <script src="../themes/js/disable select text.js"></script>
        <script type="text/javascript">
        	$('.toggleform').tooltip('toggle');
        </script>
	</body>
</html>
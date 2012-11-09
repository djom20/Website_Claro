<?php
	session_start();
	if (isset($_REQUEST['id'])) {
		$sql='UPDATE `cotizaciones` SET `estado`= 0 WHERE `usuario` = '.$_SESSION['userid'].' AND `id`= '.$_REQUEST['id'].' AND `estado` = 1';
		include('../clases/consultas.php');
		$_SESSION['reg']=1;
		header('location: ../colombia');
	}
?>
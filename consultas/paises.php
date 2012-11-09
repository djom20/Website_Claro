<?php
	$sql='SELECT id, nombre FROM paises WHERE id > 0 AND estado = 1';
	include('clases/sql.php');
	if($result > 0) {
		while($row=mysql_fetch_array($result)){
			echo '<input type="radio" name="ubicacion" value="'.$row['id'].'"> '.$row['nombre'].'<br/>';
		}
		mysql_free_result($result);
	}
?>
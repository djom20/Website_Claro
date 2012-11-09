<?php
    try {
    	$result=mysql_query($sql,$link);
	}
	catch (Exception $e){
		header('location: errores/no_url.php?error=<br>No se pudo ejecutar la consulta.<br>'.mysql_error($link));
	    mysql_close($link);
	    return false;
	}  
?>
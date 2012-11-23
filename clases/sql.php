<?php
    try {
    	$result=mysql_query($sql,$link) or die("Error: ".mysql_error().'<br>'.$sql);
	}
	catch (Exception $e){
		header('location: errores/no_url.php?error=<br>No se pudo ejecutar la consulta.<br>'.mysql_error($link));
	    mysql_close($link);
	    return false;
	}  
?>
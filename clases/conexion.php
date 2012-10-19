<?php
	$link = mysql_connect("127.0.0.1","root",""); 
	if(!$link){ 
		$my_error='Conexion NO exitosa.<br/>'.mysql_error();
		header('location: ../errores/no_url.php?error='.$my_error);
	}else{ mysql_select_db("claro",$link); }

/* ip: 50.116.92.235  190.249.79.129 */
/*
	$link = mysql_connect("on-creativity.com","oncreati",""); 
	if(!$link){ 
		echo "Conexion NO exitosa. ";
		echo mysql_error();
	}else{
		mysql_select_db("oncreati_altiviaot",$link);
	}
*/

/*
	$link = mysql_connect("probandoando.com","probando_web","3014442072"); 
	if(!$link){ 
		echo "Conexion NO exitosa. ";
		echo mysql_error();
	}else{
		mysql_select_db("probando_ingweb",$link);
	}
*/
?>
<?php
	$result=mysql_query($sql,$link);
    $my_error = mysql_error($link);
    mysql_close();
    /*if(!empty($my_error)){ header('location: ../errores/no_url.php?error='.$my_error()); }*/
?>
<?php
	if (isset($_REQUEST['id'])) {
		session_start();

		$sql='SELECT `factura` FROM `detalles_factura` WHERE `compra` = '.$_REQUEST['id'];
		include('../clases/consultas.php');
		if($result > 0){
			if($row=mysql_fetch_array($result)){ $facturaid = $row['factura']; }
			mysql_free_result($result);
		}else{ echo 'El detalle de factura no Existe.'; }

		$sql='SELECT CONCAT(`nombre`," ",`apellido`," ", `apellido2`) as nombre,`correo`,`direccion` FROM `persona` WHERE `usuario` = '.$_SESSION['userid'];
		include('../clases/sql.php');
		if($result > 0){
			if($row=mysql_fetch_array($result)){ 
				$user_name = $row['nombre'];
				$user_correo = $row['correo'];
				$user_dir = $row['direccion'];
			}
			mysql_free_result($result);
		}else{ echo 'La persona no Existe.'; }

		$sql='SELECT `paquetes`.`id`,`paquetes`.`nombre`, `paquetes`.`precio` FROM paquetes, compras, detalles_compra WHERE ((`compras`.`id` = "'.$_REQUEST['id'].'") AND (`compras`.`usuario` = "'.$_SESSION['userid'].'") AND (`detalles_compra`.`compra` = `compras`.`id`) AND (`detalles_compra`.`paquete` = `paquetes`.`id`)) order by `paquetes`.`id` asc';
		include('../clases/consultas.php');
		$body='';
		if($result > 0){
			while($row=mysql_fetch_array($result)){
				$sql2='SELECT `servicios`.`nombre`, `servicios`.`descripcion`, `servicios`.`precio` FROM servicios, paquetes_servicios WHERE ((`servicios`.`estado` =1) AND (`paquetes_servicios`.`servicio` = `servicios`.`id`) AND (`paquetes_servicios`.`paquete` ='.$row['id'].'))';
				$result2 = mysql_query($sql2,$link);
				$my_error = mysql_error($link);
				$limit = mysql_num_rows($result2)+1;
				$body .= '<tr><td rowspan="'.$limit.'">'.$row['nombre'].'</td>';
				if($result2 > 0){
					while($row2 = mysql_fetch_array($result2)){
						$body .= '<td>'.$row2['nombre'].'</td><td>'.$row2['descripcion'].'</td><td align="right">$'.$row2['precio'].'</td></tr><tr>';
					}
					mysql_free_result($result2);
				}
				$body .= '<td colspan="2"><strong>Subtotal</strong></td>';
				$body .= '<td align="right"><strong>$'.$row['precio'].'</strong></td></tr>';
			}
			mysql_free_result($result);
		}else{ echo 'No existen paquetes.'; }

		$sql='SELECT `fecha`,`total` FROM `compras` WHERE `usuario` = "'.$_SESSION['userid'].'" AND `id` = '.$_REQUEST['id'];
		include('../clases/sql.php');
		if($result > 0){
			if($row=mysql_fetch_array($result)){ 
				$compra_fecha = $row['fecha'];
				$compra_total = $row['total'];
			}
			mysql_free_result($result);
		}else{ echo 'La compra no Existe.'; }

		$fechaven = date('Y-m-d',strtotime('+30 day',strtotime($compra_fecha)));

		$head ='<table border="1"><tbody>
	    <tr><td colspan="4" align="center"><h1>Claro S.A.</h1></td></tr>
	    <tr><td colspan="4"><strong>Factura #'.$facturaid.'</strong></td></tr>
	    <tr><td colspan="4"><strong>Nit: 22413641-4</strong></td></tr>
	    <tr><td colspan="4"><strong>Direccion: Cra 42h # 84 - 101</strong></td></tr>
	    <tr><td colspan="4">&nbsp;</td></tr>
	    <tr><td>Nombre:</td><td colspan="3">'.$user_name.'</td></tr>
	    <tr><td>Fecha:</td><td colspan="3">'.$compra_fecha.'</td></tr>
	    <tr><td>Fecha ven:</td><td colspan="3">'.$fechaven.'</td></tr>
	    <tr><td>Email:</td><td colspan="3">'.$user_correo.'</td></tr>
	    <tr><td>Direccion:</td><td colspan="3">'.$user_dir.'</td></tr>
	    <tr><td>Ubicacion:</td><td colspan="3">'.$_SESSION['ubicacion'].'</td></tr>
	    <tr><td colspan="4">&nbsp;</td></tr>
	    <tr><td colspan="4"><strong>Detalle de la compra</strong></td></tr>
	    <tr><td><strong>Paquete</strong></td><td><strong>Servicio</strong></td><td><strong>Descripcion del Servicio</strong></td><td><strong>Precio del servicio</strong></td></tr>';

	    $footer='<tr><td colspan="4">&nbsp;</td></tr>
	    <tr><td colspan="3"><b>Total:</b></td><td align="right"><b>$'.$compra_total.'</b></td></tr>
	    </tbody></table>';

	    $html=$head.$body.$footer;		       
        include('../clases/pdf.php');
    }
?>

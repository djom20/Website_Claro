<?php
	session_start();
	if (isset($_REQUEST['id'])) {
		require_once("../lib/dompdf/dompdf_config.inc.php");

		$sql='SELECT `id` FROM `detalles_factura` WHERE `compra` = '.$_REQUEST['id'];
		include('../clases/consultas.php');
		if($result > 0){
			if($row=mysql_fetch_array($result)){ $datalle_facturaid = $row['id']; }
			mysql_free_result($result);
		}else{ echo 'La factura no Existe.'; }


		$sql='SELECT CONCAT(`nombre`,' ',`apellido`,' ', `apellido2`) as nombre,`correo`,`direccion` FROM `persona` WHERE `usuario` = '.$_SESSION['userid'];
		include('../clases/sql.php');
		if($result > 0){
			if($row=mysql_fetch_array($result)){ 
				$user_name = $row['nombre'];
				$user_correo = $row['correo'];
				$user_dir = $row['direcion'];
			}
			mysql_free_result($result);
		}else{ echo 'La factura no Existe.'; }



		$sql='SELECT `id`,`nombre`,`precio` FROM `paquetes` WHERE `estado`=1';
		include('../clases/consultas.php');
		if($result > 0){
			while($row=mysql_fetch_array($result)){
				$sql2='SELECT `servicios`.`nombre`, `servicios`.`descripcion`, `servicios`.`precio` FROM servicios, paquetes_servicios WHERE ((`servicios`.`estado` =1) AND (`paquetes_servicios`.`servicio` = `servicios`.`id`) AND (`paquetes_servicios`.`paquete` ='.$row['id'].'))';
				$result2 = mysql_query($sql2,$link);
				$my_error = mysql_error($link);
				$limit = mysql_num_rows($result2)+1;
				echo '<tr><td class="center" rowspan="'.$limit.'"><a class="btn" type="submit" href="../consultas/addproducto.php?id='.$row['id'].'&precio='.$row['precio'].'"><i class="icon-plus"></i></a></td>';
				echo '<td class="center" rowspan="'.$limit.'">'.$row['nombre'].'</td>';
				if($result2 > 0){
					while($row2 = mysql_fetch_array($result2)){
						echo '<td>'.$row2['nombre'].'</td><td>'.$row2['descripcion'].'</td><td class="der">$'.$row2['precio'].'</td></tr><tr>';
					}
					mysql_free_result($result2);
				}
				echo '<td class="neg" colspan="2"><strong>Total</strong></td>';
				echo '<td class="der neg"><strong>$'.$row['precio'].'</strong></td></tr>';
			}
			mysql_free_result($result);
		}else{ echo '<tr><td>No existen paquetes.</td></tr>'; }



		$sql='SELECT `fecha`,`total` FROM `compras` WHERE `usuario` = "'.$_SESSION['userid'].'" AND `id` = '.$_REQUEST['id'];
		include('../clases/sql.php');
		if($result > 0){
			if($row=mysql_fetch_array($result)){ 
				$compra_fecha = $row['fecha'];
				$compra_total = $row['total'];
			}
			mysql_free_result($result);
		}else{ echo 'La factura no Existe.'; }

		$head ='<table>
	    <tr><td colspan="3"><center><h1>Claro S.A.</h1></center></td></tr>
	    <tr><td colspan="3"><b>Factura #'.$datalle_facturaid.'</b></td></tr>
	    <tr><td colspan="3"><b>Nit: 22413641-4</b></td></tr>
	    <tr><td colspan="3"><b>Direcci&oacute;n: Cra 42h N&deg; 84 - 101</b></td></tr>
	    <tr><td colspan="3">&nbsp;</td></tr>
	    <tr><td>Nombre:</td><td colspan="2">'.$user_name.'</td></tr>
	    <tr><td width="80">Fecha:</td><td colspan="2" width="287">'.$compra_fecha.'</td></tr>
	    <tr><td width="80">Fecha ven:</td><td colspan="2" width="287">.$fechaven.</td></tr>
	    <tr><td>Email:</td><td colspan="2">'.$user_correo.'</td></tr>
	    <tr><td>Direccion:</td><td colspan="2">'.$user_dir.'</td></tr>
	    <tr><td>Ubicacion:</td><td colspan="2">'.$_SESSION['ubicacion'].'</td></tr>
	    <tr><td colspan="3">&nbsp;</td></tr>';

	    $body='<tr><td rowspan="3">Servicio1</td><td>.$asunto.</td><td>$0.000.000</td></tr>
	    <tr><td>.$asunto.</td><td>$0.000.000</td></tr>
	    <tr><td>.$asunto.</td><td>$0.000.000</td></tr>
	    <tr><td colspan="2"><b>Subotal:</b></td><td><b>$0.000.000</b></td></tr>
	    <tr><td rowspan="3">Servicio2</td><td>.$asunto.</td><td>$0.000.000</td></tr>
	    <tr><td>.$asunto.</td><td>$0.000.000</td></tr>
	    <tr><td>.$asunto.</td><td>$0.000.000</td></tr>
	    <tr><td colspan="2"><b>Subotal:</b></td><td><b>$0.000.000</b></td></tr>
	    <tr><td rowspan="3">Servicio3</td><td>.$asunto.</td><td>$0.000.000</td></tr>
	    <tr><td>.$asunto.</td><td>$0.000.000</td></tr>
	    <tr><td>.$asunto.</td><td>$0.000.000</td></tr>
	    <tr><td colspan="2"><b>Subotal:</b></td><td><b>$0.000.000</b></td></tr>';

	    $footer='<tr><td colspan="3">&nbsp;</td></tr>
	    <tr><td colspan="2"><b>Total:</b></td><td><b>$'.$compra_total.'</b></td></tr>
	    </table>';

	    $html=$head.$body.$footer;
		 
		$dompdf = new DOMPDF();
		$dompdf->load_html($html);
		$dompdf->render();
		//$dompdf->stream("pdf/cotizacion.pdf");
		file_put_contents('facturas/factura'.$datalle_facturaid.'.pdf', $dompdf->output())
	}
?>
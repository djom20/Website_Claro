<?php
	$campos='';
	if(isset($_SESSION['userid'])){
		$sql='SELECT `empresa`.`id` FROM `usuarios`,`empresa` WHERE `usuarios`.`id` = `empresa`.`usuario` AND `usuarios`.`id` = '.$_SESSION['userid'];
		include('../clases/consultas.php');
		if(mysql_affected_rows() > 0){
			$sql='SELECT `empresa`.`nombre`, `empresa`.`representante`, `empresa`.`direccion`, `empresa`.`correo`, `paises`.`nombre` AS pais FROM  `usuarios` ,  `paises` ,  `empresa` WHERE  `empresa`.`ubicacion` =  `paises`.`id` AND `empresa`.`usuario`= `usuarios`.`id` AND `usuarios`.`id` = '.$_SESSION['userid'];
			include('../clases/sql.php');
			if($result > 0){
				if($row=mysql_fetch_array($result)){
					$campos.='<input class="span3 disabled" disabled="" type="text" name="cedula" value="'.$_SESSION['userid'].'"><br>';
					$campos.='<input class="span3 disabled" disabled="" type="text" name="nombre" value="'.$row['nombre'].'"><br>';
					$campos.='<input class="span3 disabled" disabled="" type="text" name="representante" value="'.$row['representante'].'"><br>';
					$campos.='<input class="span3 disabled" disabled="" type="email" name="correo" value="'.$row['correo'].'"><br>';
					$campos.='<input class="span3 disabled" disabled="" type="text" name="direccion" value="'.$row['direccion'].'"><br>';
					$campos.='<input class="span3 disabled" disabled="" type="text" name="ubicacion" value="'.$row['pais'].'">';
				}
			}else{ echo 'La persona no Existe.'; }
		}else{	
			$sql='SELECT `usuarios`.`id` FROM `usuarios`,`persona` WHERE `usuarios`.`id` = `persona`.`usuario` AND `usuarios`.`id`= '.$_SESSION['userid'];
			include('../clases/sql.php');
			if(mysql_affected_rows() > 0){
				$sql='SELECT CONCAT(`persona`.`nombre`," ",`persona`.`apellido`," ",`persona`.`apellido2`) as nombre, `persona`.`correo`, `persona`.`direccion`,`paises`.`nombre` as pais FROM `persona`,`paises` WHERE `persona`.`ubicacion` = `paises`.`id` AND `persona`.`id` = '.$_SESSION['userid'];
				include('../clases/sql.php');
				if($result > 0){
					if($row=mysql_fetch_array($result)){
						$campos.='<input class="span3 disabled" disabled="" type="text" name="cedula" value="'.$_SESSION['userid'].'"><br>';
						$campos.='<input class="span3 disabled" disabled="" type="text" name="nombre" value="'.$row['nombre'].'"><br>';
						$campos.='<input class="span3 disabled" disabled="" type="email" name="correo" value="'.$row['correo'].'"><br>';
						$campos.='<input class="span3 disabled" disabled="" type="text" name="direccion" value="'.$row['direccion'].'"><br>';
						$campos.='<input class="span3 disabled" disabled="" type="text" name="ubicacion" value="'.$row['pais'].'">';
					}
				}else{ echo 'La persona no Existe.'; }
			}
		}
	}
?>
<div class="container-fluid">
	<div class="row-fluid">
		<div id="datosusuarios">
			<div id="seccion" class="well datawell wellplus">
				<p id="msjb"><strong>Bienvenido (a) <?php if(isset($_SESSION['user'])){ echo $_SESSION['user']; } ?></strong></p><br/>
				<div class="span4">
					<?php if(isset($campos)){ echo $campos; } ?>
				</div>
				<div class="span7">
					<h3 id="titulocompra">Compras Realizadas</h3>
					<br/>
					<div id="listado_compras">
						<table id="list_compra" class="table table-condensed">
							<thead>
							    <tr>
							    	<th>Id</th>
							    	<th>Fecha</th>
							    	<th>Total</th>
							    	<th></th>
							    </tr>
							</thead>
							<tbody>
							  	<?php 
									if(isset($_SESSION['userid'])){
										$sql='SELECT `compras`.`id`,`compras`.`fecha`,`compras`.`total` FROM `compras` WHERE `usuario`= '.$_SESSION['userid'];
										include('../clases/consultas.php');
										if($result > 0){
											while($row=mysql_fetch_array($result)){ 
												echo '<tr>';
												echo '<td>'.$row['id'].'</td>';
												echo '<td>'.$row['fecha'].'</td>';
												echo '<td>$'.$row['total'].'</td>';
												echo '<td><a class="btn" href="../consultas/ver_compra.php?id='.$row['id'].'"><i rel="popover" data-original-title="Ver" class="icon-eye-open"></i></a></td>';
												echo '</tr>';
											}
										}else{ echo 'No existen compras todavia.'; }		
									}
								?>
							</tbody>
						</table>
					</div>
					<a class="btn btn-warning" type="submit" href="#"><i class="icon-info-sign icon-white"></i> Reportar Abuso</a>
				</div>
			</div>
		</div>
	</div>
</div>
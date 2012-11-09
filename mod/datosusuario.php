<?php
	if(isset($_SESSION['userid'])){
		$sql='SELECT CONCAT(`persona`.`nombre`," ",`persona`.`apellido`," ",`persona`.`apellido2`) as nombre, `persona`.`correo`, `persona`.`direccion`,`paises`.`nombre` as pais FROM `persona`,`paises` WHERE `persona`.`ubicacion` = `paises`.`id` AND `persona`.`id` = '.$_SESSION['userid'];		include('../clases/consultas.php');
		if($result > 0){
			if($row=mysql_fetch_array($result)){ 
				$nom = $row['nombre'];
				$correo = $row['correo'];
				$direccion = $row['direccion'];
				$ubicacion = $row['pais'];
			}
		}else{ echo 'La persona no Existe.'; }
	}
?>
<div class="container-fluid">
	<div class="row-fluid">
		<div id="datosusuarios">
			<div id="seccion" class="well datawell wellplus">
				<p id="msjb"><strong>Bienvenido (a) <?php if(isset($_SESSION['user'])){ echo $_SESSION['user']; } ?></strong></p><br/>
				<div class="span4">
					<input class="span3 disabled" disabled="" type="text" name="cedula" value="<?php if(isset($_SESSION['userid'])){ echo $_SESSION['userid']; } ?>"><br>
					<input class="span3 disabled" disabled="" type="text" name="nombre" value="<?php if(isset($nom)){ echo $nom; } ?>"><br>
					<input class="span3 disabled" disabled="" type="email" name="correo" value="<?php if(isset($correo)){ echo $correo; } ?>"><br>
					<input class="span3 disabled" disabled="" type="text" name="direccion" value="<?php if(isset($direccion)){ echo $direccion; } ?>"><br>
					<input class="span3 disabled" disabled="" type="text" name="ubicacion" value="<?php if(isset($ubicacion)){ echo $ubicacion; } ?>">
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
							    	<th>Pago</th>
							    	<th></th>
							    </tr>
							</thead>
							<tbody>
							  	<?php 
									if(isset($_SESSION['userid'])){
										$sql='SELECT `id`,`fecha`,`total`,`estado` FROM `compras` WHERE `usuario`= '.$_SESSION['userid'];
										include('../clases/consultas.php');
										if($result > 0){
											while($row=mysql_fetch_array($result)){ 
												echo '<tr>';
												echo '<td>'.$row['id'].'</td>';
												echo '<td>'.$row['fecha'].'</td>';
												echo '<td>$'.$row['total'].'</td>';
												if($row['estado']==0){
													echo '<td><a class="btn" href=""><i rel="popover" data-original-title="Factura NO Pagada" class="icon-star-empty"></i></a></td>';
												}else{ echo '<td><a class="btn" href=""><i rel="popover" data-original-title="Factura Pagada" class="icon-star"></i></a></td>'; }
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
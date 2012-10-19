<?php
	if(isset($_SESSION['userid'])){
		$sql='SELECT CONCAT(`nombre`," ",`apellido`," ",`apellido2`) as nombre, `correo`, `direccion`, `ubicacion` FROM `persona` WHERE `id` = '.$_SESSION['userid'];
		include('../clases/consultas.php');
		if($result > 0){
			if($row=mysql_fetch_array($result)){ 
				$nom = $row['nombre'];
				$correo = $row['correo'];
				$direccion = $row['direccion'];
				$ubicacion = $row['ubicacion'];
			}

			$sql='SELECT nombre FROM pasies WHERE id ='.$ubicacion;
			include('../clases/consultas.php');
			if($result > 0) {
				if($row=mysql_fetch_array($result)){ $ubicacion = $row['nombre']; }
			}else{ echo 'El pais no existe.'; }
		}else{ echo 'La persona no Existe.'; }		
	}
?>
<div class="container-fluid">
	<div class="row-fluid">
		<div id="datosusuarios">
			<div id="seccion" class="well datawell wellplus">
				<p id="msjb"><strong>Bienvenido <?php if(isset($_SESSION['user'])){ echo $_SESSION['user']; } ?></strong></p><br/>
				<input class="input-xlarge disabled" disabled="" type="text" name="cedula" value="<?php if(isset($_SESSION['userid'])){ echo $_SESSION['userid']; } ?>"><br>
				<input class="input-xlarge disabled" disabled="" type="text" name="nombre" value="<?php if(isset($nom)){ echo $nom; } ?>"><br>
				<input class="input-xlarge disabled" disabled="" type="email" name="correo" value="<?php if(isset($correo)){ echo $correo; } ?>"><br>
				<input class="input-xlarge disabled" disabled="" type="text" name="direccion" value="<?php if(isset($direccion)){ echo $direccion; } ?>"><br>
				<input class="input-xlarge disabled" disabled="" type="text" name="ubicacion" value="<?php if(isset($ubicacion)){ echo $ubicacion; } ?>">
				<br/><br/>
				<h3>Compras Realizadas</h3>
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
									$sql='SELECT `id`,`fecha`,`total` FROM `compras` WHERE `usuario`= '.$_SESSION['userid'];
									include('../clases/consultas.php');
									if($result > 0){
										while($row=mysql_fetch_array($result)){ 
											echo '<tr>';
											echo '<td>'.$row['id'].'</td>';
											echo '<td>'.$row['fecha'].'</td>';
											echo '<td>'.$row['total'].'</td>';
											echo '<td><a class="btn btn-danger" href="../consultas/ver_compra.php?id='.$row['id'].'"><i class="icon-search icon-white"></i></a></td>';
											echo '</tr>';
										}
									}else{ echo 'No existen compras todavia.'; }		
								}
							?>
						</tbody>
					</table>
				</div>	
				<br/>
				<a class="btn btn-warning" type="submit" href="#"><i class="icon-eye-open icon-white"></i> Reportar Abuso</a>
			</div>
		</div>
	</div>
</div>
<?php 
	$sql='SELECT `id`,`nombre` FROM `paquetes` WHERE `estado` = 1';
	include('../clases/consultas.php');

	$count=mysql_affected_rows();

	$sql4='SELECT `id`,`nombre`,`descripcion`,`precio` FROM `servicios` WHERE `estado` = 1';
	$result3 = mysql_query($sql4,$link);
	$my_error = mysql_error($link);
	$option='';
	if($result3 > 0){
		while($row3 = mysql_fetch_array($result3)){
			$option .= '<option value="'.$row3['id'].'">'.$row3['nombre'].'  '.$row3['descripcion'].'  $'.$row3['precio'].'</option>';
		}
		mysql_free_result($result3);
	}
?>
<div id="asignar" class="base">
	<div id="content">
		<div id="content-header">
			<h1>Asignar Paquetes y Servicios</h1>
		</div>
		<div id="breadcrumb">
			<a href="./" class="linkhome tip-bottom" data-original-title="Go to Home"><i class="icon-home"></i> Home</a>
			<a href=""><i class="icon-inbox"></i> Paquetes y Servicios</a>
			<a href="#asignar" class="current">Asignar Paquetes y Servicios</a>
		</div>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<div class="widget-box">
						<div class="widget-title">
							<span class="icon">
								<i class="icon-align-justify"></i>
							</span>
							<h5>Asignar Paquetes y Servicios</h5>
							<span class="label">
								<?php if(isset($count)){ echo $count; } ?>
							</span>
						</div>
						<div class="widget-content nopadding">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>Paquetes</th>
										<th>Servicios</th>
										<th>Descripcion</th>
										<th>Precio</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php
										if($result > 0){
											while($row=mysql_fetch_array($result)){
												$sql2='SELECT `servicios`.`id`,`servicios`.`nombre`, `servicios`.`descripcion`, `servicios`.`precio` FROM servicios, paquetes_servicios WHERE ((`servicios`.`estado` = 1) AND (`paquetes_servicios`.`servicio` = `servicios`.`id`) AND (`paquetes_servicios`.`estado` = 1) AND (`paquetes_servicios`.`paquete` ='.$row['id'].'))';
												$result2 = mysql_query($sql2,$link);
												$my_error = mysql_error($link);
												$limit = mysql_num_rows($result2)+1;
												echo '<tr><td rowspan="'.$limit.'">'.$row['nombre'].'</td>';
												if($result2 > 0){
													while($row2 = mysql_fetch_array($result2)){
														echo '<td>'.$row2['nombre'].'</td><td>'.$row2['descripcion'].'</td><td>$'.$row2['precio'].'</td><td><a class="btn btn-danger" href="../consultas/admin/paquete_servicio_eliminar.php?paquete='.$row['id'].'&servicio='.$row2['id'].'"><i class="icon-minus-sign icon-white"></i></td></tr><tr>';
													}
													mysql_free_result($result2);
												}
												echo '<td colspan="4"><form id="'.$row['id'].'" name="form'.$row['id'].'" method="POST" action="../consultas/admin/paquete_servicio_insertar.php?paquete='.$row['id'].'">';
												echo '<select name="servicio" class="span7">'.$option.'</select> ';
												echo '<button class="btn btn-primary" type="submit" href="#"><i class="icon-plus-sign icon-white"></i></button></form></td></tr>';
											}
											mysql_free_result($result);
										}else{ echo '<tr><td>No existen paquetes.</td></tr>'; }
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div id="footer" class="span12">
					<br>
					2012 AltiviaOT Admin. Brought to you by <a href="">Djom20</a>
				</div>
			</div>
		</div>
	</div>
</div>
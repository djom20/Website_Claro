<?php 
	$sql='SELECT `id`,`nombre`,`precio` FROM `paquetes` WHERE `estado`=1';
	include('../clases/consultas.php');

	$count=mysql_affected_rows();
?>
<div id="asignaciones" class="base">
	<div id="content">
		<div id="content-header">
			<h1>Asignaciones</h1>
		</div>
		<div id="breadcrumb">
			<a href="./" class="linkhome tip-bottom" data-original-title="Go to Home"><i class="icon-home"></i> Home</a>
			<a href=""><i class="icon-inbox"></i> Paquetes y Asignaciones</a>
			<a href="#asignaciones" class="current">Asignaciones</a>
		</div>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<div class="btn-group" style="width: auto; ">
						<a class="btn btn-large tip-bottom" data-original-title="Nuevo"><i class="icon-file"></i></a>
						<a class="btn btn-large tip-bottom" data-original-title="Buscar"><i class="icon-search"></i></a>
					</div>
					<div class="widget-box">
						<div class="widget-title">
							<span class="icon">
								<i class="icon-user"></i>
							</span>
							<h5>Listado de Asignaciones</h5>
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
									</tr>
								</thead>
								<tbody>
									<?php
										if($result > 0){
											while($row=mysql_fetch_array($result)){
												$sql2='SELECT `servicios`.`nombre`, `servicios`.`descripcion`, `servicios`.`precio` FROM servicios, paquetes_servicios WHERE ((`servicios`.`estado` =1) AND (`paquetes_servicios`.`servicio` = `servicios`.`id`) AND (`paquetes_servicios`.`paquete` ='.$row['id'].'))';
												$result2 = mysql_query($sql2,$link);
												$my_error = mysql_error($link);
												$limit = mysql_num_rows($result2)+1;
												echo '<tr><td rowspan="'.$limit.'">'.$row['nombre'].'</td>';
												if($result2 > 0){
													while($row2 = mysql_fetch_array($result2)){
														echo '<td>'.$row2['nombre'].'</td><td>'.$row2['descripcion'].'</td><td>$'.$row2['precio'].'</td></tr><tr>';
													}
													mysql_free_result($result2);
												}
												echo '<td colspan="2"><strong>Total</strong></td>';
												echo '<td><strong>$'.$row['precio'].'</strong></td></tr>';
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
<?php 
	$sql='SELECT `cotizaciones`.`id`,`usuarios`.`user`,`paquetes`.`nombre` as paquete,`cotizaciones`.`precio`,`cotizaciones`.`fecha`,`cotizaciones`.`estado` FROM `cotizaciones`,`usuarios`,`paquetes` WHERE `cotizaciones`.`usuario` = `usuarios`.`id` AND `cotizaciones`.`paquete` = `paquetes`.`id`';
	include('../clases/consultas.php');

	$count=mysql_affected_rows();
?>
<div id="cotizaciones" class="base">
	<div id="content">
		<div id="content-header">
			<h1>Cotizaciones</h1>
		</div>
		<div id="breadcrumb">
			<a href="./" class="linkhome tip-bottom" data-original-title="Go to Home"><i class="icon-home"></i> Home</a>
			<a href=""><i class="icon-shopping-cart"></i> Comprás</a>
			<a href="#cotizaciones" class="current">Cotizaciones</a>
		</div>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<!--<div class="btn-group" style="width: auto; ">
						<a class="btn btn-large tip-bottom" data-original-title="Buscar"><i class="icon-search"></i></a>						
					</div>-->
					<div class="widget-box">
						<div class="widget-title">
							<span class="icon">
								<i class="icon-shopping-cart"></i>
							</span>
							<h5>Listado de Cotizaciones</h5>
							<span class="label">
								<?php if(isset($count)){ echo $count; } ?>
							</span>
						</div>
						<div class="widget-content nopadding">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>Id</th>
										<th>Usuario</th>
										<th>Paquete</th>
										<th>Precio</th>
										<th>Fecha y Hora</th>
										<th>Estado</th>
									</tr>
								</thead>
								<tbody>
									<?php
										if($result > 0){
											while($row=mysql_fetch_array($result)){
												echo '<tr><td>'.$row['id'].'</td><td>'.$row['user'].'</td><td>'.$row['paquete'].'</td><td>$'.$row['precio'].'</td><td>'.$row['fecha'].'</td><td>';
												if ($row['estado']==1) { echo '<a href="../consultas/admin/cambiar_estado.php?con=4&id='.$row['id'].'" class="tip-top" data-original-title="Update"><i class="icon-ok"></i></a>'; }
												else{ echo '<a href="../consultas/admin/cambiar_estado.php?con=4&id='.$row['id'].'" class="tip-top" data-original-title="Desactivar"><i class="icon-remove"></i></a></tr>'; }
											}
										}
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
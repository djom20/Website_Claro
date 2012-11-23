<?php 
	$sql='SELECT `id`,`nombre`,`descripcion`,`precio`,`estado` FROM `Servicios` WHERE `id` > 0';
	include('../clases/consultas.php');

	$count=mysql_affected_rows();
?>
<div id="servicios" class="base">
	<div id="content">
		<div id="content-header">
			<h1>Servicios</h1>
		</div>
		<div id="breadcrumb">
			<a href="./" class="linkhome tip-bottom" data-original-title="Go to Home"><i class="icon-home"></i> Home</a>
			<a href=""><i class="icon-inbox"></i> Paquetes y Servicios</a>
			<a href="#servicios" class="current">Servicios</a>
		</div>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<div class="btn-group" style="width: auto; ">
						<a id="new_servicios" class="btn btn-large tip-bottom" data-original-title="Nuevo"><i class="icon-file"></i></a>
						<!-- <a class="btn btn-large tip-bottom" data-original-title="Buscar"><i class="icon-search"></i></a> -->
					</div>
					<div class="widget-box">
						<div class="widget-title">
							<span class="icon">
								<i class="icon-shopping-cart"></i>
							</span>
							<h5>Listado de Servicios</h5>
							<span class="label">
								<?php if(isset($count)){ echo $count; } ?>
							</span>
						</div>
						<div class="widget-content nopadding">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>Id</th>
										<th>Nombre</th>
										<th>Descripcion</th>
										<th>Precio</th>
										<th>Estado</th>
										<th>Acciones</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										if($result > 0){
											while($row=mysql_fetch_array($result)){
												echo '<tr><td>'.$row['id'].'</td><td>'.$row['nombre'].'</td><td>'.$row['descripcion'].'</td><td>$'.$row['precio'].'</td><td>';
												if ($row['estado']==1) { echo '<a href="../consultas/admin/cambiar_estado.php?con=6&id='.$row['id'].'" class="tip-top" data-original-title="Activar"><i class="icon-ok"></i></a>'; }
												else{ echo '<a href="../consultas/admin/cambiar_estado.php?con=6&id='.$row['id'].'" class="tip-top" data-original-title="Desactivar"><i class="icon-remove"></i></a>';}
												echo '<td><a id="'.$row['id'].'" class="link_servicios_editar" href="" class="tip-top" data-original-title="Editar"><i class="icon-pencil"></i></a></td></tr>';
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
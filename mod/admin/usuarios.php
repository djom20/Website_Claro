<?php 
	$sql='SELECT `id`,`user`,`ip`,`online`,`estado` FROM `usuarios` WHERE `tipo` = 2';
	include('../clases/consultas.php');

	$count=mysql_affected_rows();
?>
<div id="usuarios" class="base">
	<div id="content">
		<div id="content-header">
			<h1>Usuarios</h1>
		</div>
		<div id="breadcrumb">
			<a href="./" class="linkhome tip-bottom" data-original-title="Go to Home"><i class="icon-home"></i> Home</a>
			<a href=""><i class="icon-user"></i> Personal</a>
			<a href="#usuarios" class="current">Usuarios</a>
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
							<h5>Listado de Usuarios</h5>
							<span class="label">
								<?php if(isset($count)){ echo $count; } ?>
							</span>
						</div>
						<div class="widget-content nopadding">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>Id</th>
										<th>User</th>
										<th>Ip</th>
										<th>Online</th>
										<th>Estado</th>
										<th>Acciones</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										if($result > 0){
											while($row=mysql_fetch_array($result)){
												echo '<tr><td>'.$row['id'].'</td><td>'.$row['user'].'</td><td>'.$row['ip'].'</td><td>';
												if ($row['online']==1) { echo '<a href="../consultas/admin/cambiar_online.php?con=2&id='.$row['id'].'" class="tip-top" data-original-title="Online"><i class="icon-ok"></i></a>'; }
												else{ echo '<a href="../consultas/admin/cambiar_online.php?con=2&id='.$row['id'].'" class="tip-top" data-original-title="Offline"><i class="icon-remove"></i></a>';}
												echo '</td><td>';
												if ($row['estado']==1) { echo '<a href="../consultas/admin/cambiar_estado.php?con=2&id='.$row['id'].'" class="tip-top" data-original-title="Activar"><i class="icon-ok"></i></a>'; }
												else{ echo '<a href="../consultas/admin/cambiar_estado.php?con=2&id='.$row['id'].'" class="tip-top" data-original-title="Desactivar"><i class="icon-remove"></i></a>';}
												echo '</td><td><a href="" class="tip-top" data-original-title="Editar"><i class="icon-pencil"></i></a></td></tr>';
												echo '</tr>';
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
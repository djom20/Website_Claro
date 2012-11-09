<?php 
	$sql='SELECT `id`,`user`,`ip`,`online`,`estado` FROM `usuarios` WHERE `tipo` = 1';
	include('../clases/consultas.php');

	$count=mysql_affected_rows();
?>
<div id="visitantes" class="base">
	<div id="content">
		<div id="content-header">
			<h1>Visitantes</h1>				
		</div>
		<div id="breadcrumb">
			<a href="./" class="linkhome tip-bottom" data-original-title="Go to Home"><i class="icon-home"></i> Home</a>
			<a href="#personal"><i class="icon-user"></i> Personal</a>
			<a class="linkvisitantes" href="#visitantes" class="current">Visitantes</a>
		</div>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<div class="widget-box">
						<div class="widget-title">
							<span class="icon">
								<i class="icon-user"></i>
							</span>
							<h5>Listado de Visitantes</h5>
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
									</tr>
								</thead>
								<tbody>
									<?php 
										if($result > 0){
											while($row=mysql_fetch_array($result)){
												echo '<tr><td>'.$row['id'].'</td><td>'.$row['user'].'</td><td>'.$row['ip'].'</td><td>';
												if ($row['online']==1) { echo '<a href="../consultas/admin/cambiar_online.php?con=1&id='.$row['id'].'" class="tip-top" data-original-title="Online"><i class="icon-ok"></i></a>'; }
												else{ echo '<a href="../consultas/admin/cambiar_online.php?con=1&id='.$row['id'].'" class="tip-top" data-original-title="Offline"><i class="icon-remove"></i></a>';}
												echo '</td><td>';
												if ($row['estado']==1) { echo '<a href="../consultas/admin/cambiar_estado.php?con=1&id='.$row['id'].'" class="tip-top" data-original-title="Activar"><i class="icon-ok"></i></a>'; }
												else{ echo '<a href="../consultas/admin/cambiar_estado.php?con=1&id='.$row['id'].'" class="tip-top" data-original-title="Desactivar"><i class="icon-remove"></i></a>';}
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
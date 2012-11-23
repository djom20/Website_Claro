<?php 
	$sql='SELECT `id`,`nombre` FROM `paises` WHERE `id` > 0';
	include('../clases/consultas.php');
?>
<div id="empresas_editar" class="base">
	<div id="content">
		<div id="content-header">
			<h1>Editar</h1>
		</div>
		<div id="breadcrumb">
			<a href="./" class="linkhome tip-bottom" data-original-title="Go to Home"><i class="icon-home"></i> Home</a>
			<a href=""><i class="icon-user"></i> Personal</a>
			<a class="linkempresas" href="#usuarios">Empresas</a>
			<a href="#empresas_editar" class="current"><i class="icon icon-pencil"></i> Editar</a>
		</div>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<div class="widget-box">
						<div class="widget-title">
							<span class="icon">
								<i class="icon-align-justify"></i>									
							</span>
							<h5>Editar Datos de la Empresa</h5>
						</div>
						<div class="widget-content nopadding">
							<form action="../consultas/admin/update.php?tipo=2" method="POST" class="form-horizontal">
								<div id="empresascargar"></div>
								<div class="control-group">
									<label class="control-label">Ubicación</label>
									<div class="controls">
										<select name="ubicacion">
											<?php 
												if($result > 0){
													while($row=mysql_fetch_array($result)){
														echo '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
													}
												}
											?>
										</select>
									</div>
								</div>
								<div class="form-actions">
									<button type="submit" class="btn btn-primary">Save</button>
								</div>
							</form>
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
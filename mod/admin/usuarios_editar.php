<?php 
	$sql='SELECT `id`,`nombre` FROM `usuarios_tipo` WHERE `estado` = 1';
	include('../clases/consultas.php');
?>
<div id="visitantes_editar" class="base">
	<div id="content">
		<div id="content-header">
			<h1>Editar</h1>
		</div>
		<div id="breadcrumb">
			<a href="./" class="linkhome tip-bottom" data-original-title="Go to Home"><i class="icon-home"></i> Home</a>
			<a href=""><i class="icon-user"></i> Personal</a>
			<a class="linkvisitantes" href="#visitantes">Visitantes</a>
			<a href="#visitantes_editar" class="current"><i class="icon icon-pencil"></i> Editar</a>
		</div>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<div class="widget-box">
						<div class="widget-title">
							<span class="icon">
								<i class="icon-align-justify"></i>									
							</span>
							<h5>Editar Datos del Visitante</h5>
						</div>
						<div class="widget-content nopadding">
							<form action="#" method="get" class="form-horizontal">
								<div class="control-group">
									<label class="control-label">Id</label>
									<div class="controls">
										<input name="id" type="text" value="">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Nombre</label>
									<div class="controls">
										<input name="nombre" type="text" value="">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Ip</label>
									<div class="controls">
										<input name="ip" type="text" value="">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Tipo</label>
									<div class="controls">
										<select name="tipo" id="">
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
								<div class="control-group">
									<label class="control-label">Online</label>
									<div class="controls">
										<select name="online" id="">
											<option value="0">Online</option>
											<option value="1">Offline</option>
										</select>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Estado</label>
									<div class="controls">
										<select name="estado" id="">
											<option value="0">Activo</option>
											<option value="1">Inactivo</option>
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
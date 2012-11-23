<div id="usuarios_crear" class="base">
	<div id="content">
		<div id="content-header">
			<h1>Crear</h1>
		</div>
		<div id="breadcrumb">
			<a href="./" class="linkhome tip-bottom" data-original-title="Go to Home"><i class="icon-home"></i> Home</a>
			<a href=""><i class="icon-user"></i> Personal</a>
			<a class="linkusuarios" href="#usuarios">Usuarios</a>
			<a href="#usuarios_crear" class="current"><i class="icon icon-file"></i> Crear</a>
		</div>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<div class="widget-box">
						<div class="widget-title">
							<span class="icon">
								<i class="icon-align-justify"></i>									
							</span>
							<h5>Crear Usuario</h5>
						</div>
						<div class="widget-content nopadding">
							<form action="../consultas/registrar.php" method="GET" class="form-horizontal">
								<input class="uneditable-input" name="form" type="hidden" value="formu">
								<div class="control-group"> <label class="control-label">Cedula</label> <div class="controls"> <input class="toggleform" type="text" name="ced" maxlength="10" required="required" autofocus="autofocus" pattern="^[0-9]{10}$" rel="popover" data-original-title="Ej: 1154200142, 10 Caracteres."> </div> </div>
								<div class="control-group"> <label class="control-label">Nombre</label> <div class="controls"> <input class="toggleform" type="text" name="nombre" maxlength="20" required="required" pattern="^[a-z ]{3,20}$" rel="popover" data-original-title="Ej: rafael, Min 3 y Max 20 Caracteres."> </div> </div>
								<div class="control-group"> <label class="control-label">Nombre2</label> <div class="controls"> <input class="toggleform" type="text" name="nombre2" maxlength="20" pattern="^[a-z]{3,20}$" rel="popover" data-original-title="Ej: fernando, Max 10 Caracteres."> </div> </div>
								<div class="control-group"> <label class="control-label">Apellido</label> <div class="controls"> <input class="toggleform" type="text" name="apellido" maxlength="20" required="required" pattern="^[a-z ]{3,20}$" rel="popover" data-original-title="Ej: perez, Max 20 Caracteres."> </div> </div>
								<div class="control-group"> <label class="control-label">Apellido2</label> <div class="controls"> <input class="toggleform" type="text" name="apellido2" maxlength="20" required="required" pattern="^[a-z ]{3,20}$" rel="popover" data-original-title="Ej: cediño, Max 20 Caracteres."> </div> </div>
								<div class="control-group"> <label class="control-label">Correo</label> <div class="controls"> <input class="toggleform" type="text" name="correo" maxlength="50" required="required" pattern="^([a-zA-Z0-9-_\.]+)@([a-zA-Z-_\.]{5,7}).([a-zA-Z-_\.]{2,3})$" rel="popover" data-original-title="Ej: nor_man89@hotmail.com, Max 50 Caracteres."> </div> </div>
								<div class="control-group"> <label class="control-label">Dirección</label> <div class="controls"> <input class="toggleform" type="text" name="direccion" maxlength="50" required="required" rel="popover" data-original-title="Ej: calle 45 # 54-17, max 50 Caracteres."> </div> </div>
								<div class="control-group"> <label class="control-label">User</label> <div class="controls"> <input class="toggleform" type="text" name="user" maxlength="8" required="required" pattern="^[a-z0-9-_\.]{5,8}$" rel="popover" data-original-title="Ej: nor_man8, Max 8 Caracteres."> </div> </div>
								<div class="control-group"> <label class="control-label">Password</label> <div class="controls"> <input class="toggleform" type="password" name="pass" maxlength="12" required="required" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" rel="popover" data-original-title="Ej: Capacidad123, Min 10 y Max 12 Caracteres."> </div> </div>
								<div class="control-group">
									<label class="control-label">Ubicacion</label>
									<div class="controls">
										<select name="ubi" id="">
											<?php 
												$sql='SELECT `id`,`nombre` FROM `paises` WHERE `estado` = 1';
												include('../clases/sql.php');
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
									<label class="control-label">Tipo</label>
									<div class="controls">
										<select name="tipou" id="">
											<?php
												$sql='SELECT `id`,`nombre` FROM `usuarios_tipo` WHERE `id` > 1';
												include('../clases/consultas.php');
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
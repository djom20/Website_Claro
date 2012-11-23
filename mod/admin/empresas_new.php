<?php 
	$sql='SELECT `id`,`nombre` FROM `paises` WHERE `id` > 0';
	include('../clases/consultas.php');
?>
<div id="empresas_crear" class="base">
	<div id="content">
		<div id="content-header">
			<h1>Crear</h1>
		</div>
		<div id="breadcrumb">
			<a href="./" class="linkhome tip-bottom" data-original-title="Go to Home"><i class="icon-home"></i> Home</a>
			<a href=""><i class="icon-user"></i> Personal</a>
			<a class="linkempresas" href="#usuarios">Empresas</a>
			<a href="#new_editar" class="current"><i class="icon icon-file"></i> Crear</a>
		</div>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<div class="widget-box">
						<div class="widget-title">
							<span class="icon">
								<i class="icon-align-justify"></i>									
							</span>
							<h5>Crear Empresa</h5>
						</div>
						<div class="widget-content nopadding">
							<form action="../consultas/registrar.php" method="POST"  class="form-horizontal">
								<div class="control-group"> <label class="control-label">Nit</label> <div class="controls"> <input type="text" autofocus="autofocus" name="nit" maxlength="10" required="required" autofocus="autofocus" pattern="^[0-9]{10}$"> </div> </div>
						        <div class="control-group"> <label class="control-label">Nombre de la Empresa</label> <div class="controls"> <input type="text" name="nombre" maxlength="20" required="required" pattern="^[A-Z][a-z]{3,20}$"> </div> </div>
						        <div class="control-group"> <label class="control-label">Representante legal</label> <div class="controls"> <input type="text" name="representante" maxlength="20" pattern="^[A-Z][a-z]{3,20}$"> </div> </div>
						        <div class="control-group"> <label class="control-label">Direccion</label> <div class="controls"> <input type="text" name="direccion" maxlength="50" required="required"> </div> </div>
						        <div class="control-group"> <label class="control-label">Correo</label> <div class="controls"> <input type="text" name="correo" maxlength="50" required="required" pattern="^([a-zA-Z0-9-_\.]+)@([a-zA-Z-_\.]{5,7}).([a-zA-Z-_\.]{2,3})$"> </div> </div>
						        <div class="control-group"> <label class="control-label">Usuario</label> <div class="controls"> <input type="text" name="user" maxlength="8" required="required" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{5,8}$"> </div> </div>
						        <div class="control-group"> <label class="control-label">Password</label> <div class="controls"> <input type="password" name="pass" maxlength="12" required="required" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"> </div> </div>
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
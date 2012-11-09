<header>Seccion</header>
<div class="container-fluid">
	<div class="row-fluid">
		<div id="seccion">
			<div id="base_form2">
				<label for="">Iniciar Sección</label>
				<form id="formseccion" class="well" action="../consultas/seccion.php" method="POST">
					<a class="close">&times;</a>
					<input class="span2" type="text" name="user" placeholder="Usuario" value="djom20" maxlength="8" required="required"><br/>
					<input class="span2" type="password" name="pass" placeholder="Password" value="123456" maxlength="10" required="required"><br/><br/>
					<a id="aregistro" class="btn" type="button" href="../consultas/registro.php" name="btnreg"><i class="icon-pencil"></i> Registrate</a><br/>
					<div class="form-actions">
						<button id="resetform_sec" class="btn" type="reset" name="btnborrar" rel="popover" data-original-title="Vaciar Formulario"><i class="icon-refresh"></i></button>
						<button id="submitform_sec" class="btn btn-danger" type="submit" name="btnseccion" rel="popover" data-original-title="Iniciar Seccion"><i class="icon-user icon-white"></i></button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
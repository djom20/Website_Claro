<header>Seccion</header>
<div class="container-fluid">
	<div class="row-fluid">
		<div id="seccion">
			<div id="base_form2">
				<label for="">Iniciar Sección</label>
				<form class="well" action="../consultas/seccion.php" method="POST">
					<a class="close">&times;</a>
					<input class="span2" type="text" name="user" placeholder="Usuario" value="djom20" maxlength="6" required="required" autofocus="autofocus"><br/>
					<input class="span2" type="password" name="pass" placeholder="Password" value="123456" maxlength="10" required="required"><br/><br/>
					<a id="aregistro" class="btn" type="button" href="../consultas/registro.php" name="btnreg"><i class="icon-pencil"></i> Registrate</a><br/>
					<div id="izq" class="form-actions">
						<a id="resetform_sec" rel="popover" data-original-title="Vaciar Formulario" class="btn" type="reset" href="#" name="btnborrar"><i class="icon-trash"></i></a>
						<a id="submitform_sec" rel="popover" data-original-title="Iniciar Seccion" class="btn btn-danger" type="button" href="#" name="btnseccion"><i class=" icon-user icon-white"></i></a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
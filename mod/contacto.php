<div class="container-fluid">
	<div class="row-fluid">
		<div id="contacto">
			<header>Contacto</header>
			<div id="base_form">
				<div id="formulario">
					<p><img src="../themes/img/contacto/movil.png" alt="" width="25"> <strong>(57) 01 8000 368 - 45 - 15</strong></p>
					<p><img src="../themes/img/contacto/menssaje.png" alt=""> <strong>atencionalcliente@claro.com.co</strong></p>
					<form id="form_contacto" class="well" action="../clases/email.php" method="POST">
						<a class="close">&times;</a>
						<input type="text" name="nombre" placeholder="Nombre y apellidos" maxlength="20" required="required"><br/>
						<input type="text" name="celular" placeholder="Celular" maxlength="10" required="required"><br/>
						<input type="email" name="correo" placeholder="Correo" maxlength="40" required="required"><br/>
						<input type="text" name="asunto" placeholder="Asunto" maxlength="30" required="required"><br/>
						<textarea id="contenido" class="span2" name="contenido" cols="20" rows="4" placeholder="Contenido" maxlength="60" required="required"></textarea><br/>
						<div class="der" class="form-actions"> 
							<button id="resetform_cont" class="btn" type="reset" href="#" name="btnborrar"><i class="icon-refresh"></i> Borrar</button>
							<button id="submitform_cont" class="btn btn-danger" type="submit" href="#" name="btnenviar"><i class="icon-envelope icon-white"></i> Enviar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
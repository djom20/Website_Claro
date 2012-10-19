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
						<input type="text" name="nombre" placeholder="Nombre y apellidos"><br/>
						<input type="text" name="celular" placeholder="Celular"><br/>
						<input type="email" name="correo" placeholder="Correo"><br/>
						<input type="text" name="asunto" placeholder="Asunto"><br/>
						<textarea id="contenido" class="span2" name="contenido" cols="20" rows="4" placeholder="Contenido"></textarea><br/>
						<div id="izq" class="form-actions"> 
							<a id="resetform_cont" rel="popover" data-original-title="Vaciar Formulario" class="btn" type="button" href="#" name="btnborrar"><i class="icon-trash"></i></a>
							<a id="submitform_cont" rel="popover" data-original-title="Enviar" class="btn btn-danger" type="submit" href="#" name="btnenviar"><i class="icon-envelope icon-white"></i></a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
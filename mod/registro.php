<div class="container-fluid">
  <div class="row-fluid">
    <div id="registro">
      <form id="formregistro" action="../consultas/registrar.php" method="POST" class="well wellplus">
        <a class="close">&times;</a>
        <div class="center">
          <h3>REGISTRO</h3><br/>
          <input type="text" name="ced" placeholder="Cedula" maxlength="10" required="required" autofocus="autofocus">
          <input type="text" name="nombre" placeholder="Nombre" maxlength="20" required="required">
          <input type="text" name="nombre2" placeholder="Nombre2" maxlength="20" required="required">
          <input type="text" name="apellido" placeholder="Apellido" maxlength="20" required="required">
          <input type="text" name="apellido2" placeholder="Apellido2" maxlength="20" required="required">
          <input type="text" name="correo" placeholder="Correo: name@example.com" maxlength="50" required="required">
          <input type="text" name="direccion" placeholder="Direccion" maxlength="50" required="required">
          <input type="text" name="user" placeholder="Usuario" maxlength="6" required="required">
          <input type="password" name="pass" placeholder="Password" maxlength="12" required="required">
          <br/>
          <br/>
          <p><strong>Nota: Todos los campos son obligatorios.</strong></p>
          <br/>
          <div id="izq" class="form-actions">
            <a id="cambioseccion" rel="popover" data-original-title="Iniciar Seccion" class="btn" type="button" href="#" name="btnseccion"><i class="icon-chevron-left"></i></a>
            <a id="resetform_reg" class="btn" rel="popover" data-original-title="Vaciar formulario" type="reset" href="#" name="borrar"><i class="icon-trash"></i></a>
            <a id="submitform_reg" class="btn btn-danger" rel="popover" data-original-title="Registrar" type="submit" href="#" name="enviar"><i class="icon-pencil icon-white"></i></a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
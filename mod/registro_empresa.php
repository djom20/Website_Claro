<div class="container-fluid">
  <div class="row-fluid">
    <div id="registro_empresa">
      <form name="fomempresa" id="formregistro" action="../consultas/registrar.php?form=forme" method="POST" class="well wellplus">
        <a class="close">&times;</a>
        <div class="center">
          <h3>REGISTRO DE EMPRESA</h3><br/>
          <input type="text" name="nit" placeholder="Nit" maxlength="10" required="required" autofocus="autofocus" pattern="^[0-9]{10}$">
          <input type="text" name="nombre" placeholder="Nombre de la Empresa" maxlength="20" required="required" pattern="^[A-Z][a-z]{3,20}$">
          <input type="text" name="representante" placeholder="Representante legal" maxlength="20" pattern="^[A-Z][a-z]{3,20}$">
          <input type="text" name="direccion" placeholder="Direccion" maxlength="50" required="required">
          <input type="text" name="correo" placeholder="Correo" maxlength="50" required="required" pattern="^([a-zA-Z0-9-_\.]+)@([a-zA-Z-_\.]{5,7}).([a-zA-Z-_\.]{2,3})$">
          <input type="text" name="user" placeholder="Usuario" maxlength="8" required="required" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{5,8}$">
          <input type="password" name="pass" placeholder="Password" maxlength="12" required="required" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
          <br/>
          <br/>
          <p><strong>Nota: Todos los campos son obligatorios.</strong></p>
          <br/>
          <div class="form-actions">
            <a id="cambioseccion2" rel="popover" data-original-title="Iniciar Seccion" class="btn" type="button" href="#" name="btnseccion">
              <i class="icon-chevron-left"></i>
            </a>
            <button id="resetform_reg" class="btn" type="reset" name="btnborrar" rel="popover" data-original-title="Vaciar Formulario"><i class="icon-refresh"></i></button>
            <button id="submitform_reg" class="btn btn-danger" name="btnenviar" type="submit" rel="popover" data-original-title="Registrarse"><i class="icon-pencil icon-white"></i></button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
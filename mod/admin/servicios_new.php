<div id="servicios_crear" class="base">
	<div id="content">
		<div id="content-header">
			<h1>Crear</h1>
		</div>
		<div id="breadcrumb">
			<a href="./" class="linkhome tip-bottom" data-original-title="Go to Home"><i class="icon-home"></i> Home</a>
			<a href=""><i class="icon-inbox"></i> Paquetes y Servicios</a>
			<a class="linkservicios" href="#servicios">Servicios</a>
			<a href="#servicios_crear" class="current"><i class="icon icon-pencil"></i> Crear</a>
		</div>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<div class="widget-box">
						<div class="widget-title">
							<span class="icon">
								<i class="icon-align-justify"></i>									
							</span>
							<h5>Crear Servicios</h5>
						</div>
						<div class="widget-content nopadding">
							<form action="../consultas/admin/new.php?tipo=5" method="POST" class="form-horizontal">
								<div class="control-group"> <label class="control-label">Nombre</label> <div class="controls"> <input name="nombre" value="" maxlength="10" required="required" autofocus="autofocus"> </div> </div>
								<div class="control-group"> <label class="control-label">Descripcion</label> <div class="controls"> <input name="descripcion" maxlength="20" value="" required="required"> </div> </div>
								<div class="control-group"> <label class="control-label">Precio</label> <div class="controls"> <input name="precio" value="" maxlength="10" required="required" pattern="^[0-9]{10}$"> </div> </div>
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
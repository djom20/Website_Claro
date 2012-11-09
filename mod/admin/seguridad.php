<div id="seguridad" class="base">
	<div id="content">
		<div id="content-header">
			<h1>Seguridad de Dashboard</h1>
		</div>
		<div id="breadcrumb">
			<a href="./" class="linkhome tip-bottom" data-original-title="Go to Home"><i class="icon-home"></i> Home</a>
			<a href="" class="current"><i class="icon-lock"></i> Seguridad</a>
			<a href="#seguridad" class="current">Cambio de Contraseña</a>
		</div>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<div class="widget-box">
						<div class="widget-title">
							<span class="icon">
								<i class="icon-pencil"></i>
							</span>
							<h5>Cambio de Contraseña del Administardor</h5>
						</div>
						<div class="widget-content nopadding">
							<form id="form-wizard" class="form-horizontal ui-formwizard" method="post" action="../consultas/admin/cambiar_pass.php">
								<div id="form-wizard-1" class="step ui-formwizard-content" style="display: block; ">
									<div class="control-group">
										<label class="control-label">Password</label>
										<div class="controls">
											<input type="password" name="password" class="ui-wizard-content">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Confirm Password</label>
										<div class="controls">
											<input type="password" name="password2" class="ui-wizard-content">
										</div>
									</div>						
								</div>
								<div class="form-actions">
										<input id="next" class="btn btn-primary ui-wizard-content ui-formwizard-button" type="submit" value="Cambiar">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
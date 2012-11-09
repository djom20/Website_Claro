<div id="sidebar">
	<ul style="display: block; ">
		<li><a href=""><i class="icon-globe"></i><span>Ip: <?php echo $_SERVER['REMOTE_ADDR']; ?></span></a></li>
		<li class="linkhome active"><a href="./"><i class="icon icon-home"></i><span>Dashboard</span></a></li>
		<li id="personal" class="submenu">
			<a href=""><i class="icon-user"></i><span>Personal</span><span class="label">4</span></a>
			<ul>
				<li class="linkvisitantes"><a href="#visitantes">Visitantes</a></li>
				<li class="linkusuarios"><a href="#usuarios">Usuarios</a></li>
				<li class="linkempresas"><a href="#empresas">Empresas</a></li>
				<li class="linktipos"><a href="#tipos">Tipos</a></li>
			</ul>
		</li>
		<li id="linkcompras" class="submenu">
			<a href=""><i class="icon-shopping-cart"></i><span>Comprás</span><span class="label">2</span></a>
			<ul>
				<li class="linkcomprasr"><a href="#compras">Comprás realizadas</a></li>
				<li class="linkcotizaciones"><a href="#cotizaciones">Cotizaciones</a></li>
			</ul>
		</li>
		<li id="linkpaquetesservicios" class="submenu">
			<a href=""><i class="icon-inbox"></i><span>Paquetes y Servicios</span><span class="label">3</span></a>
			<ul>
				<li class="linkpaquetes"><a href="#paquetes">Paquetes</a></li>
				<li class="linkservicios"><a href="#servicios">Servicios</a></li>
				<li class="linkasignaciones"><a href="#asignaciones">Asignaciones</a></li>
			</ul>
		</li>
		<li id="linksalir"><a href="../consultas/salir.php"><i class="icon icon-off"></i><span>Cerrar Seccion</span></a></li>
	</ul>
</div>
<div class="container-fluid">
	<div class="row-fluid">
		<div id="compra">
			<div id="base_form3">
				<label for="">Seleccione el paquete que más<br/>se ajuste a sus necesidades</label>
				<form action="">
					<table>
						<tr>
							<td>Paquetes:</td>
							<td>
								<select name="paquetes" id="">
									<?php 
										if(isset($_SESSION['userid'])){
											$sql='SELECT `id`,`nombre`,`precio` FROM `paquetes` WHERE `estado`=1';
											include('../clases/consultas.php');
											if($result > 0){
												while($row=mysql_fetch_array($result)){
													echo '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
												}
											}else{ echo '<option value="0">No existen paquetes.</option>'; }		
										}
									?>
								</select>
						</td>
						<tr>
							<td colspan="2">
								<div id="listado_servicios">
									<table id="list_servicios" class="table table-condensed">
										<thead>
										    <tr>
										    	<th>Servicio</th>
										    	<th>Descripcion</th>
										    	<th></th>
										    </tr>
										</thead>
										<tbody>
										  	<?php 
												if(isset($_SESSION['userid'])){
													$sql='';
													include('../clases/consultas.php');
													if($result > 0){
														while($row=mysql_fetch_array($result)){ 
															echo '<tr>';
															echo '<td></td>';
															echo '<td></td>';
															echo '</tr>';
														}
													}else{ echo '<tr><td colspan="2">No existen servicios todavia.</td></tr>'; }		
												}
											?>
										</tbody>
									</table>
								</div>
							</td>
						</tr>
						</tr>
						<tr>
							<td>Precio:</td>
							<td><input id="precio" type="text" name="precio" value="$0.000.000" disabled></td>
						</tr>
						<tr>
							<td colspan="2">&nbsp;</td>
						</tr>
						<tr>
							<td id="izq" colspan="2">
								<a class="btn btn-danger" type="submit" href="#"><i class="icon-ok icon-white"></i> Seleccionar</a>
							</td>
						</tr>
					</table>
				</form>
			</div>
			<div id="base_form4">
				<form action="">
					<ul>
						<li>Servicio1<a href=""><img src="../themes/img/icn_trash.png" alt="Eliminar"></a></li>
						<li>Servicio1<a href=""><img src="../themes/img/icn_trash.png" alt="Eliminar"></a></li>
						<li>Servicio1<a href=""><img src="../themes/img/icn_trash.png" alt="Eliminar"></a></li>
						<li>Servicio1<a href=""><img src="../themes/img/icn_trash.png" alt="Eliminar"></a></li>
						<li>Servicio1<a href=""><img src="../themes/img/icn_trash.png" alt="Eliminar"></a></li>
						<li>Servicio1<a href=""><img src="../themes/img/icn_trash.png" alt="Eliminar"></a></li>
						<li>Servicio1<a href=""><img src="../themes/img/icn_trash.png" alt="Eliminar"></a></li>					
					</ul>
					<p id="izq">
						<label for=""><strong>Total: $0.000.000</strong></label>
						<a class="btn btn-danger" type="submit" href="#"><i class="icon-shopping-cart icon-white"></i> Comprar</a>
					</p>
				</form>
			</div>
		</div>
	</div>
</div>
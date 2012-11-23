<?php 
	if (isset($_SESSION['reg'])) {
?>
		<script type="text/javascript" src="../themes/js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="../themes/js/mostrar_compra.js"></script>
<?php
		unset($_SESSION['reg']);
	}
?>

<div class="container-fluid">
	<div class="row-fluid">
		<div id="compra">
			<div id="base_form3">
				<p class="neg">Seleccione el paquete que más se ajuste a sus necesidades</p>
				<form action="">
					<div id="tablecompra">
						<table class="table table-condensed">
							<?php 
								if(isset($_SESSION['userid'])){
									$sql='SELECT `id`,`nombre`,`precio` FROM `paquetes` WHERE `estado`=1';
									include('../clases/consultas.php');
									if($result > 0){
										while($row=mysql_fetch_array($result)){
											$sql2='SELECT `servicios`.`nombre`, `servicios`.`descripcion`, `servicios`.`precio` FROM servicios, paquetes_servicios WHERE ((`servicios`.`estado` =1) AND (`paquetes_servicios`.`servicio` = `servicios`.`id`) AND (`paquetes_servicios`.`paquete` ='.$row['id'].'))';
											$result2 = mysql_query($sql2,$link);
											$my_error = mysql_error($link);
											$limit = mysql_num_rows($result2)+1;
											echo '<tr><td class="center" rowspan="'.$limit.'"><a class="btn" type="submit" href="../consultas/addproducto.php?id='.$row['id'].'&precio='.$row['precio'].'"><i class="icon-plus"></i></a></td>';
											echo '<td class="center" rowspan="'.$limit.'">'.$row['nombre'].'</td>';
											if($result2 > 0){
												while($row2 = mysql_fetch_array($result2)){
													echo '<td>'.$row2['nombre'].'</td><td>'.$row2['descripcion'].'</td><td class="der">$'.$row2['precio'].'</td></tr><tr>';
												}
												mysql_free_result($result2);
											}
											echo '<td class="neg" colspan="2"><strong>Subtotal</strong></td>';
											echo '<td class="der neg"><strong>$'.$row['precio'].'</strong></td></tr>';
										}
										mysql_free_result($result);
									}else{ echo '<tr><td>No existen paquetes.</td></tr>'; }		
								}
							?>
						</table>
					</div>
				</form>
			</div>
			<div id="base_form4">
				<form name="formcompras" action="../consultas/comprar.php" method="POST">
					<div id="tableresult">
						<table class="table table-condensed">
							<?php 
								if(isset($_SESSION['userid'])){
									$precio=0;
									$sql='SELECT `id`,`paquete`,`precio` FROM `cotizaciones` WHERE `estado` = 1 AND `usuario` ='.$_SESSION['userid'];
									include('../clases/consultas.php');
									if($result > 0){
										while($row=mysql_fetch_array($result)){
											$sql2='SELECT `nombre` FROM `paquetes` WHERE `estado` = 1 AND `id` = '.$row['paquete'];
											$result2 = mysql_query($sql2,$link);
											$my_error = mysql_error($link);
											if($result2 > 0){
												if($row2 = mysql_fetch_array($result2)){}
												mysql_free_result($result2);
											}
											echo '<tr><td><a class="btn" type="button" href="../consultas/delproducto.php?id='.$row['id'].'"><i class="icon-trash"></i></a></td>';
											echo '<td>'.$row2['nombre'].'</td>';
											echo '<td class="der neg"><strong>$'.$row['precio'].'</strong></td></tr>';
											$precio += $row['precio'];
										}
										mysql_free_result($result);
									}else{ echo '<tr><td>No existen cotizaciones.</td></tr>'; }		
								}
							?>
						</table>
					</div>
					<p id="footercompra" class="der">
						<label for=""><strong>Total: $<?php if(isset($precio)){ echo $precio; } ?> Mensual</strong></label>
						<button class="btn btn-danger" type="submit" href="#"><i class="icon-shopping-cart icon-white"></i> Comprar</button>
					</p>
				</form>
			</div>
		</div>
	</div>
</div>
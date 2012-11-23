<?php 
	$sql='SELECT DISTINCT `compras`.`id`,`compras`.`fecha`,`compras`.`total`,`usuarios`.`user`  FROM `compras`, `usuarios`  WHERE `compras`.`usuario` =  `usuarios`. `id` ';
	include('../clases/consultas.php');

    $count=mysql_affected_rows();

	$sql2='SELECT sum(`total`) as total FROM `compras` WHERE `id`>0';
	$result2=mysql_query($sql2,$link);
    echo mysql_error($link);
?>
<div id="compras" class="base">
	<div id="content">
		<div id="content-header">
			<h1>Comprás Realizadas</h1>
		</div>
		<div id="breadcrumb">
			<a href="./" class="linkhome tip-bottom" data-original-title="Go to Home"><i class="icon-home"></i> Home</a>
			<a href=""><i class="icon-shopping-cart"></i> Comprás</a>
			<a href="#compras" class="current">Comprás Realizadas</a>
		</div>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<!--<div class="btn-group" style="width: auto; ">
						<a class="btn btn-large tip-bottom" data-original-title="Buscar"><i class="icon-search"></i></a>						
					</div>-->
					<div class="widget-box">
						<div class="widget-title">
							<span class="icon">
								<i class="icon-shopping-cart"></i>
							</span>
							<h5>Listado de Comprás Realizadas</h5>
							<span class="label">
								<?php if(isset($count)){ echo $count; } ?>
							</span>
						</div>
						<div class="widget-content nopadding">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>Id</th>
										<th>Usuario</th>
										<th>Fecha y Hora</th>
										<th>Total</th>
										<th>Acciones</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th class="total-label" colspan="3">
											 Total:
										</th>
										<th class="total-amount">$
											<?php 
												if($result > 0){
													if($row=mysql_fetch_array($result2)){
														echo $row['total'];
														
													}
												}
											?>
										</th>
										<th></th>
									</tr>
								</tfoot>
								<tbody>
									<?php
										if($result > 0){
											while($row=mysql_fetch_array($result)){
												echo '<tr><td>'.$row['id'].'</td><td>'.$row['user'].'</td><td>'.$row['fecha'].'</td><td>$'.$row['total'].'</td>';
												echo '<td><a href="../consultas/ver_compra.php?id='.$row['id'].'" class="tip-top" data-original-title="Ver"><i class="icon-eye-open"></i></a></td></tr>';
											}
										}
									?>
								</tbody>
							</table>
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
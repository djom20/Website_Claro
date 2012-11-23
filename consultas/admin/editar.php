<?php 
	if (isset($_REQUEST['tipo'])) {
		if ($_REQUEST['tipo']==1) {
			if (isset($_REQUEST['id'])) {
				$sql='SELECT `usuarios`.`user` FROM `usuarios` WHERE `usuarios`.`id` = "'.$_REQUEST['id'].'"';
				include('../../clases/consultas.php');
				if($result > 0){
					if($row=mysql_fetch_array($result)){
						echo '<input class="uneditable-input" name="id" type="hidden" value="'.$_REQUEST['id'].'">';
						echo '<div class="control-group"> <label class="control-label">Nombre</label> <div class="controls"> <input name="nombre" type="text" value="'.$row['user'].'" required="required"> </div> </div>';
						echo '<div class="control-group"> <label class="control-label">Cambiar Password:</label> <div class="controls"> <input name="pass" type="password"> </div> </div>';
					}
				}
			}
		}elseif ($_REQUEST['tipo']==2) {
			if (isset($_REQUEST['id'])) {
				$sql='SELECT `id`,`nombre`,`representante`,`direccion`,`correo`,`ubicacion`,`usuario` FROM `empresa` WHERE `id` = "'.$_REQUEST['id'].'"';
				include('../../clases/consultas.php');
				if($result > 0){
					if($row=mysql_fetch_array($result)){
						echo '<input name="id" type="hidden" value="'.$_REQUEST['id'].'">';
						echo '<div class="control-group"> <label class="control-label">Nombre</label> <div class="controls"> <input name="nombre" type="text" value="'.$row['nombre'].'" required="required"> </div> </div>';
						echo '<div class="control-group"> <label class="control-label">Representante</label> <div class="controls"> <input name="representante" type="text" value="'.$row['representante'].'" required="required"> </div> </div>';
						echo '<div class="control-group"> <label class="control-label">Dirección</label> <div class="controls"> <input name="direccion" type="text" value="'.$row['direccion'].'" required="required"> </div> </div>';
						echo '<div class="control-group"> <label class="control-label">Correo</label> <div class="controls"> <input name="correo" type="text" value="'.$row['correo'].'" required="required"> </div> </div>';
					}
				}
			}
		}elseif ($_REQUEST['tipo']==3) {
			if (isset($_REQUEST['id'])) {
				$sql='SELECT `nombre`,`descripcion` FROM `usuarios_tipo` WHERE `id` = "'.$_REQUEST['id'].'"';
				include('../../clases/consultas.php');
				if($result > 0){
					if($row=mysql_fetch_array($result)){
						echo '<input name="id" type="hidden" value="'.$_REQUEST['id'].'">';
						echo '<div class="control-group"> <label class="control-label">Nombre</label> <div class="controls"> <input name="nombre" type="text" value="'.$row['nombre'].'" required="required"> </div> </div>';
						echo '<div class="control-group"> <label class="control-label">Descrición</label> <div class="controls"> <input name="descripcion" type="text" value="'.$row['descripcion'].'" required="required"> </div> </div>';
					}
				}
			}
		}elseif ($_REQUEST['tipo']==4) {
			if (isset($_REQUEST['id'])) {
				$sql='SELECT `nombre`,`precio` FROM `paquetes` WHERE `id` = "'.$_REQUEST['id'].'"';
				include('../../clases/consultas.php');
				if($result > 0){
					if($row=mysql_fetch_array($result)){
						echo '<input name="id" type="hidden" value="'.$_REQUEST['id'].'">';
						echo '<div class="control-group"> <label class="control-label">Nombre</label> <div class="controls"> <input name="nombre" value="'.$row['nombre'].'" required="required"> </div> </div>';
						echo '<div class="control-group"> <label class="control-label">Precio</label> <div class="controls"> <input name="precio" value="'.$row['precio'].'" required="required"> </div> </div>';
					}
				}
			}
		}elseif ($_REQUEST['tipo']==5) {
			if (isset($_REQUEST['id'])) {
				$sql='SELECT `nombre`,`descripcion`,`precio` FROM `servicios` WHERE `id` = "'.$_REQUEST['id'].'"';
				include('../../clases/consultas.php');
				if($result > 0){
					if($row=mysql_fetch_array($result)){
						echo '<input name="id" type="hidden" value="'.$_REQUEST['id'].'">';
						echo '<div class="control-group"> <label class="control-label">Nombre</label> <div class="controls"> <input name="nombre" value="'.$row['nombre'].'" required="required"> </div> </div>';
						echo '<div class="control-group"> <label class="control-label">Descripcion</label> <div class="controls"> <input name="descripcion" value="'.$row['descripcion'].'" required="required"> </div> </div>';
						echo '<div class="control-group"> <label class="control-label">Precio</label> <div class="controls"> <input name="precio" value="'.$row['precio'].'" required="required"> </div> </div>';
					}
				}
			}
		}
	}
?>
<?php
	include 'Clases/clases.php';
	if (isset($_GET['rut']) == false)
		$rut_id = 0;	
	else
		$rut_id = $_GET['rut'];
	$usuario = new usuario($rut_id);
	
	if($usuario->existeUsuarioDB() == true){
		$usuario->cargarUsuarioDB();
		if  ($usuario->usuarioPerteneceAPerfil(3)){		
			?>
			<table width="200" border="1">
			  <tr>
				<td>Nombres</td>
				<td><?php echo $usuario->getNombres();  ?></td>
			  </tr>
				<tr>
				<td>Apellidos</td>
				<td><?php echo $usuario->getApellidos(); ?></td>
			  </tr>
			  <tr>
				<td>Direccion</td>
				<td><?php echo $usuario->getDireccion(); ?></td>
			  </tr>
			  <tr>
				<td>Telefono</td>
				<td><?php echo $usuario->getTelefono(); ?></td>
			  </tr>
			  <tr>
				<td>Rut</td>
				<td><?php echo $usuario->getRutUsuario();?></td>
			  </tr>
			  <tr>
				<td>E-mail</td>
				<td><?php echo $usuario->getEmail();?></td>
			  </tr>
			  <tr>
				<td>Fecha Nacimiento</td>
				<td><?php echo $usuario->getFechaNacimiento(); ?></td>
			  </tr>
			  <tr>
				<td>Contrasena</td>
				<td>*********</td>
			  </tr>
			  </table>
			
			<?php
		}else{
			echo "el usuario no es un paciente del sitema";
		}
	}
	else{
		echo "el usuario con el Rut {$usuario->getRutUsuario()}, no existe";
	}
?>
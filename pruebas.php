<?php
	include 'Clases/db.php';
	include 'Clases/tipos_Usuarios.php';
	include 'Clases/usuario.php';
	
	$usuario = new usuario(8);
	
$usuario->existeUsuarioDB();
	//echo "<br>".$tipoUsuario->getId_Tipo_Usuario();
	//echo "<br>".$tipoUsuario->getDescripcion();
	//echo "<br>".$usuario->getUsuario();
	echo "<br>".$usuario->getRutUsuario();
	echo "<br>".$usuario->getNombre();
	echo "<br>".$usuario->getApellidos();
	echo "<br>".$usuario->getEmail();
	
?>

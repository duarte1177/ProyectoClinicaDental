<?php
	include 'Clases/clases.php';
	
		//include 'Clases/cita.php';
	if (isset($_GET["id_cita"]) == false)
		echo "No ha especificado que cita";
	else{
		$cita = new cita($_GET["id_cita"]);
		$cita->cargarCitaDB();
		$paciente = $cita->getPaciente();
?>


<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>VER CITA</title>
	</head>

	<body>
    	<table width="200" border="1">
  <tr>
    <td>NOMBRES PACIENTE:</td>
    <td><?php echo $cita->getNombrePaciente(); ?></td>
  </tr>
  <tr>
    <td>TELEFONO:</td>
    <td><?php echo $paciente->getTelefono();?></td>
  </tr>
  <tr>
    <td>EMAIL:</td>
    <td><?php echo $paciente->getEmail();?></td>
  </tr>
  <tr>
    <td>DIRECCION:</td>
    <td><?php echo $paciente->getDireccion();?></td>
  </tr>
  <tr>
    <td>NOMBRE ODONTOLOGO</td>
    <td><?php echo $cita->getNombreOdontologo();?></td>
  </tr>
    <tr>
    <td>FECHA CITA:</td>
    <td><?php echo $cita->getFechaCita();?></td>
  </tr>
  <tr>
    <td>HORA INICIO ATENCION:</td>
    <td><?php echo $cita->getHoraInicioCita();?></td>
  </tr>
  <tr>
    <td>HORA FIN ATENCION:</td>
    <td><?php echo $cita->getHoraFinCita();?></td>
  </tr>
  <tr>
    <td>TRATAMIENTO:</td>
    <td><?php echo $cita->getTratmiento();?></td>
  </tr> 
</table>

<?php } ?>

<input type="button" value="volver atrás" name="volver atrás" onclick="history.back()" >
	</body>
</html>
<?php
	include 'Clases/clases.php';
	
	if (isset($_GET['id_cita'])){
		$cita = new cita($_GET['idCitaModificar']){
		if ($cita->existeCitaDB() == true){
			$cita->cargarCitaDB();
			
			
		}

?>

<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>EDITAR CITA</title>
	</head>

	<body>
    	<table width="200" border="1">
  <tr>
    <td>NOMBRES PACIENTE:</td>
    <td>
    	<input type="text" name="nombrePaciente" size="50" maxlength="50" />  
    </td>
  </tr>
  <tr>
    <td>APELLIDOS PACIENTE:</td>
    <td>
    	<input type="text" name="apellidoPaciente" size="50" maxlength="50" />
    </td>
  </tr>
  <tr>
    <td>TELEFONO:</td>
    <td>
    	<input type="tex" name="telefono" size="12" maxlength="12" />
    </td>
  </tr>
  <tr>
    <td>EMAIL:</td>
    <td>
    	<input type="text" name="e-mail" size="50" maxlength="50" />
    </td>
  </tr>
  <tr>
    <td>DIRECCION:</td>
    <td>
    	<input type="text" name="direccion" size="70" maxlength="70" />
    </td>
  </tr>
  <tr>
    <td>NOMBRE ODONTOLOGO</td>
    <td>
    	<input type="text" name="nombreOdontologo" size="50" maxlength="50" />
    </td>
  </tr>
  <tr>
    <td>HORA ATENCION:</td>
    <td>
    	<input type="text" name="horaAtencion" size="10" maxlength="10" />
    </td>
  </tr>
  <tr>
    <td>FECHA ATENCION:</td>
    <td>
    	<input type="text" name="fechaAtencion" size="10" maxlength="10" />
    </td>
  </tr>
  <tr>
    <td>HORA INICIO ATENCION:</td>
    <td>
    	<input type="text" name="horaInicioAtencion" size="10" maxlength="10" />
    </td>
  </tr>
  <tr>
    <td>HORA FIN ATENCION:</td>
    <td>
    	<input type="text" name="horaFinAtencion" size="10" maxlength="10" />
    </td>
  </tr>
  <tr>
    <td>TRATAMIENTO:</td>
    <td>
    	<input type="text" name="tratamiento" size="50" maxlength="50" />
    </td>
  </tr> 
</table>

	</body>
</html>
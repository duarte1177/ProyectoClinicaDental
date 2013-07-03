<?PHP
	include 'Clases/clases.php';
	
	if (isset ($_POST['rut'])){
	$rut = $_POST['rut'];
	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$direccion = $_POST['direccion'];
	$telefono = $_POST['telefono'];
	$email = $_POST['e-mail'];
	$fechaNacimiento = $_POST['fechaNacimiento'];
	$contrasena = $_POST['contrasena'];
	
	$tipoUsuario = new tipo_usuario(4);
	$usuario = new usuario($rut, $nombres, $apellidos, $direccion, $telefono, $email, $fechaNacimiento, $contrasena);
	$usuario->guardarUsuarioDB();
	
	header("Location: verFichaPaciente.php?rut=$rut");

	
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
	<HEAD>
		<meta http-equiv="Content-Type" content="text/html; 		    charset=utf-8" />
	<HEAD>
    <TITLE><H3>FICHA PACIENTE</H3></TITLE>
    	<script language="javascript" type="text/javascript" src="js/validar.js"></script>
    </HEAD>
    <BODY>
    	<FORM name="formularioRegistro" method="POST" action="crearFichaPaciente.php" onsubmit="return validar();">
        <TABLE>
        <TR>
            <TD>NOMBRES:</TD>
            <TD>
                <input type="text" name="nombres" size="50" maxlength="50" onkeypress="return soloLetras(event);"/>
            </TD>
        </TR>
        <TR>
            <TD>APELLIDOS:</TD>
            <TD>
                <input type="text" name="apellidos" size="50" maxlength="50" onkeypress="return soloLetras(event);"/>
            </TD>
        </TR>
        <TR>
            <TD>DIRECCION:</TD>
            <TD>
                <input type="text" name="direccion" size="50" maxlength="70"/>
            </TD>
        </TR>
        <TR>
            <TD>TELEFONO:</TD>
            <TD>
               	<input type="text" name="telefono" size="12" maxlength="12" onkeypress="return soloNumeros(event);"/>
            </TD>
        </TR>
        <TR>
            <TD>RUT:</TD>
            <TD>
               	<input type="text" name="rut" size="13" maxlength="13" onkeypress="return soloRut(event);"/>
            </TD>
        </TR>
        <TR>
            <TD>E-MAIL:</TD>
            <TD>
               	<input type="text" name="e-mail" size="65" maxlength="65" onkeypress="return validarEmail(event);"/>
            </TD>
        </TR>
        <TR>
            <TD>FECHA NACIMIENTO:</TD>
            <TD>
               	<input type="text" name="fechaNacimiento" size="10" maxlength="10"/>
            </TD>
        </TR>
        <TR>
            <TD>CONTRASENA</TD>
            <TD>
               	<input type="password" name="contrasena" size="30" maxlength="30"/>
            </TD>
        </TR>
        <TR>
			<TD>
				<input type="reset" value="limpiar">
			</TD>
			<TD>
				<input type="submit" name="registrar" value="registrar"/>
			</TD>
		</TR>
    </TABLE>
    </FORM>                    
    </BODY>	
</HTML>
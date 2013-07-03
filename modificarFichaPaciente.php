<?PHP
	include 'Clases/clases.php';
	
	$nombres = "";
	$apellidos = "";
	$direccion = "";
	$telefono = "";
	$rut =		"";
	$email = "";
	$fechaNacimiento = "";
	$contrasena = "";
	
	if (isset($_GET['rutUsuarioModificar'])){
		$usuario = new usuario($_GET['rutUsuarioModificar']);			
		if ($usuario->existeUsuarioDB() == true){
			$usuario->cargarUsuarioDB();
			$nombres = $usuario->getNombres();
			$apellidos = $usuario->getApellidos();
			$direccion = $usuario->getDireccion();
			$telefono = $usuario->getTelefono();
			$rut = $usuario->getRutUsuario();
			$email = $usuario->getEmail();
			$fechaNacimiento = $usuario->getFechaNacimiento();
			$contrasena = $usuario->getContrasena();
			
			
		}else{
			echo "el usuario solicitrado no existe";
		}
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<HEAD>
    <TITLE><H3>MODIFICAR FICHA PACIENTE</H3></TITLE>
    	<script language="javascript" type="text/javascript" src="js/validar.js"></script>
    </HEAD>
    <BODY>
    	<FORM name="formularioRegistro" method="POST" action="crearFichaPaciente.php" onsubmit="return validar();">
        <TABLE>
        <TR>
            <TD>NOMBRES</TD>
            <TD>
                <input type="text" name="nombres" size="50" maxlength="50" onkeypress="return soloLetras(event);" value="<?php echo $nombres; ?>"/>
            </TD>
        </TR>
        <TR>
            <TD>APELLIDOS</TD>
            <TD>
                <input type="text" name="apellidos" size="50" maxlength="50" onkeypress="return soloLetras(event);" value="<?php echo $apellidos; ?>"/>
            </TD>
        </TR>
        <TR>
            <TD>DIRECCION</TD>
            <TD>
                <input type="text" name="direccion" size="50" maxlength="70" value="<?php echo $direccion; ?>"/>
            </TD>
        </TR>
        <TR>
            <TD>TELEFONO</TD>
            <TD>
               	<input type="text" name="telefono" size="12" maxlength="12" onkeypress="return soloNumeros(event);" value="<?php echo $telefono; ?>"/>
            </TD>
        </TR>
        <TR>
            <TD>RUT</TD>
            <TD>
               	<input type="text" name="rut" size="13" maxlength="13" onkeypress="return soloRut(event);"ue="<?php echo $rut; ?>"/>
            </TD>
        </TR>
        <TR>
            <TD>E-MAIL</TD>
            <TD>
               	<input type="text" name="e-mail" size="65" maxlength="65" value="<?php echo $email; ?>"/>
            </TD>
        </TR>
        <TR>
            <TD>FECHA NACIMIENTO</TD>
            <TD>
               	<input type="text" name="fechaNacimiento" size="10" maxlength="10" value="<?php echo $fechaNacimiento; ?>"/>
            </TD>
        </TR>
        <TR>
            <TD>CONTRASENA</TD>
            <TD>
              <input type="text" name="contrasena" size="30" maxlength="30" value="<?php echo $contrasena;?> "/>
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
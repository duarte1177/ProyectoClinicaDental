<?php
	include 'Clases/clases.php';
	
	if (isset ($_POST['id_Cita'])){
	$paciente = $_POST['paciente'];
	$odontologo = $_POST['odontologo'];
	$fecha_Cita = $_POST['fechaCita'];
	$hora_Cita = $_POST['horaCita'];
	$tratamiento = $_POST['tratamiento'];
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
	<HEAD>
		<meta http-equiv="Content-Type" content="text/html; 		    charset=utf-8" />
	<HEAD>
    <TITLE><H3>CITA</H3></TITLE>
    </HEAD>
    <BODY>
    	<FORM name="formularioCita" method="POST" action="Clases/crearCita.php">
        <TABLE>
        <TR>
            <TD>PACIENTE:</TD>
            <TD>
                <input type="text" name="paciente" size="50" maxlength="50"/>
            </TD>
        </TR>
        <TR>
            <TD>ODONTOLOGO:</TD>
            <TD>
                <input type="text" name="odontologo" size="50" maxlength="50"/>
            </TD>
        </TR>
        <TR>
            <TD>FECHA CITA:</TD>
            <TD>
                <input type="date" name="fechaCita" size="40" maxlength="20"/>
            </TD>
        </TR>
        <TR>
            <TD>HORA CITA:</TD>
            <TD>
               	<input type="time" name="horaCita" size="15" maxlength="15"/>
            </TD>
        </TR>
        <TR>
            <TD>TRATAMIENTO:</TD>
            <TD>
               	<input type="text" name="tatamiento" size="70" maxlength="100"/>
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


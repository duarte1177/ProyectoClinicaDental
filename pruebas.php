<?php
	include 'Clases/clases.php';
	
	$citas = new mantenedor_cita();
	$citas_hoy = $citas->get_citas_fecha("2013-06-12");
	foreach($citas_hoy as $cita){
		echo "{";
		
		echo "id: '{$cita->getIdCita()}',";
		echo "title: 'Paciente: {$cita->getNombrePaciente()}',";
		echo "start: '{$cita->getFechaCita()} {$cita->getHoraInicioCita()}',";
		echo "start: '{$cita->getFechaCita()} {$cita->getHoraFinCita()}',";
		echo "url:'',";
		echo "allDay: false";
		echo "},";
}
?>

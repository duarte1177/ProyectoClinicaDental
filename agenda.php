<?php
	include 'Clases/clases.php';
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>AGENDA</title>
        <link rel="stylesheet" type="text/css" href="css/fullcalendar.css" />
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.10.2.custom.min.js"></script>
        <script type="text/javascript" src="js/fullcalendar.js"></script>
    	<script>
			$(document).ready(function() {			
				$('#calendar').fullCalendar({
					events: [
							<?php
								$citas = new mantenedor_cita();
								$citas_hoy = $citas->get_citas();
								foreach($citas_hoy as $cita){
									echo "{";
									
									echo "id: '{$cita->getIdCita()}',";
									echo "title: 'Paciente: {$cita->getNombrePaciente()}',";
									echo "start: '{$cita->getFechaCita()} {$cita->getHoraInicioCita()}',";
									echo "end: '{$cita->getFechaCita()} {$cita->getHoraFinCita()}',";
									echo "url:'verCita.php?id_cita={$cita->getIdCita()}',";
									echo "allDay: false";
									echo "},";
								}
							?>
				]})
				
			});
        </script>
    </head>
    <body>
    <div id="calendar">
    </div>
    
    </body>
</html>

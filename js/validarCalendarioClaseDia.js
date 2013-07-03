// JavaScript Document
function calendarioClaseDia ($dia) {
	switch ($dia) {
		case 1: $clase = 'lunes semana'; break;
		case 2: $clase = 'martes semana'; break;
		case 3: $clase = 'miercoles semana'; break;
		case 4: $clase = 'jueves semana'; break;
		case 5: $clase = 'viernes semana'; break;
		case 6: $clase = 'sabado finDeSemana'; break;
		case 7: $clase = 'domingo finDeSemana'; break;
	}
	return $clase;
}

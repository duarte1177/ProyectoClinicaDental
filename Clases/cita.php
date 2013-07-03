<?php
class cita{
	private $id_cita;
	private $usuario_paciente;
	private	$usuario_odontologo;
	private $fecha_cita;
	private $hora_inicio_cita;
	private $hora_fin_cita;
	private $tratamiento;
	
	public function __construct($id_cita, $usuario_paciente = NULL, $usuario_odontologo = NULL, $fecha_cita = NULL, $hora_inicio_cita = NULL,$hora_fin_cita = NULL, $tratamiento = NULL){
		$this->id_cita= $id_cita;
		$this->usuario_paciente = $usuario_paciente;
		$this->usuario_odontologo = $usuario_odontologo;
		$this->fecha_cita = $fecha_cita;
		$this->hora_inicio_cita = $hora_inicio_cita;
		$this->hora_fin_cita = $hora_fin_cita;
		$this->trataniento = $tratamiento;
	}
	
	public function cargarCitaDB(){
		$db = DB::getInstance();
		$sql = "SELECT * FROM  `cita` WHERE  `ID_CITA` = $this->id_cita LIMIT 1";
		$db->setQuery($sql);

		$cita = $db->loadObjectList();

		$this->id_cita = $cita[0]->ID_CITA;
		$paciente = new usuario($cita[0]->ID_PACIENTE); // En la variable paciente almaceno mediante el rut_Usuario  los datos de usuario
		$paciente->cargarUsuarioDB();
		$this->usuario_paciente = $paciente;		
		
		$odontologo = new usuario($cita[0]->ID_ODONTOLOGO);
		$odontologo->cargarUsuarioDB();
		$this->usuario_odontologo = $odontologo;
		
		$this->fecha_cita = $cita[0]->FECHA_CITA;
		
		$this->hora_inicio_cita = $cita[0]->HORA_INICIO_CITA;
		$this->hora_fin_cita = $cita[0]->HORA_FIN_CITA;

		$this->tratamiento = $cita[0]->TRATAMIENTO;
			
	}
	public function existeCitaDB(){
		$db = DB::getInstance();
		$sql = "SELECT * FROM `cita` WHERE `ID_CITA` = '$this->id_cita' LIMIT 1";
		$db->setQuery($sql);
		$cita = $db->loadObjectList();
		if (count($cita) >0)//si la cantidad de datos es > 0, entoces llegaron datos
			return true;
		else
			return false;
	}
	
	public function setId_Cita($id_citaNuevo){
		$this->id_cita = $id_citaNuevo;
	}
	public function setPaciente($usuario_pacienteNuevo){
		$this->paciente = $pacienteNuevo;
	}
	public function setodontologo($usuario_odontologoNuevo){
		$this->odontologo = $odontologoNuevo;
	}
	public function setFechaAtencion($fecha_CitaNuevo){
		$this->fecha_cita = $fecha_citaNuevo;
	}
	public function setHoraAtencion($hora_citaNuevo){
		$this->hora_inicio_cita = $hora_citaNuevo;
	}
	public function setHoraFinAtencion($hora_citaNuevo){
		$this->hora_fin_cita = $hora_citaNuevo;
	}
	public function setTaratamiento($tratamientoNuevo){
		$this->tratamiento = $tratamientoNuevo;
	}
	
	public function getIdCita(){
		return $this->id_cita;
	}
	public function getPaciente(){
		return $this->usuario_paciente;
	}
	public function	getNombrePaciente(){
		return $this->usuario_paciente->getNombres()." ".$this->usuario_paciente->getApellidos();
	}
	public function getNombreOdontologo(){
		return $this->usuario_odontologo->getNombres()." ".$this->usuario_odontologo->getApellidos();
	}
	public function getFechaCita(){
		return $this->fecha_cita;
	}
	public function getHoraInicioCita(){
		return $this->hora_inicio_cita;
	}
	public function getHoraFinCita(){
		return $this->hora_fin_cita;
	}
	public function getTratmiento(){
		return $this->tratamiento;
	}
}
?> 
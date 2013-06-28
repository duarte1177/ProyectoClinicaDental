<?php
	class agenda{
		private $id_Agenda;
		private $id_Paciente;
		private $id_Odontologo;
		private $id_Dia;
		private $hora_Cita;
		
		public function __Construct($id_Agenda, $id_Paciente = NULL, $id_Odontologo = NULL, $id_Dia = NULL, $hora_Cita = NULL){
			$this->idAgenda = $id_Agenda;
			$this->idPaciente = $id_Paciente;
			$this->idOdontologo = $id_Odontologo;
			$this->idDia = $id_Dia;
			$this->horaCita = $hora_Cita;
		}
		
		public function cargarAgendaDB(){
		
		$db = DB::getInstance();
		$sql= "SELECT * FROM  `agenda` WHERE  `ID_AGENDA` = $this->idAgenda LIMIT 1";
		$db->setQuery($sql);
		$agenda = $db->loadObjectList();
		$this->idAgenda = $agenda[0]->ID_AGENDA;
		$this->idPaciente = $agenda[0]->ID_PACIENTE;
		$this->idOdontologo = $agenda[0]->ID_ODONTOLOGO;
		$this->idDia = $agenda[0]->ID_DIA;
		$this->horaCita = $agenda[0]->HORA_CITA;
	}
		
		public function setIdAgenda($id_AgendaNuevo){
			$this->idAgenda = $id_AgendaNuevo;
		}
		public function setIdPaciente($id_PacienteNuevo){
			$this->idPaciente = $id_PacienteNuevo;
		}
		public function setIdOdontologo($id_OdontologoNuevo){
			$this->idOdontologo = $id_OdontologoNuevo;
		}
		public function setIdDia($idDiaNuevo){
			$this->idDia = $idDiaNuevo;
		}
		public function setHoraCita($horaCitaNuevo){
			$this->horaCita = $horaCitaNuevo;
		}
		
		public function getIdAgenda(){
			return $this->idAgenda;
		}
		public function getIdPaciente(){
			return $this->idPaciente;
		}
		public function getIdOdontologo(){
			return $this->idOdontologo;
		}
		public function getIdDia(){
			return $this->idDia;
		}
		public function getIdOdontologo(){
			return $this->idOdontologo;
		}
	}
?>
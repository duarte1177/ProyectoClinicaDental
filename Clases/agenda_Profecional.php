<?php
	class agenda_Profecional{
		private $id_Agenda_Profecional;
		private $id_Agenda;
		private $observacion;
		
		public function __Construct($id_Agenda_Profecional, $id_Agenda = NULL, $observacion = NULL){
			$this->idAgendaProfecional = $id_Agenda_Profecional;
			$this->idAgenda = $id_Agenda;
			$this->observacion = $observacion;
		}
		
		public function setIdAgendaProfecional($id_Agenda_ProfecionalNuevo){
			$this->idAgendaProfecional = $id_Agenda_ProfecionalNuevo;
		}
		public function setIdAgenda($id_AgendaNuevo){
			$this->idAgenda = $id_AgendaNuevo;
		}
		public function setObservacion($observacionNuevo){
			$this->observacion = $observacionNuevo;
		}
		
		public function getIdAgendaProfecional(){
			return $this->idAgendaProfecional;
		}
		public function getIdAgenda(){
			return $this->idAgenda;
		}
		public function getObservacion(){
			return $this->observacion;
		}
	}
?>
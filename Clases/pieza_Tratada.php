<?php
	class piezas_Tratadas{
		private $id_Pieza_Tratada;
		private $id_Pieza;
		private $id_Tratamiento;
		private $observacion;
		
		public function __Construct($id_Pieza_Tratada, $id_Pieza = NULL, $id_Tratamiento = NULL, $observacion = NULL){
			$this->idPiezaTratada = $id_Pieza_Tratada;
			$this->idPieza = $id_Pieza;
			$this->id_Tratamiento = $id_Tratamiento;
			$this->observacion = $observacion;
		}
		
		public function setIdPiezaTratada($idPiezaTratadaNuevo){
			$this->idPiezaTratada = $idPiezaTratadaNuevo;
		}
		public function setIdPieza($id_PiezaNuevo){
			$this->idPieza = $id_PiezaNuevo;
		}
		public function setIdTratamiento($idTratamientoNuevo){
			$this->idTratamiento = $idTratamientoNuevo;
		}
		public function setObservacion($observacionNuevo){
			$this->observacion = $observacionNuevo;
		}
		
		public function getIdPiezaTratada(){
			return $this->idPiezaTratada;
		}
		
		public function getIdPieza(){
			return $this->idPieza;
		}
		public function getIdTratamiento(){
			return $this->idTratamiento;
		}
		public function getObservacion(){
			return $this->observacion;
		}
	}
?>
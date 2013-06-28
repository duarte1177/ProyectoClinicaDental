<?php
	class visita{
		private $id_Visita;
		private $id_Ficha_Paciente;
		private $fecha_Visita;
		private $descripcion;
		
		public function __Construct($id_Visita, $id_Ficha_Paciente = NULL, $fecha_Visita = NULL, $descripcion = NULL){
			$this->idVisita = $id_Visita;
			$this->idFichaPaciente = $id_Ficha_Paciente;
			$this->fechaVisita = $fecha_Visita;
			$this->descripcion = $descripcion;
		}
		
		public function cargarVisitaDB(){
		
		$db = DB::getInstance();
		$sql= "SELECT * FROM  `visitas` WHERE  `ID_VISITA` = $this->idVisita LIMIT 1";
		$db->setQuery($sql);
		$visita = $db->loadObjectList();
		$this->idVisita = $visita[0]->ID_VISITA;
		$this->idFichaPaciente = $visita[0]->ID_FICHA_PACIENTE;
		$this->fechaVisita = $visita[0]->FECHA_VISITA;
		$this->descripcion = $visita[0]->DESCRIPCION;
	}
		
		public function setIdVisita($idVisitaNuevo){
			$this->idVisita = $idVisiataNuevo;
		}
		public function setIdFichaPaciente($idFichaPacienteNuevo){
			$this->idFichaPaciente = $idFichaPacienteNuevo;
		}
		public function setFecha($fecha_VisitaNuevo){
			$this->fecha = $fecha_VisitaNuevo;
		}
		public function setDescripcion($descripcionNuevo){
			$this->descripcion = $descripcionNuevo;
		}
		
		public function getIdVisita(){
			return $this->idVisita;
		}
		public function getIdFichaPaciente(){
			return $this->idFichaPaciente;
		}
		public function getFecha(){
			return $this->fechaVisita;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
	}
?>
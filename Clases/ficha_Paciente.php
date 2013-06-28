<?php
	class ficha_Paciente{
		private $id_Ficha_Paciente;
		private $descripcion;
		
		public function __Construct($id_Ficha_Paciente, $descripcion = NULL){
			$this->idFichaPaciente = $id_Ficha_Paciente;
			$this->descripcion = $descripcion;
		}
		
		public function setIdFichaPaciente($idFichaPacienteNuevo){
			$this->idFichaPaciente = $idFichaPacienteNuevo;
		}
		public function setDescripcion($descripcionNuevo){
			$this->descripcion = $descripcionNuevo;
		}
		
		public function getIdFichaPaciente(){
			return $this->idFichaPaciente;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
	}

?>
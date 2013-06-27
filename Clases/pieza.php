<?php
	class pieza{
		private $id_Pieza;
		private $id_Odontograma;
		private $descripcion;
		
		public function __Construct($id_Pieza, $id_Odontograma = NULL, $descripcion = NULL){
			$this->idPieza = $id_Pieza;
			$this->idOdontograma = $id_Odontograma;
			$this->descripcion = $descripcion;
		}
		
		public function setIdPieza($id_piezaNueva){
			$this->id_Pieza = $id_piezaNueva;
		}
		public function setIdOdontograma($id_OdontogramaNuevo){
			$this->id_Odontograma = $id_OdontogramaNuevo;
		}
		public function setDescripcion($descripcionNuevo){
			$this->descripcion = $descripcionNuevo;
		}
		
		public function getIdPieza(){
			return $this->idPieza;
		}
		public function getIdOdontograma(){
			return $this->idOdontograma;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
	}

?>
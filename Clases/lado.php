<?php
	class lado{
		private id_Lado;
		private id_Pieza;
		private descripcion;
		
		public function setIdLado($id_LadoNuevo){
			$this->idLado = $id_LadoNuevo;
		}
		public function setIdPieza($id_PiezaNuevo){
			$this->idPieza = $id_PiezaNuevo;
		}
		public function setDescripcion($descripcionNuevo){
			$this->descripcion = $descripcionNuevo;
		}
		
		public function getIdLado(){
			return $this->idLado;
		}
		public function getIdPieza(){
			return $this->idPieza;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
	} 

?>
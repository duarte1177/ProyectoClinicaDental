<?php
	class lado{
		private $id_Lado;
		private $id_Pieza;
		private $descripcion;
		
		public function __Construct($id_Lado, $id_Pieza = NULL, $descripcion = NULL){
			$this->idLado = $id_Lado;
			$this->idPieza = $id_Pieza;
			$this->descripcion = $descripcion;
		}
		
		public function cargarLadoDB(){
		
		$db = DB::getInstance();
		$sql= "SELECT * FROM  `lados` WHERE  `ID_LADO` = $this->idLado LIMIT 1";
		$db->setQuery($sql);
		$lado = $db->loadObjectList();
		$this->idLado = $lado[0]->ID_LADO;
		$this->idPieza = $lado[0]->ID_PIEZA;
		$this->descripcion = $lado[0]->DESCRIPCION;
	}
		
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
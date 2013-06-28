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
		
		public function cargarPiezaDB(){
		
		$db = DB::getInstance();
		$sql= "SELECT * FROM  `piezas` WHERE  `ID_PIEZA` = $this->idPieza LIMIT 1";
		$db->setQuery($sql);
		$pieza = $db->loadObjectList();
		$this->idPieza = $pieza[0]->ID_PIEZA;
		$this->idOdontograma = $pieza[0]->ID_ODONTOGRAMA;
		$this->descripcion = $pieza[0]->DESCRIPCION;
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
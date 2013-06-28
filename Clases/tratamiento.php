<?php
	class tratamiento{
		private $id_Tratamiento;
		private $descripcion;
		
		public function __Construct($id_Tratamiento, $descripcion = NULL){
			$this->idTratamiento = $id_Tratamiento;
			$this->descripcion = $descripcion;
		}
		
		public function cargarTratamientoDB(){
		
		$db = DB::getInstance();
		$sql= "SELECT * FROM  `tratamientos` WHERE  `ID_TRATAMIENTO` = $this->idTratamiento LIMIT 1";
		$db->setQuery($sql);
		$tratamiento = $db->loadObjectList();
		$this->idTratamiento = $tratamiento[0]->ID_TRATAMIENTO;
		$this->descripcion = $tratamiento[0]->DESCRIPCION;
	}
		
		public function setIdTratamiento($id_TratamientoNuevo){
			$this->idTratamiento = $id_TratamientoNuevo;
		}
		public function setIdDescripcion($descripcionNuevo){
			$this->descripcion = $descripcionNuevo;
		}
		
		public function getIdTratamiento(){
			return $this->idTratamiento;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
	}

?>
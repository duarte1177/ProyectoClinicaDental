<?php
	class anio{
		private $id_Anio;
		private $anio;
		
		public function __Construct($id_Anio, $anio = NULL){
			$this->idAnio = $id_Anio;
			$this->anio = $id_Anio;
		}
		public function cargarAnioDB(){
		
		$db = DB::getInstance();
		$sql= "SELECT * FROM  `anio` WHERE  `ID_ANIO` = $this->idAnio LIMIT 1";
		$db->setQuery($sql);
		$anio = $db->loadObjectList();
		$this->idAnio = $anio[0]->ID_ANIO;
		$this->anio = $anio[0]->ANIO;
		}
	
		
		public function setIdAnio($id_AnioNuevo){
			$this->idAnio = $id_AnioNuevo;
		}
		public function setAnio($anioNuevo){
			$this->anio = $anioNuevo;
		}
		
		public function getIdAnio(){
			return $this->idAnio;
		}
		public function getAnio(){
			return $this->anio;
		}
	}
	
?>
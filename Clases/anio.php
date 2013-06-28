<?php
	class anio{
		private $id_Anio;
		
		public function __Construct($id_Anio){
			$this->idAnio = $id_Anio;
		}
		public function cargarAnioDB(){
		
		$db = DB::getInstance();
		$sql= "SELECT * FROM  `anio` WHERE  `ID_ANIO` = $this->idAnio LIMIT 1";
		$db->setQuery($sql);
		$anio = $db->loadObjectList();
		$this->idAnio = $anio[0]->ID_ANIO;
		}
	
		
		public function setIdAnio($id_AnioNuevo){
			$this->idAnio = $id_AnioNuevo;
		}
		
		public function getIdAnio(){
			return $this->idAnio;
		}
	}
	
?>
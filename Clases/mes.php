<?php
	class mes{
		private $id_Mes;
		private $mes;
		private $id_Anio;
		
		public function __Construct($id_Mes, $mes = NULL, $id_Anio = NULL){
			$this->idMes = $id_Mes;
			$this->mes = $mes;
			$this->id_Anio = $anio;
		}
		
		public function cargarMesDB(){
		
		$db = DB::getInstance();
		$sql= "SELECT * FROM  `meses` WHERE  `ID_ODONTOGRAMA` = $this->idMes LIMIT 1";
		$db->setQuery($sql);
		$mes = $db->loadObjectList();
		$this->idMes = $mes[0]->ID_MES;
		$this->mes = $mes[0]->MES;
		$this->idAnio = $mes[0]->ID_ANIO;
		}
		
		public function setIdMes($id_MesNuevo){
			$this->idMes = $id_MesNuevo;
		}
		public function setMes($mesNuevo){
			$this->mes = $mesNuevo;
		}
		public function setAnio($id_AnioNuevo){
			$this->idAnio = $id_AnioNuevo;
		}
		
		public function getIdMes(){
			return $this->idMes;
		}
		public function getMes(){
			return $this->mes;
		}
		public function getAnio(){
			return $this->idAnio;
		}
	}
?>
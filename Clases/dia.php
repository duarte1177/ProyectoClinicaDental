<?PHP
	class dia{
		private $id_Dia;
		private $dia;
		private $id_Mes;
		
		public function __Construct($id_Dia, $dia = NULL, $id_Mes = NULL){
			$this->idDia = $id_Dia;
			$this->dia = $dia;
			$this->idMes = $id_Mes;
		}
		
		public function cargarDiaDB(){
		
		$db = DB::getInstance();
		$sql= "SELECT * FROM  `dias` WHERE  `ID_DIA` = $this->idDia LIMIT 1";
		$db->setQuery($sql);
		$dia = $db->loadObjectList();
		$this-> idDia = $dia[0]->ID_DIA;
		$this-> dia = $dia[0]->dia;
		$this-> idMes = $dia[0]->ID_MES;
		}
	
		
		public function setIdDia($id_DiaNuevo){
			$this->idDia = $id_DiaNuevo;
		}
		public function setDia($diaNuevo){
			$this->dia = $diaNuevo;
		}
		public function setIdMes($id_MesNuevo){
			$this->idMes = $id_MesNuevo;
		}
		
		public function getIdDia(){
			return $this->idDia;
		}
		public function getDia(){
			return $this->dia;
		}
		public function getIdMes(){
			return $this->idMes;
		}
	}
?>
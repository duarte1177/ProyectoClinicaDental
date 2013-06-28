<?PHP
	class hora{
		private $id_Hora;
		private $id_Dia;
		private $id_Agenda_Profecional;
		
		public function __Construct($id_Hora, $id_Dia = NULL, $id_Agenda_Profecional = NULL){
			$this->idHora = $id_Hora;
			$this->idDia = $id_Dia;
			$this->idAgendaProfecional = $id_Agenda_Profecional;
		}
		
		public function cargarHoraDB(){
		
		$db = DB::getInstance();
		$sql= "SELECT * FROM  `horas` WHERE  `ID_HORA` = $this->idHora LIMIT 1";
		$db->setQuery($sql);
		$hora = $db->loadObjectList();
		$this->idHora = $hora[0]->ID_HORA;
		$this->idDia = $hora[0]->ID_DIA;
		$this->idAgendaProfecional = $hora[0]->ID_AGENDA_PROFECIONAL;
	}
			
		public function setIdHora($id_HoraNuevo){
			$this->idHora = $id_HoraNuevo;
		}
		public function setIdDia($id_DiaNuevo){
			$this->idDia = $id_DiaNuevo;
		}
		public function setIdAgendaProfecional($id_Agenda_ProfecionalNuevo){
			$this->idAgendaProfecional = $id_Agenda_ProfecionalNuevo;
		}
		
		public function getIdHora(){
			return $this->idHora;
		}
		public function getIdDia(){
			return $this->idDia;
		}
		public function getIdAgendaProfecional(){
			return $this->idAgendaProfecional;
		}
	}
?>


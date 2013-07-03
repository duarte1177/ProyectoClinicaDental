<?PHP

class odontograma{
	private $id_Odontograma;
	private $id_Ficha_Paciente;
	private $descripcion;
	
	public function __Construct($id_Odontograma, $id_Ficha_Paciente = NULL, $descripcion = NULL){
	$this->id_Odontograma = $id_Odontograma;
	$this->id_Ficha_Paciente = $id_Ficha_Paciente;
	$this->descripcion = $descripcion;	
	}
	
	public function cargarOdontogramaDB(){
		
		$db = DB::getInstance();
		$sql= "SELECT * FROM  `odontograma` WHERE  `ID_ODONTOGRAMA` = $this->idOdontograma LIMIT 1";
		$db->setQuery($sql);
		$odontograma = $db->loadObjectList();
		$this->id_Odontograma = $odontograma[0]->ID_ODONTOGRAMA;
		$this->id_Ficha_Paciente = $odontograma[0]->ID_FICHA_PACIENTE;
		$this->descripcion = $odontograma[0]->DESCRIPCION;
	}
	
	public function setIdOdontograma($id_OdontogramaNuevo){
		$this->idOdontograma = $id_OdontogramaNuevo;
	}
	public function setIdFichaPaciente($id_Ficha_PacienteNuevo){
		$this->idFichaPaciente = $$id_Ficha_PacienteNuevo;
	}
	public function setDescripcion($descripcionNuevo){
		$this->descripcion = $descripcionNuevo;
	}
	public function getIdOdontograma(){
		return $this->idOdontograma;
	}
	public function getIdFichaPaciente(){
		return $this->IdFichaPaciente;
	}
	public function getDescripcion(){
		return $this->descripcion;	
	}
}

?>
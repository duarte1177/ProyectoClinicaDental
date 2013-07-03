<?php
	class mantenedor_cita{
	public function __construct(){}
	
	public function get_citas_fecha($fecha){
		$db= DB::getInstance();
		$sql= "SELECT ID_CITA FROM  `cita` WHERE  `FECHA_CITA` =  '$fecha'";		
		$db->setQuery($sql);
		$id_citas	= $db->loadObjectList();
		
		$citas = array();		
		foreach($id_citas as $cita){
			$cita_aux = new cita($cita->ID_CITA);	
			$cita_aux->cargarCitaDB();
			array_push($citas, $cita_aux);
		}
		return $citas;
	}
	public function get_citas(){
		$db= DB::getInstance();
		$sql= "SELECT ID_CITA FROM  `cita`";		
		$db->setQuery($sql);
		$id_citas	= $db->loadObjectList();
		
		$citas = array();		
		foreach($id_citas as $cita){
			$cita_aux = new cita($cita->ID_CITA);	
			$cita_aux->cargarCitaDB();
			array_push($citas, $cita_aux);
		}
		return $citas;
	}
	public function getSemanaActual(){
	
	}
}
?>
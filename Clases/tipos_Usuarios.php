<?php
	class tipo_Usuario {
		private $id_Tipo_Usuario;
		private $descripcion;
		
	public function __construct($id_Tipo_Usuario, $descripcion = NULL){
		$this->id_Tipo_Usuario = $id_Tipo_Usuario;
		$this->descripcion = $descripcion;
	}
	
	public function cargarTipoUsuario(){
		$db = DB::getInstance();
		$sql = "SELECT * FROM  `tipos_usuarios` WHERE  `ID_Tipo_Usuario` = $this->id_Tipo_Usuario LIMIT 1";
		$db->setQuery($sql);
		$tipoUsuario = $db->loadObjectList();
		$this->id_Tipo_Usuario = $tipoUsuario[0]->ID_TIPO_USUARIO;
		$this->descripcion = $tipoUsuario[0]->DESCRIPCION;
	}
	public function setId_Tipo_Usuario ($id_Tipo_UsuarioNuevo){
		$this->id_Tipo_Usuario = $id_Tipo_UsuarioNuevo;
	}
	public function setDescripcion ($descripcionNuevo){
		$this->descripcion = $descripcionNuevo;
	}
	public function getId_Tipo_Usuario(){
		return $this->id_Tipo_Usuario;
	}
	public function getDescripcion(){
		return $this->descripcion;
	}
}
?>
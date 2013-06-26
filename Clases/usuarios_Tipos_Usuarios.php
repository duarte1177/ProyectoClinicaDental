<?php
	class usuarios_Tipos_Usuario {
		private id_Usuario_Tipo_Usuario;
		private id_Usuario;
		private id_Tipo_Usuario;
		
	public function __construct($id_Usuario_Tipo_Usuario,$id_Usuario,$id_Tipo_Usuario){
		$this->id_Usuario_Tipo_Usuario = $id_Usuario_Tipo_Usuario;
		$this->id_Usuario = $id_Usuario;
		$this->id_Tipo_Usuario = $id_Tipo_Usuario;
		
	}
	public function cargarUsuarioTiposUsuario(){
		$db = DB::getInstance();
		$sql = "SELECT * FROM  `usuarios_tipos_usuarios` WHERE  `ID_USUARIO_TIPO_USUARIO` = $this->id_Usuario_Tipo_Usuario LIMIT 1";
		$db->setQuery($sql);
		$usuarios_tipos_usuarios = $db->loadObjectList();
		$this->id_Usuario_Tipo_Usuario = $usuarios_tipos_usuarios[0]->ID_USUARIO_TIPO_USUARIO;
		$this->id_Usuario = $usuarios_tipos_usuarios[0]->ID_USUARIO;
		$this->id_Tipo_Usuario = $usuarios_tipos_usuarios[0]->ID_TIPO_USUARIO;
	}
	
	public function setId_Usuario_Tipo_Usuarios ($id_Usuario_Tipo_UsuarioNuevo){
		$this->id_Usuario_Tipo_Usuarios = $id_Usuario_Tipo_Usuarios;
	}
	public function setId_Usuario ($id_UsuarioNuevo){
		$this->descripcion = $descripcionNuevo;
	}
	public function setId_Tipo_Usuario ($id_Usuario_Tipo_UsuarioNuevo){
		$this->id_Tipo_Usuarios = $id_Usuario_Tipo_Usuarios;
	}
	public function getId_Usuario_Tipo_Usuario(){
		return $this->id_Tipo_Usuario;
	}
	public function getId_Usuario(){
		return $this->id_Usuario;
	}
	public function getId_Tipo_Usuario(){
		return $this->id_Tipo_Usuario;
	}
}
?>
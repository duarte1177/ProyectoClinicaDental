<?php

class usuario{
	private $rut_Usuario;
	private $nombres;
	private	$apellidos;
	private	$direccion;
	private $telefono;
	private $email;
	private $fechaNacimiento;
	private $contrasena;
	private $tipoUsuario;
	
	public function __construct($rut_Usuario,$nombres = NULL, $apellidos = NULL, $direccion = NULL,$telefono = NULL, $email = NULL, $fechaNacimiento = NULL, $contrasena = NULL, $tipoUsuario = NULL){
		$this->rutUsuario =$rut_Usuario;
		$this->nombre = $nombres;
		$this->apellidos = $apellidos;
		$this->direccion = $direccion;
		$this->telefono = $telefono;
		$this->email = $email;
		$this->fechaNacimiento = $fechaNacimiento;
		$this->contrasena = $contrasena;
		$this->tipoUsuario = $tipoUsuario;
	}
	public function cargarUsuarioDB(){
		
		$db = DB::getInstance();
		$sql = "SELECT * FROM  `usuarios` WHERE  `RUT_USUARIO` = $this->rutUsuario LIMIT 1";
		$db->setQuery($sql);
		$usuario = $db->loadObjectList();
		$this->rutUsuario = $usuario[0]->RUT_USUARIO;
		$this->nombres = $usuario[0]->NOMBRES;
		$this->apellidos = $usuario[0]->APELLIDOS;
		$this->direccion = $usuario[0]->DIRECCION;
		$this->telefono = $usuario[0]->TELEFONO;
		$this->email = $usuario[0]->E_MAIL;	
		$this->fechaNacimiento = $usuario[0]->FECHA_NACIMIENTO;
		$this->contrasena = $usuario[0]-> CONTRASENA;
		
	
				
		$sql = "SELECT * FROM `usuarios_tipos_usuarios` WHERE `RUT_USUARIO` = $this->rutUsuario";
		$db->setQuery($sql);
		$tiposUsuarioDB = $db->loadObjectList();
		$tipos_usuarios = array();
		foreach($tiposUsuarioDB as $tipo){
			$tipoAux = new tipo_Usuario($tipo->ID_TIPO_USUARIO);
			$tipoAux->cargarTipoUsuario();
			array_push($tipos_usuarios,$tipoAux); // Agrego un elemnto al Array en el ultimo lugar
		}
		$this->tipoUsuario = $tipos_usuarios;
	}
	
	public function guardarUsuarioDB(){
		$db = DB::getInstance();
		if ($this->existeUsuarioDB() == true){
			$sql = "UPDATE  `clinicadental`.`usuarios` SET  
			`NOMBRES` =  '$this->nombres',
			`APELLIDOS` =  '$this->apellidos',
			`DIRECCION` =  '$this->direccion',
			`TELEFONO` = '$this->telefono',
			`E_MAIL` =  '$this->email',
			`FECHA_NACIMIENTO` =  '$this->fechaNacimiento',
			`CONTRASENA` =  '$this->contrasena'
			 WHERE  `usuarios`.`RUT_USUARIO` = $this->rutUsuario";
		}else{		

			$sql = "INSERT INTO  `clinicadental`.`usuarios` (
					`RUT_USUARIO` ,	`NOMBRES` , `APELLIDOS` , `DIRECCION` , `TELEFONO` ,`E_MAIL` , `FECHA_NACIMIENTO`, `CONTRASENA`)VALUES (
					'$this->rutUsuario',  '$this->nombres',  '$this->apellidos',  '$this->direccion',  '$this->telefono',  '$this->email',  '$this->fechaNacimiento', '$this->contrasena')";
		}
		$db->setQuery($sql);
		$db->execute();
		
		

	}
	
	public function existeUsuarioDB(){
		$db = DB::getInstance();
		$sql = "SELECT * FROM `usuarios` WHERE `RUT_USUARIO` = '$this->rutUsuario' LIMIT 1";
		$db->setQuery($sql);
		$usuario = $db->loadObjectList();
		if (count($usuario) >0)//si la cantidad de datos es > 0, entoces llegaron datos
			return true;
		else
			return false;
	}
	
	public function usuarioPerteneceAPerfil($idPerfil){
		foreach ($this->tipoUsuario as $tipoUsuarioASalir){
				if ($idPerfil == $tipoUsuarioASalir->getId_Tipo_Usuario() )
				return true;
		}
	return false;
		
	}
		
	public function setRut_Usuario($rut_UsuarioNuevo){
		$this->rutUsuario = $idUsuarioNuevo;
	}
	public function setNombre($nombreNuevo){
		$this->nombres = $nombreNuevo;
	}	
	public function setApellidos($apellidosNuevo){		$this->apellidos = $apellidosNuevo;
	}
	public function setDireccion($direccionNuevo){
		$this->direccion = $direccionNuevo;
	}
	public function setTelefono($telefonoNuevo){
		$this->telefono = $telefonoNuevo;
	}
	public function setEmail($emailNuevo){
		$this->email = $emailNuevo;
	}
	public function setFechaNacimiento($fechaNacimiento){
		$this->fechaNacimiento = $fechaNacimiento;
	}
	public function setContrasena($contrasena){
		$this->contrasena = $contrasena;
	}
		
	public function getRutUsuario(){
		return $this->rutUsuario;
	}
	public function getNombre(){
		return $this->nombres;
	}
	public function getDireccion(){
		return $this->direccion;	
	}
	public function getTelefono (){
		return $this->telefono;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getFechaNacimiento(){
		return $this->fechaNacimiento;
	}
	public function getContrasena(){
		return $this->contrasena;
	}
	public function getApellidos(){
		return $this->apellidos;
	}
}	

?>
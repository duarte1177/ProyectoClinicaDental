<?php
	class agenda{
		private $id_Agenda;
		private $id_Usuario_Tipo_Usuario;
		private $descripcion;
		
		public function __Construct($id_Agenda, $id_Usuario_Tipo_Usuario = NULL, $descripcion = NULL){
			$this->idAgenda = $id_Agenda;
			$this->idUsuarioTipoUsuario = $id_Usuario_Tipo_Usuario;
			$this->descripcion = $descripcion;
		}
		
		public function cargarAgendaDB(){
		
		$db = DB::getInstance();
		$sql= "SELECT * FROM  `agenda` WHERE  `ID_AGENDA` = $this->idAgenda LIMIT 1";
		$db->setQuery($sql);
		$agenda = $db->loadObjectList();
		$this->idAgenda = $agenda[0]->ID_AGENDA;
		$this->idUsuarioTipoUsuario = $agenda[0]->ID_USUARIO_TIPO_USUARIO;
		$this->descripcion = $agenda[0]->DESCRIPCION;
	}
	
		
		public function setIdAgenda($id_AgendaNuevo){
			$this->idAgenda = $id_AgendaNuevo;
		}
		public function setIdUsuarioTipoUsuario($id_Usuario_Tipo_UsuarioNuevo){
			$this->idUsuarioTipoUsuario = $id_Usuario_Tipo_UsuarioNuevo;
		}
		public function setDescripcion($descripcionNuevo){
			$this->descripcion = $descripcionNuevo;
		}
		
		public function getIdAgenda(){
			return $this->idAgenda;
		}
		public function getIdUsuarioTipoUsuario(){
			return $this->id_Usuario_Tipo_Usuario;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
	}
?>
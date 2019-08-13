<?php 

	class SesionUsuario
	{
		
		public function __construct()
		{
			session_start();
		}

		public function setCurrentUser($usuario){
			$_SESSION['usuario'] = $usuario;
		}
		
		public function setCurrentAvatar($avatar){
			$_SESSION['Avatar'] = $avatar;
		}

		public function getCurrentUser(){
			return $_SESSION['usuario'];
		}	

		public function getCurrentAvatar(){
			return $_SESSION['Avatar'];
		}

		public function CerrarSesion(){
			session_unset();
			session_destroy();
		}
	}
 ?>
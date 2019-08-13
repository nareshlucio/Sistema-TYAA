<?php 
	include_once 'Pages/Registrosphp/user.php';
	include_once 'Pages/Registrosphp/SesionUsu.php';

	$Sesion = new SesionUsuario();
	$Usuario = new User();
	//Combrobacion si es que el usuario no a cerrado su sesion-------------------
	if (isset($_SESSION['usuario'])) {
		$Usuario->setUsuario($Sesion->getCurrentUser());
		echo "<meta http-equiv='Refresh' content='0.0; URL=Pages/Inicio.php'>";
	//------------------------------------------------------------
	//Comprobar si el Usuario inicio sesion con sus credenciales correctas	
	}else if(isset($_POST['correo']) && isset($_POST['contraseña'])){
		$Alias = $_POST['correo'];
		$Password = $_POST['contraseña'];

		if ($Usuario->ExistUsuario($Alias, $Password)) {
			$Sesion->setCurrentUser($Alias);
			$Usuario->setUsuario($Alias);
			echo "<meta http-equiv='Refresh' content='0.0; URL=Pages/Inicio.php'>";
		}else if($Usuario->ExistCorreo($Alias, $Password)){
			$Sesion->setCurrentUser($Alias);
			$Usuario->setCorreo($Alias);
			echo "<meta http-equiv='Refresh' content='0.0; URL=Pages/Inicio.php'>";
		}else if($Usuario->ExistTelefono($Alias, $Password)){
			$Sesion->setCurrentUser($Alias);
			$Usuario->setTelefono($Alias);
			echo "<meta http-equiv='Refresh' content='0.0; URL=Pages/Inicio.php'>";
		}else{
			$mensError = "Hay un problema con su correo y/o contraseña";
			include_once 'Pages/Login.php';
		}
	}else
	include_once 'Pages/Login.php';
 ?>
<?php 
	include_once 'SesionUsu.php';

	$Sesion = new SesionUsuario();
	$Sesion->CerrarSesion();
	header('Location: ../../index.php');
 ?>
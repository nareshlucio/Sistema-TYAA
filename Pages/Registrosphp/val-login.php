<?php

include_once 'funciones.php';
 $con = conexion();
//-------Recepcion de los Datos del Usuario----------------------
$usuario = $_POST['correo'];
$pass = $_POST['contraseña'];
//---------------------Fin---------------------------------------
//Condicional por si el formulario esta vacio--------------------
if(empty($usuario) || empty($pass)){
 header("Location: ../../index.php");
 exit();
}
//---------------------------------------------------------------
//-------------Inicio de Sesion con el Correo--------------------
 $sql = "SELECT * FROM usuarios WHERE Correo='".$usuario."';";
 $result = mysqli_query($con, $sql);
if(mysqli_query($con, $sql)){
	if($row = mysqli_fetch_array($result)){
		do {
			if($usuario == $row['Correo']){
				if (password_verify($pass, $row["Password"])){
					$_SESSION['usuario']=$usuario;
					header("Location: ../Inicio.html");
				}else{
					header("Location: ../../index.php");
 					exit();
				}
			}else{
				echo "<meta http-equiv='Refresh' content='0.5; URL=../../index.php'>";
 				exit();
			}
		}while ($row = mysqli_fetch_array($result));
	} 
}
//Fin de el bloque
//--------------Inicio de Sesion con el Usuario------------------
 $sql = "SELECT * FROM usuarios WHERE Alias='".$usuario."';";
 $result = mysqli_query($con, $sql);
if(mysqli_query($con, $sql)){
	if($row = mysqli_fetch_array($result)){
		do {
			if($usuario == $row['Alias']){
				if (password_verify($pass, $row["Password"])) {
					$_SESSION['usuario']=$usuario;
					header("Location: ../Inicio.html");
				}else{
					header("Location: ../../index.php");
 					exit();
				}
			}else{
				header("Location: ../../index.php");
 				exit();
			}
		}while ($row = mysqli_fetch_array($result));
	} 
}
//---------------Fin del Bloque----------------------------------
//--------------Inicio de Sesion con el Telefono-----------------
 $sql = "SELECT * FROM usuarios WHERE Telefono='".$usuario."';";
 $result = mysqli_query($con, $sql);
if(mysqli_query($con, $sql)){
	if($row = mysqli_fetch_array($result)){
		do {
			if($usuario == $row['Telefono']){
				if (password_verify($pass, $row["Password"])) {
					$_SESSION['usuario']=$usuario;
					header("Location: ../Inicio.html");
				}else{
					header("Location: ../../index.php");
 					exit();
				}
			}else{
				header("Location: ../../index.php");
 				exit();
			}
		}while ($row = mysqli_fetch_array($result));
	} 
}
//-----------------------Fin del Bloque--------------------------
	mysqli_free_result($result);
	close_connection();
 ?>
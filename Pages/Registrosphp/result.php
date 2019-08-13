<?php 
	if (!isset($_POST['search'])) exit('No se que buscar ?');
	include_once 'funciones.php';
	 function search(){
		$con = conexion();
		$busqueda = $con->real_escape_string($_POST['search']);
		$sql = "SELECT * FROM alumnos WHERE Matricula LIKE '%$busqueda%' OR Nombre_Alumno LIKE '%$busqueda%' OR Grupo LIKE '%$busqueda%' OR Carrera LIKE '%$busqueda%'";
		$res = mysqli_query($con,$sql);
		$num_rows = mysqli_num_rows($res);
		while($row = mysqli_fetch_array($res)) {
			echo "<a class='dropdown-item'>";
			echo "<i class='ni ni-single-02'></i><span> ".$row['Matricula']."</span>  ";
			echo "<span>  ".$row['Nombre_Alumno']."   ".$row['Grupo']."   </span>";
			echo "</a>"; 
		}
		if($num_rows<0 && $busqueda="") echo "Que Vamos A Buscar Hoy :)";
}
	search();
 ?>
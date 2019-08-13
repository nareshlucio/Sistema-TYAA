<?php 
include_once 'funciones.php';
$con = conexion();
$resul = $_POST['busalumno'];
    //$Matri=$_POST['Matricula'];
    //$Grupo=$_POST['Grupo'];
    //$Nombre=$_POST['Nombre'];
    function buscaralumno(){
		$busqueda = mysqli_real_escape_string($con, $resul);
		$sql = "SELECT * FROM alumnos WHERE Matricula LIKE '%$busqueda%' OR Nombre_Alumno LIKE '%$busqueda%'";
		$res = mysqli_query($con,$sql);
        $num_rows = mysqli_num_rows($res);
        if($num_rows>0 && !$busqueda=""){
            while($row = mysqli_fetch_array($res)) {
                echo "<form>";
                echo "<tr>";
                echo "<th scope='row'>";
                echo "<div class='media align-items-center'>";
                echo "<div class='media-body'>";
                echo "<button class='btn btn-succes' name='Agregar' value='Agregar' type='submit'>Agregar</button>";
                echo "</div>";
                echo "</div>";
                echo "</th>";
                echo "<td><i class='ni ni-single-02'></i><input type='hidden' name='Matricula' value='".$row['Matricula']."'><span class='mb-0 text-sm'>".$row['Matricula']."</span></td>";
                echo "<td><span class='mb-0 text-sm'>".$row['Nombre_Alumno']."</span></td><input type='hidden' name='Nombre' value='".$row['Nombre_Alumno']."'>";
                echo "<td><span class='mb-0 text-sm'>".$row['Grupo']."</span></td><input type='hidden' name='Grupo' value='".$row['Grupo']."'>";
                echo "<td><span class='mb-0 text-sm'>".$row['Carrera']."</span></td><input type='hidden' name='Carrera' value='".$row['Carrera']."'>";
                echo "</tr>";
                echo "</form>";
            }
            /*if(!isset($_SESSION['ALUMNOS'])){
                $alumnos=array();
                $_SESSION['ALUMNOS'][0]=$alumnos;
            }*/
        }else{if($num_rows<0) echo "Que Vamos A Buscar Hoy :)";}
    }
	if (isset($_POST['busalumno'])){
       buscaralumno(); 
    }else{
        buscaralumno();
    }
 ?>
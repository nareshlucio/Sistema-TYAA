<?php

$con = mysqli_connect("localhost", "root","","automatizacion");

header('Content-Encoding: UTF-8');
header('Content-Type:text/csv; charset=UTF-8');
header('Content-Disposition: attachment; filename="Reporte Bimestral.csv"');

$salida=fopen('php://output','w');
fputcsv($salida, array('Nombre del Tutor', 'Nombre del Maestro', 'Pregunta 1', 'Pregunta 2', 'Pregunta 3', 'Pregunta 4', 'Nombre del Alumno', 'Matricula del Alumno','Grupo', 'Promedio'));

$reporteCsv=$con->query("SELECT Nombre_Tutor, Nombre_Maestro, Pregunta_1, Pregunta_2, Pregunta_3, Pregunta_4, Nombre_Alumno, Matricula_Alumno, Grupo, Promedio FROM encuesta_satisfaccion");

while($filarR = $reporteCsv->fetch_assoc())
	fputcsv($salida, array($filarR['Nombre_Tutor'],
							$filarR['Nombre_Maestro'],
							$filarR['Pregunta_1'],
							$filarR['Pregunta_2'],
							$filarR['Pregunta_3'],
							$filarR['Pregunta_4'],
							$filarR['Nombre_Alumno'],
							$filarR['Matricula_Alumno'],
							$filarR['Grupo'],
							$filarR['Promedio']));
?>

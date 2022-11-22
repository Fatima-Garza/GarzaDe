<?php

$id_Empleado = $_POST['Id'];

$servidor = "localhost";
$basededatos = "empleados";
$usuario = "root";
$password = "";
$port = "3308";

$con = mysqli_connect($servidor,$usuario,$password,$basededatos, $port) or die ("No se conecto");
$consulta = "select * from empleado WHERE id_Empleado =$id_Empleado";   

$registros = mysqli_query($con,$consulta) or die ("Problema en el select");

$result = mysqli_fetch_array($registros,MYSQLI_ASSOC);
echo json_encode($result);
?>

<?php
$NombreEmpleado=$_POST['NombreEmpleadoConsultar'];

$servidor = "localhost";
$basededatos = "formulario";
$usuario = "root";
$password = "1234";
$port = "3308";

$con = mysqli_connect($servidor,$usuario,$password,$basededatos,$port) or die ("No se conecto");
$consulta = "select * from formulario_empleado where Nombre='$NombreEmpleado'";

$registros = mysqli_query($con,$consulta) or die ("Problema en el select");

$result = mysqli_fetch_array($registros,MYSQLI_ASSOC);
mysqli_close($con);
echo json_encode($result);
?>

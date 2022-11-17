<?php

$servidor="localhost";
$basedatos="ejemplo";
$usuario= "root";
$password= "";

$con          = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("No se pudo conectar a localhost");
$consulta     ='select * from empleado';

$registro = mysqli_query($con, $consulta) or die ("Problemas en el select");

$result = mysqli_fetch_all($registro);

mysqli_close($con);
echo json_encode($result);
?>



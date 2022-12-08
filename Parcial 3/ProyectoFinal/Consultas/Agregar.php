<?php
$NombreEmpleado=$_POST['NombreEmpleado'];
$ApellidoPa=$_POST['ApellidoPa'];
$ApellidoMa=$_POST['ApellidoMa'];
$FechaDeNac=$_POST['FechaDeNac'];
$Edad=$_POST['Edad'];
$Direccion=$_POST['Direccion'];
$Colonia=$_POST['Colonia'];
$Postal=$_POST['Postal'];
$Correo=$_POST['Correo'];
$NumeroCel=$_POST['NumeroCel'];
$Curp=$_POST['Curp'];
$Rfc=$_POST['Rfc'];
$FechaDeIng=$_POST['FechaDeIng'];
$Puesto=$_POST['Puesto'];
$Area=$_POST['Area'];
$Salario=$_POST['Salario'];



$servidor = "localhost";
$basededatos = "formulario";
$usuario = "root";
$password = "1234";
$port = "3308";

$con = mysqli_connect($servidor,$usuario,$password,$basededatos,$port) or die ("No se conecto");
$consulta = "insert into formulario_empleado VALUES ('$NombreEmpleado','$ApellidoPa','$ApellidoMa','$FechaDeNac','$Edad','$Direccion','$Colonia','$Postal','$Correo','$NumeroCel','$Curp','$Rfc','$FechaDeIng','$Puesto','$Area','$Salario')";  

$registros = mysqli_query($con,$consulta) or die ("Problema en el select");

$result = mysqli_fetch_array($registros,MYSQLI_ASSOC);
mysqli_close($con);
echo json_encode($result);
?>

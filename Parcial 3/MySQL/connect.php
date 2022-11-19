<?php

$servidor="localhost";
$basedatos="formulario";
$usuario="root";
$password="";
$port="3308";

$con          = mysqli_connect($servidor,$usuario,$password,$basedatos,$port) or die("No se pudo conectar a localhost");
$consulta     ="select * from formulario_empleado";

$registro = mysqli_query($con,$consulta) or die ("Problemas en el select");


while($result=mysqli_fetch_array($registro,MYSQLI_ASSOC)){
    printf($result['Nombre'].''.$result['ApellidoPa'].''.$result['ApellidoMa'].''.$result['FechaDeNac'].''.$result['Edad'].''.$result['Direccion'].''.$result['Colonia'].''.$result['CodigoP'].''.$result['Correo'].''.$result['NumeroCel'].''.$result['Curp'].''.$result['Rfc'].''.$result['FechaDeIng'].''.$result['Puesto'].''.$result['Area'].''.$result['Salario'].'<br>');
}


?>



<?php

$Nombre = 'Fatima';
$ApellidoPa = 'Garza';
$ApellidoMa = 'Delgado';
$FechaDeNac = 15-03-2001;
$Edad = 21;
$Direccion = 'Cataluña 1207';
$Col = 'Fracc Los Frenos';
$Codigo = 88290;
$Correo = 'fatima@gmail.com';
$NumeroCel = '867207009';
$Curp ='GADF010315MTSRLTA4';
$Rfc = 'GADF010315TT3';
$FechaDeIng = 17-11-2022;
$Puesto = 'Gerencia';
$Area = 'Control y Calidad';
$Salario = 3000;
echo json_encode(array('Nombre'=> $Nombre,'ApellidoPa'=> $ApellidoPa,'ApellidoMa'=> $ApellidoMa,'FechaDeNac'=> $FechaDeNac,'Edad'=> $Edad,'Direccion'=> $Direccion,'Col'=> $Col,'Codigo'=> $Codigo,'Correo'=> $Correo,'NumeroCel'=> $NumeroCel,'Curp'=> $Curp,'Rfc'=> $Rfc,'FechaDeIng'=> $FechaDeIng,'Puesto'=> $Puesto,'Area'=> $Area,'Salario'=> $Salario));
?>

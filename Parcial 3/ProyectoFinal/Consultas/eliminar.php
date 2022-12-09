<?php
    $nombre=$_POST['NombreEmpleadoEliminar'];
    $apellidoP=$_POST['APEliminar'];
    $apellidoM=$_POST['AMEliminar'];

    $server= "localhost";
    $port="3308";
    $db= "formulario";
    $user= "root";
    $pass= "1234";
    $con = mysqli_connect($server,$user,$pass,$db,$port) or die("no se pudo conectar a la base de datos");
    $query= "delete from formulario_empleado where nombre = '$nombre' and (ApellidoPa='$apellidoP' and ApellidoMa='$apellidoM')";
    $registros= mysqli_query($con,$query) or die("problemas en la consulta");
    $result= mysqli_fetch_array($registros,MYSQLI_ASSOC);
    mysqli_close($con);
    echo json_encode($result)
?>
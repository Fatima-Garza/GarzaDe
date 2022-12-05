<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_COOKIE['Ultimavisita'])){
         printf ("Su ultima visita fue : %s", $_COOKIE['Ultimavisita']);
        $fechaHoy = date('Y/m/d H:i:s');
        setcookie("Ultimavisita",$fechaHoy,time() + (7 * 24 * 60 * 60));
    }  
    else{
        printf("No se encontro cookie ultima visita<br>");
        $fechaHoy = date('Y/m/d H:i:s');
        $siguienteSemana = time() + (7 * 24 * 60 * 60);
        $fechaExpira = date('Y/m/d H:i:s', $siguienteSemana).'<br>';

    }  
    ?>
</body>
</html>
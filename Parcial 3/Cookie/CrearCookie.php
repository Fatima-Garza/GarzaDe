<?php


$fechaHoy = date('Y/m/d H:i:s');
$siguienteSemana = time() + (7 * 24 * 60 * 60);
$fechaExpira = date('Y/m/d H:i:s', $siguienteSemana).'<br>';

echo '<b>Fecha de Creacion de Cookie: </b>'. $fechaHoy .'<br>';
echo '<b>Fecha de Vencimiento de Cookie: </b>'. $fechaExpira. '<br>';


setcookie("Ultimavisita",$fechaHoy,time() + (7 * 24 * 60 * 60));

?>






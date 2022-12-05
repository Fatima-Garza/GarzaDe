<?php
$Nombre=$_POST['nombre'];
require('E:/WampServer/wamp64/www/Apellidos/GarzaDe/Parcial 3/PDF/FPDF/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'¡Hola, Mundo!'.$Nombre);
$pdf->Output();
?>
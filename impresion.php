<?php

$conexion = mysqli_connect("localhost", "root", "", "prueba_db") or die(
    "error de conexion");
require 'fpdf/fpdf.php';

$codigo = rand(1, 1000);


$pdf = new FPDF("P", "mm", "letter");
$pdf->AddPage();
$pdf->Ln(10);
$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(80);
date_default_timezone_set("America/Caracas");
$pdf->Cell(40, 5, "Fecha: " . date("d/m/Y"), 0, 0, "C");
$pdf->SetFont("Arial", "B", 18);
$pdf->Ln(8);
$pdf->Cell(5);
$pdf->Cell(190, 5, "CONSTACIA DE SOLICITUD", 0, 1, "C");
$pdf->Cell(190, 5, "", 0, 1, "C");
$pdf->Image("images/Circular.png", 10, 5, 30);
$pdf->Image("images/gobierno-logo.png", 165, 12, 40);

$pdf->Ln(10);

$pdf->SetFont("Arial", "", 12);
$pdf->Cell(100, 5, "Su solicitud ha sido realizada exitosamente.", 0, 1, "L");
$pdf->Ln(4);
$pdf->SetFont("Arial", "", 12);
$pdf->Cell(100, 10, "Descripcion", 1, 0, "C");
$pdf->Cell(90, 10, "Codigo", 1, 1, "C");
$pdf->Cell(100, 10, "Su numero de asignacion es:", 1, 0, "C");
$pdf->SetFont("Arial", "B", 18);


$pdf->SetFont("Arial", "", 12);
$pdf->Cell(90, 10, $codigo, 1, 1, "C");
$pdf->Ln(8);
$pdf->Cell(100, 5, "Estimado usuario, con este codigo que se le ha asignado podra realizar la confirmacion de su solicitud", 0, 1, "L");
$pdf->Cell(95, 5, "para que posteriormente usted pueda dirigirse a la entidad mas cercana y asi finalizar el proceso.", 0, 0, "L");
$pdf->Ln(15);
$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(40);
$pdf->Cell(95, 5, "La informacion mostrada en esta pagina es confidencial.", 0, 0, "L");

$pdf->Ln(140);
$pdf->SetFont("Arial", "I", 12);

$pdf->Cell(0, 10, "Pagina " . $pdf->PageNo(), 0, 0, "C");

$pdf->Output();

?>
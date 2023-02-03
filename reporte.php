<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 15
    $this->SetFont('Arial','B',11);
    // Movernos a la derecha
    $this->Cell(55);
    // Título
    $this->Cell(80,10,'ESTUDIANTES',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(30, 10, utf8_decode('CÉDULA'), 1, 0, 'C', 0);
    $this->Cell(35, 10, 'NOMBRE', 1, 0, 'C', 0);
    $this->Cell(35, 10, 'APELLIDO', 1, 0, 'C', 0);
    $this->Cell(40, 10, utf8_decode('DIRECCIÓN'), 1, 0, 'C', 0);
    $this->Cell(30, 10, utf8_decode('TELÉFONO'), 1, 1, 'C', 0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'models/conexion.php';
$consulta = "SELECT * FROM estudiantes";
$resultado = $mysqli -> query($consulta);

$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',11);

while($row = $resultado->fetch_assoc()){
    $pdf->Cell(30, 10, $row['CED_EST'], 1, 0, 'C', 0);
    $pdf->Cell(35, 10, $row['NOM_EST'], 1, 0, 'C', 0);
    $pdf->Cell(35, 10, $row['APE_EST'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row['DIR_EST'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['TEL_EST'], 1, 1, 'C', 0);
}

$pdf->Output();
?>
<?php
require('../fpdf/fpdf.php');

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Logo
        // Arial bold 15
        $this->SetFont('Arial', 'B', 12);
        // Movernos a la derecha
        $this->Cell(60);
        // Título
        $this->Cell(70, 10, 'REPORTE DE ESTUDIANTES', 0, 0, 'C');
        // Salto de línea
        $this->Ln(20);

        $this->Cell(30, 10, 'CEDULA', 1, 0, 'C', 0);
        $this->Cell(30, 10, 'NOMBRE', 1, 0, 'C', 0);
        $this->Cell(30, 10, 'APELLIDO', 1, 0, 'C', 0);
        $this->Cell(30, 10, 'TELEFONO', 1, 0, 'C', 0);
        $this->Cell(30, 10, 'DIRECCION', 1, 1, 'C', 0);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10, utf8_decode('Pagina') . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

require("conexion.php");
$consulta = "SELECT * FROM ESTUDIANTES WHERE ESTADO='0'";
$resultado = mysqli_query($conn, $consulta);

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 10);

while ($row = $resultado->fetch_assoc()) {
    $pdf->Cell(30, 10, $row['CED_EST'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['NOM_EST'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['APE_EST'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['TEL_EST'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['DIR_EST'], 1, 1, 'C', 0);
  
    
}

$pdf->Output();
?>
<?php
    // PRIMER EJEMPLO PDF

    include 'plantilla.php';
    require 'conexion.php';

    $query = "SELECT idConfigC, nombreCliente, cantC FROM configcliente";
    $resultado = $mysqli->query($query);

    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();


    $pdf->Cell(40,10,date('d/m/Y'),0,1,'L');
    $pdf->SetFillColor(232,232,232);
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(50, 6,'ID', 1, 0, 'C', 1);
    $pdf->Cell(70, 6,'Nombre Cliente', 1, 0, 'C', 1);
    $pdf->Cell(65, 6,'Cantidad', 1, 1, 'C', 1);
    // $pdf->Cell(60, 6,'Imagen', 1, 1, 'C', 1);

    $pdf->SetFont('Arial', '', 10);

    while($row = $resultado->fetch_assoc()){

        $pdf->Cell(50, 6,$row['idConfigC'], 1, 0, 'C');
        $pdf->Cell(70, 6,utf8_decode($row['nombreCliente']), 1, 0, 'C');
        $pdf->Cell(65, 6,$row['cantC'], 1, 1, 'C');
        // $pdf->Cell(60, 6,$row['imagenCliente'], 1, 1, 'C', 1);

    }


    $pdf->Output();


    // $y = $pdf->GetY();
    // $pdf->SetY($y+10);
    // $pdf->Cell(100, 10, 'HelloWorld2', 1, 1, 'C');
    // $pdf->Cell(100, 10, 'HelloWorld3paulaandreaaragon', 1, 1, 'C');
    // $pdf->MultiCell(100,5,'HelloWorld3paulaandreaaragon piajfifkfjjfnvjf',
    //  '1', 'L', 0);


?>
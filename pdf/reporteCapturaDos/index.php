<?php
    // PRIMER EJEMPLO PDF

    include 'plantilla.php';
    require '../conexion.php';

    $query = "SELECT banco, departamento, ciudad, direccion, entidad_remitente, tipo_idDemandante,
    numero_idDemandante, nombre_demandante, correo_entidadRemitente FROM prueba_capturados";
    $resultado = $mysqli->query($query);

    
    $pdf = new PDF();
    // $pdf->set_page("Letter", "landscape");
    $pdf->AliasNbPages();
    $pdf->AddPage('landscape', 'legal');


    $pdf->Cell(150,10, 'Reporte Captura Fase Dos', 0, 1, 'L');
    $pdf->SetFillColor(232,232,232);
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(35, 6,'Banco', 1, 0, 'C', 1);
    $pdf->Cell(34, 6,'Departamento', 1, 0, 'C', 1);
    $pdf->Cell(20, 6,'Ciudad', 1, 0, 'C', 1);
    $pdf->Cell(35, 6,'Direccion', 1, 0, 'C', 1);
    $pdf->Cell(45, 6,'Entidad Remitente', 1, 0, 'C', 1);
    $pdf->Cell(45, 6,'Tipo Id Demandante', 1, 0, 'C', 1);
    $pdf->Cell(36, 6,utf8_decode('Nº Demandante'), 1, 0, 'C', 1);
    $pdf->Cell(45, 6,'Nombre Demandante', 1, 0, 'C', 1);
    $pdf->Cell(54, 6,'Correo Entidad Remitente', 1, 1, 'C', 1);
    // $pdf->Cell(45, 6,'Tipo Id Demandado', 1, 0, 'C', 1);
    // $pdf->Cell(36, 6,utf8_decode('Nº Demandado'), 1, 0, 'C', 1);
    // $pdf->Cell(60, 6,'nombre_demandado', 1, 1, 'C', 1);

    $pdf->SetFont('Arial', '', 10);

    while($row = $resultado->fetch_assoc()){

        $pdf->Cell(35, 6,$row['banco'], 1, 0, 'C');
        $pdf->Cell(34, 6,utf8_decode($row['departamento']), 1, 0, 'C');
        $pdf->Cell(20, 6,$row['ciudad'], 1, 0, 'C');
        $pdf->Cell(35, 6,$row['direccion'], 1, 0, 'C');
        $pdf->Cell(45, 6,$row['entidad_remitente'], 1, 0, 'C');
        $pdf->Cell(45, 6,$row['tipo_idDemandante'], 1, 0, 'C');
        $pdf->Cell(36, 6,$row['numero_idDemandante'], 1, 0, 'C');
        $pdf->Cell(45, 6,$row['nombre_demandante'], 1, 0, 'C');
        $pdf->Cell(54, 6,$row['correo_entidadRemitente'], 1, 1, 'C');
        // $pdf->Cell(45, 6,$row['tipo_idDemandado'], 1, 0, 'C');
        // $pdf->Cell(36, 6,$row['numero_idDemandado'], 1, 0, 'C');
        // $pdf->Cell(60, 6,$row['nombre_demandado'], 1, 1, 'C', 1);

    }

    $pdf->Cell(50,10, utf8_decode('Fecha Generación Reporte'), 0, 0, 'C');
    $pdf->Cell(30,10,date('d/m/Y'),0,1);
    $pdf->Output();


    // $y = $pdf->GetY();
    // $pdf->SetY($y+10);
    // $pdf->Cell(100, 10, 'HelloWorld2', 1, 1, 'C');
    // $pdf->Cell(100, 10, 'HelloWorld3paulaandreaaragon', 1, 1, 'C');
    // $pdf->MultiCell(100,5,'HelloWorld3paulaandreaaragon piajfifkfjjfnvjf',
    //  '1', 'L', 0);


?>
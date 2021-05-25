<?php

require '../fpdf/fpdf.php';
class PDF extends FPDF{

    function Header(){
        
        $this->Image('../images/iqPdf.jpg', 8, 8, 55);
        $this->SetFont('Arial', 'B', 15);
        $this->Cell(30);
        $this->Cell(120,10, 'REPORTES IQ OUTSOURCING', 0, 1, 'R');
        // $this->Cell(150,10, 'Reporte Captura Fase Dos', 0, 0, 'C');

        $this->Ln(18);
    }

    function Footer(){
        
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
        

    }


}



?>


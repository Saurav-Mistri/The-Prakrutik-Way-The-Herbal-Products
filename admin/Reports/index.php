<?php
include('config.php');
$database = new Database();
$result = $database->runQuery("select u.user_name,a.area_name,u.gender,u.email,u.contact_no from user u,area a where u.area_id=a.area_id");
$header = $database->runQuery("SELECT UCASE(`COLUMN_NAME`) 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='prakrutik' 
AND `TABLE_NAME`='user'
and `COLUMN_NAME` in ('user_name','email','contact_no','birth_date','area_name')");
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage("L","A4");
$pdf->SetFont('Arial','B',10);

// Set header
 $pdf->Image('logop.jpg',7,1,50);
    // Move to the right
    $pdf->Cell(80);			
    // Title
    $pdf->Cell(80,10,'User List',1,0,'C');
    // Line break
    $pdf->Ln(20);

/*
foreach($header as $heading) {
	foreach($heading as $column_heading)
		$pdf->Cell(70,12,$column_heading,1);
}
*/
		$pdf->Cell(58,20,"user_name",1);
		$pdf->Cell(58,20,"area_name",1);
		$pdf->Cell(58,20,"gender",1);
		$pdf->Cell(58,20,"email",1);
		$pdf->Cell(58,20,"contact_no",1);
foreach($result as $row) {
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(58,12,$column,1);
}
$pdf->Output();

// Set footer
   $pdf->SetY(-15);
    // Arial italic 8
    $pdf->SetFont('Arial','I',8);
    // Page number
    $pdf->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
?>
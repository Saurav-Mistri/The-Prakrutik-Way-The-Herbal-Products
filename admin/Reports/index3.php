<?php
include('config.php');
$database = new Database();
$sql="SELECT u.user_name , p.p_name , item.c_qty , item.amnt FROM order_item item join order_master o 
						join product p join user u where item.o_id = o.o_id and item.p_id = p.p_id and o.u_id = u.u_id";

if(isset($_GET['id']))
{
	$pid = $_GET['id'];
		$sql = $sql . " and p.p_id=$pid";
}
$result = $database->runQuery($sql);
$header = $database->runQuery("SELECT UCASE(`COLUMN_NAME`) 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='osms' 
AND `TABLE_NAME` in ('area','user')
and `COLUMN_NAME` in ('USER_ID','AREA_NAME','FIRST_NAME')");
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);

// Set header
 $pdf->Image('logop.jpg',7,1,50);
    // Move to the right
    $pdf->Cell(80);
    // Title
    $pdf->Cell(80,10,'User List',1,0,'C');
    // Line break
    $pdf->Ln(20);

			$pdf->Cell(55,12,'USER NAME',1);
			$pdf->Cell(55,12,'PRODUCT NAME',1);
			$pdf->Cell(55,12,'QTY',1);
			$pdf->Cell(55,12,'TOTAL',1);
	/*
foreach($header as $heading) {
	foreach($heading as $column_heading)
}*/
foreach($result as $row) {
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(55,12,$column,1);
}
$pdf->Output();

// Set footer
   $pdf->SetY(-15);
    // Arial italic 8
    $pdf->SetFont('Arial','I',8);
    // Page number
    $pdf->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
?>
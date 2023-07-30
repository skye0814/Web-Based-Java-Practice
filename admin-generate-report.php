
<?php
@include 'config.php';
require('fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
/* Column headings */
$pdf->Image('images/logo.png',10,6,30);

$pdf->SetFont('Arial','',12);
$pdf->SetTextColor(255,255,255,1);
$pdf -> Cell(103,30,"Users Report","0","1","C");
$header = array('Username', 'Email', 'Score', 'User Type');
/* Data loading */
/* Colors, line width and bold font */
$pdf->SetFillColor(94, 225, 224);
$pdf->SetTextColor(48, 74, 73, 1);
$pdf->SetDrawColor(209, 212, 207);
$pdf->SetLineWidth(.3);
$pdf->SetFont('Arial','',12);
/* Header */
$w = array(40, 90, 20, 40);
for($i=0;$i<count($header);$i++)
    $pdf->Cell($w[$i],7,$header[$i],0,0,'C',true);
$pdf->Ln();
/* Color and font restoration */
$pdf->SetFillColor(224,235,255);
$pdf->SetTextColor(0);
$pdf->SetFont('');
/* Data */
$fill = false;
$select = mysqli_query($conn, "SELECT * FROM users_db");
while($row = mysqli_fetch_assoc($select)){

    $pdf->Cell($w[0],6,$row['username'],'C',0,'C',$fill);
    $pdf->Cell($w[1],6,$row['email'],'C',0,'C',$fill);
    $pdf->Cell($w[2],6,$row['score'],'C',0,'C',$fill);
    $pdf->Cell($w[3],6,$row['user_type'],'C',0,'C',$fill);
    $pdf->Ln();
    $fill = !$fill;
}
/* Closing line */
$pdf->Cell(array_sum($w),0,'','T');
$pdf->Output();
?>



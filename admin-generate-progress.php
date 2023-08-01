
<?php
@include 'config.php';

if(isset($_GET['id'])){

    $userid = $_GET['id'];
}

if (isset($_POST['image'])) {
    $imageData = $_POST['image'];
  
    $imageData = str_replace('data:image/jpeg;base64,', '', $imageData);
    $decodedImage = base64_decode($imageData);
  
    $imagePath = 'images/chart.jpeg';
  
    file_put_contents($imagePath, $decodedImage);
}

$get_uname = mysqli_query($conn, "SELECT * FROM users_db WHERE id ='$userid'");
$fetch = mysqli_fetch_array($get_uname);
$id=$fetch['id'];
$username = $fetch['username'];
$score = $fetch['score'];

require('fpdf/fpdf.php');


$manilaTimeZone = new DateTimeZone('Asia/Manila');

$manilaDateTime = new DateTime('now', $manilaTimeZone);
$manilaTime = $manilaDateTime->format('M-d-Y H:i:s');


$pdf = new FPDF();
$pdf->AddPage();
/* Column headings */
$pdf->Image('images/logo.png',10,6,30);
$pdf->Image('images/chart.jpeg',30,190,150,100);
$pdf->SetFont('Arial','',12);
$pdf->SetTextColor(255,255,255,1);
$pdf -> Cell(103,30,"Users Report","0","1","C");
$header = array('Topic Name', 'Progress', 'Attempts');
/* Data loading */
/* Colors, line width and bold font */
$pdf->SetFillColor(94, 225, 224);
$pdf->SetTextColor(48, 74, 73, 1);
$pdf->SetDrawColor(209, 212, 207);
$pdf->SetLineWidth(.3);
$pdf->SetFont('Arial','',12);

$pdf->SetFont('Arial','B',15);
$pdf->Cell(71 ,5,'USER PROGRESS REPORT',0,5,"C");
$pdf->Cell(20 ,5,'Date:',0,0);
$pdf->Cell(10 ,5, $manilaTime,0,0);
$pdf->Cell(59 ,5,'',0,0);
$pdf->Cell(59 ,5,'',0,1);

$pdf->SetFont('Arial','',16);
$pdf->Cell(30 ,5,'UserID: ',0,0);
$pdf->Cell(34 ,5,$id,0,1);
$pdf->Cell(30 ,5,'Username: ',0,0);
$pdf->Cell(34 ,5,$username,0,1);
$pdf->Cell(30 ,5,'Total Score: ',0,0);
$pdf->Cell(5, 5, '', 0, 0); // Add a blank cell to create spacing
$pdf->Cell(30 ,5, $score ,0,1);



$pdf->Cell(34 ,5,'',0,1);



/* Header */
$w = array(100,50, 40);
for($i=0;$i<count($header);$i++)
    $pdf->Cell($w[$i],7,$header[$i],0,0,'C',true);
$pdf->Ln();
/* Color and font restoration */
$pdf->SetFillColor(224,235,255);
$pdf->SetTextColor(0);
$pdf->SetFont('');
/* Data */
$fill = false;
$select = mysqli_query($conn, "SELECT * FROM user_topic_status WHERE userID = '$id'");
while($row = mysqli_fetch_assoc($select)){
    $progress=$row['progress'];
    $prog='%';
    $pdf->Cell($w[0],6,$row['topic_name'],'L',0,'L',$fill);
    $pdf->Cell($w[1],6,$progress.$prog,'C',0,'C',$fill);
    $pdf->Cell($w[2],6,$row['attempts'],'C',0,'C',$fill);
    $pdf->Ln();
    $fill = !$fill;
}
/* Closing line */
$pdf->Cell(array_sum($w),0,'','T');
$pdf->Output();


?>



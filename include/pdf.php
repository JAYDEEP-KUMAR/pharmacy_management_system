<?php

     ///////////////////////////////////////////
include_once 'connection.inc.php';
    

    $result3=$conn->query("select max(sid) from sales");
       $row = mysqli_fetch_row($result3); 
       $sid = $row[0];



$result7=$conn->query("select mobileno from sales where sid=$sid");
 $row7 = mysqli_fetch_row($result7); 
       $mobileno = $row7[0];

$result8=$conn->query("select itemno from sales where sid=$sid");
 $row8 = mysqli_fetch_row($result8); 
       $itemno = $row8[0];

$result9=$conn->query("select quantity from sales where sid=$sid");
 $row9 = mysqli_fetch_row($result9); 
       $quantity = $row9[0];

$result10=$conn->query("select itemname from item where itemno=$itemno");
$row10 = mysqli_fetch_row($result10); 
       $itemname = $row10[0];


$result11=$conn->query("select price from item where itemno=$itemno");
$row11 = mysqli_fetch_row($result11); 
       $price = $row11[0];


$result12=$conn->query("select age from customer where mobileno=$mobileno");
$row12 = mysqli_fetch_row($result12); 
       $age = $row12[0];


 $sql5=$conn->query("SELECT SYSDATE() from dual");
    
    $row5 = mysqli_fetch_row($sql5); 
       $bdate = $row5[0];
    

$netamount=$quantity*$price;



$result17=$conn->query("select max(billno) from bill");
$row17 = mysqli_fetch_row($result17); 
       $bid = $row17[0];


$result19=$conn->query("select cname from customer where mobileno=$mobileno");
$row19 = mysqli_fetch_row($result19); 
       $cname = $row19[0];


$result18=$conn->query("INSERT INTO bill (mobileno,sid,bdate,netamount) VALUES ($mobileno,$sid,'$bdate',$netamount)");


 ob_start();
    require('fpdf/fpdf.php');
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(190,10,'Jay Pharamacy',0,1,'C');
    $pdf->Cell(40,10,'**************************************************************************************',0,1);
$pdf->Cell(30,10,'Bill Id: ',1,0);
    $pdf->Cell(60,10,$bid,1,0);
$pdf->Cell(35,10,'Mobile no : ',1,0);
    $pdf->Cell(65,10,$mobileno,1,1);
$pdf->Cell(30,10,'Name : ',1,0);
$pdf->Cell(60,10,$cname,1,0);
$pdf->Cell(35,10,'Age : ',1,0);
    $pdf->Cell(65,10,$age,1,1);
$pdf->Cell(40,10,'**************************************************************************************',0,1);


$pdf->Cell(10,5,'sn',1,0);
    $pdf->Cell(25,5,'itemno',1,0);
$pdf->Cell(75,5,'itemname',1,0,'C');
    $pdf->Cell(30,5,'quantity',1,0);
    $pdf->Cell(20,5,'price',1,0);
$pdf->Cell(30,5,'Amount',1,1);


$pdf->Cell(10,5,1,1,0);
    $pdf->Cell(25,5,$itemno,1,0);
$pdf->Cell(75,5,$itemname,1,0,'C');
    $pdf->Cell(30,5,$quantity,1,0);
    $pdf->Cell(20,5,$price,1,0);
$pdf->Cell(30,5,$netamount,1,1);


$pdf->Cell(190,5,' ',0,1);

$pdf->Cell(160,5,'Netamount',1,0,'C');
$pdf->Cell(30,5,$netamount,1,1);



$pdf->Cell(40,10,'**************************************************************************************',0,1);

$pdf->Cell(190,10,'Vit University,Katpadi,Vellore-632014',0,1,'C');


    $pdf->Output();
    ob_end_flush(); 
       /////////////////////////////////////////


?>
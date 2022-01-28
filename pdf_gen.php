<?php 
include "config.php";
require('fpdf/fpdf.php');

if(!$con)
{
    echo "connect";
}

if(isset($_POST['pdf']))
{
    $sql = "select * from registers";
    $query = mysqli_query($con,$sql);   

    $add = "Ahmedabad";
    $mob = 8733907483;
    $sign = "img/signature.png"; 
    $ceo = "Modi Tanmay(CEO) ";
    

   $pdf = new fpdf('p','mm','a4');
   
   $pdf->SetFont('Arial','B',12);
   $pdf->AddPage();
    $pdf->cell('300','5','Name:- Tech Solution.','0','1','C');
    $pdf->cell('300','5','address:-'.$add,'0','1','C');
    $pdf->cell(290,'5','No:-'.$mob,'0','1','C');
    $pdf->cell(300,'10',' ','0','1','C');
   


   $pdf->Cell('145','15','User Info','1','1','C');
    
   $pdf->Cell('30','10','id','1','0','C');
   $pdf->Cell('35','10','username','1','0','C');
   $pdf->Cell('35','10','mobile','1','0','C'	);
   $pdf->Cell('45','10','gmail','1','1','C');   

   $pdf->SetFont('Arial','B',12);
  while($row = mysqli_fetch_assoc($query))  
    {
   
      
   $pdf->Cell('30','10',$row['id'],'1','0','C');
   $pdf->Cell('35','10',$row['username'],'1','0','C');
   $pdf->Cell('35','10',$row['mobile'],'1','0','C');
   $pdf->Cell('45','10',$row['gmail'],'1','1','C');
  

 
    }
    $pdf->cell(315,110,$ceo,'0','1','C');
    $pdf->image($sign,150,155,40,40);
    $pdf->Output();
    
}
else {
    echo "go back";
}

?>

<?php 

$con = mysqli_connect("localhost","debian-sys-maint","NxOuewSDKEn2QuJc","web");


if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $uptname = $_POST['username'];
  
    $uptpassword = $_POST['pwd'];
    $uptphone = $_POST['mobile'];
    $uptemail = $_POST['email'];
   
 
 
   $sql = "UPDATE registers SET username='$uptname', passw='$uptpassword',mobile='$uptphone' ,gmail = '$uptemail' WHERE id='$id'";

    $query = mysqli_query($con,$sql);
    if($query)
    {
         header('location:display.php');
    }

 
}
?>

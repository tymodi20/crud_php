<?php 
$con = mysqli_connect("localhost","debian-sys-maint","NxOuewSDKEn2QuJc","web");

if(isset($_POST['submit']))
{
    $uname = $_POST['username'];
    $pass = $_POST['pwd'];
    $mob = $_POST['mobile'];
    $email = $_POST['email'];
 
 
    $sql = "INSERT INTO registers(username,passw,mobile,gmail) VALUES('$uname','$pass','$mob','$email')";
    if(mysqli_query($con,$sql))
    
    {
        echo "data insert successfully";    
    }
    else{
        echo "wrong";
    }
}


?>
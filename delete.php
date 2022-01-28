<?php
$con = mysqli_connect("localhost","debian-sys-maint","NxOuewSDKEn2QuJc","web");
$id = $_GET['id'];
            
$sql = "DELETE FROM `registers` WHERE id = $id ";
$query = mysqli_query($con,$sql);
if($query)
{
    header('location:display.php');

}

?>

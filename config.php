<?php
$server = "localhost";
$username = "debian-sys-maint";
$pwd = "NxOuewSDKEn2QuJc";
$database = "web";

$con =mysqli_connect($server,$username,$pwd,$database);
if(!$con)
{   echo "database not successfully";

}


?>
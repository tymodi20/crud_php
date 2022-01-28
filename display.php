<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="img/signature.png">
    <title>Document</title>
<style>
    .pdf{
        background-color:cyan;
        color:red;
        margin-top:6px;
        margin-left:16px;
        margin-bottom:10px;
        padding-top:5px;
        padding-bottom:5px;
        padding-left:10px;
        padding-right:10px;
       
    }
    .a1{
        text-decoration:none;
        background: green;
        color:black;
        margin-top:50px;
        margin:505px;
        width:150px;
        padding: 15px;
        border:2px solid;
    }
</style> 
</head>
<body>

<a href="register.html" class="a1" >reg</a>

    <form method = "POST" action="pdf_gen.php">
<table border="2">
    <tr>
        <th>id</th>
        <th>username</th>
        <th>password</th>
        <th>mobile</th>
        <th>gmail</th>
        <th>action</th>
        <th>action</th>
    </tr>



<?php
$sql = "SELECT * FROM `registers`" ;
$query = mysqli_query($con,$sql);
if(mysqli_num_rows($query)>0)

{
    
    while($row = mysqli_fetch_array($query))
    {
      echo "  <tr>";
       echo "<td>".$row['id']."</td>";  
       echo "<td>".$row['username']."</td>";
       echo "<td>".$row['passw']."</td>";
       echo "<td>".$row['mobile']."</td>";
       echo "<td>".$row['gmail']."</td>";
       ?>
       <td><a href="delete.php?id=<?php echo $row['id'];?>">delete</a></td>
       <td><a href='edit.php?id=<?php echo $row['id'];?>'>edit</a></td>
 <?php     
        echo "</tr>";
    }
}
?>

</table>
<button class="pdf" type="submit" name="pdf">download pdf </button>

    </form>
    
    
</body>
</html>

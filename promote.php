
<?php
require 'security.php';
require 'db.php';
if(isset($_GET['id']))
{
    $id=$_GET["id"];
    $type= 'admin';
    $sql="update users set type ='$date'  where id=$id";
    mysqli_query($conn,$sql) or die(mysqli_error($conn));
}
header("location:admin.php");//redirect back
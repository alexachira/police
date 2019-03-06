
<?php
require 'security.php';
require 'db.php';
if(isset($_GET['id']))
{
    $id=$_GET["id"];
    $password=crypt(123456,'dbfvfgfdviufgfufhi');
    $sql="update users set password ='$password'  where id=$id";
    mysqli_query($conn,$sql) or die(mysqli_error($conn));
}
header("location:admin.php");//redirect back
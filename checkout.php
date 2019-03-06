<?php
require 'security.php';
require 'db.php';
if(isset($_GET['id']))
{
    $id=$_GET["id"];
   /* extract($_GET);*/
    date_default_timezone_set("africa/nairobi");
    $date=date("Y-m-d H:i:s");
    $sql="update suspects set date_left='$date'  where id=$id";
    mysqli_query($conn,$sql) or die(mysqli_error($conn));
}
header("location:suspects.php");//redirect back
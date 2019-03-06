<?php
//security.php
session_start();
if ( ! isset($_SESSION["user"]))
{
 header("location:login.php");

}

$id=$_SESSION["user"]["id"];
$sql="select *from users where  id = $id";
require 'db.php';
$results=mysqli_query($conn,$sql) or die(mysqli_error($conn));
if (mysqli_num_rows($results)==0)
{
    session_destroy();
    header("location:login.php");
}
$user= mysqli_fetch_assoc($results);
$_SESSION["user"]=$user;



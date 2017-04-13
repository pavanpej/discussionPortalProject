<?php
$name =$_POST["usrname"];
$desg =$_POST["designation"];
$msg =$_POST['message'];
date_default_timezone_set('Asia/Kolkata');
$dnt= date("d/m/Y__h:i A");
//echo $name.$desg.$msg.$dnt;
include 'connect.php';
$db = dbconnect();

$mssg = "INSERT INTO chat VALUES ('$name','$dnt','$msg','$desg');";
$res =mysqli_query ($db,$mssg);
include 'entermsgwebpage.php';
?>


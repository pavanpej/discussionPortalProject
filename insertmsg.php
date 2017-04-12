<?php
$msg =$_POST['message'];
date_default_timezone_set('Asia/Kolkata');
$dnt= date("d/m/Y__h:i A");

$db = mysqli_connect("localhost","root","","chatdata");
include ("entermsg.php");

$mssg = "INSERT INTO chat VALUES ('$name','$dnt','$msg','$desg')";
$res= mysqli_query($db,$mssg);
if($res)
{
	echo "<h1>msg insterted successfull</h1>";
}
else
{
	echo "<h1>msg insterted unsuccessfull</h1>";
}

?>
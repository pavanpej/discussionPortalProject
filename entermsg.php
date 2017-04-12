<?php
$name =$_POST['usrname'];
$desg =$_POST['designation'];
date_default_timezone_set('Asia/Kolkata');
$dnt= date("d/m/Y__h:i A");
echo "login details: ".$name." ".$desg." ".$dnt;
?>
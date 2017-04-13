<?php
include 'connect.php';
$db = dbconnect();
$sql="SELECT * FROM chat;";

$result = mysqli_query($db,$sql);
if(mysqli_num_rows($result)>0)
{
	while ($row = mysqli_fetch_assoc($result))
	 {
		echo $row["user"].":".$row["designation"]."<br>".$row["msg"]."<br>".$row["time"]."<br>";
	}
}

?>

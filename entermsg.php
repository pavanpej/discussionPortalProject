<?php
$name =$_POST['usrname'];
$desg =$_POST['designation'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Write/View Message</title>
	</head>
	<body>
		<form method="post" action="insertmsg.php">
			<textarea name="message" rows="20" cols="40"></textarea><br>
			<input type="submit" value="send">
		</form>
	</body>
</html>
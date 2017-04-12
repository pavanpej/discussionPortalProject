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
		<iframe src="messages.php" name="msgwin" height="100%" width="600px"></iframe>
		<p><a href="messages.php" target="msgwin">click here to view/refresh messages window</a></p>
	</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<title>Write/View Message</title>
	</head>
	<body>
		<form method="post" action="insertmsg.php">
			<textarea name="message" rows="20" cols="40"></textarea><br>
			<input type="submit" value="send">
			<input type="hidden" name="usrname" value="<?php echo $name ?>">
			<input type="hidden" name="designation" value="<?php echo $desg ?>">
		</form>
		<iframe src="messages.php" name="msgwin" height="100%" width="600px"></iframe>
		<p><a href="messages.php" target="msgwin">click here to view/refresh messages window</a></p>
	</body>
</html>
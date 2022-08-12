<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>SOUL Website</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>Soul Harvest Database</h1>

	<br>
	Hello, <?php echo $user_data['user_name']; ?>
	<br>
	<br>
	<a href="register.php">Enter VIP's</a>
</body>
</html>

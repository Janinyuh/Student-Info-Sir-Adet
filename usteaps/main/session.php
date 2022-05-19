<?php
	require '../connection/connections.php';
	$query = $conn->query("SELECT * FROM `users` WHERE `username` = '$_SESSION[username]'") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$username = $fetch['username'];

	
?>
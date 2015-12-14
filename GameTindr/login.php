<?php

session_start();
$username = $_POST['username'];
$password = $_POST['password'];


if ($username && $password) {
	$connection=mysqli_connect("localhost","root","","GAMR") or die("Could not connect to the server.");
	$query=mysqli_stmt_init($connection);
	mysqli_prepare($query,'SELECT password FROM users where username=?');
	mysqli_stmt_bind_param($query, 's', $username);
	mysqli_stmt_execute($query);
	mysqli_stmt_store_result($query);
	$numrows=mysqli_stmt_num_rows($query);
	if ($numrows!=0) {
		$dbpassword="";
		mysqli_stmt_bind_result($query, $dbpassword);
		mysqli_stmt_fetch($query);
		if (password_verify($password, $dbpassword) {
			$_SESSION['username']=$username;
			header("Location:index.php");
		}
		else
			echo("Incorrect username or password.");
	}
	else {
		mysqli_stmt_close($query);
		mysqli_close($connection);
		die("Incorrect username or password.");
	}
	mysqli_stmt_close($query);
	mysqli_close($connection);
else
	die("Please enter a username and password.");
?>

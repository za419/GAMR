<?php
require("include/db_config.php");
session_start();
$username = $_POST['username'];
$password = $_POST['password'];


if ($username && $password) {
	$connection=mysqli_connect($CONFIG["host"],$CONFIG["username"],$CONFIG["password"],$CONFIG["dbname"]) or die("Could not connect to the server.");
	$query=mysqli_prepare($connection,'SELECT password,username FROM users where username=? or email=?'); // Allow login using both username and email.
	mysqli_stmt_bind_param($query, 'ss', $username, $username);
	mysqli_stmt_execute($query);
	mysqli_stmt_store_result($query);
	$numrows=mysqli_stmt_num_rows($query);
	if ($numrows!=0) {
		$dbpassword="";
		$dbusername="";
		mysqli_stmt_bind_result($query, $dbpassword,$dbusername);
		mysqli_stmt_fetch($query);
		if (password_verify($password, $dbpassword)) { // Login succeeded
			$_SESSION['username']=$dbusername; // Set the username to be the one in the database: This is needed if we logged in via an email.
			if (password_needs_rehash($dbpassword, PASSWORD_DEFAULT)) { // If the stored hash needs updating,
				$dbpassword=password_hash($password, PASSWORD_DEFAULT);
				mysqli_stmt_close($query);
				$query=mysqli_stmt_prepare($connection, 'UPDATE users SET password=? WHERE username=? or email=?'); // Update it.
				mysqli_stmt_bind_param($query, 'sss', $dbpassword, $username, $username);
				mysqli_stmt_execute($query);
			}
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
}
else
	die("Please enter a username and password.");
?>

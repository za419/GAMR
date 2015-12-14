<?php
require("include/db_config.php");
session_start();
$username = $_POST['username'];
$password = $_POST['password'];


if ($username && $password) {
	$connection=mysqli_connect($CONFIG["host"],$CONFIG["username"],$CONFIG["password"],$CONFIG["dbname"]) or die("Could not connect to the server.");
	$query=mysqli_prepare($connection,'SELECT password FROM users where username=? or email=?');
	mysqli_stmt_bind_param($query, 'ss', $username, $username);
	mysqli_stmt_execute($query);
	mysqli_stmt_store_result($query);
	$numrows=mysqli_stmt_num_rows($query);
	if ($numrows!=0) {
		$dbpassword="";
		mysqli_stmt_bind_result($query, $dbpassword);
		mysqli_stmt_fetch($query);
		if (password_verify($password, $dbpassword)) {
			$_SESSION['username']=$username;
			header("Location:index.php");
			echo("<script>document.location.replace('index.php')</script>");
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

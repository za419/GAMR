<!DOCTYPE html>
<html>
<head>
  <?php include("../include/common.html"); ?>
  <link rel="stylesheet" type="text/css" href="../styles/register.css">
  <meta name="apple-mobile-web-app-title" content="Register for GAMR">
  <meta name="og:title" content="Register for GAMR">
  <title>Register for GAMR</title>
</head>
<body>
  <?php include("../include/header.php"); ?>
  <h1 id="title">Thank you for choosing <span class="gamr">GAMR</span></h1>
  <br>
  <?php
	if (isset($_POST['confirm-password'])) {
		//TODO Add email checking.
		session_start();
		$username=$_POST['username'];
		$password=$_POST['password'];
		$confirmpassword=$_POST['confirm-password'];
		$email=$_POST['email'];
		$confirmemail=$_POST['confirm-email'];

		if ($confirmpassword!=$password) {
			echo('Passwords do not match.');
		}
		elseif ($confirmemail!=$email) {
			echo('Emails do not match.');
		}
		elseif (strlen($password)>32||strlen($password)<6) {
			echo('Password must be between 6 and 32 characters.');
		}
		elseif (strlen($username)>65||strlen($username)<3) {
			echo('Username must be between 3 and 65 characters.');
		}
		else {
			$password=md5($password);
			$connection=mysqli_connect("localhost","root","","users") or die("Could not connect to the server.");
			$query=mysqli_query($connection,"
				INSERT INTO users VALUES ('','$username','$password','$email')
			");
			header('Location:/about/');
		}
	}
	else {
		echo <<<EOT <p class="info" style="text-align:center !important">
				We'll just need a little bit of information from you to optimize your experience.
			</p>
			<br>
			<form id="registerForm" action="./" method="POST">
				<div>
				<label for="username">Username</label>
				<input type="text" id="username" name="username" placeholder="Username"/><br>
				</div>
				<div>
				<label for="password">Password</label>
				<input type="password" id="password" name="password" placeholder="Password"/><br>
				</div>
				<div>
				<label for="confirm-password">Confirm Password</label>
				<input type="password" id="confirm-password" name="confirm-password"
				placeholder="Confirm Password"/><br>
				</div>
				<div>
				<label for="email">Email</label>
				<input type="text" id="email" name="email" placeholder="Email"><br>
				</div>
				<div>
				<label for="confirm-email">Confirm Email</label>
				<input type="text" id="confirm-email" name="confirm-email"
				placeholder="Confirm Email"/><br><br>
				<div>
					<input type="submit" id="submit">
				</div>
				</div>
			</form>
EOT;
	}
  <?php include("../include/footer.html"); ?>
</body>
</html>

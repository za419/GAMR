<!DOCTYPE html>
<html>
<head>
  <?php include("../include/common.html"); ?>
  <link rel="stylesheet" type="text/css" href="../styles/register.css">
  <meta name="apple-mobile-web-app-title" content="Register for GAMR">
  <meta name="og:title" content="Register for GAMR">
  <?php
	if (!isset($_POST['confirm-password']))
		echo "<script src='../scripts/register-validate.js'></script>";
  ?>
  <title>Register for GAMR</title>
</head>
<body>
  <?php include("../include/header.php"); ?>
  <h1 id="title">Thank you for choosing <span class="gamr">GAMR</span></h1>
  <br>
  <?php
	if (isset($_POST['confirm-password'])) {
		//TODO Add email verification.
		session_start();
		$username=$_POST['username'];
		$password=$_POST['password'];
		$confirmpassword=$_POST['confirm-password'];
		$email=$_POST['email'];
		$confirmemail=$_POST['confirm-email'];

		if ($confirmpassword!=$password)
			echo('Passwords do not match.');
		elseif (strlen($email)>1000)
			echo('Email must be under 1000 characters.');
		elseif (preg_match('/.+@.+\..+/', $email)==0)
			echo('Email is not properly formed');
		elseif ($confirmemail!=$email)
			echo('Emails do not match.');
		elseif (strlen($password)<6)
			echo('Password must be above 6 characters.');
		elseif (strlen($username)>80)
			echo('Username must be under 80 characters.');
		else {
			$password=password_hash($password, PASSWORD_DEFAULT);
			if (!$password)
				die("Invalid password");
			$connection=mysqli_connect("localhost","root","","GAMR") or die("Could not connect to the server.");
			$query=mysqli_stmt_init($connection);
			mysqli_stmt_prepare($query,'INSERT INTO users (username, password, email) VALUES ("?","?","?")');
			mysqli_stmt_bind_param($query, 'sss', $username, $password, $email);
			mysqli_stmt_execute($query);
			mysqli_stmt_close($query);
			mysqli_close($connection);
			header('Location:/about/');
		}
	}
	else {
		echo <<<'EOT'
			<p class="info" style="text-align:center !important">
				We'll just need a little bit of information from you to optimize your experience.
			</p>
			<br>
			<form id="registerForm" action="./" method="POST">
				<div>
					<label for="username">Username</label>
					<input type="text" id="username" name="username" placeholder="Username" oninput="checkUsername()"/><br>
					<p class="info" style="display:none" id="username-error"></p>
				</div>
				<div>
					<label for="password">Password</label>
					<input type="password" id="password" name="password" placeholder="Password" oninput="checkPassword()"/><br>
					<p class="info" style="display:none" id="password-error"></p>
				</div>
				<div>
					<label for="confirm-password">Confirm Password</label>
					<input type="password" id="confirm-password" name="confirm-password"
					placeholder="Confirm Password" oninput="checkPassword()"/><br>
					<p class="info" style="display:none" id="confirm-password-error"></p>
				</div>
				<div>
					<label for="email">Email</label>
					<input type="text" id="email" name="email" placeholder="Email" oninput="checkEmail()"><br>
					<p class="info" style="display:none" id="email-error"></p>
				</div>
				<div>
					<label for="confirm-email">Confirm Email</label>
					<input type="text" id="confirm-email" name="confirm-email"
					placeholder="Confirm Email" oninput="checkEmail()"/><br>
					<p class="info" style="display:none" id="confirm-email-error"></p><br>
				<div>
					<input type="submit" id="submit" disabled>
				</div>
				</div>
			</form>
EOT;
	}
  include("../include/footer.html"); ?>
</body>
</html>

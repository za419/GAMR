<div id="headerLoginBox">
	<div id="loginForm">
		<form action="../login.php" method="POST">
			<div>
				<fieldset>
					<label for="loginUsername">Username</label>
					<input id="loginUsername" type="text" name="username" placeholder="Username" align="right" oninput="checkLoginUsername()">
				</fieldset>
				<fieldset>
					<label for="loginPassword">Password</label>
					<input id="loginPassword" type="password" name="password" placeholder="Password" align="right" oninput="checkLoginPassword()">
				</fieldset>
				<input id="login-submit" type="submit">
			</div>
			<br>
		</form>
	</div>
</div>

<div id="header">
	<div id="headerLogin" style="float: right">
		<?php
			require_once("db_config.php");
			if(!isset($_SESSION)) {
				session_start();
			}
			if(isset($_SESSION['loginID'])) {

				$connection=mysqli_connect($CONFIG["host"],$CONFIG["username"],$CONFIG["password"],$CONFIG["dbname"]); // If database connection fails, do nothing. We don't want to leave a hanging session record.
				$query=mysqli_prepare($connection, 'SELECT username FROM users WHERE UID in (SELECT UID FROM sessions WHERE session=?)');
				mysqli_stmt_bind_param($query, "i", $_SESSION['loginID']);
				mysqli_stmt_execute($query);
				mysqli_stmt_store_result($query);
				$username="";
				mysqli_stmt_bind_result($query, $username);
				mysqli_stmt_fetch($query);
				mysqli_stmt_close($query);
				mysqli_close($connection);

				echo('<button id="helloButton" onclick="toProfile">
								HELLO, '.strtoupper($username).'!
							</button>
							<button id="logOutButton" onclick="logOut()">
								LOG OUT
							</button>');
			}
			else {
				echo('<button id="loginButton">
								LOG IN
							</button>
							<button id="signUpButton" onclick="signUp()">
								SIGN UP
							</button>');
			}
		?>
	</div>

	<ul class="horizontal" id="headerNav">
		<li class="gamr"><a href="../index.php">GAMR</a></li>
		<li><a href="/about">About</a></li>
		<li><a href="/find">Find</a></li>
		<li><a href="/host">Host</a></li>
		<?php
			if(isset($_SESSION['loginID'])){
				echo("<li><a href='/profile'>Profile</a></li>");
			}
		?>
	</ul>
</div>

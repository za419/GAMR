<div id="headerLoginBox">
	<div id="loginForm">
		<form action="../login.php" method="POST">
			<div>
				<fieldset>
					<label for="loginUsername">Username</label>
					<input id="loginUsername" type="text" name="username" placeholder="Username" align="right">
				</fieldset>
				<fieldset>
					<label for="loginPassword">Password</label>
					<input type="password" name="password" placeholder="Password" align="right">
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
			session_start();
			if(isset($_SESSION['username'])==true){
				$username=$_SESSION['username'];
				echo('<button id="helloButton">
								HELLO '.strtoupper($username).'!
							</button>
							<button id="logOutButton" onclick="logOut()">
								LOG OUT
							</button>');
			}else{
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
		<li><a href="/profile">Profile</a></li>
	</ul>
</div>

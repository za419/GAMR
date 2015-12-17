<!DOCTYPE html>
<html>
<head>
	<?php include("../include/common.html"); ?>
	<link rel="stylesheet" type="text/css" href="../styles/host.css">
	<meta name="apple-mobile-web-app-title" content="GAMR - Host A Game">
	<meta name="og:title" content="GAMR - Host A Game">
	<title>Host A Game</title>
</head>
<body>
	<?php include("../include/header.php"); ?>
		<h1 id="title">Thank you for hosting a game!</h1>
		<h3 class="centered">We just need a little bit of information from you to set this up.</h2>
		<br>
		<form id="new-game">
			<input type="text" placeholder="Which game are you playing?" required>
			<input type="number" placeholder="How many people do you want?">
			<input type="text" placeholder="What platform are you playing on?" required>
			<input type="submit" value="Host this game">
		</form>
	<?php include("../include/footer.html"); ?>
</body>
</html>

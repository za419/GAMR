<!DOCTYPE html>
<html>
<head>
	<?php include("../include/common.html"); ?>
	<link rel="stylesheet" type="text/css" href="../styles/host.css">
	<script src="../scripts/host.js"></script>
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
			<input id="host-game" type="text" placeholder="Which game are you playing?" oninput="checkHost()" required>
			<input id="host-people" type="number" placeholder="How many people do you want?" min="1" max="256">
			<!-- TODO: Find a more reasonable max for people in a game.
			     Maybe use JS to recognize some platforms and limit it appropriately. -->
			<input id="host-platform" type="text" placeholder="What platform are you playing on?" oninput="checkHost()" required>
			<!-- Should this be a dropdown menu? -->
			<input id="host-submit" type="submit" value="Host this game" disabled>
		</form>
	<?php include("../include/footer.html"); ?>
</body>
</html>

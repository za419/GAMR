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
		<form id="new-game">
			<input type="text" placeholder="Which game are you playing?">
			<input type="number" placeholder="How many people do you want?">
			<input type="submit" value="Host this game">
		</form>
	<?php include("../include/footer.html"); ?>
</body>
</html>

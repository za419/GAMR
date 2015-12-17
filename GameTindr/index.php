<!DOCTYPE html>
<html>
<head>
	<?php include("include/common.html"); ?>
	<meta name="apple-mobile-web-app-title" content="GAMR">
	<meta name="og:title" content="GAMR">
	<title>GAMR</title>
</head>
<body>
	<?php include("include/header.php"); ?>
	<h1 id="title">About <span class="gamr">GAMR</span></h1>
		<p class="info">
			<span class="gamr">GAMR</span> was written as a team project
	for the WildHacks 2015 hackathon. It was conceptualized as a way for people
	who wish to find a party with which to play a multi-player game to find one
	another and play together. As team member <span class="teammate-name">Murphy Angelo
	</span> said, <blockquote>I think that it's disappointing how there are a lot
		of cool games that people don't really play online, and that you can't really
		find anyone to play with locally. I wish there was an easier way to find
		people to play with.</blockquote>
			<p class="info">Fellow team members <span class="teammate-name">Elana Stettin</span>
		and <span class="teammate-name">Ryan Hodin</span> agreed with this sentiment, and thus <span class="gamr">GAMR</span> was born.
	</p>
	</p>
	<p class="info">
	<span class="gamr">GAMR</span> continues to this day to be funded entirely by donations. If you like it, please consider donating via the button below.
	</p>
	<br>
	<div id=donateButtonDiv>
	<button id="donateButton" onclick="donateButton()">Donate</button>
	<br>
	</div>
	<?php include("include/footer.html"); ?>
</body>
</html>

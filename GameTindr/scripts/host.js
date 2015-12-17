function checkHost()
{
	var game=document.getElementById("host-game");
	var platform=document.getElementById("host-platform");

	document.getElementById("host-submit").disabled=(game.value.length==0 || platform.value.length==0);
}
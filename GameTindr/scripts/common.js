function signUp() {
  window.location.replace('../register/');
}

function toProfile() {
  window.location.replace('../profile/');
}

function donateButton() {
  window.location.replace('/donate/')
}

function logOut() {
  window.location.replace('../logout.php')
}

$(document).ready(function()
{
	$('#loginButton').click(function()
	{
		$('#headerLoginBox').slideDown();
	});
	$('#login-submit').click(function()
	{
		$('#headerLoginBox').slideUp();
	});
});

function checkLogin()
{
	var user=document.getElementById("loginUsername");
	var pass=document.getElementById("loginPassword");
	var elt=document.getElementById("login-submit");

	var bad=(user.value.length==0 || pass.value.length==0);
	elt.disabled=bad;

	elt.style.display=(bad ? "none" : "block");
}

function hashLoginPassword()
{
	var user=document.forms["loginForm"]["username"];
	var pass=document.forms["loginForm"]["password"];
	if (user.value.length==0 || pass.value.length==0) // Sanity check.
		return false;
	var hash=sha3_512(pass.value);
	if (true) // We need this, because the browser won't let us change the form outside of a conditional
		pass.value=hash;
}

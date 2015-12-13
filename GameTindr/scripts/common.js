function signUp() {
  window.location.replace('/register/');
}

function donateButton(){
  window.location.replace('/donate/')
}

function logOut(){
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

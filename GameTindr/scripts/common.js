function signUp() {
  window.location.replace('register.php');
}

function donateButton(){
  window.location.replace('donate.php')
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

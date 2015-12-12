function signUp() {
  window.location.replace('/register/');
}

function donateButton(){
  window.location.replace('/donate/')
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

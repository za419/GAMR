function signUp() {
  window.location.replace('../register/');
}

function toProfile() {
  window.location.replace('../profile/');
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

//Show or hide the login button based on inputs
var goodLUN=false;
var goodLPW=false;

function checkLoginUsername() {
  var username = document.getElementById("loginUsername").value;
  if (username.length!=0){
    goodLUN=true;
    if (goodLPW==true){
      var loginSubmit=document.getElementById("login-submit");
      loginSubmit.style.display="inline";
    }
  }
}

function checkLoginPassword() {
  var password = document.getElementById("loginPassword").value;
  if (password.length!=0){
    goodLPW=true;
    if (goodLUN==true){
      var loginSubmit=document.getElementById("login-submit");
      loginSubmit.style.display="inline";
    }
  }
}

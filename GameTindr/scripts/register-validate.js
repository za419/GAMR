var goodUN=false; // Is the username valid?
var goodPW=false; // Is the password valid?
var goodEM=false; // Is the email valid?

function checkUsername()
{
	goodUN=false;
	var username=document.getElementById("username");

	if (username.value.length==0)
		document.getElementById("username-error").style.display="none";
	else {
		var elt=document.getElementById("username-error");
		if (username.value.length<5) {
			elt.innerHTML="<span class='alert'>Warning: </span>Short usernames may be more common targets for attack or spam.<br />"+
				"You may want to select a longer username.";
			elt.style.display="block";
		}
		else if (username.value.length>80) {
			elt.innerHTML="Username must be under 80 characters!";
			elt.style.display="block";
		}
		// TODO: AJAX confirm that username is not already in use
		else {
			elt.style.display="none";
			goodUN=true;
			checkSubmit()
		}
	}
}

function checkPassword()
{
	goodPW=false;
	var password=document.getElementById("password");
	var confirm=document.getElementById("confirm-password");

	if (password.value.length==0)
		document.getElementById("username-error").style.display="none";
	else {
		if (password.value.length<6) {
			var elt=document.getElementById("password-error");
			elt.innerHTML="Password must be at least 6 characters.";
			elt.style.display="block";
		}
		else
			document.getElementById("password-error").style.display="none";

		if (confirm.value.length==0)
			document.getElementById("confirm-password-error").style.display="none";
		else {
			var elt=document.getElementById("confirm-password-error");
			if (confirm.value.length<6) {
				elt.innerHTML="Password too short.";
				elt.style.display="block";
			}
			else if (confirm.value!==password.value) {
				elt.innerHTML="Passwords do not match.";
				elt.style.display="block";
			}
			else {
				elt.style.display="none";
				goodPW=true;
				checkSubmit();
			}
		}
	}
}

function checkEmail()
{
	goodEM=false;
	var email=document.getElementById("email");
	var confirm=document.getElementById("confirm-email");

	if (email.value=="")
		document.getElementById("email-error").style.display="none";
	else {
		if (email.value.length>1000)
			document.getElementById("email-error").innerHTML="Email must be under 1000 characters.";
		else if (/.+@.+\..+/.test(email.value)) { // Use a regexp to make sure the email has an @ and a . (dot).
			document.getElementById("email-error").style.display="none";
			var elt=document.getElementById("confirm-email-error"); // Email-validation will check the rest, this just makes sure it looks remotely like an email
			if (confirm.value.legnth==0)
				elt.style.display="none";
			else if (confirm.value!==email.value) {
				elt.innerHTML="Emails do not match.";
				elt.style.display="block";
			}
			else {
				elt.style.display="none";
				goodEM=true;
				checkSubmit();
			}
		}
		else {
			var elt=document.getElementById("email-error");
			elt.innerHTML="Please enter a correctly-formed email address.<br>"+
				"Example: \"email@example.com\".";
			elt.style.display="block";
		}
	}
}

function checkSubmit()
{
	var elt=document.getElementById("submit");
	elt.disabled=!(goodUN && goodPW && goodEM);
}
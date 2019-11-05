
var formpopuplogin =document.getElementById("loginForm");
var loginbutton = document.getElementById("login");
var logincancelbutton = document.getElementById("logincancel");
var body =document.getElementById("main-content");

loginbutton.onclick = function(){
	formpopuplogin.style.display ="block";
	formpopupsignup.style.display = "none";
	body.style.opacity =0.5;
}
logincancelbutton.onclick = function() {
  formpopuplogin.style.display = "none";
  body.style.opacity =1;
}

// When the user clicks anywhere outside of the modal, close it

var formpopupsignup =document.getElementById("signupForm");
var signupbutton = document.getElementById("signup");
var signupcancelbutton = document.getElementById("signupcancel");

signupbutton.onclick = function(){
	formpopupsignup.style.display ="block";
	formpopuplogin.style.display = "none";
	body.style.opacity =0.5;
}
signupcancelbutton.onclick = function() {
  formpopupsignup.style.display = "none";
  body.style.opacity =1;
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == formpopupsignup || event.target == formpopuplogin) {
    formpopupsignup.style.display = "none";
    formpopuplogin.style.display = "none";
    body.style.opacity =1;
  }
}